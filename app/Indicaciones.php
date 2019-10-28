<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicaciones extends Model
{
    
    protected $table = "indicaciones_postquirurgicas";
    protected $fillable = [
        'indicaciones_seccion5',
        'cliente_id',
    ];

}
