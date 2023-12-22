<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Vimeo\Laravel\Facades\Vimeo;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class Principal401kController extends Controller
{
    public function index()
    {
        $hr401k = Post::where('category_id', 'hr401k')
        ->orderBy('created_at', 'desc')
        ->get();

        $url = Cache::remember('video401k', 86400, function() {
            return Vimeo::request("/users/124219438/projects/18722968/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $video401k = $data;

        return view('pages.humanresources.401k')
        ->with([
            'hr401k'    => $hr401k,
            'video401k' => $video401k,
        ]);
    }
}
