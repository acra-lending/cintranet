<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessIntegrationsController extends Controller
{
    public function requests()
    {
        return view('pages.integrations.requests');
    }
}
