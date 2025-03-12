<?php

namespace Database\Seeders;

use App\Models\Cuestionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuestionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cuestionario::create([
            'rubrica_id' => 1,
            'titulo' => 'Cuestionario 1 - Programa Ing de Softwarte 3 semestre',
            'descripcion' => 'Descripcion sobre el cuestionario',
            'fecha_apertura' => '2025-03-11 12:00',
            'fecha_cierre' => '2025-03-11 13:00',
            'limite_tiempo' => '30:00',
        ]);
    }
}
