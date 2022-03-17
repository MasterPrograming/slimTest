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
        // Metodo para crear las tablas en las migraciones
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Integer,  Unsigned, Increment
            $table->string('name', 100); // varchar por defecto de 250 caracteres
            //  Metodo para crear strings en bd con mas de 250 caracteres
            // $table->text('name');
            $table->string('email')->unique(); // Unico
            $table->timestamp('email_verified_at')->nullable(); // nullable es para establecer un campo que admite nulos
            $table->string('password');
            $table->rememberToken(); // varchar de 100 caracteres para guardar tokens de inicio de sesion
            $table->timestamps(); // Crea 2 columnas created_at y updated_at
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
