<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddApiKeyToUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function ($table) {
            if (!Schema::hasColumn('users', 'api_key')) {
                $table->string('api_key', 16);
            }
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('api_key');
        });
    }

}
