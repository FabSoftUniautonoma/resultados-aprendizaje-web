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
        Schema::create('programas_cursos', function (Blueprint $table) {
            $table->smallIncrements('id_programa_curso');
            $table->unsignedTinyInteger('programa_id');
            $table->unsignedMediumInteger('curso_id');
            $table->timestamps();

            $table->foreign('programa_id')
                ->references('id_programa')
                ->on('programas');

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
        Schema::dropIfExists('programas_cursos');
    }
};
