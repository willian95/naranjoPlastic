<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('apePat');
          $table->string('apeMat')->nullable();
          $table->string('email')->nullable();
          $table->string('celular')->nullable();
          $table->string('TelCasa')->nullable();
          $table->integer('idCiudad');
          $table->integer('sexo');
          $table->integer('edoCivil');
          $table->date('fechaNacimiento');
          $table->string('puesto')->nullable();
          $table->string('compania')->nullable();
          $table->string('telCompania')->nullable();
          $table->string('emerNombre')->nullable();
          $table->string('emerRelacion')->nullable();
          $table->string('emerTel')->nullable();
          $table->integer('abdominales');
          $table->integer('circulacion');
          $table->integer('dermatologico');
          $table->integer('presion');
          $table->integer('alergias');
          $table->integer('vih');
          $table->integer('anticoagulante');
          $table->integer('hemorragias');
          $table->integer('embarazo');
          $table->integer('problemaAuditivo');
          $table->integer('medicamentos');
          $table->string('cualMedicamento')->nullable();
          $table->integer('tumores');
          $table->integer('hipertension');
          $table->integer('diabetes');
          $table->integer('menstruacion');
          $table->integer('cirugias');
          $table->integer('implantes');
          $table->integer('exposicionSol');
          $table->integer('colesterol');
          $table->integer('servicioProhibido');
          $table->string('cualServicio')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
