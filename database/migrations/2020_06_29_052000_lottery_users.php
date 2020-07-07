<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LotteryUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_users', function (Blueprint $table) {
            $table->bigIncrements('lottery_user_id');
            $table->string('fname' , 50);
            $table->string('lname' , 50);
            $table->string('mobile' , 11)->nullable();
            $table->smallInteger('user_num');
            $table->boolean('status')->default(1)->change();
            $table->timestamps();

            $table->unsignedBigInteger('lottery_id');

            $table->foreign('lottery_id')->references('lottery_id')->on('lotteries')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lottery_users');

    }
}
