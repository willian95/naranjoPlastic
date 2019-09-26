var imagenItemNew;
var tableExample;
var file_path;

$(document).ready(function() {
  $('a').removeClass('active');
  $('#MenuAgenda').addClass('active');
  $.ajax({
    url: 'buscarConsultorio',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(data,textStatus,jqXHR) {
        $('#Servicio').append('<option value="">Todos los Consultorios</option>')
        for (var i = 0; i < data.responseData.length; i++) {
          $('#Servicio').append('<option value="'+data.responseData[i].id+'">'+data.responseData[i].consultorio+'</option>')
        }
      }
    });



    tableExample=$('#Usertable').DataTable({
        processing: true,
        serverSide: true,
        ajax:'buscarAgenda',
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
             {data: 'fechaCita', name: 'fechaCita'},
          {data: 'horaInicio', name: 'horaInicio'},
          {data: 'horaFinal', name: 'horaFinal'},
          {data: 'cliente', name: 'cliente'},
          {data: 'celular', name: 'celular'},
          {data: 'TelCasa', name: 'TelCasa'},
          {data: 'nombre', name: 'nombre'},
          {data: 'consultorio', name: 'consultorio'},
          {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        dom: 'Bfrtip',
        lengthChange: true,
        buttons: [
          'excel','pdf','print'
        ],
        columnDefs: [
          { className: 'text-center', targets: [0,3] },
        ],
      });

} );


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
      $('#imagenFile').attr('src', imagenItemNew);
  }



  $('#addCita').click(function() {
 	file_path="";
      limpiarCheckbox();
      $('#guardarCit').removeAttr('onclick');
      $('#tituloModal').html('Agendar Cita');
      $('#guardarCit').attr('onClick', 'guardarCita();').html('Registrar Cita').show();
      $('.disableBtn').removeAttr('disabled');
      $('.disableBtn1').removeAttr('disabled');
      $('#selectConsul').empty();
      $('#selectTera').empty();
      $('#selectServicio').empty();
      buscarUsuarios();
      buscarConsultorio();
      buscarServicioAgenda();
      $('#modalCliente').modal('show');
      $('#selectCliente').select2('open');
  });
  
   $('#addCita1').click(function() {
      $('#addCita').click();
  });


  $('#addConsul').click(function() {
      $('#modalConsultorio').modal('show');
  });

  $('#addServicio').click(function() {
      $('#modalServicio').modal('show');
  });


function limpiarCheckbox(){
    $('input[type=checkbox]').prop('checked',false);
    $('.disableBtn').removeAttr('disabled');
    $('input').val('');
    $('select').val('');
     $('#imagenFile').attr('src', 'img/avatar.png');
}


