<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        return view('pages.usermanagement.reports');
    }

    public function index2()
    {
        return view('pages.usermanagement.reports2');
    }
}
