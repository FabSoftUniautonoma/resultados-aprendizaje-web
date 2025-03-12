<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntaCurso extends Model
{
    use HasFactory;

    protected $table = 'preguntas_cursos';

    protected $primaryKey = 'id_pregunta_curso';

    protected $fillable = [
        'pregunta_id',
        'curso_id',
    ];

    public function preguntas()
    {
        return $this->belongsTo(Pregunta::class, 'pregunta_id', 'id_pregunta');
    }

    public function cursos()
    {
        return $this->belongsTo(Curso::class, 'curso_id', 'id_curso');
    }


}
