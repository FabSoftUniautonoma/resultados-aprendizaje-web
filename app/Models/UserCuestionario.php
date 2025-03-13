<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCuestionario extends Model
{
    use HasFactory;
    protected $table = 'usuarios_cuestionarios';

    protected $primaryKey = 'id_usuario_cuestionario';

    protected $fillable = [
        'usuario_id',
        'cuestionario_id',
        'respuestas_array',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'usuario_id', 'id');
    }

    public function cuestionarios()
    {
        return $this->belongsTo(Cuestionario::class, 'cuestionario_id', 'id_cuestionario');
    }
}
