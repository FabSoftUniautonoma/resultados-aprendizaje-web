<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Competencias y resultados
        $this->call(CompetenciasTableSeeder::class);
        $this->call(ResultadosAprendizajeTableSeeder::class);
        $this->call(ResultadosAprendizajeCompetenciasTableSeeder::class);
        // Cursos y resultados
        $this->call(CursosTableSeeder::class);
        $this->call(CursosResultadosAprendizajeTableSeeder::class);
        // Preguntas
        $this->call(PreguntasTableSeeder::class);
        $this->call(RespuestasTableSeeder::class);
        $this->call(PreguntasCursosTableSeeder::class);
        // Cuestionarios
        $this->call(RubricasTableSeeder::class);
        $this->call(CuestionariosTableSeeder::class);
        $this->call(PreguntasCuestionariosTableSeeder::class);

    }
}
