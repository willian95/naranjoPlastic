<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('detalleServicio', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idProducto');
          $table->integer('idServicio');
          $table->integer('productoSesion');
          $table->integer('productoCompleto');
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
        Schema::dropIfExists('detalleServicio');
    }
}
