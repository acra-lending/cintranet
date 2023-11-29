<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumberOfEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_of_employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->mediumInteger('totalCount');
            $table->mediumInteger('executivesCount');
            $table->mediumInteger('officeManagementCount');
            $table->mediumInteger('accountingCount');
            $table->mediumInteger('financialPlanningCount');
            $table->mediumInteger('learningCount');
            $table->mediumInteger('complianceQCCount');
            $table->mediumInteger('legalCount');
            $table->mediumInteger('capitalMarketsCount');
            $table->mediumInteger('technologyCount');
            $table->mediumInteger('disclosuresCount');
            $table->mediumInteger('transactionManagersCount');
            $table->mediumInteger('loanSetUpCount');
            $table->mediumInteger('underwritersCount');
            $table->mediumInteger('valuationSpecialistsCount');
            $table->mediumInteger('fundersCount');
            $table->mediumInteger('investorReportingCount');
            $table->mediumInteger('lossMitigationCount');
            $table->mediumInteger('customerServiceCount');
            $table->mediumInteger('taxCount');
            $table->mediumInteger('servicingQACount');
            $table->mediumInteger('shippingCount');
            $table->mediumInteger('marketingCount');
            $table->mediumInteger('aeWestCount');
            $table->mediumInteger('aeEastCount');
            $table->mediumInteger('retailCount');
            $table->mediumInteger('correspondentCount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('number_of_employees');
    }
}
