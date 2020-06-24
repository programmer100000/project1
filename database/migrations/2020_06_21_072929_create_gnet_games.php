<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGnetGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnet_games', function (Blueprint $table) {
            $table->bigIncrements('gnet_game_id');
            $table->unsignedBigInteger('gnet_id');
            $table->string('game_name' , 50);
            $table->smallInteger('game_count');

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
        Schema::dropIfExists('gnet_games');
    }
}
