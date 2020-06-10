<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Principal401kController extends Controller
{
    public function index()
    {
        $booklet = Post::where('category_id', 'hr401k')
        ->where('filename', 'like', '%enrollment_overview%')
        ->orderBy('created_at', 'desc')
        ->first();

        return view('pages.humanresources.401k')
        ->with([
            'booklet' => $booklet,
        ]);
    }
}
