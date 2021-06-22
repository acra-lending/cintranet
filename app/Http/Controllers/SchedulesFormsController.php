<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SchedulesFormsController extends Controller
{
    public function index()
    {
        //Schedules
        $hrSchedules = Post::where('category_id', 'hrSchedules')
        ->sortable('filename', 'asc')
        ->get();

        //Suggestions and Referrals
        $hrSuggestions = Post::where('category_id', 'hrSuggestions')
        ->sortable('filename', 'asc')
        ->get();
        
        //New Hire Forms and Notices
        $hrNewHire = Post::where('category_id', 'hrNewHire')
        ->sortable('filename', 'asc')
        ->get();

        //State and Federal Tax Forms
        $hrStateAndFedTaxForms = Post::where('category_id', 'hrStateAndFedTaxForms')
        ->sortable('filename', 'asc')
        ->get();

        //Health Topics and Suggestions
        $hrHealthTopics = Post::where('category_id', 'hrHealthTopics')
        ->sortable('filename', 'asc')
        ->get();
        
        //Manager Tools
        $hrManagerTools = Post::where('category_id', 'hrManagerTools')
        ->sortable('filename', 'asc')
        ->get();

        //Benefits
        $hrBenefits = Post::where('category_id', 'hrBenefits')
        ->sortable('filename', 'asc')
        ->get();

        return view('pages.humanresources.schedulesforms')
        ->with([
            'hrSchedules'           => $hrSchedules,
            'hrSuggestions'         => $hrSuggestions,
            'hrNewHire'             => $hrNewHire,
            'hrStateAndFedTaxForms' => $hrStateAndFedTaxForms,
            'hrHealthTopics'        => $hrHealthTopics,
            'hrManagerTools'        => $hrManagerTools,
            'hrBenefits'            => $hrBenefits,
        ]);
    }
    
    public function recruitment()
    {

        //Social Media Images
        $hrSocialMedia = Post::whereRaw("find_in_set('hrSocialMedia', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        //Collateral
        $hrFlyers = Post::whereRaw("find_in_set('hrFlyers', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        //Videos
        $hrVideos = Post::whereRaw("find_in_set('hrVideos', category_id)")
        ->sortable('filename', 'asc')
        ->get();


        return view('pages.humanresources.recruitment')
        ->with([
            'hrSocialMedia'     => $hrSocialMedia,
            'hrFlyers'          => $hrFlyers,
            'hrVideos'          => $hrVideos,
        ]);
    }
}
