<?php

namespace App\Listeners;

use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Http\Request;
use DB;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {

    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = $event->user;
        $id = $event->user->id;
        $lastvisit = Carbon::now()->toDateTimeString();
        $user->lastvisitDate = $lastvisit;
        
        DB::table('s2zar_users')->where('id', $id)->update(['lastvisitDate' => $lastvisit]);
    }
}
