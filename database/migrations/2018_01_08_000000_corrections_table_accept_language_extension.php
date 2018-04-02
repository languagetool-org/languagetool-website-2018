<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorrectionsTableAcceptLanguageExtension extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corrections', function ($table) {
            $table->string('accept_language', 1000)->change(); 
        });
        Schema::table('false_alarms', function ($table) {
            $table->string('accept_language', 1000)->change(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('corrections', function ($table) {
            $table->string('accept_language', 200)->change();
        });
        Schema::table('false_alarms', function ($table) {
            $table->string('accept_language', 200)->change();
        });
    }
}