function actualizaPaciente(id){
  if ($('#nombreCliente').val()=='') {
    mio({ type: 'error',title: 'Ingrese Nombre'});
    $('#nombreCliente').focus();
    return 0;
  }

  if ($('#apellido1Cliente').val()=='') {
    mio({ type: 'error',title: 'Ingrese Apellido Paterno'});
    $('#apellido1Cliente').focus();
    return 0;
  }
  if ($('#sexo').val()=='') {
    mio({ type: 'error',title: 'Seleccione el Sexo'});
    $('#sexo').focus();
    return 0;
  }
  if ($('#fechaNacimiento').val()=='') {
    mio({ type: 'error',title: 'Ingrese Fecha de Nacimiento'});
    $('#fechaNacimiento').focus();
    return 0;
  }
  if ($('#edoCivil').val()=='') {
    mio({ type: 'error',title: 'Seleccione Estado Civil'});
    $('#edoCivil').focus();
    return 0;
  }
  if ($('#ciudad').val()=='') {
    mio({ type: 'error',title: 'Seleccione Ciudad'});
    $('#ciudad').focus();
    return 0;
  }

  swal({
  title: 'Estás seguro?',
  text: "El paciente será actualizado",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#17bac2',
  cancelButtonColor: '#b5b3b3',
  confirmButtonText: 'Si, actualizalo!',
  cancelButtonText: 'No, cancelar',
  reverseButtons: true
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: 'actualizaPaciente',
        type:'get',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },data:{
        id:id,
        name:$('#nombreCliente').val().toUpperCase(),
        apePat:$('#apellido1Cliente').val().toUpperCase(),
        apeMat:$('#apellido2Cliente').val().toUpperCase(),
        email:$('#emailCliente').val(),
        celular:$('#celCliente').val(),
        TelCasa:$('#telCliente').val(),
        idCiudad:$('#ciudad').val(),
        sexo:$('#sexo').val(),
        edoCivil:$('#edoCivil').val(),
        fechaNacimiento:$('#fechaNacimiento').val(),
        puesto:$('#puestoCliente').val().toUpperCase(),
        compania:$('#companiaCliente').val().toUpperCase(),
        telCompania:$('telCompania').val(),
        emerNombre:$('#nombreEmergencia').val().toUpperCase(),
        emerRelacion:$('#relacionEmergencia').val().toUpperCase(),
        emerTel:$('#telEmegencia').val(),
        abdominales:(($('#abdominales:checked').val()) !=null ? 1 : 0),
        circulacion:(($('#circulacion:checked').val()) !=null ? 1 : 0),
        dermatologico:(($('#dermatologico:checked').val()) !=null ? 1 : 0),
        presion:(($('#presion:checked').val()) !=null ? 1 : 0),
        alergias:(($('#alergias:checked').val()) !=null ? 1 : 0),
        vih:(($('#vih:checked').val()) !=null ? 1 : 0),
        anticoagulante:(($('#anticoagulante:checked').val()) !=null ? 1 : 0),
        hemorragias:(($('#hemorragias:checked').val()) !=null ? 1 : 0),
        embarazo:(($('#embarazo:checked').val()) !=null ? 1 : 0),
        problemaAuditivo:(($('#auditivo:checked').val()) !=null ? 1 : 0),
        medicamentos:(($('#medicamento:checked').val()) !=null ? 1 : 0),
        cualMedicamento:$('#cualMedicamento').val(),
        tumores:(($('#tumores:checked').val()) !=null ? 1 : 0),
        hipertension:(($('#hipertension:checked').val()) !=null ? 1 : 0),
        diabetes:(($('#diabetes:checked').val()) !=null ? 1 : 0),
        menstruacion:(($('#menstruacion:checked').val()) !=null ? 1 : 0),
        cirugias:(($('#cirugias:checked').val()) !=null ? 1 : 0),
        implantes:(($('#implantes:checked').val()) !=null ? 1 : 0),
        exposicionSol:(($('#exposicionSol:checked').val()) !=null ? 1 : 0),
        colesterol:(($('#colesterol:checked').val()) !=null ? 1 : 0),
        servicioProhibido:(($('#servicioProhibido:checked').val()) !=null ? 1 : 0),
        cualServicio:$('#cualServicio').val(),

      },
          success: function(data,textStatus,jqXHR) {
          //  $('#Name').val(data.responseData.name);
              $('#modalCliente').modal('hide');
              swal({
                position:'center',
                type: 'success',
                title: 'Paciente Actualizado!',
                showConfirmButton: false,
                timer: 1500
              });
              tableExample.ajax.reload();
          }
        });
    }
  })
}

/*$(function () {
  $('.timepicker').timepicker({
    showInputs: false
  })
})*/


$('#selectCliente').select2(
    {
        ajax:
        {
            url: 'listaClientes',
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
                    pagination:{
                        more: (params.page * 10) < data.total
                    }
                };
            }
        },
        minimumInputLength: 1,
        templateResult: function(repo)
        {
            if(repo.loading)
                return repo.name;
            var markup = repo.name+' '+repo.apePat+' '+repo.apeMat;
            return markup;
        },
        templateSelection: function(repo)
        {
            return repo.name+' '+repo.apePat+' '+repo.apeMat;
        },
        escapeMarkup: function(markup)
        {
            return markup;
        }
    }
);
$("#selectCliente").change(function()
    {
        $('#idCliente').val($('#selectCliente').val());
          idClientes = $('#selectCliente').val();
          file_path="";
          verCliente ($('#idCliente').val());
    }
);



