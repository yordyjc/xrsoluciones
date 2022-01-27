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
            $table->string('placa')->nullable();
            $table->string('operacion')->nullable();
            $table->string('operador')->nullable();
            $table->string('horometro')->nullable();
            $table->integer('kilometraje')->nullable();
            $table->date('fecha')->nullable();

            $table->boolean('estado_op_1')->nullable();
            $table->boolean('estado_op_2')->nullable();
            $table->boolean('estado_op_3')->nullable();

            /*********************
             ******* MOTOR********
             ********************/
            $table->integer('motor1_estado')->nullable();
            $table->text('motor1_descripcion')->nullable();
            $table->string('motor1_foto',100)->nullable();

            $table->integer('motor2_estado')->nullable();
            $table->text('motor2_descripcion')->nullable();
            $table->string('motor2_foto',100)->nullable();

            $table->integer('motor3_estado')->nullable();
            $table->text('motor3_descripcion')->nullable();
            $table->string('motor3_foto',100)->nullable();

            $table->integer('motor4_estado')->nullable();
            $table->text('motor4_descripcion')->nullable();
            $table->string('motor4_foto',100)->nullable();

            $table->integer('motor5_estado')->nullable();
            $table->text('motor5_descripcion')->nullable();
            $table->string('motor5_foto',100)->nullable();

            $table->integer('motor6_estado')->nullable();
            $table->text('motor6_descripcion')->nullable();
            $table->string('motor6_foto',100)->nullable();

            $table->integer('motor7_estado')->nullable();
            $table->text('motor7_descripcion')->nullable();
            $table->string('motor7_foto',100)->nullable();

            $table->integer('motor8_estado')->nullable();
            $table->text('motor8_descripcion')->nullable();
            $table->string('motor8_foto',100)->nullable();

            $table->integer('motor9_estado')->nullable();
            $table->text('motor9_descripcion')->nullable();
            $table->string('motor9_foto',100)->nullable();

            $table->integer('motor10_estado')->nullable();
            $table->text('motor10_descripcion')->nullable();
            $table->string('motor10_foto',100)->nullable();

            $table->integer('motor11_estado')->nullable();
            $table->text('motor11_descripcion')->nullable();
            $table->string('motor11_foto',100)->nullable();

            $table->integer('motor12_estado')->nullable();
            $table->text('motor12_descripcion')->nullable();
            $table->string('motor12_foto',100)->nullable();

            $table->integer('motor13_estado')->nullable();
            $table->text('motor13_descripcion')->nullable();
            $table->string('motor13_foto',100)->nullable();

            $table->integer('motor14_estado')->nullable();
            $table->text('motor14_descripcion')->nullable();
            $table->string('motor14_foto',100)->nullable();

            $table->integer('motor15_estado')->nullable();
            $table->text('motor15_descripcion')->nullable();
            $table->string('motor15_foto',100)->nullable();

            $table->integer('motor16_estado')->nullable();
            $table->text('motor16_descripcion')->nullable();
            $table->string('motor16_foto',100)->nullable();

            $table->integer('motor17_estado')->nullable();
            $table->text('motor17_descripcion')->nullable();
            $table->string('motor17_foto',100)->nullable();

            /*********************
             ****TRANSMISION******
             ********************/
            $table->integer('tran1_estado')->nullable();
            $table->text('tran1_descripcion')->nullable();
            $table->string('tran1_foto',100)->nullable();

            $table->integer('tran2_estado')->nullable();
            $table->text('tran2_descripcion')->nullable();
            $table->string('tran2_foto',100)->nullable();

            $table->integer('tran3_estado')->nullable();
            $table->text('tran3_descripcion')->nullable();
            $table->string('tran3_foto',100)->nullable();

            $table->integer('tran4_estado')->nullable();
            $table->text('tran4_descripcion')->nullable();
            $table->string('tran4_foto',100)->nullable();

            $table->integer('tran5_estado')->nullable();
            $table->text('tran5_descripcion')->nullable();
            $table->string('tran5_foto',100)->nullable();

            $table->integer('tran6_estado')->nullable();
            $table->text('tran6_descripcion')->nullable();
            $table->string('tran6_foto',100)->nullable();

            $table->integer('tran7_estado')->nullable();
            $table->text('tran7_descripcion')->nullable();
            $table->string('tran7_foto',100)->nullable();

            /*********************
             *****SUSPENCION******
             ********************/
            $table->integer('frenos1_estado')->nullable();
            $table->text('frenos1_descripcion')->nullable();
            $table->string('frenos1_foto',100)->nullable();

            $table->integer('frenos2_estado')->nullable();
            $table->text('frenos2_descripcion')->nullable();
            $table->string('frenos2_foto',100)->nullable();

            $table->integer('frenos3_estado')->nullable();
            $table->text('frenos3_descripcion')->nullable();
            $table->string('frenos3_foto',100)->nullable();

            $table->integer('frenos4_estado')->nullable();
            $table->text('frenos4_descripcion')->nullable();
            $table->string('frenos4_foto',100)->nullable();

            $table->integer('frenos5_estado')->nullable();
            $table->text('frenos5_descripcion')->nullable();
            $table->string('frenos5_foto',100)->nullable();

            $table->integer('frenos6_estado')->nullable();
            $table->text('frenos6_descripcion')->nullable();
            $table->string('frenos6_foto',100)->nullable();

            $table->integer('frenos7_estado')->nullable();
            $table->text('frenos7_descripcion')->nullable();
            $table->string('frenos7_foto',100)->nullable();

            /*********************
            *******ELECTRICO******
             ********************/
            $table->integer('ele1_estado')->nullable();
            $table->text('ele1_descripcion')->nullable();
            $table->string('ele1_foto',100)->nullable();

            $table->integer('ele2_estado')->nullable();
            $table->text('ele2_descripcion')->nullable();
            $table->string('ele2_foto',100)->nullable();

            $table->integer('ele3_estado')->nullable();
            $table->text('ele3_descripcion')->nullable();
            $table->string('ele3_foto',100)->nullable();

            $table->integer('ele4_estado');
            $table->text('ele4_descripcion')->nullable();
            $table->string('ele4_foto',100)->nullable();

            $table->integer('ele5_estado');
            $table->text('ele5_descripcion')->nullable();
            $table->string('ele5_foto',100)->nullable();

            $table->integer('ele6_estado');
            $table->text('ele6_descripcion')->nullable();
            $table->string('ele6_foto',100)->nullable();

            $table->integer('ele7_estado');
            $table->text('ele7_descripcion')->nullable();
            $table->string('ele7_foto',100)->nullable();

            $table->integer('ele8_estado');
            $table->text('ele8_descripcion')->nullable();
            $table->string('ele8_foto',100)->nullable();

            /*********************
            *******ACCESORIOS*****
             ********************/
            $table->integer('acce1_estado')->nullable();
            $table->text('acce1_descripcion')->nullable();
            $table->string('acce1_foto',100)->nullable();

            $table->integer('acce2_estado')->nullable();
            $table->text('acce2_descripcion')->nullable();
            $table->string('acce2_foto',100)->nullable();

            $table->integer('acce3_estado')->nullable();
            $table->text('acce3_descripcion')->nullable();
            $table->string('acce3_foto',100)->nullable();

            $table->integer('acce4_estado')->nullable();
            $table->text('acce4_descripcion')->nullable();
            $table->string('acce4_foto',100)->nullable();

            $table->integer('acce5_estado')->nullable();
            $table->text('acce5_descripcion')->nullable();
            $table->string('acce5_foto',100)->nullable();

            $table->integer('acce6_estado')->nullable();
            $table->text('acce6_descripcion')->nullable();
            $table->string('acce6_foto',100)->nullable();

            $table->integer('acce7_estado')->nullable();
            $table->text('acce7_descripcion')->nullable();
            $table->string('acce7_foto',100)->nullable();

            $table->integer('acce8_estado')->nullable();
            $table->text('acce8_descripcion')->nullable();
            $table->string('acce8_foto',100)->nullable();

            $table->integer('acce9_estado')->nullable();
            $table->text('acce9_descripcion')->nullable();
            $table->string('acce9_foto',100)->nullable();

            $table->integer('acce10_estado')->nullable();
            $table->text('acce10_descripcion')->nullable();
            $table->string('acce10_foto',100)->nullable();

            $table->integer('acce11_estado')->nullable();
            $table->text('acce11_descripcion')->nullable();
            $table->string('acce11_foto',100)->nullable();

            $table->integer('acce12_estado')->nullable();
            $table->text('acce12_descripcion')->nullable();
            $table->string('acce12_foto',100)->nullable();

            $table->integer('acce13_estado')->nullable();
            $table->text('acce13_descripcion')->nullable();
            $table->string('acce13_foto',100)->nullable();

            $table->integer('acce14_estado')->nullable();
            $table->text('acce14_descripcion')->nullable();
            $table->string('acce14_foto',100)->nullable();

            $table->integer('acce15_estado')->nullable();
            $table->text('acce15_descripcion')->nullable();
            $table->string('acce15_foto',100)->nullable();

            $table->integer('acce16_estado')->nullable();
            $table->text('acce16_descripcion')->nullable();
            $table->string('acce16_foto',100)->nullable();

            $table->integer('acce17_estado')->nullable();
            $table->text('acce17_descripcion')->nullable();
            $table->string('acce17_foto',100)->nullable();

            $table->integer('acce18_estado')->nullable();
            $table->text('acce18_descripcion')->nullable();
            $table->string('acce18_foto',100)->nullable();

            /*********************
            *******DIRECCION******
             ********************/
            $table->integer('dir1_estado')->nullable();
            $table->text('dir1_descripcion')->nullable();
            $table->string('dir1_foto',100)->nullable();

            $table->integer('dir2_estado')->nullable();
            $table->text('dir2_descripcion')->nullable();
            $table->string('dir2_foto',100)->nullable();

            $table->integer('dir3_estado')->nullable();
            $table->text('dir3_descripcion')->nullable();
            $table->string('dir3_foto',100)->nullable();

            $table->integer('dir4_estado')->nullable();
            $table->text('dir4_descripcion')->nullable();
            $table->string('dir4_foto',100)->nullable();

            $table->integer('dir5_estado')->nullable();
            $table->text('dir5_descripcion')->nullable();
            $table->string('dir5_foto',100)->nullable();

            $table->integer('dir6_estado')->nullable();
            $table->text('dir6_descripcion')->nullable();
            $table->string('dir6_foto',100)->nullable();

            /*********************
            **********GRUA********
             ********************/
            $table->integer('grua1_estado')->nullable();
            $table->text('grua1_descripcion')->nullable();
            $table->string('grua1_foto',100)->nullable();

            $table->integer('grua2_estado')->nullable();
            $table->text('grua2_descripcion')->nullable();
            $table->string('grua2_foto',100)->nullable();

            $table->integer('grua3_estado')->nullable();
            $table->text('grua3_descripcion')->nullable();
            $table->string('grua3_foto',100)->nullable();

            $table->integer('grua4_estado')->nullable();
            $table->text('grua4_descripcion')->nullable();
            $table->string('grua4_foto',100)->nullable();

            $table->integer('grua5_estado')->nullable();
            $table->text('grua5_descripcion')->nullable();
            $table->string('grua5_foto',100)->nullable();

            $table->integer('grua6_estado')->nullable();
            $table->text('grua6_descripcion')->nullable();
            $table->string('grua6_foto',100)->nullable();

            $table->integer('grua7_estado')->nullable();
            $table->text('grua7_descripcion')->nullable();
            $table->string('grua7_foto',100)->nullable();

            /***************************************************
            *****SISTEMA DE DISPOSITIVOS BOMBA BOWIE/NETZCH*****
            ****************************************************/
            $table->integer('bowie1_estado')->nullable();
            $table->text('bowie1_descripcion')->nullable();
            $table->string('bowie1_foto',100)->nullable();

            $table->integer('bowie2_estado')->nullable();
            $table->text('bowie2_descripcion')->nullable();
            $table->string('bowie2_foto',100)->nullable();

            $table->integer('bowie3_estado')->nullable();
            $table->text('bowie3_descripcion')->nullable();
            $table->string('bowie3_foto',100)->nullable();

            $table->integer('bowie4_estado')->nullable();
            $table->text('bowie4_descripcion')->nullable();
            $table->string('bowie4_foto',100)->nullable();

            $table->integer('bowie5_estado')->nullable();
            $table->text('bowie5_descripcion')->nullable();
            $table->string('bowie5_foto',100)->nullable();

            $table->integer('bowie6_estado')->nullable();
            $table->text('bowie6_descripcion')->nullable();
            $table->string('bowie6_foto',100)->nullable();

            /*******************************************************
            *****SISTEMA DE DISPOSITIVOS BOMBA ALWEILERS/NETZCH*****
            ********************************************************/
            $table->integer('alweilers1_estado')->nullable();
            $table->text('alweilers1_descripcion')->nullable();
            $table->string('alweilers1_foto',100)->nullable();

            $table->integer('alweilers2_estado')->nullable();
            $table->text('alweilers2_descripcion')->nullable();
            $table->string('alweilers2_foto',100)->nullable();

            $table->integer('alweilers3_estado')->nullable();
            $table->text('alweilers3_descripcion')->nullable();
            $table->string('alweilers3_foto',100)->nullable();

            $table->integer('alweilers4_estado')->nullable();
            $table->text('alweilers4_descripcion')->nullable();
            $table->string('alweilers4_foto',100)->nullable();

            $table->integer('alweilers5_estado')->nullable();
            $table->text('alweilers5_descripcion')->nullable();
            $table->string('alweilers5_foto',100)->nullable();

            $table->integer('alweilers6_estado')->nullable();
            $table->text('alweilers6_descripcion')->nullable();
            $table->string('alweilers6_foto',100)->nullable();

            /*******************************************************
            ********************SISTEMA VACIABLE********************
            ********************************************************/
            $table->integer('vaciable1_estado')->nullable();
            $table->text('vaciable1_descripcion')->nullable();
            $table->string('vaciable1_foto',100)->nullable();

            $table->integer('vaciable2_estado')->nullable();
            $table->text('vaciable2_descripcion')->nullable();
            $table->string('vaciable2_foto',100)->nullable();

            $table->integer('vaciable3_estado')->nullable();
            $table->text('vaciable3_descripcion')->nullable();
            $table->string('vaciable3_foto',100)->nullable();

            $table->integer('vaciable4_estado')->nullable();
            $table->text('vaciable4_descripcion')->nullable();
            $table->string('vaciable4_foto',100)->nullable();

            $table->integer('vaciable5_estado')->nullable();
            $table->text('vaciable5_descripcion')->nullable();
            $table->string('vaciable5_foto',100)->nullable();

            $table->integer('vaciable6_estado')->nullable();
            $table->text('vaciable6_descripcion')->nullable();
            $table->string('vaciable6_foto',100)->nullable();

            $table->integer('vaciable7_estado')->nullable();
            $table->text('vaciable7_descripcion')->nullable();
            $table->string('vaciable7_foto',100)->nullable();

            $table->integer('vaciable8_estado')->nullable();
            $table->text('vaciable8_descripcion')->nullable();
            $table->string('vaciable8_foto',100)->nullable();

            $table->integer('vaciable9_estado')->nullable();
            $table->text('vaciable9_descripcion')->nullable();
            $table->string('vaciable9_foto',100)->nullable();

            $table->integer('vaciable10_estado')->nullable();
            $table->text('vaciable10_descripcion')->nullable();
            $table->string('vaciable10_foto',100)->nullable();

            $table->integer('vaciable11_estado')->nullable();
            $table->text('vaciable11_descripcion')->nullable();
            $table->string('vaciable11_foto',100)->nullable();

            $table->integer('vaciable12_estado')->nullable();
            $table->text('vaciable12_descripcion')->nullable();
            $table->string('vaciable12_foto',100)->nullable();

            $table->integer('vaciable13_estado')->nullable();
            $table->text('vaciable13_descripcion')->nullable();
            $table->string('vaciable13_foto',100)->nullable();

            /*******************************************************
            *********************SISTEMA BOMBEABLE******************
            ********************************************************/
            $table->integer('bombeable1_estado')->nullable();
            $table->text('bombeable1_descripcion')->nullable();
            $table->string('bombeable1_foto',100)->nullable();

            $table->integer('bombeable2_estado')->nullable();
            $table->text('bombeable2_descripcion')->nullable();
            $table->string('bombeable2_foto',100)->nullable();

            $table->integer('bombeable3_estado')->nullable();
            $table->text('bombeable3_descripcion')->nullable();
            $table->string('bombeable3_foto',100)->nullable();

            $table->integer('bombeable4_estado')->nullable();
            $table->text('bombeable4_descripcion')->nullable();
            $table->string('bombeable4_foto',100)->nullable();

            $table->integer('bombeable5_estado')->nullable();
            $table->text('bombeable5_descripcion')->nullable();
            $table->string('bombeable5_foto',100)->nullable();

            $table->integer('bombeable6_estado')->nullable();
            $table->text('bombeable6_descripcion')->nullable();
            $table->string('bombeable6_foto',100)->nullable();

            $table->integer('bombeable7_estado')->nullable();
            $table->text('bombeable7_descripcion')->nullable();
            $table->string('bombeable7_foto',100)->nullable();

            $table->integer('bombeable8_estado')->nullable();
            $table->text('bombeable8_descripcion')->nullable();
            $table->string('bombeable8_foto',100)->nullable();

            $table->integer('bombeable9_estado')->nullable();
            $table->text('bombeable9_descripcion')->nullable();
            $table->string('bombeable9_foto',100)->nullable();

            $table->integer('bombeable10_estado')->nullable();
            $table->text('bombeable10_descripcion')->nullable();
            $table->string('bombeable10_foto',100)->nullable();

            $table->integer('bombeable11_estado')->nullable();
            $table->text('bombeable11_descripcion')->nullable();
            $table->string('bombeable11_foto',100)->nullable();

            $table->integer('bombeable12_estado')->nullable();
            $table->text('bombeable12_descripcion')->nullable();
            $table->string('bombeable12_foto',100)->nullable();

            $table->integer('bombeable13_estado')->nullable();
            $table->text('bombeable13_descripcion')->nullable();
            $table->string('bombeable13_foto',100)->nullable();

            /*******************************************************
            ********************KIT MEDIO AMBIENTE******************
            ********************************************************/
            $table->integer('ambiente1_estado')->nullable();
            $table->text('ambiente1_descripcion')->nullable();
            $table->string('ambiente1_foto',100)->nullable();

            $table->integer('ambiente2_estado')->nullable();
            $table->text('ambiente2_descripcion')->nullable();
            $table->string('ambiente2_foto',100)->nullable();

            $table->integer('ambiente3_estado')->nullable();
            $table->text('ambiente3_descripcion')->nullable();
            $table->string('ambiente3_foto',100)->nullable();

            $table->integer('ambiente4_estado')->nullable();
            $table->text('ambiente4_descripcion')->nullable();
            $table->string('ambiente4_foto',100)->nullable();

            $table->integer('ambiente5_estado')->nullable();
            $table->text('ambiente5_descripcion')->nullable();
            $table->string('ambiente5_foto',100)->nullable();

            $table->integer('ambiente6_estado')->nullable();
            $table->text('ambiente6_descripcion')->nullable();
            $table->string('ambiente6_foto',100)->nullable();

            $table->integer('ambiente7_estado')->nullable();
            $table->text('ambiente7_descripcion')->nullable();
            $table->string('ambiente7_foto',100)->nullable();

            $table->integer('ambiente8_estado')->nullable();
            $table->text('ambiente8_descripcion')->nullable();
            $table->string('ambiente8_foto',100)->nullable();

            /*******************************************************
            *************************DOCUMENTOS*********************
            ********************************************************/
            $table->integer('doc1_estado')->nullable();
            $table->text('doc1_descripcion')->nullable();
            $table->string('doc1_foto',100)->nullable();

            $table->integer('doc2_estado')->nullable();
            $table->text('doc2_descripcion')->nullable();
            $table->string('doc2_foto',100)->nullable();

            $table->integer('doc3_estado')->nullable();
            $table->text('doc3_descripcion')->nullable();
            $table->string('doc3_foto',100)->nullable();

            $table->integer('doc4_estado')->nullable();
            $table->text('doc4_descripcion')->nullable();
            $table->string('doc4_foto',100)->nullable();

            $table->integer('doc5_estado')->nullable();
            $table->text('doc5_descripcion')->nullable();
            $table->string('doc5_foto',100)->nullable();

            $table->integer('doc6_estado')->nullable();
            $table->text('doc6_descripcion')->nullable();
            $table->string('doc6_foto',100)->nullable();

            $table->text('observaciones')->nullable();
            $table->integer('estado')->default(1);
            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('checklists');
    }
}
