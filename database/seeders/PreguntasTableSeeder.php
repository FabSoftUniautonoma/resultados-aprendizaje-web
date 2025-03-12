<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use App\Utils\Constants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pregunta::create([
            'tipo' => Constants::TIPO_PREGUNTA[1],
            'titulo' => 'Pregunta 1',
            'pregunta' => 'Sobre prueba como pregunta 1',
            'puntaje' => 5,
        ]);
        Pregunta::create([
            'tipo' => Constants::TIPO_PREGUNTA[1],
            'titulo' => 'Pregunta 2',
            'pregunta' => 'Sobre prueba como pregunta 2',
            'puntaje' => 5,
        ]);
        Pregunta::create([
            'tipo' => Constants::TIPO_PREGUNTA[1],
            'titulo' => 'Pregunta 3',
            'pregunta' => 'Sobre prueba como pregunta 3',
            'puntaje' => 5,
        ]);
    }
}
