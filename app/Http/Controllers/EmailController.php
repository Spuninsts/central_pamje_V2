<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\JsonResponse;

class EmailController extends Controller
{
    /**
     * Send a test email
     */
    public function sendTestEmail(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'to' => 'required|email',
                'subject' => 'nullable|string|max:255',
                'message' => 'nullable|string'
            ]);

            $data = [
                'subject' => $request->subject ?? 'Test Email from Laravel',
                'message' => $request->message ?? 'This is a test email from Laravel Controller',
            ];

            Mail::to($request->to)->send(new TestMail($data));

            return response()->json([
                'success' => true,
                'message' => 'Email sent successfully!'
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send email: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Send a generic email with template
     */
    public function sendEmail(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'to' => 'required|email',
                'template' => 'required|string',
                'subject' => 'required|string|max:255',
                'data' => 'nullable|array'
            ]);

            $mailData = [
                'subject' => $request->subject,
                'template' => $request->template,
                'data' => $request->data ?? []
            ];

            Mail::to($request->to)->send(new \App\Mail\GenericMail($mailData));

            return response()->json([
                'success' => true,
                'message' => 'Email sent successfully!'
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send email: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Send bulk emails
     */
    public function sendBulkEmails(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'recipients' => 'required|array',
                'recipients.*.email' => 'required|email',
                'recipients.*.name' => 'nullable|string',
                'subject' => 'required|string|max:255',
                'template' => 'required|string',
                'data' => 'nullable|array'
            ]);

            $successCount = 0;
            $errorCount = 0;
            $errors = [];

            foreach ($request->recipients as $recipient) {
                try {
                    $mailData = [
                        'subject' => $request->subject,
                        'template' => $request->template,
                        'data' => array_merge($request->data ?? [], [
                            'recipient_name' => $recipient['name'] ?? 'User'
                        ])
                    ];

                    Mail::to($recipient['email'], $recipient['name'] ?? null)
                        ->send(new \App\Mail\GenericMail($mailData));

                    $successCount++;
                } catch (\Exception $e) {
                    $errorCount++;
                    $errors[] = [
                        'email' => $recipient['email'],
                        'error' => $e->getMessage()
                    ];
                }
            }

            return response()->json([
                'success' => $errorCount === 0,
                'message' => "Sent {$successCount} emails successfully. {$errorCount} failed.",
                'summary' => [
                    'total' => count($request->recipients),
                    'success' => $successCount,
                    'failed' => $errorCount,
                    'errors' => $errors
                ]
            ], $errorCount > 0 ? 206 : 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send bulk emails: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Test mail configuration
     */
    public function testConfiguration(): JsonResponse
    {
        try {
            // Try to create a mail instance to test configuration
            Mail::mailer();

            return response()->json([
                'success' => true,
                'message' => 'Mail configuration is valid!',
                'config' => [
                    'driver' => config('mail.default'),
                    'host' => config('mail.mailers.smtp.host'),
                    'port' => config('mail.mailers.smtp.port'),
                    'encryption' => config('mail.mailers.smtp.encryption'),
                    'username' => config('mail.mailers.smtp.username') ? 'Set' : 'Not set',
                ]
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Mail configuration error: ' . $e->getMessage()
            ], 500);
        }
    }


    public function sendContactEmail(Request $request)
    {
        try {
            // Validate incoming request
            $validated = $request->validate([
                'from_email' => 'required|email',
                'subject' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'message' => 'required|string'
            ]);

            // Prepare email data
            $data = [
                'subject' => $validated['subject'],
                'message' => $validated['message'],
                'name' => $validated['name'],
                'from_email' => $validated['from_email'], // Store sender's email for reply
            ];

            // Send copy to the sender
            Mail::to($validated['from_email'])->send(new TestMail($data));

            // Also send to your company email (optional)
            Mail::to(config('mail.from.address'))->send(new TestMail($data));

            // Return appropriate response based on request type
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Your message has been sent successfully, you will receive a copy of this email.'
                ]);
            }

            return back()->with('success', 'Your message has been sent successfully, you will receive a copy of this email.');

        } catch (\Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to send your message. Please try again later.'
                ], 500);
            }

            return back()->with('error', 'Failed to send your message. Please try again later.');
        }
    }

}
