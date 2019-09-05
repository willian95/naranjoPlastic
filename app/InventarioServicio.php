<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarioServicio extends Model
{
    protected $table='inventarioservicio';
    protected $fillable = [
        'id','botes','existencia'
    ];
}
