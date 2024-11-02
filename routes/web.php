<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacultadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('dashboard-uno', [HomeController::class, 'index'])->name('dashboard');

Route::get('/gestionar-facultades', [FacultadController::class, 'index'])->name('gestionarfacultad.index');
Route::get('/registrar-facultades', [FacultadController::class, 'create'])->name('registrarfacultad.create');

