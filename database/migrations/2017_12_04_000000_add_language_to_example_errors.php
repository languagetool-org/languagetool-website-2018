<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddLanguageToExampleErrors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('example_errors', function ($table) {
            $table->text('accept_language')->nullable()->after('correction');
            $table->text('language', 20)->nullable()->after('correction');
            $table->text('rule_id')->nullable()->after('correction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('example_errors', function ($table) {
            $table->dropColumn('accept_language');
            $table->dropColumn('language');
            $table->dropColumn('rule_id');
        });
    }
}
