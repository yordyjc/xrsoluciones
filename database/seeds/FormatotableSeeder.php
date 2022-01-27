<?php

use Illuminate\Database\Seeder;

class FormatotableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formatos')->delete();
        DB::table('formatos')->insert(array(
            0=>
            array(
                'id'=>1,
                'nombre'=>'Checklis de Camioneta',
                'created_at' => '2021-08-31 19:00:00',
                'updated_at' => '2021-08-31 19:00:00'
            ),
            1=>
            array(
                'id'=>2,
                'nombre'=>'Checklis de Camión Grua',
                'created_at' => '2021-08-31 19:00:00',
                'updated_at' => '2021-08-31 19:00:00'
            ),
            2=>
            array(
                'id'=>3,
                'nombre'=>'Checklis de Camión Mezclador',
                'created_at' => '2021-08-31 19:00:00',
                'updated_at' => '2021-08-31 19:00:00'
            ),
        ));
    }
}
