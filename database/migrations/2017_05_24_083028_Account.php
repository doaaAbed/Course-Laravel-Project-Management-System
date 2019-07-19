<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

         Schema::create('account', function ($table) {
            $table->increments('act_id');
            $table->string('first_name');
            $table->string('father_name');
            $table->string('Last_name');
            $table->string('img_name');
            $table->integer('role');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('status');
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
        Schema::drop('account');
    }
}
