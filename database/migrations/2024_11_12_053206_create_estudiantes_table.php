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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id('id_estudiante'); 
            $table->string('nombre_estudiante');
            $table->string('apellido_estudiante');
            $table->integer('codigo_estudiante')->unique();
            $table->string('correo_estudiante')->unique();
            $table->text('contraseña_estudiante');
            $table->unsignedBigInteger('programa_id'); // ID del programa relacionado

            // Definir la relación de clave foránea
            $table->foreign('programa_id')->references('id_programa')->on('programas')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
