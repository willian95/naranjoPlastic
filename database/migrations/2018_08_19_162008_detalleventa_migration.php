<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleventaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('folio');
            $table->integer('idProducto');
            $table->string('nombre')->nullable();
            $table->decimal('precio');
            $table->decimal('cantidad')->nullable();
            $table->decimal('cantidadDisponible')->nullable();
            $table->decimal('cantidadStock')->nullable();
            $table->decimal('total');
            $table->decimal('costo')->nullable();
            $table->decimal('idTerapeuta')->nullable();
            $table->integer('completo')->nullable();
            $table->integer('idCliente')->nullable();
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
        Schema::dropIfExists('detalleventa');
    }
}
