<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicioAgenda extends Model
{
  protected $table='tiposervicio';
  protected $fillable = [
    'id','idAuth','consultorio'
  ];
}
