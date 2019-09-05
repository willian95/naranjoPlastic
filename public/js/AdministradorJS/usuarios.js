var table;
var imagenItemNew;
var file_path;
const mio = swal.mixin({
 toast: true,
 position: 'center',
 showConfirmButton: false,
 timer: 3000
});

$('#imagenFile').click(function () {
  $('#Modal2').modal('show');
});

$('#inputFile').change(function (e) {
    var file=e.target.files[0];
    var fReader=new FileReader();
    fReader.onload=function(res){
        imagenConverted(res);
    }
    fReader.readAsDataURL(file);
});

function imagenConverted(res){
    var b64=res.target.result;
    console.log(res);
    imagenItemNew=b64;
    console.log(imagenItemNew);
    $('#imagenFile').attr('src', imagenItemNew);
}

$(document).ready(function() {
    table =$('#Usertable').DataTable({
        processing:true,
        serveSide:true,
        ajax:'apiUser',
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
            {data:'email', name:'email'},
            {data:'celular', name:'celular'},
            {data:'action', name:'action',orderable:false,searchable:false},
        ],
        dom: 'Bfrtip',
        lengthChange: true,
        buttons: [
            'excel', 'pdf', 'print'
        ],
        columnDefs: [
          { className: 'text-center', targets: [0,3,4] },
        ],
    });
    $('a').removeClass('active');
    $('#MenuAdmin').addClass('active');
    $('#MenuAdminUser').addClass('active');

});

$('#addUser').click(function() {

  file_path='';
    $('#imagenFile').attr('src', 'img/avatar.png');
    $('#Modal1').modal('show');
    $('.rdOnly').removeAttr('disabled');
    $('#addUserButon').removeAttr('onclick');
    $('#exampleModalLabel').html('Registrar usuario');
    $('#addUserButon').attr('onClick', 'ajaxRegistarUsuario();').html('Registrar');
    limpiarFormUser();
    $('#addUserButon').show();
    $('#name').focus();

});

function verUsuario(id) {

  file_path='';
  $('#imagenFile').attr('src','img/avatar.png');
  $('#Modal1').modal('show');
  $('#addUserButon').removeAttr('onclick');
  $('#exampleModalLabel').html('Actualizar usuario');
  $('#addUserButon').hide();
  $('.rdOnly').attr('disabled', 'disabled');
  ajaxBuscarUsuario(id);

}
function actualizarUsuario(id) {

  file_path='';
  $('#imagenFile').attr('src', 'img/avatar.png');
    $('#Modal1').modal('show');
    $('.rdOnly').removeAttr('disabled');
    $('#email').attr('disabled','disabled');
    $('#addUserButon').removeAttr('onclick');
    $('#exampleModalLabel').html('Actualizar usuario');
    $('#addUserButon').attr('onClick', 'ajaxActualizarUsuario('+id+');').html('Actualizar').show();
    ajaxBuscarUsuario(id);
}

