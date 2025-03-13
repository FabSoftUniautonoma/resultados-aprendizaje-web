<?php

namespace Database\Seeders;

use App\Models\Respuesta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RespuestasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Respuesta::create([
            'pregunta_id' => 1,
            'respuesta' => 'Respuesta 1',
            'porcentaje' => 0,
        ]);
        Respuesta::create([
            'pregunta_id' => 1,
            'respuesta' => 'Respuesta 2',
            'porcentaje' => 0,
        ]);
        Respuesta::create([
            'pregunta_id' => 1,
            'respuesta' => 'Respuesta 3 correcta',
            'porcentaje' => 1,
        ]);
        Respuesta::create([
            'pregunta_id' => 1,
            'respuesta' => 'Respuesta 4',
            'porcentaje' => 0,
        ]);
        Respuesta::create([
            'pregunta_id' => 2,
            'respuesta' => 'Respuesta pregunta 2 - 1',
            'porcentaje' => 0,
        ]);
        Respuesta::create([
            'pregunta_id' => 2,
            'respuesta' => 'Respuesta pregunta 2 - 2 correcta',
            'porcentaje' => 1,
        ]);
        Respuesta::create([
            'pregunta_id' => 2,
            'respuesta' => 'Respuesta pregunta 2 - 3',
            'porcentaje' => 0,
        ]);
        Respuesta::create([
            'pregunta_id' => 2,
            'respuesta' => 'Respuesta pregunta 2 - 4',
            'porcentaje' => 0,
        ]);

        Respuesta::create([
            'pregunta_id' => 3,
            'respuesta' => 'Respuesta pregunta 3 - 1',
            'porcentaje' => 0,
        ]);
        Respuesta::create([
            'pregunta_id' => 3,
            'respuesta' => 'Respuesta pregunta 3 - 2 correcta',
            'porcentaje' => 1,
        ]);
        Respuesta::create([
            'pregunta_id' => 3,
            'respuesta' => 'Respuesta pregunta 3 - 3',
            'porcentaje' => 0,
        ]);
        Respuesta::create([
            'pregunta_id' => 3,
            'respuesta' => 'Respuesta pregunta 3 - 4',
            'porcentaje' => 0,
        ]);
    }
}
