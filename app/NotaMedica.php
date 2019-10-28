<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaMedica extends Model
{
    protected $table = "notas_medicas";
    protected $fillable = [
        'nota_medica_seccion6',
        'cliente_id'
    ];
}
