<?php

namespace Database\Seeders;

use App\Models\Rubrica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RubricasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rubrica::create([
            'rubrica' => 'Sobre la rubrica de evaluacion de cuestionario 1',
        ]);
    }
}
