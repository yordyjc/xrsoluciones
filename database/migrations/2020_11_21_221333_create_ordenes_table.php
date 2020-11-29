<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado')->default(1);
            $table->integer('categoria_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->text('descripcion')->nullable();
            $table->text('equipo')->nullable();
            $table->integer('horometro')->nullable();
            $table->integer('kilometraje')->nullable();
            $table->date('entrega')->nullable();
            $table->timestamps();
        });
        Schema::table('ordenes', function($table) {
            $table->foreign('cliente_id')->references('id')->on('users');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
}
