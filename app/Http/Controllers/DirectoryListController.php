<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\User;
use DB;

class DirectoryListController extends Controller
{
    public function index()
    {
        $executives = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Executives%')
        ->get();

        $officeManagement = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Office Management%')
        ->get();

        $accounting = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Accounting%')
        ->get();

        $financialPlanning = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Financial Planning & Analysis%')
        ->get();

        $learning = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Learning & Development%')
        ->get();

        $complianceQC = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Compliance QC%')
        ->get();

        $legal = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Legal%')
        ->get();

        $capitalMarkets = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Capital Markets%')
        ->get();

        $technology = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Technology%')
        ->get();

        $disclosures = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Disclosures%')
        ->get();

        $transactionManagers = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Transaction Managers%')
        ->get();

        $loanSetUp = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Loan Set Up%')
        ->get();

        $underwriters = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Underwriters%')
        ->get();

        $valuationSpecialists = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Valuation Specalists%')
        ->get();

        $funders = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Funders%')
        ->get();

        $investorReporting = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Investor Reporting%')
        ->get();

        $lossMitigation = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Loss Mitigation%')
        ->get();

        $customerService = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Customer Service%')
        ->get();

        $tax = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Tax & Insurance%')
        ->get();

        $servicingQA = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Servicing Quality Assurance%')
        ->get();

        $shipping = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Shipping%')
        ->get();

        $marketing = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Marketing%')
        ->get();

        $aeWest = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Account Executive - West%')
        ->get();

        $aeEast = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Account Executive - East%')
        ->get();

        $retail = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Retail%')
        ->get();

        $correspondent = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'LIKE',  '%Correspondent%')
        ->get();
        
        return view('pages.usermanagement.exports')
        ->with([
            'executives'                => $executives,
            'officeManagement'          => $officeManagement,
            'accounting'                => $accounting,
            'financialPlanning'         => $financialPlanning,
            'learning'                  => $learning,
            'complianceQC'              => $complianceQC,
            'legal'                     => $legal,
            'capitalMarkets'            => $capitalMarkets,
            'technology'                => $technology,
            'disclosures'               => $disclosures,
            'transactionManagers'       => $transactionManagers,
            'loanSetUp'                 => $loanSetUp,
            'underwriters'              => $underwriters,
            'valuationSpecialists'      => $valuationSpecialists,
            'funders'                   => $funders,
            'investorReporting'         => $investorReporting,
            'lossMitigation'            => $lossMitigation,
            'customerService'           => $customerService,
            'tax'                       => $tax,
            'servicingQA'               => $servicingQA,
            'shipping'                  => $shipping,
            'marketing'                 => $marketing,
            'aeWest'                    => $aeWest,
            'aeEast'                    => $aeEast,
            'retail'                    => $retail,
            'correspondent'             => $correspondent,
        ]);

    }


}
