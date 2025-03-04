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
            $table->tinyIncrements('id_programa');
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->tinyInteger('numero_semestres');
            $table->tinyInteger('numero_creditos');
            $table->text('descripcion');
            // Clave foránea para facultades
            $table->unsignedBigInteger('facultad_id'); // ID de la facultad relacionada

            // Definir la relación de clave foránea
            $table->foreign('facultad_id')
                ->references('id_facultad')
                ->on('facultades');  // Asegurando que la clave foránea se refiera correctamente a 'id_facultad'

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