function AddConsul() {
  $.ajax({
    url: 'addConsultorio',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{
    consultorio:$('#nombreConsultorio').val().toUpperCase(),
  },
      success: function(data,textStatus,jqXHR) {
        $('#selectConsul').empty();
        buscarConsultorio();
        $('#modalConsultorio').modal('hide');
      }
    });
}

function addServicio() {
  $.ajax({
    url: 'addServicio',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{
    consultorio:$('#nombreServicio').val().toUpperCase(),
  },
      success: function(data,textStatus,jqXHR) {
        $('#selectServicio').empty();
        buscarServicioAgenda();
        $('#modalServicio').modal('hide');
      }
    });
}

function buscarServicioAgenda() {
  $.ajax({
    url: 'buscarServicioAgenda',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
      success: function(data,textStatus,jqXHR) {
        for (var i = 0; i < data.responseData.length; i++) {
          $('#selectServicio').append('<option value="'+data.responseData[i].id+'">'+data.responseData[i].nombre+'</option>')
        }
      }
    });
}

function buscarConsultorio() {
  $.ajax({
    url: 'buscarConsultorio',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
      success: function(data,textStatus,jqXHR) {
        for (var i = 0; i < data.responseData.length; i++) {
          $('#selectConsul').append('<option value="'+data.responseData[i].id+'">'+data.responseData[i].consultorio+'</option>')
        }
      }
    });
}

function buscarUsuarios() {
  $.ajax({
    url: 'buscarTeraAgenda',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
      success: function(data,textStatus,jqXHR) {
        for (var i = 0; i < data.responseData.length; i++) {
          $('#selectTera').append('<option value="'+data.responseData[i].id+'">'+data.responseData[i].name+' ' + data.responseData[i].apePat+' '+ data.responseData[i].apeMat+'</option>')
        }
      }
    });
}

function eliminaCliente(id){
  swal({
  title: 'Estás seguro?',
  text: "Se borrara paciente de forma permanente",
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
        url: 'eliminaPaciente',
        type:'get',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },data:{
              id:id
        },
        success: function(data,textStatus,jqXHR) {
          $('#modalCliente').modal('hide');
          swal({
              position: 'center',
              type: 'success',
              title: 'El paciente ha sido borrado',
              showConfirmButton: false,
              timer: 1500
            });
          tableExample.ajax.reload();
        }
        })
    }
  })
}


