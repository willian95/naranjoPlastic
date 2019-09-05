<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormasPagos extends Model
{
    protected $table='formapagos';
    protected $fillable = [
        'id','descripcion'
    ];
}
