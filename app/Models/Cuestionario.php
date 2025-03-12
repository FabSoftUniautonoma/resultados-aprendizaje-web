<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    use HasFactory;

    protected $table = 'cuestionarios';

    protected $primaryKey = 'id_cuestionario';

    protected $fillable = [
        'rubrica_id',
        'titulo',
        'descripcion',
        'fecha_apertura',
        'fecha_cierre',
        'limite_tiempo',
    ];
}
