<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubpreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subpreguntas', function (Blueprint $table) {
            $table->id();
            $table->integer('pregunta_id')->unsigned();
            $table->integer('estado');
            $table->string('descripcion')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
        Schema::table('subpreguntas', function($table) {
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subpreguntas');
    }
}
