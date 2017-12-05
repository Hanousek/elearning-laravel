<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('status')){
        Schema::create('status', function (Blueprint $table) {
            $table->increments('pk_statusID');
            $table->integer('fk_userID')->unsigned();
            $table->foreign('fk_userID')
            ->references('pk_userID')
            ->on('users')
            ->onDelete('cascade');
            $table->integer('fk_frageID')->unsigned();
            $table->foreign('fk_frageID')
            ->references('pk_frageID')
            ->on('fragen')
            ->onDelete('cascade');
            $table->boolean('result');
            $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status');
    }
}
