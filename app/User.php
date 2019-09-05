<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'apePat',
        'apeMat',
        'email',
        'password',
        'idPuesto',
        'celular',
        'TelCasa',
        'idCiudad',
        'usuarioPermiso',
        'membresias',
        'tipoCambio',
        'altaCliente',
        'venderServ',
        'abonosServ',
        'altaServ',
        'usoMembresia',
        'venderProd',
        'abonoProd',
        'altaProd',
        'agregarStock',
        'productoPublico',
        'productoServ',
        'rendimientoRepor',
        'ventaCajero',
        'ventaGeneral',
        'inputFiles',
        'colorUser',
        'borrarPermiso',
        'agendaAdmin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
