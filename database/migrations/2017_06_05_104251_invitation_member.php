<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InvitationMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //


        Schema::create('Invite_Member', function ($table) {
            $table->increments('invite_id');
            $table->string('email')->unique();
            $table->string('code_rand');
            $table->integer('act_id_fk3')->unsigned();
            $table->integer('project_id_fk3')->unsigned();

            $table->foreign('act_id_fk3')->references('act_id')->on('account')->onDelete('cascade');
            $table->foreign('project_id_fk3')->references('project_id')->on('project')->onDelete('cascade');

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
          Schema::drop('Invite_Member');
    }
}
