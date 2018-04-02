<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddLanguageIndexToCorrectionsTable extends Migration
{

    public function up()
    {
        Schema::table('corrections', function ($table) {
            $table->index('language');
        });
    }

    public function down()
    {
    }

}
