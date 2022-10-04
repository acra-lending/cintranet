<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CDLFastEvent;

class CDLFullCalendarController extends Controller
{
    public function index()
    {
        $fastEvents = CDLFastEvent::all();

        return view('pages.marketing.calendars.CDL.master', ['fastEvents' => $fastEvents]);
    }
}
