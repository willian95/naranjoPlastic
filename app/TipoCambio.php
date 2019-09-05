<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCambio extends Model
{
  protected $table='tipocambio';
  protected $fillable = [
    'id','cambio','idUser'
  ];
}
