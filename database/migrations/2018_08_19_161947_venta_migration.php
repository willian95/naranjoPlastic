<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VentaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCliente');
            $table->integer('idVendedor');
            $table->decimal('Total');
            $table->decimal('abono')->nullable();
            $table->string('status')->nullable();
            $table->integer('idTipoPago');
            $table->integer('idFormaPago');
            $table->integer('idTipoVenta');
            $table->integer('idTerapeuta')->nullable();
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
        Schema::dropIfExists('venta');
    }
}
