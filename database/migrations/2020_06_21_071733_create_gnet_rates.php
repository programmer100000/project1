<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGnetRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnet_rates', function (Blueprint $table) {
            $table->bigIncrements('gnet_rate_id');
            $table->unsignedBigInteger('gnet_id')->index();
            $table->smallInteger('rate');
            $table->unsignedBigInteger('user_id');

            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gnet_rates');
    }
}
