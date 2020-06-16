<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FastEvent;

class FullCalendarController extends Controller
{
    public function index()
    {
        $fastEvents = FastEvent::all();

        return view('pages.learning.courses.fullcalendar.master', ['fastEvents' => $fastEvents]);
    }
}
