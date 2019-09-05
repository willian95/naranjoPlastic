<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVentaServicio extends Model
{
    protected $table='detalleventaservicio';
    protected $fillable = [
        'id',
        'idTerapeuta',
        'idCliente',
        'idProducto',
        'stock',
        'servicioCantidad',
        'disponible',
        'idTipoServicio'
    ];
}
