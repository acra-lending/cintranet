<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class DirectToConsumerController extends Controller
{
    public function index() 
    {
        //Retail Documents
        $retailDocs = Post::whereRaw("find_in_set('retailDocs', category_id)")
        ->sortable('filename')
        ->get();
        
        //Retail MLO Licenses
        $retailMLO = Post::whereRaw("find_in_set('retailMLO', category_id)")
        ->sortable('filename')
        ->get();

        // $retailCollateral = Post::whereRaw("find_in_set('retailCollateral', category_id)")
        // ->sortable('filename')
        // ->get();

        $retailEmailTemplates = Post::whereRaw("find_in_set('retailEmailTemplates', category_id)")
        ->sortable('filename')
        ->get();

        $retailSocialMedia = Post::whereRaw("find_in_set('retailSocialMedia', category_id)")
        ->sortable('filename')
        ->get();

        $retailJrProcessorForms = Post::whereRaw("find_in_set('retailJrProcessorForms', category_id)")
        ->sortable('filename')
        ->get();

        $retailJrProcessorChecklists = Post::whereRaw("find_in_set('retailJrProcessorChecklists', category_id)")
        ->sortable('filename')
        ->get();

        $retailProcessorForms = Post::whereRaw("find_in_set('retailProcessorForms', category_id)")
        ->sortable('filename')
        ->get();

        $retailProcessorChecklists = Post::whereRaw("find_in_set('retailProcessorChecklists', category_id)")
        ->sortable('filename')
        ->get();

        $retailLoanOfficerForms = Post::whereRaw("find_in_set('retailLoanOfficerForms', category_id)")
        ->sortable('filename')
        ->get();

        $retailLoanOfficerChecklists = Post::whereRaw("find_in_set('retailLoanOfficerChecklists', category_id)")
        ->sortable('filename')
        ->get();

        $retailLoanOfficerTraining = Post::whereRaw("find_in_set('retailLoanOfficerTraining', category_id)")
        ->sortable('filename')
        ->get();


        return view('pages.direct.documents')
        ->with([
            'retailDocs'                    => $retailDocs,
            'retailMLO'                     => $retailMLO,
            // 'retailCollateral'           => $retailCollateral,
            'retailEmailTemplates'          => $retailEmailTemplates,
            'retailSocialMedia'             => $retailSocialMedia,
            'retailJrProcessorForms'        => $retailJrProcessorForms,
            'retailJrProcessorChecklists'   => $retailJrProcessorChecklists,
            'retailJrProcessorChecklists'   => $retailJrProcessorChecklists,
            'retailProcessorForms'          => $retailProcessorForms,
            'retailProcessorChecklists'     => $retailProcessorChecklists,
            'retailLoanOfficerForms'        => $retailLoanOfficerForms,
            'retailLoanOfficerChecklists'   => $retailLoanOfficerChecklists,
            'retailLoanOfficerTraining'   => $retailLoanOfficerTraining,
        ]);
    }

    
}
