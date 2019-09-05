var table;
var contador=[];
var id=[];
var servicioCompleto=[];
var servicioSesion=[];

const mio = swal.mixin({
 toast: true,
 position: 'center',
 showConfirmButton: false,
 timer: 3000
});

$(document).ready(function() {
   $('#selectCliente').select2('open');
    table =$('#Usertable').DataTable({
      processing:true,
      serveSide:true,
      ajax:'apiServicio',
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
      columns:[
        {data:'id', name:'id'},
        {data:'nombre',name:'nombre'},
        {data:'presioCompleto', name:'presioCompleto'},
        {data:'presioSesion', name:'presioSesion'},
        {data:'fecha', name:'fecha'},
        {data:'action', name:'action',orderable:false,searchable:false},
      ],
      dom: 'Bfrtip',
      lengthChange: true,
      buttons: [
        'excel', 'pdf', 'print'
      ],
      columnDefs: [
        { className: 'text-center', targets: [5,0,2,3,4] },
      ],
    });
  $('a').removeClass('active');
  $('#MenuServicio').addClass('active');
  $('#MenuServicosAlta').addClass('active');
});

$('#addUser').click(function() {
    limpiarFormulario();

    $('#Modal1').modal('show',function() {
      $('#nombre').focus();
    });
    contador = [];
    $('#addUserButon').removeAttr('onclick');
    $('.rdOnly').removeAttr('disabled');
    $('#exampleModalLabel').html('Registrar Servicio');
    $('#addUserButon').attr('onClick', 'ajaxRegistarServicio();').html('Registrar');
    $('#addUserButon').show();
    $('#nombre').focus();
});

function VerServicio(id) {
  $('#Modal1').modal('show');
  $('#addUserButon').removeAttr('onclick');
  $('#exampleModalLabel').html('Ver servicio');
  $('#addUserButon').hide();
  $('.rdOnly').attr('disabled', 'disabled');
  limpiarFormulario();
  ServicioVer(id);
}

function actualizarServicio(id) {
  limpiarFormulario();
  verServicioAct(id);
  $('#Modal1').modal('show');
  $('#addUserButon').removeAttr('onclick');
  $('#exampleModalLabel').html('Actualizar servicio');
  $('#addUserButon').show();
  $('#addUserButon').attr('onClick', 'ajaxActualizarServicio('+id+');').html('Actualizar');
  $('.rdOnly').removeAttr('disabled');
  $('#nombre').focus();
}

function ajaxActualizarServicio(id) {
  if ($('#nombre').val()=='') {
    mio({ type: 'error',title: 'Ingrese Nombre'});
    $('#nombre').focus();
    return 0;
  }
  if ($('#presioCompleto').val()=='') {
    mio({ type: 'error',title: 'Ingrese Precio de Servicio'});
    $('#presioCompleto').focus();
    return 0;
  }
    if ($('#cantidadSesion').val()=='') {
    mio({ type: 'error',title: 'Ingrese No. de sesiones'});
    $('#cantidadSesion').focus();
    return 0;
  }
  if ($('#presioSesion').val()=='') {
    mio({ type: 'error',title: 'Ingrese Precio de Sesion'});
    $('#presioSesion').focus();
    return 0;
  }
  if (contador.length==0) {
    mio({ type: 'error',title: 'Ingrese al menos un Producto'});
    $('#selectProducto').focus();
    return 0;
  }
  for (var i = 0; i < contador.length; i++) {
    if ($('#'+contador[i]+'produTotal').val()=='') {
      mio({ type: 'error',title: 'Ingrese Producto por Servicio'});
      $('#'+contador[i]+'produTotal').focus();
      return 0;
    }
    if ($('#'+contador[i]+'produSesion').val()=='') {
      mio({ type: 'error',title: 'Ingrese Producto por Sesion'});
      $('#'+contador[i]+'produSesion').focus();
      return 0;
    }
  }

  $.ajax({
    url:'servicioActualizar',
    type:'POST',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data:{
      id:id,
      nombre:$('#nombre').val().toUpperCase(),
      presioSesion:$('#presioSesion').val(),
      presioCompleto:$('#presioCompleto').val(),
      cantidadSesion:$('#cantidadSesion').val(),
    },
    success : function(data) {

      for (var i = 0; i < contador.length; i++) {
        $.ajax({
          url:'servicioDetalle',
          type:'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data:{
            idServicio:data.responseData.id,
            idProducto:$('#'+contador[i]+'id').val(),
            productoSesion:$('#'+contador[i]+'produSesion').val(),
            productoCompleto:$('#'+contador[i]+'produTotal').val(),
          },
          success : function(data) {
          },
        })
      }
      limpiarFormulario();
      table.ajax.reload();
      mensaje("Se actualizo servicio.");
    },
  })
}

