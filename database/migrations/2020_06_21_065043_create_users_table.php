<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('fname' , 50)->nullable();
            $table->string('lname' , 50)->nullable();
            $table->string('mobile' , 12)->unique()->index();
            $table->string('email' , 50)->unique()->index()->nullable();
            $table->string('username' , 50)->unique()->index()->nullable();
            $table->string('password' , 250)->nullable();
            $table->unsignedBigInteger('role_id');
            $table->string('confirm_code' , 4);
            $table->unsignedBigInteger('status_id');


            $table->foreign('status_id')->references('status_id')->on('status');
            $table->foreign('role_id')->references('user_role_id')->on('user_roles');
            $table->timestamp('registerdate')->default(DB::raw('CURRENT_TIMESTAMP'));


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
