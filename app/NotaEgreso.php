<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaEgreso extends Model
{
    protected $table="nota_egresos";
    protected $fillable = [
        'id',
        'fechaIngreso_seccion7',
        'fechaEgreso_seccion7',
        'motivoEgreso_seccion7',
        'diagnosticoFinal_seccion7',
        'resumenClinico_seccion7',
        'problemasClinicos_seccion7',
        'plan_seccion7',
        'recomendacionesVigilancia_seccion7',
        'cliente_id'
    ];

}
