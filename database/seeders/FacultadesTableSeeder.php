<?php

namespace Database\Seeders;

use App\Models\Facultad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facultad::create([
            'nombre' => 'Facultad de ingenierias y ciencias naturales',
            'descripcion' => 'Descripcion de la facultad',
        ]);
    }
}
