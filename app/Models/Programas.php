<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    use HasFactory;

    protected $table = 'programas';
    protected $primaryKey = 'id_programa';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        
        'nombre_programa',
        'codigo_programa',
        'numero_semestres_programa',
        'numero_creditos_programa',
        'facultad_id',
    ];


    // Relación: Un programa académico pertenece a una facultad
    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'facultad_id', 'id_facultad');  // 'facultad_id' es la clave foránea
    }


    // Relación: Un programa académico tiene muchos estudiantes
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'programa_id', 'id_programa');
    }

}
