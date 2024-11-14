<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Facultad extends Model
{
    use HasFactory;

    protected $table = 'facultades';
    protected $primaryKey = 'id_facultad';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        
        'nombre_facultad',
        'descripcion_facultad',
    ];



      // Relación: Una facultad tiene muchos programas académicos
      public function programas()
      {
          return $this->hasMany(Programas::class, 'facultad_id', 'id_facultad');
      }
}
