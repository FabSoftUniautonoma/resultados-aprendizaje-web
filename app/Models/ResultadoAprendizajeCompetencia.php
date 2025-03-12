<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadoAprendizajeCompetencia extends Model
{
    use HasFactory;

    protected $table = 'resultados_aprendizaje_competencias';

    protected $primaryKey = 'id_resultado_aprendizaje_competencia';

    protected $fillable = [
        'competencia_id',
        'resultado_aprendizaje_id',
    ];

    public function competencias()
    {
        return $this->belongsTo(Competencia::class, 'competencia_id', 'id_competencia');
    }

    public function resultadosAprendizaje()
    {
        return $this->belongsTo(ResultadoAprendizaje::class, 'resultado_aprendizaje_id', 'id_resultado_aprendizaje');
    }
}
