<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPagos extends Model
{
    protected $table='tipopagos';
    protected $fillable = [
        'id','descripcion'
    ];
}