function editaCliente(id){
  limpiarCheckbox();
  $('.disableBtn').removeAttr('disabled');
  $('#tituloModal').html('Editar Paciente');
  $('#adicionalContinuar').removeAttr('onClick');
  $('#adicionalContinuar').attr('onClick','actualizaPaciente('+id+');').html('Actualizar').show();


  $.ajax({
    url: 'editarCliente',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{
    id:id,
  },
      success: function(data,textStatus,jqXHR) {
        $('#nombreCliente').val(data.responseData.name);
        $('#apellido1Cliente').val(data.responseData.apePat);
        $('#apellido2Cliente').val(data.responseData.apeMat);
        $('#telCliente').val(data.responseData.TelCasa);
        $('#celCliente').val(data.responseData.celular);
        $('#emailCliente').val(data.responseData.email);
        $('#edoCivil').val(data.responseData.edoCivil);
        $('#ciudad').val(data.responseData.idCiudad);
        $('#sexo').val(data.responseData.sexo);
        $('#fechaNacimiento').val(data.responseData.fechaNacimiento);
        $('#puestoCliente').val(data.responseData.puesto);
        $('#companiaCliente').val(data.responseData.compania);
        $('#telCompania').val(data.responseData.telCompania);
        $('#nombreEmergencia').val(data.responseData.emerNombre);
        $('#relacionEmergencia').val(data.responseData.emerRelacion);
        $('#telEmegencia').val(data.responseData.emerTel);
        data.responseData.abdominales!=0 ? $('#abdominales').prop('checked',true) : 0;
        data.responseData.circulacion!=0 ? $('#circulacion').prop('checked',true) : 0;
        data.responseData.dermatologico!=0 ? $('#dermatologico').prop('checked',true) : 0;
        data.responseData.presion!=0 ? $('#presion').prop('checked',true) : 0;
        data.responseData.alergias!=0 ? $('#alergias').prop('checked',true) : 0;
        data.responseData.vih!=0 ? $('#vih').prop('checked',true) : 0;
        data.responseData.anticoagulante!=0 ? $('#anticoagulante').prop('checked',true) : 0;
        data.responseData.hemorragias!=0 ? $('#hemorragias').prop('checked',true) : 0;
        data.responseData.embarazo!=0 ? $('#embarazo').prop('checked',true) : 0;
        data.responseData.problemaAuditivo!=0 ? $('#auditivo').prop('checked',true) : 0;
        data.responseData.medicamentos!=0 ? $('#medicamento').prop('checked',true) : 0;
        $('#cualMedicamento').val(data.responseData.cualMedicamento);
        data.responseData.tumores!=0 ? $('#tumores').prop('checked',true) : 0;
        data.responseData.hipertension!=0 ? $('#hipertension').prop('checked',true) : 0;
        data.responseData.diabetes!=0 ? $('#diabetes').prop('checked',true) : 0;
        data.responseData.menstruacion!=0 ? $('#menstruacion').prop('checked',true) : 0;
        data.responseData.cirugias!=0 ? $('#cirugias').prop('checked',true) : 0;
        data.responseData.implantes!=0 ? $('#implantes').prop('checked',true) : 0;
        data.responseData.exposicionSol!=0 ? $('#exposicionSol').prop('checked',true) : 0;
        data.responseData.colesterol!=0 ? $('#colesterol').prop('checked',true) : 0;
        data.responseData.servicioProhibido!=0 ? $('#servicioProhibido').prop('checked',true) : 0;
        $('#cualServicio').val(data.responseData.cualServicio);

        $('#modalCliente').modal('show');
        if (data.responseData1[0].foto != null) {
            $('#imagenFile').attr('src', 'img/fotos/files/'+data.responseData1[0].foto);
        }
      }
    });
}

function guardarCliente(actualizar,id){
  if ($('#nombreCliente').val()=='') {
    mio({ type: 'error',title: 'Ingrese Nombre'});
    $('#nombreCliente').focus();
    return 0;
  }

  if ($('#apellido1Cliente').val()=='') {
    mio({ type: 'error',title: 'Ingrese Apellido Paterno'});
    $('#apellido1Cliente').focus();
    return 0;
  }
  if ($('#sexo').val()=='') {
    mio({ type: 'error',title: 'Seleccione el Sexo'});
    $('#sexo').focus();
    return 0;
  }
  if ($('#fechaNacimiento').val()=='') {
    mio({ type: 'error',title: 'Ingrese Fecha de Nacimiento'});
    $('#fechaNacimiento').focus();
    return 0;
  }
  if ($('#edoCivil').val()=='') {
    mio({ type: 'error',title: 'Seleccione Estado Civil'});
    $('#edoCivil').focus();
    return 0;
  }
  if ($('#ciudad').val()=='') {
    mio({ type: 'error',title: 'Seleccione Ciudad'});
    $('#ciudad').focus();
    return 0;
  }

  $.ajax({
    url: 'guardarCliente',
    type:'POST',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{

    name:$('#nombreCliente').val().toUpperCase(),
    apePat:$('#apellido1Cliente').val().toUpperCase(),
    apeMat:$('#apellido2Cliente').val().toUpperCase(),
    email:$('#emailCliente').val(),
    celular:$('#celCliente').val(),
    TelCasa:$('#telCliente').val(),
    idCiudad:$('#ciudad').val(),
    sexo:$('#sexo').val(),
    edoCivil:$('#edoCivil').val(),
    fechaNacimiento:$('#fechaNacimiento').val(),
    abdominales:(($('#abdominales:checked').val()) !=null ? 1 : 0),
    circulacion:(($('#circulacion:checked').val()) !=null ? 1 : 0),
    dermatologico:(($('#dermatologico:checked').val()) !=null ? 1 : 0),
    presion:(($('#presion:checked').val()) !=null ? 1 : 0),
    alergias:(($('#alergias:checked').val()) !=null ? 1 : 0),
    vih:(($('#vih:checked').val()) !=null ? 1 : 0),
    anticoagulante:(($('#anticoagulante:checked').val()) !=null ? 1 : 0),
    hemorragias:(($('#hemorragias:checked').val()) !=null ? 1 : 0),
    embarazo:(($('#embarazo:checked').val()) !=null ? 1 : 0),
    problemaAuditivo:(($('#auditivo:checked').val()) !=null ? 1 : 0),
    medicamentos:(($('#medicamento:checked').val()) !=null ? 1 : 0),
    cualMedicamento:$('#cualMedicamento').val(),
    tumores:(($('#tumores:checked').val()) !=null ? 1 : 0),
    hipertension:(($('#hipertension:checked').val()) !=null ? 1 : 0),
    diabetes:(($('#diabetes:checked').val()) !=null ? 1 : 0),
    menstruacion:(($('#menstruacion:checked').val()) !=null ? 1 : 0),
    cirugias:(($('#cirugias:checked').val()) !=null ? 1 : 0),
    implantes:(($('#implantes:checked').val()) !=null ? 1 : 0),
    exposicionSol:(($('#exposicionSol:checked').val()) !=null ? 1 : 0),
    colesterol:(($('#colesterol:checked').val()) !=null ? 1 : 0),
    servicioProhibido:(($('#servicioProhibido:checked').val()) !=null ? 1 : 0),
    cualServicio:$('#cualServicio').val(),
    imagen:file_path ,

  },

      success: function(data,textStatus,jqXHR) {
      //  $('#Name').val(data.responseData.name);
      if (actualizar) {
        ajaxActualizarCita(data.responseData.id,id)
      }
        registrarCita(data.responseData.id);
      }
    });

}

