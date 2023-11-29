<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NumberOfEmployee extends Model
{
    protected $table = 'number_of_employees';
    
    public $fillable = ['id', 'totalCount', 'executivesCount', 'officeManagementCount', 'accountingCount', 'financialPlanningCount', 'learningCount', 'complianceQCCount', 'legalCount', 'capitalMarketsCount', 'technologyCount', 'disclosuresCount',   'transactionManagersCount', 'loanSetUpCount', 'underwritingCount', 'valuationSpecialistsCount', 'fundersCount', 'investorReportingCount', 'lossMitigationCount', 'customerServiceCount', 'taxCount', 'servicingQACount', 'shippingCount','marketingCount', 'aeWestCount', 'aeEastCount', 'retailCount', 'correspondentCount'];
}
