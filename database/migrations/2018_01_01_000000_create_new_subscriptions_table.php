<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewSubscriptionsTable extends Migration
{

    public function up()
    {
        Schema::create('new_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 100);
            $table->integer('subscription_months')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('new_subscriptions');
    }

}
