<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicingToolsController extends Controller
{
    public function index()
    {
        return view('pages.servicing.tools');
    }
}
