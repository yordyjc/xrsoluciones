<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->id();
            $table->integer('cliente_id')->unsigned();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->string('cel')->nullable();
            $table->boolean('estado')->defaul(1);
            $table->string('doc');
            $table->integer('licencia');
            $table->date('caducidad');
            $table->string('observaciones')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
        Schema::table('conductores', function($table) {
            $table->foreign('cliente_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conductores');
    }
}
