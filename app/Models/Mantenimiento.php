<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mantenimiento extends Model
{
  use HasFactory;

  protected $fillable = [
    'id_equipo',
    'id_responsable',
    'fecha_mantenimiento',
    'tipo_mantenimiento',
    'descripcion',
    'costo'
  ];

  // Relación con Equipo (mantenimiento pertenece a un equipo)
  public function equipo()
  {
    return $this->belongsTo(Equipo::class, 'id_equipo');
  }

  // Relación con Responsable (mantenimiento pertenece a un responsable)
  public function responsable()
  {
    return $this->belongsTo(Responsable::class, 'id_responsable');
  }
}
