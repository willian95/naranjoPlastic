<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='venta';
    protected $fillable = [
        'id','idCliente','idVendedor','Total','abono','status','idTipoPago','idFormaPago','idTipoVenta','idTerapeuta'
    ];
}
