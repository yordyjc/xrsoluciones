<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_servicio', function (Blueprint $table) {
            $table->id();
            $table->integer('material_id')->unsigned();
            $table->integer('servicio_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('material_servicio', function($table) {
            $table->foreign('material_id')->references('id')->on('materiales');
            $table->foreign('servicio_id')->references('id')->on('servicios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_servicio');
    }
}
