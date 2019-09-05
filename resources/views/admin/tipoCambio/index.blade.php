@extends('layouts.layout')

@section('title')
  Tipo de Cambio - Naranjo Plastic | CPTV
@endsection

@section('content')
<div class="card">
  <div class="card-header"><h4>Tipo de Cambio </h4></div>
  <div class="card-body">
     <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-header Aqua">
            Tipo de cambio
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <label for="tipoCambio">Tipo de cambio *</label>
                <input class="form-control form-control-sm " id="tipoCambio1" type="number"  placeholder="ejemplo 12.80">
                <br>
                <button type="button"  onclick="ajaxRegistarTipoCambio();" class="btn btn-GrisOscuro btn-block">Agregar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="card">
          <div class="card-header Aqua">
            Historial de tipo de cambio
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table id="Usertable" class="table table-striped  table-sm" style="width:100%">
                <thead class=" Aqua ">
                  <tr>
                    <th>Fecha</th>
                    <th>Tipo de Cambio</th>
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

@endsection

@section('modal')
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
<script src="js/AdministradorJS/tipoCambio.js"></script>
@endsection
