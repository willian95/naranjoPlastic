<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovStock extends Model
{
    protected $table='movinventario';
    protected $fillable = [
        'id',
        'idusuario',
        'idproducto',
        'cantidad'
    ];
}
