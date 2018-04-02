<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgnoreRulesTable extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        Schema::create('ignore_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sentence')->nullable();
            $table->text('covered_text')->nullable();
            $table->string('language', 20);
            $table->string('rule_id', 100);
            $table->string('accept_language', 1000);
            $table->string('resolution', 20)->nullable();
            $table->integer('resolution_user_id')->nullable()->unsigned()->index();
            $table->timestamp('resolution_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ignore_rules');
    }
}
