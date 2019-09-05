<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Membresia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('membresia', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->decimal('costo');
          $table->date('vigencia');
          $table->integer('idAuth');
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
        Schema::dropIfExists('membresia');
    }
}
