<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleMembresia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('DetalleMembresia', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->integer('cantidad');
          $table->string('tipo');
          $table->integer('idMembresia');
          $table->integer('idProdServ');
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
        //
    }
}
