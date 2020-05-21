<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Principal401kController extends Controller
{
    public function index()
    {
        return view('pages.humanresources.401k');
    }
}
