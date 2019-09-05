<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
  protected $table='consultorio';
  protected $fillable = [
    'id','idAuth','consultorio'
  ];
}
