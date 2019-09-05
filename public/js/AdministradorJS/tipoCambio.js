var table;

const mio = swal.mixin({
 toast: true,
 position: 'center',
 showConfirmButton: false,
 timer: 3000
});


$(document).ready(function() {
  table =$('#Usertable').DataTable({
    processing:true,
    serveSide:true,
    ajax:'apiTipoCambio',
    order: [[ 0, "desc" ]],
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
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
    },
    columnDefs: [
      { className: 'text-center', targets: [0,1] },
    ],
    columns:[
      {data:'fecha', name:'fecha'},
      {data:'cambio',name:'cambio'},
      {data:'nombre',name:'nombre'},
    ],
    dom: 'Bfrtip',
    lengthChange: true,
    buttons: [
      'excel', 'pdf', 'print'
    ]
  });
  $('a').removeClass('active');
  $('#MenuAdmin').addClass('active');
  $('#tipoCambio0').addClass('active');
});




function ajaxRegistarTipoCambio() {

  var cambio=$('#tipoCambio1').val();
  if (cambio<=0) {
    mio({ type: 'error',title: 'Numero no valido'});
    return 0;
  } 
  $.ajax({
    url:'registerTipoCambio',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data:{
      cambio:cambio,
    },
    success : function(data) {
      table.ajax.reload();
      $('#tipoCambio1').val('');
      swal({
        position: 'center',
        type: 'success',
        title: 'Se guardo correctamente',
        showConfirmButton: false,
        timer: 1500
      });
    },
  })
}
