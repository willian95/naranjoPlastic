var idUpdate;
var cantAdd = 0;
var table;
var table2;

$('#Modal1').on('shown.bs.modal', function () {
    $('#cantidadAdd').focus();
})

$(document).ready(function() {
    table =$('#productostable').DataTable({
        processing:true,
        serveSide:true,
        ajax:'cargaProductosStock',
        columns:[
            {data:'codigo', name:'codigo'},
            {data:'descripcion',name:'descripcion'},
            {data:'existencia', name:'existencia'},
            {data:'action', name:'action',orderable:false,searchable:false},
        ],
        dom: 'Bfrtip',
        lengthChange: true,
        buttons: [
            'excel', 'pdf', 'print'
        ],
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
          { className: 'text-center', targets: [0,2,3] },
        ],
    });

    table2 =$('#Usertable').DataTable({
        processing:true,
        serveSide:true,
        ajax:'historicoMovStock',
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
          {data:'descripcion',name:'descripcion'},
          {data: 'cantidad', name: 'cantidad'},
          {data:'nombre',name:'nombre'},
        ],
        dom: 'Bfrtip',
        lengthChange: true,
        buttons: [
          'excel', 'pdf', 'print'
        ]
      });

    $('a').removeClass('active');
    $('#menuProducto').addClass('active');
    $('#menuStockProducto').addClass('active');
});

function actualizarUsuario(id){
    busqueda(id);
    $('#Modal1').modal('show');
}

function busqueda(id){
    $.ajax({
        url:  'buscaStockProducto',
        type: 'GET',
        data: {id:id},
        success: function(data, textStatus, jqXHR) {
            idUpdate = data.responseData[0].id;
            $('#codigoActualizar').val(data.responseData[0].codigo);
            $('#DescripcionActualizar').val(data.responseData[0].descripcion);
            cantAdd = data.responseData[0].existencia;
        }
    });
}

function agregarStock(){
    if($('#cantidadAdd').val() == ''){
        swal({
            position:'center',
            type: 'error',
            title: 'Favor de capturar una cantidad',
            showConfirmButton: false,
            timer: 1500
        });
        $('#cantidadAdd').focus();
    }
    else{
        cantAdd = parseInt(cantAdd) + parseInt($('#cantidadAdd').val());
        console.log(cantAdd);
        insertar(idUpdate,parseInt($('#cantidadAdd').val()),cantAdd);
        //actualiza(idUpdate,cantAdd);
    }
}

function actualiza(id,cantidad) {
    $.ajax({
        headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: 'actualizaInventario',
    type: 'POST',
    data: {
       id: id,
       existencia: cantidad,
    },
    success: function(data, textStatus, jqXHR) {
       $('#Modal1').modal('hide');

        swal({
            position:'center',
            type: 'success',
            title: 'Inventario actualizado!',
            showConfirmButton: false,
            timer: 1500
        });
        table.ajax.reload();
        table2.ajax.reload();
        idUpdate = '';
        cantAdd = 0;
        $('#cantidadAdd').val("");
    },
    error: function(xhr,ajaxOptions,thrownError){
    }
  });
}

function insertar(id,cantidad,cantAdd) {
    $.ajax({
        headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: 'insertarMovInventario',
    type: 'POST',
    data: {
       idproducto: id,
       cantidad: cantidad,
    },
    success: function(data, textStatus, jqXHR) {
        actualiza(idUpdate,cantAdd);
    },
    error: function(xhr,ajaxOptions,thrownError){
    }
  });
}
