<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Directory;
use App\User;
use App\NumberOfEmployee;
use DB;

class NumberOfEmployees extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'company:employees';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Post to database total number of employees and number of employees by department';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $executives = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Executives')
        ->get();
        $executivesCount = $executives->count();

        $officeManagement = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Office Management')
        ->get();
        $officeManagementCount = $officeManagement->count();

        $accounting = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Accounting')
        ->get();
        $accountingCount = $accounting->count();

        $financialPlanning = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Financial Planning & Analysis')
        ->get();
        $financialPlanningCount = $financialPlanning->count();

        $learning = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Learning & Development')
        ->get();
        $learningCount = $learning->count();

        $complianceQC = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Compliance QC')
        ->get();
        $complianceQCCount = $complianceQC->count();

        $legal = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Legal')
        ->get();
        $legalCount = $legal->count();

        $capitalMarkets = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Capital Markets')
        ->get();
        $capitalMarketsCount = $capitalMarkets->count();

        $technology = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Technology')
        ->get();
        $technologyCount = $technology->count();

        $disclosures = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Disclosures')
        ->get();
        $disclosuresCount = $disclosures->count();

        $transactionManagers = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Transaction Managers')
        ->get();
        $transactionManagersCount = $transactionManagers->count();

        $loanSetUp = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Loan Set Up')
        ->get();
        $loanSetUpCount = $loanSetUp->count();

        $underwriters = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Underwriters')
        ->get();
        $underwritersCount = $underwriters->count();

        $valuationSpecialists = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Valuation Specialists')
        ->get();
        $valuationSpecialistsCount = $valuationSpecialists->count();

        $funders = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Funders')
        ->get();
        $fundersCount = $funders->count();

        $investorReporting = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Investor Reporting')
        ->get();
        $investorReportingCount = $investorReporting->count();

        $lossMitigation = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Loss Mitigation')
        ->get();
        $lossMitigationCount = $lossMitigation->count();

        $customerService = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Customer Service')
        ->get();
        $customerServiceCount = $customerService->count();

        $tax = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Tax & Insurance')
        ->get();
        $taxCount = $tax->count();

        $servicingQA = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Servicing Quality Assurance')
        ->get();
        $servicingQACount = $servicingQA->count();

        $shipping = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Shipping')
        ->get();
        $shippingCount = $shipping->count();

        $marketing = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Marketing')
        ->get();
        $marketingCount = $marketing->count();

        $aeWest = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Account Executives - West')
        ->get();
        $aeWestCount = $aeWest->count();

        $aeEast = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Account Executives - East')
        ->get();
        $aeEastCount = $aeEast->count();

        $retail = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Retail')
        ->get();
        $retailCount = $retail->count();

        $correspondent = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Correspondent')
        ->get();
        $correspondentCount = $correspondent->count();

        $totalCount = $executivesCount + $officeManagementCount + $accountingCount + $financialPlanningCount + $learningCount + $complianceQCCount + $legalCount + $capitalMarketsCount + $technologyCount + $disclosuresCount + $transactionManagersCount + $loanSetUpCount + $underwritersCount + $valuationSpecialistsCount + $fundersCount + $investorReportingCount + $lossMitigationCount + $customerServiceCount + $taxCount + $servicingQACount + $shippingCount + $marketingCount + $aeWestCount + $aeEastCount + $retailCount + $correspondentCount;

        $post = new NumberOfEmployee;
        $post->totalCount = $totalCount;
        $post->executivesCount = $executivesCount;
        $post->officeManagementCount = $officeManagementCount;
        $post->accountingCount = $accountingCount;
        $post->financialPlanningCount = $financialPlanningCount;
        $post->learningCount = $learningCount;
        $post->complianceQCCount = $complianceQCCount;
        $post->legalCount = $legalCount;
        $post->capitalMarketsCount = $capitalMarketsCount;
        $post->technologyCount = $technologyCount;
        $post->disclosuresCount = $disclosuresCount;
        $post->transactionManagersCount = $transactionManagersCount;
        $post->loanSetUpCount = $loanSetUpCount;
        $post->underwritersCount = $underwritersCount;
        $post->valuationSpecialistsCount = $valuationSpecialistsCount;
        $post->fundersCount = $fundersCount;
        $post->investorReportingCount = $investorReportingCount;
        $post->lossMitigationCount = $lossMitigationCount;
        $post->customerServiceCount = $customerServiceCount;
        $post->taxCount = $taxCount;
        $post->servicingQACount = $servicingQACount;
        $post->shippingCount = $shippingCount;
        $post->marketingCount = $marketingCount;
        $post->aeWestCount = $aeWestCount;
        $post->aeEastCount = $aeEastCount;
        $post->retailCount = $retailCount;
        $post->correspondentCount = $correspondentCount;
        $post->save();
    }
}
