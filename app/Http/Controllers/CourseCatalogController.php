<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseCatalogController extends Controller
{
    public function index()
    {
        return view('pages.learning.courses.catalog.index');
    }
}
