<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['jumboRateSheets']]);
    }

    public function jumboRateSheets()
    {
        return view('home');
    }
}
