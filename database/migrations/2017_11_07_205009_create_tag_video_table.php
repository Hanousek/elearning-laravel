<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_videos', function (Blueprint $table) {
            $table->integer('fk_tagid')->unsigned();
            $table->foreign('fk_tagid')
            ->references('pk_tagid')
            ->on('tags')
            ->onDelete('cascade');
            $table->integer('fk_videoID')->unsigned();
            $table->foreign('fk_videoID')
            ->references('pk_videoID')
            ->on('videos')
            ->onDelete('cascade');
            $table->primary(['fk_tagid', 'fk_videoID']);
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
        Schema::dropIfExists('tag_videos');
    }
}
