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
        Schema::create('usuarios_cuestionarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario_cuestionario');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('cuestionario_id');
            $table->timestamps();

            $table->foreign('usuario_id')
                ->references('id')
                ->on('users');

            $table->foreign('cuestionario_id')
                ->references('id_cuestionario')
                ->on('cuestionarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_cuestionarios');
    }
};
