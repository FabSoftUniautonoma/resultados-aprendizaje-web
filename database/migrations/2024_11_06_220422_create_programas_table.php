<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_programa');
            $table->integer('codigo_programa');
            $table->integer('numero_semestres_programa');
            $table->integer('numero_creditos_programa');
            // Clave foránea para facultades
            $table->unsignedBigInteger('facultad_id'); // ID de la facultad relacionada

            // Definir la relación de clave foránea
            $table->foreign('facultad_id')->references('id')->on('facultades')->onDelete('cascade');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};
