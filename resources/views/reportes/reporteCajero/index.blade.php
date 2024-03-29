@extends('layouts.layout')

@section('title')
  Venta por Cajero - NARANJO PLASTIC | CPTV
@endsection

@section('content')
<div class="card">
  <div class="card-header"><h4>Reporte de Ventas por Usuario</h4></div>
  <div class="card-body">
     <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header Aqua">
            Ventas por Usuario
          </div>
          <div class="card-body">
            <div class="col-md-12">
              <div class="form-group row ">
                <label for="Servicio " class="col-md-1 col-form-label">Usuario</label>
                <div class="col-md-7">
                  <select class="form-control form-control-sm" id="Servicio">
                    @foreach ($Empleados as $Empleado)
                      <option value="{{$Empleado->id}}">{{$Empleado->name}} {{$Empleado->apePat}} {{$Empleado->apeMat}}</option>
                    @endforeach
                  </select>
                </div>
                </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-md-1 col-form-label">Inicio</label>
                <div class="col-md-3">
                  <input type="datetime-local" class="form-control form-control-sm" name="fechaInicia" value="<?php echo date("Y-m-d");?>T00:00:00" id="fechaInicia"  >
                </div>
                <label for="inputEmail3" class="col-md-1 col-form-label">Final</label>
                <div class="col-md-3">
                  <input type="datetime-local" class="form-control form-control-sm" name="fechaFina" value="<?php echo date("Y-m-d");?>T00:00:00" id="fechaFina"  >
                </div>
                <div class="col-md-2">
                  <button type="button"  class="btn btn-GrisOscuro btn-sm btn-block" id="Buscar" name="button">Generar reporte</button>
                </div>
              </div>
            </div>
            <hr/>
            <div class="table-responsive">
              <table id="Usertable" class="table table-striped  table-sm" style="width:100%">
                <thead class=" Aqua ">
                  <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Producto y/o servicio</th>
                    <th>Fecha</th>
                    <th>Cantidad</th>
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
<script type="text/javascript">
  var f = new Date();
  var fecha='Fecha:'+f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()+'';
  var auth="\n Nombre:"+"{{ (Auth::user()->name)}} {{ (Auth::user()->apePat)}} {{ (Auth::user()->apeMat)}}";
  var direccion='\n'+'Jeuné-Clínica de Belleza Integral|ciudad del carmen  calle 35C #14 fracc.Malibran, Ciudad del carmen, Campeche C.P. 24197'
  var mensaje=fecha+auth+direccion;

</script>
<script src="js/ReportesJS/reporteCajero.js"></script>
@endsection
