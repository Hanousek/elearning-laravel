<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('pk_videoID');
            $table->string('thumbnail');
            $table->string('thumbnail_alt');
            $table->string('video');
            $table->string('thema');
            $table->integer('fk_themaID')->unsigned();
            $table->foreign('fk_themaID')
            ->references('pk_themaID')
            ->on('thema')
            ->onDelete('cascade');
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
        Schema::dropIfExists('videos');
    }
}
