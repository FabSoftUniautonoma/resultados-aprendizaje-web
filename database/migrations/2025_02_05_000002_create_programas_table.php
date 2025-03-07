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
            $table->unsignedTinyInteger('facultad_id');
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->tinyInteger('numero_semestres');
            $table->tinyInteger('numero_creditos');
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('facultad_id')
                ->references('id_facultad')
                ->on('facultades');
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

