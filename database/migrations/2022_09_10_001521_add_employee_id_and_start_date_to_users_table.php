<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmployeeIdAndStartDateToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('s2zar_users', function (Blueprint $table) {
            $table->integer('employeeID')->after('id');
            $table->timestamp('startDate')->after('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('s2zar_users', function (Blueprint $table) {
            $table->dropColumn('employeeID');
            $table->dropColumn('startDate');
        });
    }
}
