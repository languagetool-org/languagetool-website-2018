<?php

use Illuminate\Database\Migrations\Migration;

class AddCorrectionFields extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('corrections', function ($table) {
            if (!Schema::hasColumn('corrections', 'suggestion_pos')) {
                $table->integer('suggestion_pos')->nullable()->after('rule_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('corrections', function ($table) {
            $table->dropColumn('suggestion_pos');
        });
    }
}
