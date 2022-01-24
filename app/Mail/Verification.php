<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Verification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('verified');
        // dd(env('MAIL_HOST'),env('MAIL_MAILER'),env('MAIL_PORT'),env('MAIL_USERNAME'),env('MAIL_PASSWORD'),env('MAIL_ENCRYPTION'),env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'));
        return $this->from(env('MAIL_FROM_ADDRESS'))->subject('Verification')
        ->view('verified')->with(['content' => $this->content]);
    }
}
