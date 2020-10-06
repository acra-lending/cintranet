<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class RatesheetCategoryController extends Controller
{
    public function index()
    {
        //AE Wholesale Current Ratesheets
        $wsOmbsvoeAE    = Post::whereRaw("find_in_set('wsOmbsvoeAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        $wsNonprimeAE   = Post::whereRaw("find_in_set('wsNonprimeAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();
        $wsOdfAE        = Post::whereRaw("find_in_set('wsOdfAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();
        $wsOdfPlusAE    = Post::whereRaw("find_in_set('wsOdfPlusAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        //AE Wholesale Past Ratesheets
        $wsOmbsvoeAE_past   = Post::whereRaw("find_in_set('wsOmbsvoeAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                // ->skip(1)
                                ->take(10)
                                ->get();
        $wsNonprimeAE_past  = Post::whereRaw("find_in_set('wsNonprimeAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->skip(1)
                                ->take(10)
                                ->get();
        $wsOdfAE_past       = Post::whereRaw("find_in_set('wsOdfAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                // ->skip(1)
                                ->take(10)
                                ->get();
        $wsOdfPlusAE_past   = Post::whereRaw("find_in_set('wsOdfPlusAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                // ->skip(1)
                                ->take(10)
                                ->get();


        //Correspondent Current Ratesheets PDF
        $corrOmbsvoePdf     = Post::whereRaw("find_in_set('corrOmbsvoePdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrNonprimePdf    = Post::whereRaw("find_in_set('corrNonprimePdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrOdfPdf         = Post::whereRaw("find_in_set('corrOdfPdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrOdfPlusPdf     = Post::whereRaw("find_in_set('corrOdfPlusPdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        
        //Correspondent Current Ratesheets Excel
        $corrOmbsvoeXlsx    = Post::whereRaw("find_in_set('corrOmbsvoeXlsx', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrNonprimeXlsx   = Post::whereRaw("find_in_set('corrNonprimeXlsx', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrOdfXlsx        = Post::whereRaw("find_in_set('corrOdfXlsx', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrOdfPlusXlsx    = Post::whereRaw("find_in_set('corrOdfPlusXlsx', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        
        return view('pages.sales.ratesheets')
                ->with([
                    'wsOmbsvoeAE'         => $wsOmbsvoeAE,
                    'wsNonprimeAE'        => $wsNonprimeAE,
                    'wsOdfAE'             => $wsOdfAE,
                    'wsOdfPlusAE'         => $wsOdfPlusAE,
                    'wsOmbsvoeAE_past'    => $wsOmbsvoeAE_past,
                    'wsNonprimeAE_past'   => $wsNonprimeAE_past,
                    'wsOdfAE_past'        => $wsOdfAE_past,
                    'wsOdfPlusAE_past'    => $wsOdfPlusAE_past,
                    'corrOmbsvoePdf'    => $corrOmbsvoePdf,
                    'corrNonprimePdf'   => $corrNonprimePdf,
                    'corrOdfPdf'        => $corrOdfPdf,
                    'corrOdfPlusPdf'    => $corrOdfPlusPdf,
                    'corrOmbsvoeXlsx'   => $corrOmbsvoeXlsx,
                    'corrNonprimeXlsx'  => $corrNonprimeXlsx,
                    'corrOdfXlsx'       => $corrOdfXlsx,
                    'corrOdfPlusXlsx'   => $corrOdfPlusXlsx,
                ]);
    }
    

}
