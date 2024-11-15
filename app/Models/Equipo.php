<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipo extends Model
{
  use HasFactory;
  protected $fillable = [
    'nombre',
    'tipo',
    'fecha_adquisicion',
    'estado',
    'imagen'
  ];

  public function mantenimientos()
  {
    return $this->hasMany(Mantenimiento::class, 'id_equipo');
  }
}
