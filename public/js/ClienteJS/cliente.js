var table;
var table2;
var file_path;
var imagenItemNew;
$(document).ready(function() {
  $('a').removeClass('active');

  $('#MenuCliente').addClass('active');

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

} );

var imagenItemNew;
var tableExample=$('#example').DataTable({
    processing: true,
    serverSide: true,
    ajax:'buscarCliente',
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
      {data: 'name', name: 'name'},
      {data: 'email', name: 'email'},
      {data: 'celular', name: 'celular'},
      {data: 'fecha', name: 'fecha'},
      {data: 'action', name: 'action', orderable: false, searchable: false},
    ],
    dom: 'Bfrtip',
    lengthChange: true,
    buttons: [
      'excel','pdf','print'
    ],
    columnDefs: [
      { className: 'text-center', targets: [0,3,4,5] },
    ],
  });

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

$('#medicamento').change(function(){
    if($('#medicamento:checked').val()!=null){
      $('.pedirMedicamento').show();
    }else {
      $('.pedirMedicamento').hide();
    }
})

$('#servicioProhibido').change(function(){
    if($('#servicioProhibido:checked').val()!=null){
      $('.pedirServicio').show();
    }else {
      $('.pedirServicio').hide();

    }
})

$("#mascotas_seccion2").change(function(){
  if($('#mascotas_seccion2:checked').val()!=null){
    $('#cuales_mascotas_seccion2').attr('readonly', false);
  }else {
    $('#cuales_mascotas_seccion2').attr('readonly', true);

  }
})

$('#addCliente').click(function() {

    file_path='';
    limpiarCheckbox();
    $('#imagenFile').attr('src', '/img/avatar.png');

    //$(".viewClient").attr('readonly', true)

    $('#modalCliente').modal({
      backdrop: 'static'
    });
    $('.pedirMedicamento').hide();
    $('.pedirServicio').hide();
    $('.disableBtn').removeAttr('disabled');
    $('#adicionalContinuar').show();
    $('#tituloModal').html('Agregar Paciente');
    $('#adicionalContinuar').removeAttr('onClick');
    $('#adicionalContinuar').attr('onClick','guardarCliente();').html('Guardar').show();

});

$(function () {
    $('#generalContinuar').click(function (e) {
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
      
      if ($('#pais').val()=='' || $('#pais').val()=='0' || $('#pais').val()==null) {
        mio({ type: 'error',title: 'Seleccione Pais'});
        $('#pais').focus();
        return 0;
      }
      
      if ($('#estados').val()=='' || $('#estados').val()=='0' || $('#pais').val()==null) {
        mio({ type: 'error',title: 'Seleccione Estado'});
        $('#estado').focus();
        return 0;
      }

    e.preventDefault();

      //Codigo para pruebas

      /*
    console.log("nombre")
    console.log($('#nombreCliente').val().toUpperCase())
    
    console.log("apellido")
    console.log($('#apellido1Cliente').val().toUpperCase())
    //apeMat:$('#apellido2Cliente').val().toUpperCase(),
    console.log("fechaNacimiento")
    console.log($('#fechaNacimiento').val())

    console.log("lugarNacimiento")
    console.log($('#lugarNacimiento').val())

    console.log("edad")
    console.log($('#edad').val())

    console.log("celular")
    console.log($('#celCliente').val())

    console.log("telCliente")
    console.log($('#telCliente').val())
    
    console.log("TelOficina")
    console.log($('#telOficCliente').val())
    
    console.log("religion")
    console.log($("#religion").val())
    
    console.log("escolaridad")
    console.log($("#escolaridad").val())
    
    console.log("email")
    console.log($('#emailCliente').val())
    
    console.log("sexo")
    console.log($('#sexo').val())
    
    console.log("edoCivil")
    console.log($('#edoCivil').val())
    
    console.log("pais")
    console.log($('#pais').val())
    
    console.log("estado")
    console.log($("#estados").val())
    
    console.log("calle")
    console.log($("#calle").val())
    
    console.log("ciudad")
    console.log($('#ciudad').val())
    
    console.log("codigoPostal")
    console.log($('#codigo-postal').val())
    
    console.log("enteroNosotros")
    console.log($('#entero-nosotros').val())
    
    console.log("cirugiasPrevias")
    console.log($('#cirugias-previas').val())
    
    console.log("otrasCirugias")
    console.log($('#cirugias-previas').val())
    
    console.log("puesto")
    console.log($('#puestoCliente').val().toUpperCase())
    
    console.log("compania")
    console.log($('#companiaCliente').val().toUpperCase())
    
    console.log("telCompania")
    console.log($('#telCompania').val())
    
    console.log("emerNombre")
    console.log($('#nombreEmergencia').val().toUpperCase())
    
    console.log("emerRelacion")
    console.log($('#relacionEmergencia').val().toUpperCase())
    
    console.log("emerTel")
    console.log($('#telEmegencia').val())
      */


    $('#myTab a[href="#seccion2"]').tab('show');
  });

  $('#seccion2Continuar').click(function (e) {

    //código de pruebas
    /*
    console.log("nombre")
    console.log($("#nombre_seccion2").val())

    console.log("lugar de nacimiento")
    console.log($("#lugar_nacimiento_seccion2").val())

    console.log("edad")
    console.log($("#edad_seccion2").val())

    console.log("telefono")
    console.log($("#telefono_seccion2").val())

    console.log("Fecha de elaboración de la historia")
    console.log($("#fecha_historia_seccion2").val())

    console.log("Fecha de nacimiento")
    console.log($("#fecha_nacimiento_seccion2").val())

    console.log("Padre")
    console.log($("#padre_seccion2").val())

    console.log("Enfermedades y cuales Padre")
    console.log($("#enfermedades_padre_seccion2").val())

    console.log("alergias padre")
    console.log($("#alergias_padre_seccion2").val())

    console.log("Madre")
    console.log($("#madre_seccion2").val())

    console.log("Enfermedades y cuales madre")
    console.log($("#enfermedades_madre_seccion2").val())

    console.log("alergias madre")
    console.log($("#alergias_madre_seccion2").val())

    console.log("abuelos paternos")
    console.log($("#abuelos_paternos_enfermedades_seccion2").val())

    console.log("abuelos maternos")
    console.log($("#abuelos_maternos_enfermedades_seccion2").val())

    console.log("cuantos hermanos")
    console.log($("#hermanos_cuantos_seccion2").val())

    console.log("hermanos enfermedades")
    console.log($("#hermanos_enfermedades_seccion2").val())

    console.log("enfermedades congenitas")
    console.log($("#enfermedades_congenitas_seccion2").val())

    console.log("enfermedades infancia")
    console.log($("#enfermedades_infancia_seccion2").val())

    console.log("enfermedades cronico")
    console.log($("#enfermedades_cronico_degenerativas_seccion2").val())

    console.log("internamientos quirurgicos")
    console.log($("#internamientos_quirurgicos_seccion2").val())

    console.log("transfusiones")
    console.log($("#transfusiones_seccion2").val())

    console.log("traumaticas")
    console.log($("#traumaticas_seccion2").val())

    console.log("trnasfusiones")
    console.log($("#alergias_seccion2").val())

    console.log("Tabaquismo")
    console.log((($('#tabaquismo:checked').val()) !=null ? 1 : 0))

    console.log("Alcoholismo")
    console.log((($('#alcoholismo:checked').val()) !=null ? 1 : 0))

    console.log("Drogas")
    console.log((($('#drogas:checked').val()) !=null ? 1 : 0))

    console.log("número de habitaciones")
    console.log($("#traumaticas_seccion2").val())

    console.log("número de habitaciones")
    console.log($("#numero_habitaciones_seccion2").val())

    console.log("cuantas personas")
    console.log($("#cuantas_personas_seccion2").val())

    console.log("material")
    console.log($("#material_seccion2").val())

    console.log("ventilacion")
    console.log((($('#ventilacion:checked').val()) !=null ? 1 : 0))

    console.log("agua")
    console.log((($('#agua_seccion2:checked').val()) !=null ? 1 : 0))

    console.log("gas")
    console.log((($('#gas_seccion2:checked').val()) !=null ? 1 : 0))

    console.log("luz")
    console.log((($('#luz_seccion2:checked').val()) !=null ? 1 : 0))

    console.log("drenaje")
    console.log((($('#drenaje_seccion2:checked').val()) !=null ? 1 : 0))

    console.log("mascotas")
    console.log((($('#mascotas_seccion2:checked').val()) !=null ? 1 : 0))

    console.log("cuales mascotas")
    console.log($("#cuales_mascotas_seccion2").val())

    console.log("disposicion de basura")
    console.log($("#disposicion_basura_seccion2").val())

    console.log("alimentacion")
    console.log($("#alimentacion_seccion2").val())

    console.log("organizaciones")
    console.log($("#organizaciones_seccion2").val())

    console.log("higiene")
    console.log($("#higiene_seccion2").val())

    console.log("gestas")
    console.log($("#gestas_seccion2").val())

    console.log("partos")
    console.log($("#partos_seccion2").val())

    console.log("cesareas")
    console.log($("#cesareas_seccion2").val())

    console.log("abortos")
    console.log($("#abortos_seccion2").val())

    console.log("fur")
    console.log($("#fur_seccion2").val())

    console.log("ivsa")
    console.log($("#ivsa_seccion2").val())

    console.log("pf")
    console.log($("#pf_seccion2").val())

    console.log("expediente")
    console.log($("#expediente_numero_seccion2").val())
    */

    $('#myTab a[href="#seccion3"]').tab('show');
  });

})

