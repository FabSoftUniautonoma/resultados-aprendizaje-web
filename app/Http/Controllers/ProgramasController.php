<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.programas_academicos.gestionar_programas');
    }

    public function create()
    {
        return view('admin.dashboard.programas_academicos.registrar_programas');
    }

}
