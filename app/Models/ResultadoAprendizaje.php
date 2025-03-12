<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadoAprendizaje extends Model
{
    use HasFactory;

    protected $table = 'resultados_aprendizaje';

    protected $primaryKey = 'id_resultado_aprendizaje';

    protected $fillable = [
        'resultado_aprendizaje',
    ];
}
