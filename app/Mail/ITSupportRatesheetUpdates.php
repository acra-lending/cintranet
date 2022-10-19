<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ITSupportRatesheetUpdates extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;
    public $systemRequest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail, $systemRequest)
    {
        $this->mail = $mail;
        $this->systemRequest = $systemRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.infotech.ratesheetupdates')
                    ->from('webupdates@citadelservicing.onmicrosoft.com')
                    ->subject('New/Update Ratesheet Request');
    }
}
