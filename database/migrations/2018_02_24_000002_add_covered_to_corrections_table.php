<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddCoveredToCorrectionsTable extends Migration
{

    public function up()
    {
        Schema::table('corrections', function ($table) {
            if (!Schema::hasColumn('corrections', 'covered')) {
                $table->string('covered', 255)->nullable();
            }
            if (!Schema::hasColumn('corrections', 'replacement')) {
                $table->string('replacement', 255)->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('corrections', function ($table) {
            $table->dropColumn('covered');
            $table->dropColumn('replacement');
        });
    }

}
