<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void  //actualizar
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->unsignedBigInteger('user_id');//creamos un campo sin signos que solo acepte numeros positivos,y que ademas acepte y sea del tipo entero integer 
            $table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('user_id')->constrained(); simplificando es lo mismo que arriba
            $table->timestamps(); // metodo de fechas crea campos para  fechas de creacion y actualizacion 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void  // regresar de version
    {
        Schema::dropIfExists('posts');
    }
};
