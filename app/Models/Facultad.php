<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Facultad extends Model
{
    use HasFactory;

    protected $table = 'facultades';
    protected $primaryKey = 'id_facultad';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];



    // Relación: Una facultad tiene muchos programas académicos
    /* public function programas()
    {
        return $this->hasMany(Programa::class, 'facultad_id', 'id_facultad');
    } */
}
