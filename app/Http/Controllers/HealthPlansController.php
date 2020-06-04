<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class HealthPlansController extends Controller
{
    public function index()
    {
        return view('pages.humanresources.healthplan');
    }
}
