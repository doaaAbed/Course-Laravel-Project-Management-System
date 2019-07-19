<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

         Schema::create('tasks', function ($table) {
            $table->increments('task_ids');
            $table->string('task_title');
            $table->string('task_desc');
            $table->string('task_file');
            $table->string('task_note');
            
            $table->integer('task_pro');
            $table->date('task_deadline');
            $table->integer('act_id_fk4')->unsigned();
            $table->integer('project_id_fk4')->unsigned();
            $table->integer('assigned_id_fk4')->unsigned();
            $table->foreign('act_id_fk4')->references('act_id')->on('account')->onDelete('cascade');
            $table->foreign('assigned_id_fk4')->references('act_id')->on('account')->onDelete('cascade');
            $table->foreign('project_id_fk4')->references('project_id')->on('project')->onDelete('cascade');

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
