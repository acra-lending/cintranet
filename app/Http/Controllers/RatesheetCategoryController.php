<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class RatesheetCategoryController extends Controller
{
    public function index()
    {
        //Wholesale Current Ratesheets
        $wsOmbsvoe      = Post::where('category_id', 'wsOmbsvoe')
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        $wsNonprime     = Post::where('category_id', 'wsNonprime')
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();
        $wsOdf          = Post::where('category_id', 'wsOdf')
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();
        $wsOdfPlus      = Post::where('category_id', 'wsOdfPlus')
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        //Wholesale Past Ratesheets
        $wsOmbsvoe_past     = Post::where('category_id', 'wsOmbsvoe')
                                    ->orderBy('created_at', 'desc')
                                    ->skip(1)
                                    ->take(10)
                                    ->get();
        $wsNonprime_past    = Post::where('category_id', 'wsNonprime')
                                    ->orderBy('created_at', 'desc')
                                    ->skip(1)
                                    ->take(10)
                                    ->get();
        $wsOdf_past         = Post::where('category_id', 'wsOdf')
                                    ->orderBy('created_at', 'desc')
                                    ->skip(1)
                                    ->take(10)
                                    ->get();
        $wsOdfPlus_past     = Post::where('category_id', 'wsOdfPlus')
                                    ->orderBy('created_at', 'desc')
                                    ->skip(1)
                                    ->take(10)
                                    ->get();

        //Correspondent Current Ratesheets PDF
        $corrOmbsvoePdf     = Post::where('category_id', 'corrOmbsvoePdf')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrNonprimePdf    = Post::where('category_id', 'corrNonprimePdf')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrOdfPdf         = Post::where('category_id', 'corrOdfPdf')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrOdfPlusPdf     = Post::where('category_id', 'corrOdfPlusPdf')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        
        //Correspondent Current Ratesheets Excel
        $corrOmbsvoeXlsx    = Post::where('category_id', 'corrOmbsvoeXlsx')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrNonprimeXlsx   = Post::where('category_id', 'corrNonprimeXlsx')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrOdfXlsx        = Post::where('category_id', 'corrOdfXlsx')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        $corrOdfPlusXlsx    = Post::where('category_id', 'corrOdfPlusXlsx')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
        
        return view('pages.sales.ratesheets')
                ->with('wsOmbsvoe', $wsOmbsvoe)
                ->with('wsNonprime', $wsNonprime)
                ->with('wsOdf', $wsOdf)
                ->with('wsOdfPlus', $wsOdfPlus)
                ->with('wsOmbsvoe_past', $wsOmbsvoe_past)
                ->with('wsNonprime_past', $wsNonprime_past)
                ->with('wsOdf_past', $wsOdf_past)
                ->with('wsOdfPlus_past', $wsOdfPlus_past)
                ->with('corrOmbsvoePdf', $corrOmbsvoePdf)
                ->with('corrNonprimePdf', $corrNonprimePdf)
                ->with('corrOdfPdf', $corrOdfPdf)
                ->with('corrOdfPlusPdf', $corrOdfPlusPdf)
                ->with('corrOmbsvoeXlsx', $corrOmbsvoeXlsx)
                ->with('corrNonprimeXlsx', $corrNonprimeXlsx)
                ->with('corrOdfXlsx', $corrOdfXlsx)
                ->with('corrOdfPlusXlsx', $corrOdfPlusXlsx)
                ;

    }
    

}
