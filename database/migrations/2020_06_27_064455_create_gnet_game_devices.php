<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGnetGameDevices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnet_game_devices', function (Blueprint $table) {
            $table->bigIncrements('gnet_game_device_id');
            $table->unsignedBigInteger('gnet_game_id');
            $table->unsignedBigInteger('gnet_device_id');
            $table->timestamps();

            $table->foreign('gnet_game_id')->references('gnet_game_id')->on('gnet_games')->onDelete('cascade');
            $table->foreign('gnet_device_id')->references('gnet_device_id')->on('gnet_devices'  )->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gnet_game_devices');
    }
}
