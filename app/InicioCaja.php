<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InicioCaja extends Model
{
  protected $table='caja';
  protected $fillable = [
   'id','idAuth','operacion','comentario','pesos','dolar'
  ];
}
