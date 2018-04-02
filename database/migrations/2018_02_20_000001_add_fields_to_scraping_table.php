<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToScrapingTable extends Migration
{

    public function up()
    {
        Schema::table('scraped_pages_checks', function ($table) {
            if (!Schema::hasColumn('scraped_pages_checks', 'offset')) {
                $table->integer('offset');
            }
            if (!Schema::hasColumn('scraped_pages_checks', 'length')) {
                $table->integer('length');
            }
            if (!Schema::hasColumn('scraped_pages_checks', 'category')) {
                $table->string('category');
            }
            if (!Schema::hasColumn('scraped_pages_checks', 'message')) {
                $table->text('message');
            }
        });
    }

    public function down()
    {
        Schema::table('scraped_pages_checks', function ($table) {
            $table->dropColumn('offset');
            $table->dropColumn('length');
            $table->dropColumn('category');
            $table->dropColumn('message');
        });
    }

}
