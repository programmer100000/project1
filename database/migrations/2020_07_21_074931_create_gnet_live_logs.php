<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGnetLiveLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnet_live_logs', function (Blueprint $table) {
            $table->bigIncrements('gnet_live_log_id');
            $table->unsignedBigInteger('gnet_id');
            $table->unsignedBigInteger('gnet_device_id');
            $table->unsignedBigInteger('gnet_game_id');
            $table->timestamp('start_time');
            $table->timestamp('end_time')->nullable();

            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets');
            $table->foreign('gnet_device_id')->references('gnet_device_id')->on('gnet_devices');
            $table->foreign('gnet_game_id')->references('gnet_game_id')->on('gnet_games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gnet_live_logs');
    }
}