function ajaxRegistarUsuario() {
  if ($('#name').val()=='') {
    mio({ type: 'error',title: 'Ingrese Nombre'});
    $('#name').focus();
    return 0;
  }
  else if ($('#apePat').val()=='') {
    mio({type: 'error',title: 'Ingrese un apellido'});
    $('#apePat').focus();
    return 0;
  }
  else if ($('#celular').val()=='') {
    mio({type: 'error',title: 'Ingrese numero celular'});
    $('#celular').focus();
    return 0;
  }
  else if ($('#password').val()=='') {
    mio({type: 'error',title: 'Ingrese contraseña'});
    $('#password').focus();
    return 0;
  }
  else if ($('#email').val()=='') {
    mio({type: 'error',title: 'Ingrese correo'});
    $('#password').focus();
    return 0;
  }
    $.ajax({
        url:'registerUser',
        type:'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
          name:$('#name').val().toUpperCase(),
          apePat:$('#apePat').val().toUpperCase() ,
          apeMat:$('#apeMat').val().toUpperCase() ,
          password:$('#password').val(),
          email:$('#email').val(),
          TelCasa:$('#TelCasa').val(),
          celular:$('#celular').val(),
          idCiudad:$('#idCiudad').val(),
          usuarioPermiso:(($('#usuarioPermiso:checked').val()) != null ? 1 : 0 ),
          membresias:(($('#membresias:checked').val()) != null ? 1 : 0 ),
          tipoCambio:(($('#tipoCambio:checked').val()) != null ? 1 : 0 ),
          altaCliente:(($('#altaCliente:checked').val()) != null ? 1 : 0 ),
          venderServ:(($('#venderServ:checked').val()) != null ? 1 : 0 ),
          abonosServ:(($('#abonosServ:checked').val()) != null ? 1 : 0 ),
          altaServ:(($('#altaServ:checked').val()) != null ? 1 : 0 ),
          usoMembresia:(($('#usoMembresia:checked').val()) != null ? 1 : 0 ),
          venderProd:(($('#venderProd:checked').val()) != null ? 1 : 0 ),
          abonoProd:(($('#abonoProd:checked').val()) != null ? 1 : 0 ),
          altaProd:(($('#altaProd:checked').val()) != null ? 1 : 0 ),
          agregarStock:(($('#agregarStock:checked').val()) != null ? 1 : 0 ),
          productoPublico:(($('#productoPublico:checked').val()) != null ? 1 : 0 ),
          productoServ:(($('#productoServ:checked').val()) != null ? 1 : 0 ),
          rendimientoRepor:(($('#rendimientoRepor:checked').val()) != null ? 1 : 0 ),
          ventaCajero:(($('#ventaCajero:checked').val()) != null ? 1 : 0 ),
          ventaGeneral:(($('#ventaGeneral:checked').val()) != null ? 1 : 0 ),
          agendaAdmin:(($('#agendaAdmin:checked').val()) != null ? 1 : 0 ),
          borrarPermiso:(($('#borrarPermiso:checked').val()) != null ? 1 : 0 ),
          colorUser:$('#colorId').val(),

            imagen: file_path,
        },
        success : function(data) {
            $('#Modal1').modal('hide');
            table.ajax.reload();
            swal({
              position: 'center',
              type: 'success',
              title: 'Se guardó correctamente',
              showConfirmButton: false,
              timer: 1500
            })
        },

    })
}
function ajaxBuscarUsuario(id) {

    $.ajax({
        url:'buscarUser',
        type:'GET',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            id:id,
        },
        success : function(data) {
          limpiarFormUser();
          $('#name').val(data.responseData.name);
          $('#apePat').val(data.responseData.apePat);
          $('#apeMat').val(data.responseData.apeMat);
          $('#email').val(data.responseData.email);
          $('#TelCasa').val(data.responseData.TelCasa);
          $('#celular').val(data.responseData.celular);
          $('#idCiudad').val(data.responseData.idCiudad);
          $('#inputFile').val();
          (data.responseData.usuarioPermiso>0 ? $('#usuarioPermiso').prop('checked',true) : 0 );
          (data.responseData.membresias>0 ? $('#membresias').prop('checked', true): 0 );
          (data.responseData.tipoCambio>0 ? $('#tipoCambio').prop('checked', true) : 0 );
          (data.responseData.altaCliente>0 ? $('#altaCliente').prop('checked', true) : 0 );
          (data.responseData.venderServ>0 ? $('#venderServ').prop('checked', true) : 0 );
          (data.responseData.abonosServ>0 ? $('#abonosServ').prop('checked',true) : 0 );
          (data.responseData.altaServ>0 ? $('#altaServ').prop('checked',true) : 0 );
          (data.responseData.usoMembresia>0 ? $('#usoMembresia').prop('checked',true) : 0 );
          (data.responseData.venderProd>0 ? $('#venderProd').prop('checked',true) : 0 );
          (data.responseData.abonoProd>0 ? $('#abonoProd').prop('checked',true) : 0 );
          (data.responseData.altaProd>0 ? $('#altaProd').prop('checked',true) : 0 );
          (data.responseData.agregarStock>0 ? $('#agregarStock').prop('checked',true) : 0 );
          (data.responseData.productoPublico>0 ? $('#productoPublico').prop('checked',true) : 0 );
          (data.responseData.rendimientoRepor>0 ? $('#rendimientoRepor').prop('checked',true) : 0 );
          (data.responseData.productoServ>0 ? $('#productoServ').prop('checked',true) : 0 );
          (data.responseData.ventaCajero>0 ? $('#ventaCajero').prop('checked',true) : 0 );
          (data.responseData.ventaGeneral>0 ? $('#ventaGeneral').prop('checked',true) : 0 );
          (data.responseData.agendaAdmin>0 ? $('#agendaAdmin').prop('checked',true) : 0 );
          (data.responseData.borrarPermiso>0 ? $('#borrarPermiso').prop('checked',true) : 0 );
          $('#colorId').val(data.responseData.colorUser);


          if (data.responseData1[0].foto!=null) {
              $('#imagenFile').attr('src', 'img/fotos/files/'+data.responseData1[0].foto);
          }
          $('#name').focus();
        },
    })
}
function ajaxActualizarUsuario(id) {
  if ($('#name').val()=='') {
    mio({type: 'error',title: 'Ingrese Nombre'});
    $('#name').focus();
    return 0;
  }
  else if ($('#apePat').val()=='') {
    mio({type: 'error',title: 'Ingrese Correo'});
    $('#apePat').focus();
    return 0;
  }
  else if ($('#celular').val()=='') {
    mio({type: 'error',title: 'Ingrese Número Celular'});
    $('#celular').focus();
    return 0;
  }
  swal({
    title: 'Estas seguro?',
    text: "Se actualizará usuario!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#17bac2',
    cancelButtonColor: '#b5b3b3',
    confirmButtonText: 'si, actualizar!',
    cancelButtonText: 'No, cancelar',
    reverseButtons: true,
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url:'updateUser',
        type:'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
          id:id,
          name:$('#name').val().toUpperCase(),
          apePat:$('#apePat').val().toUpperCase() ,
          apeMat:$('#apeMat').val().toUpperCase() ,
          password:$('#password').val(),
          email:$('#email').val(),
          TelCasa:$('#TelCasa').val(),
          celular:$('#celular').val(),
          idCiudad:$('#idCiudad').val(),
          usuarioPermiso:(($('#usuarioPermiso:checked').val()) != null ? 1 : 0 ),
          membresias:(($('#membresias:checked').val()) != null ? 1 : 0 ),
          tipoCambio:(($('#tipoCambio:checked').val()) != null ? 1 : 0 ),
          altaCliente:(($('#altaCliente:checked').val()) != null ? 1 : 0 ),
          venderServ:(($('#venderServ:checked').val()) != null ? 1 : 0 ),
          abonosServ:(($('#abonosServ:checked').val()) != null ? 1 : 0 ),
          altaServ:(($('#altaServ:checked').val()) != null ? 1 : 0 ),
          usoMembresia:(($('#usoMembresia:checked').val()) != null ? 1 : 0 ),
          venderProd:(($('#venderProd:checked').val()) != null ? 1 : 0 ),
          abonoProd:(($('#abonoProd:checked').val()) != null ? 1 : 0 ),
          altaProd:(($('#altaProd:checked').val()) != null ? 1 : 0 ),
          agregarStock:(($('#agregarStock:checked').val()) != null ? 1 : 0 ),
          productoPublico:(($('#productoPublico:checked').val()) != null ? 1 : 0 ),
          productoServ:(($('#productoServ:checked').val()) != null ? 1 : 0 ),
          rendimientoRepor:(($('#rendimientoRepor:checked').val()) != null ? 1 : 0 ),
          ventaCajero:(($('#ventaCajero:checked').val()) != null ? 1 : 0 ),
          ventaGeneral:(($('#ventaGeneral:checked').val()) != null ? 1 : 0 ),
          agendaAdmin:(($('#agendaAdmin:checked').val()) != null ? 1 : 0 ),
          borrarPermiso:(($('#borrarPermiso:checked').val()) != null ? 1 : 0 ),
          colorUser:$('#colorId').val(),
          inputFile:$('#inputFile').val(),
         imagen: file_path,
        },
        success : function(data) {
          $('#Modal1').modal('hide');
          limpiarFormUser();
          table.ajax.reload();
          swal({
            position: 'center',
            type: 'success',
            title: 'Se actualizó correctamente',
            showConfirmButton: false,
            timer: 1500
          })
        },
      })
    }
  })
}

function eliminarUsuario(id) {
  swal({
    title: 'Estás seguro?',
    text: "Se eliminará usuario!",
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
        url:'deleteUser',
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
            title: 'Se eliminó registro.',
            showConfirmButton: false,
            timer: 1500
          });
        },
      })
    }
  })
}
function limpiarFormUser() {
  $('#name').focus();
  $('#name').val('');
  $('#apePat').val('');
  $('#apeMat').val('');
  $('#email').val('');
  $('#TelCasa').val('');
  $('#celular').val('');
  $('#idCiudad').val('');
  $('#password').val('');
  $("input[type=checkbox]").prop('checked', false);
  $('#inputFile').val('');
}



    // Some options to pass to the uploader are discussed on the next page
    var uploader = new qq.FineUploader({
        element: document.getElementById("uploader"),
        request: {
            endpoint: 'img/fotos/endpoint.php'
        },
        callbacks: {
            onAllComplete: function() {
                $("#imagenFile").attr('src','img/fotos/files/'+file_path);
                $('#Modal2').modal('toggle');


            },
            onSubmit: function(id, fileName, responseJSON) {
                file_path = this.getUuid(id)+"/"+this.getName(id);
            }
        }
    });
