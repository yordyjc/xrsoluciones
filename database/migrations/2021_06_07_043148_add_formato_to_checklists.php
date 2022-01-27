<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFormatoToChecklists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checklists', function (Blueprint $table) {
            $table->integer('formato_id')->unsigned();//1->camioneta||2->Camion grua||3->Camion mezclador
            $table->integer('orden_id')->unsigned()->after('formato_id');
        });
        Schema::table('checklists', function($table) {
            $table->foreign('formato_id')->references('id')->on('formatos');
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
        //
    }
}