$('#seccion3Continuar').click(function (e) {

  //codigo de prueba

  /*
  console.log("Padecimiento actual")
  console.log((($('#astenia_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Astenia")
  console.log((($('#astenia_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Adinamia")
  console.log((($('#adinamia_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Hiporexia")
  console.log((($('#hiporexia_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Perdida peso")
  console.log((($('#perdida_peso_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Problema respirar")
  console.log((($('#problema_respirar_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Sonidos respirar")
  console.log((($('#sonidos_respirar_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Secreciones respirar")
  console.log((($('#secreciones_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Color esputo")
  console.log($('#color_esputp_seccion3').val())

  console.log("Se agita?")
  console.log((($('#agita_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Cansancio")
  console.log((($('#cansancio_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Cianosis")
  console.log((($('#cianosis_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Fatiga")
  console.log((($('#fatiga_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Soplos")
  console.log((($('#soplos_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Diarrea")
  console.log((($('#diarrea_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Moco")
  console.log((($('#moco_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Sangre")
  console.log((($('#sangre_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Estreñimiento")
  console.log((($('#estre_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Excreta normal")
  console.log((($('#excreta_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Vomitos")
  console.log((($('#vomitos_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Poliuria")
  console.log((($('#poliuria_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Disuria")
  console.log((($('#disuria_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Sangre")
  console.log((($('#sangre_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Olor")
  console.log($("#olor_seccion3").val())

  console.log("Color")
  console.log($("#color_seccion3").val())

  console.log("Frecuencia orinar")
  console.log($("#frecuencia_orinar_seccion3").val())

  console.log("Tenesmo")
  console.log((($('#tenesmo_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Hiperactividad")
  console.log((($('#hiperactividad_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Perdida de fuerza")
  console.log((($('#perdida_fuerza_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Somnolencia")
  console.log($('#somnolencia_seccion3').val())

  console.log("Cefaleas")
  console.log((($('#cefaleas_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Irritabilidad")
  console.log((($('#irritabilidad_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Paresias")
  console.log((($('#paresias_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Falta de movimiento")
  console.log((($('#falta_movimiento_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Parestiasis")
  console.log((($('#parestiasis_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Movimientos involuntarios")
  console.log((($('#movimientos_involuntarios_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Artralgias")
  console.log((($('#artralgias_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Contracción continua de musculos")
  console.log((($('#contraccion_musculos_seccion3:checked').val()) !=null ? 1 : 0))

  console.log("Erupciones")
  console.log($('#erupciones_seccion3').val())

  console.log("Dematosis")
  console.log($('#dematosis_seccion3').val())

  console.log("Glandulas")
  console.log($('#glandulas_seccion3').val())

  console.log("uñas y pelo")
  console.log($('#pelo_seccion3').val())

  console.log("Dientes")
  console.log($('#dientes_seccion3').val())

  console.log("GR")
  console.log($('#gr_seccion3').val())

  console.log("HB")
  console.log($('#hb_seccion3').val())

  console.log("HCT")
  console.log($('#hct_seccion3').val())

  console.log("PLAG")
  console.log($('#plag_seccion3').val())

  console.log("CMHG")
  console.log($('#cmhg_seccion3').val())

  console.log("LEU")
  console.log($('#leu_seccion3').val())

  console.log("LIN")
  console.log($('#lin_seccion3').val())

  console.log("Mono")
  console.log($('#mono_seccion3').val())

  console.log("Eos")
  console.log($('#eos_seccion3').val())

  console.log("BAS")
  console.log($('#bas_seccion3').val())

  console.log("Segmentados")
  console.log($('#segmentados_seccion3').val())

  console.log("En banda")
  console.log($('#enbanda_seccion3').val())

  console.log("Segmentados")
  console.log($('#segmentados_seccion3').val())

  console.log("QS: Glucosa")
  console.log($('#qs_glucosa_seccion3').val())

  console.log("Urea")
  console.log($('#urea_seccion3').val())

  console.log("Creatinina")
  console.log($('#creatinina_seccion3').val())

  console.log("COL")
  console.log($('#col_seccion3').val())

  console.log("TAG")
  console.log($('#tag_seccion3').val())

  */

  e.preventDefault();

  $('#myTab a[href="#seccion4"]').tab('show');

})


function limpiarCheckbox(){
    $('input[type=checkbox]').prop('checked',false);
    $('input').val('');
    $('select').val('');
    $('textarea').val('');
}

