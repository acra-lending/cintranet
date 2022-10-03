<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FastEvent;

class CDLFullCalendarController extends Controller
{
    public function index()
    {
        $fastEvents = FastEvent::all();

        return view('pages.marketing.calendars.CDL.master', ['fastEvents' => $fastEvents]);
    }
}
