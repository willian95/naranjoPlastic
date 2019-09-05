<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleMembresiaCliente extends Model
{
    protected $table='detallemembresiausuario';
    protected $fillable = [
      'id','nombre','tipo','cantidad','idMembresia','idProdServ'
    ];
}
