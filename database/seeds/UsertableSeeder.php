<?php

use Illuminate\Database\Seeder;
use App\User;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'nombres' => 'Super',
                'apellidos' => 'Administrador',
                'email' => 'super@super.com',
                'email_verified_at' => '2020-08-31 19:00:00',
                'password' => bcrypt('12345678'),
                'foto' => NULL,
                'tipo' => 1,
                'estado' => 1,
                'doc' => '12345678',
                'confirmado' => 1,
                'confirmacion_code' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-08-31 19:00:00',
                'updated_at' => '2020-08-31 19:00:00'

            ),
            1 =>
            array(
                'id' => 2,
                'nombres' => 'Administrador',
                'apellidos' => 'del sistema',
                'email' => 'admin@admin.com',
                'email_verified_at' => '2020-08-31 19:00:00',
                'password' => bcrypt('12345678'),
                'foto' => NULL,
                'tipo' => 1,
                'estado' => 1,
                'doc' => '12345678',
                'confirmado' => 1,
                'confirmacion_code' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-08-31 19:00:00',
                'updated_at' => '2020-08-31 19:00:00'

            )
        ));
    }
}
