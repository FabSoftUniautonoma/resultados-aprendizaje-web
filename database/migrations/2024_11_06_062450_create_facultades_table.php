<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('facultades', function (Blueprint $table) {
            $table->tinyIncrements('id_facultad');  // Agrega una columna 'id' como clave primaria
            $table->string('nombre');  // Columna para el nombre de la facultad
            $table->text('descripcion');  // Columna para la descripción
            $table->timestamps();  // Tiempos de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facultades');
    }
};
