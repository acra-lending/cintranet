<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Post;


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

        // $retailJrProcessorForms = Post::whereRaw("find_in_set('retailJrProcessorForms', category_id)")
        // ->sortable('filename')
        // ->get();

        $retailJrProcessorChecklists = Post::whereRaw("find_in_set('retailJrProcessorChecklists', category_id)")
        ->sortable('filename')
        ->get();

        $retailJrProcessorEmailTemplates = Post::whereRaw("find_in_set('retailJrProcessorEmailTemplates', category_id)")
        ->sortable('filename')
        ->get();

        // $retailProcessorForms = Post::whereRaw("find_in_set('retailProcessorForms', category_id)")
        // ->sortable('filename')
        // ->get();

        $retailProcessorChecklists = Post::whereRaw("find_in_set('retailProcessorChecklists', category_id)")
        ->sortable('filename')
        ->get();

        // $retailLoanOfficerForms = Post::whereRaw("find_in_set('retailLoanOfficerForms', category_id)")
        // ->sortable('filename')
        // ->get();

        $retailLoanOfficerChecklists = Post::whereRaw("find_in_set('retailLoanOfficerChecklists', category_id)")
        ->sortable('filename')
        ->get();

        $retailLoanOfficerTraining = Post::whereRaw("find_in_set('retailLoanOfficerTraining', category_id)")
        ->sortable('filename')
        ->get();


        return view('pages.direct.documents')
        ->with([
            'retailDocs'                        => $retailDocs,
            'retailMLO'                         => $retailMLO,
            // 'retailCollateral'               => $retailCollateral,
            'retailEmailTemplates'              => $retailEmailTemplates,
            'retailSocialMedia'                 => $retailSocialMedia,
            // 'retailJrProcessorForms'            => $retailJrProcessorForms,
            'retailJrProcessorChecklists'       => $retailJrProcessorChecklists,
            'retailJrProcessorEmailTemplates'   => $retailJrProcessorEmailTemplates,
            // 'retailProcessorForms'              => $retailProcessorForms,
            'retailProcessorChecklists'         => $retailProcessorChecklists,
            // 'retailLoanOfficerForms'            => $retailLoanOfficerForms,
            'retailLoanOfficerChecklists'       => $retailLoanOfficerChecklists,
            'retailLoanOfficerTraining'         => $retailLoanOfficerTraining,
        ]);
    }

    public function forms()
    {

        $seconds = 86400;

        //Sort by 1-9
        $numbers = Cache::remember('retailNumbers', $seconds, function() {
            return Post::whereRaw("find_in_set('retailForms', category_id)")
            ->where('filename', 'REGEXP', '^[0-9].*$')
            ->sortable('filename')
            ->get();
        });
        

        //Sort by A-D
        $lettersAD = Cache::remember('retailLettersAD', $seconds, function() {
            return Post::whereRaw("find_in_set('retailForms', category_id)")
            ->where('filename', 'REGEXP', '^[A-Da-d].*$')
            ->sortable('filename')
            ->get();
        });
        

        //Sort by E-H
        $lettersEH = Cache::remember('retailLettersEH', $seconds, function() {
            return Post::whereRaw("find_in_set('retailForms', category_id)")
            ->where('filename', 'REGEXP', '^[E-He-h].*$')
            ->sortable('filename')
            ->get();
        });
        

        //Sort by I-L
        $lettersIL = Cache::remember('retailLettersIL', $seconds, function() {
            return Post::whereRaw("find_in_set('retailForms', category_id)")
            ->where('filename', 'REGEXP', '^[I-Li-l].*$')
            ->sortable('filename')
            ->get();
        });
        

        //Sort by M-P
        $lettersMP = Cache::remember('retailLettersMP', $seconds, function() {
            return Post::whereRaw("find_in_set('retailForms', category_id)")
            ->where('filename', 'REGEXP', '^[M-Pm-p].*$')
            ->sortable('filename')
            ->get();
        });
        

        //Sort by Q-T
        $lettersQT = Cache::remember('retailLettersQT', $seconds, function() {
            return Post::whereRaw("find_in_set('retailForms', category_id)")
            ->where('filename', 'REGEXP', '^[Q-Tq-t].*$')
            ->sortable('filename')
            ->get();    
        });
            

        //Sort by U-X
        $lettersUX = Cache::remember('retailLettersUX', $seconds, function() {
            return Post::whereRaw("find_in_set('retailForms', category_id)")
            ->where('filename', 'REGEXP', '^[U-Xu-x].*$')
            ->sortable('filename')
            ->get();    
        });
        
    
        //Sort by Y-Z
        $lettersYZ = Cache::remember('retailLettersYZ', $seconds, function() {
            return Post::whereRaw("find_in_set('retailForms', category_id)")
            ->where('filename', 'REGEXP', '^[Y-Zy-z].*$')
            ->get();
        
        });


        return view('pages.direct.forms')
        ->with([
            'numbers'               => $numbers,
            'lettersAD'             => $lettersAD,
            'lettersEH'             => $lettersEH,
            'lettersIL'             => $lettersIL,
            'lettersMP'             => $lettersMP,
            'lettersQT'             => $lettersQT,
            'lettersUX'             => $lettersUX,
            'lettersYZ'             => $lettersYZ,
        ]);
    }

    public function processes()
    {
        // $retailJrProcessorForms = Post::whereRaw("find_in_set('retailJrProcessorForms', category_id)")
        // ->sortable('filename')
        // ->get();

        $retailJrProcessorChecklists = Post::whereRaw("find_in_set('retailJrProcessorChecklists', category_id)")
        ->sortable('filename')
        ->get();

        $retailJrProcessorEmailTemplates = Post::whereRaw("find_in_set('retailJrProcessorEmailTemplates', category_id)")
        ->sortable('filename')
        ->get();

        $retailJrProcessingGuides = Post::whereRaw("find_in_set('retailJrProcessingGuides', category_id)")
        ->sortable('filename')
        ->get();

        $retailJrSystemGuides = Post::whereRaw("find_in_set('retailJrSystemGuides', category_id)")
        ->sortable('filename')
        ->get();

        // $retailProcessorForms = Post::whereRaw("find_in_set('retailProcessorForms', category_id)")
        // ->sortable('filename')
        // ->get();

        $retailProcessorChecklists = Post::whereRaw("find_in_set('retailProcessorChecklists', category_id)")
        ->sortable('filename')
        ->get();

        $retailProcessorTools = Post::whereRaw("find_in_set('retailProcessorTools', category_id)")
        ->sortable('filename')
        ->get();

        $retailVendorContacts = Post::whereRaw("find_in_set('retailVendorContacts', category_id)")
        ->sortable('filename')
        ->get();

        $retailProcessingGuides = Post::whereRaw("find_in_set('retailProcessingGuides', category_id)")
        ->sortable('filename')
        ->get();

        $retailSystemGuides = Post::whereRaw("find_in_set('retailSystemGuides', category_id)")
        ->sortable('filename')
        ->get();

        // $retailLoanOfficerForms = Post::whereRaw("find_in_set('retailLoanOfficerForms', category_id)")
        // ->sortable('filename')
        // ->get();

        $retailLoanOfficerChecklists = Post::whereRaw("find_in_set('retailLoanOfficerChecklists', category_id)")
        ->sortable('filename')
        ->get();

        $retailLoanOfficerTraining = Post::whereRaw("find_in_set('retailLoanOfficerTraining', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.direct.processes')->with([
            'retailJrProcessorChecklists'       => $retailJrProcessorChecklists,
            'retailJrProcessorEmailTemplates'   => $retailJrProcessorEmailTemplates,
            'retailJrProcessingGuides'          => $retailJrProcessingGuides,
            'retailJrSystemGuides'              => $retailJrSystemGuides,
            'retailProcessorChecklists'         => $retailProcessorChecklists,
            'retailProcessorTools'              => $retailProcessorTools,
            'retailVendorContacts'              => $retailVendorContacts,
            'retailProcessingGuides'            => $retailProcessingGuides,
            'retailSystemGuides'                => $retailSystemGuides,
            'retailLoanOfficerChecklists'       => $retailLoanOfficerChecklists,
            'retailLoanOfficerTraining'         => $retailLoanOfficerTraining,
            
        ]);
    }

    
}
