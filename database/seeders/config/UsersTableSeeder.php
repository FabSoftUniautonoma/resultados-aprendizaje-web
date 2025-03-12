<?php

namespace Database\Seeders\Config;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super admin',
            'email' => 'admin@u.co',
            'password' => Hash::make('Uniautonoma2025@'),
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'Vicerrector Académico',
            'email' => 'vicerrector@u.co',
            'password' => Hash::make('Uniautonoma2025@'),
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'Coordinador Ing. Software y Computación',
            'email' => 'coordinacion.fai@u.co',
            'password' => Hash::make('Uniautonoma2025@'),
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'Estudiante 1 Ing. Software y Computación',
            'email' => 'est.fai@u.co',
            'password' => Hash::make('Uniautonoma2025@'),
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'Estudiante 2 Ing. Software y Computación',
            'email' => 'est.dos.fai@u.co',
            'password' => Hash::make('Uniautonoma2025@'),
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'Estudiante 3 Educacion Primera Infancia',
            'email' => 'est.educacion@u.co',
            'password' => Hash::make('Uniautonoma2025@'),
            'email_verified_at' => now()
        ]);





    }
}