$('#horaInicio').change(function (e) {
     $('#horaFinal').val($('#horaInicio').val());
});

function guardarCita(){
  buscarHora(0,0);

}

function actualizarCita(id) {
    buscarHora(id,1);
}


function registrarCita(id){
  $.ajax({
      url: 'agregarCita',
      type:'post',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },data:{
        horaInicio:$('#horaInicio').val(),
        horaFinal:$('#horaFinal').val(),
        fechaCita:$('#fechaCita').val(),
        idTerapeuta:$('#selectTera').val(),
        idConsultorio:$('#selectConsul').val(),
        idServicio:$('#selectServicio').val(),
        observacion:$('#Observacion').val(),
        idCliente:id,
      },
      success: function(data,textStatus,jqXHR) {


          tableExample.ajax.reload();
        sendMail(id);
        $('#modalCliente').modal('hide');
        swal({
          position:'center',
          type: 'success',
          confirmButtonColor: '#17bac2',
          title: 'Cita registrada',
          showConfirmButton: true,
          timer: 1500
        });
      }
    });
}

$('#Buscar').click(function() {

    $('#Usertable').DataTable().destroy();
    tablaSearch($('#fechaInicia').val() ,$('#Servicio').val() );

});


$('#borrarConsult').click(function() {

  $('#modalConsultorio').modal('hide');
    $('#modalCliente').modal('hide');
    $.ajax({
    url: 'buscarConsultorio',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
      success: function(data,textStatus,jqXHR) {
      console.log(data);

  $("#tableConsultorios tbody").empty();
        for (var i = 0; i < data.responseData.length; i++) {
          $('#tableConsultorios > tbody:last').append(
        '<tr>'+
        '<td> '+data.responseData[i].consultorio +'</td>'+
        '<td><button   class="btn btn-sm btn-danger" onClick="deleteConsultorio('+(data.responseData[i].id)+')"><i class="fa fa-trash"></i> </button></td>'+
         '</tr>');
        }
      }
    });

    $('#modalServicio').modal('show');

});