function verCliente(id){

    file_path='';
    $(".viewClient").attr('readonly', true)
    $(".viewClient").attr('disabled', true)
  limpiarCheckbox();

  $('#imagenFile').attr('src', '/img/avatar.png');
  $('#tituloModal').html('Ver Paciente');
  $('#adicionalContinuar').hide();
  //$(".disableBtn").attr('readonly', true)

  $.ajax({
    url: 'editarCliente',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{
    id:id,
  },
      success: function(data,textStatus,jqXHR) {

        

        $('#nombreCliente').val(data.responseData.name)
        $('#apellido1Cliente').val(data.responseData.apePat)
        $('#fechaNacimiento').val(data.responseData.fechaNacimiento)
        $('#lugarNacimiento').val(data.responseData.lugarNacimiento)
        $('#edad').val(data.responseData.edad)
        $('#celCliente').val(data.responseData.celular)
        $('#telCliente').val(data.responseData.telCasa)
        $('#telOficCliente').val(data.responseData.telOficina)
        $("#religion").val(data.responseData.religion)
        $("#escolaridad").val(data.responseData.escolaridad)
        $('#emailCliente').val(data.responseData.email)
        $('#sexo').val(data.responseData.sexo)
        $('#edoCivil').val(data.responseData.edoCivil)
        $("#pais").val(data.responseData.pais)

        $.ajax({
        url: 'estados/'+data.responseData.pais,
        async: false,
        type:'GET',

          success: function(data) {
          //  $('#Name').val(data.responseData.name);
              renderizarEstados(data)
          }
        });

        $("#estados").val(data.responseData.estado)
        $("#calle").val(data.responseData.calle)
        $('#ciudad').val(data.responseData.ciudad)
        $('#codigo-postal').val(data.responseData.codigoPostal)
        $('#entero-nosotros').val(data.responseData.enteroNosotros)
        $('#cirugias-previas').val(data.responseData.cirugiasPrevias)
        $('#otras-cirugias').val(data.responseData.otrasCirugias)
        $('#puestoCliente').val(data.responseData.puesto)
        $('#companiaCliente').val(data.responseData.compania)
        $('#telCompania').val(data.responseData.telCompania)
        $('#nombreEmergencia').val(data.responseData.emerNombre)
        $('#relacionEmergencia').val(data.responseData.emerRelacion)
        $('#telEmegencia').val(data.responseData.emerTel)
        //imagen: file_path,

        //Seccion 2

        $("#nombre_seccion2").val(data.responseData.nombreSeccion2)
        $("#lugar_nacimiento_seccion2").val(data.responseData.lugarNacimientoSeccion2)
        $("#edad_seccion2").val(data.responseData.edadSeccion2)
        $("#telefono_seccion2").val(data.responseData.telefonoSeccion2)
        $("#fecha_historia_seccion2").val(data.responseData.fechaHistoriaSeccion2)
        $("#fecha_nacimiento_seccion2").val(data.responseData.fechaNacimientoSeccion2)
        $("#padre_seccion2").val(data.responseData.padreSeccion2) 
        $("#enfermedades_padre_seccion2").val(data.responseData.enfermedadesPadreSeccion2)
        $("#alergias_padre_seccion2").val(data.responseData.alergiasPadreSeccion2)
        $("#madre_seccion2").val(data.responseData.madreSeccion2) 
        $("#enfermedades_madre_seccion2").val(data.responseData.enfermedadesMadreSeccion2)
        $("#alergias_madre_seccion2").val(data.responseData.alergiasMadreSeccion2)
        $("#abuelos_paternos_enfermedades_seccion2").val(data.responseData.abuelosPaternosEnfermedadesSeccion2)
        $("#abuelos_maternos_enfermedades_seccion2").val(data.responseData.abuelosMaternosEnfermedadesSeccion2)
        $("#hermanos_cuantos_seccion2").val(data.responseData.hermanosCuantosSeccion2)
        $("#hermanos_enfermedades_seccion2").val(data.responseData.hermanosEnfermedadesSeccion2)
        $("#enfermedades_congenitas_seccion2").val(data.responseData.enfermedadesCongenitasSeccion2)
        $("#enfermedades_infancia_seccion2").val(data.responseData.enfermedadesInfanciaSeccion2)
        $("#enfermedades_cronico_degenerativas_seccion2").val(data.responseData.enfermedadesCronicoDegenerativasSeccion2)
        $("#internamientos_quirurgicos_seccion2").val(data.responseData.internamientosQuirurgicosSeccion2)
        $("#transfusiones_seccion2").val(data.responseData.transfusionesSeccion2)
        $("#traumaticas_seccion2").val(data.responseData.traumaticasSeccion2)
        $("#alergias_seccion2").val(data.responseData.alergiasSeccion2)
        data.responseData.tabaquismoSeccion2!=0 ? $('#tabaquismo').prop('checked',true) : 0;
        data.responseData.alcoholismoSeccion2!=0 ? $('#alcoholismo').prop('checked',true) : 0;
        data.responseData.drogasSeccion2!=0 ? $('#drogas').prop('checked',true) : 0;

        $("#traumaticas_seccion2").val(data.responseData.traumaticasSeccion2)
        $("#numero_habitaciones_seccion2").val(data.responseData.numeroHabitacionesSeccion2)
        $("#cuantas_personas_seccion2").val(data.responseData.cuantasPersonasSeccion2) 
        $("#material_seccion2").val(data.responseData.materialSeccion2)

        data.responseData.ventilacionSeccion2!=0 ? $('#ventilacion').prop('checked',true) : 0;
        data.responseData.aguaSeccion2!=0 ? $('#agua_seccion2').prop('checked',true) : 0;
        data.responseData.gasSeccion2!=0 ? $('#gas_seccion2').prop('checked',true) : 0;
        data.responseData.luzSeccion2!=0 ? $('#luz_seccion2').prop('checked',true) : 0;
        data.responseData.drenajeSeccion2!=0 ? $('#drenaje_seccion2').prop('checked',true) : 0;
        data.responseData.mascotasSeccion2!=0 ? $('#mascotas_seccion2').prop('checked',true) : 0;

        $("#cuales_mascotas_seccion2").val(data.responseData.cualesMascotasSeccion2)
        $("#disposicion_basura_seccion2").val(data.responseData.disposicionBasuraSeccion2)
        $("#alimentacion_seccion2").val(data.responseData.alimentacionSeccion2)
        $("#organizaciones_seccion2").val(data.responseData.organizacionSeccion2)
        $("#higiene_seccion2").val(data.responseData.higieneSeccion2)
        $("#gestas_seccion2").val(data.responseData.gestasSeccion2)
        $("#partos_seccion2").val(data.responseData.partosSeccion2)
        $("#cesareas_seccion2").val(data.responseData.cesareasSeccion2)
        $("#abortos_seccion2").val(data.responseData.abortosSeccion2)
        $("#fur_seccion2").val(data.responseData.furSeccion2)
        $("#ivsa_seccion2").val(data.responseData.ivsaSeccion2)
        $("#pf_seccion2").val(data.responseData.pfSeccion2)
        $("#expediente_numero_seccion2").val(data.responseData.expedienteNumeroSeccion2)
        $("#fur_seccion2").val(data.responseData.furSeccion2)
        $("#sexo_seccion2").val(data.responseData.sexoSeccion2),
        $("#religion_seccion2").val(data.responseData.religionSeccion2),
        $("#direccion_seccion2").val(data.responseData.direccionSeccion2),
        $("#ocupacion_seccion2").val(data.responseData.ocupacionSeccion2),
        $("#cirugias_anteriores_seccion2").val(data.responseData.cirugiasAnterioresSeccion2),
        $("#medicamentos_seccion2").val(data.responseData.medicamentosSeccion2),
        $("#ingiere_alcohol_seccion2").val(data.responseData.ingiereAlcoholSeccion2),
        $("#hace_ejercicio_seccion2").val(data.responseData.haceEjercicioSeccion2),
        $("#fuma_seccion2").val(data.responseData.fumaSeccion2),
        $("#antecedentes_heredo_seccion2").val(data.responseData.antecedentesHeredoSeccion2),
        $("#menarca_seccion2").val(data.responseData.menarcaSeccion2),
        $("#inicio_actividad_seccion2").val(data.responseData.inicioActividadSeccion2),
        $("#interrogatorio_por_aparatos_seccion2").val(data.responseData.interrogatorioPorAparatosSeccion2),
        $("#motivo_consulta_seccion2").val(data.responseData.motivoConsultaSeccion2),

        //Seccion 3

        $('#padecimiento_seccion3').val(data.responseData.padecimientoSeccion3);
        data.responseData.problemaRespirarSeccion3!=0 ? $('#problema_respirar_seccion3').prop('checked',true) : 0;
        data.responseData.sonidosRespirarSeccion3!=0 ? $('#sonidos_respirar_seccion3').prop('checked',true) : 0;
        data.responseData.secrecionesSeccion3!=0 ? $('#secreciones_seccion3').prop('checked',true) : 0;
        $("#color_esputo_seccion3").val(data.responseData.colorEsputoSeccion3)
        data.responseData.agitaSeccion3!=0 ? $('#agita_seccion3').prop('checked',true) : 0;
        data.responseData.cansancioSeccion3!=0 ? $('#cansancio_seccion3').prop('checked',true) : 0;
        data.responseData.cianosisSeccion3!=0 ? $('#cianosis_seccion3').prop('checked',true) : 0;
        data.responseData.fatigaSeccion3!=0 ? $('#fatiga_seccion3').prop('checked',true) : 0;
        data.responseData.soplosSeccion3!=0 ? $('#soplos_seccion3').prop('checked',true) : 0;
        data.responseData.diarreaSeccion3!=0 ? $('#diarrea_seccion3').prop('checked',true) : 0;
        data.responseData.mocoSeccion3!=0 ? $('#moco_seccion3').prop('checked',true) : 0;
        data.responseData.sangreSeccion3!=0 ? $('#sangre_seccion3').prop('checked',true) : 0;
        data.responseData.estreSeccion3!=0 ? $('#estre_seccion3').prop('checked',true) : 0;
        data.responseData.excretaSeccion3!=0 ? $('#excreta_seccion3').prop('checked',true) : 0;
        data.responseData.vomitosSeccion3!=0 ? $('#vomitos_seccion3').prop('checked',true) : 0;
        data.responseData.poliuriaSeccion3!=0 ? $('#poliuria_seccion3').prop('checked',true) : 0;
        data.responseData.disuriaSeccion3!=0 ? $('#disuria_seccion3').prop('checked',true) : 0;
        data.responseData.sangreGenitourinarioSeccion3!=0 ? $('#sangre_genitourinario_seccion3').prop('checked',true) : 0;
        data.responseData.olorSeccion3!=0 ? $('#olor_seccion3').prop('checked',true) : 0;
        $("#olor_seccion3").val(data.responseData.olorSeccion3)
        $("#color_seccion3").val(data.responseData.colorSeccion3)
        $("#frecuencia_orinar_seccion3").val(data.responseData.frecuenciaOrinarSeccion3)
        data.responseData.tenesmoSeccion3!=0 ? $('#tenesmo_seccion3').prop('checked',true) : 0;
        data.responseData.hiperactividadSeccion3!=0 ? $('#hiperactividad_seccion3').prop('checked',true) : 0;
        data.responseData.perdidaFuerzaSeccion3!=0 ? $('#perdida_fuerza_seccion3').prop('checked',true) : 0;
        $("#somnolencia_seccion3").val(data.responseData.somnolenciaSeccion3)
        data.responseData.cefaleasSeccion3!=0 ? $('#cefaleas_seccion3').prop('checked',true) : 0;
        data.responseData.irritabilidadSeccion3!=0 ? $('#irritabilidad_seccion3').prop('checked',true) : 0;
        data.responseData.paresiasSeccion3!=0 ? $('#paresias_seccion3').prop('checked',true) : 0;
        data.responseData.faltaMovimientoSeccion3!=0 ? $('#falta_movimiento_seccion3').prop('checked',true) : 0;
        data.responseData.parestiasisSeccion3!=0 ? $('#parestiasis_seccion3').prop('checked',true) : 0;
        data.responseData.movimientosInvoluntariosSeccion3!=0 ? $('#movimientos_involuntarios_seccion3').prop('checked',true) : 0;
        data.responseData.artralgiasSeccion3!=0 ? $('#artralgias_seccion3').prop('checked',true) : 0;
        data.responseData.contraccionesMusculosSeccion3!=0 ? $('#contraccion_musculos_seccion3').prop('checked',true) : 0;
        $('#erupciones_seccion3').val(data.responseData.erupcionesSeccion3)
        $('#dematosis_seccion3').val(data.responseData.dematosisSeccion3)
        $('#glandulas_seccion3').val(data.responseData.glandulasSeccion3)
        $('#pelo_seccion3').val(data.responseData.peloSeccion3)
        $('#dientes_seccion3').val(data.responseData.dientesSeccion3)
        $('#gr_seccion3').val(data.responseData.grSeccion3)
        $('#hb_seccion3').val(data.responseData.hbSeccion3)
        $('#hct_seccion3').val(data.responseData.hctSeccion3)
        $('#plag_seccion3').val(data.responseData.plagSeccion3)
        $('#cmhg_seccion3').val(data.responseData.cmhgSeccion3)
        $('#leu_seccion3').val(data.responseData.leuSeccion3)
        $('#lin_seccion3').val(data.responseData.linSeccion3)
        $('#mono_seccion3').val(data.responseData.monoSeccion3)
        $('#eos_seccion3').val(data.responseData.eosSeccion3)
        $('#bas_seccion3').val(data.responseData.basSeccion3)
        $('#segmentados_seccion3').val(data.responseData.segmentadosSeccion3)
        $('#enbanda_seccion3').val(data.responseData.enBandaSeccion3)
        $('#qs_glucosa_seccion3').val(data.responseData.qsGlucosaSeccion3)
        $('#urea_seccion3').val(data.responseData.ureaSeccion3)
        $('#creatinina_seccion3').val(data.responseData.creatininaSeccion3)
        $('#col_seccion3').val(data.responseData.colSeccion3)
        $('#tag_seccion3').val(data.responseData.tagSeccion3)
        data.responseData.respiracionRapidaSeccion3!=0 ? $('#respiracion_rapida_seccion3').prop('checked',true) : 0;
        data.responseData.respiracionLentaSeccion3!=0 ? $('#respiracion_lenta_seccion3').prop('checked',true) : 0;
        $('#qs_seccion3').val(data.responseData.qsSeccion3)
        $('#ego_seccion3').val(data.responseData.egoSeccion3)
        $('#tp_seccion3').val(data.responseData.tpSeccion3)
        $('#tpt_seccion3').val(data.responseData.tptSeccion3)
        $('#hiv_seccion3').val(data.responseData.hivSeccion3)
        $('#otros_seccion3').val(data.responseData.otrosSeccion3)
        $('#sintomas_generales_seccion3').val(data.responseData.sintomasGeneralesSeccion3)
        
        //Seccion 4
        $("#ta_seccion4").val(data.responseData.taSeccion4)
        $("#fc_seccion4").val(data.responseData.fcSeccion4)
        $("#fr_seccion4").val(data.responseData.frSeccion4)
        $("#temp_seccion4").val(data.responseData.tempSeccion4)
        $("#peso_seccion4").val(data.responseData.pesoSeccion4)
        $("#estatura_seccion4").val(data.responseData.estatusSeccion4)
        $("#cabeza_seccion4").val(data.responseData.cabezaSeccion4)
        $("#cuello_seccion4").val(data.responseData.cuelloSeccion4)
        $("#torax_seccion4").val(data.responseData.toraxSeccion4)
        $("#abdomen_seccion4").val(data.responseData.abdomenSeccion4)
        $("#extremidades_seccion4").val(data.responseData.extremidadesSeccion4)
        $("#genitales_seccion4").val(data.responseData.genitalesSeccion4)
        $("#diagnostico_seccion4").val(data.responseData.diagnosticoSeccion4)
        $("#tratamiento_seccion4").val(data.responseData.tratamientoSeccion4)

        $('#modalCliente').modal('show');
        /*console.log(data);
        if (data.responseData1[0].foto!=null) {
            $('#imagenFile').attr('src','img/fotos/files/'+ data.responseData1[0].foto);
        }*/
      }
    });
}

