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
