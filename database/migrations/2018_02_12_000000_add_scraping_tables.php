<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddScrapingTables extends Migration
{

    public function up()
    {
        Schema::create('scraped_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url', 2000);
            $table->string('start_url', 2000);
            $table->text('title');
            $table->text('html')->nullable();
            $table->text('text')->nullable();
            $table->boolean('checked')->default(false);
            $table->timestamps();
        });
        Schema::create('scraped_pages_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rule_id', 100);
            $table->string('url', 2000);
            $table->text('context');
            $table->text('suggestions')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scraped_pages');
        Schema::dropIfExists('scraped_pages_checks');
    }

}
