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
        Schema::create('preguntas_cuestionarios', function (Blueprint $table) {
            $table->bigIncrements('id_pregunta_cuestionario');
            $table->unsignedBigInteger('cuestionario_id');
            $table->unsignedBigInteger('pregunta_id');
            $table->timestamps();

            $table->foreign('cuestionario_id')
                ->references('id_cuestionario')
                ->on('cuestionarios');

            $table->foreign('pregunta_id')
                ->references('id_pregunta')
                ->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas_cuestionarios');
    }
};
