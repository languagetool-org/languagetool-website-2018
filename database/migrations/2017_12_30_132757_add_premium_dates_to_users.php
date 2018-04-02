<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddPremiumDatesToUsers extends Migration
{

    public function up()
    {
        Schema::table('users', function ($table) {
            $table->date('premium_from')->nullable()->after('password');
            $table->date('premium_to')->nullable()->after('premium_from');
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('premium_from');
            $table->dropColumn('premium_to');
        });
    }

}
