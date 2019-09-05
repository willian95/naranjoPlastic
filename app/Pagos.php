<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $table='pagos';
    protected $fillable = [
        'id',
        'folio',
        'idCliente',
        'pesos',
        'dollar',
        'tarjeta',
        'deposito',
        'transferencia',
        'cambio'
    ];
}
