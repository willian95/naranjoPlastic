@extends('layouts.layout')

@section('title')
  Membresias - Naranjo Plastic | CPTV
@endsection

@section('content')
<div class="card">
 <div class="card-header "><h4>Catálogo de Membresias</h4></div>
 <div class="card-body">
   <div class="col-sm-12"><button class=" float-right btn fa fa-plus btn-success btn-sm" id="btnAddMembresia" ><a> Membresia</a></button></div>
   <br>
   <div class="table-responsive">
      <table id="membresias" class="table table-striped table-sm"  style="width:100%">
              <thead>
                  <tr  class="text-white" style="background-color:#17bac2">
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Activo</th>
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
                </tr>
              </tfoot>
     </table>
    </div>
 </div>
</div>

@endsection

@section('modal')
    @include('admin.membresia.modal.addMembresia')
    @include('admin.membresia.modal.addProductos')
    @include('admin.membresia.modal.addServicios')
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
<script src="js/AdministradorJS/membresia.js"></script>

@endsection
