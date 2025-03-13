<?php

namespace App\Exports;

use App\Models\Cuestionario;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CuestionariosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cuestionario::select('id_cuestionario', 'titulo', 'descripcion', 'fecha_apertura', 'fecha_cierre', 'limite_tiempo', 'created_at')->get();
    }

    public function headings(): array
    {
        return ['ID', 'Título', 'Descripción', 'Fecha apertura', 'Fecha cierre', 'Límite de tiempo', 'Fecha de creación'];
    }
}
