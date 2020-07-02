<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGnetLives extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnet_lives', function (Blueprint $table) {
            $table->bigIncrements('gnet_live_id');
            $table->unsignedBigInteger('gnet_id');
            $table->unsignedBigInteger('gnet_device_id');
            $table->timestamp('start_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->smallInteger('joystick_count');
            $table->timestamps();

            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets')->onDelete('cascade');
            $table->foreign('gnet_device_id')->references('gnet_device_id')->on('gnet_devices')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gnet_lives');
    }
}
