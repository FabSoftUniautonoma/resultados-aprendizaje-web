<?php

namespace Database\Seeders;

use App\Models\ResultadoAprendizaje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultadosAprendizajeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ResultadoAprendizaje::create([
            'resultado_aprendizaje' => 'Resultado R1 de ejemplo',
        ]);
    }
}
