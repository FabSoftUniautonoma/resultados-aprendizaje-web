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
        Schema::create('resultados_aprendizaje_competencias', function (Blueprint $table) {
            $table->mediumIncrements('id_resultado_aprendizaje_competencia');
            $table->unsignedTinyInteger('competencia_id');
            $table->unsignedTinyInteger('resultado_aprendizaje_id');
            $table->timestamps();

            $table->foreign('competencia_id', 'fk_competencias')
                ->references('id_competencia')
                ->on('competencias');

            $table->foreign('resultado_aprendizaje_id', 'fk_resultados_aprendizaje')
                ->references('id_resultado_aprendizaje')
                ->on('resultados_aprendizaje');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados_aprendizaje_competencias');
    }
};
