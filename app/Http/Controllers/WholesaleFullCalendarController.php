<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WholesaleFastEvent;

class WholesaleFullCalendarController extends Controller
{
    public function index()
    {
        $fastEvents = WholesaleFastEvent::all();

        return view('pages.marketing.calendars.Wholesale.master', ['fastEvents' => $fastEvents]);
    }
}
