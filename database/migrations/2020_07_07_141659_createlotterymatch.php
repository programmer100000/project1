<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createlotterymatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_matchs', function (Blueprint $table) {
            $table->bigIncrements('lottery_match_id');
            $table->smallInteger('goal_user_1')->nullable();
            $table->smallInteger('goal_user_2')->nullable();
            $table->smallInteger('level');
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
        //
    }
}
