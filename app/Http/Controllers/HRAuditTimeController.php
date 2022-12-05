<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRAuditTimeController extends Controller
{
    public function index()
    {
        //Template Page
        return view('pages.humanresources.audit');
    }
}