function actualizaPaciente(id){
  
  if ($('#expediente_numero_seccion2').val()=='') {
    mio({ type: 'error',title: 'Ingrese el número de expediente'});
    $('#expediente_numero_seccion2').focus();
    return 0;
  }
  
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
  if ($('#sexo').val()=='' || $('#sexo').val()==null) {
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
  
  if ($('#pais').val()=='') {
    mio({ type: 'error',title: 'Seleccione País'});
    $('#pais').focus();
    return 0;
  }

  if ($('#estados').val()=='') {
    mio({ type: 'error',title: 'Seleccione Estado'});
    $('#estados').focus();
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
        //Seccion1

    //Seccion1

    name:$('#nombreCliente').val().toUpperCase(),
    apePat:$('#apellido1Cliente').val().toUpperCase(),
    fechaNacimiento:$('#fechaNacimiento').val(),
    lugarNacimiento:$('#lugarNacimiento').val(),
    edad:$('#edad').val(),
    celular:$('#celCliente').val(),
    telCasa:$('#telCliente').val(),
    telOficina:$('#telOficCliente').val(),
    religion:$("#religion").val(),
    escolaridad:$("#escolaridad").val(),
    email:$('#emailCliente').val(),
    sexo:$('#sexo').val(),
    edoCivil:$('#edoCivil').val(),
    pais:$("#pais").val(),
    estado:$("#estados").val(),
    calle:$("#calle").val(),
    ciudad:$('#ciudad').val(),
    codigoPostal:$('#codigo-postal').val(),
    enteroNosotros:$('#entero-nosotros').val(),
    cirugiasPrevias:$('#cirugias-previas').val(),
    otrasCirugias:$('#otras-cirugias').val(),
    puesto:$('#puestoCliente').val().toUpperCase(),
    compania:$('#companiaCliente').val().toUpperCase(),
    telCompania:$('#telCompania').val(),
    emerNombre:$('#nombreEmergencia').val().toUpperCase(),
    emerRelacion:$('#relacionEmergencia').val().toUpperCase(),
    emerTel:$('#telEmegencia').val(),
    imagen: file_path,

    //Seccion 2

    nombreSeccion2: $("#nombre_seccion2").val(),
    lugarNacimientoSeccion2: $("#lugar_nacimiento_seccion2").val(),
    edadSeccion2: $("#edad_seccion2").val(),
    telefonoSeccion2:$("#telefono_seccion2").val(),
    fechaHistoriaSeccion2: $("#fecha_historia_seccion2").val(),
    fechaNacimientoSeccion2: $("#fecha_nacimiento_seccion2").val(),
    padreSeccion2: $("#padre_seccion2").val(), 
    enfermedadesPadreSeccion2: $("#enfermedades_padre_seccion2").val(),
    alergiasPadreSeccion2:$("#alergias_padre_seccion2").val(),
    madreSeccion2:$("#madre_seccion2").val(), 
    enfermedadesMadreSeccion2: $("#enfermedades_madre_seccion2").val(),
    alergiasMadreSeccion2:$("#alergias_madre_seccion2").val(),
    abuelosPaternosEnfermedadesSeccion2: $("#abuelos_paternos_enfermedades_seccion2").val(),
    abuelosMaternosEnfermedadesSeccion2: $("#abuelos_maternos_enfermedades_seccion2").val(),
    hermanosCuantosSeccion2: $("#hermanos_cuantos_seccion2").val(),
    hermanosEnfermedadesSeccion2: $("#hermanos_enfermedades_seccion2").val(),
    enfermedadesCongenitasSeccion2: $("#enfermedades_congenitas_seccion2").val(),
    enfermedadesInfanciaSeccion2: $("#enfermedades_infancia_seccion2").val(),
    enfermedadesCronicoDegenerativasSeccion2: $("#enfermedades_cronico_degenerativas_seccion2").val(),
    internamientosQuirurgicosSeccion2: $("#internamientos_quirurgicos_seccion2").val(),
    transfusionesSeccion2: $("#transfusiones_seccion2").val(),
    traumaticasSeccion2: $("#traumaticas_seccion2").val(),
    alergiasSeccion2: $("#alergias_seccion2").val(),
    tabaquismoSeccion2: (($('#tabaquismo:checked').val()) !=null ? 1 : 0),
    alcoholismoSeccion2: (($('#alcoholismo:checked').val()) !=null ? 1 : 0),
    drogasSeccion2: (($('#drogas:checked').val()) !=null ? 1 : 0),
    numeroHabitacionesSeccion2: $("#numero_habitaciones_seccion2").val(),
    cuantasPersonasSeccion2: $("#cuantas_personas_seccion2").val(), 
    materialSeccion2: $("#material_seccion2").val(),
    ventilacionSeccion2: (($('#ventilacion:checked').val()) !=null ? 1 : 0),
    aguaSeccion2: (($('#agua_seccion2:checked').val()) !=null ? 1 : 0),
    gasSeccion2: (($('#gas_seccion2:checked').val()) !=null ? 1 : 0),  
    luzSeccion2: (($('#luz_seccion2:checked').val()) !=null ? 1 : 0),
    drenajeSeccion2: (($('#drenaje_seccion2:checked').val()) !=null ? 1 : 0), 
    mascotasSeccion2: (($('#mascotas_seccion2:checked').val()) !=null ? 1 : 0),
    cualesMascotasSeccion2: $("#cuales_mascotas_seccion2").val(),
    disposicionBasuraSeccion2: $("#disposicion_basura_seccion2").val(),
    alimentacionSeccion2: $("#alimentacion_seccion2").val(),
    organizacionSeccion2: $("#organizaciones_seccion2").val(),
    higieneSeccion2: $("#higiene_seccion2").val(),
    gestasSeccion2: $("#gestas_seccion2").val(),
    partosSeccion2: $("#partos_seccion2").val(),
    cesareasSeccion2: $("#cesareas_seccion2").val(),
    abortosSeccion2: $("#abortos_seccion2").val(),
    furSeccion2: $("#fur_seccion2").val(),
    sexoSeccion2: $("#sexo_seccion2").val(),
    religionSeccion2: $("#religion_seccion2").val(),
    direccionSeccion2: $("#direccion_seccion2").val(),
    ocupacionSeccion2: $("#ocupacion_seccion2").val(),
    cirugiasAnterioresSeccion2: $("#cirugias_anteriores_seccion2").val(),
    medicamentosSeccion2: $("#medicamentos_seccion2").val(),
    ingiereAlcoholSeccion2: $("#ingiere_alcohol_seccion2").val(),
    haceEjercicioSeccion2: $("#hace_ejercicio_seccion2").val(),
    fumaSeccion2: $("#fuma_seccion2").val(),
    antecedentesHeredoSeccion2: $("#antecedentes_heredo_seccion2").val(),
    menarcaSeccion2: $("#menarca_seccion2").val(),
    inicioActividadSeccion2: $("#inicio_actividad_seccion2").val(),
    interrogatorioPorAparatosSeccion2: $("#interrogatorio_por_aparatos_seccion2").val(),
    motivoConsultaSeccion2: $("#motivo_consulta_seccion2").val(),


    //Seccion 3
    padecimientoSeccion3:$("#padecimiento_seccion3").val() ,
    problemaRespirarSeccion3: (($('#problema_respirar_seccion3:checked').val()) !=null ? 1 : 0),
    sonidosRespirarSeccion3: (($('#sonidos_respirar_seccion3:checked').val()) !=null ? 1 : 0),
    secrecionesSeccion3: (($('#secreciones_seccion3:checked').val()) !=null ? 1 : 0),
    colorEsputoSeccion3:$('#color_esputo_seccion3').val(),
    agitaSeccion3:(($('#agita_seccion3:checked').val()) !=null ? 1 : 0),
    cansancioSeccion3:(($('#cansancio_seccion3:checked').val()) !=null ? 1 : 0),
    cianosisSeccion3: (($('#cianosis_seccion3:checked').val()) !=null ? 1 : 0),
    fatigaSeccion3: (($('#fatiga_seccion3:checked').val()) !=null ? 1 : 0),
    soplosSeccion3: (($('#soplos_seccion3:checked').val()) !=null ? 1 : 0),
    diarreaSeccion3: (($('#diarrea_seccion3:checked').val()) !=null ? 1 : 0),
    mocoSeccion3: (($('#moco_seccion3:checked').val()) !=null ? 1 : 0),
    sangreSeccion3: (($('#sangre_seccion3:checked').val()) !=null ? 1 : 0),
    estreSeccion3:(($('#estre_seccion3:checked').val()) !=null ? 1 : 0),
    excretaSeccion3:(($('#excreta_seccion3:checked').val()) !=null ? 1 : 0),
    vomitosSeccion3:(($('#vomitos_seccion3:checked').val()) !=null ? 1 : 0),
    poliuriaSeccion3: (($('#poliuria_seccion3:checked').val()) !=null ? 1 : 0),
    disuriaSeccion3:(($('#disuria_seccion3:checked').val()) !=null ? 1 : 0),
    sangreGenitourinarioSeccion3: (($('#sangre_genitourinario_seccion3:checked').val()) !=null ? 1 : 0),
    olorSeccion3: $("#olor_seccion3").val(),
    colorSeccion3:$("#color_seccion3").val(),
    frecuenciaOrinarSeccion3: $("#frecuencia_orinar_seccion3").val(),
    tenesmoSeccion3: (($('#tenesmo_seccion3:checked').val()) !=null ? 1 : 0),
    hiperactividadSeccion3:(($('#hiperactividad_seccion3:checked').val()) !=null ? 1 : 0),
    perdidaFuerzaSeccion3: (($('#perdida_fuerza_seccion3:checked').val()) !=null ? 1 : 0),
    somnolenciaSeccion3: $('#somnolencia_seccion3').val(),
    cefaleasSeccion3:(($('#cefaleas_seccion3:checked').val()) !=null ? 1 : 0),
    irritabilidadSeccion3: (($('#irritabilidad_seccion3:checked').val()) !=null ? 1 : 0),
    paresiasSeccion3:(($('#paresias_seccion3:checked').val()) !=null ? 1 : 0),
    faltaMovimientoSeccion3:(($('#falta_movimiento_seccion3:checked').val()) !=null ? 1 : 0),
    parestiasisSeccion3: (($('#parestiasis_seccion3:checked').val()) !=null ? 1 : 0),
    movimientosInvoluntariosSeccion3: (($('#movimientos_involuntarios_seccion3:checked').val()) !=null ? 1 : 0),
    artralgiasSeccion3: (($('#artralgias_seccion3:checked').val()) !=null ? 1 : 0),
    contraccionesMusculosSeccion3:(($('#contraccion_musculos_seccion3:checked').val()) !=null ? 1 : 0),
    erupcionesSeccion3:$('#erupciones_seccion3').val(),
    dematosisSeccion3: $('#dematosis_seccion3').val(),
    glandulasSeccion3: $('#glandulas_seccion3').val(),
    peloSeccion3: $('#pelo_seccion3').val(),
    dientesSeccion3: $('#dientes_seccion3').val(),
    grSeccion3: $('#gr_seccion3').val(),
    hbSeccion3: $('#hb_seccion3').val(),
    hctSeccion3: $('#hct_seccion3').val(),
    plagSeccion3: $('#plag_seccion3').val(),
    cmhgSeccion3: $('#cmhg_seccion3').val(),
    leuSeccion3: $('#leu_seccion3').val(),
    linSeccion3: $('#lin_seccion3').val(),
    monoSeccion3: $('#mono_seccion3').val(),
    eosSeccion3: $('#eos_seccion3').val(),
    basSeccion3: $('#bas_seccion3').val(),
    segmentadosSeccion3: $('#segmentados_seccion3').val(),
    enBandaSeccion3: $('#enbanda_seccion3').val(),
    qsGlucosaSeccion3: $('#qs_glucosa_seccion3').val(),
    ureaSeccion3:$('#urea_seccion3').val(),
    creatininaSeccion3: $('#creatinina_seccion3').val(),
    colSeccion3: $('#col_seccion3').val(),
    tagSeccion3: $('#tag_seccion3').val(),
    respiracionRapidaSeccion3:(($('#respiracion_rapida_seccion3:checked').val()) !=null ? 1 : 0),
    respiracionLentaSeccion3:(($('#respiracion_lenta_seccion3:checked').val()) !=null ? 1 : 0),
    qsSeccion3: $('#qs_seccion3').val(),
    egoSeccion3: $('#ego_seccion3').val(),
    tpSeccion3: $('#tp_seccion3').val(),
    tptSeccion3: $('#tpt_seccion3').val(),
    hivSeccion3: $('#hiv_seccion3').val(),
    otrosSeccion3: $('#otros_seccion3').val(),
    sintomasGeneralesSeccion3: $("#sintomas_generales_seccion3").val(),

    //Seccion 4
    taSeccion4:$("#ta_seccion4").val(),
    fcSeccion4:$("#fc_seccion4").val(),
    frSeccion4:$("#fr_seccion4").val(),
    tempSeccion4:$("#temp_seccion4").val(),
    pesoSeccion4:$("#peso_seccion4").val(),
    estatusSeccion4:$("#estatura_seccion4").val(),
    cabezaSeccion4:$("#cabeza_seccion4").val(),
    cuelloSeccion4:$("#cuello_seccion4").val(),
    toraxSeccion4:$("#torax_seccion4").val(),
    abdomenSeccion4:$("#abdomen_seccion4").val(),
    extremidadesSeccion4:$("#extremidades_seccion4").val(),
    genitalesSeccion4: $("#genitales_seccion4").val(),
    diagnosticoSeccion4: $("#diagnostico_seccion4").val(),
    tratamientoSeccion4: $("#tratamiento_seccion4").val()

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

              $("#ta_seccion4").val("")
        $("#fc_seccion4").val("")
        $("#fr_seccion4").val("")
        $("#temp_seccion4").val("")
        $("#peso_seccion4").val("")
        $("#estatura_seccion4").val("")
        $("#cabeza_seccion4").val("")
        $("#cuello_seccion4").val("")
        $("#torax_seccion4").val("")
        $("#abdomen_seccion4").val("")
        $("#extremidades_seccion4").val("")
        $("#genitales_seccion4").val("")
        $("#diagnostico_seccion4").val("")
        $("#tratamiento_seccion4").val("")

          }
        });
    }
  })
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

    file_path='';
  limpiarCheckbox();
  $(".viewClient").attr('readonly', false)
  $(".viewClient").attr('disabled', false)
  //$('.disableBtn').removeAttr('disabled');
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

        $('#nombreCliente').val(data.responseData.name)
        $('#apellido1Cliente').val(data.responseData.apePat)
        $('#fechaNacimiento').val(data.responseData.fechaNacimiento)
        $('#lugarNacimiento').val(data.responseData.lugarNacimiento)
        $('#edad').val(data.responseData.edad)
        $('#celCliente').val(data.responseData.celular)
        $('#telCliente').val(data.responseData.telCasa)
        $('#telOficCliente').val(data.responseData.telOficina)
        $("#religion").val(data.responseData.religion)
        $("#escolaridad").val(data.responseData.escolaridad)
        $('#emailCliente').val(data.responseData.email)
        $('#sexo').val(data.responseData.sexo)
        $('#edoCivil').val(data.responseData.edoCivil)
        $("#pais").val(data.responseData.pais)

        $.ajax({
        url: 'estados/'+data.responseData.pais,
        async: false,
        type:'GET',

          success: function(data) {
          //  $('#Name').val(data.responseData.name);
              renderizarEstados(data)
          }
        });

        $("#estados").val(data.responseData.estado)
        $("#calle").val(data.responseData.calle)
        $('#ciudad').val(data.responseData.ciudad)
        $('#codigo-postal').val(data.responseData.codigoPostal)
        $('#entero-nosotros').val(data.responseData.enteroNosotros)
        $('#cirugias-previas').val(data.responseData.cirugiasPrevias)
        $('#otras-cirugias').val(data.responseData.otrasCirugias)
        $('#puestoCliente').val(data.responseData.puesto)
        $('#companiaCliente').val(data.responseData.compania)
        $('#telCompania').val(data.responseData.telCompania)
        $('#nombreEmergencia').val(data.responseData.emerNombre)
        $('#relacionEmergencia').val(data.responseData.emerRelacion)
        $('#telEmegencia').val(data.responseData.emerTel)
        //imagen: file_path,

        //Seccion 2

        $("#nombre_seccion2").val(data.responseData.nombreSeccion2)
        $("#lugar_nacimiento_seccion2").val(data.responseData.lugarNacimientoSeccion2)
        $("#edad_seccion2").val(data.responseData.edadSeccion2)
        $("#telefono_seccion2").val(data.responseData.telefonoSeccion2)
        $("#fecha_historia_seccion2").val(data.responseData.fechaHistoriaSeccion2)
        $("#fecha_nacimiento_seccion2").val(data.responseData.fechaNacimientoSeccion2)
        $("#padre_seccion2").val(data.responseData.padreSeccion2) 
        $("#enfermedades_padre_seccion2").val(data.responseData.enfermedadesPadreSeccion2)
        $("#alergias_padre_seccion2").val(data.responseData.alergiasPadreSeccion2)
        $("#madre_seccion2").val(data.responseData.madreSeccion2) 
        $("#enfermedades_madre_seccion2").val(data.responseData.enfermedadesMadreSeccion2)
        $("#alergias_madre_seccion2").val(data.responseData.alergiasMadreSeccion2)
        $("#abuelos_paternos_enfermedades_seccion2").val(data.responseData.abuelosPaternosEnfermedadesSeccion2)
        $("#abuelos_maternos_enfermedades_seccion2").val(data.responseData.abuelosMaternosEnfermedadesSeccion2)
        $("#hermanos_cuantos_seccion2").val(data.responseData.hermanosCuantosSeccion2)
        $("#hermanos_enfermedades_seccion2").val(data.responseData.hermanosEnfermedadesSeccion2)
        $("#enfermedades_congenitas_seccion2").val(data.responseData.enfermedadesCongenitasSeccion2)
        $("#enfermedades_infancia_seccion2").val(data.responseData.enfermedadesInfanciaSeccion2)
        $("#enfermedades_cronico_degenerativas_seccion2").val(data.responseData.enfermedadesCronicoDegenerativasSeccion2)
        $("#internamientos_quirurgicos_seccion2").val(data.responseData.internamientosQuirurgicosSeccion2)
        $("#transfusiones_seccion2").val(data.responseData.transfusionesSeccion2)
        $("#traumaticas_seccion2").val(data.responseData.traumaticasSeccion2)
        $("#alergias_seccion2").val(data.responseData.alergiasSeccion2)
        data.responseData.tabaquismoSeccion2!=0 ? $('#tabaquismo').prop('checked',true) : 0;
        data.responseData.alcoholismoSeccion2!=0 ? $('#alcoholismo').prop('checked',true) : 0;
        data.responseData.drogasSeccion2!=0 ? $('#drogas').prop('checked',true) : 0;

        $("#traumaticas_seccion2").val(data.responseData.traumaticasSeccion2)
        $("#numero_habitaciones_seccion2").val(data.responseData.numeroHabitacionesSeccion2)
        $("#cuantas_personas_seccion2").val(data.responseData.cuantasPersonasSeccion2) 
        $("#material_seccion2").val(data.responseData.materialSeccion2)

        data.responseData.ventilacionSeccion2!=0 ? $('#ventilacion').prop('checked',true) : 0;
        data.responseData.aguaSeccion2!=0 ? $('#agua_seccion2').prop('checked',true) : 0;
        data.responseData.gasSeccion2!=0 ? $('#gas_seccion2').prop('checked',true) : 0;
        data.responseData.luzSeccion2!=0 ? $('#luz_seccion2').prop('checked',true) : 0;
        data.responseData.drenajeSeccion2!=0 ? $('#drenaje_seccion2').prop('checked',true) : 0;
        data.responseData.mascotasSeccion2!=0 ? $('#mascotas_seccion2').prop('checked',true) : 0;

        $("#cuales_mascotas_seccion2").val(data.responseData.cualesMascotasSeccion2)
        $("#disposicion_basura_seccion2").val(data.responseData.disposicionBasuraSeccion2)
        $("#alimentacion_seccion2").val(data.responseData.alimentacionSeccion2)
        $("#organizaciones_seccion2").val(data.responseData.organizacionSeccion2)
        $("#higiene_seccion2").val(data.responseData.higieneSeccion2)
        $("#gestas_seccion2").val(data.responseData.gestasSeccion2)
        $("#partos_seccion2").val(data.responseData.partosSeccion2)
        $("#cesareas_seccion2").val(data.responseData.cesareasSeccion2)
        $("#abortos_seccion2").val(data.responseData.abortosSeccion2)
        $("#fur_seccion2").val(data.responseData.furSeccion2)
        $("#ivsa_seccion2").val(data.responseData.ivsaSeccion2)
        $("#pf_seccion2").val(data.responseData.pfSeccion2)
        $("#expediente_numero_seccion2").val(data.responseData.expedienteNumeroSeccion2)
        $("#fur_seccion2").val(data.responseData.furSeccion2)
        $("#sexo_seccion2").val(data.responseData.sexoSeccion2),
        $("#religion_seccion2").val(data.responseData.religionSeccion2),
        $("#direccion_seccion2").val(data.responseData.direccionSeccion2),
        $("#ocupacion_seccion2").val(data.responseData.ocupacionSeccion2),
        $("#cirugias_anteriores_seccion2").val(data.responseData.cirugiasAnterioresSeccion2),
        $("#medicamentos_seccion2").val(data.responseData.medicamentosSeccion2),
        $("#ingiere_alcohol_seccion2").val(data.responseData.ingiereAlcoholSeccion2),
        $("#hace_ejercicio_seccion2").val(data.responseData.haceEjercicioSeccion2),
        $("#fuma_seccion2").val(data.responseData.fumaSeccion2),
        $("#antecedentes_heredo_seccion2").val(data.responseData.antecedentesHeredoSeccion2),
        $("#menarca_seccion2").val(data.responseData.menarcaSeccion2),
        $("#inicio_actividad_seccion2").val(data.responseData.inicioActividadSeccion2),
        $("#interrogatorio_por_aparatos_seccion2").val(data.responseData.interrogatorioPorAparatosSeccion2),
        $("#motivo_consulta_seccion2").val(data.responseData.motivoConsultaSeccion2),

        //Seccion 3

        $('#padecimiento_seccion3').val(data.responseData.padecimientoSeccion3);
        data.responseData.problemaRespirarSeccion3!=0 ? $('#problema_respirar_seccion3').prop('checked',true) : 0;
        data.responseData.sonidosRespirarSeccion3!=0 ? $('#sonidos_respirar_seccion3').prop('checked',true) : 0;
        data.responseData.secrecionesSeccion3!=0 ? $('#secreciones_seccion3').prop('checked',true) : 0;
        $("#color_esputo_seccion3").val(data.responseData.colorEsputoSeccion3)
        data.responseData.agitaSeccion3!=0 ? $('#agita_seccion3').prop('checked',true) : 0;
        data.responseData.cansancioSeccion3!=0 ? $('#cansancio_seccion3').prop('checked',true) : 0;
        data.responseData.cianosisSeccion3!=0 ? $('#cianosis_seccion3').prop('checked',true) : 0;
        data.responseData.fatigaSeccion3!=0 ? $('#fatiga_seccion3').prop('checked',true) : 0;
        data.responseData.soplosSeccion3!=0 ? $('#soplos_seccion3').prop('checked',true) : 0;
        data.responseData.diarreaSeccion3!=0 ? $('#diarrea_seccion3').prop('checked',true) : 0;
        data.responseData.mocoSeccion3!=0 ? $('#moco_seccion3').prop('checked',true) : 0;
        data.responseData.sangreSeccion3!=0 ? $('#sangre_seccion3').prop('checked',true) : 0;
        data.responseData.estreSeccion3!=0 ? $('#estre_seccion3').prop('checked',true) : 0;
        data.responseData.excretaSeccion3!=0 ? $('#excreta_seccion3').prop('checked',true) : 0;
        data.responseData.vomitosSeccion3!=0 ? $('#vomitos_seccion3').prop('checked',true) : 0;
        data.responseData.poliuriaSeccion3!=0 ? $('#poliuria_seccion3').prop('checked',true) : 0;
        data.responseData.disuriaSeccion3!=0 ? $('#disuria_seccion3').prop('checked',true) : 0;
        data.responseData.sangreGenitourinarioSeccion3!=0 ? $('#sangre_genitourinario_seccion3').prop('checked',true) : 0;
        data.responseData.olorSeccion3!=0 ? $('#olor_seccion3').prop('checked',true) : 0;
        $("#olor_seccion3").val(data.responseData.olorSeccion3)
        $("#color_seccion3").val(data.responseData.colorSeccion3)
        $("#frecuencia_orinar_seccion3").val(data.responseData.frecuenciaOrinarSeccion3)
        data.responseData.tenesmoSeccion3!=0 ? $('#tenesmo_seccion3').prop('checked',true) : 0;
        data.responseData.hiperactividadSeccion3!=0 ? $('#hiperactividad_seccion3').prop('checked',true) : 0;
        data.responseData.perdidaFuerzaSeccion3!=0 ? $('#perdida_fuerza_seccion3').prop('checked',true) : 0;
        $("#somnolencia_seccion3").val(data.responseData.somnolenciaSeccion3)
        data.responseData.cefaleasSeccion3!=0 ? $('#cefaleas_seccion3').prop('checked',true) : 0;
        data.responseData.irritabilidadSeccion3!=0 ? $('#irritabilidad_seccion3').prop('checked',true) : 0;
        data.responseData.paresiasSeccion3!=0 ? $('#paresias_seccion3').prop('checked',true) : 0;
        data.responseData.faltaMovimientoSeccion3!=0 ? $('#falta_movimiento_seccion3').prop('checked',true) : 0;
        data.responseData.parestiasisSeccion3!=0 ? $('#parestiasis_seccion3').prop('checked',true) : 0;
        data.responseData.movimientosInvoluntariosSeccion3!=0 ? $('#movimientos_involuntarios_seccion3').prop('checked',true) : 0;
        data.responseData.artralgiasSeccion3!=0 ? $('#artralgias_seccion3').prop('checked',true) : 0;
        data.responseData.contraccionesMusculosSeccion3!=0 ? $('#contraccion_musculos_seccion3').prop('checked',true) : 0;
        $('#erupciones_seccion3').val(data.responseData.erupcionesSeccion3)
        $('#dematosis_seccion3').val(data.responseData.dematosisSeccion3)
        $('#glandulas_seccion3').val(data.responseData.glandulasSeccion3)
        $('#pelo_seccion3').val(data.responseData.peloSeccion3)
        $('#dientes_seccion3').val(data.responseData.dientesSeccion3)
        $('#gr_seccion3').val(data.responseData.grSeccion3)
        $('#hb_seccion3').val(data.responseData.hbSeccion3)
        $('#hct_seccion3').val(data.responseData.hctSeccion3)
        $('#plag_seccion3').val(data.responseData.plagSeccion3)
        $('#cmhg_seccion3').val(data.responseData.cmhgSeccion3)
        $('#leu_seccion3').val(data.responseData.leuSeccion3)
        $('#lin_seccion3').val(data.responseData.linSeccion3)
        $('#mono_seccion3').val(data.responseData.monoSeccion3)
        $('#eos_seccion3').val(data.responseData.eosSeccion3)
        $('#bas_seccion3').val(data.responseData.basSeccion3)
        $('#segmentados_seccion3').val(data.responseData.segmentadosSeccion3)
        $('#enbanda_seccion3').val(data.responseData.enBandaSeccion3)
        $('#qs_glucosa_seccion3').val(data.responseData.qsGlucosaSeccion3)
        $('#urea_seccion3').val(data.responseData.ureaSeccion3)
        $('#creatinina_seccion3').val(data.responseData.creatininaSeccion3)
        $('#col_seccion3').val(data.responseData.colSeccion3)
        $('#tag_seccion3').val(data.responseData.tagSeccion3)
        data.responseData.respiracionRapidaSeccion3!=0 ? $('#respiracion_rapida_seccion3').prop('checked',true) : 0;
        data.responseData.respiracionLentaSeccion3!=0 ? $('#respiracion_lenta_seccion3').prop('checked',true) : 0;
        $('#qs_seccion3').val(data.responseData.qsSeccion3)
        $('#ego_seccion3').val(data.responseData.egoSeccion3)
        $('#tp_seccion3').val(data.responseData.tpSeccion3)
        $('#tpt_seccion3').val(data.responseData.tptSeccion3)
        $('#hiv_seccion3').val(data.responseData.hivSeccion3)
        $('#otros_seccion3').val(data.responseData.otrosSeccion3)
        $('#sintomas_generales_seccion3').val(data.responseData.sintomasGeneralesSeccion3)
        
        //Seccion 4
        $("#ta_seccion4").val(data.responseData.taSeccion4)
        $("#fc_seccion4").val(data.responseData.fcSeccion4)
        $("#fr_seccion4").val(data.responseData.frSeccion4)
        $("#temp_seccion4").val(data.responseData.tempSeccion4)
        $("#peso_seccion4").val(data.responseData.pesoSeccion4)
        $("#estatura_seccion4").val(data.responseData.estatusSeccion4)
        $("#cabeza_seccion4").val(data.responseData.cabezaSeccion4)
        $("#cuello_seccion4").val(data.responseData.cuelloSeccion4)
        $("#torax_seccion4").val(data.responseData.toraxSeccion4)
        $("#abdomen_seccion4").val(data.responseData.abdomenSeccion4)
        $("#extremidades_seccion4").val(data.responseData.extremidadesSeccion4)
        $("#genitales_seccion4").val(data.responseData.genitalesSeccion4)
        $("#diagnostico_seccion4").val(data.responseData.diagnosticoSeccion4)
        $("#tratamiento_seccion4").val(data.responseData.tratamientoSeccion4)

        $('#modalCliente').modal('show');
        /*if (data.responseData1[0].foto != null) {
            $('#imagenFile').attr('src','img/fotos/files/'+data.responseData1[0].foto);
        }*/
      }
    });
}

