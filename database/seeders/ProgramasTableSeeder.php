<?php

namespace Database\Seeders;

use App\Models\Programa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Programa::create([
            'nombre' => 'Programa ingenieria de software y computacion',
            'codigo' => '90001',
            'numero_semestres' => '9',
            'numero_creditos' => 250,
            'facultad_id' => '1',
            'descripcion' => 'Descripcion de prueba ING SOFT',
        ]);
    }
}
