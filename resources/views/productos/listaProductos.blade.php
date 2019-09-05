@extends('layouts.layout')

@section('title')
 Alta de Productos ¨C NARANJO PLASTIC | CPTV
@endsection
<!-- Seccion de contenido -->
@section('content')
<div class="card">
        <div class="card-header"><h4>Productos</h4>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive">
          <button style="float:right" class="btn btn-success btn-sm" id="addProducto"><i class="fa fa-plus " aria-hidden="true"> Producto</i></button>
          <table id="tablaProductos" class="table table-striped table-sm">
            <thead class=" Aqua ">
                <tr>
                  <th>CÃ³digo</th>
                  <th>Nombre del producto</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>Registro</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
@endsection
<!-- Seccion Modales -->
@section('modal')
    @include('productos.modals.addProducto')
@endsection
<!-- Seccion de archivos JS -->
@section('js')
    <script src="js/ProductosJS/productos.js"></script>
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
@endsection
