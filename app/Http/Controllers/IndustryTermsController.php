<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustryTermsController extends Controller
{
    public function index()
    {
        return view('pages.learning.courses.industryterms.index');
    }
}
