<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleMembresia extends Model
{
  protected $table='detallemembresia';
  protected $fillable = [
      'id','nombre','tipo','cantidad','idMembresia','idProdServ'
  ];
}