function obtenerEstados(){

  var id = $("#pais").val()

  $.ajax({
    url: 'estados/'+id,
    type:'GET',

      success: function(data) {
      //  $('#Name').val(data.responseData.name);
          renderizarEstados(data)
      }
    });

}

function renderizarEstados(data){

  $("#estados").empty()
  for(i = 0; i < data.estados.length; i++){
    
    $("#estados").append("<option value='"+data.estados[i].id+"'>"+data.estados[i].nombre+"</option>")

  }

}

function guardarCliente(){

  $(".viewClient").attr('readonly', false)
  $(".viewClient").attr('disabled', false)

  //codigo de prueba
  /*
  console.log("ta")
  console.log($("#ta_seccion4").val())

  console.log("fc")
  console.log($("#fc_seccion4").val())

  console.log("temp")
  console.log($("#temp_seccion4").val())

  console.log("peso")
  console.log($("#peso_seccion4").val())

  console.log("estatura")
  console.log($("#estatura_seccion4").val())

  console.log("cabeza")
  console.log($("#cabeza_seccion4").val())

  console.log("cuello")
  console.log($("#cuello_seccion4").val())

  console.log("torax_seccion4")
  console.log($("#torax_seccion4").val())

  console.log("abdomen_seccion4")
  console.log($("#abdomen_seccion4").val())

  console.log("extremidades_seccion4")
  console.log($("#extremidades_seccion4").val())

  console.log("genitales_seccion4")
  console.log($("#genitales_seccion4").val())

  console.log("diagnostico_seccion4")
  console.log($("#diagnostico_seccion4").val())

  console.log("tratamiento_seccion4")
  console.log($("#tratamiento_seccion4").val())
  */
  if ($('#expediente_numero_seccion2').val()=='') {
    mio({ type: 'error',title: 'Ingrese el número de expediente'});
    $('#expediente_numero_seccion2').focus();
    return 0;
  }
  
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
  if ($('#sexo').val()=='' || $('#sexo').val()==null) {
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
  
  if ($('#pais').val()=='') {
    mio({ type: 'error',title: 'Seleccione País'});
    $('#pais').focus();
    return 0;
  }

  if ($('#estados').val()=='') {
    mio({ type: 'error',title: 'Seleccione Estado'});
    $('#estados').focus();
    return 0;
  }

  $.ajax({
    url: 'guardarCliente',
    type:'POST',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{

    //Seccion1

    name:$('#nombreCliente').val().toUpperCase(),
    apePat:$('#apellido1Cliente').val().toUpperCase(),
    fechaNacimiento:$('#fechaNacimiento').val(),
    lugarNacimiento:$('#lugarNacimiento').val(),
    edad:$('#edad').val(),
    celular:$('#celCliente').val(),
    telCasa:$('#telCliente').val(),
    telOficina:$('#telOficCliente').val(),
    religion:$("#religion").val(),
    escolaridad:$("#escolaridad").val(),
    email:$('#emailCliente').val(),
    sexo:$('#sexo').val(),
    edoCivil:$('#edoCivil').val(),
    pais:$("#pais").val(),
    estado:$("#estados").val(),
    calle:$("#calle").val(),
    ciudad:$('#ciudad').val(),
    codigoPostal:$('#codigo-postal').val(),
    enteroNosotros:$('#entero-nosotros').val(),
    cirugiasPrevias:$('#cirugias-previas').val(),
    otrasCirugias:$('#otras-cirugias').val(),
    puesto:$('#puestoCliente').val().toUpperCase(),
    compania:$('#companiaCliente').val().toUpperCase(),
    telCompania:$('#telCompania').val(),
    emerNombre:$('#nombreEmergencia').val().toUpperCase(),
    emerRelacion:$('#relacionEmergencia').val().toUpperCase(),
    emerTel:$('#telEmegencia').val(),
    imagen: file_path,

    //Seccion 2

    nombreSeccion2: $("#nombre_seccion2").val(),
    lugarNacimientoSeccion2: $("#lugar_nacimiento_seccion2").val(),
    edadSeccion2: $("#edad_seccion2").val(),
    telefonoSeccion2:$("#telefono_seccion2").val(),
    fechaHistoriaSeccion2: $("#fecha_historia_seccion2").val(),
    fechaNacimientoSeccion2: $("#fecha_nacimiento_seccion2").val(),
    padreSeccion2: $("#padre_seccion2").val(), 
    enfermedadesPadreSeccion2: $("#enfermedades_padre_seccion2").val(),
    alergiasPadreSeccion2:$("#alergias_padre_seccion2").val(),
    madreSeccion2:$("#madre_seccion2").val(), 
    enfermedadesMadreSeccion2: $("#enfermedades_madre_seccion2").val(),
    alergiasMadreSeccion2:$("#alergias_madre_seccion2").val(),
    abuelosPaternosEnfermedadesSeccion2: $("#abuelos_paternos_enfermedades_seccion2").val(),
    abuelosMaternosEnfermedadesSeccion2: $("#abuelos_maternos_enfermedades_seccion2").val(),
    hermanosCuantosSeccion2: $("#hermanos_cuantos_seccion2").val(),
    hermanosEnfermedadesSeccion2: $("#hermanos_enfermedades_seccion2").val(),
    enfermedadesCongenitasSeccion2: $("#enfermedades_congenitas_seccion2").val(),
    enfermedadesInfanciaSeccion2: $("#enfermedades_infancia_seccion2").val(),
    enfermedadesCronicoDegenerativasSeccion2: $("#enfermedades_cronico_degenerativas_seccion2").val(),
    internamientosQuirurgicosSeccion2: $("#internamientos_quirurgicos_seccion2").val(),
    transfusionesSeccion2: $("#transfusiones_seccion2").val(),
    traumaticasSeccion2: $("#traumaticas_seccion2").val(),
    alergiasSeccion2: $("#alergias_seccion2").val(),
    tabaquismoSeccion2: (($('#tabaquismo:checked').val()) !=null ? 1 : 0),
    alcoholismoSeccion2: (($('#alcoholismo:checked').val()) !=null ? 1 : 0),
    drogasSeccion2: (($('#drogas:checked').val()) !=null ? 1 : 0),
    numeroHabitacionesSeccion2: $("#numero_habitaciones_seccion2").val(),
    cuantasPersonasSeccion2: $("#cuantas_personas_seccion2").val(), 
    materialSeccion2: $("#material_seccion2").val(),
    ventilacionSeccion2: (($('#ventilacion:checked').val()) !=null ? 1 : 0),
    aguaSeccion2: (($('#agua_seccion2:checked').val()) !=null ? 1 : 0),
    gasSeccion2: (($('#gas_seccion2:checked').val()) !=null ? 1 : 0),  
    luzSeccion2: (($('#luz_seccion2:checked').val()) !=null ? 1 : 0),
    drenajeSeccion2: (($('#drenaje_seccion2:checked').val()) !=null ? 1 : 0), 
    mascotasSeccion2: (($('#mascotas_seccion2:checked').val()) !=null ? 1 : 0),
    cualesMascotasSeccion2: $("#cuales_mascotas_seccion2").val(),
    disposicionBasuraSeccion2: $("#disposicion_basura_seccion2").val(),
    alimentacionSeccion2: $("#alimentacion_seccion2").val(),
    organizacionSeccion2: $("#organizaciones_seccion2").val(),
    higieneSeccion2: $("#higiene_seccion2").val(),
    gestasSeccion2: $("#gestas_seccion2").val(),
    partosSeccion2: $("#partos_seccion2").val(),
    cesareasSeccion2: $("#cesareas_seccion2").val(),
    abortosSeccion2: $("#abortos_seccion2").val(),
    furSeccion2: $("#fur_seccion2").val(),
    sexoSeccion2: $("#sexo_seccion2").val(),
    religionSeccion2: $("#religion_seccion2").val(),
    direccionSeccion2: $("#direccion_seccion2").val(),
    ocupacionSeccion2: $("#ocupacion_seccion2").val(),
    cirugiasAnterioresSeccion2: $("#cirugias_anteriores_seccion2").val(),
    medicamentosSeccion2: $("#medicamentos_seccion2").val(),
    ingiereAlcoholSeccion2: $("#ingiere_alcohol_seccion2").val(),
    haceEjercicioSeccion2: $("#hace_ejercicio_seccion2").val(),
    fumaSeccion2: $("#fuma_seccion2").val(),
    antecedentesHeredoSeccion2: $("#antecedentes_heredo_seccion2").val(),
    menarcaSeccion2: $("#menarca_seccion2").val(),
    inicioActividadSeccion2: $("#inicio_actividad_seccion2").val(),
    interrogatorioPorAparatosSeccion2: $("#interrogatorio_por_aparatos_seccion2").val(),
    motivoConsultaSeccion2: $("#motivo_consulta_seccion2").val(),


    //Seccion 3
    padecimientoSeccion3:$("#padecimiento_seccion3").val() ,
    problemaRespirarSeccion3: (($('#problema_respirar_seccion3:checked').val()) !=null ? 1 : 0),
    sonidosRespirarSeccion3: (($('#sonidos_respirar_seccion3:checked').val()) !=null ? 1 : 0),
    secrecionesSeccion3: (($('#secreciones_seccion3:checked').val()) !=null ? 1 : 0),
    colorEsputoSeccion3:$('#color_esputo_seccion3').val(),
    agitaSeccion3:(($('#agita_seccion3:checked').val()) !=null ? 1 : 0),
    cansancioSeccion3:(($('#cansancio_seccion3:checked').val()) !=null ? 1 : 0),
    cianosisSeccion3: (($('#cianosis_seccion3:checked').val()) !=null ? 1 : 0),
    fatigaSeccion3: (($('#fatiga_seccion3:checked').val()) !=null ? 1 : 0),
    soplosSeccion3: (($('#soplos_seccion3:checked').val()) !=null ? 1 : 0),
    diarreaSeccion3: (($('#diarrea_seccion3:checked').val()) !=null ? 1 : 0),
    mocoSeccion3: (($('#moco_seccion3:checked').val()) !=null ? 1 : 0),
    sangreSeccion3: (($('#sangre_seccion3:checked').val()) !=null ? 1 : 0),
    estreSeccion3:(($('#estre_seccion3:checked').val()) !=null ? 1 : 0),
    excretaSeccion3:(($('#excreta_seccion3:checked').val()) !=null ? 1 : 0),
    vomitosSeccion3:(($('#vomitos_seccion3:checked').val()) !=null ? 1 : 0),
    poliuriaSeccion3: (($('#poliuria_seccion3:checked').val()) !=null ? 1 : 0),
    disuriaSeccion3:(($('#disuria_seccion3:checked').val()) !=null ? 1 : 0),
    sangreGenitourinarioSeccion3: (($('#sangre_genitourinario_seccion3:checked').val()) !=null ? 1 : 0),
    olorSeccion3: $("#olor_seccion3").val(),
    colorSeccion3:$("#color_seccion3").val(),
    frecuenciaOrinarSeccion3: $("#frecuencia_orinar_seccion3").val(),
    tenesmoSeccion3: (($('#tenesmo_seccion3:checked').val()) !=null ? 1 : 0),
    hiperactividadSeccion3:(($('#hiperactividad_seccion3:checked').val()) !=null ? 1 : 0),
    perdidaFuerzaSeccion3: (($('#perdida_fuerza_seccion3:checked').val()) !=null ? 1 : 0),
    somnolenciaSeccion3: $('#somnolencia_seccion3').val(),
    cefaleasSeccion3:(($('#cefaleas_seccion3:checked').val()) !=null ? 1 : 0),
    irritabilidadSeccion3: (($('#irritabilidad_seccion3:checked').val()) !=null ? 1 : 0),
    paresiasSeccion3:(($('#paresias_seccion3:checked').val()) !=null ? 1 : 0),
    faltaMovimientoSeccion3:(($('#falta_movimiento_seccion3:checked').val()) !=null ? 1 : 0),
    parestiasisSeccion3: (($('#parestiasis_seccion3:checked').val()) !=null ? 1 : 0),
    movimientosInvoluntariosSeccion3: (($('#movimientos_involuntarios_seccion3:checked').val()) !=null ? 1 : 0),
    artralgiasSeccion3: (($('#artralgias_seccion3:checked').val()) !=null ? 1 : 0),
    contraccionesMusculosSeccion3:(($('#contraccion_musculos_seccion3:checked').val()) !=null ? 1 : 0),
    erupcionesSeccion3:$('#erupciones_seccion3').val(),
    dematosisSeccion3: $('#dematosis_seccion3').val(),
    glandulasSeccion3: $('#glandulas_seccion3').val(),
    peloSeccion3: $('#pelo_seccion3').val(),
    dientesSeccion3: $('#dientes_seccion3').val(),
    grSeccion3: $('#gr_seccion3').val(),
    hbSeccion3: $('#hb_seccion3').val(),
    hctSeccion3: $('#hct_seccion3').val(),
    plagSeccion3: $('#plag_seccion3').val(),
    cmhgSeccion3: $('#cmhg_seccion3').val(),
    leuSeccion3: $('#leu_seccion3').val(),
    linSeccion3: $('#lin_seccion3').val(),
    monoSeccion3: $('#mono_seccion3').val(),
    eosSeccion3: $('#eos_seccion3').val(),
    basSeccion3: $('#bas_seccion3').val(),
    segmentadosSeccion3: $('#segmentados_seccion3').val(),
    enBandaSeccion3: $('#enbanda_seccion3').val(),
    qsGlucosaSeccion3: $('#qs_glucosa_seccion3').val(),
    ureaSeccion3:$('#urea_seccion3').val(),
    creatininaSeccion3: $('#creatinina_seccion3').val(),
    colSeccion3: $('#col_seccion3').val(),
    tagSeccion3: $('#tag_seccion3').val(),
    respiracionRapidaSeccion3:(($('#respiracion_rapida_seccion3:checked').val()) !=null ? 1 : 0),
    respiracionLentaSeccion3:(($('#respiracion_lenta_seccion3:checked').val()) !=null ? 1 : 0),
    qsSeccion3: $('#qs_seccion3').val(),
    egoSeccion3: $('#ego_seccion3').val(),
    tpSeccion3: $('#tp_seccion3').val(),
    tptSeccion3: $('#tpt_seccion3').val(),
    hivSeccion3: $('#hiv_seccion3').val(),
    otrosSeccion3: $('#otros_seccion3').val(),
    sintomasGeneralesSeccion3: $("#sintomas_generales_seccion3").val(),

    //Seccion 4
    taSeccion4:$("#ta_seccion4").val(),
    fcSeccion4:$("#fc_seccion4").val(),
    frSeccion4:$("#fr_seccion4").val(),
    tempSeccion4:$("#temp_seccion4").val(),
    pesoSeccion4:$("#peso_seccion4").val(),
    estatusSeccion4:$("#estatura_seccion4").val(),
    cabezaSeccion4:$("#cabeza_seccion4").val(),
    cuelloSeccion4:$("#cuello_seccion4").val(),
    toraxSeccion4:$("#torax_seccion4").val(),
    abdomenSeccion4:$("#abdomen_seccion4").val(),
    extremidadesSeccion4:$("#extremidades_seccion4").val(),
    genitalesSeccion4: $("#genitales_seccion4").val(),
    diagnosticoSeccion4: $("#diagnostico_seccion4").val(),
    tratamientoSeccion4: $("#tratamiento_seccion4").val()

  },

      success: function(data,textStatus,jqXHR) {
      //  $('#Name').val(data.responseData.name);
          $('#modalCliente').modal('hide');
          swal({
            position:'center',
            type: 'success',
            title: 'Paciente Resgistrado',
            showConfirmButton: false,
            timer: 1500
          });
          tableExample.ajax.reload();
      }
    });

}


////////////////////////////////////////////////////////////////////////////////////////
function agregaMembresia(id){
  limpiaMembresia();
  $('#selectMembresia').val(null).trigger('change');
  $('#agregarMembresia').attr('onClick','actualizarMembresia('+id+');').html('Actualizar').show();
  $('#Membresia').modal('show');
}

$("#selectMembresia").change(function()
    {
        if($(this).val() != null)
          visualizarMembresia($(this).val(),0);
          //buscarProductos($(this).val());
    }
);

$('#selectMembresia').select2(
  {
      ajax:
      {
          url: 'listaMembresia',
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
              return repo.nombre;
          var markup = repo.nombre;
          return markup;
      },
      templateSelection: function(repo)
      {
          return repo.nombre;
      },
      escapeMarkup: function(markup)
      {
          return markup;
      }
  }
);

function limpiaMembresia() {
  //$('#nameMembresia').val('');
  //$('#costoMembresia').val('');
  //$('#vigenciaMembresia').val('');
  $('#detalleMembresias tbody').empty();
}

function visualizarMembresia(id,dato) {
  $.ajax({
    url: 'verMembresia',
    type:'GET',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },data:{
    id:id,
  },
      success: function(data,textStatus,jqXHR) {
        console.log(data.responseData);
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
          '<td><input id="'+(contador[contador.length-1])+'cantidad" type="Number" class="form-control form-control-sm disableBtn" value="'+data.responseData[i].cantidad+'"> <input id="'+(contador[contador.length-1])+'id" value="'+data.responseData[i].idProdServ+'" type="hidden"> <input id="'+(contador[contador.length-1])+'tipo" value="'+data.responseData[i].tipo+'" type="hidden"> </td>'+
          '<td><button  class="btn btn-sm btn-danger disableBtn"onClick="removerProducto('+(contador.length-1)+');" id="'+(contador[contador.length-1])+'button"><i class="fa fa-trash"> </i></button></td></tr>');

        }
        if (dato) {
          $('.disableBtn').attr('disabled','disabled');
        }

      }

    });
}

$('#btnListaProductos').click(function() {
  $('#agregaProductos').modal('show');
});

$('#btnListaServicios').click(function() {
  $('#agregaServicios').modal('show');
});

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

function removerProducto(id) {
  $('#'+contador[id]+'row').remove();
  contador.splice(id,1);
  for (var i = 0; i < contador.length; i++) {
    $('#'+contador[i]+'button').removeAttr('onClick');
    $('#'+contador[i]+'button').attr('onClick','removerProducto('+i+')');
  }
}

function actualizarMembresia(id) {

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
  for (var i = 0; i < contador.length; i++) {
    $.ajax({
      url: 'agregarMembresiaCliente',
      type:'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },data:{
      idMembresia:id,
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
    title: 'Membresia Registrada',
    showConfirmButton: false,
    timer: 1500
  });

  $('#Membresia').modal('hide');
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
