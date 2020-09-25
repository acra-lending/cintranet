<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class RatesheetCategoryController extends Controller
{
    public function index()
    {
        //Wholesale Current Ratesheets
        $wsOmbsvoe      = Post::whereRaw("find_in_set('wsOmbsvoe', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        $wsNonprime     = Post::whereRaw("find_in_set('wsNonprime', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();
        $wsOdf          = Post::whereRaw("find_in_set('wsOdf', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();
        $wsOdfPlus      = Post::whereRaw("find_in_set('wsOdfPlus', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        //Wholesale Past Ratesheets
        $wsOmbsvoe_past     = Post::whereRaw("find_in_set('wsOmbsvoe', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    // ->skip(1)
                                    ->take(10)
                                    ->get();
        $wsNonprime_past    = Post::whereRaw("find_in_set('wsNonprime', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->skip(1)
                                    ->take(10)
                                    ->get();
        $wsOdf_past         = Post::whereRaw("find_in_set('wsOdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    // ->skip(1)
                                    ->take(10)
                                    ->get();
        $wsOdfPlus_past     = Post::whereRaw("find_in_set('wsOdfPlus', category_id)")
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
                    'wsOmbsvoe'         => $wsOmbsvoe,
                    'wsNonprime'        => $wsNonprime,
                    'wsOdf'             => $wsOdf,
                    'wsOdfPlus'         => $wsOdfPlus,
                    'wsOmbsvoe_past'    => $wsOmbsvoe_past,
                    'wsNonprime_past'   => $wsNonprime_past,
                    'wsOdf_past'        => $wsOdf_past,
                    'wsOdfPlus_past'    => $wsOdfPlus_past,
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
