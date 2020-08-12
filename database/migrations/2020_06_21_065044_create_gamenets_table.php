<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamenetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamenets', function (Blueprint $table) {
            $table->bigIncrements('gamenet_id');
            $table->string('title')->index();
            $table->string('address' , 500);
            $table->string('tel' , 11);
            $table->string('lat' , 20);
            $table->string('long' , 20);
            $table->smallInteger('rate' , 0);
            $table->boolean('status' , false);
            $table->boolean('approve' , false);
            $table->string('description' , 2000);
            $table->smallInteger('state_id');
            $table->smallInteger('city_id');
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
        Schema::dropIfExists('gamenets');
    }
}
