var table;
var table2;
var listaMembresias;
var contador=[];

$(document).ready(function() {

     listaMembresias=$('#membresias').DataTable({
      processing: true,
      serverSide: true,
      ajax:'listaMembresias',
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
      columns: [
        {data: 'id', name: 'id'},
        {data: 'nombre', name: 'nombre'},
        {data: 'costo', name: 'costo'},
        {data: 'vigencia', name: 'vigencia'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
      ],
      dom: 'Bfrtip',
      lengthChange: true,
      buttons: [
        'excel','pdf','print'
      ],
      columnDefs: [
        { className: 'text-center', targets: [0,2,3,4] },
      ],
    });

  table =$('#listaProductos').DataTable( {
      processing:true,
      serveSide:true,
      ajax:'showProductos',
      language:{
          "sProcessing":     "Procesando...",
          "sLengthMenu":     "",
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
      columns:[
          {data: 'id', name: 'id'},
          {data:'descripcion', name:'descripcion'},
          {data:'action', name:'action',orderable:false,searchable:false}
      ],
      columnDefs: [
        { className: 'text-center', targets: [0,2] },
      ],

  } );

    table2 =$('#listaServicios').DataTable( {
        processing:true,
        serveSide:true,
        ajax:'showServicios',
        language:{
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "",
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
        columns:[
          {data: 'id', name: 'id'},
          {data:'nombre', name:'nombre'},
          {data:'action', name:'action',orderable:false,searchable:false}
        ],
        columnDefs: [
          { className: 'text-center', targets: [0,2] },
        ],

    } );

    $('a').removeClass('active');
    $('#MenuAdmin').addClass('active');
    $('#MenuMembresia').addClass('active');
} );

function verMembresia(id) {
  $('.disableBtn').attr('disabled','disabled');
  visualizarMembresia(id,1);
  $('#Membresia').modal('show');
  $('#Membresia').removeAttr('onClick');
  $('#tituloNuevaMembresia').html('Ver Membresia');
  $('#agregarMembresia').hide();
  $('#btnListaServicios').hide();
  $('#btnListaProductos').hide();

  $('.disableBtn').attr('disabled','disabled');
}

function eliminaMembresia(id) {
  swal({
  title: 'Estás seguro?',
  text: "Se borrara Membresia de forma permanente",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#17bac2',
  cancelButtonColor: '#b5b3b3',
  confirmButtonText: 'Si, borrarlo!',
  cancelButtonText: 'No, cancelar',
  reverseButtons: true
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: 'eliminaMembresia',
        type:'get',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },data:{
              id:id
        },
        success: function(data,textStatus,jqXHR) {
          swal({
              position: 'center',
              type: 'success',
              title: 'La Membresia ha sido borrada',
              showConfirmButton: false,
              timer: 1500
            });
          listaMembresias.ajax.reload();
        }
        })
    }
  })
}
function agregarProducto(id){
  $.ajax({
    url: 'buscarProducto',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{
    id:id,
  },
      success: function(data,textStatus,jqXHR) {
        if (contador.length) {
          contador.push((contador[(contador.length)-1])+1);
        } else {
          contador.push(contador.length);
        }
        $('#detalleMembresias tbody').append('<tr id="'+(contador[contador.length-1])+'row">'+
        '<td>'+data.responseData.descripcion+'<input id="'+(contador[contador.length-1])+'nombre" value="'+data.responseData.descripcion+'" type="hidden"></td>'+
        '<td><input id="'+(contador[contador.length-1])+'cantidad" type="Number" class="form-control form-control-sm disableBtn"> <input id="'+(contador[contador.length-1])+'id" value="'+data.responseData.id+'" type="hidden"> <input id="'+(contador[contador.length-1])+'tipo" value="PRODUCTO" type="hidden"> </td>'+
        '<td><button  class="btn btn-sm btn-danger disableBtn"onClick="removerProducto('+(contador.length-1)+');" id="'+(contador[contador.length-1])+'button"><i class="fa fa-trash"> </i></button></td></tr>');

        swal({
          position:'center',
          type: 'success',
          title: 'Producto Agregado',
          showConfirmButton: false,
          timer: 1500
        });
      }
    });
}

function removerProducto(id) {
  $('#'+contador[id]+'row').remove();
  contador.splice(id,1);
  for (var i = 0; i < contador.length; i++) {
    $('#'+contador[i]+'button').removeAttr('onClick');
    $('#'+contador[i]+'button').attr('onClick','removerProducto('+i+')');
  }
}