function buscarHora(id,actializar) {

  if ($('#fechaCita').val()=='') {
    mio({ type: 'error',title: 'Elija una fecha para cita'});
    $('#fechaCita').focus();
    return 0;
  }
  if ($('#horaInicio').val()=='') {
    mio({ type: 'error',title: 'Ingrese hora de inicio se sesion'});
    $('#horaInicio').focus();
    return 0;
  }
  if ($('#horaFinal').val()=='') {
    mio({ type: 'error',title: 'Ingrese hora de termino se sesion'});
    $('#horaFinal').focus();
    return 0;
  }


  $.ajax({
      url: 'BuscarEspacio',
      type:'get',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },data:{
        horaInicio:$('#horaInicio').val(),
        horaFinal:$('#horaFinal').val(),
        fechaCita:$('#fechaCita').val(),
        idTerapeuta:$('#selectTera').val(),
        idConsultorio:$('#selectConsul').val(),
      },
      success: function(data,textStatus,jqXHR) {
        if (data.responseData.length) {
          swal({
            position:'center',
            type: 'warning',
            confirmButtonColor: '#17bac2',
            title: 'Hora no disponible',
            showConfirmButton: true,
            timer: 1500
          });
        }else {
          if (actializar) {
            if ($('#idCliente').val()) {
              ajaxActualizarCita($('#idCliente').val(),id);
            }else {
              guardarCliente(1,id);
            }
          }else {
            if ($('#idCliente').val()) {
              registrarCita($('#idCliente').val());
            }else {
              guardarCliente(0,id);
            }
          }
        }
      }
    });
}
function sendMail(idCliente) {
    $.ajax({
        url: 'sendEmail',
        type:'get',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },data:{
          horaInicio:$('#horaInicio').val(),
          horaFinal:$('#horaFinal').val(),
          fechaCita:$('#fechaCita').val(),
          idTerapeuta:$('#selectTera').val(),
          idConsultorio:$('#selectConsul').val(),
          idServicio:$('#selectServicio').val(),
          idCliente:idCliente,
          email:$('#email').val(),

        },
        success: function(data,textStatus,jqXHR) {

          swal({
            position:'center',
            type: 'success',
            confirmButtonColor: '#17bac2',
            title: 'CorreoEnviado',
            showConfirmButton: true,
            timer: 1500
          });
        }
      });
}

function ajaxActualizarCita(idCliente,id) {
  $.ajax({
      url: 'actualizarCita',
      type:'get',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },data:{
        horaInicio:$('#horaInicio').val(),
        horaFinal:$('#horaFinal').val(),
        fechaCita:$('#fechaCita').val(),
        idTerapeuta:$('#selectTera').val(),
        idConsultorio:$('#selectConsul').val(),
        idServicio:$('#selectServicio').val(),
        observacion:$('#Observacion').val(),
        idCliente:idCliente,
        id:id
      },
      success: function(data,textStatus,jqXHR) {
        $('#modalCliente').modal('hide');

          tableExample.ajax.reload();
        swal({
          position:'center',
          type: 'success',
          confirmButtonColor: '#17bac2',
          title: 'Cita Actualizada',
          showConfirmButton: true,
          timer: 1500
        });
      }
    });
}

var citaHoraIni;
var citahoraFinal

function VerCita(id,ver) {
  $('#selectServicio').empty();
  $('#selectConsul').empty();
  $('#selectTera').empty();
  buscarUsuarios();
  buscarConsultorio();
  buscarServicioAgenda();
  $.ajax({
      url: 'buscarHoraDispo',
      type:'get',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },data:{
        id:id
      },
      success: function(data,textStatus,jqXHR) {
        $('#horaFinal').val(data.responseData[0].horaFinal);
        $('#horaInicio').val(data.responseData[0].horaInicio);
        $('#selectTera').val(data.responseData[0].idTerapeuta);
        $('#selectConsul').val(data.responseData[0].idConsultorio);
        $('#selectServicio').val(data.responseData[0].idServicio);
        $('#fechaCita').val(data.responseData[0].fechaCita);
        $('#Observacion').val(data.responseData[0].observacion);
        if (ver==0) {
              $('#guardarCit').removeAttr('onclick').hide();
              $('#tituloModal').html('ver Cita');
              $('.disableBtn1').attr('disabled','disabled');
        }else {
            $('.disableBtn1').removeAttr('disabled');
                $('#guardarCit').removeAttr('onclick');
                $('#tituloModaltituloModal').html('Actuaizar Cita');
                $('#guardarCit').attr('onClick', 'actualizarCita('+data.responseData[0].id+');').html('Actualizar Cita').show();
        }

        verCliente(data.responseData[0].idCliente);
        $('#modalCliente').modal('show');
        $('#selectCliente').select2('open');

      }
    });
}


