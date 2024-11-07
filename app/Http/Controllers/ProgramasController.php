<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultad;
use App\Models\Programas;

class ProgramasController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.programas_academicos.gestionar_programas');
    }

    public function create()
    {
        $facultades = Facultad::all(); // Obtiene todas las facultades
        //dd($facultades);
        return view('admin.dashboard.programas_academicos.registrar_programas', compact('facultades'));
    }



    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre_programa' => 'required|string|max:255',
            'codigo_programa' => 'required|integer|unique:programas,codigo_programa',
            'numero_semestres_programa' => 'required|integer|min:1',
            'numero_creditos_programa' => 'required|integer|min:1',
            'facultad_id' => 'required|exists:facultades,id', // Asegúrate de que la facultad exista en la tabla
        ]);

        // Crear un nuevo programa y guardar los datos
        Programas::create([
            'nombre_programa' => $request->nombre_programa,
            'codigo_programa' => $request->codigo_programa,
            'numero_semestres_programa' => $request->numero_semestres_programa,
            'numero_creditos_programa' => $request->numero_creditos_programa,
            'facultad_id' => $request->facultad_id, // Relación con la facultad
        ]);

        // Redirigir a una vista o página después de guardar
        return redirect()->route('registrarProgramas.create')->with('success', 'Programa creado exitosamente');
    }
}
