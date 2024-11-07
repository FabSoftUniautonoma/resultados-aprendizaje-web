<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    use HasFactory;

    protected $table = 'programas';

    protected $fillable = [
        
        'nombre_programa',
        'codigo_programa',
        'numero_semestres_programa',
        'numero_creditos_programa',
        'facultad_id',
    ];

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'facultad_id');  // 'facultad_id' es la clave foránea
    }

}
