<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.estudiantes.gestionar_estudiantes');
    }

    public function create()
    {
        return view('admin.dashboard.estudiantes.registrar_estudiantes');
    }

}
