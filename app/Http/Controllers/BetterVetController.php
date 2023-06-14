<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Vimeo\Laravel\Facades\Vimeo;
use Carbon\Carbon;

class BetterVetController extends Controller
{
    public function index()
    {        
        $better = Post::where('category_id', 'better')
        ->orderBy('created_at', 'desc')
        ->get();


        return view('pages.humanresources.better')
        ->with([
            'better'    => $better,
        ]);
    }
}
