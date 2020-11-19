<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\User;
use Gate;
use DB;

class DirectoryListController extends Controller
{
    public function index()
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $executives = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Executives')
        ->orderby('lastname', 'asc')
        ->get();
        $executivesCount = $executives->count();

        $officeManagement = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Office Management')
        ->orderby('lastname', 'asc')
        ->get();
        $officeManagementCount = $officeManagement->count();

        $humanResources = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Human Resources')
        ->orderby('lastname', 'asc')
        ->get();
        $humanResourcesCount = $humanResources->count();

        $accounting = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Accounting')
        ->orderby('lastname', 'asc')
        ->get();
        $accountingCount = $accounting->count();

        $financialPlanning = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Financial Planning & Analysis')
        ->orderby('lastname', 'asc')
        ->get();
        $financialPlanningCount = $financialPlanning->count();

        $learning = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Learning & Development')
        ->orderby('lastname', 'asc')
        ->get();
        $learningCount = $learning->count();

        $complianceQC = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Compliance QC')
        ->orderby('lastname', 'asc')
        ->get();
        $complianceQCCount = $complianceQC->count();

        $legal = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Legal')
        ->orderby('lastname', 'asc')
        ->get();
        $legalCount = $legal->count();

        $capitalMarkets = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Capital Markets')
        ->orderby('lastname', 'asc')
        ->get();
        $capitalMarketsCount = $capitalMarkets->count();

        $technology = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Technology')
        ->orderby('lastname', 'asc')
        ->get();
        $technologyCount = $technology->count();

        $disclosures = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Disclosures')
        ->orderby('lastname', 'asc')
        ->get();
        $disclosuresCount = $disclosures->count();

        $transactionManagers = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Transaction Managers')
        ->orderby('lastname', 'asc')
        ->get();
        $transactionManagersCount = $transactionManagers->count();

        $loanSetUp = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Loan Set Up')
        ->orderby('lastname', 'asc')
        ->get();
        $loanSetUpCount = $loanSetUp->count();

        $underwriters = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Underwriters')
        ->orderby('lastname', 'asc')
        ->get();
        $underwritersCount = $underwriters->count();

        $valuationSpecialists = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Valuation Specialists')
        ->orderby('lastname', 'asc')
        ->get();
        $valuationSpecialistsCount = $valuationSpecialists->count();

        $funders = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Funders')
        ->orderby('lastname', 'asc')
        ->get();
        $fundersCount = $funders->count();

        $investorReporting = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Investor Reporting')
        ->orderby('lastname', 'asc')
        ->get();
        $investorReportingCount = $investorReporting->count();

        $lossMitigation = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Loss Mitigation')
        ->orderby('lastname', 'asc')
        ->get();
        $lossMitigationCount = $lossMitigation->count();

        $customerService = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Customer Service')
        ->orderby('lastname', 'asc')
        ->get();
        $customerServiceCount = $customerService->count();

        $tax = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Tax & Insurance')
        ->orderby('lastname', 'asc')
        ->get();
        $taxCount = $tax->count();

        $servicingQA = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Servicing Quality Assurance')
        ->orderby('lastname', 'asc')
        ->get();
        $servicingQACount = $servicingQA->count();

        $shipping = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Shipping')
        ->orderby('lastname', 'asc')
        ->get();
        $shippingCount = $shipping->count();

        $marketing = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Marketing')
        ->orderby('lastname', 'asc')
        ->get();
        $marketingCount = $marketing->count();

        $aeWest = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Account Executives - West')
        ->orderby('lastname', 'asc')
        ->get();
        $aeWestCount = $aeWest->count();

        $aeEast = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Account Executives - East')
        ->orderby('lastname', 'asc')
        ->get();
        $aeEastCount = $aeEast->count();

        $retail = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Retail')
        ->orderby('lastname', 'asc')
        ->get();
        $retailCount = $retail->count();

        $correspondent = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Correspondent')
        ->orderby('lastname', 'asc')
        ->get();
        $correspondentCount = $correspondent->count();

        $loanServicing = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Loan Servicing')
        ->orderby('lastname', 'asc')
        ->get();
        $loanServicingCount = $loanServicing->count();

        $totalCount = $executivesCount + $officeManagementCount + $humanResourcesCount + $accountingCount + $financialPlanningCount + $learningCount + $complianceQCCount + $legalCount + $capitalMarketsCount + $technologyCount + $disclosuresCount + $transactionManagersCount + $loanSetUpCount + $underwritersCount + $valuationSpecialistsCount + $fundersCount + $investorReportingCount + $lossMitigationCount + $customerServiceCount + $taxCount + $servicingQACount + $shippingCount + $marketingCount + $aeWestCount + $aeEastCount + $retailCount + $correspondentCount + $loanServicingCount;
    
        return view('pages.usermanagement.exports')
        ->with([
            'executives'                => $executives,
            'executivesCount'           => $executivesCount,
            'officeManagement'          => $officeManagement,
            'officeManagementCount'     => $officeManagementCount,
            'humanResources'            => $humanResources,
            'humanResourcesCount'       => $humanResourcesCount,
            'accounting'                => $accounting,
            'accountingCount'           => $accountingCount,
            'financialPlanning'         => $financialPlanning,
            'financialPlanningCount'    => $financialPlanningCount,
            'learning'                  => $learning,
            'learningCount'             => $learningCount,
            'complianceQC'              => $complianceQC,
            'complianceQCCount'         => $complianceQCCount,
            'legal'                     => $legal,
            'legalCount'                => $legalCount,
            'capitalMarkets'            => $capitalMarkets,
            'capitalMarketsCount'       => $capitalMarketsCount,
            'technology'                => $technology,
            'technologyCount'           => $technologyCount,
            'disclosures'               => $disclosures,
            'disclosuresCount'          => $disclosuresCount,
            'transactionManagers'       => $transactionManagers,
            'transactionManagersCount'  => $transactionManagersCount,
            'loanSetUp'                 => $loanSetUp,
            'loanSetUpCount'            => $loanSetUpCount,
            'underwriters'              => $underwriters,
            'underwritersCount'         => $underwritersCount,
            'valuationSpecialists'      => $valuationSpecialists,
            'valuationSpecialistsCount' => $valuationSpecialistsCount,
            'funders'                   => $funders,
            'fundersCount'              => $fundersCount,
            'investorReporting'         => $investorReporting,
            'investorReportingCount'    => $investorReportingCount,
            'lossMitigation'            => $lossMitigation,
            'lossMitigationCount'       => $lossMitigationCount,
            'customerService'           => $customerService,
            'customerServiceCount'      => $customerServiceCount,
            'tax'                       => $tax,
            'taxCount'                  => $taxCount,
            'servicingQA'               => $servicingQA,
            'servicingQACount'          => $servicingQACount,
            'shipping'                  => $shipping,
            'shippingCount'             => $shippingCount,
            'marketing'                 => $marketing,
            'marketingCount'            => $marketingCount,
            'aeWest'                    => $aeWest,
            'aeWestCount'               => $aeWestCount,
            'aeEast'                    => $aeEast,
            'aeEastCount'               => $aeEastCount,
            'retail'                    => $retail,
            'retailCount'               => $retailCount,
            'correspondent'             => $correspondent,
            'correspondentCount'        => $correspondentCount,
            'loanServicing'             => $loanServicing,
            'loanServicingCount'        => $loanServicingCount,
            'totalCount'                => $totalCount,

        ]);

    }


}
