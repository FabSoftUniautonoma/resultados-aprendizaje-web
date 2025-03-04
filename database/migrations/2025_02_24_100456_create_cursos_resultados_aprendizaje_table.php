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
        Schema::create('cursos_resultados_aprendizaje', function (Blueprint $table) {
            $table->mediumIncrements('id_curso_resultado_aprendizaje');
            $table->mediumInteger('curso_id')->unsigned();
            $table->tinyInteger('resultado_aprendizaje_id')->unsigned();
            $table->timestamps();

            $table->foreign('curso_id')
                ->references('id_curso')
                ->on('cursos');

            $table->foreign('resultado_aprendizaje_id')
                ->references('id_resultado_aprendizaje')
                ->on('resultados_aprendizaje');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos_resultados_aprendizaje');
    }
};
