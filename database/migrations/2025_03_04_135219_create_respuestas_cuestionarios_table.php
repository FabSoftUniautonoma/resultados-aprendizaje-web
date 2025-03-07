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
        Schema::create('respuestas_cuestionarios', function (Blueprint $table) {
            $table->bigIncrements('id_respuesta_cuestionario');
            $table->unsignedBigInteger('usuario_cuestionario_id');
            $table->text('respuestas'); // Repuestas en un array decodificado
            $table->timestamps();

            $table->foreign('usuario_cuestionario_id')
                ->references('id_usuario_cuestionario')
                ->on('usuarios_cuestionarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas_cuestionarios');
    }
};
