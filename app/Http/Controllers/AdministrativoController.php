<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrativoController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.personal_administrativo.gestionar_personal');
    }

    public function create()
    {
        return view('admin.dashboard.personal_administrativo.registrar_personal');
    }

}
