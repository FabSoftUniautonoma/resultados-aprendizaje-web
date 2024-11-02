<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprendizajeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.resultados_aprendizaje.gestionar_resultados');
    }

    public function create()
    {
        return view('admin.dashboard.resultados_aprendizaje.registrar_resultados');
    }

}
