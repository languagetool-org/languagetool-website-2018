<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddAffiliateToUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function ($table) {
            if (!Schema::hasColumn('users', 'affiliate')) {
                $table->string('affiliate', 20)->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('affiliate');
        });
    }

}
