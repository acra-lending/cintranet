<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class RatesheetCategoryController extends Controller

//Handled by Livewire
{
    public function index() //Ignore these
    {
        //AE Wholesale Current Ratesheets
        $wsOmbsvoeAE    = Post::whereRaw("find_in_set('wsOmbsvoeAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        $ws3mbsAE       = Post::whereRaw("find_in_set('ws3mbsAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        $wsDscrAE       = Post::whereRaw("find_in_set('wsDscrAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        $wsNonprimeAE   = Post::whereRaw("find_in_set('wsNonprimeAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        $wsJumboPrimeAE   = Post::whereRaw("find_in_set('wsJumboPrimeAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->limit(1)
                                ->get();

        $smallBalanceMultifamily   = Post::whereRaw("find_in_set('smallBalanceMultifamily', category_id)")
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
                                ->paginate(3);

        $ws3mbsAE_past      = Post::whereRaw("find_in_set('ws3mbsAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->skip(1)
                                ->paginate(3);

        $wsDscrAE_past      = Post::whereRaw("find_in_set('wsDscrAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->skip(1)
                                ->paginate(3);

        $wsNonprimeAE_past  = Post::whereRaw("find_in_set('wsNonprimeAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->skip(1)
                                ->paginate(3);

        $wsJumboPrimeAE_past   = Post::whereRaw("find_in_set('wsJumboPrimeAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->skip(1)
                                ->paginate(3);

        $smallBalanceMultifamily_past   = Post::whereRaw("find_in_set('smallBalanceMultifamily_past', category_id)")
                                ->orderBy('created_at', 'desc')
                                ->skip(1)
                                ->paginate(3);

        $wsOdfAE_past       = Post::whereRaw("find_in_set('wsOdfAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                // ->skip(1)
                                ->paginate(3);

        $wsOdfPlusAE_past   = Post::whereRaw("find_in_set('wsOdfPlusAE', category_id)")
                                ->orderBy('created_at', 'desc')
                                // ->skip(1)
                                ->paginate(3);


        //Correspondent Current Ratesheets PDF
        $corrOmbsvoePdf     = Post::whereRaw("find_in_set('corrOmbsvoePdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
                                    
        $corr3mbsPdf        = Post::whereRaw("find_in_set('corr3mbsPdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();

        $corrDscrPdf        = Post::whereRaw("find_in_set('corrDscrPdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();

        $corrNonprimePdf    = Post::whereRaw("find_in_set('corrNonprimePdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();

        $corrJumboPrimePdf    = Post::whereRaw("find_in_set('corrJumboPrimePdf', category_id)")
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

        $corr3mbsXlsx       = Post::whereRaw("find_in_set('corr3mbsXlsx', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();

        $corrDscrXlsx       = Post::whereRaw("find_in_set('corrDscrXlsx', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();

        $corrNonprimeXlsx   = Post::whereRaw("find_in_set('corrNonprimeXlsx', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();

        $corrJumboPrimeXlsx   = Post::whereRaw("find_in_set('corrJumboPrimeXlsx', category_id)")
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
        
        //Correspondent Past Ratesheets
        $corrOmbsvoePdf_past   = Post::whereRaw("find_in_set('corrOmbsvoePdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    // ->skip(1)
                                    ->take(10)
                                    ->get();

        $corr3mbsPdf_past      = Post::whereRaw("find_in_set('corr3mbsPdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->skip(1)
                                    ->take(10)
                                    ->get();

        $corrDscrPdf_past      = Post::whereRaw("find_in_set('corrDscrPdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->skip(1)
                                    ->take(10)
                                    ->get();

        $corrNonprimePdf_past  = Post::whereRaw("find_in_set('corrNonprimePdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->skip(1)
                                    ->take(10)
                                    ->get();

        $corrJumboPrimePdf_past  = Post::whereRaw("find_in_set('corrJumboPrimePdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    ->skip(1)
                                    ->take(10)
                                    ->get();

        $corrOdfPdf_past       = Post::whereRaw("find_in_set('corrOdfPdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    // ->skip(1)
                                    ->take(10)
                                    ->get();

        $corrOdfPlusPdf_past   = Post::whereRaw("find_in_set('corrOdfPlusPdf', category_id)")
                                    ->orderBy('created_at', 'desc')
                                    // ->skip(1)
                                    ->take(10)
                                    ->get();
        
        
        return view('pages.sales.ratesheets')
                ->with([
                    'wsOmbsvoeAE'         => $wsOmbsvoeAE,
                    'wsNonprimeAE'        => $wsNonprimeAE,
                    'wsJumboPrimeAE'      => $wsJumboPrimeAE,
                    'smallBalanceMultifamily' => $smallBalanceMultifamily,
                    'ws3mbsAE'            => $ws3mbsAE,
                    'wsDscrAE'            => $wsDscrAE,
                    'wsOdfAE'             => $wsOdfAE,
                    'wsOdfPlusAE'         => $wsOdfPlusAE,
                    'wsOmbsvoeAE_past'    => $wsOmbsvoeAE_past,
                    'wsNonprimeAE_past'   => $wsNonprimeAE_past,
                    'wsJumboPrimeAE_past'   => $wsJumboPrimeAE_past,
                    'smallBalanceMultifamily_past'   => $smallBalanceMultifamily_past,
                    'ws3mbsAE_past'       => $ws3mbsAE_past,
                    'wsDscrAE_past'       => $wsDscrAE_past,
                    'wsOdfAE_past'        => $wsOdfAE_past,
                    'wsOdfPlusAE_past'    => $wsOdfPlusAE_past,
                    'corrOmbsvoePdf'    => $corrOmbsvoePdf,
                    'corrNonprimePdf'   => $corrNonprimePdf,
                    'corrJumboPrimePdf'   => $corrJumboPrimePdf,
                    'corr3mbsPdf'       => $corr3mbsPdf,
                    'corrDscrPdf'       => $corrDscrPdf,
                    'corrOdfPdf'        => $corrOdfPdf,
                    'corrOdfPlusPdf'    => $corrOdfPlusPdf,
                    'corrOmbsvoeXlsx'   => $corrOmbsvoeXlsx,
                    'corrNonprimeXlsx'  => $corrNonprimeXlsx,
                    'corrJumboPrimeXlsx'  => $corrJumboPrimeXlsx,
                    'corr3mbsXlsx'      => $corr3mbsXlsx,
                    'corrDscrXlsx'      => $corrDscrXlsx,
                    'corrOdfXlsx'       => $corrOdfXlsx,
                    'corrOdfPlusXlsx'   => $corrOdfPlusXlsx,
                    'corrOmbsvoePdf_past'   => $corrOmbsvoePdf_past,
                    'corrNonprimePdf_past'  => $corrNonprimePdf_past,
                    'corrJumboPrimePdf_past'  => $corrJumboPrimePdf_past,
                    'corr3mbsPdf_past'      => $corr3mbsPdf_past,
                    'corrDscrPdf_past'      => $corrDscrPdf_past,
                    'corrOdfPdf_past'       => $corrOdfPdf_past,
                    'corrOdfPlusPdf_past'   => $corrOdfPlusPdf_past,
                ]);
    }
    

}
