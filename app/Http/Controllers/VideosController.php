<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;
use Carbon\Carbon;

class VideosController extends Controller
{
    public function webinars()
    {
        $url = Vimeo::request("/users/124219438/projects/3216024/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $webinarResults = $data;

        return view('pages.videos.webinars', compact('webinarResults'));
    }
    public function monthlymeetings()
    {
        $url = Vimeo::request("/users/124219438/projects/3216025/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $webinarResults = $data;

        return view('pages.videos.monthlymeetings', compact('webinarResults'));
    }
    public function operations()
    {
        $url = Vimeo::request("/users/124219438/projects/3216026/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $webinarResults = $data;

        return view('pages.videos.operations', compact('webinarResults'));
    }
    public function sales()
    {
        $url = Vimeo::request("/users/124219438/projects/3216027/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $webinarResults = $data;

        return view('pages.videos.sales', compact('webinarResults'));
    }




}
