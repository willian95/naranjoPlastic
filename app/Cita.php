<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
  protected $table='cita';
  protected $fillable = [
    'horaInicio', 'horaFinal','fechaCita','idTerapeuta','idServicio', 'idConsultorio','idCliente','idAuth','observacion',
  ];
}
