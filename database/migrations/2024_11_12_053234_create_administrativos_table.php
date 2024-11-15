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
        Schema::create('administrativos', function (Blueprint $table) {
            $table->id('id_administrativos');
            $table->string('nombre_personal');
            $table->string('apellido_personal');
            $table->string('identificacion_personal')->unique();
            $table->enum('personal_rol', ['Docente', 'Coordinador', 'Vicerrector']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrativos');
    }
};
