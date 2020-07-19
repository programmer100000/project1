<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamenetPictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamenet_pictures', function (Blueprint $table) {
            $table->bigIncrements('gamenet_picture_id');
            $table->string('gamenet_image' , 200);
            $table->string('flag' , 20);
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
        Schema::dropIfExists('_gamenet__pictures');
    }
}
