<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\JumboPrimeRatesheetUpdate;
use Mail;
use App\User;
use DB;

class JumboPrimeRatesheetUpdateController extends Controller
{
    public function submit()
    {
        $recipients = User::pluck('email')->toArray();

        // dd($recipients);
        foreach ($recipients as $recipient) {
            Mail::to($recipient)
            ->queue(new JumboPrimeRatesheetUpdate());
        }

        return redirect ('/sales/ratesheets')->with ('success', 'Notification sent');
    }
}
