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
        ->orderBy('filename', 'asc')
        ->get();

        //Suggestions and Referrals
        $hrSuggestions = Post::where('category_id', 'hrSuggestions')
        ->orderBy('filename', 'asc')
        ->get();
        
        //New Hire Forms and Notices
        $hrNewHire = Post::where('category_id', 'hrNewHire')
        ->orderBy('filename', 'asc')
        ->get();

        //State and Federal Tax Forms
        $hrStateAndFedTaxForms = Post::where('category_id', 'hrStateAndFedTaxForms')
        ->orderBy('filename', 'asc')
        ->get();

        //Health Topics and Suggestions
        $hrHealthTopics = Post::where('category_id', 'hrHealthTopics')
        ->orderBy('filename', 'asc')
        ->get();
        
        //Manager Tools
        $hrManagerTools = Post::where('category_id', 'hrManagerTools')
        ->orderBy('filename', 'asc')
        ->get();

        //Benefits
        $hrBenefits = Post::where('category_id', 'hrBenefits')
        ->orderBy('filename', 'asc')
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
}