function agregarServicio(id){
  $.ajax({
    url: 'buscarServicio',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{
    id:id,
  },
      success: function(data,textStatus,jqXHR) {
        if (contador.length) {
          contador.push((contador[(contador.length)-1])+1);
        } else {
          contador.push(contador.length);
        }
        $('#detalleMembresias tbody').append('<tr id="'+(contador[contador.length-1])+'row">'+
        '<td>'+data.responseData.nombre+'<input id="'+(contador[contador.length-1])+'nombre" value="'+data.responseData.nombre+'" type="hidden"></td>'+
        '<td><input id="'+(contador[contador.length-1])+'cantidad" type="Number" class="form-control form-control-sm"> <input id="'+(contador[contador.length-1])+'id" value="'+data.responseData.id+'" type="hidden"> <input id="'+(contador[contador.length-1])+'tipo" value="SERVICIO" type="hidden"> </td>'+
        '<td><button  class="btn btn-sm btn-danger"onClick="removerProducto('+(contador.length-1)+');" id="'+(contador[contador.length-1])+'button"><i class="fa fa-trash"> </i></button></td></tr>');
        swal({
          position:'center',
          type: 'success',
          title: 'Servicio Agregado',
          showConfirmButton: false,
          timer: 1500
        });
      }
    });
}

function guardarMembresia() {
  if ($('#nameMembresia').val()=='') {
    mio({ type: 'error',title: 'Ingrese Nombre de Membresia'});
    $('#nameMembresia').focus();
    return 0;
  }

  if ($('#costoMembresia').val()=='') {
    mio({ type: 'error',title: 'Ingrese costo de Membresia'});
    $('#costoMembresia').focus();
    return 0;
  }
  if ($('#vigenciaMembresia').val()=='') {
    mio({ type: 'error',title: 'Seleccione Vigencia'});
    $('#vigenciaMembresia').focus();
    return 0;
  }
  if(contador.length==0){
    mio({ type: 'error',title: 'Agregue un Producto y/o Servicio'});
    return 0;
  }
  console.log(contador);
  for (var i = 0; i < contador.length; i++) {
    if($('#'+contador[i]+'cantidad').val()==''){
      mio({ type: 'error',title: 'Ingrese Cantidad'});
      $('#'+contador[i]+'cantidad').focus();
      return 0;
    }
  }
  $.ajax({
    url: 'crearMembresia',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{
    nombre:$('#nameMembresia').val().toUpperCase(),
    costo:$('#costoMembresia').val(),
    vigencia:$('#vigenciaMembresia').val(),
  },
      success: function(data,textStatus,jqXHR) {
        for (var i = 0; i < contador.length; i++) {
          $.ajax({
            url: 'detalleMembresia',
            type:'GET',
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },data:{
            idMembresia:data.responseData.id,
            nombre:$('#'+contador[i]+'nombre').val(),
            cantidad:$('#'+contador[i]+'cantidad').val(),
            tipo:$('#'+contador[i]+'tipo').val(),
            idProdServ:$('#'+contador[i]+'id').val()
          },
              success: function(data,textStatus,jqXHR) {


              }
            });
        }

      swal({
          position:'center',
          type: 'success',
          title: 'Membresia Creada',
          showConfirmButton: false,
          timer: 1500
        });
      $('#Membresia').modal('hide');
      listaMembresias.ajax.reload();
      }
    });

}
function limpiaMembresia() {
  $('#nameMembresia').val('');
  $('#costoMembresia').val('');
  $('#vigenciaMembresia').val('');
  $('#detalleMembresias tbody').empty();
}


