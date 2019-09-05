@extends('layouts.layout')

@section('title')
  Alta de Servicios - NARANJO PLASTIC | CPTV
@endsection

@section('content')
<div class="card">
  <div class="card-header"><h4>Catalago de Servicios </h4></div>
  <div class="card-body">
      <div class="table-responsive">
        <button class=" float-right btn btn-success btn-sm" id="addUser"><a class="fa fa-plus"> Servicio</a></button>


      <table id="Usertable" class="table table-striped  table-sm" style="width:100%">
        <thead class=" Aqua ">
          <tr>
            <th>ID</th>
            <th>Nombre Servicio</th>
            <th>Precio Servicio Completo</th>
            <th>Precio por Sesión</th>
            <th>Registro</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

@endsection

@section('modal')
    @include('servicios.alta.modal.modal')

@endsection

@section('js')

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="js/ServiciosJS/alta.js"></script>
@endsection
