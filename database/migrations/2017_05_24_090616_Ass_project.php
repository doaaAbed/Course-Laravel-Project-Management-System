<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::create('AssProject', function ($table) {
              $table->increments('AssProject_id');
            $table->integer('act_id_fk2')->unsigned();
            $table->integer('project_id_fk2')->unsigned();
            $table->foreign('act_id_fk2')->references('act_id')->on('account')->onDelete('cascade');
            $table->foreign('project_id_fk2')->references('project_id')->on('project')->onDelete('cascade');
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
        Schema::drop('AssProject');
    }
}
