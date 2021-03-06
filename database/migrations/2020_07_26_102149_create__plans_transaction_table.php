<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePlansTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans_transaction', function (Blueprint $table) {
            $table->bigIncrements('plan_transaction_id');
            $table->timestamp('start_time')->nullable();
            $table->timestamp('finish_time')->nullable();
            $table->boolean('status', false);
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
        Schema::dropIfExists('plans_transaction');
    }
}
