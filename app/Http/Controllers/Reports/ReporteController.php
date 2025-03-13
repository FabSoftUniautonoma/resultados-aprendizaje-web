<?php

namespace App\Http\Controllers\Reports;

use App\Exports\CuestionariosExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReporteController extends Controller
{
    public function index(){
        return view('admin.cuestionarios.reportes');
    }

    public function exportCuestionarios(){
        return Excel::download(new CuestionariosExport, 'cuestionarios.xlsx');
    }
}