function visualizarMembresia(id,dato) {
  limpiaMembresia();
  $.ajax({
    url: 'verMembresia',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{
    id:id,
  },
      success: function(data,textStatus,jqXHR) {
        $('#nameMembresia').val(data.responseData2.nombre);
        $('#costoMembresia').val(data.responseData2.costo);
        $('#vigenciaMembresia').val(data.responseData2.vigencia);
        contador=[];


        for (var i = 0; i < data.responseData.length; i++) {
          if(contador.length){
            contador.push((contador[(contador.length)-1])+1);
          }else{
            contador.push(contador.length);
          }

          $('#detalleMembresias tbody').append('<tr id="'+(contador[contador.length-1])+'row">'+
          '<td>'+data.responseData[i].nombre+'<input id="'+(contador[contador.length-1])+'nombre" value="'+data.responseData[i].nombre+'" type="hidden"></td>'+
          '<td><input id="'+(contador[contador.length-1])+'cantidad" type="Number" class="form-control form-control-sm disableBtn" value="'+data.responseData[i].cantidad+'"> <input id="'+(contador[contador.length-1])+'id" value="'+data.responseData[i].id+'" type="hidden"> <input id="'+(contador[contador.length-1])+'tipo" value="'+data.responseData[i].tipo+'" type="hidden"> </td>'+
          '<td><button  class="btn btn-sm btn-danger disableBtn"onClick="removerProducto('+(contador.length-1)+');" id="'+(contador[contador.length-1])+'button"><i class="fa fa-trash"> </i></button></td></tr>');

        }
        if (dato) {
          $('.disableBtn').attr('disabled','disabled');
        }

      }

    });


}
const mio = swal.mixin({
 toast: true,
 position: 'center',
 showConfirmButton: false,
 timer: 3000
});

$('#btnAddMembresia').click(function() {
    limpiaMembresia();
    $('#agregarMembresia').attr('onClick','guardarMembresia();').html('Guardar').show();
    $('#Membresia').modal('show');
    $('#tituloNuevaMembresia').html('Datos de la Membresia');
    $('#agregarMembresia').show();
    $('#btnListaServicios').show();
    $('#btnListaProductos').show();
    $('.disableBtn').removeAttr('disabled');
});


function editaMembresia(id) {
  limpiaMembresia();
  contador=[];
  $('.disableBtn').removeAttr('disabled');
  visualizarMembresia(id,0);
  $('#agregarMembresia').attr('onClick','actualizarMembresia('+id+');').html('Actualizar').show();
  $('#Membresia').modal('show');
  $('#tituloNuevaMembresia').html('Actualizar Membresia');
  $('#agregarMembresia').show();
  $('#btnListaServicios').show();
  $('#btnListaProductos').show();
  console.log(contador);

}

function actualizarMembresia(id) {
  if ($('#nameMembresia').val()=='') {
    mio({ type: 'error',title: 'Ingrese Nombre de Membresia'});
    $('#nameMembresia').focus();
    return 0;
  }

  if ($('#costoMembresia').val()=='') {
    mio({ type: 'error',title: 'Ingrese costo de Membresia'});
    $('#costoMembresia').focus();
    return 0;
  }
  if ($('#vigenciaMembresia').val()=='') {
    mio({ type: 'error',title: 'Seleccione Vigencia'});
    $('#vigenciaMembresia').focus();
    return 0;
  }
  if(contador.length==0){
    mio({ type: 'error',title: 'Agregue un Producto y/o Servicio'});
      return 0;
  }
  console.log(contador);
  for (var i = 0; i < contador.length; i++) {
    if($('#'+contador[i]+'cantidad').val()==''){
      mio({ type: 'error',title: 'Ingrese Cantidad'});
      $('#'+contador[i]+'cantidad').focus();
      return 0;
    }
  }
  $.ajax({
    url: 'actualizaMembresia',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{id:id,
    nombre:$('#nameMembresia').val().toUpperCase(),
    costo:$('#costoMembresia').val(),
    vigencia:$('#vigenciaMembresia').val(),
  },
      success: function(data,textStatus,jqXHR) {
        for (var i = 0; i < contador.length; i++) {
          $.ajax({
            url: 'detalleMembresia',
            type:'GET',
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },data:{
            idMembresia:data.responseData.id,
            nombre:$('#'+contador[i]+'nombre').val(),
            cantidad:$('#'+contador[i]+'cantidad').val(),
            tipo:$('#'+contador[i]+'tipo').val(),
            idProdServ:$('#'+contador[i]+'id').val()
          },

            });
        }

      swal({
          position:'center',
          type: 'success',
          title: 'Membresia Actualizada',
          showConfirmButton: false,
          timer: 1500
        });
      $('#Membresia').modal('hide');
      listaMembresias.ajax.reload();
      }
    });


}

$('#btnListaProductos').click(function() {
    $('#agregaProductos').modal('show');
});

$('#btnListaServicios').click(function() {
    $('#agregaServicios').modal('show');
});