function verCliente(id){
  $('#idCliente').val(id);
  $('#imagenFile').attr('src', 'img/avatar.png');

  $.ajax({
    url: 'editarCliente',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{
    id:id,
  },
      success: function(data,textStatus,jqXHR) {
        $('#nombreCliente').val(data.responseData.name);
        $('#apellido1Cliente').val(data.responseData.apePat);
        $('#apellido2Cliente').val(data.responseData.apeMat);
        $('#telCliente').val(data.responseData.TelCasa);
        $('#celCliente').val(data.responseData.celular);
        $('#emailCliente').val(data.responseData.email);
        $('#edoCivil').val(data.responseData.edoCivil);
        $('#ciudad').val(data.responseData.idCiudad);
        $('#sexo').val(data.responseData.sexo);
        $("#pais").val(data.responseData.pais)
        $('#fechaNacimiento').val(data.responseData.fechaNacimiento);

        
        $.ajax({
          url: 'estados/'+data.responseData.pais,
          async: false,
          type:'GET',
  
            success: function(data) {
            //  $('#Name').val(data.responseData.name);
                renderizarEstados(data)
            }
          });


        $('.disableBtn').attr('disabled','disabled');
        if (data.responseData1[0].foto!='null') {
            $('#imagenFile').attr('src','img/fotos/files/'+ data.responseData1[0].foto);
        }
      }
    });
}

function renderizarEstados(data){

  $("#estados").empty()
  for(i = 0; i < data.estados.length; i++){
    
    $("#estados").append("<option value='"+data.estados[i].id+"'>"+data.estados[i].nombre+"</option>")

  }

}

function tablaSearch(fecha,consultorio) {
  tableExample=$('#Usertable').DataTable({
      processing: true,
      serverSide: true,
      ajax:{
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'buscarAgendaFecha',
        type: 'GET',
        data:{
          fechaCita:  fecha,
          idConsultorio: consultorio,
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
        {data: 'fechaCita', name: 'fechaCita'},
        {data: 'horaInicio', name: 'horaInicio'},
        {data: 'horaFinal', name: 'horaFinal'},
        {data: 'cliente', name: 'cliente'},
        {data: 'celular', name: 'celular'},
        {data: 'TelCasa', name: 'TelCasa'},
        {data: 'nombre', name: 'nombre'},
        {data: 'consultorio', name: 'consultorio'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
      ],
      dom: 'Bfrtip',
      lengthChange: true,
      buttons: [
        'excel','pdf','print'
      ],
      columnDefs: [
        { className: 'text-center', targets: [0,3] },
      ],
    });
}

function eliminarCita(id) {
  swal({
    title: 'Estás seguro?',
    text: "Se eliminará cita!",
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
        url:'deleteCita',
        type:'GET',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
          id:id,
        },
        success : function(data) {
          tableExample.ajax.reload();
          swal({
            position: 'center',
            type: 'success',
            title: 'Se eliminó cita.',
            showConfirmButton: false,
            timer: 1500
          });
        },
      })
    }
  })
}


function deleteConsultorio(id) {
  swal({
    title: 'Estás seguro?',
    text: "Se eliminara consultorio!",
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
        url:'deleteConsultorio',
        type:'GET',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
          id:id,
        },
        success : function(data) {

    $('#modalServicio').modal('hide');

          swal({
            position: 'center',
            type: 'success',
            title: 'Se eliminó cita.',
            showConfirmButton: false,
            timer: 1500
          });
        },
      })
    }
  })
}

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
