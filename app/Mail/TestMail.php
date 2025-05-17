<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    public function __construct($data)
    {
        $this->mailData = $data;
    }

    public function build()
    {
        return $this->subject($this->mailData['subject'] ?? 'Central PAMJE Contact')
            ->view('emails.test')
            ->with('data', $this->mailData);
    }
}
