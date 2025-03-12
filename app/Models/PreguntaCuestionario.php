<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntaCuestionario extends Model
{
    use HasFactory;

    protected $table = 'preguntas_cuestionarios';

    protected $primaryKey = 'id_pregunta_cuestionario';

    protected $fillable = [
        'cuestionario_id',
        'pregunta_id',
    ];

    public function cuestionarios()
    {
        return $this->belongsTo(Cuestionario::class, 'cuestionario_id', 'id_cuestionario');
    }

    public function preguntas()
    {
        return $this->belongsTo(Pregunta::class, 'pregunta_id', 'id_pregunta');
    }
}
