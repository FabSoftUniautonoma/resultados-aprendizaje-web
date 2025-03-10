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
        Schema::create('respuestas', function (Blueprint $table) {
            $table->bigIncrements('id_respuesta');
            $table->unsignedBigInteger('pregunta_id');
            $table->text('respuesta');
            $table->double('porcentaje');
            $table->timestamps();

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
        Schema::dropIfExists('respuestas');
    }
};
