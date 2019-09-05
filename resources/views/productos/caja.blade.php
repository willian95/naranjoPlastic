@extends('layouts.layout')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@section('title')
  Vender Productos - NARANJO PLASTIC | CPTV
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Inicio de Caja  </h4>
    </div>
    <div class="card-body">
         <div class="row">
              <div class="form-group col-sm-12">
                <label class="form-control-label">Caja:</label>
                <select class="form-control" id="selectCaja">
                  <option value="1"  >Elige uno</option>
                  <option value="Inicio">Inicio</option>
                  <option value="Retiro">Retiro</option>
                  <option value="Entrada">Entrada</option>
                  <option value="Cierre">Cierre</option>
                </select>
              </div>
            </div>
            <div class="row">
              <label class="form-control-label">Comentario:</label>
              <textarea class="form-control" id="comentarioCaja" rows="3"></textarea>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label class="form-control-label">Pesos:</label>
                <input type="number" class="form-control" id="pesoCaja" value="0">
              </div>
              <div class="col-md-6">
                <label class="form-control-label">Dolar:</label>
                <input type="number" class="form-control" id="dolarCaja" value="0">
              </div>

            </div>
		<div class="modal-footer"> 
	        <button type="button" id="guardarCaja" class="btn btn-grisOscuro">Guardar</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="js/ProductosJS/ventas.js"></script>
     <script>
     $(document).ready(function() {
 	 $('a').removeClass('active');
    	 $('#MenuInicioCaja').addClass('active');
 	 
 	 });
  </script>
    
    
@endsection
