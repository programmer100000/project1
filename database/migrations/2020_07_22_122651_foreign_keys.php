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
        Schema::table('buffet_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('invoice_id');
            $table->foreign('invoice_id')->references('invoice_id')->on('invoices');

            $table->unsignedBigInteger('gnet_buffet_id');
            $table->foreign('gnet_buffet_id')->references('gnet_buffet_id')->on('gnet_buffets');
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
