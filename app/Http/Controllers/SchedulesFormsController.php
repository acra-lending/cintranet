<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchedulesFormsController extends Controller
{
    public function index()
    {
        return view('pages.humanresources.schedulesforms');
    }
    
}
