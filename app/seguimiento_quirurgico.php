<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seguimiento_quirurgico extends Model
{
    
    protected $table = "seguimiento_quirurgico";

    protected $fillable= [
        "id", "cliente_id_seccion8", 'resumen_seccion8'
    ];

}
