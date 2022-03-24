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
            $table->id('idusuario');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('cedula');
            $table->string('email')->unique();
            $table->string('contraseña');
            $table->string('direccion');
            // $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('idrol')->unsigned();
            $table->bigInteger('idciudad')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idrol')->references('idrol')->on('rols');
            $table->foreign('idciudad')->references('idciudad')->on('city');
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
