<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class MakeApiKeyNullable extends Migration
{

    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('api_key', 16)->nullable()->change();
        });
    }

    public function down()
    {
    }

}
