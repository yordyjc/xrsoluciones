<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos')->nullable();
            $table->string('cel')->nullable();
            $table->string('direccion')->nullable();
            $table->string('email')->unique();
            $table->text('observaciones')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('foto')->nullable();
            $table->integer('tipo');
            $table->boolean('estado')->default(1);
            $table->string('doc')->nullable();
            $table->boolean('confirmado')->default(1);
            $table->string('confirmacion_code')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
