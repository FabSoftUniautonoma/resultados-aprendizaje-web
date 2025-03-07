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
        Schema::create('preguntas_cursos', function (Blueprint $table) {
            $table->bigIncrements('id_pregunta_curso');
            $table->unsignedBigInteger('pregunta_id');
            $table->unsignedMediumInteger('curso_id');
            $table->timestamps();

            $table->foreign('pregunta_id')
                ->references('id_pregunta')
                ->on('preguntas');

            $table->foreign('curso_id')
                ->references('id_curso')
                ->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas_cursos');
    }
};
