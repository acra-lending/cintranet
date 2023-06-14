<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Vimeo\Laravel\Facades\Vimeo;
use Carbon\Carbon;

class Principal401kController extends Controller
{
    public function index()
    {        
        $hr401k = Post::where('category_id', 'hr401k')
        ->orderBy('created_at', 'desc')
        ->get();


        return view('pages.humanresources.401k')
        ->with([
            'hr401k'    => $hr401k,
        ]);
    }
}
