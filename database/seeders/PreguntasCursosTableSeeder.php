<?php

namespace Database\Seeders;

use App\Models\PreguntaCurso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntasCursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PreguntaCurso::create([
            'pregunta_id' => 1,
            'curso_id' => 1,
        ]);
        PreguntaCurso::create([
            'pregunta_id' => 2,
            'curso_id' => 1,
        ]);
        PreguntaCurso::create([
            'pregunta_id' => 3,
            'curso_id' => 1,
        ]);
    }
}
