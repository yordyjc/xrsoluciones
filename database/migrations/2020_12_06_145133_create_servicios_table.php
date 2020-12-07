<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->integer('orden_id')->unsigned();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->float('precio')->nullable()->default(0);
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });
        Schema::table('servicios', function($table) {
            $table->foreign('orden_id')->references('id')->on('ordenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
