@extends('layouts.layout')

@section('title')
  Usar Membresia - NARANJO PLASTIC | CPTV

@endsection

@section('css')

<link rel="stylesheet" href="/plugins/select2/select2.min.css">
@endsection

@section('content')
<div class="card">
  <div class="card-header"><h4>Uso de Membresia </h4></div>
  <div class="card-body">
    <div class="col-md-8">
      <div class="input-group mb-3">
        <select id="selectCliente" class=" custom-select"  ></select>
      </div>
    </div>
    <div class="row">

      <div class="col-md-6">
        <center>
          <p>Credencial Frontal:</p><br>
          <canvas id="miCanvas" width="325" height="204">Su navegador no soporta Canvas.</canvas>
          <br>
          <button type="button" class="btn btn-danger btn-sm" name="button" id="downloadFornt"><i class="fa fa-download " aria-hidden="true"></i> Frente</button>
        </center>
      </div
      <div class="col-md-6">
        <center>
          <p>Crdencial Reverso:</p>
          <br>
          <canvas id="miCanvas2" width="325" height="204">Su navegador no soporta Canvas.</canvas>
          <br>
          <button type="button" class="btn btn-danger" name="button" id="downloadRear"><i class="fa fa-download " aria-hidden="true"></i> Reverso</button>

        </center>
      </div>
    </div>
  </div>
</div>

@endsection

@section('modal')

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="js/ServiciosJS/membresia.js"></script>
@endsection
