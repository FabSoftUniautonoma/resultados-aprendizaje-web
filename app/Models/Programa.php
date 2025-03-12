<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $table = 'programas';
    protected $primaryKey = 'id_programa';

    protected $fillable = [
        'nombre_programa',
        'codigo_programa',
        'numero_semestres_programa',
        'numero_creditos_programa',
        'facultad_id',
    ];
}
