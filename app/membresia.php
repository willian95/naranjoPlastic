<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class membresia extends Model
{
  protected $table='membresia';
  protected $fillable = [
      'id','nombre','vigencia','costo','idAuth'
  ];
}
