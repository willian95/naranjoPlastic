<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleventaservicioMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventaservicio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTerapeuta')->nullable();
            $table->integer('idCliente')->nullable();
            $table->integer('idProducto');
            $table->integer('stock');
            $table->integer('servicioCantidad')->nullable();
            $table->integer('disponible')->nullable();
            $table->integer('idTipoServicio')->nullable();
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
        Schema::dropIfExists('detalleventaservicio');
    }
}
