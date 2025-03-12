<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoResultadoAprendizaje extends Model
{
    use HasFactory;

    protected $table = 'cursos_resultados_aprendizaje';

    protected $primaryKey = 'id_curso_resultado_aprendizaje';

    protected $fillable = [
        'curso_id',
        'resultado_aprendizaje_id',
    ];

    public function cursos()
    {
        return $this->belongsTo(Curso::class, 'curso_id', 'id_curso');
    }

    public function resultadosAprendizaje()
    {
        return $this->belongsTo(ResultadoAprendizaje::class, 'resultado_aprendizaje_id', 'id_resultado_aprendizaje');
    }
}
