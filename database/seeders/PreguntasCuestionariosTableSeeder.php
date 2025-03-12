<?php

namespace Database\Seeders;

use App\Models\PreguntaCuestionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntasCuestionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PreguntaCuestionario::create([
            'cuestionario_id' => 1,
            'pregunta_id' => 1,
        ]);
        PreguntaCuestionario::create([
            'cuestionario_id' => 1,
            'pregunta_id' => 2,
        ]);
        PreguntaCuestionario::create([
            'cuestionario_id' => 1,
            'pregunta_id' => 3,
        ]);
    }
}
