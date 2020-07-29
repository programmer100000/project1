<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGnetBuffets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnet_buffets', function (Blueprint $table) {
            $table->bigIncrements('gnet_buffet_id');
            $table->unsignedBigInteger('gnet_id');
            $table->string('buffet_name' , 50);
            $table->decimal('buffet_price' , 8 ,0);
            $table->integer('count');
            $table->timestamps();

            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gnet_buffets');
    }
}
