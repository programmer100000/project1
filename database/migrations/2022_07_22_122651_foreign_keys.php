<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gnet_lives', function (Blueprint $table) {
            $table->unsignedBigInteger('invoice_id');

            $table->foreign('invoice_id')->references('invoice_id')->on('invoices');
        });

        Schema::table('gnet_live_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('invoice_id');

            $table->foreign('invoice_id')->references('invoice_id')->on('invoices');
        });
        Schema::table('lottery_users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('user_id')->on('users');
        });
        Schema::table('lottery_users_bk', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('user_id')->on('users');
        });

        Schema::table('buffet_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('invoice_id');
            $table->foreign('invoice_id')->references('invoice_id')->on('invoices');

            $table->unsignedBigInteger('gnet_buffet_id');
            $table->foreign('gnet_buffet_id')->references('gnet_buffet_id')->on('gnet_buffets');
        });

        Schema::table('lottery_matchs', function (Blueprint $table) {
            $table->unsignedBigInteger('lottery_user_1');
            $table->foreign('lottery_user_1')->references('lottery_user_id')->on('lottery_users');
            $table->unsignedBigInteger('lottery_user_2');
            $table->foreign('lottery_user_2')->references('lottery_user_id')->on('lottery_users');
            $table->unsignedBigInteger('lottery_id');

            $table->foreign('lottery_id')->references('lottery_id')->on('lotteries')->onDelete('cascade');
        });
        Schema::table('gamenets', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
        Schema::table('gamenets_temp', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('gnet_id');
            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
        Schema::table('gamenets_bk', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('gnet_id');
            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
        Schema::table('gamenet_pictures', function (Blueprint $table) {
            $table->unsignedBigInteger('gnet_id');

            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets');
        });
        Schema::table('plans_transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('gnet_id');
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('plan_id')->on('plans');
            
            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets');
        });
        Schema::table('plans_transactionlog', function (Blueprint $table) {
            $table->unsignedBigInteger('gnet_id');
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('plan_id')->on('plans');
            
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
        //
    }
}