function ajaxRegistarServicio() {
  if ($('#nombre').val()=='') {
    mio({ type: 'error',title: 'Ingrese Nombre'});
    $('#nombre').focus();
    return 0;
  }
  if ($('#presioCompleto').val()=='') {
    mio({ type: 'error',title: 'Ingrese precio de Servicio'});
    $('#presioCompleto').focus();
    return 0;
  }
  if ($('#presioSesion').val()=='') {
    mio({ type: 'error',title: 'Ingrese precio de sesion'});
    $('#presioSesion').focus();
    return 0;
  }
  if ($('#cantidadSesion').val()=='') {
    mio({ type: 'error',title: 'Ingrese No. de sesiones'});
    $('#cantidadSesion').focus();
    return 0;
  }


  if (contador.length==0) {
    mio({ type: 'error',title: 'Ingrese almenos un producto'});
    $('#selectProducto').focus();
    return 0;
  }
  for (var i = 0; i < contador.length; i++) {
    if ($('#'+contador[i]+'produTotal').val()=='') {
      mio({ type: 'error',title: 'Ingrese producto por servicio'});
      $('#'+contador[i]+'produTotal').focus();
      return 0;
    }
    if ($('#'+contador[i]+'produSesion').val()=='') {
      mio({ type: 'error',title: 'Ingrese producto por sesion'});
      $('#'+contador[i]+'produSesion').focus();
      return 0;
    }
  }
  $.ajax({
    url:'servicioCrear',
    type:'POST',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data:{
      nombre:$('#nombre').val().toUpperCase(),
      presioSesion:$('#presioSesion').val(),
      presioCompleto:$('#presioCompleto').val(),      
      cantidadSesion:$('#cantidadSesion').val(),
    },
    success : function(data) {
      for (var i = 0; i < contador.length; i++) {
        $.ajax({
          url:'servicioDetalle',
          type:'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data:{
            idServicio:data.responseData.id,
            idProducto:$('#'+contador[i]+'id').val(),
            productoSesion:$('#'+contador[i]+'produSesion').val(),
            productoCompleto:$('#'+contador[i]+'produTotal').val(),
          },
          success : function(data) {
          },
        })
      }
      limpiarFormulario();
      table.ajax.reload();
      mensaje("Se agrego servicio.");
    },
  })
}

function ajaxBuscarProducto(id) {
  $.ajax({
    url:'buscaProducto',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data:{
      id:id,
    },
    success : function(data) {

      if (contador.length) {
        contador.push((contador[(contador.length)-1])+1);
      }else {
        contador.push(contador.length);
      }
      console.log(contador);
      var num=data.responseData[0].gramos;
      num=num - (num % 1);
      $('#tableProductos > tbody:last').append(
        '<tr id="'+(contador[contador.length-1])+'row"> <td>'+
        '<input id='+(contador[contador.length-1])+"id"+' value="'+data.responseData[0].id+'"  type="hidden"> '+
        ' '+data.responseData[0].descripcion+' </td><td  style="text-align: center;">'+
        ' '+num+' </td><td>'+
        '<input id='+(contador[contador.length-1])+"produTotal"+' type="number" maxlength="10"   class="form-control form-control-sm"    ></td><td>'+
        '<input id='+(contador[contador.length-1])+"produSesion"+' type="number" class="form-control form-control-sm"   ></td><td style="text-align: center;">'+
        '<button id="'+(contador[contador.length-1])+'botton" class="btn btn-sm btn-danger" onClick="removerRenglon('+(contador.length-1)+')"><i class="fa fa-trash"></i> </button></td></tr>'
      );
    },
  })
}

function eliminarServicio(id) {
  swal({
    title: 'Estás seguro?',
    text: "Se eliminara servicio!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#17bac2',
    cancelButtonColor: '#b5b3b3',
    confirmButtonText: 'si, borrarlo!',
    cancelButtonText: 'No, cancelar',
    reverseButtons: true,
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url:'deleteServicio',
        type:'GET',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
          id:id,
        },
        success : function(data) {
          table.ajax.reload();
          swal({
            position: 'center',
            type: 'success',
            title: 'Se elimino registro.',
            showConfirmButton: false,
            timer: 1500
          });
        },
      })
    }
  })
}

$("#selectProducto").change(function()
   {
      if($(this).val() != null){
        ajaxBuscarProducto($(this).val());
        $('#selectProducto').val('').focus();
      }
   }
);

$('#selectProducto').on('select2:close', function (e) {
  console.log("hola");
});

