<?php

namespace Database\Seeders\Config;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        Rol::create([
            'name' => 'vicerrector',
            'guard_name' => 'web',
        ]);
        Rol::create([
            'name' => 'coordinador',
            'guard_name' => 'web',
        ]);
        Rol::create([
            'name' => 'estudiante',
            'guard_name' => 'web',
        ]);
    }
}
