<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGnetDevices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnet_devices', function (Blueprint $table) {
            $table->bigIncrements('gnet_device_id');
            $table->unsignedBigInteger('gnet_id');
            $table->string('device_name' , 50);
            $table->boolean('status');
            $table->unsignedBigInteger('device_type_id');
            $table->timestamps();

            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets')->onDelete('cascade');
            $table->foreign('device_type_id')->references('device_type_id')->on('device_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gnet_devices');
    }
}
