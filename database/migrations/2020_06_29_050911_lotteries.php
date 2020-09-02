<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lotteries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotteries', function (Blueprint $table) {
            $table->bigIncrements('lottery_id');
            $table->unsignedBigInteger('gnet_id');
            $table->string('lottery_name' , 50);
            $table->string('game_title' , 50);
            $table->string('award_title' , 200 );
            $table->string('user_winner' , 50)->nullable();
            $table->decimal('lottery_price' , 8 ,0 );
            $table->string('lottery_image' , 200)->nullable();
            $table->text('lottery_desc');
            $table->date('date');
            $table->json('json')->nullable();
            $table->timestamps();





            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotteries');

    }
}
