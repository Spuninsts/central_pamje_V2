<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GenericMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    public function __construct($data)
    {
        $this->mailData = $data;
    }

    public function build()
    {
        $template = $this->mailData['template'] ?? 'emails.generic';

        return $this->subject($this->mailData['subject'])
            ->view($template)
            ->with('data', $this->mailData['data'] ?? []);
    }
}
