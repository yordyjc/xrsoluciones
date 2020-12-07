<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatechecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo');
            $table->integer('orden_id')->unsigned();
            $table->string('placa');
            $table->string('operacion');
            $table->string('operador');
            $table->string('horometro');
            $table->integer('kilometraje');
            $table->date('fecha');

            $table->boolean('estado_op_1')->nullable();
            $table->boolean('estado_op_2')->nullable();
            $table->boolean('estado_op_3')->nullable();

            //motor
            $table->integer('motor1_estado');
            $table->text('motor1_descripcion')->nullable();
            $table->string('motor1_foto')->nullable();

            $table->integer('motor2_estado');
            $table->text('motor2_descripcion')->nullable();
            $table->string('motor2_foto')->nullable();

            $table->integer('motor3_estado');
            $table->text('motor3_descripcion')->nullable();
            $table->string('motor3_foto')->nullable();

            $table->integer('motor4_estado');
            $table->text('motor4_descripcion')->nullable();
            $table->string('motor4_foto')->nullable();

            $table->integer('motor5_estado');
            $table->text('motor5_descripcion')->nullable();
            $table->string('motor5_foto')->nullable();

            $table->integer('motor6_estado');
            $table->text('motor6_descripcion')->nullable();
            $table->string('motor6_foto')->nullable();

            $table->integer('motor7_estado');
            $table->text('motor7_descripcion')->nullable();
            $table->string('motor7_foto')->nullable();

            $table->integer('motor8_estado');
            $table->text('motor8_descripcion')->nullable();
            $table->string('motor8_foto')->nullable();

            $table->integer('motor9_estado');
            $table->text('motor9_descripcion')->nullable();
            $table->string('motor9_foto')->nullable();

            $table->integer('motor10_estado');
            $table->text('motor10_descripcion')->nullable();
            $table->string('motor10_foto')->nullable();

            $table->integer('motor11_estado');
            $table->text('motor11_descripcion')->nullable();
            $table->string('motor11_foto')->nullable();

            $table->integer('motor12_estado');
            $table->text('motor12_descripcion')->nullable();
            $table->string('motor12_foto')->nullable();

            $table->integer('motor13_estado');
            $table->text('motor13_descripcion')->nullable();
            $table->string('motor13_foto')->nullable();

            $table->integer('motor14_estado');
            $table->text('motor14_descripcion')->nullable();
            $table->string('motor14_foto')->nullable();

            $table->integer('motor15_estado');
            $table->text('motor15_descripcion')->nullable();
            $table->string('motor15_foto')->nullable();

            $table->integer('motor16_estado');
            $table->text('motor16_descripcion')->nullable();
            $table->string('motor16_foto')->nullable();

            $table->integer('motor17_estado');
            $table->text('motor17_descripcion')->nullable();
            $table->string('motor17_foto')->nullable();

            //transmision
            $table->integer('tran1_estado');
            $table->text('tran1_descripcion')->nullable();
            $table->string('tran1_foto')->nullable();

            $table->integer('tran2_estado');
            $table->text('tran2_descripcion')->nullable();
            $table->string('tran2_foto')->nullable();

            $table->integer('tran3_estado');
            $table->text('tran3_descripcion')->nullable();
            $table->string('tran3_foto')->nullable();

            $table->integer('tran4_estado');
            $table->text('tran4_descripcion')->nullable();
            $table->string('tran4_foto')->nullable();

            $table->integer('tran5_estado');
            $table->text('tran5_descripcion')->nullable();
            $table->string('tran5_foto')->nullable();

            $table->integer('tran6_estado');
            $table->text('tran6_descripcion')->nullable();
            $table->string('tran6_foto')->nullable();

            $table->integer('tran7_estado');
            $table->text('tran7_descripcion')->nullable();
            $table->string('tran7_foto')->nullable();

            //suspension
            $table->integer('frenos1_estado');
            $table->text('frenos1_descripcion')->nullable();
            $table->string('frenos1_foto')->nullable();

            $table->integer('frenos2_estado');
            $table->text('frenos2_descripcion')->nullable();
            $table->string('frenos2_foto')->nullable();

            $table->integer('frenos3_estado');
            $table->text('frenos3_descripcion')->nullable();
            $table->string('frenos3_foto')->nullable();

            $table->integer('frenos4_estado');
            $table->text('frenos4_descripcion')->nullable();
            $table->string('frenos4_foto')->nullable();

            //electrico
            $table->integer('ele1_estado');
            $table->text('ele1_descripcion')->nullable();
            $table->string('ele1_foto')->nullable();

            $table->integer('ele2_estado');
            $table->text('ele2_descripcion')->nullable();
            $table->string('ele2_foto')->nullable();

            $table->integer('ele3_estado');
            $table->text('ele3_descripcion')->nullable();
            $table->string('ele3_foto')->nullable();

            $table->integer('ele4_estado');
            $table->text('ele4_descripcion')->nullable();
            $table->string('ele4_foto')->nullable();

            $table->integer('ele5_estado');
            $table->text('ele5_descripcion')->nullable();
            $table->string('ele5_foto')->nullable();

            //Accesorios
            $table->integer('acce1_estado');
            $table->text('acce1_descripcion')->nullable();
            $table->string('acce1_foto')->nullable();

            $table->integer('acce2_estado');
            $table->text('acce2_descripcion')->nullable();
            $table->string('acce2_foto')->nullable();

            $table->integer('acce3_estado');
            $table->text('acce3_descripcion')->nullable();
            $table->string('acce3_foto')->nullable();

            $table->integer('acce4_estado');
            $table->text('acce4_descripcion')->nullable();
            $table->string('acce4_foto')->nullable();

            $table->integer('acce5_estado');
            $table->text('acce5_descripcion')->nullable();
            $table->string('acce5_foto')->nullable();

            $table->integer('acce6_estado');
            $table->text('acce6_descripcion')->nullable();
            $table->string('acce6_foto')->nullable();

            $table->integer('acce7_estado');
            $table->text('acce7_descripcion')->nullable();
            $table->string('acce7_foto')->nullable();

            $table->integer('acce8_estado');
            $table->text('acce8_descripcion')->nullable();
            $table->string('acce8_foto')->nullable();

            $table->integer('acce9_estado');
            $table->text('acce9_descripcion')->nullable();
            $table->string('acce9_foto')->nullable();

            $table->integer('acce10_estado');
            $table->text('acce10_descripcion')->nullable();
            $table->string('acce10_foto')->nullable();

            $table->integer('acce11_estado');
            $table->text('acce11_descripcion')->nullable();
            $table->string('acce11_foto')->nullable();

            $table->integer('acce12_estado');
            $table->text('acce12_descripcion')->nullable();
            $table->string('acce12_foto')->nullable();

            $table->integer('acce13_estado');
            $table->text('acce13_descripcion')->nullable();
            $table->string('acce13_foto')->nullable();

            $table->integer('acce14_estado');
            $table->text('acce14_descripcion')->nullable();
            $table->string('acce14_foto')->nullable();

            $table->integer('acce15_estado');
            $table->text('acce15_descripcion')->nullable();
            $table->string('acce15_foto')->nullable();

            $table->integer('acce16_estado');
            $table->text('acce16_descripcion')->nullable();
            $table->string('acce16_foto')->nullable();

            $table->integer('acce17_estado');
            $table->text('acce17_descripcion')->nullable();
            $table->string('acce17_foto')->nullable();

            $table->integer('acce18_estado');
            $table->text('acce18_descripcion')->nullable();
            $table->string('acce18_foto')->nullable();

            $table->text('observaciones')->nullable();
            $table->integer('estado')->default(1);
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });

        Schema::table('checklists', function($table) {
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
        Schema::dropIfExists('checklists');
    }
}
