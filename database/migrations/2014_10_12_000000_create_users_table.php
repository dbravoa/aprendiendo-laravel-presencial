<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    #Sirve para crera o realizar cambios en la base de datos
    public function up(): void
    {
        #create: sirve para crear tablas
        Schema::create('users', function (Blueprint $table) {
            #campos o columnas de la tabla
            $table->id(); //En BD le pondrá un int
            $table->string('name'); //En BD le pondrá un varchar
            $table->string('email')->unique(); //Aqui ademas de varchar hará único cada registro
            $table->timestamp('email_verified_at')->nullable(); //Fecha y hora en la que se guardó un cambio
            $table->string('password'); //varchar
            $table->rememberToken();
            $table->timestamps(); //cuando_guarde(created_at) cuando_actualice(updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    #Sirve para retroceder, quitar los cambios que hicimos(Algo así como CTRL+Z)
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
