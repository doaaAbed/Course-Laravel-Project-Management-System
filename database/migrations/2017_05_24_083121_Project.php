<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('project', function ($table) {
              $table->increments('project_id');
            $table->string('project_title');
            $table->string('project_desc')->nullable();
            $table->string('project_code');
            $table->integer('act_id_fk')->unsigned();
        
            $table->timestamps();
             $table->foreign('act_id_fk')->references('act_id')->on('account')->onDelete('cascade');

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

         Schema::drop('project');
    }
}
