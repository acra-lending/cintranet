<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FastEvent;

class WholesaleFullCalendarController extends Controller
{
    public function index()
    {
        $fastEvents = FastEvent::all();

        return view('pages.marketing.calendars.Wholesale.master', ['fastEvents' => $fastEvents]);
    }
}
