<?php

use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\AprendizajeController;
use App\Http\Controllers\CuestionarioController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\VicerrectorController;
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
require __DIR__.'/auth.php';

Route::get('/', fn () => redirect()->route('login'))->name('principal');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'/* , 'verified' Se activa con SMTP */])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
Route::get('/gestionar-programas', [ProgramasController::class, 'index'])->name('gestionarProgramas.index');
Route::get('/registrar-programas', [ProgramasController::class, 'create'])->name('registrarProgramas.create');
Route::post('/registrar-programas', [ProgramasController::class, 'store'])->name('guardarProgramas.store');
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


/*
Rutas cuestionarios
*/
Route::resource('cuestionario',    CuestionarioController::class);

/* Route::get('cuestionarios/general',[CuestionarioController::class, 'index'])->name('cuestionario.index'); */
Route::get('cuestionarios'/* proximamente por el id del usuario */,
    [CuestionarioController::class, 'indexByUserId'])->name('cuestionario.indexByUserId');
Route::get('preguntas/{cuestionarioId}'/* proximamente por el id del usuario */,
    [CuestionarioController::class, 'showPreguntasByCuestionarioId'])->name('cuestionario.showPreguntasByCuestionarioId');

Route::post('intento/user/{cuestionarioId}/{userId}'/* proximamente por el id del usuario */,
    [CuestionarioController::class, 'storeIntentoUser'])->name('cuestionario.storeIntentoUser');

Route::get('resultado/user/{cuestionarioId}/{userId}',
    [CuestionarioController::class, 'showResultados'])->name('cuestionario.showResultados');
