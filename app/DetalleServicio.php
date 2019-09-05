<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleServicio extends Model
{
  protected $table='detalleservicio';
  protected $fillable = [
    'id',
    'idProducto',
    'idServicio',
    'productoCompleto',
    'productoSesion',
  ];
}
