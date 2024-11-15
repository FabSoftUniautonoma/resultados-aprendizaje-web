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
Route::get('/facultades/{id}/editar', [FacultadController::class, 'edit'])->name('facultades.edit');
Route::put('/facultades/{id}', [FacultadController::class, 'update'])->name('facultades.update');
Route::delete('/facultades/{id}', [FacultadController::class, 'destroy'])->name('facultades.destroy');



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
// Mostrar la lista de administrativos
Route::get('/gestionar-administrativos', [AdministrativoController::class, 'index'])->name('gestionarAdministrativos.index');

// Mostrar el formulario para registrar un nuevo administrativo
Route::get('/registrar-administrativos', [AdministrativoController::class, 'create'])->name('registrarAdministrativos.create');

// Guardar un nuevo administrativo en la base de datos
Route::post('/registrar-administrativos', [AdministrativoController::class, 'store'])->name('registrarAdministrativos.store');


// Mostrar el formulario para editar un administrativo existente
Route::get('administrativos/{id_administrativos}/editar', [AdministrativoController::class, 'edit'])->name('administrativos.edit');


// Actualizar los datos de un administrativo existente
Route::put('/administrativos/{id_administrativos}', [AdministrativoController::class, 'update'])->name('administrativos.update');

// Eliminar un administrativo de la base de datos
Route::delete('/administrativos/{id_administrativos}', [AdministrativoController::class, 'destroy'])->name('administrativos.destroy');



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
