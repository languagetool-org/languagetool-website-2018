<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFalseAlarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('false_alarms', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sentence');
            $table->text('covered_text');
            $table->string('language', 20);
            $table->string('rule_id', 100);
            $table->string('accept_language', 200);
            $table->string('resolution', 20)->nullable();
            $table->integer('resolution_user_id')->nullable()->unsigned()->index();
            $table->timestamp('resolution_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('false_alarms');
    }
}
