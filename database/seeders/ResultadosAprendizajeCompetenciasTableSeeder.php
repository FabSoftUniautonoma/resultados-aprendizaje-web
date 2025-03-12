<?php

namespace Database\Seeders;

use App\Models\ResultadoAprendizajeCompetencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultadosAprendizajeCompetenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ResultadoAprendizajeCompetencia::create([
            'competencia_id' => 1,
            'resultado_aprendizaje_id' => 1,
        ]);
    }
}
