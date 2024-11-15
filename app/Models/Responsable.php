<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responsable extends Model
{

  use HasFactory;
  protected $fillable = [
    'nombre',
    'cargo',
    'telefono',
    'correo'
  ];


  public function mantenimientos()
  {
    return $this->hasMany(Mantenimiento::class, 'id_responsable');
  }
}
