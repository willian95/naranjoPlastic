<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table='detalleventa';
    protected $fillable = [
        'id','folio','idProducto','precio','cantidad','nombre','cantidadDisponible','cantidadStock','total','costo','idTerapeuta','completo','idCliente'
    ];
}
