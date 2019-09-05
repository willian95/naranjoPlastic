@extends('layouts.layout')

@section('title')
 Agregar Stock ¨C NARANJO PLASTIC | CPTV
@endsection

@section('content')
<div class="card">
 <div class="card-header"><h4>Productos </h4></div>
  <div class="card-body">
   <div class="row">
    <div class="col-sm-12">
     <div class="card">
       <div class="card-header Aqua">
         Actualizar Stock
       </div>
       <div class="card-body">
        <div class="table-responsive">
          <table id="productostable" class="table table-striped table-sm" style="width:100%">
           <thead class="Aqua">
            <tr>
             <th>CÃ³digo</th>
             <th>Nombre del producto</th>
             <th>Cantidad en stock</th>
             <th>Acciones</th>
            </tr>
           </thead>
           <tbody>
           </tbody>
           <tfoot >
                  <tr >
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
    </div>
    <div class="col-sm-12">
      <div class="card">
         <div class="card-header Aqua">
             Historial Movimientos de Stock
         </div>
         <div class="card-body">
           <div class="table-responsive">
              <table id="Usertable" class="table table-striped  table-sm" style="width:100%">
                <thead class=" Aqua ">
                  <tr>
                    <th>Fecha</th>
                    <th>Producto</th>
                    <th>Cantidad Agregada</th>
                    <th>Nombre de Usuario</th>
                  </tr>
                 </thead>
                 <tbody>
                 </tbody>
                 <tfoot >
                  <tr >
                   <th></th>
                   <th></th>
                   <th></th>
                  </tr>
                 </tfoot>
                </table>
               </div>
              </div>
             </div>
            </div>
           </div>
    	  </div>
 	</div>
</div>


@endsection

@section('modal')
    @include('productos.modals.addStock')
@endsection

@section('js')
    <script src="js/ProductosJS/stock.js"></script>
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
