<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BenefitsController extends Controller
{
    public function index()
    {
        return view('pages.humanresources.benefits');
    }
}
