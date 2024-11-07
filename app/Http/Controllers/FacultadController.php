<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use Illuminate\Http\Request;


class FacultadController extends Controller
{
    // Función para mostrar la vista de gestionar facultades
    public function index()
    {
        return view('admin.dashboard.facultades.gestionar_facultades');
    }

    // Función para mostrar la vista de registrar facultades
    public function create()
    {

        return view('admin.dashboard.facultades.registrar_facultades');
    }

    // Función para guardar una nueva facultad en la base de datos

    public function store(Request $request)
    {
        $request->validate([
            'nombre_facultad' => 'required|string|max:255',
            'descripcion_facultad' => 'required|string',
        ]);

        // Crear nueva facultad y guardarla en la base de datos
        Facultad::create([
            'nombre_facultad' => $request->nombre_facultad,
            'descripcion_facultad' => $request->descripcion_facultad,
        ]);

        return redirect()->route('registrarfacultad.create')->with('success', 'Facultad agregada exitosamente');
    }
    
    
}
