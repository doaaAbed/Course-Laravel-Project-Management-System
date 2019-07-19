<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StatusTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

          Schema::create('task_status', function ($table) {
            $table->increments('status_task_id');
            $table->String('status');
            $table->integer('act_id_fk5')->unsigned();
            $table->integer('task_id_fk')->unsigned();         
            $table->foreign('act_id_fk5')->references('act_id')->on('account')->onDelete('cascade');
            $table->foreign('task_id_fk')->references('task_ids')->on('tasks')->onDelete('cascade');
           
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

        Schema::drop('task_status');
    }
}
