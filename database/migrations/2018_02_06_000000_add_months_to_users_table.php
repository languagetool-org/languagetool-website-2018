<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddMonthsToUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function ($table) {
            if (!Schema::hasColumn('users', 'subscription_months')) {
                $table->integer('subscription_months')->unsigned()->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('subscription_months');
        });    
    }

}
