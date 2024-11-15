<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    use HasFactory;

    protected $table = 'administrativos';
    protected $primaryKey = 'id_administrativos';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre_personal',
        'apellido_personal',
        'identificacion_personal',
        'personal_rol',
    ];
}
