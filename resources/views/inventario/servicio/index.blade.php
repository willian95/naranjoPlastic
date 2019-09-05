@extends('layouts.layout')

@section('title')
  Productos en Servicios - Naranjo Plastic | CPTV
@endsection

@section('content')
<div class="card">
  <div class="card-header"><h4>Inventario Productos Utilizados en Servicios </h4></div>
  <div class="card-body">
     <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header Aqua">
            Productos Utilizados en Servicios
        </div>
        <div class="card-body">
          <div class="col-md-12">
            <div class="form-group row ">
              <label for="Servicio " class="col-md-1 col-form-label">Servicio</label>
              <div class="col-md-7">
                <select class="form-control form-control-sm" id="Servicio">

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
        <hr>
            <div class="table-responsive">
              <table id="Usertable" class="table table-striped  table-sm" style="width:100%">
                <thead class=" Aqua ">
                  <tr>
                    <th>Id</th>
                    <th>Terapeuta</th>
                    <th>Paciente</th>
                    <th>Producto</th>
                    <th>Cantidad gm producto</th>
                    <th>GM utilizados</th>
                    <th>GM disponible</th>
                    <th>Registro de servicio</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
              		<tr><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th> </tr>
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
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script type="text/javascript">
  var f = new Date();
  var fecha='Fecha:'+f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()+'';
  var auth="\n Nombre:"+"{{ (Auth::user()->name)}} {{ (Auth::user()->apePat)}} {{ (Auth::user()->apeMat)}}";
  var direccion='\n'+'RenewVa Spa - Sucursal Rio: Diego Rivera 2351, Zona Urbana Rio Tijuana, 22010 Tijuana, B.C.'
  var mensaje=fecha+auth+direccion;

</script>
<script type="text/javascript">
var table;
var fechaInicia;
var fechaFina;
var array=[];


$(document).ready(function() {
    $('a').removeClass('active');
    $('#inventario').addClass('active');
    $('#inventarioServicio').addClass('active');

   fechaInicia=$('#fechaInicia').val();
   fechaFina=$('#fechaFina').val();
   $.ajax({
     url:'inventarioServicioTipo',
     type:'GET',
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     },
     success : function(data) {
  console.log(data);
  var duplicadosEliminados = eliminarObjetosDuplicados(data.responseData, 'nombre');
  for (var i = 0; i < duplicadosEliminados.length; i++) {
     $('#Servicio').append('<option value="'+duplicadosEliminados[i].idProducto+'">'+duplicadosEliminados[i].nombre+'</option>');
  }
  console.log(duplicadosEliminados);
     },
   });
   tablaSearch(fechaInicia,fechaFina);

} );
function eliminarObjetosDuplicados(arr, prop) {
     var nuevoArray = [];
     var lookup  = {};

     for (var i in arr) {
         lookup[arr[i][prop]] = arr[i];
     }

     for (i in lookup) {
         nuevoArray.push(lookup[i]);
     }

     return nuevoArray;
}

function tablaSearch(fechaInicia,fechaFina,id) {
  table =$('#Usertable').DataTable({
      searching: false,
      processing:true,
      serveSide:true,
      ajax: {
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: 'apiInventarioServicio',
          type: 'GET',
          data:{
              fechaInicial:  fechaInicia,
              fechaFinal: fechaFina,
              idTipoServicio:id,
          },
      },
      language:{
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "<<",
            "sLast":     ">>",
            "sNext":     ">",
            "sPrevious": "<"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
      },
      columns:[

        {data:'id', name:'id'},
        {data:'Terapeuta',name:'name'},
        {data:'cliente',name:'name'},
        {data:'descripcion',name:'name'},
        {data:'stock', name:'id'},
        {data:'servicioCantidad', name:'id'},
        {data:'disponible', name:'id'},
        {data:'created_at', name:'id'},
      ],
      dom: 'Bfrtip',
      lengthChange: true,
      buttons: [
          'excel', {extend: 'pdfHtml5',
          messageTop: mensaje, 
                customize: function ( doc ) {

                       doc.content.splice( 1, 0, {
                        margin: [ 0, 0, 0, 0 ],
                        alignment: 'center',
                        image: 'data:image/png;base64,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'

                    } );


                }

              }, 'print'
      ]
  });
}
$('#Buscar').click(function() {
  fechaInicia=$('#fechaInicia').val();
  fechaFina=$('#fechaFina').val();
  if (fechaInicia<=fechaFina) {
    $('#Usertable').DataTable().destroy();
    tablaSearch($('#fechaInicia').val(),$('#fechaFina').val(),$('#Servicio').val());
  }
  else {
    swal({
      position: 'center',
      type: 'warning',
      title: 'Fecha inicio es mayor a la final',
      showConfirmButton: false,
      timer: 2000
    });
  }
});
</script>
@endsection
