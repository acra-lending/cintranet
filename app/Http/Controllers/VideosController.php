<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;
use Carbon\Carbon;
use App\Post;

class VideosController extends Controller
{
    public function sales()
    {
        $url = Vimeo::request("/users/124219438/projects/3216024/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $webinarResults = $data;

        $url = Vimeo::request("/users/124219438/projects/3513662/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $panelResults = $data;

        $url = Vimeo::request("/users/124219438/projects/4682588/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $trainingResults = $data;
        
        $url = Vimeo::request("/users/124219438/projects/7601708/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $nonQEmmysResults = $data;

        $url = Vimeo::request("/users/124219438/projects/7601613/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $newAEWeeklyReviewResults = $data;

        //Sales Tools
        $salesVideos = Post::whereRaw("find_in_set('salesVideos',category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.sales.videos')
        ->with(compact([
            'webinarResults',
            'panelResults',
            'trainingResults',
            'nonQEmmysResults',
            'newAEWeeklyReviewResults'
        ]))
        ->with([
            'salesVideos'   => $salesVideos,
        ]);
    }

    public function monthlymeetings()
    {
        $url = Vimeo::request("/users/124219438/projects/3216025/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $monthlyMeetings = $data;

        return view('pages.monthlymeetings.videos.monthlymeetings', compact('monthlyMeetings'));
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

        $url = Vimeo::request("/users/124219438/projects/3708205/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $uwRoundtable = $data;

        return view('pages.operations.videos.operations', 
            compact([
                'operationsAll',
                'operationsNewHire',
                'operationsTM',
                'operationsFunding',
                'uwRoundtable',
            ]));
    }

    public function humanresources()
    {
        $url = Vimeo::request("/users/124219438/projects/4461110/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $humanresources = $data;

        $url = Vimeo::request("/users/124219438/projects/4606611/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $humanresourcesBenefits = $data;

        $url = Vimeo::request("/users/124219438/projects/10233750/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $humanresourcesNewHire = $data;

        return view('pages.humanresources.videos.humanresources', 
            compact([
            'humanresources',
            'humanresourcesBenefits',
            'humanresourcesNewHire'
            ]));
    }

    public function infotech()
    {
        $url = Vimeo::request("/users/124219438/projects/5425086/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $infotech = $data;

        return view('pages.infotech.videos.infotech', 
            compact([
            'infotech',
            ]));
    }

    public function consumerDirect()
    {
        $url = Vimeo::request("/users/124219438/projects/6225207/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $trainingResults = $data;

        return view('pages.direct.videos', 
            compact([
                'trainingResults'
            ]));
    }

    public function legal()
    {
        $url = Vimeo::request("/users/124219438/projects/7883200/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $legalResults = $data;

        return view('pages.legal.videos.legal', 
            compact([
                'legalResults'
            ]));
    }

    public function fixAndFlip()
    {
        $url = Vimeo::request("/users/124219438/projects/10069925/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $fixAndFliptrainingResults = $data;

        $url = Vimeo::request("/users/124219438/projects/12515769/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $fixAndFlipAEResults = $data;

        return view('pages.fixandflip.videos', 
            compact([
                'fixAndFliptrainingResults',
                'fixAndFlipAEResults'
            ]));
    }





}
