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

    $(".viewClient").attr('readonly', false)
    $(".viewClient").attr('disabled', false)

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


    $('#myTab a[href="#seccion2"]').tab('show');
  });

  $('#seccion2Continuar').click(function (e) {

    $('#myTab a[href="#seccion3"]').tab('show');
  });

})

$('#seccion3Continuar').click(function (e) {


  e.preventDefault();

  $('#myTab a[href="#seccion4"]').tab('show');

})


function limpiarCheckbox(){
    $('input[type=checkbox]').prop('checked',false);
    $('input').val('');
    $('select').val('');
    $('textarea').val('');

    $("#ahfSeccion2").val("Interrogados y negados"),
    $("#apnpSeccion2").val("Niega toxicomanías, verduras 7/7, frutas 7/7, carne roja 2/7, carnes blancas 437, lácteos 3/7, tortillas de maíz 3x2/7. Consumo de agua 1 litros. Habita en la Colonia 10 de mayo, calle Durango 460, Tijuana, habitan 2 personas, cuenta con 2 habitaciones, cocina fuera de los dormitorios, cuenta con todos los servicios, flora y fauna fuera de la casa. Inmunizaciones completas. Baño y cambio de ropa diario. Cepillado dental 2 veces al día. Caminata diarios durante 15 minutos."),
    $("#appSeccion2").val("Diabetes Mellitus Gestacional de 1 mes de diagnóstico, niega alergias, cirugías niega Qx, niega Transfusiones, niega traumatismos, niega infectocontagiosos."),
    $("#agoSeccion2").val("Menarca 13 años, Ciclos menstruales regulares 30 x 4, IVSA 17 años, Compañeros sexuales 2, Gesta 5, Para 3, P1 con peso de 4200gr en 2003, P2 con peso de 2500gr en 2009, P3 4600gr en 2010. Aborto 1, Cesárea 0. Método de planificación familiar: Hormonal oral. FUM 8 agosto 2015, FPP: 15 de mayo 2015."),
    $("#padecimiento_seccion2").val("Paciente femenino de 41 años de edad, cursando su cuarto embarazo de 32 SDG, enviada de la consulta de Ginecología y obstétrica por ser portadora de DMG"),
    $("#exploracionFisicaSeccion2").val("TA: 100/60 mmHg, FC 84 1pm, FR: 20 rpm. Talla: 1.49 mts, Peso: 53 kgs. Consciente, alerta, orientada en 3 esferas. Adecuada coloración de piel y tegumentos, mucosas normohidratadas. Cuello cilíndrico, con presencia de acantosis nigricans leve, sin adenomegalias. Área pulmonar con murmullo vesicular presente, sin sibilancias ni estertores. Ruidos Cardiacos rítmicos de buen tono e intensidad, sin otros fenómenos agregados. Abdomen globoso a expensas de útero gestante, sin dolor a la palpación. Extremidades integras, no edema, reflejos osteotendinosos normales."),
    $("#laboratorioSeccion2").val("02-03-16 glucosa 93mgs. Tamiz glucosa a los 60min. 216 mgs/dl Ego: proteínas negativo, leucos 7-8x c., celulas epiteliales +++, hifas ++. 17-03-16 Glucosa 81mgs. Glucosa posprandial a los 120min. 132 mgs."),
    $("#idxSeccion2").val("Femenino de 41 años de edad. Multigesta, con dos procutos macrosomicos en embarazos anteriores, no atendida en este lugar, sin dx. De Diabetes en ese momento. Ahora lo encontramos positiva con TAMIZ y se inició tratamiento con dieta y metformina 1x2. Embarazo de 32 SDG"),
    $("#planSeccion2").val("Dieta para Diabético de 1800 kcal con tres colaciones\n"+
"Laboratorio glucosa ayuno y posprandial, Hb glucosilada, ego. Hormonas tiroideas.\n"+
"Aumtomonitoreo capilar de acuerdo a metas terapéuticas ideales.\n"+
"Medicamentos:\n"+
"Laboratorio: Glucosa en ayuno, Glucosa posprandial 60 min, Hemoglobina Glucosilada, EGO. BHC:\n"+
"Cita en 2 semanas\n"+
"Cita abierta a urgencias, se dan datos de alarma.\n"+
"Pronostico: Reservado para el binomio")

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
        $('#segundoNombreCliente').val(data.responseData.segundoNombre),
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
        $('#paseMedico').val(data.responseData.paseMedico)
        $('#entero-nosotros').val(data.responseData.enteroNosotros)
        $("#especifiqueEnteroNosotros").val(data.responseData.especifiqueEnteroNosotros)
        $("#aseguradora").val(data.responseData.aseguradora),
        $("#tipoSangre").val(data.responseData.tipoSangre),
        $('#cirugias-previas').val(data.responseData.cirugiasPrevias)
        $('#otras-cirugias').val(data.responseData.otrasCirugias)
        $('#puestoCliente').val(data.responseData.puesto)
        $('#companiaCliente').val(data.responseData.compania)
        $('#telCompania').val(data.responseData.telCompania)
        $('#nombreEmergencia').val(data.responseData.emerNombre)
        $('#relacionEmergencia').val(data.responseData.emerRelacion)
        $('#telEmegencia').val(data.responseData.emerTel)
        $("#ocupacion_seccion2").val(data.responseData.ocupacionSeccion2)
        $("#diagnosticoPreOperatorio").val(data.responseData.diagnosticoPreOperatorio)
        $("#procedimientoQuirurgico").val(data.responseData.procedimientoQuirurgico)
        $("#planQuirurgico").val(data.responseData.planQuirurgico)
        $("#cuidadoTerapeutico").val(data.responseData.cuidadoTerapeutico)

        //imagen: file_path,

        //Seccion 2

        $("#originariaSeccion2").val(data.responseData.originariaSeccion2)
        $("#direccion_seccion2").val(data.responseData.resideSeccion2)
        $("#ahfSeccion2").val(data.responseData.ahfSeccion2)
        $("#apnpSeccion2").val(data.responseData.apnpSeccion2)
        $("#appSeccion2").val(data.responseData.appSeccion2)
        $("#agoSeccion2").val(data.responseData.agoSeccion2)
        $("#padecimiento_seccion2").val(data.responseData.padecimientoSeccion2)
        $("#exploracionFisicaSeccion2").val(data.responseData.exploracionFisicaSeccion2)
        $("#laboratorioSeccion2").val(data.responseData.laboratorioSeccion2)
        $("#idxSeccion2").val(data.responseData.idxSeccion2)
        $("#planSeccion2").val(data.responseData.planSeccion2)

        
        data.responseData.tabaquismoSeccion2!=0 ? $('#tabaquismo').prop('checked',true) : 0;
        data.responseData.alcoholismoSeccion2!=0 ? $('#alcoholismo').prop('checked',true) : 0;
        data.responseData.drogasSeccion2!=0 ? $('#drogas').prop('checked',true) : 0;

    

    


    //Seccion 3
    $("#peso_seccion3").val(data.responseData.peso_seccion3)
    $("#talla_seccion3").val(data.responseData.talla_seccion3)
    $("#ta_seccion3").val(data.responseData.ta_seccion3)
    $("#fc_seccion3").val(data.responseData.fc_seccion3)
    $("#fr_seccion3").val(data.responseData.fr_seccion3)
    $("#temp_seccion3").val(data.responseData.temp_seccion3)
    $("#actividad_fisica_seccion3").val(data.responseData.actividad_fisica_seccion3),
    $("#subir_escaleras_seccion3").val(data.responseData.subir_escaleras_seccion3),
    $("#cuantos_pisos_seccion3").val(data.responseData.cuantos_pisos_seccion3),

    data.responseData.sangrar_excesivamente_seccion3!=0 ? $('#sangrar_excesivamente_seccion3').prop('checked',true) : 0;
    data.responseData.reacciones_anormales_seccion3!=0 ? $('#reacciones_anormales_seccion3').prop('checked',true) : 0;
    data.responseData.fiebre_anestesia_seccion3!=0 ? $('#fiebre_anestesia_seccion3').prop('checked',true) : 0;
    data.responseData.alergico_medicamentos_seccion3!=0 ? $('#alergico_medicamentos_seccion3').prop('checked',true) : 0;
    
    $("#cuales_medicamentos_seccion3").val(data.responseData.cuales_medicamentos_seccion3)
    $("#reacciones_seccion3").val(data.responseData.reacciones_seccion3)
    
    data.responseData.reacciones_anormales_anestesia_seccion3 != 0 ? $("#reacciones_anormales_anestesia_seccion3").prop('checked',true) : 0;

    data.responseData.alergico_cinta_adhesiva_seccion3!=0 ? $('#alergico_cinta_adhesiva_seccion3').prop('checked',true) : 0;
    data.responseData.alergico_oido_seccion3!=0 ? $('#alergico_oido_seccion3').prop('checked',true) : 0;
    data.responseData.bebidas_alcoholicas_seccion3!=0 ? $('#bebidas_alcoholicas_seccion3').prop('checked',true) : 0;
    data.responseData.abstenido_bebidas_alcoholicas_seccion3!=0 ? $('#abstenido_bebidas_alcoholicas_seccion3').prop('checked',true) : 0;
    data.responseData.sufre_delirios_seccion3!=0 ? $('#sufre_delirios_seccion3').prop('checked',true) : 0;
    data.responseData.fuma_seccion3!=0 ? $('#fuma_seccion3').prop('checked',true) : 0;
    data.responseData.transfusion_sanguinea_seccion3!=0 ? $('#transfusion_sanguinea_seccion3').prop('checked',true) : 0;
    data.responseData.reaccion_transfusion_sanguinea_seccion3!=0 ? $('#reaccion_transfusion_sanguinea_seccion3').prop('checked',true) : 0;
  
    $("#reaccion_transfusion_seccion3").val(data.responseData.reaccion_transfusion_seccion3),

    data.responseData.embarazada_seccion3!=0 ? $('#embarazada_seccion3').prop('checked',true) : 0;
    
    $('#menstruacion_seccion3').val(data.responseData.menstruacion_seccion3),

    $("#padece_alergia_material_seccion3").val(data.responseData.padece_alergia_material_seccion3),

    data.responseData.corazon_seccion3!=0 ? $('#corazon_seccion3').prop('checked',true) : 0;
    data.responseData.angina_seccion3!=0 ? $('#angina_seccion3').prop('checked',true) : 0;
    data.responseData.adiccion_drogas_seccion3!=0 ? $('#adiccion_drogas_seccion3').prop('checked',true) : 0;
    data.responseData.dolores_cabeza_seccion3!=0 ? $('#dolores_cabeza_seccion3').prop('checked',true) : 0;
    data.responseData.enfermedades_mentales_seccion3!=0 ? $('#enfermedades_mentales_seccion3').prop('checked',true) : 0;
    data.responseData.embolia_pulmonar_seccion3!=0 ? $('#embolia_pulmonar_seccion3').prop('checked',true) : 0;
    data.responseData.enfermedades_articulares_seccion3!=0 ? $('#enfermedades_articulares_seccion3').prop('checked',true) : 0;
    data.responseData.fracturas_seccion3!=0 ? $('#fracturas_seccion3').prop('checked',true) : 0;
    data.responseData.problemas_columna_seccion3!=0 ? $('#problemas_columna_seccion3').prop('checked',true) : 0;
    data.responseData.desmayos_seccion3!=0 ? $('#desmayos_seccion3').prop('checked',true) : 0;
    data.responseData.enfermedades_pulmones_seccion3!=0 ? $('#enfermedades_pulmones_seccion3').prop('checked',true) : 0;
    data.responseData.asma_seccion3!=0 ? $('#asma_seccion3').prop('checked',true) : 0;
    data.responseData.tiroides_seccion3!=0 ? $('#tiroides_seccion3').prop('checked',true) : 0;
    data.responseData.tuberculosis_seccion3!=0 ? $('#tuberculosis_seccion3').prop('checked',true) : 0;
    data.responseData.enfermedades_musculares_seccion3!=0 ? $('#enfermedades_musculares_seccion3').prop('checked',true) : 0;
    data.responseData.bronquitis_seccion3!=0 ? $('#bronquitis_seccion3').prop('checked',true) : 0;
    data.responseData.enfisema_seccion3!=0 ? $('#enfisema_seccion3').prop('checked',true) : 0;
    data.responseData.embolia_cerebral_seccion3!=0 ? $('#embolia_cerebral_seccion3').prop('checked',true) : 0;
    data.responseData.varices_seccion3!=0 ? $('#varices_seccion3').prop('checked',true) : 0;
    data.responseData.estrabismo_seccion3!=0 ? $('#estrabismo_seccion3').prop('checked',true) : 0;
    data.responseData.glaucoma_seccion3!=0 ? $('#glaucoma_seccion3').prop('checked',true) : 0;
    data.responseData.hepatitis_seccion3!=0 ? $('#hepatitis_seccion3').prop('checked',true) : 0;
    data.responseData.presion_alta_seccion3!=0 ? $('#presion_alta_seccion3').prop('checked',true) : 0;
    data.responseData.diabetes_seccion3!=0 ? $('#diabetes_seccion3').prop('checked',true) : 0;
    data.responseData.flebitis_seccion3!=0 ? $('#flebitis_seccion3').prop('checked',true) : 0;
    data.responseData.abstinencia_drogas_seccion3!=0 ? $('#abstinencia_drogas_seccion3').prop('checked',true) : 0;
    data.responseData.enfermedad_rinones_seccion3!=0 ? $('#enfermedad_rinones_seccion3').prop('checked',true) : 0;
    data.responseData.moretones_seccion3!=0 ? $('#moretones_seccion3').prop('checked',true) : 0;


    $("#fc_seccion3").val(data.responseData.fc_seccion3),
    $("#fecha_ultimo_examen_seccion3").val(data.responseData.fecha_ultimo_examen_seccion3),
    $("#fecha_ultima_radiografia_seccion3").val(data.responseData.fecha_ultima_radiografia_seccion3),
    $("#fecha_ultimo_electrocardiograma_seccion3").val(data.responseData.fecha_ultimo_electrocardiograma_seccion3),
    $("#clase_anestesia_seccion3").val(data.responseData.clase_anestesia_seccion3),

    data.responseData.fiebre_operaciones_previas_seccion3!=0 ? $('#fiebre_operaciones_previas_seccion3').prop('checked',true) : 0;
    data.responseData.dientes_postizos_seccion3!=0 ? $('#dientes_postizos_seccion3').prop('checked',true) : 0;
    data.responseData.faltan_dientes_seccion3!=0 ? $('#faltan_dientes_seccion3').prop('checked',true) : 0;
    data.responseData.dientes_porcelana_seccion3!=0 ? $('#dientes_porcelana_seccion3').prop('checked',true) : 0;
    data.responseData.dientes_sueltos_seccion3!=0 ? $('#dientes_sueltos_seccion3').prop('checked',true) : 0;
    data.responseData.dificulta_mover_boca_seccion3!=0 ? $('#dificulta_mover_boca_seccion3').prop('checked',true) : 0;
    data.responseData.lentes_contacto_seccion3!=0 ? $('#lentes_contacto_seccion3').prop('checked',true) : 0;
    data.responseData.pestanas_seccion3!=0 ? $('#pestanas_seccion3').prop('checked',true) : 0;
    data.responseData.ojo_artificial_seccion3!=0 ? $('#ojo_artificial_seccion3').prop('checked',true) : 0;
    data.responseData.defectos_mayores_seccion3!=0 ? $('#defectos_mayores_seccion3').prop('checked',true) : 0;
    data.responseData.aspirina_seccion3!=0 ? $('#aspirina_seccion3').prop('checked',true) : 0;
    data.responseData.oxigeno_seccion3!=0 ? $('#oxigeno_seccion3').prop('checked',true) : 0;
    data.responseData.digitales_seccion3!=0 ? $('#digitales_seccion3').prop('checked',true) : 0;
    data.responseData.lsd_seccion3!=0 ? $('#lsd_seccion3').prop('checked',true) : 0;
    data.responseData.quinidinas_seccion3!=0 ? $('#quinidinas_seccion3').prop('checked',true) : 0;
    data.responseData.glaucoma_seccion3!=0 ? $('#glaucoma_seccion3').prop('checked',true) : 0;
    data.responseData.nitroglicerina_seccion3!=0 ? $('#nitroglicerina_seccion3').prop('checked',true) : 0;
    data.responseData.pastillas_dormir_seccion3!=0 ? $('#pastillas_dormir_seccion3').prop('checked',true) : 0;
    data.responseData.medicamentos_presion_seccion3!=0 ? $('#medicamentos_presion_seccion3').prop('checked',true) : 0;
    data.responseData.narcoticos_seccion3!=0 ? $('#narcoticos_seccion3').prop('checked',true) : 0;
    data.responseData.diureticos_seccion3!=0 ? $('#diureticos_seccion3').prop('checked',true) : 0;
    data.responseData.lasix_seccion3!=0 ? $('#lasix_seccion3').prop('checked',true) : 0;
    data.responseData.anticoagulantes_seccion3!=0 ? $('#anticoagulantes_seccion3').prop('checked',true) : 0;
    data.responseData.heparina_seccion3!=0 ? $('#heparina_seccion3').prop('checked',true) : 0;
    data.responseData.medicamentos_diabetes_seccion3!=0 ? $('#medicamentos_diabetes_seccion3').prop('checked',true) : 0;
    data.responseData.otro_medicamento_seccion3!=0 ? $('#otro_medicamento_seccion3').prop('checked',true) : 0;
    data.responseData.tranquilizantes_seccion3!=0 ? $('#tranquilizantes_seccion3').prop('checked',true) : 0;
   
    $("#cual_otro_medicamento_seccion3").val(data.responseData.cual_otro_medicamento_seccion3)

    data.responseData.antidepresivos_seccion3!=0 ? $('#antidepresivos_seccion3').prop('checked',true) : 0;

    $("#dosis_seccion3").val(data.responseData.dosis_seccion3),

    data.responseData.gotas_glaucoma_seccion3!=0 ? $('#gotas_glaucoma_seccion3').prop('checked',true) : 0;
    $("#padece_alergia_material_seccion3").val(data.responseData.padece_alergia_material_seccion3),

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
    segundoNombre:$('#segundoNombreCliente').val().toUpperCase(),
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
    paseMedico:$('#paseMedico').val(),
    enteroNosotros:$('#entero-nosotros').val(),
    especifiqueEnteroNosotros: $("#especifiqueEnteroNosotros").val(),
    aseguradora: $("#aseguradora").val(),
    tipoSangre:$("#tipoSangre").val(),
    cirugiasPrevias:$('#cirugias-previas').val(),
    otrasCirugias:$('#otras-cirugias').val(),
    emerNombre:$('#nombreEmergencia').val().toUpperCase(),
    emerRelacion:$('#relacionEmergencia').val().toUpperCase(),
    emerTel:$('#telEmegencia').val(),
    ocupacionSeccion2: $("#ocupacion_seccion2").val(),
    diagnosticoPreOperatorio:$("#diagnosticoPreOperatorio").val(),
    procedimientoQuirurgico:$("#procedimientoQuirurgico").val(),
    planQuirurgico:$("#planQuirurgico").val(),
    cuidadoTerapeutico:$("#cuidadoTerapeutico").val(),
    paseMedico:$('#paseMedico').val(),

    //Seccion 2

    originariaSeccion2:$("#originariaSeccion2").val(),
    resideSeccion2:$("#direccion_seccion2").val(),
    ahfSeccion2:$("#ahfSeccion2").val(),
    apnpSeccion2:$("#apnpSeccion2").val(),
    appSeccion2:$("#appSeccion2").val(),
    agoSeccion2:$("#agoSeccion2").val(),
    padecimientoSeccion2:$("#padecimiento_seccion2").val(),
    exploracionFisicaSeccion2:$("#exploracionFisicaSeccion2").val(),
    laboratorioSeccion2:$("#laboratorioSeccion2").val(),
    idxSeccion2:$("#idxSeccion2").val(),
    planSeccion2:$("#planSeccion2").val(),


    //Seccion 3
    peso_seccion3:$("#peso_seccion3").val(),
    talla_seccion3:$("#talla_seccion3").val(),
    ta_seccion3:$("#ta_seccion3").val(),
    fc_seccion3:$("#fc_seccion3").val(),
    fr_seccion3:$("#fr_seccion3").val(),
    temp_seccion3:$("#temp_seccion3").val(),
    actividad_fisica_seccion3:$("#actividad_fisica_seccion3").val(),
    subir_escaleras_seccion3:$("#subir_escaleras_seccion3").val(),
    cuantos_pisos_seccion3:$("#cuantos_pisos_seccion3").val(),
    sangrar_excesivamente_seccion3: (($('#sangrar_excesivamente_seccion3:checked').val()) !=null ? 1 : 0),
    reacciones_anormales_seccion3: (($('#reacciones_anormales_seccion3:checked').val()) !=null ? 1 : 0),
    reacciones_anormales_anestesia_seccion3: (($('#reacciones_anormales_anestesia_seccion3:checked').val()) !=null ? 1 : 0),
    fiebre_anestesia_seccion3: (($('#fiebre_anestesia_seccion3:checked').val()) !=null ? 1 : 0),
    alergico_medicamentos_seccion3: (($('#alergico_medicamentos_seccion3:checked').val()) !=null ? 1 : 0),
    cuales_medicamentos_seccion3:$("#cuales_medicamentos_seccion3").val(),
    reacciones_seccion3:$("#reacciones_seccion3").val(),
    alergico_cinta_adhesiva_seccion3: (($('#alergico_cinta_adhesiva_seccion3:checked').val()) !=null ? 1 : 0),
    alergico_oido_seccion3: (($('#alergico_oido_seccion3:checked').val()) !=null ? 1 : 0),
    bebidas_alcoholicas_seccion3: (($('#bebidas_alcoholicas_seccion3:checked').val()) !=null ? 1 : 0),
    abstenido_bebidas_alcoholicas_seccion3: (($('#abstenido_bebidas_alcoholicas_seccion3:checked').val()) !=null ? 1 : 0),
    sufre_delirios_seccion3: (($('#sufre_delirios_seccion3:checked').val()) !=null ? 1 : 0),
    fuma_seccion3: (($('#fuma_seccion3:checked').val()) !=null ? 1 : 0),
    transfusion_sanguinea_seccion3: (($('#transfusion_sanguinea_seccion3:checked').val()) !=null ? 1 : 0),
    reaccion_transfusion_sanguinea_seccion3: (($('#reaccion_transfusion_sanguinea_seccion3:checked').val()) !=null ? 1 : 0),
    reaccion_transfusion_seccion3:$("#reaccion_transfusion_seccion3").val(),
    embarazada_seccion3: (($('#embarazada_seccion3:checked').val()) !=null ? 1 : 0),
    menstruacion_seccion3: $('#menstruacion_seccion3').val(),
    corazon_seccion3: (($('#corazon_seccion3:checked').val()) !=null ? 1 : 0),
    angina_seccion3: (($('#angina_seccion3:checked').val()) !=null ? 1 : 0),
    adiccion_drogas_seccion3: (($('#adiccion_drogas_seccion3:checked').val()) !=null ? 1 : 0),
    dolores_cabeza_seccion3: (($('#dolores_cabeza_seccion3:checked').val()) !=null ? 1 : 0),
    enfermedades_mentales_seccion3: (($('#enfermedades_mentales_seccion3:checked').val()) !=null ? 1 : 0),
    embolia_pulmonar_seccion3: (($('#embolia_pulmonar_seccion3:checked').val()) !=null ? 1 : 0),
    enfermedades_articulares_seccion3: (($('#enfermedades_articulares_seccion3:checked').val()) !=null ? 1 : 0),
    fracturas_seccion3: (($('#fracturas_seccion3:checked').val()) !=null ? 1 : 0),
    problemas_columna_seccion3: (($('#problemas_columna_seccion3:checked').val()) !=null ? 1 : 0),
    desmayos_seccion3: (($('#desmayos_seccion3:checked').val()) !=null ? 1 : 0),
    enfermedades_pulmones_seccion3: (($('#enfermedades_pulmones_seccion3:checked').val()) !=null ? 1 : 0),
    asma_seccion3: (($('#asma_seccion3:checked').val()) !=null ? 1 : 0),
    tiroides_seccion3: (($('#tiroides_seccion3:checked').val()) !=null ? 1 : 0),
    tuberculosis_seccion3: (($('#tuberculosis_seccion3:checked').val()) !=null ? 1 : 0),
    enfermedades_musculares_seccion3: (($('#enfermedades_musculares_seccion3:checked').val()) !=null ? 1 : 0),
    bronquitis_seccion3: (($('#bronquitis_seccion3:checked').val()) !=null ? 1 : 0),
    enfisema_seccion3: (($('#enfisema_seccion3:checked').val()) !=null ? 1 : 0),
    embolia_cerebral_seccion3: (($('#embolia_cerebral_seccion3:checked').val()) !=null ? 1 : 0),
    varices_seccion3: (($('#varices_seccion3:checked').val()) !=null ? 1 : 0),
    estrabismo_seccion3: (($('#estrabismo_seccion3:checked').val()) !=null ? 1 : 0),
    glaucoma_seccion3: (($('#glaucoma_seccion3:checked').val()) !=null ? 1 : 0),
    hepatitis_seccion3: (($('#hepatitis_seccion3:checked').val()) !=null ? 1 : 0),
    presion_alta_seccion3: (($('#presion_alta_seccion3:checked').val()) !=null ? 1 : 0),
    diabetes_seccion3: (($('#diabetes_seccion3:checked').val()) !=null ? 1 : 0),
    flebitis_seccion3: (($('#flebitis_seccion3:checked').val()) !=null ? 1 : 0),
    abstinencia_drogas_seccion3: (($('#abstinencia_drogas_seccion3:checked').val()) !=null ? 1 : 0),
    enfermedad_rinones_seccion3: (($('#enfermedad_rinones_seccion3:checked').val()) !=null ? 1 : 0),
    moretones_seccion3: (($('#moretones_seccion3:checked').val()) !=null ? 1 : 0),
    fc_seccion3:$("#fc_seccion3").val(),
    fecha_ultimo_examen_seccion3:$("#fecha_ultimo_examen_seccion3").val(),
    fecha_ultima_radiografia_seccion3:$("#fecha_ultima_radiografia_seccion3").val(),
    fecha_ultimo_electrocardiograma_seccion3:$("#fecha_ultimo_electrocardiograma_seccion3").val(),
    clase_anestesia_seccion3:$("#clase_anestesia_seccion3").val(),
    fiebre_operaciones_previas_seccion3: (($('#fiebre_operaciones_previas_seccion3:checked').val()) !=null ? 1 : 0),
    dientes_postizos_seccion3: (($('#dientes_postizos_seccion3:checked').val()) !=null ? 1 : 0),
    faltan_dientes_seccion3: (($('#faltan_dientes_seccion3:checked').val()) !=null ? 1 : 0),
    dientes_porcelana_seccion3: (($('#dientes_porcelana_seccion3:checked').val()) !=null ? 1 : 0),
    dientes_sueltos_seccion3: (($('#dientes_sueltos_seccion3:checked').val()) !=null ? 1 : 0),
    dificulta_mover_boca_seccion3: (($('#dificulta_mover_boca_seccion3:checked').val()) !=null ? 1 : 0),
    lentes_contacto_seccion3: (($('#lentes_contacto_seccion3:checked').val()) !=null ? 1 : 0),
    pestanas_seccion3: (($('#pestanas_seccion3:checked').val()) !=null ? 1 : 0),
    ojo_artificial_seccion3: (($('#ojo_artificial_seccion3:checked').val()) !=null ? 1 : 0),
    defectos_mayores_seccion3: (($('#defectos_mayores_seccion3:checked').val()) !=null ? 1 : 0),
    aspirina_seccion3: (($('#aspirina_seccion3:checked').val()) !=null ? 1 : 0),
    oxigeno_seccion3: (($('#oxigeno_seccion3:checked').val()) !=null ? 1 : 0),
    digitales_seccion3: (($('#digitales_seccion3:checked').val()) !=null ? 1 : 0),
    lsd_seccion3: (($('#lsd_seccion3:checked').val()) !=null ? 1 : 0),
    quinidinas_seccion3: (($('#quinidinas_seccion3:checked').val()) !=null ? 1 : 0),
    glaucoma_seccion3: (($('#glaucoma_seccion3:checked').val()) !=null ? 1 : 0),
    nitroglicerina_seccion3: (($('#nitroglicerina_seccion3:checked').val()) !=null ? 1 : 0),
    pastillas_dormir_seccion3: (($('#pastillas_dormir_seccion3:checked').val()) !=null ? 1 : 0),
    medicamentos_presion_seccion3: (($('#medicamentos_presion_seccion3:checked').val()) !=null ? 1 : 0),
    narcoticos_seccion3: (($('#narcoticos_seccion3:checked').val()) !=null ? 1 : 0),
    diureticos_seccion3: (($('#diureticos_seccion3:checked').val()) !=null ? 1 : 0),
    lasix_seccion3: (($('#lasix_seccion3:checked').val()) !=null ? 1 : 0),
    anticoagulantes_seccion3: (($('#anticoagulantes_seccion3:checked').val()) !=null ? 1 : 0),
    heparina_seccion3: (($('#heparina_seccion3:checked').val()) !=null ? 1 : 0),
    medicamentos_diabetes_seccion3: (($('#medicamentos_diabetes_seccion3:checked').val()) !=null ? 1 : 0),
    otro_medicamento_seccion3: (($('#otro_medicamento_seccion3:checked').val()) !=null ? 1 : 0),
    tranquilizantes_seccion3: (($('#tranquilizantes_seccion3:checked').val()) !=null ? 1 : 0),
    cual_otro_medicamento_seccion3:$("#cual_otro_medicamento_seccion3").val(),
    antidepresivos_seccion3: (($('#antidepresivos_seccion3:checked').val()) !=null ? 1 : 0),
    dosis_seccion3:$("#dosis_seccion3").val(),
    gotas_glaucoma_seccion3: (($('#gotas_glaucoma_seccion3:checked').val()) !=null ? 1 : 0),
    padece_alergia_material_seccion3: $("#padece_alergia_material_seccion3").val(),

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
        $('#segundoNombreCliente').val(data.responseData.segundoNombre),
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
        $('#paseMedico').val(data.responseData.paseMedico)
        $('#entero-nosotros').val(data.responseData.enteroNosotros)
        $("#especifiqueEnteroNosotros").val(data.responseData.especifiqueEnteroNosotros)
        $("#aseguradora").val(data.responseData.aseguradora),
        $("#tipoSangre").val(data.responseData.tipoSangre),
        $('#cirugias-previas').val(data.responseData.cirugiasPrevias)
        $('#otras-cirugias').val(data.responseData.otrasCirugias)
        $('#puestoCliente').val(data.responseData.puesto)
        $('#companiaCliente').val(data.responseData.compania)
        $('#telCompania').val(data.responseData.telCompania)
        $('#nombreEmergencia').val(data.responseData.emerNombre)
        $('#relacionEmergencia').val(data.responseData.emerRelacion)
        $('#telEmegencia').val(data.responseData.emerTel)
        $("#ocupacion_seccion2").val(data.responseData.ocupacionSeccion2)
        $("#diagnosticoPreOperatorio").val(data.responseData.diagnosticoPreOperatorio)
        $("#procedimientoQuirurgico").val(data.responseData.procedimientoQuirurgico)
        $("#planQuirurgico").val(data.responseData.planQuirurgico)
        $("#cuidadoTerapeutico").val(data.responseData.cuidadoTerapeutico)

        //imagen: file_path,

        //Seccion 2

        $("#originariaSeccion2").val(data.responseData.originariaSeccion2)
        $("#direccion_seccion2").val(data.responseData.resideSeccion2)
        $("#ahfSeccion2").val(data.responseData.ahfSeccion2)
        $("#apnpSeccion2").val(data.responseData.apnpSeccion2)
        $("#appSeccion2").val(data.responseData.appSeccion2)
        $("#agoSeccion2").val(data.responseData.agoSeccion2)
        $("#padecimiento_seccion2").val(data.responseData.padecimientoSeccion2)
        $("#exploracionFisicaSeccion2").val(data.responseData.exploracionFisicaSeccion2)
        $("#laboratorioSeccion2").val(data.responseData.laboratorioSeccion2)
        $("#idxSeccion2").val(data.responseData.idxSeccion2)
        $("#planSeccion2").val(data.responseData.planSeccion2)

        
        data.responseData.tabaquismoSeccion2!=0 ? $('#tabaquismo').prop('checked',true) : 0;
        data.responseData.alcoholismoSeccion2!=0 ? $('#alcoholismo').prop('checked',true) : 0;
        data.responseData.drogasSeccion2!=0 ? $('#drogas').prop('checked',true) : 0;

    

    


    //Seccion 3
    $("#peso_seccion3").val(data.responseData.peso_seccion3)
    $("#talla_seccion3").val(data.responseData.talla_seccion3)
    $("#ta_seccion3").val(data.responseData.ta_seccion3)
    $("#fc_seccion3").val(data.responseData.fc_seccion3)
    $("#fr_seccion3").val(data.responseData.fr_seccion3)
    $("#temp_seccion3").val(data.responseData.temp_seccion3)
    $("#actividad_fisica_seccion3").val(data.responseData.actividad_fisica_seccion3),
    $("#subir_escaleras_seccion3").val(data.responseData.subir_escaleras_seccion3),
    $("#cuantos_pisos_seccion3").val(data.responseData.cuantos_pisos_seccion3),

    data.responseData.sangrar_excesivamente_seccion3!=0 ? $('#sangrar_excesivamente_seccion3').prop('checked',true) : 0;
    data.responseData.reacciones_anormales_seccion3!=0 ? $('#reacciones_anormales_seccion3').prop('checked',true) : 0;
    data.responseData.fiebre_anestesia_seccion3!=0 ? $('#fiebre_anestesia_seccion3').prop('checked',true) : 0;
    data.responseData.alergico_medicamentos_seccion3!=0 ? $('#alergico_medicamentos_seccion3').prop('checked',true) : 0;
    
    $("#cuales_medicamentos_seccion3").val(data.responseData.cuales_medicamentos_seccion3)
    $("#reacciones_seccion3").val(data.responseData.reacciones_seccion3)

    data.responseData.reacciones_anormales_anestesia_seccion3 != 0 ? $("#reacciones_anormales_anestesia_seccion3").prop('checked',true) : 0;

    data.responseData.alergico_cinta_adhesiva_seccion3!=0 ? $('#alergico_cinta_adhesiva_seccion3').prop('checked',true) : 0;
    data.responseData.alergico_oido_seccion3!=0 ? $('#alergico_oido_seccion3').prop('checked',true) : 0;
    data.responseData.bebidas_alcoholicas_seccion3!=0 ? $('#bebidas_alcoholicas_seccion3').prop('checked',true) : 0;
    data.responseData.abstenido_bebidas_alcoholicas_seccion3!=0 ? $('#abstenido_bebidas_alcoholicas_seccion3').prop('checked',true) : 0;
    data.responseData.sufre_delirios_seccion3!=0 ? $('#sufre_delirios_seccion3').prop('checked',true) : 0;
    data.responseData.fuma_seccion3!=0 ? $('#fuma_seccion3').prop('checked',true) : 0;
    data.responseData.transfusion_sanguinea_seccion3!=0 ? $('#transfusion_sanguinea_seccion3').prop('checked',true) : 0;
    data.responseData.reaccion_transfusion_sanguinea_seccion3!=0 ? $('#reaccion_transfusion_sanguinea_seccion3').prop('checked',true) : 0;
  
    $("#reaccion_transfusion_seccion3").val(data.responseData.reaccion_transfusion_seccion3),

    data.responseData.embarazada_seccion3!=0 ? $('#embarazada_seccion3').prop('checked',true) : 0;
    
    $('#menstruacion_seccion3').val(data.responseData.menstruacion_seccion3),

    data.responseData.corazon_seccion3!=0 ? $('#corazon_seccion3').prop('checked',true) : 0;
    data.responseData.angina_seccion3!=0 ? $('#angina_seccion3').prop('checked',true) : 0;
    data.responseData.adiccion_drogas_seccion3!=0 ? $('#adiccion_drogas_seccion3').prop('checked',true) : 0;
    data.responseData.dolores_cabeza_seccion3!=0 ? $('#dolores_cabeza_seccion3').prop('checked',true) : 0;
    data.responseData.enfermedades_mentales_seccion3!=0 ? $('#enfermedades_mentales_seccion3').prop('checked',true) : 0;
    data.responseData.embolia_pulmonar_seccion3!=0 ? $('#embolia_pulmonar_seccion3').prop('checked',true) : 0;
    data.responseData.enfermedades_articulares_seccion3!=0 ? $('#enfermedades_articulares_seccion3').prop('checked',true) : 0;
    data.responseData.fracturas_seccion3!=0 ? $('#fracturas_seccion3').prop('checked',true) : 0;
    data.responseData.problemas_columna_seccion3!=0 ? $('#problemas_columna_seccion3').prop('checked',true) : 0;
    data.responseData.desmayos_seccion3!=0 ? $('#desmayos_seccion3').prop('checked',true) : 0;
    data.responseData.enfermedades_pulmones_seccion3!=0 ? $('#enfermedades_pulmones_seccion3').prop('checked',true) : 0;
    data.responseData.asma_seccion3!=0 ? $('#asma_seccion3').prop('checked',true) : 0;
    data.responseData.tiroides_seccion3!=0 ? $('#tiroides_seccion3').prop('checked',true) : 0;
    data.responseData.tuberculosis_seccion3!=0 ? $('#tuberculosis_seccion3').prop('checked',true) : 0;
    data.responseData.enfermedades_musculares_seccion3!=0 ? $('#enfermedades_musculares_seccion3').prop('checked',true) : 0;
    data.responseData.bronquitis_seccion3!=0 ? $('#bronquitis_seccion3').prop('checked',true) : 0;
    data.responseData.enfisema_seccion3!=0 ? $('#enfisema_seccion3').prop('checked',true) : 0;
    data.responseData.embolia_cerebral_seccion3!=0 ? $('#embolia_cerebral_seccion3').prop('checked',true) : 0;
    data.responseData.varices_seccion3!=0 ? $('#varices_seccion3').prop('checked',true) : 0;
    data.responseData.estrabismo_seccion3!=0 ? $('#estrabismo_seccion3').prop('checked',true) : 0;
    data.responseData.glaucoma_seccion3!=0 ? $('#glaucoma_seccion3').prop('checked',true) : 0;
    data.responseData.hepatitis_seccion3!=0 ? $('#hepatitis_seccion3').prop('checked',true) : 0;
    data.responseData.presion_alta_seccion3!=0 ? $('#presion_alta_seccion3').prop('checked',true) : 0;
    data.responseData.diabetes_seccion3!=0 ? $('#diabetes_seccion3').prop('checked',true) : 0;
    data.responseData.flebitis_seccion3!=0 ? $('#flebitis_seccion3').prop('checked',true) : 0;
    data.responseData.abstinencia_drogas_seccion3!=0 ? $('#abstinencia_drogas_seccion3').prop('checked',true) : 0;
    data.responseData.enfermedad_rinones_seccion3!=0 ? $('#enfermedad_rinones_seccion3').prop('checked',true) : 0;
    data.responseData.moretones_seccion3!=0 ? $('#moretones_seccion3').prop('checked',true) : 0;


    $("#fc_seccion3").val(data.responseData.fc_seccion3),
    $("#fecha_ultimo_examen_seccion3").val(data.responseData.fecha_ultimo_examen_seccion3),
    $("#fecha_ultima_radiografia_seccion3").val(data.responseData.fecha_ultima_radiografia_seccion3),
    $("#fecha_ultimo_electrocardiograma_seccion3").val(data.responseData.fecha_ultimo_electrocardiograma_seccion3),
    $("#clase_anestesia_seccion3").val(data.responseData.clase_anestesia_seccion3),

    data.responseData.fiebre_operaciones_previas_seccion3!=0 ? $('#fiebre_operaciones_previas_seccion3').prop('checked',true) : 0;
    data.responseData.dientes_postizos_seccion3!=0 ? $('#dientes_postizos_seccion3').prop('checked',true) : 0;
    data.responseData.faltan_dientes_seccion3!=0 ? $('#faltan_dientes_seccion3').prop('checked',true) : 0;
    data.responseData.dientes_porcelana_seccion3!=0 ? $('#dientes_porcelana_seccion3').prop('checked',true) : 0;
    data.responseData.dientes_sueltos_seccion3!=0 ? $('#dientes_sueltos_seccion3').prop('checked',true) : 0;
    data.responseData.dificulta_mover_boca_seccion3!=0 ? $('#dificulta_mover_boca_seccion3').prop('checked',true) : 0;
    data.responseData.lentes_contacto_seccion3!=0 ? $('#lentes_contacto_seccion3').prop('checked',true) : 0;
    data.responseData.pestanas_seccion3!=0 ? $('#pestanas_seccion3').prop('checked',true) : 0;
    data.responseData.ojo_artificial_seccion3!=0 ? $('#ojo_artificial_seccion3').prop('checked',true) : 0;
    data.responseData.defectos_mayores_seccion3!=0 ? $('#defectos_mayores_seccion3').prop('checked',true) : 0;
    data.responseData.aspirina_seccion3!=0 ? $('#aspirina_seccion3').prop('checked',true) : 0;
    data.responseData.oxigeno_seccion3!=0 ? $('#oxigeno_seccion3').prop('checked',true) : 0;
    data.responseData.digitales_seccion3!=0 ? $('#digitales_seccion3').prop('checked',true) : 0;
    data.responseData.lsd_seccion3!=0 ? $('#lsd_seccion3').prop('checked',true) : 0;
    data.responseData.quinidinas_seccion3!=0 ? $('#quinidinas_seccion3').prop('checked',true) : 0;
    data.responseData.glaucoma_seccion3!=0 ? $('#glaucoma_seccion3').prop('checked',true) : 0;
    data.responseData.nitroglicerina_seccion3!=0 ? $('#nitroglicerina_seccion3').prop('checked',true) : 0;
    data.responseData.pastillas_dormir_seccion3!=0 ? $('#pastillas_dormir_seccion3').prop('checked',true) : 0;
    data.responseData.medicamentos_presion_seccion3!=0 ? $('#medicamentos_presion_seccion3').prop('checked',true) : 0;
    data.responseData.narcoticos_seccion3!=0 ? $('#narcoticos_seccion3').prop('checked',true) : 0;
    data.responseData.diureticos_seccion3!=0 ? $('#diureticos_seccion3').prop('checked',true) : 0;
    data.responseData.lasix_seccion3!=0 ? $('#lasix_seccion3').prop('checked',true) : 0;
    data.responseData.anticoagulantes_seccion3!=0 ? $('#anticoagulantes_seccion3').prop('checked',true) : 0;
    data.responseData.heparina_seccion3!=0 ? $('#heparina_seccion3').prop('checked',true) : 0;
    data.responseData.medicamentos_diabetes_seccion3!=0 ? $('#medicamentos_diabetes_seccion3').prop('checked',true) : 0;
    data.responseData.otro_medicamento_seccion3!=0 ? $('#otro_medicamento_seccion3').prop('checked',true) : 0;
    data.responseData.tranquilizantes_seccion3!=0 ? $('#tranquilizantes_seccion3').prop('checked',true) : 0;
   
    $("#cual_otro_medicamento_seccion3").val(data.responseData.cual_otro_medicamento_seccion3)

    data.responseData.antidepresivos_seccion3!=0 ? $('#antidepresivos_seccion3').prop('checked',true) : 0;

    $("#dosis_seccion3").val(data.responseData.dosis_seccion3),

    data.responseData.gotas_glaucoma_seccion3!=0 ? $('#gotas_glaucoma_seccion3').prop('checked',true) : 0;
    $("#padece_alergia_material_seccion3").val(data.responseData.padece_alergia_material_seccion3),

        

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
    segundoNombre:$('#segundoNombreCliente').val().toUpperCase(),
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
    paseMedico:$('#paseMedico').val(),
    enteroNosotros:$('#entero-nosotros').val(),
    especifiqueEnteroNosotros: $("#especifiqueEnteroNosotros").val(),
    aseguradora: $("#aseguradora").val(),
    tipoSangre:$("#tipoSangre").val(),
    cirugiasPrevias:$('#cirugias-previas').val(),
    otrasCirugias:$('#otras-cirugias').val(),
    emerNombre:$('#nombreEmergencia').val().toUpperCase(),
    emerRelacion:$('#relacionEmergencia').val().toUpperCase(),
    emerTel:$('#telEmegencia').val(),
    ocupacionSeccion2: $("#ocupacion_seccion2").val(),
    diagnosticoPreOperatorio:$("#diagnosticoPreOperatorio").val(),
    procedimientoQuirurgico:$("#procedimientoQuirurgico").val(),
    planQuirurgico:$("#planQuirurgico").val(),
    cuidadoTerapeutico:$("#cuidadoTerapeutico").val(),

    //Seccion 2

    originariaSeccion2:$("#originariaSeccion2").val(),
    resideSeccion2:$("#direccion_seccion2").val(),
    ahfSeccion2:$("#ahfSeccion2").val(),
    apnpSeccion2:$("#apnpSeccion2").val(),
    appSeccion2:$("#appSeccion2").val(),
    agoSeccion2:$("#agoSeccion2").val(),
    padecimientoSeccion2:$("#padecimiento_seccion2").val(),
    exploracionFisicaSeccion2:$("#exploracionFisicaSeccion2").val(),
    laboratorioSeccion2:$("#laboratorioSeccion2").val(),
    idxSeccion2:$("#idxSeccion2").val(),
    planSeccion2:$("#planSeccion2").val(),


    //Seccion 3
    peso_seccion3:$("#peso_seccion3").val(),
    talla_seccion3:$("#talla_seccion3").val(),
    ta_seccion3:$("#ta_seccion3").val(),
    fc_seccion3:$("#fc_seccion3").val(),
    fr_seccion3:$("#fr_seccion3").val(),
    temp_seccion3:$("#temp_seccion3").val(),
    actividad_fisica_seccion3:$("#actividad_fisica_seccion3").val(),
    subir_escaleras_seccion3:$("#subir_escaleras_seccion3").val(),
    cuantos_pisos_seccion3:$("#cuantos_pisos_seccion3").val(),
    sangrar_excesivamente_seccion3: (($('#sangrar_excesivamente_seccion3:checked').val()) !=null ? 1 : 0),
    reacciones_anormales_seccion3: (($('#reacciones_anormales_seccion3:checked').val()) !=null ? 1 : 0),
    reacciones_anormales_anestesia_seccion3: (($('#reacciones_anormales_anestesia_seccion3:checked').val()) !=null ? 1 : 0),
    fiebre_anestesia_seccion3: (($('#fiebre_anestesia_seccion3:checked').val()) !=null ? 1 : 0),
    alergico_medicamentos_seccion3: (($('#alergico_medicamentos_seccion3:checked').val()) !=null ? 1 : 0),
    cuales_medicamentos_seccion3:$("#cuales_medicamentos_seccion3").val(),
    reacciones_seccion3:$("#reacciones_seccion3").val(),
    alergico_cinta_adhesiva_seccion3: (($('#alergico_cinta_adhesiva_seccion3:checked').val()) !=null ? 1 : 0),
    alergico_oido_seccion3: (($('#alergico_oido_seccion3:checked').val()) !=null ? 1 : 0),
    bebidas_alcoholicas_seccion3: (($('#bebidas_alcoholicas_seccion3:checked').val()) !=null ? 1 : 0),
    abstenido_bebidas_alcoholicas_seccion3: (($('#abstenido_bebidas_alcoholicas_seccion3:checked').val()) !=null ? 1 : 0),
    sufre_delirios_seccion3: (($('#sufre_delirios_seccion3:checked').val()) !=null ? 1 : 0),
    fuma_seccion3: (($('#fuma_seccion3:checked').val()) !=null ? 1 : 0),
    transfusion_sanguinea_seccion3: (($('#transfusion_sanguinea_seccion3:checked').val()) !=null ? 1 : 0),
    reaccion_transfusion_sanguinea_seccion3: (($('#reaccion_transfusion_sanguinea_seccion3:checked').val()) !=null ? 1 : 0),
    reaccion_transfusion_seccion3:$("#reaccion_transfusion_seccion3").val(),
    embarazada_seccion3: (($('#embarazada_seccion3:checked').val()) !=null ? 1 : 0),
    menstruacion_seccion3: $('#menstruacion_seccion3').val(),
    corazon_seccion3: (($('#corazon_seccion3:checked').val()) !=null ? 1 : 0),
    angina_seccion3: (($('#angina_seccion3:checked').val()) !=null ? 1 : 0),
    adiccion_drogas_seccion3: (($('#adiccion_drogas_seccion3:checked').val()) !=null ? 1 : 0),
    dolores_cabeza_seccion3: (($('#dolores_cabeza_seccion3:checked').val()) !=null ? 1 : 0),
    enfermedades_mentales_seccion3: (($('#enfermedades_mentales_seccion3:checked').val()) !=null ? 1 : 0),
    embolia_pulmonar_seccion3: (($('#embolia_pulmonar_seccion3:checked').val()) !=null ? 1 : 0),
    enfermedades_articulares_seccion3: (($('#enfermedades_articulares_seccion3:checked').val()) !=null ? 1 : 0),
    fracturas_seccion3: (($('#fracturas_seccion3:checked').val()) !=null ? 1 : 0),
    problemas_columna_seccion3: (($('#problemas_columna_seccion3:checked').val()) !=null ? 1 : 0),
    desmayos_seccion3: (($('#desmayos_seccion3:checked').val()) !=null ? 1 : 0),
    enfermedades_pulmones_seccion3: (($('#enfermedades_pulmones_seccion3:checked').val()) !=null ? 1 : 0),
    asma_seccion3: (($('#asma_seccion3:checked').val()) !=null ? 1 : 0),
    tiroides_seccion3: (($('#tiroides_seccion3:checked').val()) !=null ? 1 : 0),
    tuberculosis_seccion3: (($('#tuberculosis_seccion3:checked').val()) !=null ? 1 : 0),
    enfermedades_musculares_seccion3: (($('#enfermedades_musculares_seccion3:checked').val()) !=null ? 1 : 0),
    bronquitis_seccion3: (($('#bronquitis_seccion3:checked').val()) !=null ? 1 : 0),
    enfisema_seccion3: (($('#enfisema_seccion3:checked').val()) !=null ? 1 : 0),
    embolia_cerebral_seccion3: (($('#embolia_cerebral_seccion3:checked').val()) !=null ? 1 : 0),
    varices_seccion3: (($('#varices_seccion3:checked').val()) !=null ? 1 : 0),
    estrabismo_seccion3: (($('#estrabismo_seccion3:checked').val()) !=null ? 1 : 0),
    glaucoma_seccion3: (($('#glaucoma_seccion3:checked').val()) !=null ? 1 : 0),
    hepatitis_seccion3: (($('#hepatitis_seccion3:checked').val()) !=null ? 1 : 0),
    presion_alta_seccion3: (($('#presion_alta_seccion3:checked').val()) !=null ? 1 : 0),
    diabetes_seccion3: (($('#diabetes_seccion3:checked').val()) !=null ? 1 : 0),
    flebitis_seccion3: (($('#flebitis_seccion3:checked').val()) !=null ? 1 : 0),
    abstinencia_drogas_seccion3: (($('#abstinencia_drogas_seccion3:checked').val()) !=null ? 1 : 0),
    enfermedad_rinones_seccion3: (($('#enfermedad_rinones_seccion3:checked').val()) !=null ? 1 : 0),
    moretones_seccion3: (($('#moretones_seccion3:checked').val()) !=null ? 1 : 0),
    fc_seccion3:$("#fc_seccion3").val(),
    fecha_ultimo_examen_seccion3:$("#fecha_ultimo_examen_seccion3").val(),
    fecha_ultima_radiografia_seccion3:$("#fecha_ultima_radiografia_seccion3").val(),
    fecha_ultimo_electrocardiograma_seccion3:$("#fecha_ultimo_electrocardiograma_seccion3").val(),
    clase_anestesia_seccion3:$("#clase_anestesia_seccion3").val(),
    fiebre_operaciones_previas_seccion3: (($('#fiebre_operaciones_previas_seccion3:checked').val()) !=null ? 1 : 0),
    dientes_postizos_seccion3: (($('#dientes_postizos_seccion3:checked').val()) !=null ? 1 : 0),
    faltan_dientes_seccion3: (($('#faltan_dientes_seccion3:checked').val()) !=null ? 1 : 0),
    dientes_porcelana_seccion3: (($('#dientes_porcelana_seccion3:checked').val()) !=null ? 1 : 0),
    dientes_sueltos_seccion3: (($('#dientes_sueltos_seccion3:checked').val()) !=null ? 1 : 0),
    dificulta_mover_boca_seccion3: (($('#dificulta_mover_boca_seccion3:checked').val()) !=null ? 1 : 0),
    lentes_contacto_seccion3: (($('#lentes_contacto_seccion3:checked').val()) !=null ? 1 : 0),
    pestanas_seccion3: (($('#pestanas_seccion3:checked').val()) !=null ? 1 : 0),
    ojo_artificial_seccion3: (($('#ojo_artificial_seccion3:checked').val()) !=null ? 1 : 0),
    defectos_mayores_seccion3: (($('#defectos_mayores_seccion3:checked').val()) !=null ? 1 : 0),
    aspirina_seccion3: (($('#aspirina_seccion3:checked').val()) !=null ? 1 : 0),
    oxigeno_seccion3: (($('#oxigeno_seccion3:checked').val()) !=null ? 1 : 0),
    digitales_seccion3: (($('#digitales_seccion3:checked').val()) !=null ? 1 : 0),
    lsd_seccion3: (($('#lsd_seccion3:checked').val()) !=null ? 1 : 0),
    quinidinas_seccion3: (($('#quinidinas_seccion3:checked').val()) !=null ? 1 : 0),
    glaucoma_seccion3: (($('#glaucoma_seccion3:checked').val()) !=null ? 1 : 0),
    nitroglicerina_seccion3: (($('#nitroglicerina_seccion3:checked').val()) !=null ? 1 : 0),
    pastillas_dormir_seccion3: (($('#pastillas_dormir_seccion3:checked').val()) !=null ? 1 : 0),
    medicamentos_presion_seccion3: (($('#medicamentos_presion_seccion3:checked').val()) !=null ? 1 : 0),
    narcoticos_seccion3: (($('#narcoticos_seccion3:checked').val()) !=null ? 1 : 0),
    diureticos_seccion3: (($('#diureticos_seccion3:checked').val()) !=null ? 1 : 0),
    lasix_seccion3: (($('#lasix_seccion3:checked').val()) !=null ? 1 : 0),
    anticoagulantes_seccion3: (($('#anticoagulantes_seccion3:checked').val()) !=null ? 1 : 0),
    heparina_seccion3: (($('#heparina_seccion3:checked').val()) !=null ? 1 : 0),
    medicamentos_diabetes_seccion3: (($('#medicamentos_diabetes_seccion3:checked').val()) !=null ? 1 : 0),
    otro_medicamento_seccion3: (($('#otro_medicamento_seccion3:checked').val()) !=null ? 1 : 0),
    tranquilizantes_seccion3: (($('#tranquilizantes_seccion3:checked').val()) !=null ? 1 : 0),
    cual_otro_medicamento_seccion3:$("#cual_otro_medicamento_seccion3").val(),
    antidepresivos_seccion3: (($('#antidepresivos_seccion3:checked').val()) !=null ? 1 : 0),
    dosis_seccion3:$("#dosis_seccion3").val(),
    gotas_glaucoma_seccion3: (($('#gotas_glaucoma_seccion3:checked').val()) !=null ? 1 : 0),
    padece_alergia_material_seccion3: $("#padece_alergia_material_seccion3").val(),
  

    /*problemaRespirarSeccion3: (($('#problema_respirar_seccion3:checked').val()) !=null ? 1 : 0),
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
    tratamientoSeccion4: $("#tratamiento_seccion4").val()*/

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
