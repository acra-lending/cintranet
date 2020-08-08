<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ITSupportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;
    public $itemRequest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail, $itemRequest)
    {
        $this->mail = $mail;
        $this->itemRequest = $itemRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.infotech.ticket')
                    ->subject('IT Support Request');
    }
}
