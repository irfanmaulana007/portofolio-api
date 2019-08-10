<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailer as Mail;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $email, $subject, $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $subject, $msg)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->msg = $msg;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to(env('MAIL_TO_ADDRESS'))
                    ->subject(ucwords($this->subject))
                    ->view('mail');
    }
}
