var table;
var fechaInicia;
var fechaFina;
var iid=0;

$(document).ready(function() {
  $('a').removeClass('active');
  $('#reporte').addClass('active');
  $('#ventaCaj').addClass('active');
  fechaInicia=$('#fechaInicia').val();
  fechaFina=$('#fechaFina').val();
  iid:$('#Servicio').val();
  tablaSearch(fechaInicia,fechaFina,iid);
});

function tablaSearch(fechaInicia,fechaFina,iid) {
  table =$('#Usertable').DataTable({
    searching: false,
    processing:true,
    serveSide:true,
    ajax: {
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: 'apiReporteGeneral',
      type: 'GET',
      data:{
        fechaInicial:  fechaInicia,
        fechaFinal: fechaFina,
        id:iid,
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
        oAria: {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
      },
      columns:[
        {data:'id', name:'id'},
        {data:'name', name:'name'},
        {data:'nombre', name:'name'},
        {data:'created_at', name:'name'},
        {data:'cantidad', name:'name'},

      ],
      dom: 'Bfrtip',
      lengthChange: true,
      buttons: [
          'excel',{extend: 'pdfHtml5',
          messageTop: mensaje,
                customize: function ( doc ) {

                       doc.content.splice( 1, 0, {
                        margin: [ 0, 0, 0, 0 ],
                        alignment: 'center',
                        image:  'data:image/png;base64,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'

                      } );


                }

              }, 'print'
      ],
      columnDefs: [
        { className: 'text-center', targets: [0,3,4] },
      ],
      footerCallback: function ( row, data, start, end, display ) {
        var api = this.api(), data;
        var intVal = function ( i ) {
          return typeof i === 'string' ?
            i.replace(/[\$,]/g, '')*1 :
            typeof i === 'number' ?
              i : 0;
        };

        var Total2 = api
          .column( 4 )
          .data()
          .reduce( function (a, b) {
            return intVal(a) + intVal(b);
        }, 0 );

	    $( api.column( 3 ).footer() ).html('Total');
        $( api.column( 4 ).footer() ).html(Total2);
      },
  });
}
$('#Buscar').click(function() {
  if (fechaInicia<=fechaFina) {
    $('#Usertable').DataTable().destroy();
    tablaSearch($('#fechaInicia').val(),$('#fechaFina').val(),$('#Servicio').val() );
  }
  else {
    swal({
      position: 'center',
      type: 'warning',
      title: 'Fecha inicio es mayor a la final',
      showConfirmButton: false,
      timer: 2500
    });
  }
});
