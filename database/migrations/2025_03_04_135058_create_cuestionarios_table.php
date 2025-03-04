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
        Schema::create('cuestionarios', function (Blueprint $table) {
            $table->smallIncrements('id_cuestionario');
            $table->tinyInteger('rubrica_id')->unsigned();
            $table->string('titulo', 100);
            $table->text('descripcion')->nullable();
            $table->dateTime('fecha_apertura');
            $table->dateTime('fecha_cierre');
            $table->time('limite_tiempo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuestionarios');
    }
};
