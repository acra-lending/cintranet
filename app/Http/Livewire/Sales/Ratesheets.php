<?php

namespace App\Http\Livewire\Sales;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;
use DB;


class Ratesheets extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        //AE Wholesale Current Ratesheets
        $wsOmbsvoeAE = Post::whereRaw("find_in_set('wsOmbsvoeAE', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();

        $ws3mbsAE = Post::whereRaw("find_in_set('ws3mbsAE', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $wsDscrAE = Post::whereRaw("find_in_set('wsDscrAE', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $nonOwnerOccu=Post::whereRaw("find_in_set('NonOwnerOccu', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $wsItinAE = Post::whereRaw("find_in_set('wsItinAE', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $wsNonprimeAE = Post::whereRaw("find_in_set('wsNonprimeAE', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $wsJumboPrimeAE = Post::whereRaw("find_in_set('wsJumboPrimeAE', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $smallBalanceMultifamily = Post::whereRaw("find_in_set('smallBalanceMultifamily', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $wsOdfAE = Post::whereRaw("find_in_set('wsOdfAE', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $wsOdfPlusAE = Post::whereRaw("find_in_set('wsOdfPlusAE', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        //Fix & Flip / Investor Loan Division
        $ffDscr = Post::whereRaw("find_in_set('ffDscr', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $ffMain = Post::whereRaw("find_in_set('ffMain', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $ffMultiFamily = Post::whereRaw("find_in_set('ffMultiFamily', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $ffMultiFamilyLongTerm = Post::whereRaw("find_in_set('ffMultiFamilyLongTerm', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $ffSingleFamily = Post::whereRaw("find_in_set('ffSingleFamily', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();
        $ffFamily = Post::whereRaw("find_in_set('ffFamily', category_id)")
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();


        //AE Wholesale Past Ratesheets
        $wsOmbsvoeAE_past = Post::whereRaw("find_in_set('wsOmbsvoeAE', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $ws3mbsAE_past = Post::whereRaw("find_in_set('ws3mbsAE', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $wsDscrAE_past = Post::whereRaw("find_in_set('wsDscrAE', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $wsItinAE_past = Post::whereRaw("find_in_set('wsItinAE', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $wsNonprimeAE_past = Post::whereRaw("find_in_set('wsNonprimeAE', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $wsJumboPrimeAE_past = Post::whereRaw("find_in_set('wsJumboPrimeAE', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $nonOwnerOccu_past = Post::whereRaw("find_in_set('nonOwnerOccu', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $wsOdfAE_past = Post::whereRaw("find_in_set('wsOdfAE', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $wsOdfPlusAE_past = Post::whereRaw("find_in_set('wsOdfPlusAE', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $smallBalanceMultifamily_past = Post::whereRaw("find_in_set('smallBalanceMultifamily', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        
        //Fix & Flip / Investor Loan Division
        $ffDscr_past = Post::whereRaw("find_in_set('ffDscr', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $ffMain_past = Post::whereRaw("find_in_set('ffMain', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $ffMultiFamily_past = Post::whereRaw("find_in_set('ffMultiFamily', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $ffMultiFamilyLongTerm_past = Post::whereRaw("find_in_set('ffMultiFamilyLongTerm', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $ffSingleFamily_past = Post::whereRaw("find_in_set('ffSingleFamily', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);
        $ffFamily_past = Post::whereRaw("find_in_set('ffMultiFamily', category_id)")
        ->orderBy('created_at', 'desc')
        // ->skip(1)
        ->simplePaginate(5);


        //Correspondent Current Ratesheets PDF
        $corrOmbsvoePdf = Post::whereRaw("find_in_set('corrOmbsvoePdf', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corr3mbsPdf = Post::whereRaw("find_in_set('corr3mbsPdf', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrDscrPdf = Post::whereRaw("find_in_set('corrDscrPdf', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrItinPdf = Post::whereRaw("find_in_set('corrItinPdf', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrNonprimePdf = Post::whereRaw("find_in_set('corrNonprimePdf', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrJumboPrimePdf = Post::whereRaw("find_in_set('corrJumboPrimePdf', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrOdfPdf = Post::whereRaw("find_in_set('corrOdfPdf', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrOdfPlusPdf = Post::whereRaw("find_in_set('corrOdfPlusPdf', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();

        //Correspondent Current Ratesheets Excel
        $corrOmbsvoeXlsx = Post::whereRaw("find_in_set('corrOmbsvoeXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corr3mbsXlsx = Post::whereRaw("find_in_set('corr3mbsXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrDscrXlsx = Post::whereRaw("find_in_set('corrDscrXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrItinXlsx = Post::whereRaw("find_in_set('corrItinXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrNonprimeXlsx = Post::whereRaw("find_in_set('corrNonprimeXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrJumboPrimeXlsx = Post::whereRaw("find_in_set('corrJumboPrimeXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrOdfXlsx = Post::whereRaw("find_in_set('corrOdfXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();
        $corrOdfPlusXlsx = Post::whereRaw("find_in_set('corrOdfPlusXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                ->limit(1)
                ->get();

        //Correspondent Past Ratesheets PDF
        $corrOmbsvoePdf_past = Post::whereRaw("find_in_set('corrOmbsvoePdf', category_id)")
                ->orderBy('created_at', 'desc')
                // ->skip(1)
                ->simplePaginate(5);
        $corr3mbsPdf_past = Post::whereRaw("find_in_set('corr3mbsPdf', category_id)")
                ->orderBy('created_at', 'desc')
                // ->skip(1)
                ->simplePaginate(5);
        $corrDscrPdf_past      = Post::whereRaw("find_in_set('corrDscrPdf', category_id)")
                ->orderBy('created_at', 'desc')
                ->simplePaginate(5);
        $corrItinPdf_past      = Post::whereRaw("find_in_set('corrItinPdf', category_id)")
                ->orderBy('created_at', 'desc')
                ->simplePaginate(5);
        $corrNonprimePdf_past = Post::whereRaw("find_in_set('corrNonprimePdf', category_id)")
                ->orderBy('created_at', 'desc')
                // ->skip(1)
                ->simplePaginate(5);
        $corrJumboPrimePdf_past = Post::whereRaw("find_in_set('corrJumboPrimePdf', category_id)")
                ->orderBy('created_at', 'desc')
                // ->skip(1)
                ->simplePaginate(5);
        $corrOdfPdf_past = Post::whereRaw("find_in_set('corrOdfPdf', category_id)")
                ->orderBy('created_at', 'desc')
                // ->skip(1)
                ->simplePaginate(5);
        $corrOdfPlusPdf_past = Post::whereRaw("find_in_set('corrOdfPlusPdf', category_id)")
                ->orderBy('created_at', 'desc')
                // ->skip(1)
                ->simplePaginate(5);

        //Correspondent Past Ratesheets Excel
        $corr3mbsXlsx_past = Post::whereRaw("find_in_set('corr3mbsXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                // ->skip(1)
                ->simplePaginate(5);
        $corrDscrXlsx_past      = Post::whereRaw("find_in_set('corrDscrXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                ->simplePaginate(5);
        $corrItinXlsx_past      = Post::whereRaw("find_in_set('corrItinXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                ->simplePaginate(5);
        $corrNonprimeXlsx_past = Post::whereRaw("find_in_set('corrNonprimeXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                // ->skip(1)
                ->simplePaginate(5);
        $corrJumboPrimeXlsx_past = Post::whereRaw("find_in_set('corrJumboPrimeXlsx', category_id)")
                ->orderBy('created_at', 'desc')
                // ->skip(1)
                ->simplePaginate(5);
        return view('livewire.sales.ratesheets')->with([
            'wsOmbsvoeAE'         => $wsOmbsvoeAE,
            'wsNonprimeAE'        => $wsNonprimeAE,
            'wsJumboPrimeAE'        => $wsJumboPrimeAE,
            'smallBalanceMultifamily' => $smallBalanceMultifamily,
            'ffDscr'                  => $ffDscr,
            'ffMain'                  => $ffMain,
            'ffMultiFamilyLongTerm'   => $ffMultiFamilyLongTerm,
            'ffSingleFamily'          => $ffSingleFamily,
            'ffFamily'                => $ffFamily,
            'ffMultiFamily'           => $ffMultiFamily,
            'ws3mbsAE'            => $ws3mbsAE,
            'wsDscrAE'            => $wsDscrAE,
            'nonOwnerOccu'            => $nonOwnerOccu,
            'wsItinAE'            => $wsItinAE,
            'wsOdfAE'             => $wsOdfAE,
            'wsOdfPlusAE'         => $wsOdfPlusAE,
            'wsOmbsvoeAE_past'    => $wsOmbsvoeAE_past,
            'wsNonprimeAE_past'   => $wsNonprimeAE_past,
            'wsJumboPrimeAE_past'   => $wsJumboPrimeAE_past,
            'nonOwnerOccu_past'    => $nonOwnerOccu_past,
            'smallBalanceMultifamily_past' => $smallBalanceMultifamily_past,
            'ffDscr_past'                  => $ffDscr_past,
            'ffMain_past'                  => $ffMain_past,
            'ffMultiFamilyLongTerm_past'   => $ffMultiFamilyLongTerm_past,
            'ffSingleFamily_past'          => $ffSingleFamily_past,
            'ffFamily_past'                => $ffFamily_past,
            'ffMultiFamily_past'           => $ffMultiFamily_past,
            'ws3mbsAE_past'       => $ws3mbsAE_past,
            'wsDscrAE_past'       => $wsDscrAE_past,
            'wsItinAE_past'       => $wsItinAE_past,
            'wsOdfAE_past'        => $wsOdfAE_past,
            'wsOdfPlusAE_past'    => $wsOdfPlusAE_past,
            'corrOmbsvoePdf'    => $corrOmbsvoePdf,
            'corrNonprimePdf'   => $corrNonprimePdf,
            'corrJumboPrimePdf'   => $corrJumboPrimePdf,
            'corr3mbsPdf'       => $corr3mbsPdf,
            'corrDscrPdf'       => $corrDscrPdf,
            'corrItinPdf'       => $corrItinPdf,
            'corrOdfPdf'        => $corrOdfPdf,
            'corrOdfPlusPdf'    => $corrOdfPlusPdf,
            'corrOmbsvoeXlsx'   => $corrOmbsvoeXlsx,
            'corrNonprimeXlsx'  => $corrNonprimeXlsx,
            'corrJumboPrimeXlsx'  => $corrJumboPrimeXlsx,
            'corr3mbsXlsx'      => $corr3mbsXlsx,
            'corrDscrXlsx'      => $corrDscrXlsx,
            'corrItinXlsx'      => $corrItinXlsx,
            'corrOdfXlsx'       => $corrOdfXlsx,
            'corrOdfPlusXlsx'   => $corrOdfPlusXlsx,
            'corrOmbsvoePdf_past'   => $corrOmbsvoePdf_past,
            'corrNonprimePdf_past'  => $corrNonprimePdf_past,
            'corrJumboPrimePdf_past'  => $corrJumboPrimePdf_past,
            'corr3mbsPdf_past'      => $corr3mbsPdf_past,
            'corrDscrPdf_past'      => $corrDscrPdf_past,
            'corrItinPdf_past'      => $corrItinPdf_past,
            'corrOdfPdf_past'       => $corrOdfPdf_past,
            'corrOdfPlusPdf_past'   => $corrOdfPlusPdf_past,
            'corrNonprimeXlsx_past'  => $corrNonprimeXlsx_past,
            'corrJumboPrimeXlsx_past'  => $corrJumboPrimeXlsx_past,
            'corr3mbsXlsx_past'      => $corr3mbsXlsx_past,
            'corrDscrXlsx_past'      => $corrDscrXlsx_past,
            'corrItinXlsx_past'      => $corrItinXlsx_past,
        ]);
    }
}
