<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Servicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('servicio', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->integer('idAuth');
          $table->integer('presioSesion');
          $table->integer('presioCompleto');
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
          Schema::dropIfExists('servicio');
    }
}
