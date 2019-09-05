<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apePat')->nullable();
            $table->string('apeMat')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('idPuesto')->nullable();
            $table->string('celular')->nullable();
            $table->string('TelCasa')->nullable();
            $table->integer('idCiudad')->nullable();
            $table->string('inputFile')->nullable();
            $table->integer('usuarioPermiso');
            $table->integer('membresias');
            $table->integer('tipoCambio');
            $table->integer('altaCliente');
            $table->integer('venderServ');
            $table->integer('abonosServ');
            $table->integer('altaServ');
            $table->integer('usoMembresia');
            $table->integer('venderProd');
            $table->integer('abonoProd');
            $table->integer('altaProd');
            $table->integer('agregarStock');
            $table->integer('productoPublico');
            $table->integer('productoServ');
            $table->integer('rendimientoRepor');
            $table->integer('ventaCajero');
            $table->integer('ventaGeneral');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
