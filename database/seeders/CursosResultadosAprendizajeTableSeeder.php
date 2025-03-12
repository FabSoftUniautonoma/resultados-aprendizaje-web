<?php

namespace Database\Seeders;

use App\Models\CursoResultadoAprendizaje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursosResultadosAprendizajeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CursoResultadoAprendizaje::create([
            'curso_id' => 1,
            'resultado_aprendizaje_id' => 1,
        ]);
    }
}