$('#selectProducto').select2(
    {
        ajax: {
            url: 'listaProductos',
            dataType: 'json',
            delay: 200,
            data: function(params)
            {
                return{
                    q: params.term,
                        page: params.page
                };
            },
            processResults: function(data,params)
            {
            params.page = params.page || 1;
                return {
                    results: data.data,
                    pagination:
                    {
                        more: (params.page * 10) < data.total
                    }
                };
            }
        },
        minimumInputLength: 1,
        templateResult: function(repo)
        {
            if(repo.loading)
                return repo.descripcion;
            var markup = repo.descripcion;
                return markup;
        },
        templateSelection: function(repo)
        {
            return repo.descripcion;
        },
        escapeMarkup: function(markup)
        {
            return markup;
        }
    }
);

function ServicioVer(id) {
  $.ajax({
    url:'verServicio',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data:{
      id:id,
    },
    success : function(data ) {
      $('#nombre').val(data.responseData1.nombre);
      $('#presioSesion').val(data.responseData1.presioSesion);
      $('#presioCompleto').val(data.responseData1.presioCompleto);
      $('#cantidadSesion').val(data.responseData1.cantidadSesion);
      contador=[];
      for (var i = 0; i < data.responseData.length; i++) {
        if (contador.length) {
          contador.push((contador[(contador.length)-1])+1);
        } else {
          contador.push(contador.length);
        }
        var num=data.responseData[i].gramos;
        num=num - (num % 1);

        $('#tableProductos > tbody:last').append(
          '<tr id="'+(contador[contador.length-1])+'row"> <td>'+
          '<input id='+(contador[contador.length-1])+"id"+' value="'+data.responseData[i].id+'"  type="hidden"> '+
          ' '+data.responseData[i].descripcion+' </td><td  style="text-align: center;">'+
          ' '+num+' </td><td>'+
          '<input id='+(contador[contador.length-1])+"produTotal"+' disabled value='+data.responseData[i].productoCompleto+' type="number" maxlength="10"   class="form-control form-control-sm"    ></td><td>'+
          '<input id='+(contador[contador.length-1])+"produSesion"+' disabled value='+data.responseData[i].productoSesion+' type="number" class="form-control form-control-sm"   ></td><td style="text-align: center;">'+
          '<button id="'+(contador[contador.length-1])+'botton"  disabled class="btn btn-sm btn-danger" onClick="removerRenglon('+(contador.length-1)+')"><i class="fa fa-trash"></i> </button></td></tr>'
        );
      }
    },
  })
}

function verServicioAct(id) {
  $.ajax({
    url:'verServicio',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data:{
      id:id,
    },
    success : function(data ) {
      $('#nombre').val(data.responseData1.nombre);
      $('#presioSesion').val(data.responseData1.presioSesion);
      $('#presioCompleto').val(data.responseData1.presioCompleto);
      $('#cantidadSesion').val(data.responseData1.cantidadSesion);
      contador=[];
      for (var i = 0; i < data.responseData.length; i++) {
        if (contador.length) {
          contador.push((contador[(contador.length)-1])+1);
        }else {
          contador.push(contador.length);
        }
        console.log(data.responseData);
        var num=data.responseData[0].gramos;
        num=num - (num % 1);

        $('#tableProductos > tbody:last').append(
              '<tr id="'+(contador[contador.length-1])+'row"><td>'+
              '<input id='+(contador[contador.length-1])+"id"+' value="'+data.responseData[i].idProducto+'"  type="hidden"> '+
              ' '+data.responseData[i].descripcion+' </td><td style="text-align: center;">'+
              ' '+num+' </td><td style="text-align: center;">'+
              '<input id="'+(contador[contador.length-1])+'produTotal" type="number"  value='+data.responseData[i].productoCompleto+' class="form-control form-control-sm rdOnly"></td><td style="text-align: center;">'+
              '<input id= "'+(contador[contador.length-1])+'produSesion" type="number" value='+data.responseData[i].productoSesion+' class="form-control  form-control-sm rdOnly"></td><td style="text-align: center;">'+
              '<button id="'+(contador[contador.length-1])+'botton" class="btn btn-sm btn-danger" onClick="removerRenglon('+(contador.length-1)+')"><i class="fa fa-trash"></i> </button></td></tr>'
            );
      }
    },
  })
}

function removerRenglon(id) {
$('#'+contador[id]+'row').remove();
  contador.splice(id,1);
  for (var i = 0; i < contador.length; i++) {
    $('#'+contador[i]+'botton').removeAttr('onClick');
    $('#'+contador[i]+'botton').attr('onClick','removerRenglon('+i+')')
  }
}

function mensaje(mensaje) {
  swal({
    position: 'center',
    type: 'success',
    title: ''+mensaje+'',
    showConfirmButton: false,
    timer: 1500
  });
}

function limpiarFormulario() {
  $("input").val('');
  $("#Modal1").modal('hide');
  $("#tableProductos tbody").empty();
}