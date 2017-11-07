<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFragenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fragen', function (Blueprint $table) {
            $table->integer('pk_frageID');
            $table->primary('pk_frageID');
            $table->string('frage');
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
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
        Schema::dropIfExists('fragen');
    }
}
