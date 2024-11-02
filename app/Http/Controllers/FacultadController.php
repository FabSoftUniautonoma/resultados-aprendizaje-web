<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultadController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.gestionar_facultades'); 
    }
    
    public function create()
    {
        return view('admin.dashboard.registrar_facultades'); 
    }
    
}
