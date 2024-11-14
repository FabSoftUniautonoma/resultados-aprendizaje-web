<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\AprendizajeController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultadObtenerController;

use App\Http\Controllers\VicerrectorController;



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


/*
Rutas Facultad
*/
Route::get('/gestionar-facultades', [FacultadController::class, 'index'])->name('gestionarfacultad.index');
Route::get('/registrar-facultades', [FacultadController::class, 'create'])->name('registrarfacultad.create');
Route::post('/registrar-facultades', [FacultadController::class, 'store'])->name('guardarfacultad.store');
/*
Rutas Programas Academicos
*/
// Mostrar la lista de programas
Route::get('/gestionar-programas', [ProgramasController::class, 'index'])->name('gestionarProgramas.index');

// Mostrar el formulario para registrar un nuevo programa
Route::get('/registrar-programas', [ProgramasController::class, 'create'])->name('registrarProgramas.create');
Route::post('/registrar-programas', [ProgramasController::class, 'store'])->name('guardarProgramas.store');
Route::get('/programas/{id_programa}/editar', [ProgramasController::class, 'edit'])->name('programas.edit');
Route::put('/programas/{id_programa}', [ProgramasController::class, 'update'])->name('programas.update');
Route::delete('/programas/{id_programa}', [ProgramasController::class, 'destroy'])->name('programas.destroy');


/*
Rutas Personal Administrativo
*/
Route::get('/gestinar-adiministartivo', [AdministrativoController::class, 'index'])->name('gestionarAdministrativos.index');
Route::get('/registrar-adiministartivo', [AdministrativoController::class, 'create'])->name('registrarAdministrativos.create');

/*
Rutas Estudiantes
*/
Route::get('/gestionar-estudiante', [EstudianteController::class, 'index'])->name('gestionarEstudiantes.index');
Route::get('/registrar-estudiante', [EstudianteController::class, 'create'])->name('registrarEstudiantes.create');
Route::post('/registrar-estudiante', [EstudianteController::class, 'store'])->name('guardarEstudiantes.store');

/*
Rutas Resultados de Aprendizaje
*/
Route::get('/gestionar-resultado', [AprendizajeController::class, 'index'])->name('gestionarAprendizaje.index');
Route::get('/registrar-resultado', [AprendizajeController::class, 'create'])->name('registrarAprendizaje.create');

/*
Rutas Roles
*/
Route::get('/gestionar-rol', [RolesController::class, 'index'])->name('gestionarRoles.index');



/*
Rutas vicerrector
*/
Route::get('/gestionar-vicerrector', [VicerrectorController::class, 'index'])->name('vicerrector.index');
