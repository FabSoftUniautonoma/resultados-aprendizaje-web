<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $primaryKey = 'id_estudiante';  
    public $incrementing = true;              
    protected $keyType = 'int';

    protected $fillable = [
        'nombre_estudiante',
        'apellido_estudiante',
        'codigo_estudiante',
        'correo_estudiante',
        'contraseña_estudiante',
        'programa_id',
    ];

    // Relación: Un estudiante pertenece a un programa académico
    public function programa()
    {
        return $this->belongsTo(Programas::class, 'programa_id', 'id_programa');  // 'programa_id' es la clave foránea
    }
}
