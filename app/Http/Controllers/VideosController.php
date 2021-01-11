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
        $url = Vimeo::request("/users/124219438/projects/3384652/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $operationsAll = $data;

        $url = Vimeo::request("/users/124219438/projects/3216026/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $operationsNewHire = $data;

        $url = Vimeo::request("/users/124219438/projects/3384582/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $operationsTM = $data;

        $url = Vimeo::request("/users/124219438/projects/3384616/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $operationsFunding = $data;

        return view('pages.videos.operations', 
            compact([
                'operationsAll',
                'operationsNewHire',
                'operationsTM',
                'operationsFunding',
            ]));
    }





}
