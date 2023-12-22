<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Post;

class VideosController extends Controller
{
    public function __construct()
    {
        $this->seconds = 86400;
    }

    public function sales()
    {
        $url = Cache::remember('webinarResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/3216024/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $webinarResults = $data;

        $url = Cache::remember('panelResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/3513662/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $panelResults = $data;

        $url = Cache::remember('WStrainingResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/4682588/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $trainingResults = $data;
        
        $url = Cache::remember('nonQEmmysResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/7601708/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $nonQEmmysResults = $data;

        $url = Cache::remember('newAEWeeklyReviewResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/7601613/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $newAEWeeklyReviewResults = $data;

        //Sales Tools

        $salesVideos = Cache::rememberForever('salesVideos', function() {
            return Post::whereRaw("find_in_set('salesVideos',category_id)")
            ->sortable('filename')
            ->get();
        });

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

        $url = Cache::remember('monthlyMeetings', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/3216025/videos", ['per_page' => 99], 'GET');
        });
        $url = $url['body'];
        $data = $url['data'];
        $monthlyMeetings = $data;

        return view('pages.monthlymeetings.videos.monthlymeetings', compact('monthlyMeetings'));
    }

    public function operations()
    {
        $url = Cache::remember('operationsAll', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/3384652/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $operationsAll = $data;

        $url = Cache::remember('operationsNewHire', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/3216026/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $operationsNewHire = $data;

        $url = Cache::remember('operationsTM', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/3384582/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $operationsTM = $data;

        $url = Cache::remember('operationsFunding', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/3384616/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $operationsFunding = $data;

        $url = Cache::remember('uwRoundtable', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/3708205/videos", ['per_page' => 99], 'GET');
        });

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
        $url = Cache::remember('humanresources', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/4461110/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $humanresources = $data;

        $url = Cache::remember('humanresourcesBenefits', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/4606611/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $humanresourcesBenefits = $data;

        $url = Cache::remember('humanresourcesBenefitsAdditional', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/13859192/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $humanresourcesBenefitsAdditional = $data;

        $url = Cache::remember('humanresourcesNewHire', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/10233750/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $humanresourcesNewHire = $data;

        $url = Cache::remember('humanresources', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/10233750/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $humanresourcesNewHire = $data;

        $url = Cache::remember('humanresourcesDayforce', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/12655945/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $humanresourcesDayforce = $data;

        $url = Cache::remember('humanresourcesCertify', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/12948723/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $humanresourcesCertify = $data;

        $url = Cache::remember('humanresourcesTripActions', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/14773235/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $humanresourcesTripActions = $data;

        return view('pages.humanresources.videos.humanresources', 
            compact([
            'humanresources',
            'humanresourcesBenefits',
            'humanresourcesBenefitsAdditional',
            'humanresourcesNewHire',
            'humanresourcesDayforce',
            'humanresourcesCertify',
            'humanresourcesTripActions',
            ]));
    }

    public function infotech()
    {
        $url = Cache::remember('infotech', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/5425086/videos", ['per_page' => 99], 'GET');
        });

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
        $url = Cache::remember('trainingResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/6225207/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $trainingResults = $data;
        
        $url = Cache::remember('productResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/12778179/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $productResults = $data;

        $url = Cache::remember('departmentProcessesResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/12778184/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $departmentProcessesResults = $data;

        return view('pages.direct.videos', 
            compact([
                'trainingResults',
                'productResults',
                'departmentProcessesResults'
            ]));
    }

    public function legal()
    {
        $url = Cache::remember('legalResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/7883200/videos", ['per_page' => 99], 'GET');
        });

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
        $url = Cache::remember('fixAndFliptrainingResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/10069925/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $fixAndFliptrainingResults = $data;

        $url = Cache::remember('fixAndFlipAEResults', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/12515769/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $fixAndFlipAEResults = $data;

        return view('pages.fixandflip.videos', 
            compact([
                'fixAndFliptrainingResults',
                'fixAndFlipAEResults'
            ]));
    }

    public function humanResources401kVideos()
    {
        $url = Cache::remember('humanresources401k', $this->seconds, function() {
           return Vimeo::request("/users/124219438/projects/18722968/videos", ['per_page' => 99], 'GET');
        });

        $url = $url['body'];
        $data = $url['data'];
        $humanresources401k = $data;

        

        return view('pages.humanresources.401k', 
            compact([
                'humanresources401k',
            ]));
    }





}
