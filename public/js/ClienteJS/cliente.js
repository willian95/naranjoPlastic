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

    $("#indicaciones_seccion5").val("1- Ayuno, 6 hrs posteriores iniciar dieta blanda, normal por la mañana \n"+
    "2- Sol, hartmann 1000 ml P/8 horas alernar con mixta 1000 ml P/8 hrs \n"+
    "3- Medicamentos: \n"+

    "g) En quirófano administrar hemodilución <br>"+
    "h) Transfundir paquete globular, pasar para 2 horas (bajo monitorización constante) \n"+
    "i) Administrar infusión de hierro 8am (solución salina 0.9% de 1000cc más 600mg de hierro dextran) bajo monitorización constante administrar para 3 horas, monitorear vitales cada 30 minutos \n"+
    "4- O2 nasal a 3 litros por minuto durante 1 hora post-Qx, valorar retiro. \n"+
    "5- Cuidados de enfermería \n"+

    "a) Vigilancia y cuantificación de sangrado post-Qx \n"+
    "b) Control de líquidos \n"+
    "c) Signos vitales C/2 horas \n"+
    "d) Glucometría capilar 1 por turno y valorar en caso de ser menor de 60 mg aplicar glucosa al 50% 50 ml en bolo IV \n"+
    "e) Biometría hematica de control 8 am \n"+
    "6- Gracias!")

    $('#modalCliente').modal({
      backdrop: 'static'
    });
    $('.pedirMedicamento').hide();
    $('.pedirServicio').hide();
    $('.disableBtn').removeAttr('disabled');
    $('#adicionalContinuar').show();
    $('#tituloModal').html('Agregar Paciente');
    $('#adicionalContinuar').removeAttr('onClick');
    $('.adicionalContinuar').attr('onClick','guardarCliente();').html('Guardar').show();

});

$(function () {
    $('#generalContinuar').click(function (e) {
      /*if ($('#nombreCliente').val()=='') {
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

    e.preventDefault();*/


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
        /*$('#nombreEmergencia').val(data.responseData.emerNombre)
        $('#relacionEmergencia').val(data.responseData.emerRelacion)
        $('#telEmegencia').val(data.responseData.emerTel)*/
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
    $("#padece_alergia_material_seccion3").val(data.responseData.padece_alergia_material_seccion3)

    //seccion4
    if(data.postOperatorio.length > 0){
      $("#notapostoperatoria_id").val(data.postOperatorio[0].id)
      $('#habitacion_seccion4').val(data.postOperatorio[0].habitacion_seccion4)
      $('#diagnostico_pre_operatorio_seccion4').val(data.postOperatorio[0].diagnostico_pre_operatorio_seccion4)
      $('#operacion_planeada_seccion4').val(data.postOperatorio[0].operacion_planeada_seccion4)
      $('#diagnostico_post_operatorio_seccion4').val(data.postOperatorio[0].diagnostico_post_operatorio_seccion4)
      $('#operacion_realizada_seccion4').val(data.postOperatorio[0].operacion_realizada_seccion4)
      $('#descripcion_tecnica_quirurgica_seccion4').val(data.postOperatorio[0].descripcion_tecnica_quirurgica_seccion4)
      $('#hallazgos_transoperatorios_seccion4').val(data.postOperatorio[0].hallazgos_transoperatorios_seccion4)
      $('#reporte_gasas_compresas_seccion4').val(data.postOperatorio[0].reporte_gasas_compresas_seccion4)
      $('#incidentes_accidentes_seccion4').val(data.postOperatorio[0].incidentes_accidentes_seccion4)
      $('#sangrado_seccion4').val(data.postOperatorio[0].sangrado_seccion4)
      $('#estudios_servicios_auxiliares_seccion4').val(data.postOperatorio[0].estudios_servicios_auxiliares_seccion4)
      $("#nombre_anestesiologo_seccion4").val(data.postOperatorio[0].nombre_anestesiologo_seccion4)
      $('#nombre_ayudante1_seccion4').val(data.postOperatorio[0].nombre_ayudante1_seccion4)
      $('#nombre_ayudante2_seccion4').val(data.postOperatorio[0].nombre_ayudante2_seccion4)
      $('#nombre_instrumentista_seccion4').val(data.postOperatorio[0].nombre_instrumentista_seccion4)
      $('#nombre_enfermera_circulante_seccion4').val(data.postOperatorio[0].nombre_enfermera_circulante_seccion4)
      $('#estado_postquirurgico_inmediato_seccion4').val(data.postOperatorio[0].estado_postquirurgico_inmediato_seccion4)
      $('#pronostico_seccion4').val(data.postOperatorio[0].pronostico_seccion4)
      $("#envio_piezas_seccion4").val(data.postOperatorio[0].envio_piezas_seccion4)
      $('#otros_hallazgos_seccion4').val(data.postOperatorio[0].otros_hallazgos_seccion4)
      $('#nombre_cirujano_seccion4').val(data.postOperatorio[0].nombre_cirujano_seccion4)
    }

    if(data.indicaciones.length > 0){
      //seccion5
      $("#indicaciones_id").val(data.indicaciones[0].id)
      $("#indicaciones_seccion5").val(data.indicaciones[0].indicaciones_seccion5)
    }

    if(data.notaMedica.length > 0){
      //seccion6
      $("#nota_medica_seccion6").val(data.notaMedica[0].nota_medica_seccion6)
      $("#nota_medica_id_seccion6").val(data.notaMedica[0].id)
    }

    if(data.notaEgreso.length > 0){
      //seccion7
      $("#fechaIngreso_seccion7").val(data.notaEgreso[0].fechaIngreso_seccion7),
      $("#fechaEgreso_seccion7").val(data.notaEgreso[0].fechaEgreso_seccion7),
      $("#motivoEgreso_seccion7").val(data.notaEgreso[0].motivoEgreso_seccion7),
      $("#diagnosticoFinal_seccion7").val(data.notaEgreso[0].diagnosticoFinal_seccion7),
      $("#resumenClinico_seccion7").val(data.notaEgreso[0].resumenClinico_seccion7),
      $("#problemasClinicos_seccion7").val(data.notaEgreso[0].problemasClinicos_seccion7),
      $("#plan_seccion7").val(data.notaEgreso[0].plan_seccion7),
      $("#recomendacionesVigilancia_seccion7").val(data.notaEgreso[0].recomendacionesVigilancia_seccion7)
    }

    if(data.seguimientoQuirurgico.length > 0){
      //seccion8
      $("#resumen_seccion8").val(data.seguimientoQuirurgico[0].resumen_seccion8)

    }

    if(data.hojaEnfermeriaUnidadQuirurgica.length > 0){
      //seccion9

      $("#id_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].id)
      $("#fdn_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fdn_seccion9),
      $("#edad_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].edad_seccion9),
      $("#habitacion_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].habitacion_seccion9),
      $("#medico_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medico_seccion9)
      $("#signos_vitales_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].signos_vitales_seccion9)
      $("#ta_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_seccion9)
      $("#fc_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_seccion9)
      $("#fr_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_seccion9)
      $("#tc_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_seccion9)
      $("#peso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].peso_seccion9)
      $("#talla_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].talla_seccion9)
      $("#diagnostico_preoperatorio_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].diagnostico_preoperatorio_seccion9)
      $("#cirugia_proyectada_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cirugia_proyectada_seccion9)
      $("#tipo_cirugia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tipo_cirugia_seccion9)
      $("#estado_actual_paciente_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].estado_actual_paciente_seccion9)
      $("#vendaje_mpi_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].vendaje_mpi_seccion9)
      $("#tricotomia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tricotomia_seccion9)
      $("#protesis_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].protesis_seccion9)
      $("#maquillaje_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].maquillaje_seccion9)
      $("#marcado_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].marcado_seccion9)
      $("#ayuno_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ayuno_seccion9)
      $("#alergia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].alergia_seccion9)
      $("#patologias_relevantes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].patologias_relevantes_seccion9)
      $("#estudios_preoperatorios_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].estudios_preoperatorios_seccion9)
      $("#valoracion_preoperatoria_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].valoracion_preoperatoria_seccion9)
      $("#sangre_reserva_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sangre_reserva_seccion9)
      $("#grupo_rh_sanguineo_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].grupo_rh_sanguineo_seccion9)
      $("#observaciones_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].observaciones_seccion9)
      $("#enfermera_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].enfermera_seccion9)
      $("#turno_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].turno_seccion9)
      $("#sala_quirurgica_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sala_quirurgica_seccion9)
      $("#time_out_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].time_out_seccion9)
      $("#razon_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].razon_seccion9)
      $("#cirugia_realizada_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cirugia_realizada_seccion9)
      $("#cirujano_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cirujano_seccion9)
      $("#termino_anestesia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].termino_anestesia_seccion9)
      $("#anestesiologo_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].anestesiologo_seccion9)
      $("#instrumentista_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].instrumentista_seccion9)
      $("#primer_ayudante_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].primer_ayudante_seccion9)
      $("#segundo_ayudante_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].segundo_ayudante_seccion9)
      $("#circulante_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].circulante_seccion9)
      $("#inicio_anestesia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].inicio_anestesia_seccion9)
      $("#tipo_anestesia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tipo_anestesia_seccion9)
      $("#inicio_cx_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].inicio_cx_seccion9)
      $("#termino_cx_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].termino_cx_seccion9)
      $("#egreso_sala_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].egreso_sala_seccion9)
      $("#medicamentos_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_1_seccion9)
      $("#medicamentos_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_2_seccion9)
      $("#medicamentos_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_3_seccion9)
      $("#medicamentos_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_4_seccion9)
      $("#medicamentos_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_5_seccion9)
      $("#medicamentos_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_6_seccion9)
      $("#medicamentos_dosis_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_1_seccion9)
      $("#medicamentos_dosis_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_2_seccion9)
      $("#medicamentos_dosis_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_3_seccion9)
      $("#medicamentos_dosis_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_4_seccion9)
      $("#medicamentos_dosis_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_5_seccion9)
      $("#medicamentos_dosis_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_6_seccion9)
      $("#medicamentos_via_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_1_seccion9)
      $("#medicamentos_via_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_2_seccion9)
      $("#medicamentos_via_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_3_seccion9)
      $("#medicamentos_via_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_4_seccion9)
      $("#medicamentos_via_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_5_seccion9)
      $("#medicamentos_via_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_6_seccion9)    
      $("#medicamentos_hora_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_1_seccion9)
      $("#medicamentos_hora_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_2_seccion9)
      $("#medicamentos_hora_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_3_seccion9)
      $("#medicamentos_hora_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_4_seccion9)
      $("#medicamentos_hora_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_5_seccion9)
      $("#medicamentos_hora_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_6_seccion9)
      $("#liquidos_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_1_seccion9)
      $("#liquidos_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_2_seccion9)
      $("#liquidos_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_3_seccion9)
      $("#liquidos_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_4_seccion9)
      $("#liquidos_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_5_seccion9)
      $("#liquidos_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_6_seccion9)
      $("#liquidos_volumen_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_1_seccion9)
      $("#liquidos_volumen_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_2_seccion9)
      $("#liquidos_volumen_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_3_seccion)
      $("#liquidos_volumen_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_4_seccion9)
      $("#liquidos_volumen_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_5_seccion9)
      $("#liquidos_volumen_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_6_seccion9)
      $("#liquidos_hora_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_1_seccion9)
      $("#liquidos_hora_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_2_seccion9)
      $("#liquidos_hora_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_3_seccion9)
      $("#liquidos_hora_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_4_seccion9)
      $("#liquidos_hora_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_5_seccion9)
      $("#liquidos_hora_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_6_seccion9)
      $("#uresis_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].uresis_seccion9)
      $("#sangrado_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sangrado_seccion9)
      $("#gasas_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].gasas_antes_seccion9)
      $("#gasas_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].gasas_despues_seccion9)
      $("#compresas_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].compresas_antes_seccion9)
      $("#compresas_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].compresas_despues_seccion9)
      $("#cotonoides_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cotonoides_antes_seccion9)
      $("#cotonoides_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cotonoides_despues_seccion9)
      $("#isopos_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].isopos_antes_seccion9)
      $("#isopos_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].isopos_despues_seccion9)
      $("#torundas_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].torundas_antes_seccion9)
      $("#torundas_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].torundas_despues_seccion9)
      $("#otros_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].otros_antes_seccion9)
      $("#otros_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].otros_despues_seccion9)
      $("#otros_2_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].otros_2_antes_seccion9)
      $("#otros_2_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].otros_2_despues_seccion9)
      $("#cuenta_completa_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cuenta_completa_seccion9)
      $("#hora_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].hora_seccion9)
      $("#ta_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_ingreso_seccion9)
      $("#fc_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_ingreso_seccion9)
      $("#fr_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_ingreso_seccion9)
      $("#tc_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_ingreso_seccion9)
      $("#sa02_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_ingreso_seccion9)
      $("#eva_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_ingreso_seccion9)
      $("#aldrete_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_ingreso_seccion9)
      $("#ta_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_15min_seccion9)
      $("#fc_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_15min_seccion9)
      $("#fr_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_15min_seccion9)
      $("#tc_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_15min_seccion9)
      $("#sa02_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_15min_seccion9)
      $("#eva_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_15min_seccion9)
      $("#aldrete_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_15min_seccion9)
      $("#ta_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_30min_seccion9)
      $("#fc_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_30min_seccion9)
      $("#fr_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_30min_seccion9)
      $("#tc_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_30min_seccion9)
      $("#sa02_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_30min_seccion9)
      $("#eva_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_30min_seccion9)
      $("#aldrete_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_30min_seccion9)
      $("#ta_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_45min_seccion9)
      $("#fc_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_45min_seccion9)
      $("#fr_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_45min_seccion9)
      $("#tc_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_45min_seccion9)
      $("#sa02_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_45min_seccion9)
      $("#eva_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_45min_seccion9)
      $("#aldrete_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_45min_seccion9)
      $("#ta_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_60min_seccion9)
      $("#fc_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_60min_seccion9)
      $("#fr_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_60min_seccion9)
      $("#tc_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_60min_seccion9)
      $("#sa02_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_60min_seccion9)
      $("#eva_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_60min_seccion9)
      $("#aldrete_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_60min_seccion9)
      $("#ta_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_60minmas_seccion9)
      $("#fc_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_60minmas_seccion9)
      $("#fr_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_60minmas_seccion9)
      $("#tc_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_60minmas_seccion9)
      $("#sa02_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_60minmas_seccion9)
      $("#eva_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_60minmas_seccion9)
      $("#aldrete_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_60minmas_seccion9)
      $("#liquidos_via_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_1_seccion9)
      $("#liquidos_via_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_2_seccion9)
      $("#liquidos_via_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_3_seccion9)
      $("#liquidos_via_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_4_seccion9)
      $("#liquidos_via_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_5_seccion9)
      $("#liquidos_via_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_6_seccion9)
      $("#nota_quirurgica_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].nota_quirurgica_seccion9)
      $("#fecha_hora_cuidados_post_operatorios_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fecha_hora_cuidados_post_operatorios_seccion9)
      $("#nota_recuperacion_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].nota_recuperacion_seccion9)

      $("liquidos_2_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].liquidos_2_1_seccion9)
      $("liquidos_2_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].liquidos_2_2_seccion9)
      $("liquidos_2_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].liquidos_2_3_seccion9)
      $("liquidos_2_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].liquidos_2_4_seccion9)
      $("liquidos_2_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].liquidos_2_5_seccion9)
      $("liquidos_2_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].liquidos_2_6_seccion9)
      $("liquidos_2_7_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].liquidos_2_7_seccion9)
      $("liquidos_2_8_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].liquidos_2_8_seccion9)
      $("liquidos_2_9_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].liquidos_2_9_seccion9)
      $("vol_liquidos_2_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].vol_liquidos_2_1_seccion9)
      $("vol_liquidos_2_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].vol_liquidos_2_2_seccion9)
      $("vol_liquidos_2_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].vol_liquidos_2_3_seccion9)
      $("vol_liquidos_2_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].vol_liquidos_2_4_seccion9)
      $("vol_liquidos_2_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].vol_liquidos_2_5_seccion9)
      $("vol_liquidos_2_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].vol_liquidos_2_6_seccion9)
      $("vol_liquidos_2_7_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].vol_liquidos_2_7_seccion9)
      $("vol_liquidos_2_8_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].vol_liquidos_2_8_seccion9)
      $("vol_liquidos_2_9_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].vol_liquidos_2_9_seccion9)
      $("via_liquidos_2_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].via_liquidos_2_1_seccion9)
      $("via_liquidos_2_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].via_liquidos_2_2_seccion9)
      $("via_liquidos_2_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].via_liquidos_2_3_seccion9)
      $("via_liquidos_2_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].via_liquidos_2_4_seccion9)
      $("via_liquidos_2_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].via_liquidos_2_5_seccion9)
      $("via_liquidos_2_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].via_liquidos_2_6_seccion9)
      $("via_liquidos_2_7_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].via_liquidos_2_7_seccion9)
      $("via_liquidos_2_8_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].via_liquidos_2_8_seccion9)
      $("via_liquidos_2_9_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica2[0].via_liquidos_2_9_seccion9)

    }

    //seccion10

    if(data.hojaEnfermeria.length > 0){
      $("#medico_seccion10").val(data.hojaEnfermeria[0].medico_seccion10),
      $("#diagnostico_seccion10").val(data.hojaEnfermeria[0].diagnostico_seccion10),
      $("#dias_hospitalizacion_seccion10").val(data.hojaEnfermeria[0].dias_hospitalizacion_seccion10),
      $("#fecha_seccion10").val(data.hojaEnfermeria[0].fecha_seccion10),
      $("#cama_seccion10").val(data.hojaEnfermeria[0].cama_seccion10),
      $("#peso_seccion10").val(data.hojaEnfermeria[0].peso_seccion10),
      $("#talla_seccion10").val(data.hojaEnfermeria[0].talla_seccion10),
      $("#alergia_seccion10").val(data.hojaEnfermeria[0].alergia_seccion10),
      $("#tabla_7_1_seccion10").val(data.hojaEnfermeria[0].tabla_7_1_seccion10),
      $("#tabla_7_2_seccion10").val(data.hojaEnfermeria[0].tabla_7_2_seccion10),
      $("#tabla_7_3_seccion10").val(data.hojaEnfermeria[0].tabla_7_3_seccion10),
      $("#tabla_7_4_seccion10").val(data.hojaEnfermeria[0].tabla_7_4_seccion10),
      $("#tabla_7_5_seccion10").val(data.hojaEnfermeria[0].tabla_7_5_seccion10),
      $("#tabla_7_6_seccion10").val(data.hojaEnfermeria[0].tabla_7_6_seccion10),
      $("#tabla_7_7_seccion10").val(data.hojaEnfermeria[0].tabla_7_7_seccion10),
      $("#tabla_7_8_seccion10").val(data.hojaEnfermeria[0].tabla_7_8_seccion10),
      $("#tabla_7_9_seccion10").val(data.hojaEnfermeria[0].tabla_7_9_seccion10),
      $("#tabla_7_10_seccion10").val(data.hojaEnfermeria[0].tabla_7_10_seccion10),
      $("#tabla_7_11_seccion10").val(data.hojaEnfermeria[0].tabla_7_11_seccion10),
      $("#tabla_7_12_seccion10").val(data.hojaEnfermeria[0].tabla_7_12_seccion10),
      $("#tabla_7_13_seccion10").val(data.hojaEnfermeria[0].tabla_7_13_seccion10),
      $("#tabla_8_1_seccion10").val(data.hojaEnfermeria[0].tabla_8_1_seccion10),
      $("#tabla_8_2_seccion10").val(data.hojaEnfermeria[0].tabla_8_2_seccion10),
      $("#tabla_8_3_seccion10").val(data.hojaEnfermeria[0].tabla_8_3_seccion10),
      $("#tabla_8_4_seccion10").val(data.hojaEnfermeria[0].tabla_8_4_seccion10),
      $("#tabla_8_5_seccion10").val(data.hojaEnfermeria[0].tabla_8_5_seccion10),
      $("#tabla_8_6_seccion10").val(data.hojaEnfermeria[0].tabla_8_6_seccion10),
      $("#tabla_8_7_seccion10").val(data.hojaEnfermeria[0].tabla_8_7_seccion10),
      $("#tabla_8_8_seccion10").val(data.hojaEnfermeria[0].tabla_8_8_seccion10),
      $("#tabla_8_9_seccion10").val(data.hojaEnfermeria[0].tabla_8_9_seccion10),
      $("#tabla_8_10_seccion10").val(data.hojaEnfermeria[0].tabla_8_10_seccion10),
      $("#tabla_8_11_seccion10").val(data.hojaEnfermeria[0].tabla_8_11_seccion10),
      $("#tabla_8_12_seccion10").val(data.hojaEnfermeria[0].tabla_8_12_seccion10),
      $("#tabla_8_13_seccion10").val(data.hojaEnfermeria[0].tabla_8_13_seccion10),
      $("#tabla_9_1_seccion10").val(data.hojaEnfermeria[0].tabla_9_1_seccion10),
      $("#tabla_9_2_seccion10").val(data.hojaEnfermeria[0].tabla_9_2_seccion10),
      $("#tabla_9_3_seccion10").val(data.hojaEnfermeria[0].tabla_9_3_seccion10),
      $("#tabla_9_4_seccion10").val(data.hojaEnfermeria[0].tabla_9_4_seccion10),
      $("#tabla_9_5_seccion10").val(data.hojaEnfermeria[0].tabla_9_5_seccion10),
      $("#tabla_9_6_seccion10").val(data.hojaEnfermeria[0].tabla_9_6_seccion10),
      $("#tabla_9_7_seccion10").val(data.hojaEnfermeria[0].tabla_9_7_seccion10),
      $("#tabla_9_8_seccion10").val(data.hojaEnfermeria[0].tabla_9_8_seccion10),
      $("#tabla_9_9_seccion10").val(data.hojaEnfermeria[0].tabla_9_9_seccion10),
      $("#tabla_9_10_seccion10").val(data.hojaEnfermeria[0].tabla_9_10_seccion10),
      $("#tabla_9_11_seccion10").val(data.hojaEnfermeria[0].tabla_9_11_seccion10),
      $("#tabla_9_12_seccion10").val(data.hojaEnfermeria[0].tabla_9_12_seccion10),
      $("#tabla_9_13_seccion10").val(data.hojaEnfermeria[0].tabla_9_13_seccion10),
      $("#tabla_10_1_seccion10").val(data.hojaEnfermeria[0].tabla_10_1_seccion10),
      $("#tabla_10_2_seccion10").val(data.hojaEnfermeria[0].tabla_10_2_seccion10),
      $("#tabla_10_3_seccion10").val(data.hojaEnfermeria[0].tabla_10_3_seccion10),
      $("#tabla_10_4_seccion10").val(data.hojaEnfermeria[0].tabla_10_4_seccion10),
      $("#tabla_10_5_seccion10").val(data.hojaEnfermeria[0].tabla_10_5_seccion10),
      $("#tabla_10_6_seccion10").val(data.hojaEnfermeria[0].tabla_10_6_seccion10),
      $("#tabla_10_7_seccion10").val(data.hojaEnfermeria[0].tabla_10_7_seccion10),
      $("#tabla_10_8_seccion10").val(data.hojaEnfermeria[0].tabla_10_8_seccion10),
      $("#tabla_10_9_seccion10").val(data.hojaEnfermeria[0].tabla_10_9_seccion10),
      $("#tabla_10_10_seccion10").val(data.hojaEnfermeria[0].tabla_10_10_seccion10),
      $("#tabla_10_11_seccion10").val(data.hojaEnfermeria[0].tabla_10_11_seccion10),
      $("#tabla_10_12_seccion10").val(data.hojaEnfermeria[0].tabla_10_12_seccion10),
      $("#tabla_10_13_seccion10").val(data.hojaEnfermeria[0].tabla_10_13_seccion10),
      $("#tabla_11_1_seccion10").val(data.hojaEnfermeria[0].tabla_11_1_seccion10),
      $("#tabla_11_2_seccion10").val(data.hojaEnfermeria[0].tabla_11_2_seccion10),
      $("#tabla_11_3_seccion10").val(data.hojaEnfermeria[0].tabla_11_3_seccion10),
      $("#tabla_11_4_seccion10").val(data.hojaEnfermeria[0].tabla_11_4_seccion10),
      $("#tabla_11_5_seccion10").val(data.hojaEnfermeria[0].tabla_11_5_seccion10),
      $("#tabla_11_6_seccion10").val(data.hojaEnfermeria[0].tabla_11_6_seccion10),
      $("#tabla_11_7_seccion10").val(data.hojaEnfermeria[0].tabla_11_7_seccion10),
      $("#tabla_11_8_seccion10").val(data.hojaEnfermeria[0].tabla_11_8_seccion10),
      $("#tabla_11_9_seccion10").val(data.hojaEnfermeria[0].tabla_11_9_seccion10),
      $("#tabla_11_10_seccion10").val(data.hojaEnfermeria[0].tabla_11_10_seccion10),
      $("#tabla_11_11_seccion10").val(data.hojaEnfermeria[0].tabla_11_11_seccion10),
      $("#tabla_11_12_seccion10").val(data.hojaEnfermeria[0].tabla_11_12_seccion10),
      $("#tabla_11_13_seccion10").val(data.hojaEnfermeria[0].tabla_11_13_seccion10),
      $("#tabla_12_1_seccion10").val(data.hojaEnfermeria[0].tabla_12_1_seccion10),
      $("#tabla_12_2_seccion10").val(data.hojaEnfermeria[0].tabla_12_2_seccion10),
      $("#tabla_12_3_seccion10").val(data.hojaEnfermeria[0].tabla_12_3_seccion10),
      $("#tabla_12_4_seccion10").val(data.hojaEnfermeria[0].tabla_12_4_seccion10),
      $("#tabla_12_5_seccion10").val(data.hojaEnfermeria[0].tabla_12_5_seccion10),
      $("#tabla_12_6_seccion10").val(data.hojaEnfermeria[0].tabla_12_6_seccion10),
      $("#tabla_12_7_seccion10").val(data.hojaEnfermeria[0].tabla_12_7_seccion10),
      $("#tabla_12_8_seccion10").val(data.hojaEnfermeria[0].tabla_12_8_seccion10),
      $("#tabla_12_9_seccion10").val(data.hojaEnfermeria[0].tabla_12_9_seccion10),
      $("#tabla_12_10_seccion10").val(data.hojaEnfermeria[0].tabla_12_10_seccion10),
      $("#tabla_12_11_seccion10").val(data.hojaEnfermeria[0].tabla_12_11_seccion10),
      $("#tabla_12_12_seccion10").val(data.hojaEnfermeria[0].tabla_12_12_seccion10),
      $("#tabla_12_13_seccion10").val(data.hojaEnfermeria[0].tabla_12_13_seccion10),
      $("#tabla_13_1_seccion10").val(data.hojaEnfermeria[0].tabla_13_1_seccion10),
      $("#tabla_13_2_seccion10").val(data.hojaEnfermeria[0].tabla_13_2_seccion10),
      $("#tabla_13_3_seccion10").val(data.hojaEnfermeria[0].tabla_13_3_seccion10),
      $("#tabla_13_4_seccion10").val(data.hojaEnfermeria[0].tabla_13_4_seccion10),
      $("#tabla_13_5_seccion10").val(data.hojaEnfermeria[0].tabla_13_5_seccion10),
      $("#tabla_13_6_seccion10").val(data.hojaEnfermeria[0].tabla_13_6_seccion10),
      $("#tabla_13_7_seccion10").val(data.hojaEnfermeria[0].tabla_13_7_seccion10),
      $("#tabla_13_8_seccion10").val(data.hojaEnfermeria[0].tabla_13_8_seccion10),
      $("#tabla_13_9_seccion10").val(data.hojaEnfermeria[0].tabla_13_9_seccion10),
      $("#tabla_13_10_seccion10").val(data.hojaEnfermeria[0].tabla_13_10_seccion10),
      $("#tabla_13_11_seccion10").val(data.hojaEnfermeria[0].tabla_13_11_seccion10),
      $("#tabla_13_12_seccion10").val(data.hojaEnfermeria[0].tabla_13_12_seccion10),
      $("#tabla_13_13_seccion10").val(data.hojaEnfermeria[0].tabla_13_13_seccion10),
      $("#tabla_14_1_seccion10").val(data.hojaEnfermeria[0].tabla_14_1_seccion10),
      $("#tabla_14_2_seccion10").val(data.hojaEnfermeria[0].tabla_14_2_seccion10),
      $("#tabla_14_3_seccion10").val(data.hojaEnfermeria[0].tabla_14_3_seccion10),
      $("#tabla_14_4_seccion10").val(data.hojaEnfermeria[0].tabla_14_4_seccion10),
      $("#tabla_14_5_seccion10").val(data.hojaEnfermeria[0].tabla_14_5_seccion10),
      $("#tabla_14_6_seccion10").val(data.hojaEnfermeria[0].tabla_14_6_seccion10),
      $("#tabla_14_7_seccion10").val(data.hojaEnfermeria[0].tabla_14_7_seccion10),
      $("#tabla_14_8_seccion10").val(data.hojaEnfermeria[0].tabla_14_8_seccion10),
      $("#tabla_14_9_seccion10").val(data.hojaEnfermeria[0].tabla_14_9_seccion10),
      $("#tabla_14_10_seccion10").val(data.hojaEnfermeria[0].tabla_14_10_seccion10),
      $("#tabla_14_11_seccion10").val(data.hojaEnfermeria[0].tabla_14_11_seccion10),
      $("#tabla_14_12_seccion10").val(data.hojaEnfermeria[0].tabla_14_12_seccion10),
      $("#tabla_14_13_seccion10").val(data.hojaEnfermeria[0].tabla_14_13_seccion10),
      $("#tabla_15_1_seccion10").val(data.hojaEnfermeria[0].tabla_15_1_seccion10),
      $("#tabla_15_2_seccion10").val(data.hojaEnfermeria[0].tabla_15_2_seccion10),
      $("#tabla_15_3_seccion10").val(data.hojaEnfermeria[0].tabla_15_3_seccion10),
      $("#tabla_15_4_seccion10").val(data.hojaEnfermeria[0].tabla_15_4_seccion10),
      $("#tabla_15_5_seccion10").val(data.hojaEnfermeria[0].tabla_15_5_seccion10),
      $("#tabla_15_6_seccion10").val(data.hojaEnfermeria[0].tabla_15_6_seccion10),
      $("#tabla_15_7_seccion10").val(data.hojaEnfermeria[0].tabla_15_7_seccion10),
      $("#tabla_15_8_seccion10").val(data.hojaEnfermeria[0].tabla_15_8_seccion10),
      $("#tabla_15_9_seccion10").val(data.hojaEnfermeria[0].tabla_15_9_seccion10),
      $("#tabla_15_10_seccion10").val(data.hojaEnfermeria[0].tabla_15_10_seccion10),
      $("#tabla_15_11_seccion10").val(data.hojaEnfermeria[0].tabla_15_11_seccion10),
      $("#tabla_15_12_seccion10").val(data.hojaEnfermeria[0].tabla_15_12_seccion10),
      $("#tabla_15_13_seccion10").val(data.hojaEnfermeria[0].tabla_15_13_seccion10),
      $("#tabla_16_1_seccion10").val(data.hojaEnfermeria[0].tabla_16_1_seccion10),
      $("#tabla_16_2_seccion10").val(data.hojaEnfermeria[0].tabla_16_2_seccion10),
      $("#tabla_16_3_seccion10").val(data.hojaEnfermeria[0].tabla_16_3_seccion10),
      $("#tabla_16_4_seccion10").val(data.hojaEnfermeria[0].tabla_16_4_seccion10),
      $("#tabla_16_5_seccion10").val(data.hojaEnfermeria[0].tabla_16_5_seccion10),
      $("#tabla_16_6_seccion10").val(data.hojaEnfermeria[0].tabla_16_6_seccion10),
      $("#tabla_16_7_seccion10").val(data.hojaEnfermeria[0].tabla_16_7_seccion10),
      $("#tabla_16_8_seccion10").val(data.hojaEnfermeria[0].tabla_16_8_seccion10),
      $("#tabla_16_9_seccion10").val(data.hojaEnfermeria[0].tabla_16_9_seccion10),
      $("#tabla_16_10_seccion10").val(data.hojaEnfermeria[0].tabla_16_10_seccion10),
      $("#tabla_16_11_seccion10").val(data.hojaEnfermeria[0].tabla_16_11_seccion10),
      $("#tabla_16_12_seccion10").val(data.hojaEnfermeria[0].tabla_16_12_seccion10),
      $("#tabla_16_13_seccion10").val(data.hojaEnfermeria[0].tabla_16_13_seccion10),
      $("#tabla_17_1_seccion10").val(data.hojaEnfermeria[0].tabla_17_1_seccion10),
      $("#tabla_17_2_seccion10").val(data.hojaEnfermeria[0].tabla_17_2_seccion10),
      $("#tabla_17_3_seccion10").val(data.hojaEnfermeria[0].tabla_17_3_seccion10),
      $("#tabla_17_4_seccion10").val(data.hojaEnfermeria[0].tabla_17_4_seccion10),
      $("#tabla_17_5_seccion10").val(data.hojaEnfermeria[0].tabla_17_5_seccion10),
      $("#tabla_17_6_seccion10").val(data.hojaEnfermeria[0].tabla_17_6_seccion10),
      $("#tabla_17_7_seccion10").val(data.hojaEnfermeria[0].tabla_17_7_seccion10),
      $("#tabla_17_8_seccion10").val(data.hojaEnfermeria[0].tabla_17_8_seccion10),
      $("#tabla_17_9_seccion10").val(data.hojaEnfermeria[0].tabla_17_9_seccion10),
      $("#tabla_17_10_seccion10").val(data.hojaEnfermeria[0].tabla_17_10_seccion10),
      $("#tabla_17_11_seccion10").val(data.hojaEnfermeria[0].tabla_17_11_seccion10),
      $("#tabla_17_12_seccion10").val(data.hojaEnfermeria[0].tabla_17_12_seccion10),
      $("#tabla_17_13_seccion10").val(data.hojaEnfermeria[0].tabla_17_13_seccion10),
      $("#tabla_18_1_seccion10").val(data.hojaEnfermeria[0].tabla_18_1_seccion10),
      $("#tabla_18_2_seccion10").val(data.hojaEnfermeria[0].tabla_18_2_seccion10),
      $("#tabla_18_3_seccion10").val(data.hojaEnfermeria[0].tabla_18_3_seccion10),
      $("#tabla_18_4_seccion10").val(data.hojaEnfermeria[0].tabla_18_4_seccion10),
      $("#tabla_18_5_seccion10").val(data.hojaEnfermeria[0].tabla_18_5_seccion10),
      $("#tabla_18_6_seccion10").val(data.hojaEnfermeria[0].tabla_18_6_seccion10),
      $("#tabla_18_7_seccion10").val(data.hojaEnfermeria[0].tabla_18_7_seccion10),
      $("#tabla_18_8_seccion10").val(data.hojaEnfermeria[0].tabla_18_8_seccion10),
      $("#tabla_18_9_seccion10").val(data.hojaEnfermeria[0].tabla_18_9_seccion10),
      $("#tabla_18_10_seccion10").val(data.hojaEnfermeria[0].tabla_18_10_seccion10),
      $("#tabla_18_11_seccion10").val(data.hojaEnfermeria[0].tabla_18_11_seccion10),
      $("#tabla_18_12_seccion10").val(data.hojaEnfermeria[0].tabla_18_12_seccion10),
      $("#tabla_18_13_seccion10").val(data.hojaEnfermeria[0].tabla_18_13_seccion10),
      $("#tabla_19_1_seccion10").val(data.hojaEnfermeria[0].tabla_19_1_seccion10),
      $("#tabla_19_2_seccion10").val(data.hojaEnfermeria[0].tabla_19_2_seccion10),
      $("#tabla_19_3_seccion10").val(data.hojaEnfermeria[0].tabla_19_3_seccion10),
      $("#tabla_19_4_seccion10").val(data.hojaEnfermeria[0].tabla_19_4_seccion10),
      $("#tabla_19_5_seccion10").val(data.hojaEnfermeria[0].tabla_19_5_seccion10),
      $("#tabla_19_6_seccion10").val(data.hojaEnfermeria[0].tabla_19_6_seccion10),
      $("#tabla_19_7_seccion10").val(data.hojaEnfermeria[0].tabla_19_7_seccion10),
      $("#tabla_19_8_seccion10").val(data.hojaEnfermeria[0].tabla_19_8_seccion10),
      $("#tabla_19_9_seccion10").val(data.hojaEnfermeria[0].tabla_19_9_seccion10),
      $("#tabla_19_10_seccion10").val(data.hojaEnfermeria[0].tabla_19_10_seccion10),
      $("#tabla_19_11_seccion10").val(data.hojaEnfermeria[0].tabla_19_11_seccion10),
      $("#tabla_19_12_seccion10").val(data.hojaEnfermeria[0].tabla_19_12_seccion10),
      $("#tabla_19_13_seccion10").val(data.hojaEnfermeria[0].tabla_19_13_seccion10),
      $("#tabla_20_1_seccion10").val(data.hojaEnfermeria[0].tabla_20_1_seccion10),
      $("#tabla_20_2_seccion10").val(data.hojaEnfermeria[0].tabla_20_2_seccion10),
      $("#tabla_20_3_seccion10").val(data.hojaEnfermeria[0].tabla_20_3_seccion10),
      $("#tabla_20_4_seccion10").val(data.hojaEnfermeria[0].tabla_20_4_seccion10),
      $("#tabla_20_5_seccion10").val(data.hojaEnfermeria[0].tabla_20_5_seccion10),
      $("#tabla_20_6_seccion10").val(data.hojaEnfermeria[0].tabla_20_6_seccion10),
      $("#tabla_20_7_seccion10").val(data.hojaEnfermeria[0].tabla_20_7_seccion10),
      $("#tabla_20_8_seccion10").val(data.hojaEnfermeria[0].tabla_20_8_seccion10),
      $("#tabla_20_9_seccion10").val(data.hojaEnfermeria[0].tabla_20_9_seccion10),
      $("#tabla_20_10_seccion10").val(data.hojaEnfermeria[0].tabla_20_10_seccion10),
      $("#tabla_20_11_seccion10").val(data.hojaEnfermeria[0].tabla_20_11_seccion10),
      $("#tabla_20_12_seccion10").val(data.hojaEnfermeria[0].tabla_20_12_seccion10),
      $("#tabla_20_13_seccion10").val(data.hojaEnfermeria[0].tabla_20_13_seccion10),
      $("#tabla_21_1_seccion10").val(data.hojaEnfermeria2[0].tabla_21_1_seccion10),
      $("#tabla_21_2_seccion10").val(data.hojaEnfermeria2[0].tabla_21_2_seccion10),
      $("#tabla_21_3_seccion10").val(data.hojaEnfermeria2[0].tabla_21_3_seccion10),
      $("#tabla_21_4_seccion10").val(data.hojaEnfermeria2[0].tabla_21_4_seccion10),
      $("#tabla_21_5_seccion10").val(data.hojaEnfermeria2[0].tabla_21_5_seccion10),
      $("#tabla_21_6_seccion10").val(data.hojaEnfermeria2[0].tabla_21_6_seccion10),
      $("#tabla_21_7_seccion10").val(data.hojaEnfermeria2[0].tabla_21_7_seccion10),
      $("#tabla_21_8_seccion10").val(data.hojaEnfermeria2[0].tabla_21_8_seccion10),
      $("#tabla_21_9_seccion10").val(data.hojaEnfermeria2[0].tabla_21_9_seccion10),
      $("#tabla_21_10_seccion10").val(data.hojaEnfermeria2[0].tabla_21_10_seccion10),
      $("#tabla_21_11_seccion10").val(data.hojaEnfermeria2[0].tabla_21_11_seccion10),
      $("#tabla_21_12_seccion10").val(data.hojaEnfermeria2[0].tabla_21_12_seccion10),
      $("#tabla_21_13_seccion10").val(data.hojaEnfermeria2[0].tabla_21_13_seccion10),
      $("#tabla_22_1_seccion10").val(data.hojaEnfermeria2[0].tabla_22_1_seccion10),
      $("#tabla_22_2_seccion10").val(data.hojaEnfermeria2[0].tabla_22_2_seccion10),
      $("#tabla_22_3_seccion10").val(data.hojaEnfermeria2[0].tabla_22_3_seccion10),
      $("#tabla_22_4_seccion10").val(data.hojaEnfermeria2[0].tabla_22_4_seccion10),
      $("#tabla_22_5_seccion10").val(data.hojaEnfermeria2[0].tabla_22_5_seccion10),
      $("#tabla_22_6_seccion10").val(data.hojaEnfermeria2[0].tabla_22_6_seccion10),
      $("#tabla_22_7_seccion10").val(data.hojaEnfermeria2[0].tabla_22_7_seccion10),
      $("#tabla_22_8_seccion10").val(data.hojaEnfermeria2[0].tabla_22_8_seccion10),
      $("#tabla_22_9_seccion10").val(data.hojaEnfermeria2[0].tabla_22_9_seccion10),
      $("#tabla_22_10_seccion10").val(data.hojaEnfermeria2[0].tabla_22_10_seccion10),
      $("#tabla_22_11_seccion10").val(data.hojaEnfermeria2[0].tabla_22_11_seccion10),
      $("#tabla_22_12_seccion10").val(data.hojaEnfermeria2[0].tabla_22_12_seccion10),
      $("#tabla_22_13_seccion10").val(data.hojaEnfermeria2[0].tabla_22_13_seccion10),
      $("#tabla_23_1_seccion10").val(data.hojaEnfermeria2[0].tabla_23_1_seccion10),
      $("#tabla_23_2_seccion10").val(data.hojaEnfermeria2[0].tabla_23_2_seccion10),
      $("#tabla_23_3_seccion10").val(data.hojaEnfermeria2[0].tabla_23_3_seccion10),
      $("#tabla_23_4_seccion10").val(data.hojaEnfermeria2[0].tabla_23_4_seccion10),
      $("#tabla_23_5_seccion10").val(data.hojaEnfermeria2[0].tabla_23_5_seccion10),
      $("#tabla_23_6_seccion10").val(data.hojaEnfermeria2[0].tabla_23_6_seccion10),
      $("#tabla_23_7_seccion10").val(data.hojaEnfermeria2[0].tabla_23_7_seccion10),
      $("#tabla_23_8_seccion10").val(data.hojaEnfermeria2[0].tabla_23_8_seccion10),
      $("#tabla_23_9_seccion10").val(data.hojaEnfermeria2[0].tabla_23_9_seccion10),
      $("#tabla_23_10_seccion10").val(data.hojaEnfermeria2[0].tabla_23_10_seccion10),
      $("#tabla_23_11_seccion10").val(data.hojaEnfermeria2[0].tabla_23_11_seccion10),
      $("#tabla_23_12_seccion10").val(data.hojaEnfermeria2[0].tabla_23_12_seccion10),
      $("#tabla_23_13_seccion10").val(data.hojaEnfermeria2[0].tabla_23_13_seccion10),
      $("#tabla_24_1_seccion10").val(data.hojaEnfermeria2[0].tabla_24_1_seccion10),
      $("#tabla_24_2_seccion10").val(data.hojaEnfermeria2[0].tabla_24_2_seccion10),
      $("#tabla_24_3_seccion10").val(data.hojaEnfermeria2[0].tabla_24_3_seccion10),
      $("#tabla_24_4_seccion10").val(data.hojaEnfermeria2[0].tabla_24_4_seccion10),
      $("#tabla_24_5_seccion10").val(data.hojaEnfermeria2[0].tabla_24_5_seccion10),
      $("#tabla_24_6_seccion10").val(data.hojaEnfermeria2[0].tabla_24_6_seccion10),
      $("#tabla_24_7_seccion10").val(data.hojaEnfermeria2[0].tabla_24_7_seccion10),
      $("#tabla_24_8_seccion10").val(data.hojaEnfermeria2[0].tabla_24_8_seccion10),
      $("#tabla_24_9_seccion10").val(data.hojaEnfermeria2[0].tabla_24_9_seccion10),
      $("#tabla_24_10_seccion10").val(data.hojaEnfermeria2[0].tabla_24_10_seccion10),
      $("#tabla_24_11_seccion10").val(data.hojaEnfermeria2[0].tabla_24_11_seccion10),
      $("#tabla_24_12_seccion10").val(data.hojaEnfermeria2[0].tabla_24_12_seccion10),
      $("#tabla_24_13_seccion10").val(data.hojaEnfermeria2[0].tabla_24_13_seccion10),
      $("#tabla_1_1_seccion10").val(data.hojaEnfermeria2[0].tabla_1_1_seccion10),
      $("#tabla_1_2_seccion10").val(data.hojaEnfermeria2[0].tabla_1_2_seccion10),
      $("#tabla_1_3_seccion10").val(data.hojaEnfermeria2[0].tabla_1_3_seccion10),
      $("#tabla_1_4_seccion10").val(data.hojaEnfermeria2[0].tabla_1_4_seccion10),
      $("#tabla_1_5_seccion10").val(data.hojaEnfermeria2[0].tabla_1_5_seccion10),
      $("#tabla_1_6_seccion10").val(data.hojaEnfermeria2[0].tabla_1_6_seccion10),
      $("#tabla_1_7_seccion10").val(data.hojaEnfermeria2[0].tabla_1_7_seccion10),
      $("#tabla_1_8_seccion10").val(data.hojaEnfermeria2[0].tabla_1_8_seccion10),
      $("#tabla_1_9_seccion10").val(data.hojaEnfermeria2[0].tabla_1_9_seccion10),
      $("#tabla_1_10_seccion10").val(data.hojaEnfermeria2[0].tabla_1_10_seccion10),
      $("#tabla_1_11_seccion10").val(data.hojaEnfermeria2[0].tabla_1_11_seccion10),
      $("#tabla_1_12_seccion10").val(data.hojaEnfermeria2[0].tabla_1_12_seccion10),
      $("#tabla_1_13_seccion10").val(data.hojaEnfermeria2[0].tabla_1_13_seccion10),
      $("#tabla_2_1_seccion10").val(data.hojaEnfermeria2[0].tabla_2_1_seccion10),
      $("#tabla_2_2_seccion10").val(data.hojaEnfermeria2[0].tabla_2_2_seccion10),
      $("#tabla_2_3_seccion10").val(data.hojaEnfermeria2[0].tabla_2_3_seccion10),
      $("#tabla_2_4_seccion10").val(data.hojaEnfermeria2[0].tabla_2_4_seccion10),
      $("#tabla_2_5_seccion10").val(data.hojaEnfermeria2[0].tabla_2_5_seccion10),
      $("#tabla_2_6_seccion10").val(data.hojaEnfermeria2[0].tabla_2_6_seccion10),
      $("#tabla_2_7_seccion10").val(data.hojaEnfermeria2[0].tabla_2_7_seccion10),
      $("#tabla_2_8_seccion10").val(data.hojaEnfermeria2[0].tabla_2_8_seccion10),
      $("#tabla_2_9_seccion10").val(data.hojaEnfermeria2[0].tabla_2_9_seccion10),
      $("#tabla_2_10_seccion10").val(data.hojaEnfermeria2[0].tabla_2_10_seccion10),
      $("#tabla_2_11_seccion10").val(data.hojaEnfermeria2[0].tabla_2_11_seccion10),
      $("#tabla_2_12_seccion10").val(data.hojaEnfermeria2[0].tabla_2_12_seccion10),
      $("#tabla_2_13_seccion10").val(data.hojaEnfermeria2[0].tabla_2_13_seccion10),
      $("#tabla_3_1_seccion10").val(data.hojaEnfermeria2[0].tabla_3_1_seccion10),
      $("#tabla_3_2_seccion10").val(data.hojaEnfermeria2[0].tabla_3_2_seccion10),
      $("#tabla_3_3_seccion10").val(data.hojaEnfermeria2[0].tabla_3_3_seccion10),
      $("#tabla_3_4_seccion10").val(data.hojaEnfermeria2[0].tabla_3_4_seccion10),
      $("#tabla_3_5_seccion10").val(data.hojaEnfermeria2[0].tabla_3_5_seccion10),
      $("#tabla_3_6_seccion10").val(data.hojaEnfermeria2[0].tabla_3_6_seccion10),
      $("#tabla_3_7_seccion10").val(data.hojaEnfermeria2[0].tabla_3_7_seccion10),
      $("#tabla_3_8_seccion10").val(data.hojaEnfermeria2[0].tabla_3_8_seccion10),
      $("#tabla_3_9_seccion10").val(data.hojaEnfermeria2[0].tabla_3_9_seccion10),
      $("#tabla_3_10_seccion10").val(data.hojaEnfermeria2[0].tabla_3_10_seccion10),
      $("#tabla_3_11_seccion10").val(data.hojaEnfermeria2[0].tabla_3_11_seccion10),
      $("#tabla_3_12_seccion10").val(data.hojaEnfermeria2[0].tabla_3_12_seccion10),
      $("#tabla_3_13_seccion10").val(data.hojaEnfermeria2[0].tabla_3_13_seccion10),
      $("#tabla_4_1_seccion10").val(data.hojaEnfermeria2[0].tabla_4_1_seccion10),
      $("#tabla_4_2_seccion10").val(data.hojaEnfermeria3.tabla_4_2_seccion10),
      $("#tabla_4_3_seccion10").val(data.hojaEnfermeria3.tabla_4_3_seccion10),
      $("#tabla_4_4_seccion10").val(data.hojaEnfermeria3.tabla_4_4_seccion10),
      $("#tabla_4_5_seccion10").val(data.hojaEnfermeria2[0].tabla_4_5_seccion10),
      $("#tabla_4_6_seccion10").val(data.hojaEnfermeria2[0].tabla_4_6_seccion10),
      $("#tabla_4_7_seccion10").val(data.hojaEnfermeria2[0].tabla_4_7_seccion10),
      $("#tabla_4_8_seccion10").val(data.hojaEnfermeria2[0].tabla_4_8_seccion10),
      $("#tabla_4_9_seccion10").val(data.hojaEnfermeria2[0].tabla_4_9_seccion10),
      $("#tabla_4_10_seccion10").val(data.hojaEnfermeria2[0].tabla_4_10_seccion10),
      $("#tabla_4_11_seccion10").val(data.hojaEnfermeria2[0].tabla_4_11_seccion10),
      $("#tabla_4_12_seccion10").val(data.hojaEnfermeria2[0].tabla_4_12_seccion10),
      $("#tabla_4_13_seccion10").val(data.hojaEnfermeria2[0].tabla_4_13_seccion10),
      $("#tabla_5_1_seccion10").val(data.hojaEnfermeria2[0].tabla_5_1_seccion10),
      $("#tabla_5_2_seccion10").val(data.hojaEnfermeria2[0].tabla_5_2_seccion10),
      $("#tabla_5_3_seccion10").val(data.hojaEnfermeria2[0].tabla_5_3_seccion10),
      $("#tabla_5_4_seccion10").val(data.hojaEnfermeria2[0].tabla_5_4_seccion10),
      $("#tabla_5_5_seccion10").val(data.hojaEnfermeria2[0].tabla_5_5_seccion10),
      $("#tabla_5_6_seccion10").val(data.hojaEnfermeria2[0].tabla_5_6_seccion10),
      $("#tabla_5_7_seccion10").val(data.hojaEnfermeria2[0].tabla_5_7_seccion10),
      $("#tabla_5_8_seccion10").val(data.hojaEnfermeria2[0].tabla_5_8_seccion10),
      $("#tabla_5_9_seccion10").val(data.hojaEnfermeria2[0].tabla_5_9_seccion10),
      $("#tabla_5_10_seccion10").val(data.hojaEnfermeria2[0].tabla_5_10_seccion10),
      $("#tabla_5_11_seccion10").val(data.hojaEnfermeria2[0].tabla_5_11_seccion10),
      $("#tabla_5_12_seccion10").val(data.hojaEnfermeria2[0].tabla_5_12_seccion10),
      $("#tabla_5_13_seccion10").val(data.hojaEnfermeria2[0].tabla_5_13_seccion10),
      $("#tabla_6_1_seccion10").val(data.hojaEnfermeria2[0].tabla_6_1_seccion10),
      $("#tabla_6_2_seccion10").val(data.hojaEnfermeria2[0].tabla_6_2_seccion10),
      $("#tabla_6_3_seccion10").val(data.hojaEnfermeria2[0].tabla_6_3_seccion10),
      $("#tabla_6_4_seccion10").val(data.hojaEnfermeria2[0].tabla_6_4_seccion10),
      $("#tabla_6_5_seccion10").val(data.hojaEnfermeria2[0].tabla_6_5_seccion10),
      $("#tabla_6_6_seccion10").val(data.hojaEnfermeria2[0].tabla_6_6_seccion10),
      $("#tabla_6_7_seccion10").val(data.hojaEnfermeria2[0].tabla_6_7_seccion10),
      $("#tabla_6_8_seccion10").val(data.hojaEnfermeria2[0].tabla_6_8_seccion10),
      $("#tabla_6_9_seccion10").val(data.hojaEnfermeria2[0].tabla_6_9_seccion10),
      $("#tabla_6_10_seccion10").val(data.hojaEnfermeria2[0].tabla_6_10_seccion10),
      $("#tabla_6_11_seccion10").val(data.hojaEnfermeria2[0].tabla_6_11_seccion10),
      $("#tabla_6_12_seccion10").val(data.hojaEnfermeria2[0].tabla_6_12_seccion10),
      $("#tabla_6_13_seccion10").val(data.hojaEnfermeria2[0].tabla_6_13_seccion10),
      $("#t_arterial_1_seccion10").val(data.hojaEnfermeria2[0].t_arterial_1_seccion10),
      $("#t_arterial_2_seccion10").val(data.hojaEnfermeria2[0].t_arterial_2_seccion10),
      $("#t_arterial_3_seccion10").val(data.hojaEnfermeria2[0].t_arterial_3_seccion10),
      $("#t_arterial_4_seccion10").val(data.hojaEnfermeria2[0].t_arterial_4_seccion10),
      $("#t_arterial_5_seccion10").val(data.hojaEnfermeria2[0].t_arterial_5_seccion10),
      $("#t_arterial_6_seccion10").val(data.hojaEnfermeria2[0].t_arterial_6_seccion10),
      $("#t_arterial_7_seccion10").val(data.hojaEnfermeria2[0].t_arterial_7_seccion10),
      $("#t_arterial_8_seccion10").val(data.hojaEnfermeria2[0].t_arterial_8_seccion10),
      $("#t_arterial_9_seccion10").val(data.hojaEnfermeria2[0].t_arterial_9_seccion10),
      $("#t_arterial_10_seccion10").val(data.hojaEnfermeria2[0].t_arterial_10_seccion10),
      $("#t_arterial_11_seccion10").val(data.hojaEnfermeria2[0].t_arterial_11_seccion10),
      $("#t_arterial_12_seccion10").val(data.hojaEnfermeria2[0].t_arterial_12_seccion10),
      $("#f_resp_1_seccion10").val(data.hojaEnfermeria2[0].f_resp_1_seccion10),
      $("#f_resp_2_seccion10").val(data.hojaEnfermeria2[0].f_resp_2_seccion10),
      $("#f_resp_3_seccion10").val(data.hojaEnfermeria2[0].f_resp_3_seccion10),
      $("#f_resp_4_seccion10").val(data.hojaEnfermeria2[0].f_resp_4_seccion10),
      $("#f_resp_5_seccion10").val(data.hojaEnfermeria2[0].f_resp_5_seccion10),
      $("#f_resp_6_seccion10").val(data.hojaEnfermeria2[0].f_resp_6_seccion10),
      $("#f_resp_7_seccion10").val(data.hojaEnfermeria2[0].f_resp_7_seccion10),
      $("#f_resp_8_seccion10").val(data.hojaEnfermeria2[0].f_resp_8_seccion10),
      $("#f_resp_9_seccion10").val(data.hojaEnfermeria2[0].f_resp_9_seccion10),
      $("#f_resp_10_seccion10").val(data.hojaEnfermeria2[0].f_resp_10_seccion10),
      $("#f_resp_11_seccion10").val(data.hojaEnfermeria2[0].f_resp_11_seccion10),
      $("#f_resp_12_seccion10").val(data.hojaEnfermeria2[0].f_resp_12_seccion10),
      $("#perimetro_1_seccion10").val(data.hojaEnfermeria2[0].perimetro_1_seccion10),
      $("#perimetro_2_seccion10").val(data.hojaEnfermeria2[0].perimetro_2_seccion10),
      $("#perimetro_3_seccion10").val(data.hojaEnfermeria2[0].perimetro_3_seccion10),
      $("#perimetro_4_seccion10").val(data.hojaEnfermeria2[0].perimetro_4_seccion10),
      $("#perimetro_5_seccion10").val(data.hojaEnfermeria2[0].perimetro_5_seccion10),
      $("#perimetro_6_seccion10").val(data.hojaEnfermeria2[0].perimetro_6_seccion10),
      $("#perimetro_7_seccion10").val(data.hojaEnfermeria2[0].perimetro_7_seccion10),
      $("#perimetro_8_seccion10").val(data.hojaEnfermeria2[0].perimetro_8_seccion10),
      $("#perimetro_9_seccion10").val(data.hojaEnfermeria2[0].perimetro_9_seccion10),
      $("#perimetro_10_seccion10").val(data.hojaEnfermeria2[0].perimetro_10_seccion10),
      $("#perimetro_11_seccion10").val(data.hojaEnfermeria2[0].perimetro_11_seccion10),
      $("#perimetro_12_seccion10").val(data.hojaEnfermeria2[0].perimetro_12_seccion10),
      $("#formula_1_seccion10").val(data.hojaEnfermeria2[0].formula_1_seccion10),
      $("#formula_2_seccion10").val(data.hojaEnfermeria2[0].formula_2_seccion10),
      $("#formula_3_seccion10").val(data.hojaEnfermeria2[0].formula_3_seccion10),
      $("#formula_4_seccion10").val(data.hojaEnfermeria2[0].formula_4_seccion10),
      $("#formula_5_seccion10").val(data.hojaEnfermeria2[0].formula_5_seccion10),
      $("#formula_6_seccion10").val(data.hojaEnfermeria2[0].formula_6_seccion10),
      $("#formula_7_seccion10").val(data.hojaEnfermeria2[0].formula_7_seccion10),
      $("#formula_8_seccion10").val(data.hojaEnfermeria2[0].formula_8_seccion10),
      $("#formula_9_seccion10").val(data.hojaEnfermeria2[0].formula_9_seccion10),
      $("#formula_10_seccion10").val(data.hojaEnfermeria2[0].formula_10_seccion10),
      $("#formula_11_seccion10").val(data.hojaEnfermeria2[0].formula_11_seccion10),
      $("#formula_12_seccion10").val(data.hojaEnfermeria2[0].formula_12_seccion10),
      $("#dieta_1_seccion10").val(data.hojaEnfermeria2[0].dieta_1_seccion10),
      $("#dieta_2_seccion10").val(data.hojaEnfermeria2[0].dieta_2_seccion10),
      $("#dieta_3_seccion10").val(data.hojaEnfermeria2[0].dieta_3_seccion10),
      $("#lib_orales_1_seccion10").val(data.hojaEnfermeria2[0].lib_orales_1_seccion10),
      $("#lib_orales_2_seccion10").val(data.hojaEnfermeria2[0].lib_orales_2_seccion10),
      $("#lib_orales_3_seccion10").val(data.hojaEnfermeria2[0].lib_orales_3_seccion10),
      $("#lib_orales_4_seccion10").val(data.hojaEnfermeria2[0].lib_orales_4_seccion10),
      $("#lib_orales_5_seccion10").val(data.hojaEnfermeria2[0].lib_orales_5_seccion10),
      $("#lib_orales_6_seccion10").val(data.hojaEnfermeria2[0].lib_orales_6_seccion10),
      $("#lib_orales_7_seccion10").val(data.hojaEnfermeria2[0].lib_orales_7_seccion10),
      $("#lib_orales_8_seccion10").val(data.hojaEnfermeria2[0].lib_orales_8_seccion10),
      $("#lib_orales_9_seccion10").val(data.hojaEnfermeria2[0].lib_orales_9_seccion10),
      $("#lib_orales_10_seccion10").val(data.hojaEnfermeria2[0].lib_orales_10_seccion10),
      $("#lib_orales_11_seccion10").val(data.hojaEnfermeria2[0].lib_orales_11_seccion10),
      $("#lib_orales_12_seccion10").val(data.hojaEnfermeria2[0].lib_orales_12_seccion10),
      $("#total_1_seccion10").val(data.hojaEnfermeria2[0].total_1_seccion10),
      $("#total_2_seccion10").val(data.hojaEnfermeria2[0].total_2_seccion10),
      $("#total_3_seccion10").val(data.hojaEnfermeria2[0].total_3_seccion10),
      $("#liquidos_parentales_1_seccion10").val(data.hojaEnfermeria2[0].liquidos_parentales_1_seccion10),
      $("#liquidos_parentales_2_seccion10").val(data.hojaEnfermeria2[0].liquidos_parentales_2_seccion10),
      $("#liquidos_parentales_3_seccion10").val(data.hojaEnfermeria2[0].liquidos_parentales_3_seccion10),
      $("#electrolitos_1_seccion10").val(data.hojaEnfermeria3[0].electrolitos_1_seccion10),
      $("#electrolitos_2_seccion10").val(data.hojaEnfermeria3[0].electrolitos_2_seccion10),
      $("#electrolitos_3_seccion10").val(data.hojaEnfermeria3[0].electrolitos_3_seccion10),
      $("#total_electrolitos_1_seccion10").val(data.hojaEnfermeria3[0].total_electrolitos_1_seccion10),
      $("#total_electrolitos_2_seccion10").val(data.hojaEnfermeria3[0].total_electrolitos_2_seccion10),
      $("#total_electrolitos_3_seccion10").val(data.hojaEnfermeria3[0].total_electrolitos_3_seccion10),
      $("#uresis_1_seccion10").val(data.hojaEnfermeria3[0].uresis_1_seccion10),
      $("#uresis_2_seccion10").val(data.hojaEnfermeria3[0].uresis_2_seccion10),
      $("#uresis_3_seccion10").val(data.hojaEnfermeria3[0].uresis_3_seccion10),
      $("#evacuaciones_1_seccion10").val(data.hojaEnfermeria3[0].evacuaciones_1_seccion10),
      $("#evacuaciones_2_seccion10").val(data.hojaEnfermeria3[0].evacuaciones_2_seccion10),
      $("#evacuaciones_3_seccion10").val(data.hojaEnfermeria3[0].evacuaciones_3_seccion10),
      $("#lab_1_seccion10").val(data.hojaEnfermeria3[0].lab_1_seccion10),
      $("#lab_2_seccion10").val(data.hojaEnfermeria3[0].lab_2_seccion10),
      $("#lab_3_seccion10").val(data.hojaEnfermeria3[0].lab_3_seccion10),
      $("#lab_4_seccion10").val(data.hojaEnfermeria3[0].lab_4_seccion10),
      $("#lab_5_seccion10").val(data.hojaEnfermeria3[0].lab_5_seccion10),
      $("#lab_6_seccion10").val(data.hojaEnfermeria3[0].lab_6_seccion10),
      $("#lab_7_seccion10").val(data.hojaEnfermeria3[0].lab_7_seccion10),
      $("#lab_8_seccion10").val(data.hojaEnfermeria3[0].lab_8_seccion10),
      $("#lab_9_seccion10").val(data.hojaEnfermeria3[0].lab_9_seccion10),
      $("#lab_10_seccion10").val(data.hojaEnfermeria3[0].lab_10_seccion10),
      $("#lab_11_seccion10").val(data.hojaEnfermeria3[0].lab_11_seccion10),
      $("#lab_12_seccion10").val(data.hojaEnfermeria3[0].lab_12_seccion10),
      $("#reactivos_1_seccion10").val(data.hojaEnfermeria3[0].reactivos_1_seccion10),
      $("#reactivos_2_seccion10").val(data.hojaEnfermeria3[0].reactivos_2_seccion10),
      $("#reactivos_3_seccion10").val(data.hojaEnfermeria3[0].reactivos_3_seccion10),
      $("#reactivos_4_seccion10").val(data.hojaEnfermeria3[0].reactivos_4_seccion10),
      $("#reactivos_5_seccion10").val(data.hojaEnfermeria3[0].reactivos_5_seccion10),
      $("#reactivos_6_seccion10").val(data.hojaEnfermeria3[0].reactivos_6_seccion10),
      $("#reactivos_7_seccion10").val(data.hojaEnfermeria3[0].reactivos_7_seccion10),
      $("#reactivos_8_seccion10").val(data.hojaEnfermeria3[0].reactivos_8_seccion10),
      $("#reactivos_9_seccion10").val(data.hojaEnfermeria3[0].reactivos_9_seccion10),
      $("#reactivos_10_seccion10").val(data.hojaEnfermeria3[0].reactivos_10_seccion10),
      $("#reactivos_11_seccion10").val(data.hojaEnfermeria3[0].reactivos_11_seccion10),
      $("#reactivos_12_seccion10").val(data.hojaEnfermeria3[0].reactivos_12_seccion10),
      $("#otros_estudios_1_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_1_seccion10),
      $("#otros_estudios_2_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_2_seccion10),
      $("#otros_estudios_3_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_3_seccion10),
      $("#otros_estudios_4_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_4_seccion10),
      $("#otros_estudios_5_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_5_seccion10),
      $("#otros_estudios_6_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_6_seccion10),
      $("#otros_estudios_7_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_7_seccion10),
      $("#otros_estudios_8_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_8_seccion10),
      $("#otros_estudios_9_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_9_seccion10),
      $("#otros_estudios_10_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_10_seccion10),
      $("#otros_estudios_11_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_11_seccion10),
      $("#otros_estudios_12_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_12_seccion10),
      $("#cateter_corto_dolor_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_dolor_seccion10),
      $("#cateter_corto_calor_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_calor_seccion10),
      $("#cateter_corto_rubor_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_rubor_seccion10),
      $("#cateter_corto_numero_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_numero_seccion10),
      $("#cateter_corto_numero_punciones_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_numero_punciones_seccion10),
      $("#cateter_central_dolor_seccion10").val(data.hojaEnfermeria3[0].cateter_central_dolor_seccion10),
      $("#cateter_central_calor_seccion10").val(data.hojaEnfermeria3[0].cateter_central_calor_seccion10),
      $("#cateter_central_rubor_seccion10").val(data.hojaEnfermeria3[0].cateter_central_rubor_seccion10),
      $("#cateter_corto_recanaliza_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_recanaliza_seccion10),
      $("#cateter_central_recanaliza_seccion10").val(data.hojaEnfermeria3[0].cateter_central_recanaliza_seccion10),
      $("#dieta_seccion10").val(data.hojaEnfermeria3[0].dieta_seccion10),
      $("#fecha_1_seccion10").val(data.hojaEnfermeria3[0].fecha_1_seccion10),
      $("#fecha_2_seccion10").val(data.hojaEnfermeria3[0].fecha_2_seccion10),
      $("#fecha_3_seccion10").val(data.hojaEnfermeria3[0].fecha_3_seccion10),
      $("#fecha_4_seccion10").val(data.hojaEnfermeria3[0].fecha_4_seccion10),
      $("#fecha_5_seccion10").val(data.hojaEnfermeria3[0].fecha_5_seccion10),
      $("#fecha_6_seccion10").val(data.hojaEnfermeria3[0].fecha_6_seccion10),
      $("#fecha_7_seccion10").val(data.hojaEnfermeria3[0].fecha_7_seccion10),
      $("#fecha_8_seccion10").val(data.hojaEnfermeria3[0].fecha_8_seccion10),
      $("#fecha_9_seccion10").val(data.hojaEnfermeria3[0].fecha_9_seccion10),
      $("#fecha_10_seccion10").val(data.hojaEnfermeria3[0].fecha_10_seccion10),
      $("#medicamentos_1_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_2_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_3_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_4_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_5_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_6_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_7_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_8_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_9_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_10_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#dosis_1_seccion10").val(data.hojaEnfermeria3[0].dosis_1_seccion10),
      $("#dosis_2_seccion10").val(data.hojaEnfermeria3[0].dosis_2_seccion10),
      $("#dosis_3_seccion10").val(data.hojaEnfermeria3[0].dosis_3_seccion10),
      $("#dosis_4_seccion10").val(data.hojaEnfermeria3[0].dosis_4_seccion10),
      $("#dosis_5_seccion10").val(data.hojaEnfermeria3[0].dosis_5_seccion10),
      $("#dosis_6_seccion10").val(data.hojaEnfermeria3[0].dosis_6_seccion10),
      $("#dosis_7_seccion10").val(data.hojaEnfermeria3[0].dosis_7_seccion10),
      $("#dosis_8_seccion10").val(data.hojaEnfermeria3[0].dosis_8_seccion10),
      $("#dosis_9_seccion10").val(data.hojaEnfermeria3[0].dosis_9_seccion10),
      $("#dosis_10_seccion10").val(data.hojaEnfermeria3[0].dosis_10_seccion10),
      $("#via_1_seccion10").val(data.hojaEnfermeria3[0].via_1_seccion10),
      $("#via_2_seccion10").val(data.hojaEnfermeria3[0].via_2_seccion10),
      $("#via_3_seccion10").val(data.hojaEnfermeria3[0].via_3_seccion10),
      $("#via_4_seccion10").val(data.hojaEnfermeria3[0].via_4_seccion10),
      $("#via_5_seccion10").val(data.hojaEnfermeria3[0].via_5_seccion10),
      $("#via_6_seccion10").val(data.hojaEnfermeria3[0].via_6_seccion10),
      $("#via_7_seccion10").val(data.hojaEnfermeria3[0].via_7_seccion10),
      $("#via_8_seccion10").val(data.hojaEnfermeria3[0].via_8_seccion10),
      $("#via_9_seccion10").val(data.hojaEnfermeria3[0].via_9_seccion10),
      $("#via_10_seccion10").val(data.hojaEnfermeria3[0].via_10_seccion10),
      $("#horarios_1_seccion10").val(data.hojaEnfermeria3[0].horarios_1_seccion10),
      $("#horarios_2_seccion10").val(data.hojaEnfermeria3[0].horarios_2_seccion10),
      $("#horarios_3_seccion10").val(data.hojaEnfermeria3[0].horarios_3_seccion10),
      $("#horarios_4_seccion10").val(data.hojaEnfermeria3[0].horarios_4_seccion10),
      $("#horarios_5_seccion10").val(data.hojaEnfermeria3[0].horarios_5_seccion10),
      $("#horarios_6_seccion10").val(data.hojaEnfermeria3[0].horarios_6_seccion10),
      $("#horarios_7_seccion10").val(data.hojaEnfermeria3[0].horarios_7_seccion10),
      $("#horarios_8_seccion10").val(data.hojaEnfermeria3[0].horarios_8_seccion10),
      $("#horarios_9_seccion10").val(data.hojaEnfermeria3[0].horarios_9_seccion10),
      $("#horarios_10_seccion10").val(data.hojaEnfermeria3[0].horarios_10_seccion10),
      $("#horarios_10_seccion10").val(data.hojaEnfermeria3[0].horarios_10_seccion10),
      $("#hora_nota_1_seccion10").val(data.hojaEnfermeria3[0].hora_nota_1_seccion10),
      $("#hora_nota_2_seccion10").val(data.hojaEnfermeria3[0].hora_nota_2_seccion10),
      $("#hora_nota_3_seccion10").val(data.hojaEnfermeria3[0].hora_nota_3_seccion10),
      $("#nota_enfermeria_1_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_1_seccion10),
      $("#nota_enfermeria_2_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_2_seccion10),
      $("#nota_enfermeria_3_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_3_seccion10),
      $("#nota_enfermeria_4_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_4_seccion10),
      $("#nota_enfermeria_5_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_5_seccion10),
      $("#nota_enfermeria_6_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_6_seccion10),
      $("#nota_enfermeria_7_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_7_seccion10),
      $("#nota_enfermeria_8_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_8_seccion10),
      $("#nota_enfermeria_9_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_9_seccion10),
      $("#nota_enfermeria_10_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_10_seccion10),
      $("#nota_enfermeria_11_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_11_seccion10),
      $("#nota_enfermeria_12_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_12_seccion10),
      $("#nota_enfermeria_13_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_13_seccion10),
      $("#nota_enfermeria_14_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_14_seccion10),
      $("#nota_enfermeria_15_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_15_seccion10),
      $("#nota_enfermeria_16_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_16_seccion10),
      $("#nota_enfermeria_17_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_17_seccion10),
      $("#nota_enfermeria_18_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_18_seccion10),
      $("#nota_enfermeria_19_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_19_seccion10),
      $("#nota_enfermeria_20_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_20_seccion10),
      $("#nota_enfermeria_21_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_21_seccion10),
      $("#nota_enfermeria_22_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_22_seccion10),
      $("#nota_enfermeria_23_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_23_seccion10),
      $("#nota_enfermeria_24_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_24_seccion10),
      $("#nota_enfermeria_25_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_25_seccion10),
      $("#nota_enfermeria_26_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_26_seccion10),
      $("#nota_enfermeria_27_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_27_seccion10),
      $("#enfermera_nota_seccion10").val(data.hojaEnfermeria3[0].enfermera_nota_seccion10),
      $("#firma_nota_seccion10").val(data.hojaEnfermeria3[0].firma_nota_seccion10)
    }



        $('#modalCliente').modal('show');
        /*console.log(data);
        if (data.responseData1[0].foto!=null) {
            $('#imagenFile').attr('src','img/fotos/files/'+ data.responseData1[0].foto);
        }*/
      }
    });
}

function actualizaPaciente(id){
  
  /*if ($('#expediente_numero_seccion2').val()=='') {
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
  }*/

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
        type:'post',
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
    /*emerNombre:$('#nombreEmergencia').val().toUpperCase(),
    emerRelacion:$('#relacionEmergencia').val().toUpperCase(),
    emerTel:$('#telEmegencia').val(),*/
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

    //seccion4
    notapostoperatoria_id: $("#notapostoperatoria_id").val(),
    habitacion_seccion4: $('#habitacion_seccion4').val(),
    diagnostico_pre_operatorio_seccion4: $('#diagnostico_pre_operatorio_seccion4').val(),
    operacion_planeada_seccion4: $('#operacion_planeada_seccion4').val(),
    diagnostico_post_operatorio_seccion4: $('#diagnostico_post_operatorio_seccion4').val(),
    operacion_realizada_seccion4: $('#operacion_realizada_seccion4').val(),
    descripcion_tecnica_quirurgica_seccion4: $('#descripcion_tecnica_quirurgica_seccion4').val(),
    hallazgos_transoperatorios_seccion4: $('#hallazgos_transoperatorios_seccion4').val(),
    reporte_gasas_compresas_seccion4: $('#reporte_gasas_compresas_seccion4').val(),
    incidentes_accidentes_seccion4: $('#incidentes_accidentes_seccion4').val(),
    sangrado_seccion4: $('#sangrado_seccion4').val(),
    estudios_servicios_auxiliares_seccion4:$('#estudios_servicios_auxiliares_seccion4').val(),
    nombre_anestesiologo_seccion4:$("#nombre_anestesiologo_seccion4").val(),
    nombre_ayudante1_seccion4:$('#nombre_ayudante1_seccion4').val(),
    nombre_ayudante2_seccion4:$('#nombre_ayudante2_seccion4').val(),
    nombre_instrumentista_seccion4:$('#nombre_instrumentista_seccion4').val(),
    nombre_enfermera_circulante_seccion4:$('#nombre_enfermera_circulante_seccion4').val(),
    estado_postquirurgico_inmediato_seccion4:$('#estado_postquirurgico_inmediato_seccion4').val(),
    pronostico_seccion4:$('#pronostico_seccion4').val(),
    envio_piezas_seccion4:$("#envio_piezas_seccion4").val(),
    otros_hallazgos_seccion4:$('#otros_hallazgos_seccion4').val(),
    nombre_cirujano_seccion4:$('#nombre_cirujano_seccion4').val(),

    //seccion5
    indicaciones_id: $("#indicaciones_id").val(),
    indicaciones_seccion5: $("#indicaciones_seccion5").val(),

    //seccion6
    nota_medica_id: $("#nota_medica_id_seccion6").val(),
    nota_medica_seccion6: $("#nota_medica_seccion6").val(),

    //seccion7
    nota_egreso_id: $("#notaEgreso_id_seccion7").val(),
    fechaIngreso_seccion7: $("#fechaIngreso_seccion7").val(),
    fechaEgreso_seccion7: $("#fechaEgreso_seccion7").val(),
    motivoEgreso_seccion7: $("#motivoEgreso_seccion7").val(),
    diagnosticoFinal_seccion7: $("#diagnosticoFinal_seccion7").val(),
    resumenClinico_seccion7: $("#resumenClinico_seccion7").val(),
    problemasClinicos_seccion7:$("#problemasClinicos_seccion7").val(),
    plan_seccion7: $("#plan_seccion7").val(),
    recomendacionesVigilancia_seccion7: $("#recomendacionesVigilancia_seccion7").val(),

    //seccion8
    resumen_id_seccion8: $("#resumen_id_seccion8").val(), 
    resumen_seccion8: $("#resumen_seccion8").val(),

    //seccion9
    fdn_seccion9: $("#fdn_seccion9").val(),
    habitacion_seccion9: $("#habitacion_seccion9").val(),
    medico_seccion9: $("#medico_seccion9").val(),
    signos_vitales_seccion9: $("#signos_vitales_seccion9").val(),
    ta_seccion9: $("#ta_seccion9").val(),
    fc_seccion9: $("#fc_seccion9").val(),
    fr_seccion9: $("#fr_seccion9").val(),
    tc_seccion9: $("#tc_seccion9").val(),
    peso_seccion9: $("#peso_seccion9").val(),
    talla_seccion9: $("#talla_seccion9").val(),
    diagnostico_preoperatorio_seccion9: $("#diagnostico_preoperatorio_seccion9").val(),
    cirugia_proyectada_seccion9: $("#cirugia_proyectada_seccion9").val(),
    tipo_cirugia_seccion9: $("#tipo_cirugia_seccion9").val(),
    estado_actual_paciente_seccion9: $("#estado_actual_paciente_seccion9").val(),
    vendaje_mpi_seccion9: $("#vendaje_mpi_seccion9").val(),
    tricotomia_seccion9: $("#tricotomia_seccion9").val(),
    protesis_seccion9: $("#protesis_seccion9").val(),
    maquillaje_seccion9: $("#maquillaje_seccion9").val(),
    marcado_seccion9: $("#marcado_seccion9").val(),
    ayuno_seccion9:$("#ayuno_seccion9").val(),
    alergia_seccion9: $("#alergia_seccion9").val(),
    patologias_relevantes_seccion9: $("#patologias_relevantes_seccion9").val(),
    estudios_preoperatorios_seccion9: $("#estudios_preoperatorios_seccion9").val(),
    valoracion_preoperatoria_seccion9: $("#valoracion_preoperatoria_seccion9").val(),
    sangre_reserva_seccion9: $("#sangre_reserva_seccion9").val(),
    grupo_rh_sanguineo_seccion9: $("#grupo_rh_sanguineo_seccion9").val(),
    observaciones_seccion9: $("#observaciones_seccion9").val(),
    enfermera_seccion9: $("#enfermera_seccion9").val(),
    turno_seccion9: $("#turno_seccion9").val(),
    sala_quirurgica_seccion9: $("#sala_quirurgica_seccion9").val(),
    time_out_seccion9: $("#time_out_seccion9").val(),
    razon_seccion9: $("#razon_seccion9").val(),
    cirugia_realizada_seccion9: $("#cirugia_realizada_seccion9").val(),
    cirujano_seccion9: $("#cirujano_seccion9").val(),
    termino_anestesia_seccion9: $("#termino_anestesia_seccion9").val(),
    anestesiologo_seccion9: $("#anestesiologo_seccion9").val(),
    instrumentista_seccion9: $("#instrumentista_seccion9").val(),
    primer_ayudante_seccion9: $("#primer_ayudante_seccion9").val(),
    segundo_ayudante_seccion9: $("#segundo_ayudante_seccion9").val(),
    circulante_seccion9: $("#circulante_seccion9").val(),
    inicio_anestesia_seccion9: $("#inicio_anestesia_seccion9").val(),
    tipo_anestesia_seccion9: $("#tipo_anestesia_seccion9").val(),
    inicio_cx_seccion9: $("#inicio_cx_seccion9").val(),
    termino_cx_seccion9: $("#termino_cx_seccion9").val(),
    egreso_sala_seccion9: $("#egreso_sala_seccion9").val(),
    medicamentos_1_seccion9: $("#medicamentos_1_seccion9").val(),
    medicamentos_2_seccion9: $("#medicamentos_2_seccion9").val(),
    medicamentos_3_seccion9: $("#medicamentos_3_seccion9").val(),
    medicamentos_4_seccion9: $("#medicamentos_4_seccion9").val(),
    medicamentos_5_seccion9: $("#medicamentos_5_seccion9").val(),
    medicamentos_6_seccion9: $("#medicamentos_6_seccion9").val(),
    medicamentos_dosis_1_seccion9: $("#medicamentos_dosis_1_seccion9").val(),
    medicamentos_dosis_2_seccion9: $("#medicamentos_dosis_2_seccion9").val(),
    medicamentos_dosis_3_seccion9: $("#medicamentos_dosis_3_seccion9").val(),
    medicamentos_dosis_4_seccion9: $("#medicamentos_dosis_4_seccion9").val(),
    medicamentos_dosis_5_seccion9: $("#medicamentos_dosis_5_seccion9").val(),
    medicamentos_dosis_6_seccion9: $("#medicamentos_dosis_6_seccion9").val(),
    medicamentos_via_1_seccion9: $("#medicamentos_via_1_seccion9").val(),
    medicamentos_via_2_seccion9: $("#medicamentos_via_2_seccion9").val(),
    medicamentos_via_3_seccion9: $("#medicamentos_via_3_seccion9").val(),
    medicamentos_via_4_seccion9: $("#medicamentos_via_4_seccion9").val(),
    medicamentos_via_5_seccion9: $("#medicamentos_via_5_seccion9").val(),
    medicamentos_via_6_seccion9: $("#medicamentos_via_6_seccion9").val(),    
    medicamentos_hora_1_seccion9: $("#medicamentos_hora_1_seccion9").val(),
    medicamentos_hora_2_seccion9: $("#medicamentos_hora_2_seccion9").val(),
    medicamentos_hora_3_seccion9: $("#medicamentos_hora_3_seccion9").val(),
    medicamentos_hora_4_seccion9: $("#medicamentos_hora_4_seccion9").val(),
    medicamentos_hora_5_seccion9: $("#medicamentos_hora_5_seccion9").val(),
    medicamentos_hora_6_seccion9: $("#medicamentos_hora_6_seccion9").val(),
    liquidos_1_seccion9: $("#liquidos_1_seccion9").val(),
    liquidos_2_seccion9: $("#liquidos_2_seccion9").val(),
    liquidos_3_seccion9: $("#liquidos_3_seccion9").val(),
    liquidos_4_seccion9: $("#liquidos_4_seccion9").val(),
    liquidos_5_seccion9: $("#liquidos_5_seccion9").val(),
    liquidos_6_seccion9: $("#liquidos_6_seccion9").val(),
    liquidos_volumen_1_seccion9: $("#liquidos_volumen_1_seccion9").val(),
    liquidos_volumen_2_seccion9: $("#liquidos_volumen_2_seccion9").val(),
    liquidos_volumen_3_seccion9: $("#liquidos_volumen_3_seccion9").val(),
    liquidos_volumen_4_seccion9: $("#liquidos_volumen_4_seccion9").val(),
    liquidos_volumen_5_seccion9: $("#liquidos_volumen_5_seccion9").val(),
    liquidos_volumen_6_seccion9: $("#liquidos_volumen_6_seccion9").val(),
    liquidos_hora_1_seccion9: $("#liquidos_hora_1_seccion9").val(),
    liquidos_hora_2_seccion9: $("#liquidos_hora_2_seccion9").val(),
    liquidos_hora_3_seccion9: $("#liquidos_hora_3_seccion9").val(),
    liquidos_hora_4_seccion9: $("#liquidos_hora_4_seccion9").val(),
    liquidos_hora_5_seccion9: $("#liquidos_hora_5_seccion9").val(),
    liquidos_hora_6_seccion9: $("#liquidos_hora_6_seccion9").val(),
    uresis_seccion9: $("#uresis_seccion9").val(),
    sangrado_seccion9: $("#sangrado_seccion9").val(),
    gasas_antes_seccion9: $("#gasas_antes_seccion9").val(),
    gasas_despues_seccion9: $("#gasas_despues_seccion9").val(),
    compresas_antes_seccion9: $("#compresas_antes_seccion9").val(),
    compresas_despues_seccion9: $("#compresas_despues_seccion9").val(),
    cotonoides_antes_seccion9: $("#cotonoides_antes_seccion9").val(),
    cotonoides_despues_seccion9: $("#cotonoides_despues_seccion9").val(),
    isopos_antes_seccion9: $("#isopos_antes_seccion9").val(),
    isopos_despues_seccion9: $("#isopos_despues_seccion9").val(),
    torundas_antes_seccion9: $("#torundas_antes_seccion9").val(),
    torundas_despues_seccion9: $("#torundas_despues_seccion9").val(),
    otros_antes_seccion9: $("#otros_antes_seccion9").val(),
    otros_despues_seccion9: $("#otros_despues_seccion9").val(),
    otros_2_antes_seccion9: $("#otros_2_antes_seccion9").val(),
    otros_2_despues_seccion9: $("#otros_2_despues_seccion9").val(),
    cuenta_completa_seccion9: $("#cuenta_completa_seccion9").val(),
    hora_seccion9:$("#hora_seccion9").val(),
    ta_ingreso_seccion9:$("#ta_ingreso_seccion9").val(),
    fc_ingreso_seccion9:$("#fc_ingreso_seccion9").val(),
    fr_ingreso_seccion9:$("#fr_ingreso_seccion9").val(),
    tc_ingreso_seccion9:$("#tc_ingreso_seccion9").val(),
    sa02_ingreso_seccion9:$("#sa02_ingreso_seccion9").val(),
    eva_ingreso_seccion9:$("#eva_ingreso_seccion9").val(),
    aldrete_ingreso_seccion9:$("#aldrete_ingreso_seccion9").val(),
    ta_15min_seccion9:$("#ta_15min_seccion9").val(),
    fc_15min_seccion9:$("#fc_15min_seccion9").val(),
    fr_15min_seccion9:$("#fr_15min_seccion9").val(),
    tc_15min_seccion9:$("#tc_15min_seccion9").val(),
    sa02_15min_seccion9:$("#sa02_15min_seccion9").val(),
    eva_15min_seccion9:$("#eva_15min_seccion9").val(),
    aldrete_15min_seccion9:$("#aldrete_15min_seccion9").val(),
    ta_30min_seccion9:$("#ta_30min_seccion9").val(),
    fc_30min_seccion9:$("#fc_30min_seccion9").val(),
    fr_30min_seccion9:$("#fr_30min_seccion9").val(),
    tc_30min_seccion9:$("#tc_30min_seccion9").val(),
    sa02_30min_seccion9:$("#sa02_30min_seccion9").val(),
    eva_30min_seccion9:$("#eva_30min_seccion9").val(),
    aldrete_30min_seccion9:$("#aldrete_30min_seccion9").val(),
    ta_45min_seccion9:$("#ta_45min_seccion9").val(),
    fc_45min_seccion9:$("#fc_45min_seccion9").val(),
    fr_45min_seccion9:$("#fr_45min_seccion9").val(),
    tc_45min_seccion9:$("#tc_45min_seccion9").val(),
    sa02_45min_seccion9:$("#sa02_45min_seccion9").val(),
    eva_45min_seccion9:$("#eva_45min_seccion9").val(),
    aldrete_45min_seccion9:$("#aldrete_45min_seccion9").val(),
    ta_60min_seccion9:$("#ta_60min_seccion9").val(),
    fc_60min_seccion9:$("#fc_60min_seccion9").val(),
    fr_60min_seccion9:$("#fr_60min_seccion9").val(),
    tc_60min_seccion9:$("#tc_60min_seccion9").val(),
    sa02_60min_seccion9:$("#sa02_60min_seccion9").val(),
    eva_60min_seccion9:$("#eva_60min_seccion9").val(),
    aldrete_60min_seccion9:$("#aldrete_60min_seccion9").val(),
    ta_60minmas_seccion9:$("#ta_60minmas_seccion9").val(),
    fc_60minmas_seccion9:$("#fc_60minmas_seccion9").val(),
    fr_60minmas_seccion9:$("#fr_60minmas_seccion9").val(),
    tc_60minmas_seccion9:$("#tc_60minmas_seccion9").val(),
    sa02_60minmas_seccion9:$("#sa02_60minmas_seccion9").val(),
    eva_60minmas_seccion9:$("#eva_60minmas_seccion9").val(),
    aldrete_60minmas_seccion9:$("#aldrete_60minmas_seccion9").val(),
    liquidos_via_1_seccion9:$("#liquidos_via_1_seccion9").val(),
    liquidos_via_2_seccion9:$("#liquidos_via_2_seccion9").val(),
    liquidos_via_3_seccion9:$("#liquidos_via_3_seccion9").val(),
    liquidos_via_4_seccion9:$("#liquidos_via_4_seccion9").val(),
    liquidos_via_5_seccion9:$("#liquidos_via_5_seccion9").val(),
    liquidos_via_6_seccion9:$("#liquidos_via_6_seccion9").val(),
    nota_quirurgica_seccion9:$("#nota_quirurgica_seccion9").val(),
    fecha_hora_cuidados_post_operatorios_seccion9:$("#fecha_hora_cuidados_post_operatorios_seccion9").val(),
    nota_recuperacion_seccion9:$("#nota_recuperacion_seccion9").val(),

     //seccion10
     id_seccion10: $("#id_seccion10").val(),
     medico_seccion10: $("#medico_seccion10").val(),
     diagnostico_seccion10: $("#diagnostico_seccion10").val(),
     dias_hospitalizacion_seccion10: $("#dias_hospitalizacion_seccion10").val(),
     fecha_seccion10: $("#fecha_seccion10").val(),
     cama_seccion10: $("#cama_seccion10").val(),
     peso_seccion10: $("#peso_seccion10").val(),
     talla_seccion10: $("#talla_seccion10").val(),
     alergia_seccion10:$("#alergia_seccion10").val(),
     tabla_7_1_seccion10:$("#tabla_7_1_seccion10").val(),
     tabla_7_2_seccion10:$("#tabla_7_2_seccion10").val(),
     tabla_7_3_seccion10:$("#tabla_7_3_seccion10").val(),
     tabla_7_4_seccion10:$("#tabla_7_4_seccion10").val(),
     tabla_7_5_seccion10:$("#tabla_7_5_seccion10").val(),
     tabla_7_6_seccion10:$("#tabla_7_6_seccion10").val(),
     tabla_7_7_seccion10:$("#tabla_7_7_seccion10").val(),
     tabla_7_8_seccion10:$("#tabla_7_8_seccion10").val(),
     tabla_7_9_seccion10:$("#tabla_7_9_seccion10").val(),
     tabla_7_10_seccion10:$("#tabla_7_10_seccion10").val(),
     tabla_7_11_seccion10:$("#tabla_7_11_seccion10").val(),
     tabla_7_12_seccion10:$("#tabla_7_12_seccion10").val(),
     tabla_7_13_seccion10:$("#tabla_7_13_seccion10").val(),
     tabla_8_1_seccion10:$("#tabla_8_1_seccion10").val(),
     tabla_8_2_seccion10:$("#tabla_8_2_seccion10").val(),
     tabla_8_3_seccion10:$("#tabla_8_3_seccion10").val(),
     tabla_8_4_seccion10:$("#tabla_8_4_seccion10").val(),
     tabla_8_5_seccion10:$("#tabla_8_5_seccion10").val(),
     tabla_8_6_seccion10:$("#tabla_8_6_seccion10").val(),
     tabla_8_7_seccion10:$("#tabla_8_7_seccion10").val(),
     tabla_8_8_seccion10:$("#tabla_8_8_seccion10").val(),
     tabla_8_9_seccion10:$("#tabla_8_9_seccion10").val(),
     tabla_8_10_seccion10:$("#tabla_8_10_seccion10").val(),
     tabla_8_11_seccion10:$("#tabla_8_11_seccion10").val(),
     tabla_8_12_seccion10:$("#tabla_8_12_seccion10").val(),
     tabla_8_3_seccion10:$("#tabla_8_13_seccion10").val(),
     tabla_9_1_seccion10:$("#tabla_9_1_seccion10").val(),
     tabla_9_2_seccion10:$("#tabla_9_2_seccion10").val(),
     tabla_9_3_seccion10:$("#tabla_9_3_seccion10").val(),
     tabla_9_4_seccion10:$("#tabla_9_4_seccion10").val(),
     tabla_9_5_seccion10:$("#tabla_9_5_seccion10").val(),
     tabla_9_6_seccion10:$("#tabla_9_6_seccion10").val(),
     tabla_9_7_seccion10:$("#tabla_9_7_seccion10").val(),
     tabla_9_8_seccion10:$("#tabla_9_8_seccion10").val(),
     tabla_9_9_seccion10:$("#tabla_9_9_seccion10").val(),
     tabla_9_10_seccion10:$("#tabla_9_10_seccion10").val(),
     tabla_9_11_seccion10:$("#tabla_9_11_seccion10").val(),
     tabla_9_12_seccion10:$("#tabla_9_12_seccion10").val(),
     tabla_9_13_seccion10:$("#tabla_9_13_seccion10").val(),
     tabla_10_1_seccion10:$("#tabla_10_1_seccion10").val(),
     tabla_10_2_seccion10:$("#tabla_10_2_seccion10").val(),
     tabla_10_3_seccion10:$("#tabla_10_3_seccion10").val(),
     tabla_10_4_seccion10:$("#tabla_10_4_seccion10").val(),
     tabla_10_5_seccion10:$("#tabla_10_5_seccion10").val(),
     tabla_10_6_seccion10:$("#tabla_10_6_seccion10").val(),
     tabla_10_7_seccion10:$("#tabla_10_7_seccion10").val(),
     tabla_10_8_seccion10:$("#tabla_10_8_seccion10").val(),
     tabla_10_9_seccion10:$("#tabla_10_9_seccion10").val(),
     tabla_10_10_seccion10:$("#tabla_10_10_seccion10").val(),
     tabla_10_11_seccion10:$("#tabla_10_11_seccion10").val(),
     tabla_10_12_seccion10:$("#tabla_10_12_seccion10").val(),
     tabla_10_13_seccion10:$("#tabla_10_13_seccion10").val(),
     tabla_11_1_seccion10:$("#tabla_11_1_seccion10").val(),
     tabla_11_2_seccion10:$("#tabla_11_2_seccion10").val(),
     tabla_11_3_seccion10:$("#tabla_11_3_seccion10").val(),
     tabla_11_4_seccion10:$("#tabla_11_4_seccion10").val(),
     tabla_11_5_seccion10:$("#tabla_11_5_seccion10").val(),
     tabla_11_6_seccion10:$("#tabla_11_6_seccion10").val(),
     tabla_11_7_seccion10:$("#tabla_11_7_seccion10").val(),
     tabla_11_8_seccion10:$("#tabla_11_8_seccion10").val(),
     tabla_11_9_seccion10:$("#tabla_11_9_seccion10").val(),
     tabla_11_10_seccion10:$("#tabla_11_10_seccion10").val(),
     tabla_11_11_seccion10:$("#tabla_11_11_seccion10").val(),
     tabla_11_12_seccion10:$("#tabla_11_12_seccion10").val(),
     tabla_11_13_seccion10:$("#tabla_11_13_seccion10").val(),
     tabla_12_1_seccion10:$("#tabla_12_1_seccion10").val(),
     tabla_12_2_seccion10:$("#tabla_12_2_seccion10").val(),
     tabla_12_3_seccion10:$("#tabla_12_3_seccion10").val(),
     tabla_12_4_seccion10:$("#tabla_12_4_seccion10").val(),
     tabla_12_5_seccion10:$("#tabla_12_5_seccion10").val(),
     tabla_12_6_seccion10:$("#tabla_12_6_seccion10").val(),
     tabla_12_7_seccion10:$("#tabla_12_7_seccion10").val(),
     tabla_12_8_seccion10:$("#tabla_12_8_seccion10").val(),
     tabla_12_9_seccion10:$("#tabla_12_9_seccion10").val(),
     tabla_12_10_seccion10:$("#tabla_12_10_seccion10").val(),
     tabla_12_11_seccion10:$("#tabla_12_11_seccion10").val(),
     tabla_12_12_seccion10:$("#tabla_12_12_seccion10").val(),
     tabla_12_13_seccion10:$("#tabla_12_13_seccion10").val(),
     tabla_13_1_seccion10:$("#tabla_13_1_seccion10").val(),
     tabla_13_2_seccion10:$("#tabla_13_2_seccion10").val(),
     tabla_13_3_seccion10:$("#tabla_13_3_seccion10").val(),
     tabla_13_4_seccion10:$("#tabla_13_4_seccion10").val(),
     tabla_13_5_seccion10:$("#tabla_13_5_seccion10").val(),
     tabla_13_6_seccion10:$("#tabla_13_6_seccion10").val(),
     tabla_13_7_seccion10:$("#tabla_13_7_seccion10").val(),
     tabla_13_8_seccion10:$("#tabla_13_8_seccion10").val(),
     tabla_13_9_seccion10:$("#tabla_13_9_seccion10").val(),
     tabla_13_10_seccion10:$("#tabla_13_10_seccion10").val(),
     tabla_13_11_seccion10:$("#tabla_13_11_seccion10").val(),
     tabla_13_12_seccion10:$("#tabla_13_12_seccion10").val(),
     tabla_13_13_seccion10:$("#tabla_13_13_seccion10").val(),
     tabla_14_1_seccion10:$("#tabla_14_1_seccion10").val(),
     tabla_14_2_seccion10:$("#tabla_14_2_seccion10").val(),
     tabla_14_3_seccion10:$("#tabla_14_3_seccion10").val(),
     tabla_14_4_seccion10:$("#tabla_14_4_seccion10").val(),
     tabla_14_5_seccion10:$("#tabla_14_5_seccion10").val(),
     tabla_14_6_seccion10:$("#tabla_14_6_seccion10").val(),
     tabla_14_7_seccion10:$("#tabla_14_7_seccion10").val(),
     tabla_14_8_seccion10:$("#tabla_14_8_seccion10").val(),
     tabla_14_9_seccion10:$("#tabla_14_9_seccion10").val(),
     tabla_14_10_seccion10:$("#tabla_14_10_seccion10").val(),
     tabla_14_11_seccion10:$("#tabla_14_11_seccion10").val(),
     tabla_14_12_seccion10:$("#tabla_14_12_seccion10").val(),
     tabla_14_13_seccion10:$("#tabla_14_13_seccion10").val(),
     tabla_15_1_seccion10:$("#tabla_15_1_seccion10").val(),
     tabla_15_2_seccion10:$("#tabla_15_2_seccion10").val(),
     tabla_15_3_seccion10:$("#tabla_15_3_seccion10").val(),
     tabla_15_4_seccion10:$("#tabla_15_4_seccion10").val(),
     tabla_15_5_seccion10:$("#tabla_15_5_seccion10").val(),
     tabla_15_6_seccion10:$("#tabla_15_6_seccion10").val(),
     tabla_15_7_seccion10:$("#tabla_15_7_seccion10").val(),
     tabla_15_8_seccion10:$("#tabla_15_8_seccion10").val(),
     tabla_15_9_seccion10:$("#tabla_15_9_seccion10").val(),
     tabla_15_10_seccion10:$("#tabla_15_10_seccion10").val(),
     tabla_15_11_seccion10:$("#tabla_15_11_seccion10").val(),
     tabla_15_12_seccion10:$("#tabla_15_12_seccion10").val(),
     tabla_15_13_seccion10:$("#tabla_15_13_seccion10").val(),
     tabla_16_1_seccion10:$("#tabla_16_1_seccion10").val(),
     tabla_16_2_seccion10:$("#tabla_16_2_seccion10").val(),
     tabla_16_3_seccion10:$("#tabla_16_3_seccion10").val(),
     tabla_16_4_seccion10:$("#tabla_16_4_seccion10").val(),
     tabla_16_5_seccion10:$("#tabla_16_5_seccion10").val(),
     tabla_16_6_seccion10:$("#tabla_16_6_seccion10").val(),
     tabla_16_7_seccion10:$("#tabla_16_7_seccion10").val(),
     tabla_16_8_seccion10:$("#tabla_16_8_seccion10").val(),
     tabla_16_9_seccion10:$("#tabla_16_9_seccion10").val(),
     tabla_16_10_seccion10:$("#tabla_16_10_seccion10").val(),
     tabla_16_11_seccion10:$("#tabla_16_11_seccion10").val(),
     tabla_16_12_seccion10:$("#tabla_16_12_seccion10").val(),
     tabla_16_13_seccion10:$("#tabla_16_13_seccion10").val(),
     tabla_17_1_seccion10:$("#tabla_17_1_seccion10").val(),
     tabla_17_2_seccion10:$("#tabla_17_2_seccion10").val(),
     tabla_17_3_seccion10:$("#tabla_17_3_seccion10").val(),
     tabla_17_4_seccion10:$("#tabla_17_4_seccion10").val(),
     tabla_17_5_seccion10:$("#tabla_17_5_seccion10").val(),
     tabla_17_6_seccion10:$("#tabla_17_6_seccion10").val(),
     tabla_17_7_seccion10:$("#tabla_17_7_seccion10").val(),
     tabla_17_8_seccion10:$("#tabla_17_8_seccion10").val(),
     tabla_17_9_seccion10:$("#tabla_17_9_seccion10").val(),
     tabla_17_10_seccion10:$("#tabla_17_10_seccion10").val(),
     tabla_17_11_seccion10:$("#tabla_17_11_seccion10").val(),
     tabla_17_12_seccion10:$("#tabla_17_12_seccion10").val(),
     tabla_17_13_seccion10:$("#tabla_17_13_seccion10").val(),
     tabla_18_1_seccion10:$("#tabla_18_1_seccion10").val(),
     tabla_18_2_seccion10:$("#tabla_18_2_seccion10").val(),
     tabla_18_3_seccion10:$("#tabla_18_3_seccion10").val(),
     tabla_18_4_seccion10:$("#tabla_18_4_seccion10").val(),
     tabla_18_5_seccion10:$("#tabla_18_5_seccion10").val(),
     tabla_18_6_seccion10:$("#tabla_18_6_seccion10").val(),
     tabla_18_7_seccion10:$("#tabla_18_7_seccion10").val(),
     tabla_18_8_seccion10:$("#tabla_18_8_seccion10").val(),
     tabla_18_9_seccion10:$("#tabla_18_9_seccion10").val(),
     tabla_18_10_seccion10:$("#tabla_18_10_seccion10").val(),
     tabla_18_11_seccion10:$("#tabla_18_11_seccion10").val(),
     tabla_18_12_seccion10:$("#tabla_18_12_seccion10").val(),
     tabla_18_13_seccion10:$("#tabla_18_13_seccion10").val(),
     tabla_19_1_seccion10:$("#tabla_19_1_seccion10").val(),
     tabla_19_2_seccion10:$("#tabla_19_2_seccion10").val(),
     tabla_19_3_seccion10:$("#tabla_19_3_seccion10").val(),
     tabla_19_4_seccion10:$("#tabla_19_4_seccion10").val(),
     tabla_19_5_seccion10:$("#tabla_19_5_seccion10").val(),
     tabla_19_6_seccion10:$("#tabla_19_6_seccion10").val(),
     tabla_19_7_seccion10:$("#tabla_19_7_seccion10").val(),
     tabla_19_8_seccion10:$("#tabla_19_8_seccion10").val(),
     tabla_19_9_seccion10:$("#tabla_19_9_seccion10").val(),
     tabla_19_10_seccion10:$("#tabla_19_10_seccion10").val(),
     tabla_19_11_seccion10:$("#tabla_19_11_seccion10").val(),
     tabla_19_12_seccion10:$("#tabla_19_12_seccion10").val(),
     tabla_19_13_seccion10:$("#tabla_19_13_seccion10").val(),
     tabla_20_1_seccion10:$("#tabla_20_1_seccion10").val(),
     tabla_20_2_seccion10:$("#tabla_20_2_seccion10").val(),
     tabla_20_3_seccion10:$("#tabla_20_3_seccion10").val(),
     tabla_20_4_seccion10:$("#tabla_20_4_seccion10").val(),
     tabla_20_5_seccion10:$("#tabla_20_5_seccion10").val(),
     tabla_20_6_seccion10:$("#tabla_20_6_seccion10").val(),
     tabla_20_7_seccion10:$("#tabla_20_7_seccion10").val(),
     tabla_20_8_seccion10:$("#tabla_20_8_seccion10").val(),
     tabla_20_9_seccion10:$("#tabla_20_9_seccion10").val(),
     tabla_20_10_seccion10:$("#tabla_20_10_seccion10").val(),
     tabla_20_11_seccion10:$("#tabla_20_11_seccion10").val(),
     tabla_20_12_seccion10:$("#tabla_20_12_seccion10").val(),
     tabla_20_13_seccion10:$("#tabla_20_13_seccion10").val(),
     tabla_21_1_seccion10:$("#tabla_21_1_seccion10").val(),
     tabla_21_2_seccion10:$("#tabla_21_2_seccion10").val(),
     tabla_21_3_seccion10:$("#tabla_21_3_seccion10").val(),
     tabla_21_4_seccion10:$("#tabla_21_4_seccion10").val(),
     tabla_21_5_seccion10:$("#tabla_21_5_seccion10").val(),
     tabla_21_6_seccion10:$("#tabla_21_6_seccion10").val(),
     tabla_21_7_seccion10:$("#tabla_21_7_seccion10").val(),
     tabla_21_8_seccion10:$("#tabla_21_8_seccion10").val(),
     tabla_21_9_seccion10:$("#tabla_21_9_seccion10").val(),
     tabla_21_10_seccion10:$("#tabla_21_10_seccion10").val(),
     tabla_21_11_seccion10:$("#tabla_21_11_seccion10").val(),
     tabla_21_12_seccion10:$("#tabla_21_12_seccion10").val(),
     tabla_21_13_seccion10:$("#tabla_21_13_seccion10").val(),
     tabla_22_1_seccion10:$("#tabla_22_1_seccion10").val(),
     tabla_22_2_seccion10:$("#tabla_22_2_seccion10").val(),
     tabla_22_3_seccion10:$("#tabla_22_3_seccion10").val(),
     tabla_22_4_seccion10:$("#tabla_22_4_seccion10").val(),
     tabla_22_5_seccion10:$("#tabla_22_5_seccion10").val(),
     tabla_22_6_seccion10:$("#tabla_22_6_seccion10").val(),
     tabla_22_7_seccion10:$("#tabla_22_7_seccion10").val(),
     tabla_22_8_seccion10:$("#tabla_22_8_seccion10").val(),
     tabla_22_9_seccion10:$("#tabla_22_9_seccion10").val(),
     tabla_22_10_seccion10:$("#tabla_22_10_seccion10").val(),
     tabla_22_11_seccion10:$("#tabla_22_11_seccion10").val(),
     tabla_22_12_seccion10:$("#tabla_22_12_seccion10").val(),
     tabla_22_13_seccion10:$("#tabla_22_13_seccion10").val(),
     tabla_23_1_seccion10:$("#tabla_23_1_seccion10").val(),
     tabla_23_2_seccion10:$("#tabla_23_2_seccion10").val(),
     tabla_23_3_seccion10:$("#tabla_23_3_seccion10").val(),
     tabla_23_4_seccion10:$("#tabla_23_4_seccion10").val(),
     tabla_23_5_seccion10:$("#tabla_23_5_seccion10").val(),
     tabla_23_6_seccion10:$("#tabla_23_6_seccion10").val(),
     tabla_23_7_seccion10:$("#tabla_23_7_seccion10").val(),
     tabla_23_8_seccion10:$("#tabla_23_8_seccion10").val(),
     tabla_23_9_seccion10:$("#tabla_23_9_seccion10").val(),
     tabla_23_10_seccion10:$("#tabla_23_10_seccion10").val(),
     tabla_23_11_seccion10:$("#tabla_23_11_seccion10").val(),
     tabla_23_12_seccion10:$("#tabla_23_12_seccion10").val(),
     tabla_23_13_seccion10:$("#tabla_23_13_seccion10").val(),
     tabla_24_1_seccion10:$("#tabla_24_1_seccion10").val(),
     tabla_24_2_seccion10:$("#tabla_24_2_seccion10").val(),
     tabla_24_3_seccion10:$("#tabla_24_3_seccion10").val(),
     tabla_24_4_seccion10:$("#tabla_24_4_seccion10").val(),
     tabla_24_5_seccion10:$("#tabla_24_5_seccion10").val(),
     tabla_24_6_seccion10:$("#tabla_24_6_seccion10").val(),
     tabla_24_7_seccion10:$("#tabla_24_7_seccion10").val(),
     tabla_24_8_seccion10:$("#tabla_24_8_seccion10").val(),
     tabla_24_9_seccion10:$("#tabla_24_9_seccion10").val(),
     tabla_24_10_seccion10:$("#tabla_24_10_seccion10").val(),
     tabla_24_11_seccion10:$("#tabla_24_11_seccion10").val(),
     tabla_24_12_seccion10:$("#tabla_24_12_seccion10").val(),
     tabla_24_13_seccion10:$("#tabla_24_13_seccion10").val(),
     tabla_1_1_seccion10:$("#tabla_1_1_seccion10").val(),
     tabla_1_2_seccion10:$("#tabla_1_2_seccion10").val(),
     tabla_1_3_seccion10:$("#tabla_1_3_seccion10").val(),
     tabla_1_4_seccion10:$("#tabla_1_4_seccion10").val(),
     tabla_1_5_seccion10:$("#tabla_1_5_seccion10").val(),
     tabla_1_6_seccion10:$("#tabla_1_6_seccion10").val(),
     tabla_1_7_seccion10:$("#tabla_1_7_seccion10").val(),
     tabla_1_8_seccion10:$("#tabla_1_8_seccion10").val(),
     tabla_1_9_seccion10:$("#tabla_1_9_seccion10").val(),
     tabla_1_10_seccion10:$("#tabla_1_10_seccion10").val(),
     tabla_1_11_seccion10:$("#tabla_1_11_seccion10").val(),
     tabla_1_12_seccion10:$("#tabla_1_12_seccion10").val(),
     tabla_1_13_seccion10:$("#tabla_1_13_seccion10").val(),
     tabla_2_1_seccion10:$("#tabla_2_1_seccion10").val(),
     tabla_2_2_seccion10:$("#tabla_2_2_seccion10").val(),
     tabla_2_3_seccion10:$("#tabla_2_3_seccion10").val(),
     tabla_2_4_seccion10:$("#tabla_2_4_seccion10").val(),
     tabla_2_5_seccion10:$("#tabla_2_5_seccion10").val(),
     tabla_2_6_seccion10:$("#tabla_2_6_seccion10").val(),
     tabla_2_7_seccion10:$("#tabla_2_7_seccion10").val(),
     tabla_2_8_seccion10:$("#tabla_2_8_seccion10").val(),
     tabla_2_9_seccion10:$("#tabla_2_9_seccion10").val(),
     tabla_2_10_seccion10:$("#tabla_2_10_seccion10").val(),
     tabla_2_11_seccion10:$("#tabla_2_11_seccion10").val(),
     tabla_2_12_seccion10:$("#tabla_2_12_seccion10").val(),
     tabla_2_13_seccion10:$("#tabla_2_13_seccion10").val(),
     tabla_3_1_seccion10:$("#tabla_3_1_seccion10").val(),
     tabla_3_2_seccion10:$("#tabla_3_2_seccion10").val(),
     tabla_3_3_seccion10:$("#tabla_3_3_seccion10").val(),
     tabla_3_4_seccion10:$("#tabla_3_4_seccion10").val(),
     tabla_3_5_seccion10:$("#tabla_3_5_seccion10").val(),
     tabla_3_6_seccion10:$("#tabla_3_6_seccion10").val(),
     tabla_3_7_seccion10:$("#tabla_3_7_seccion10").val(),
     tabla_3_8_seccion10:$("#tabla_3_8_seccion10").val(),
     tabla_3_9_seccion10:$("#tabla_3_9_seccion10").val(),
     tabla_3_10_seccion10:$("#tabla_3_10_seccion10").val(),
     tabla_3_11_seccion10:$("#tabla_3_11_seccion10").val(),
     tabla_3_12_seccion10:$("#tabla_3_12_seccion10").val(),
     tabla_3_13_seccion10:$("#tabla_3_13_seccion10").val(),
     tabla_4_1_seccion10:$("#tabla_4_1_seccion10").val(),
     tabla_4_2_seccion10:$("#tabla_4_2_seccion10").val(),
     tabla_4_3_seccion10:$("#tabla_4_3_seccion10").val(),
     tabla_4_4_seccion10:$("#tabla_4_4_seccion10").val(),
     tabla_4_5_seccion10:$("#tabla_4_5_seccion10").val(),
     tabla_4_6_seccion10:$("#tabla_4_6_seccion10").val(),
     tabla_4_7_seccion10:$("#tabla_4_7_seccion10").val(),
     tabla_4_8_seccion10:$("#tabla_4_8_seccion10").val(),
     tabla_4_9_seccion10:$("#tabla_4_9_seccion10").val(),
     tabla_4_10_seccion10:$("#tabla_4_10_seccion10").val(),
     tabla_4_11_seccion10:$("#tabla_4_11_seccion10").val(),
     tabla_4_12_seccion10:$("#tabla_4_12_seccion10").val(),
     tabla_4_13_seccion10:$("#tabla_4_13_seccion10").val(),
     tabla_5_1_seccion10:$("#tabla_5_1_seccion10").val(),
     tabla_5_2_seccion10:$("#tabla_5_2_seccion10").val(),
     tabla_5_3_seccion10:$("#tabla_5_3_seccion10").val(),
     tabla_5_4_seccion10:$("#tabla_5_4_seccion10").val(),
     tabla_5_5_seccion10:$("#tabla_5_5_seccion10").val(),
     tabla_5_6_seccion10:$("#tabla_5_6_seccion10").val(),
     tabla_5_7_seccion10:$("#tabla_5_7_seccion10").val(),
     tabla_5_8_seccion10:$("#tabla_5_8_seccion10").val(),
     tabla_5_9_seccion10:$("#tabla_5_9_seccion10").val(),
     tabla_5_10_seccion10:$("#tabla_5_10_seccion10").val(),
     tabla_5_11_seccion10:$("#tabla_5_11_seccion10").val(),
     tabla_5_12_seccion10:$("#tabla_5_12_seccion10").val(),
     tabla_5_13_seccion10:$("#tabla_5_13_seccion10").val(),
     tabla_6_1_seccion10:$("#tabla_6_1_seccion10").val(),
     tabla_6_2_seccion10:$("#tabla_6_2_seccion10").val(),
     tabla_6_3_seccion10:$("#tabla_6_3_seccion10").val(),
     tabla_6_4_seccion10:$("#tabla_6_4_seccion10").val(),
     tabla_6_5_seccion10:$("#tabla_6_5_seccion10").val(),
     tabla_6_6_seccion10:$("#tabla_6_6_seccion10").val(),
     tabla_6_7_seccion10:$("#tabla_6_7_seccion10").val(),
     tabla_6_8_seccion10:$("#tabla_6_8_seccion10").val(),
     tabla_6_9_seccion10:$("#tabla_6_9_seccion10").val(),
     tabla_6_10_seccion10:$("#tabla_6_10_seccion10").val(),
     tabla_6_11_seccion10:$("#tabla_6_11_seccion10").val(),
     tabla_6_12_seccion10:$("#tabla_6_12_seccion10").val(),
     tabla_6_13_seccion10:$("#tabla_6_13_seccion10").val(),
     t_arterial_1_seccion10:$("#t_arterial_1_seccion10").val(),
     t_arterial_2_seccion10:$("#t_arterial_2_seccion10").val(),
     t_arterial_3_seccion10:$("#t_arterial_3_seccion10").val(),
     t_arterial_4_seccion10:$("#t_arterial_4_seccion10").val(),
     t_arterial_5_seccion10:$("#t_arterial_5_seccion10").val(),
     t_arterial_6_seccion10:$("#t_arterial_6_seccion10").val(),
     t_arterial_7_seccion10:$("#t_arterial_7_seccion10").val(),
     t_arterial_8_seccion10:$("#t_arterial_8_seccion10").val(),
     t_arterial_9_seccion10:$("#t_arterial_9_seccion10").val(),
     t_arterial_10_seccion10:$("#t_arterial_10_seccion10").val(),
     t_arterial_11_seccion10:$("#t_arterial_11_seccion10").val(),
     t_arterial_12_seccion10:$("#t_arterial_12_seccion10").val(),
     f_resp_1_seccion10:$("#f_resp_1_seccion10").val(),
     f_resp_2_seccion10:$("#f_resp_2_seccion10").val(),
     f_resp_3_seccion10:$("#f_resp_3_seccion10").val(),
     f_resp_4_seccion10:$("#f_resp_4_seccion10").val(),
     f_resp_5_seccion10:$("#f_resp_5_seccion10").val(),
     f_resp_6_seccion10:$("#f_resp_6_seccion10").val(),
     f_resp_7_seccion10:$("#f_resp_7_seccion10").val(),
     f_resp_8_seccion10:$("#f_resp_8_seccion10").val(),
     f_resp_9_seccion10:$("#f_resp_9_seccion10").val(),
     f_resp_10_seccion10:$("#f_resp_10_seccion10").val(),
     f_resp_11_seccion10:$("#f_resp_11_seccion10").val(),
     f_resp_12_seccion10:$("#f_resp_12_seccion10").val(),
     perimetro_1_seccion10:$("#perimetro_1_seccion10").val(),
     perimetro_2_seccion10:$("#perimetro_2_seccion10").val(),
     perimetro_3_seccion10:$("#perimetro_3_seccion10").val(),
     perimetro_4_seccion10:$("#perimetro_4_seccion10").val(),
     perimetro_5_seccion10:$("#perimetro_5_seccion10").val(),
     perimetro_6_seccion10:$("#perimetro_6_seccion10").val(),
     perimetro_7_seccion10:$("#perimetro_7_seccion10").val(),
     perimetro_8_seccion10:$("#perimetro_8_seccion10").val(),
     perimetro_9_seccion10:$("#perimetro_9_seccion10").val(),
     perimetro_10_seccion10:$("#perimetro_10_seccion10").val(),
     perimetro_11_seccion10:$("#perimetro_11_seccion10").val(),
     perimetro_12_seccion10:$("#perimetro_12_seccion10").val(),
     formula_1_seccion10:$("#formula_1_seccion10").val(),
     formula_2_seccion10:$("#formula_2_seccion10").val(),
     formula_3_seccion10:$("#formula_3_seccion10").val(),
     formula_4_seccion10:$("#formula_4_seccion10").val(),
     formula_5_seccion10:$("#formula_5_seccion10").val(),
     formula_6_seccion10:$("#formula_6_seccion10").val(),
     formula_7_seccion10:$("#formula_7_seccion10").val(),
     formula_8_seccion10:$("#formula_8_seccion10").val(),
     formula_9_seccion10:$("#formula_9_seccion10").val(),
     formula_10_seccion10:$("#formula_10_seccion10").val(),
     formula_11_seccion10:$("#formula_11_seccion10").val(),
     formula_12_seccion10:$("#formula_12_seccion10").val(),
     dieta_1_seccion10:$("#dieta_1_seccion10").val(),
     dieta_2_seccion10:$("#dieta_2_seccion10").val(),
     dieta_3_seccion10:$("#dieta_3_seccion10").val(),
     lib_orales_1_seccion10:$("#lib_orales_1_seccion10").val(),
     lib_orales_2_seccion10:$("#lib_orales_2_seccion10").val(),
     lib_orales_3_seccion10:$("#lib_orales_3_seccion10").val(),
     lib_orales_4_seccion10:$("#lib_orales_4_seccion10").val(),
     lib_orales_5_seccion10:$("#lib_orales_5_seccion10").val(),
     lib_orales_6_seccion10:$("#lib_orales_6_seccion10").val(),
     lib_orales_7_seccion10:$("#lib_orales_7_seccion10").val(),
     lib_orales_8_seccion10:$("#lib_orales_8_seccion10").val(),
     lib_orales_9_seccion10:$("#lib_orales_9_seccion10").val(),
     lib_orales_10_seccion10:$("#lib_orales_10_seccion10").val(),
     lib_orales_11_seccion10:$("#lib_orales_11_seccion10").val(),
     lib_orales_12_seccion10:$("#lib_orales_12_seccion10").val(),
     total_1_seccion10:$("#total_1_seccion10").val(),
     total_2_seccion10:$("#total_2_seccion10").val(),
     total_3_seccion10:$("#total_3_seccion10").val(),
     liquidos_parentales_1_seccion10:$("#liquidos_parentales_1_seccion10").val(),
     liquidos_parentales_2_seccion10:$("#liquidos_parentales_2_seccion10").val(),
     liquidos_parentales_3_seccion10:$("#liquidos_parentales_3_seccion10").val(),
     electrolitos_1_seccion10:$("#electrolitos_1_seccion10").val(),
     electrolitos_2_seccion10:$("#electrolitos_2_seccion10").val(),
     electrolitos_3_seccion10:$("#electrolitos_3_seccion10").val(),
     total_electrolitos_1_seccion10:$("#total_electrolitos_1_seccion10").val(),
     total_electrolitos_2_seccion10:$("#total_electrolitos_2_seccion10").val(),
     total_electrolitos_3_seccion10:$("#total_electrolitos_3_seccion10").val(),
     uresis_1_seccion10: $("#uresis_1_seccion10").val(),
     uresis_2_seccion10: $("#uresis_2_seccion10").val(),
     uresis_3_seccion10: $("#uresis_3_seccion10").val(),
     evacuaciones_1_seccion10: $("#evacuaciones_1_seccion10").val(),
     evacuaciones_2_seccion10: $("#evacuaciones_2_seccion10").val(),
     evacuaciones_3_seccion10: $("#evacuaciones_3_seccion10").val(),
     lab_1_seccion10:$("#lab_1_seccion10").val(),
     lab_2_seccion10:$("#lab_2_seccion10").val(),
     lab_3_seccion10:$("#lab_3_seccion10").val(),
     lab_4_seccion10:$("#lab_4_seccion10").val(),
     lab_5_seccion10:$("#lab_5_seccion10").val(),
     lab_6_seccion10:$("#lab_6_seccion10").val(),
     lab_7_seccion10:$("#lab_7_seccion10").val(),
     lab_8_seccion10:$("#lab_8_seccion10").val(),
     lab_9_seccion10:$("#lab_9_seccion10").val(),
     lab_10_seccion10:$("#lab_10_seccion10").val(),
     lab_11_seccion10:$("#lab_11_seccion10").val(),
     lab_12_seccion10:$("#lab_12_seccion10").val(),
     reactivos_1_seccion10:$("#reactivos_1_seccion10").val(),
     reactivos_2_seccion10:$("#reactivos_2_seccion10").val(),
     reactivos_3_seccion10:$("#reactivos_3_seccion10").val(),
     reactivos_4_seccion10:$("#reactivos_4_seccion10").val(),
     reactivos_5_seccion10:$("#reactivos_5_seccion10").val(),
     reactivos_6_seccion10:$("#reactivos_6_seccion10").val(),
     reactivos_7_seccion10:$("#reactivos_7_seccion10").val(),
     reactivos_8_seccion10:$("#reactivos_8_seccion10").val(),
     reactivos_9_seccion10:$("#reactivos_9_seccion10").val(),
     reactivos_10_seccion10:$("#reactivos_10_seccion10").val(),
     reactivos_11_seccion10:$("#reactivos_11_seccion10").val(),
     reactivos_12_seccion10:$("#reactivos_12_seccion10").val(),
     otros_estudios_1_seccion10:$("#otros_estudios_1_seccion10").val(),
     otros_estudios_2_seccion10:$("#otros_estudios_2_seccion10").val(),
     otros_estudios_3_seccion10:$("#otros_estudios_3_seccion10").val(),
     otros_estudios_4_seccion10:$("#otros_estudios_4_seccion10").val(),
     otros_estudios_5_seccion10:$("#otros_estudios_5_seccion10").val(),
     otros_estudios_6_seccion10:$("#otros_estudios_6_seccion10").val(),
     otros_estudios_7_seccion10:$("#otros_estudios_7_seccion10").val(),
     otros_estudios_8_seccion10:$("#otros_estudios_8_seccion10").val(),
     otros_estudios_9_seccion10:$("#otros_estudios_9_seccion10").val(),
     otros_estudios_10_seccion10:$("#otros_estudios_10_seccion10").val(),
     otros_estudios_11_seccion10:$("#otros_estudios_11_seccion10").val(),
     otros_estudios_12_seccion10:$("#otros_estudios_12_seccion10").val(),
     cateter_corto_dolor_seccion10:$("#cateter_corto_dolor_seccion10").val(),
     cateter_corto_calor_seccion10:$("#cateter_corto_calor_seccion10").val(),
     cateter_corto_rubor_seccion10:$("#cateter_corto_rubor_seccion10").val(),
     cateter_corto_numero_seccion10:$("#cateter_corto_numero_seccion10").val(),
     cateter_corto_numero_punciones_seccion10:$("#cateter_corto_numero_punciones_seccion10").val(),
     cateter_central_dolor_seccion10:$("#cateter_central_dolor_seccion10").val(),
     cateter_central_calor_seccion10:$("#cateter_central_calor_seccion10").val(),
     cateter_central_rubor_seccion10:$("#cateter_central_rubor_seccion10").val(),
     cateter_corto_dolor_seccion10:$("#cateter_corto_recanaliza_seccion10").val(),
     cateter_central_recanaliza_seccion10:$("#cateter_central_recanaliza_seccion10").val(),
     dieta_seccion10: $("#dieta_seccion10").val(),
     fecha_1_seccion10:$("#fecha_1_seccion10").val(),
     fecha_2_seccion10:$("#fecha_2_seccion10").val(),
     fecha_3_seccion10:$("#fecha_3_seccion10").val(),
     fecha_4_seccion10:$("#fecha_4_seccion10").val(),
     fecha_5_seccion10:$("#fecha_5_seccion10").val(),
     fecha_6_seccion10:$("#fecha_6_seccion10").val(),
     fecha_7_seccion10:$("#fecha_7_seccion10").val(),
     fecha_8_seccion10:$("#fecha_8_seccion10").val(),
     fecha_9_seccion10:$("#fecha_9_seccion10").val(),
     fecha_10_seccion10:$("#fecha_10_seccion10").val(),
     medicamentos_1_seccion10:$("#medicamentos_1_seccion10").val(),
     medicamentos_2_seccion10:$("#medicamentos_2_seccion10").val(),
     medicamentos_3_seccion10:$("#medicamentos_3_seccion10").val(),
     medicamentos_4_seccion10:$("#medicamentos_4_seccion10").val(),
     medicamentos_5_seccion10:$("#medicamentos_5_seccion10").val(),
     medicamentos_6_seccion10:$("#medicamentos_6_seccion10").val(),
     medicamentos_7_seccion10:$("#medicamentos_7_seccion10").val(),
     medicamentos_8_seccion10:$("#medicamentos_8_seccion10").val(),
     medicamentos_9_seccion10:$("#medicamentos_9_seccion10").val(),
     medicamentos_10_seccion10:$("#medicamentos_10_seccion10").val(),
     dosis_1_seccion10:$("#dosis_1_seccion10").val(),
     dosis_2_seccion10:$("#dosis_2_seccion10").val(),
     dosis_3_seccion10:$("#dosis_3_seccion10").val(),
     dosis_4_seccion10:$("#dosis_4_seccion10").val(),
     dosis_5_seccion10:$("#dosis_5_seccion10").val(),
     dosis_6_seccion10:$("#dosis_6_seccion10").val(),
     dosis_7_seccion10:$("#dosis_7_seccion10").val(),
     dosis_8_seccion10:$("#dosis_8_seccion10").val(),
     dosis_9_seccion10:$("#dosis_9_seccion10").val(),
     dosis_10_seccion10:$("#dosis_10_seccion10").val(),
     via_1_seccion10:$("#via_1_seccion10").val(),
     via_2_seccion10:$("#via_2_seccion10").val(),
     via_3_seccion10:$("#via_3_seccion10").val(),
     via_4_seccion10:$("#via_4_seccion10").val(),
     via_5_seccion10:$("#via_5_seccion10").val(),
     via_6_seccion10:$("#via_6_seccion10").val(),
     via_7_seccion10:$("#via_7_seccion10").val(),
     via_8_seccion10:$("#via_8_seccion10").val(),
     via_9_seccion10:$("#via_9_seccion10").val(),
     via_10_seccion10:$("#via_10_seccion10").val(),
     horarios_1_seccion10:$("#horarios_1_seccion10").val(),
     horarios_2_seccion10:$("#horarios_2_seccion10").val(),
     horarios_3_seccion10:$("#horarios_3_seccion10").val(),
     horarios_4_seccion10:$("#horarios_4_seccion10").val(),
     horarios_5_seccion10:$("#horarios_5_seccion10").val(),
     horarios_6_seccion10:$("#horarios_6_seccion10").val(),
     horarios_7_seccion10:$("#horarios_7_seccion10").val(),
     horarios_8_seccion10:$("#horarios_8_seccion10").val(),
     horarios_9_seccion10:$("#horarios_9_seccion10").val(),
     horarios_10_seccion10:$("#horarios_10_seccion10").val(),
     hora_nota_1_seccion10:$("#hora_nota_1_seccion10").val(),
    hora_nota_2_seccion10:$("#hora_nota_2_seccion10").val(),
    hora_nota_3_seccion10:$("#hora_nota_3_seccion10").val(),
    nota_enfermeria_1_seccion10:$("#nota_enfermeria_1_seccion10").val(),
    nota_enfermeria_2_seccion10:$("#nota_enfermeria_2_seccion10").val(),
    nota_enfermeria_3_seccion10:$("#nota_enfermeria_3_seccion10").val(),
    nota_enfermeria_4_seccion10:$("#nota_enfermeria_4_seccion10").val(),
    nota_enfermeria_5_seccion10:$("#nota_enfermeria_5_seccion10").val(),
    nota_enfermeria_6_seccion10:$("#nota_enfermeria_6_seccion10").val(),
    nota_enfermeria_7_seccion10:$("#nota_enfermeria_7_seccion10").val(),
    nota_enfermeria_8_seccion10:$("#nota_enfermeria_8_seccion10").val(),
    nota_enfermeria_9_seccion10:$("#nota_enfermeria_9_seccion10").val(),
    nota_enfermeria_10_seccion10:$("#nota_enfermeria_10_seccion10").val(),
    nota_enfermeria_11_seccion10:$("#nota_enfermeria_11_seccion10").val(),
    nota_enfermeria_12_seccion10:$("#nota_enfermeria_12_seccion10").val(),
    nota_enfermeria_13_seccion10:$("#nota_enfermeria_13_seccion10").val(),
    nota_enfermeria_14_seccion10:$("#nota_enfermeria_14_seccion10").val(),
    nota_enfermeria_15_seccion10:$("#nota_enfermeria_15_seccion10").val(),
    nota_enfermeria_16_seccion10:$("#nota_enfermeria_16_seccion10").val(),
    nota_enfermeria_17_seccion10:$("#nota_enfermeria_17_seccion10").val(),
    nota_enfermeria_18_seccion10:$("#nota_enfermeria_18_seccion10").val(),
    nota_enfermeria_19_seccion10:$("#nota_enfermeria_19_seccion10").val(),
    nota_enfermeria_20_seccion10:$("#nota_enfermeria_20_seccion10").val(),
    nota_enfermeria_21_seccion10:$("#nota_enfermeria_21_seccion10").val(),
    nota_enfermeria_22_seccion10:$("#nota_enfermeria_22_seccion10").val(),
    nota_enfermeria_23_seccion10:$("#nota_enfermeria_23_seccion10").val(),
    nota_enfermeria_24_seccion10:$("#nota_enfermeria_24_seccion10").val(),
    nota_enfermeria_25_seccion10:$("#nota_enfermeria_25_seccion10").val(),
    nota_enfermeria_26_seccion10:$("#nota_enfermeria_26_seccion10").val(),
    nota_enfermeria_27_seccion10:$("#nota_enfermeria_27_seccion10").val(),
    enfermera_nota_seccion10:$("#enfermera_nota_seccion10").val(),
    firma_nota_seccion10:$("#firma_nota_seccion10").val(),

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
    id:id
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
        /*$('#nombreEmergencia').val(data.responseData.emerNombre)
        $('#relacionEmergencia').val(data.responseData.emerRelacion)
        $('#telEmegencia').val(data.responseData.emerTel)*/
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
    $("#padece_alergia_material_seccion3").val(data.responseData.padece_alergia_material_seccion3)
    
    if(data.postOperatorio.length > 0){
      $("#notapostoperatoria_id").val(data.postOperatorio[0].id)
      $('#habitacion_seccion4').val(data.postOperatorio[0].habitacion_seccion4),
      $('#diagnostico_pre_operatorio_seccion4').val(data.postOperatorio[0].diagnostico_pre_operatorio_seccion4),
      $('#operacion_planeada_seccion4').val(data.postOperatorio[0].operacion_planeada_seccion4),
      $('#diagnostico_post_operatorio_seccion4').val(data.postOperatorio[0].diagnostico_post_operatorio_seccion4),
      $('#operacion_realizada_seccion4').val(data.postOperatorio[0].operacion_realizada_seccion4),
      $('#descripcion_tecnica_quirurgica_seccion4').val(data.postOperatorio[0].descripcion_tecnica_quirurgica_seccion4),
      $('#hallazgos_transoperatorios_seccion4').val(data.postOperatorio[0].hallazgos_transoperatorios_seccion4),
      $('#reporte_gasas_compresas_seccion4').val(data.postOperatorio[0].reporte_gasas_compresas_seccion4),
      $('#incidentes_accidentes_seccion4').val(data.postOperatorio[0].incidentes_accidentes_seccion4),
      $('#sangrado_seccion4').val(data.postOperatorio[0].sangrado_seccion4),
      $('#estudios_servicios_auxiliares_seccion4').val(data.postOperatorio[0].estudios_servicios_auxiliares_seccion4),
      $("#nombre_anestesiologo_seccion4").val(data.postOperatorio[0].nombre_anestesiologo_seccion4),
      $('#nombre_ayudante1_seccion4').val(data.postOperatorio[0].nombre_ayudante1_seccion4),
      $('#nombre_ayudante2_seccion4').val(data.postOperatorio[0].nombre_ayudante2_seccion4),
      $('#nombre_instrumentista_seccion4').val(data.postOperatorio[0].nombre_instrumentista_seccion4),
      $('#nombre_enfermera_circulante_seccion4').val(data.postOperatorio[0].nombre_enfermera_circulante_seccion4),
      $('#estado_postquirurgico_inmediato_seccion4').val(data.postOperatorio[0].estado_postquirurgico_inmediato_seccion4),
      $('#pronostico_seccion4').val(data.postOperatorio[0].pronostico_seccion4),
      $("#envio_piezas_seccion4").val(data.postOperatorio[0].envio_piezas_seccion4)
      $('#otros_hallazgos_seccion4').val(data.postOperatorio[0].otros_hallazgos_seccion4)
      $('#nombre_cirujano_seccion4').val(data.postOperatorio[0].nombre_cirujano_seccion4)
    }

    if(data.indicaciones.length > 0){
      //seccion5
      $("#indicaciones_id").val(data.indicaciones[0].id),
      $("#indicaciones_seccion5").val(data.indicaciones[0].indicaciones_seccion5)
    }
    

    if(data.notaMedica.length > 0){
      //seccion6
      $("#nota_medica_seccion6").val(data.notaMedica[0].nota_medica_seccion6)
      $("#nota_medica_id_seccion6").val(data.notaMedica[0].id)
    }

    if(data.notaEgreso.length > 0){
      //seccion7
      $("#fechaIngreso_seccion7").val(data.notaEgreso[0].fechaIngreso_seccion7),
      $("#fechaEgreso_seccion7").val(data.notaEgreso[0].fechaEgreso_seccion7),
      $("#motivoEgreso_seccion7").val(data.notaEgreso[0].motivoEgreso_seccion7),
      $("#diagnosticoFinal_seccion7").val(data.notaEgreso[0].diagnosticoFinal_seccion7),
      $("#resumenClinico_seccion7").val(data.notaEgreso[0].resumenClinico_seccion7),
      $("#problemasClinicos_seccion7").val(data.notaEgreso[0].problemasClinicos_seccion7),
      $("#plan_seccion7").val(data.notaEgreso[0].plan_seccion7),
      $("#recomendacionesVigilancia_seccion7").val(data.notaEgreso[0].recomendacionesVigilancia_seccion7)
      $("#notaEgreso_id_seccion7").val(data.notaEgreso[0].id)
    }

    if(data.seguimientoQuirurgico.length > 0){
      //seccion8
      $("#resumen_seccion8").val(data.seguimientoQuirurgico[0].resumen_seccion8)
      $("#resumen_id_seccion8").val(data.seguimientoQuirurgico[0].id)
    }

    if(data.hojaEnfermeriaUnidadQuirurgica.length > 0){
      //seccion9

      $("#id_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].id)
      $("#fdn_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fdn_seccion9),
      $("#edad_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].edad_seccion9),
      $("#habitacion_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].habitacion_seccion9),
      $("#medico_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medico_seccion9)
      $("#signos_vitales_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].signos_vitales_seccion9)
      $("#ta_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_seccion9)
      $("#fc_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_seccion9)
      $("#fr_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_seccion9)
      $("#tc_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_seccion9)
      $("#peso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].peso_seccion9)
      $("#talla_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].talla_seccion9)
      $("#diagnostico_preoperatorio_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].diagnostico_preoperatorio_seccion9)
      $("#cirugia_proyectada_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cirugia_proyectada_seccion9)
      $("#tipo_cirugia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tipo_cirugia_seccion9)
      $("#estado_actual_paciente_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].estado_actual_paciente_seccion9)
      $("#vendaje_mpi_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].vendaje_mpi_seccion9)
      $("#tricotomia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tricotomia_seccion9)
      $("#protesis_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].protesis_seccion9)
      $("#maquillaje_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].maquillaje_seccion9)
      $("#marcado_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].marcado_seccion9)
      $("#ayuno_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ayuno_seccion9)
      $("#alergia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].alergia_seccion9)
      $("#patologias_relevantes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].patologias_relevantes_seccion9)
      $("#estudios_preoperatorios_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].estudios_preoperatorios_seccion9)
      $("#valoracion_preoperatoria_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].valoracion_preoperatoria_seccion9)
      $("#sangre_reserva_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sangre_reserva_seccion9)
      $("#grupo_rh_sanguineo_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].grupo_rh_sanguineo_seccion9)
      $("#observaciones_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].observaciones_seccion9)
      $("#enfermera_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].enfermera_seccion9)
      $("#turno_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].turno_seccion9)
      $("#sala_quirurgica_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sala_quirurgica_seccion9)
      $("#time_out_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].time_out_seccion9)
      $("#razon_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].razon_seccion9)
      $("#cirugia_realizada_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cirugia_realizada_seccion9)
      $("#cirujano_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cirujano_seccion9)
      $("#termino_anestesia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].termino_anestesia_seccion9)
      $("#anestesiologo_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].anestesiologo_seccion9)
      $("#instrumentista_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].instrumentista_seccion9)
      $("#primer_ayudante_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].primer_ayudante_seccion9)
      $("#segundo_ayudante_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].segundo_ayudante_seccion9)
      $("#circulante_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].circulante_seccion9)
      $("#inicio_anestesia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].inicio_anestesia_seccion9)
      $("#tipo_anestesia_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tipo_anestesia_seccion9)
      $("#inicio_cx_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].inicio_cx_seccion9)
      $("#termino_cx_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].termino_cx_seccion9)
      $("#egreso_sala_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].egreso_sala_seccion9)
      $("#medicamentos_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_1_seccion9)
      $("#medicamentos_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_2_seccion9)
      $("#medicamentos_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_3_seccion9)
      $("#medicamentos_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_4_seccion9)
      $("#medicamentos_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_5_seccion9)
      $("#medicamentos_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_6_seccion9)
      $("#medicamentos_dosis_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_1_seccion9)
      $("#medicamentos_dosis_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_2_seccion9)
      $("#medicamentos_dosis_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_3_seccion9)
      $("#medicamentos_dosis_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_4_seccion9)
      $("#medicamentos_dosis_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_5_seccion9)
      $("#medicamentos_dosis_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_dosis_6_seccion9)
      $("#medicamentos_via_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_1_seccion9)
      $("#medicamentos_via_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_2_seccion9)
      $("#medicamentos_via_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_3_seccion9)
      $("#medicamentos_via_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_4_seccion9)
      $("#medicamentos_via_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_5_seccion9)
      $("#medicamentos_via_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_via_6_seccion9)    
      $("#medicamentos_hora_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_1_seccion9)
      $("#medicamentos_hora_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_2_seccion9)
      $("#medicamentos_hora_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_3_seccion9)
      $("#medicamentos_hora_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_4_seccion9)
      $("#medicamentos_hora_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_5_seccion9)
      $("#medicamentos_hora_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].medicamentos_hora_6_seccion9)
      $("#liquidos_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_1_seccion9)
      $("#liquidos_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_2_seccion9)
      $("#liquidos_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_3_seccion9)
      $("#liquidos_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_4_seccion9)
      $("#liquidos_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_5_seccion9)
      $("#liquidos_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_6_seccion9)
      $("#liquidos_volumen_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_1_seccion9)
      $("#liquidos_volumen_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_2_seccion9)
      $("#liquidos_volumen_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_3_seccion)
      $("#liquidos_volumen_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_4_seccion9)
      $("#liquidos_volumen_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_5_seccion9)
      $("#liquidos_volumen_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_volumen_6_seccion9)
      $("#liquidos_hora_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_1_seccion9)
      $("#liquidos_hora_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_2_seccion9)
      $("#liquidos_hora_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_3_seccion9)
      $("#liquidos_hora_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_4_seccion9)
      $("#liquidos_hora_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_5_seccion9)
      $("#liquidos_hora_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_hora_6_seccion9)
      $("#uresis_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].uresis_seccion9)
      $("#sangrado_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sangrado_seccion9)
      $("#gasas_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].gasas_antes_seccion9)
      $("#gasas_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].gasas_despues_seccion9)
      $("#compresas_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].compresas_antes_seccion9)
      $("#compresas_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].compresas_despues_seccion9)
      $("#cotonoides_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cotonoides_antes_seccion9)
      $("#cotonoides_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cotonoides_despues_seccion9)
      $("#isopos_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].isopos_antes_seccion9)
      $("#isopos_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].isopos_despues_seccion9)
      $("#torundas_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].torundas_antes_seccion9)
      $("#torundas_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].torundas_despues_seccion9)
      $("#otros_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].otros_antes_seccion9)
      $("#otros_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].otros_despues_seccion9)
      $("#otros_2_antes_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].otros_2_antes_seccion9)
      $("#otros_2_despues_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].otros_2_despues_seccion9)
      $("#cuenta_completa_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].cuenta_completa_seccion9)
      $("#hora_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].hora_seccion9)
      $("#ta_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_ingreso_seccion9)
      $("#fc_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_ingreso_seccion9)
      $("#fr_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_ingreso_seccion9)
      $("#tc_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_ingreso_seccion9)
      $("#sa02_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_ingreso_seccion9)
      $("#eva_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_ingreso_seccion9)
      $("#aldrete_ingreso_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_ingreso_seccion9)
      $("#ta_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_15min_seccion9)
      $("#fc_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_15min_seccion9)
      $("#fr_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_15min_seccion9)
      $("#tc_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_15min_seccion9)
      $("#sa02_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_15min_seccion9)
      $("#eva_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_15min_seccion9)
      $("#aldrete_15min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_15min_seccion9)
      $("#ta_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_30min_seccion9)
      $("#fc_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_30min_seccion9)
      $("#fr_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_30min_seccion9)
      $("#tc_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_30min_seccion9)
      $("#sa02_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_30min_seccion9)
      $("#eva_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_30min_seccion9)
      $("#aldrete_30min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_30min_seccion9)
      $("#ta_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_45min_seccion9)
      $("#fc_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_45min_seccion9)
      $("#fr_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_45min_seccion9)
      $("#tc_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_45min_seccion9)
      $("#sa02_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_45min_seccion9)
      $("#eva_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_45min_seccion9)
      $("#aldrete_45min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_45min_seccion9)
      $("#ta_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_60min_seccion9)
      $("#fc_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_60min_seccion9)
      $("#fr_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_60min_seccion9)
      $("#tc_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_60min_seccion9)
      $("#sa02_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_60min_seccion9)
      $("#eva_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_60min_seccion9)
      $("#aldrete_60min_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_60min_seccion9)
      $("#ta_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].ta_60minmas_seccion9)
      $("#fc_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fc_60minmas_seccion9)
      $("#fr_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fr_60minmas_seccion9)
      $("#tc_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].tc_60minmas_seccion9)
      $("#sa02_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].sa02_60minmas_seccion9)
      $("#eva_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].eva_60minmas_seccion9)
      $("#aldrete_60minmas_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].aldrete_60minmas_seccion9)
      $("#liquidos_via_1_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_1_seccion9)
      $("#liquidos_via_2_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_2_seccion9)
      $("#liquidos_via_3_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_3_seccion9)
      $("#liquidos_via_4_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_4_seccion9)
      $("#liquidos_via_5_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_5_seccion9)
      $("#liquidos_via_6_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].liquidos_via_6_seccion9)
      $("#nota_quirurgica_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].nota_quirurgica_seccion9)
      $("#fecha_hora_cuidados_post_operatorios_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].fecha_hora_cuidados_post_operatorios_seccion9)
      $("#nota_recuperacion_seccion9").val(data.hojaEnfermeriaUnidadQuirurgica[0].nota_recuperacion_seccion9)

    }

    if(data.hojaEnfermeria.length > 0){
      $("#id_seccion10").val(data.hojaEnfermeria[0].id)
      $("#medico_seccion10").val(data.hojaEnfermeria[0].medico_seccion10),
      $("#diagnostico_seccion10").val(data.hojaEnfermeria[0].diagnostico_seccion10),
      $("#dias_hospitalizacion_seccion10").val(data.hojaEnfermeria[0].dias_hospitalizacion_seccion10),
      $("#fecha_seccion10").val(data.hojaEnfermeria[0].fecha_seccion10),
      $("#cama_seccion10").val(data.hojaEnfermeria[0].cama_seccion10),
      $("#peso_seccion10").val(data.hojaEnfermeria[0].peso_seccion10),
      $("#talla_seccion10").val(data.hojaEnfermeria[0].talla_seccion10),
      $("#alergia_seccion10").val(data.hojaEnfermeria[0].alergia_seccion10),
      $("#tabla_7_1_seccion10").val(data.hojaEnfermeria[0].tabla_7_1_seccion10),
      $("#tabla_7_2_seccion10").val(data.hojaEnfermeria[0].tabla_7_2_seccion10),
      $("#tabla_7_3_seccion10").val(data.hojaEnfermeria[0].tabla_7_3_seccion10),
      $("#tabla_7_4_seccion10").val(data.hojaEnfermeria[0].tabla_7_4_seccion10),
      $("#tabla_7_5_seccion10").val(data.hojaEnfermeria[0].tabla_7_5_seccion10),
      $("#tabla_7_6_seccion10").val(data.hojaEnfermeria[0].tabla_7_6_seccion10),
      $("#tabla_7_7_seccion10").val(data.hojaEnfermeria[0].tabla_7_7_seccion10),
      $("#tabla_7_8_seccion10").val(data.hojaEnfermeria[0].tabla_7_8_seccion10),
      $("#tabla_7_9_seccion10").val(data.hojaEnfermeria[0].tabla_7_9_seccion10),
      $("#tabla_7_10_seccion10").val(data.hojaEnfermeria[0].tabla_7_10_seccion10),
      $("#tabla_7_11_seccion10").val(data.hojaEnfermeria[0].tabla_7_11_seccion10),
      $("#tabla_7_12_seccion10").val(data.hojaEnfermeria[0].tabla_7_12_seccion10),
      $("#tabla_7_13_seccion10").val(data.hojaEnfermeria[0].tabla_7_13_seccion10),
      $("#tabla_8_1_seccion10").val(data.hojaEnfermeria[0].tabla_8_1_seccion10),
      $("#tabla_8_2_seccion10").val(data.hojaEnfermeria[0].tabla_8_2_seccion10),
      $("#tabla_8_3_seccion10").val(data.hojaEnfermeria[0].tabla_8_3_seccion10),
      $("#tabla_8_4_seccion10").val(data.hojaEnfermeria[0].tabla_8_4_seccion10),
      $("#tabla_8_5_seccion10").val(data.hojaEnfermeria[0].tabla_8_5_seccion10),
      $("#tabla_8_6_seccion10").val(data.hojaEnfermeria[0].tabla_8_6_seccion10),
      $("#tabla_8_7_seccion10").val(data.hojaEnfermeria[0].tabla_8_7_seccion10),
      $("#tabla_8_8_seccion10").val(data.hojaEnfermeria[0].tabla_8_8_seccion10),
      $("#tabla_8_9_seccion10").val(data.hojaEnfermeria[0].tabla_8_9_seccion10),
      $("#tabla_8_10_seccion10").val(data.hojaEnfermeria[0].tabla_8_10_seccion10),
      $("#tabla_8_11_seccion10").val(data.hojaEnfermeria[0].tabla_8_11_seccion10),
      $("#tabla_8_12_seccion10").val(data.hojaEnfermeria[0].tabla_8_12_seccion10),
      $("#tabla_8_13_seccion10").val(data.hojaEnfermeria[0].tabla_8_13_seccion10),
      $("#tabla_9_1_seccion10").val(data.hojaEnfermeria[0].tabla_9_1_seccion10),
      $("#tabla_9_2_seccion10").val(data.hojaEnfermeria[0].tabla_9_2_seccion10),
      $("#tabla_9_3_seccion10").val(data.hojaEnfermeria[0].tabla_9_3_seccion10),
      $("#tabla_9_4_seccion10").val(data.hojaEnfermeria[0].tabla_9_4_seccion10),
      $("#tabla_9_5_seccion10").val(data.hojaEnfermeria[0].tabla_9_5_seccion10),
      $("#tabla_9_6_seccion10").val(data.hojaEnfermeria[0].tabla_9_6_seccion10),
      $("#tabla_9_7_seccion10").val(data.hojaEnfermeria[0].tabla_9_7_seccion10),
      $("#tabla_9_8_seccion10").val(data.hojaEnfermeria[0].tabla_9_8_seccion10),
      $("#tabla_9_9_seccion10").val(data.hojaEnfermeria[0].tabla_9_9_seccion10),
      $("#tabla_9_10_seccion10").val(data.hojaEnfermeria[0].tabla_9_10_seccion10),
      $("#tabla_9_11_seccion10").val(data.hojaEnfermeria[0].tabla_9_11_seccion10),
      $("#tabla_9_12_seccion10").val(data.hojaEnfermeria[0].tabla_9_12_seccion10),
      $("#tabla_9_13_seccion10").val(data.hojaEnfermeria[0].tabla_9_13_seccion10),
      $("#tabla_10_1_seccion10").val(data.hojaEnfermeria[0].tabla_10_1_seccion10),
      $("#tabla_10_2_seccion10").val(data.hojaEnfermeria[0].tabla_10_2_seccion10),
      $("#tabla_10_3_seccion10").val(data.hojaEnfermeria[0].tabla_10_3_seccion10),
      $("#tabla_10_4_seccion10").val(data.hojaEnfermeria[0].tabla_10_4_seccion10),
      $("#tabla_10_5_seccion10").val(data.hojaEnfermeria[0].tabla_10_5_seccion10),
      $("#tabla_10_6_seccion10").val(data.hojaEnfermeria[0].tabla_10_6_seccion10),
      $("#tabla_10_7_seccion10").val(data.hojaEnfermeria[0].tabla_10_7_seccion10),
      $("#tabla_10_8_seccion10").val(data.hojaEnfermeria[0].tabla_10_8_seccion10),
      $("#tabla_10_9_seccion10").val(data.hojaEnfermeria[0].tabla_10_9_seccion10),
      $("#tabla_10_10_seccion10").val(data.hojaEnfermeria[0].tabla_10_10_seccion10),
      $("#tabla_10_11_seccion10").val(data.hojaEnfermeria[0].tabla_10_11_seccion10),
      $("#tabla_10_12_seccion10").val(data.hojaEnfermeria[0].tabla_10_12_seccion10),
      $("#tabla_10_13_seccion10").val(data.hojaEnfermeria[0].tabla_10_13_seccion10),
      $("#tabla_11_1_seccion10").val(data.hojaEnfermeria[0].tabla_11_1_seccion10),
      $("#tabla_11_2_seccion10").val(data.hojaEnfermeria[0].tabla_11_2_seccion10),
      $("#tabla_11_3_seccion10").val(data.hojaEnfermeria[0].tabla_11_3_seccion10),
      $("#tabla_11_4_seccion10").val(data.hojaEnfermeria[0].tabla_11_4_seccion10),
      $("#tabla_11_5_seccion10").val(data.hojaEnfermeria[0].tabla_11_5_seccion10),
      $("#tabla_11_6_seccion10").val(data.hojaEnfermeria[0].tabla_11_6_seccion10),
      $("#tabla_11_7_seccion10").val(data.hojaEnfermeria[0].tabla_11_7_seccion10),
      $("#tabla_11_8_seccion10").val(data.hojaEnfermeria[0].tabla_11_8_seccion10),
      $("#tabla_11_9_seccion10").val(data.hojaEnfermeria[0].tabla_11_9_seccion10),
      $("#tabla_11_10_seccion10").val(data.hojaEnfermeria[0].tabla_11_10_seccion10),
      $("#tabla_11_11_seccion10").val(data.hojaEnfermeria[0].tabla_11_11_seccion10),
      $("#tabla_11_12_seccion10").val(data.hojaEnfermeria[0].tabla_11_12_seccion10),
      $("#tabla_11_13_seccion10").val(data.hojaEnfermeria[0].tabla_11_13_seccion10),
      $("#tabla_12_1_seccion10").val(data.hojaEnfermeria[0].tabla_12_1_seccion10),
      $("#tabla_12_2_seccion10").val(data.hojaEnfermeria[0].tabla_12_2_seccion10),
      $("#tabla_12_3_seccion10").val(data.hojaEnfermeria[0].tabla_12_3_seccion10),
      $("#tabla_12_4_seccion10").val(data.hojaEnfermeria[0].tabla_12_4_seccion10),
      $("#tabla_12_5_seccion10").val(data.hojaEnfermeria[0].tabla_12_5_seccion10),
      $("#tabla_12_6_seccion10").val(data.hojaEnfermeria[0].tabla_12_6_seccion10),
      $("#tabla_12_7_seccion10").val(data.hojaEnfermeria[0].tabla_12_7_seccion10),
      $("#tabla_12_8_seccion10").val(data.hojaEnfermeria[0].tabla_12_8_seccion10),
      $("#tabla_12_9_seccion10").val(data.hojaEnfermeria[0].tabla_12_9_seccion10),
      $("#tabla_12_10_seccion10").val(data.hojaEnfermeria[0].tabla_12_10_seccion10),
      $("#tabla_12_11_seccion10").val(data.hojaEnfermeria[0].tabla_12_11_seccion10),
      $("#tabla_12_12_seccion10").val(data.hojaEnfermeria[0].tabla_12_12_seccion10),
      $("#tabla_12_13_seccion10").val(data.hojaEnfermeria[0].tabla_12_13_seccion10),
      $("#tabla_13_1_seccion10").val(data.hojaEnfermeria[0].tabla_13_1_seccion10),
      $("#tabla_13_2_seccion10").val(data.hojaEnfermeria[0].tabla_13_2_seccion10),
      $("#tabla_13_3_seccion10").val(data.hojaEnfermeria[0].tabla_13_3_seccion10),
      $("#tabla_13_4_seccion10").val(data.hojaEnfermeria[0].tabla_13_4_seccion10),
      $("#tabla_13_5_seccion10").val(data.hojaEnfermeria[0].tabla_13_5_seccion10),
      $("#tabla_13_6_seccion10").val(data.hojaEnfermeria[0].tabla_13_6_seccion10),
      $("#tabla_13_7_seccion10").val(data.hojaEnfermeria[0].tabla_13_7_seccion10),
      $("#tabla_13_8_seccion10").val(data.hojaEnfermeria[0].tabla_13_8_seccion10),
      $("#tabla_13_9_seccion10").val(data.hojaEnfermeria[0].tabla_13_9_seccion10),
      $("#tabla_13_10_seccion10").val(data.hojaEnfermeria[0].tabla_13_10_seccion10),
      $("#tabla_13_11_seccion10").val(data.hojaEnfermeria[0].tabla_13_11_seccion10),
      $("#tabla_13_12_seccion10").val(data.hojaEnfermeria[0].tabla_13_12_seccion10),
      $("#tabla_13_13_seccion10").val(data.hojaEnfermeria[0].tabla_13_13_seccion10),
      $("#tabla_14_1_seccion10").val(data.hojaEnfermeria[0].tabla_14_1_seccion10),
      $("#tabla_14_2_seccion10").val(data.hojaEnfermeria[0].tabla_14_2_seccion10),
      $("#tabla_14_3_seccion10").val(data.hojaEnfermeria[0].tabla_14_3_seccion10),
      $("#tabla_14_4_seccion10").val(data.hojaEnfermeria[0].tabla_14_4_seccion10),
      $("#tabla_14_5_seccion10").val(data.hojaEnfermeria[0].tabla_14_5_seccion10),
      $("#tabla_14_6_seccion10").val(data.hojaEnfermeria[0].tabla_14_6_seccion10),
      $("#tabla_14_7_seccion10").val(data.hojaEnfermeria[0].tabla_14_7_seccion10),
      $("#tabla_14_8_seccion10").val(data.hojaEnfermeria[0].tabla_14_8_seccion10),
      $("#tabla_14_9_seccion10").val(data.hojaEnfermeria[0].tabla_14_9_seccion10),
      $("#tabla_14_10_seccion10").val(data.hojaEnfermeria[0].tabla_14_10_seccion10),
      $("#tabla_14_11_seccion10").val(data.hojaEnfermeria[0].tabla_14_11_seccion10),
      $("#tabla_14_12_seccion10").val(data.hojaEnfermeria[0].tabla_14_12_seccion10),
      $("#tabla_14_13_seccion10").val(data.hojaEnfermeria[0].tabla_14_13_seccion10),
      $("#tabla_15_1_seccion10").val(data.hojaEnfermeria[0].tabla_15_1_seccion10),
      $("#tabla_15_2_seccion10").val(data.hojaEnfermeria[0].tabla_15_2_seccion10),
      $("#tabla_15_3_seccion10").val(data.hojaEnfermeria[0].tabla_15_3_seccion10),
      $("#tabla_15_4_seccion10").val(data.hojaEnfermeria[0].tabla_15_4_seccion10),
      $("#tabla_15_5_seccion10").val(data.hojaEnfermeria[0].tabla_15_5_seccion10),
      $("#tabla_15_6_seccion10").val(data.hojaEnfermeria[0].tabla_15_6_seccion10),
      $("#tabla_15_7_seccion10").val(data.hojaEnfermeria[0].tabla_15_7_seccion10),
      $("#tabla_15_8_seccion10").val(data.hojaEnfermeria[0].tabla_15_8_seccion10),
      $("#tabla_15_9_seccion10").val(data.hojaEnfermeria[0].tabla_15_9_seccion10),
      $("#tabla_15_10_seccion10").val(data.hojaEnfermeria[0].tabla_15_10_seccion10),
      $("#tabla_15_11_seccion10").val(data.hojaEnfermeria[0].tabla_15_11_seccion10),
      $("#tabla_15_12_seccion10").val(data.hojaEnfermeria[0].tabla_15_12_seccion10),
      $("#tabla_15_13_seccion10").val(data.hojaEnfermeria[0].tabla_15_13_seccion10),
      $("#tabla_16_1_seccion10").val(data.hojaEnfermeria[0].tabla_16_1_seccion10),
      $("#tabla_16_2_seccion10").val(data.hojaEnfermeria[0].tabla_16_2_seccion10),
      $("#tabla_16_3_seccion10").val(data.hojaEnfermeria[0].tabla_16_3_seccion10),
      $("#tabla_16_4_seccion10").val(data.hojaEnfermeria[0].tabla_16_4_seccion10),
      $("#tabla_16_5_seccion10").val(data.hojaEnfermeria[0].tabla_16_5_seccion10),
      $("#tabla_16_6_seccion10").val(data.hojaEnfermeria[0].tabla_16_6_seccion10),
      $("#tabla_16_7_seccion10").val(data.hojaEnfermeria[0].tabla_16_7_seccion10),
      $("#tabla_16_8_seccion10").val(data.hojaEnfermeria[0].tabla_16_8_seccion10),
      $("#tabla_16_9_seccion10").val(data.hojaEnfermeria[0].tabla_16_9_seccion10),
      $("#tabla_16_10_seccion10").val(data.hojaEnfermeria[0].tabla_16_10_seccion10),
      $("#tabla_16_11_seccion10").val(data.hojaEnfermeria[0].tabla_16_11_seccion10),
      $("#tabla_16_12_seccion10").val(data.hojaEnfermeria[0].tabla_16_12_seccion10),
      $("#tabla_16_13_seccion10").val(data.hojaEnfermeria[0].tabla_16_13_seccion10),
      $("#tabla_17_1_seccion10").val(data.hojaEnfermeria[0].tabla_17_1_seccion10),
      $("#tabla_17_2_seccion10").val(data.hojaEnfermeria[0].tabla_17_2_seccion10),
      $("#tabla_17_3_seccion10").val(data.hojaEnfermeria[0].tabla_17_3_seccion10),
      $("#tabla_17_4_seccion10").val(data.hojaEnfermeria[0].tabla_17_4_seccion10),
      $("#tabla_17_5_seccion10").val(data.hojaEnfermeria[0].tabla_17_5_seccion10),
      $("#tabla_17_6_seccion10").val(data.hojaEnfermeria[0].tabla_17_6_seccion10),
      $("#tabla_17_7_seccion10").val(data.hojaEnfermeria[0].tabla_17_7_seccion10),
      $("#tabla_17_8_seccion10").val(data.hojaEnfermeria[0].tabla_17_8_seccion10),
      $("#tabla_17_9_seccion10").val(data.hojaEnfermeria[0].tabla_17_9_seccion10),
      $("#tabla_17_10_seccion10").val(data.hojaEnfermeria[0].tabla_17_10_seccion10),
      $("#tabla_17_11_seccion10").val(data.hojaEnfermeria[0].tabla_17_11_seccion10),
      $("#tabla_17_12_seccion10").val(data.hojaEnfermeria[0].tabla_17_12_seccion10),
      $("#tabla_17_13_seccion10").val(data.hojaEnfermeria[0].tabla_17_13_seccion10),
      $("#tabla_18_1_seccion10").val(data.hojaEnfermeria[0].tabla_18_1_seccion10),
      $("#tabla_18_2_seccion10").val(data.hojaEnfermeria[0].tabla_18_2_seccion10),
      $("#tabla_18_3_seccion10").val(data.hojaEnfermeria[0].tabla_18_3_seccion10),
      $("#tabla_18_4_seccion10").val(data.hojaEnfermeria[0].tabla_18_4_seccion10),
      $("#tabla_18_5_seccion10").val(data.hojaEnfermeria[0].tabla_18_5_seccion10),
      $("#tabla_18_6_seccion10").val(data.hojaEnfermeria[0].tabla_18_6_seccion10),
      $("#tabla_18_7_seccion10").val(data.hojaEnfermeria[0].tabla_18_7_seccion10),
      $("#tabla_18_8_seccion10").val(data.hojaEnfermeria[0].tabla_18_8_seccion10),
      $("#tabla_18_9_seccion10").val(data.hojaEnfermeria[0].tabla_18_9_seccion10),
      $("#tabla_18_10_seccion10").val(data.hojaEnfermeria[0].tabla_18_10_seccion10),
      $("#tabla_18_11_seccion10").val(data.hojaEnfermeria[0].tabla_18_11_seccion10),
      $("#tabla_18_12_seccion10").val(data.hojaEnfermeria[0].tabla_18_12_seccion10),
      $("#tabla_18_13_seccion10").val(data.hojaEnfermeria[0].tabla_18_13_seccion10),
      $("#tabla_19_1_seccion10").val(data.hojaEnfermeria[0].tabla_19_1_seccion10),
      $("#tabla_19_2_seccion10").val(data.hojaEnfermeria[0].tabla_19_2_seccion10),
      $("#tabla_19_3_seccion10").val(data.hojaEnfermeria[0].tabla_19_3_seccion10),
      $("#tabla_19_4_seccion10").val(data.hojaEnfermeria[0].tabla_19_4_seccion10),
      $("#tabla_19_5_seccion10").val(data.hojaEnfermeria[0].tabla_19_5_seccion10),
      $("#tabla_19_6_seccion10").val(data.hojaEnfermeria[0].tabla_19_6_seccion10),
      $("#tabla_19_7_seccion10").val(data.hojaEnfermeria[0].tabla_19_7_seccion10),
      $("#tabla_19_8_seccion10").val(data.hojaEnfermeria[0].tabla_19_8_seccion10),
      $("#tabla_19_9_seccion10").val(data.hojaEnfermeria[0].tabla_19_9_seccion10),
      $("#tabla_19_10_seccion10").val(data.hojaEnfermeria[0].tabla_19_10_seccion10),
      $("#tabla_19_11_seccion10").val(data.hojaEnfermeria[0].tabla_19_11_seccion10),
      $("#tabla_19_12_seccion10").val(data.hojaEnfermeria[0].tabla_19_12_seccion10),
      $("#tabla_19_13_seccion10").val(data.hojaEnfermeria[0].tabla_19_13_seccion10),
      $("#tabla_20_1_seccion10").val(data.hojaEnfermeria[0].tabla_20_1_seccion10),
      $("#tabla_20_2_seccion10").val(data.hojaEnfermeria[0].tabla_20_2_seccion10),
      $("#tabla_20_3_seccion10").val(data.hojaEnfermeria[0].tabla_20_3_seccion10),
      $("#tabla_20_4_seccion10").val(data.hojaEnfermeria[0].tabla_20_4_seccion10),
      $("#tabla_20_5_seccion10").val(data.hojaEnfermeria[0].tabla_20_5_seccion10),
      $("#tabla_20_6_seccion10").val(data.hojaEnfermeria[0].tabla_20_6_seccion10),
      $("#tabla_20_7_seccion10").val(data.hojaEnfermeria[0].tabla_20_7_seccion10),
      $("#tabla_20_8_seccion10").val(data.hojaEnfermeria[0].tabla_20_8_seccion10),
      $("#tabla_20_9_seccion10").val(data.hojaEnfermeria[0].tabla_20_9_seccion10),
      $("#tabla_20_10_seccion10").val(data.hojaEnfermeria[0].tabla_20_10_seccion10),
      $("#tabla_20_11_seccion10").val(data.hojaEnfermeria[0].tabla_20_11_seccion10),
      $("#tabla_20_12_seccion10").val(data.hojaEnfermeria[0].tabla_20_12_seccion10),
      $("#tabla_20_13_seccion10").val(data.hojaEnfermeria[0].tabla_20_13_seccion10),
      $("#tabla_21_1_seccion10").val(data.hojaEnfermeria2[0].tabla_21_1_seccion10),
      $("#tabla_21_2_seccion10").val(data.hojaEnfermeria2[0].tabla_21_2_seccion10),
      $("#tabla_21_3_seccion10").val(data.hojaEnfermeria2[0].tabla_21_3_seccion10),
      $("#tabla_21_4_seccion10").val(data.hojaEnfermeria2[0].tabla_21_4_seccion10),
      $("#tabla_21_5_seccion10").val(data.hojaEnfermeria2[0].tabla_21_5_seccion10),
      $("#tabla_21_6_seccion10").val(data.hojaEnfermeria2[0].tabla_21_6_seccion10),
      $("#tabla_21_7_seccion10").val(data.hojaEnfermeria2[0].tabla_21_7_seccion10),
      $("#tabla_21_8_seccion10").val(data.hojaEnfermeria2[0].tabla_21_8_seccion10),
      $("#tabla_21_9_seccion10").val(data.hojaEnfermeria2[0].tabla_21_9_seccion10),
      $("#tabla_21_10_seccion10").val(data.hojaEnfermeria2[0].tabla_21_10_seccion10),
      $("#tabla_21_11_seccion10").val(data.hojaEnfermeria2[0].tabla_21_11_seccion10),
      $("#tabla_21_12_seccion10").val(data.hojaEnfermeria2[0].tabla_21_12_seccion10),
      $("#tabla_21_13_seccion10").val(data.hojaEnfermeria2[0].tabla_21_13_seccion10),
      $("#tabla_22_1_seccion10").val(data.hojaEnfermeria2[0].tabla_22_1_seccion10),
      $("#tabla_22_2_seccion10").val(data.hojaEnfermeria2[0].tabla_22_2_seccion10),
      $("#tabla_22_3_seccion10").val(data.hojaEnfermeria2[0].tabla_22_3_seccion10),
      $("#tabla_22_4_seccion10").val(data.hojaEnfermeria2[0].tabla_22_4_seccion10),
      $("#tabla_22_5_seccion10").val(data.hojaEnfermeria2[0].tabla_22_5_seccion10),
      $("#tabla_22_6_seccion10").val(data.hojaEnfermeria2[0].tabla_22_6_seccion10),
      $("#tabla_22_7_seccion10").val(data.hojaEnfermeria2[0].tabla_22_7_seccion10),
      $("#tabla_22_8_seccion10").val(data.hojaEnfermeria2[0].tabla_22_8_seccion10),
      $("#tabla_22_9_seccion10").val(data.hojaEnfermeria2[0].tabla_22_9_seccion10),
      $("#tabla_22_10_seccion10").val(data.hojaEnfermeria2[0].tabla_22_10_seccion10),
      $("#tabla_22_11_seccion10").val(data.hojaEnfermeria2[0].tabla_22_11_seccion10),
      $("#tabla_22_12_seccion10").val(data.hojaEnfermeria2[0].tabla_22_12_seccion10),
      $("#tabla_22_13_seccion10").val(data.hojaEnfermeria2[0].tabla_22_13_seccion10),
      $("#tabla_23_1_seccion10").val(data.hojaEnfermeria2[0].tabla_23_1_seccion10),
      $("#tabla_23_2_seccion10").val(data.hojaEnfermeria2[0].tabla_23_2_seccion10),
      $("#tabla_23_3_seccion10").val(data.hojaEnfermeria2[0].tabla_23_3_seccion10),
      $("#tabla_23_4_seccion10").val(data.hojaEnfermeria2[0].tabla_23_4_seccion10),
      $("#tabla_23_5_seccion10").val(data.hojaEnfermeria2[0].tabla_23_5_seccion10),
      $("#tabla_23_6_seccion10").val(data.hojaEnfermeria2[0].tabla_23_6_seccion10),
      $("#tabla_23_7_seccion10").val(data.hojaEnfermeria2[0].tabla_23_7_seccion10),
      $("#tabla_23_8_seccion10").val(data.hojaEnfermeria2[0].tabla_23_8_seccion10),
      $("#tabla_23_9_seccion10").val(data.hojaEnfermeria2[0].tabla_23_9_seccion10),
      $("#tabla_23_10_seccion10").val(data.hojaEnfermeria2[0].tabla_23_10_seccion10),
      $("#tabla_23_11_seccion10").val(data.hojaEnfermeria2[0].tabla_23_11_seccion10),
      $("#tabla_23_12_seccion10").val(data.hojaEnfermeria2[0].tabla_23_12_seccion10),
      $("#tabla_23_13_seccion10").val(data.hojaEnfermeria2[0].tabla_23_13_seccion10),
      $("#tabla_24_1_seccion10").val(data.hojaEnfermeria2[0].tabla_24_1_seccion10),
      $("#tabla_24_2_seccion10").val(data.hojaEnfermeria2[0].tabla_24_2_seccion10),
      $("#tabla_24_3_seccion10").val(data.hojaEnfermeria2[0].tabla_24_3_seccion10),
      $("#tabla_24_4_seccion10").val(data.hojaEnfermeria2[0].tabla_24_4_seccion10),
      $("#tabla_24_5_seccion10").val(data.hojaEnfermeria2[0].tabla_24_5_seccion10),
      $("#tabla_24_6_seccion10").val(data.hojaEnfermeria2[0].tabla_24_6_seccion10),
      $("#tabla_24_7_seccion10").val(data.hojaEnfermeria2[0].tabla_24_7_seccion10),
      $("#tabla_24_8_seccion10").val(data.hojaEnfermeria2[0].tabla_24_8_seccion10),
      $("#tabla_24_9_seccion10").val(data.hojaEnfermeria2[0].tabla_24_9_seccion10),
      $("#tabla_24_10_seccion10").val(data.hojaEnfermeria2[0].tabla_24_10_seccion10),
      $("#tabla_24_11_seccion10").val(data.hojaEnfermeria2[0].tabla_24_11_seccion10),
      $("#tabla_24_12_seccion10").val(data.hojaEnfermeria2[0].tabla_24_12_seccion10),
      $("#tabla_24_13_seccion10").val(data.hojaEnfermeria2[0].tabla_24_13_seccion10),
      $("#tabla_1_1_seccion10").val(data.hojaEnfermeria2[0].tabla_1_1_seccion10),
      $("#tabla_1_2_seccion10").val(data.hojaEnfermeria2[0].tabla_1_2_seccion10),
      $("#tabla_1_3_seccion10").val(data.hojaEnfermeria2[0].tabla_1_3_seccion10),
      $("#tabla_1_4_seccion10").val(data.hojaEnfermeria2[0].tabla_1_4_seccion10),
      $("#tabla_1_5_seccion10").val(data.hojaEnfermeria2[0].tabla_1_5_seccion10),
      $("#tabla_1_6_seccion10").val(data.hojaEnfermeria2[0].tabla_1_6_seccion10),
      $("#tabla_1_7_seccion10").val(data.hojaEnfermeria2[0].tabla_1_7_seccion10),
      $("#tabla_1_8_seccion10").val(data.hojaEnfermeria2[0].tabla_1_8_seccion10),
      $("#tabla_1_9_seccion10").val(data.hojaEnfermeria2[0].tabla_1_9_seccion10),
      $("#tabla_1_10_seccion10").val(data.hojaEnfermeria2[0].tabla_1_10_seccion10),
      $("#tabla_1_11_seccion10").val(data.hojaEnfermeria2[0].tabla_1_11_seccion10),
      $("#tabla_1_12_seccion10").val(data.hojaEnfermeria2[0].tabla_1_12_seccion10),
      $("#tabla_1_13_seccion10").val(data.hojaEnfermeria2[0].tabla_1_13_seccion10),
      $("#tabla_2_1_seccion10").val(data.hojaEnfermeria2[0].tabla_2_1_seccion10),
      $("#tabla_2_2_seccion10").val(data.hojaEnfermeria2[0].tabla_2_2_seccion10),
      $("#tabla_2_3_seccion10").val(data.hojaEnfermeria2[0].tabla_2_3_seccion10),
      $("#tabla_2_4_seccion10").val(data.hojaEnfermeria2[0].tabla_2_4_seccion10),
      $("#tabla_2_5_seccion10").val(data.hojaEnfermeria2[0].tabla_2_5_seccion10),
      $("#tabla_2_6_seccion10").val(data.hojaEnfermeria2[0].tabla_2_6_seccion10),
      $("#tabla_2_7_seccion10").val(data.hojaEnfermeria2[0].tabla_2_7_seccion10),
      $("#tabla_2_8_seccion10").val(data.hojaEnfermeria2[0].tabla_2_8_seccion10),
      $("#tabla_2_9_seccion10").val(data.hojaEnfermeria2[0].tabla_2_9_seccion10),
      $("#tabla_2_10_seccion10").val(data.hojaEnfermeria2[0].tabla_2_10_seccion10),
      $("#tabla_2_11_seccion10").val(data.hojaEnfermeria2[0].tabla_2_11_seccion10),
      $("#tabla_2_12_seccion10").val(data.hojaEnfermeria2[0].tabla_2_12_seccion10),
      $("#tabla_2_13_seccion10").val(data.hojaEnfermeria2[0].tabla_2_13_seccion10),
      $("#tabla_3_1_seccion10").val(data.hojaEnfermeria2[0].tabla_3_1_seccion10),
      $("#tabla_3_2_seccion10").val(data.hojaEnfermeria2[0].tabla_3_2_seccion10),
      $("#tabla_3_3_seccion10").val(data.hojaEnfermeria2[0].tabla_3_3_seccion10),
      $("#tabla_3_4_seccion10").val(data.hojaEnfermeria2[0].tabla_3_4_seccion10),
      $("#tabla_3_5_seccion10").val(data.hojaEnfermeria2[0].tabla_3_5_seccion10),
      $("#tabla_3_6_seccion10").val(data.hojaEnfermeria2[0].tabla_3_6_seccion10),
      $("#tabla_3_7_seccion10").val(data.hojaEnfermeria2[0].tabla_3_7_seccion10),
      $("#tabla_3_8_seccion10").val(data.hojaEnfermeria2[0].tabla_3_8_seccion10),
      $("#tabla_3_9_seccion10").val(data.hojaEnfermeria2[0].tabla_3_9_seccion10),
      $("#tabla_3_10_seccion10").val(data.hojaEnfermeria2[0].tabla_3_10_seccion10),
      $("#tabla_3_11_seccion10").val(data.hojaEnfermeria2[0].tabla_3_11_seccion10),
      $("#tabla_3_12_seccion10").val(data.hojaEnfermeria2[0].tabla_3_12_seccion10),
      $("#tabla_3_13_seccion10").val(data.hojaEnfermeria2[0].tabla_3_13_seccion10),
      $("#tabla_4_1_seccion10").val(data.hojaEnfermeria2[0].tabla_4_1_seccion10),
      $("#tabla_4_2_seccion10").val(data.hojaEnfermeria3.tabla_4_2_seccion10),
      $("#tabla_4_3_seccion10").val(data.hojaEnfermeria3.tabla_4_3_seccion10),
      $("#tabla_4_4_seccion10").val(data.hojaEnfermeria3.tabla_4_4_seccion10),
      $("#tabla_4_5_seccion10").val(data.hojaEnfermeria2[0].tabla_4_5_seccion10),
      $("#tabla_4_6_seccion10").val(data.hojaEnfermeria2[0].tabla_4_6_seccion10),
      $("#tabla_4_7_seccion10").val(data.hojaEnfermeria2[0].tabla_4_7_seccion10),
      $("#tabla_4_8_seccion10").val(data.hojaEnfermeria2[0].tabla_4_8_seccion10),
      $("#tabla_4_9_seccion10").val(data.hojaEnfermeria2[0].tabla_4_9_seccion10),
      $("#tabla_4_10_seccion10").val(data.hojaEnfermeria2[0].tabla_4_10_seccion10),
      $("#tabla_4_11_seccion10").val(data.hojaEnfermeria2[0].tabla_4_11_seccion10),
      $("#tabla_4_12_seccion10").val(data.hojaEnfermeria2[0].tabla_4_12_seccion10),
      $("#tabla_4_13_seccion10").val(data.hojaEnfermeria2[0].tabla_4_13_seccion10),
      $("#tabla_5_1_seccion10").val(data.hojaEnfermeria2[0].tabla_5_1_seccion10),
      $("#tabla_5_2_seccion10").val(data.hojaEnfermeria2[0].tabla_5_2_seccion10),
      $("#tabla_5_3_seccion10").val(data.hojaEnfermeria2[0].tabla_5_3_seccion10),
      $("#tabla_5_4_seccion10").val(data.hojaEnfermeria2[0].tabla_5_4_seccion10),
      $("#tabla_5_5_seccion10").val(data.hojaEnfermeria2[0].tabla_5_5_seccion10),
      $("#tabla_5_6_seccion10").val(data.hojaEnfermeria2[0].tabla_5_6_seccion10),
      $("#tabla_5_7_seccion10").val(data.hojaEnfermeria2[0].tabla_5_7_seccion10),
      $("#tabla_5_8_seccion10").val(data.hojaEnfermeria2[0].tabla_5_8_seccion10),
      $("#tabla_5_9_seccion10").val(data.hojaEnfermeria2[0].tabla_5_9_seccion10),
      $("#tabla_5_10_seccion10").val(data.hojaEnfermeria2[0].tabla_5_10_seccion10),
      $("#tabla_5_11_seccion10").val(data.hojaEnfermeria2[0].tabla_5_11_seccion10),
      $("#tabla_5_12_seccion10").val(data.hojaEnfermeria2[0].tabla_5_12_seccion10),
      $("#tabla_5_13_seccion10").val(data.hojaEnfermeria2[0].tabla_5_13_seccion10),
      $("#tabla_6_1_seccion10").val(data.hojaEnfermeria2[0].tabla_6_1_seccion10),
      $("#tabla_6_2_seccion10").val(data.hojaEnfermeria2[0].tabla_6_2_seccion10),
      $("#tabla_6_3_seccion10").val(data.hojaEnfermeria2[0].tabla_6_3_seccion10),
      $("#tabla_6_4_seccion10").val(data.hojaEnfermeria2[0].tabla_6_4_seccion10),
      $("#tabla_6_5_seccion10").val(data.hojaEnfermeria2[0].tabla_6_5_seccion10),
      $("#tabla_6_6_seccion10").val(data.hojaEnfermeria2[0].tabla_6_6_seccion10),
      $("#tabla_6_7_seccion10").val(data.hojaEnfermeria2[0].tabla_6_7_seccion10),
      $("#tabla_6_8_seccion10").val(data.hojaEnfermeria2[0].tabla_6_8_seccion10),
      $("#tabla_6_9_seccion10").val(data.hojaEnfermeria2[0].tabla_6_9_seccion10),
      $("#tabla_6_10_seccion10").val(data.hojaEnfermeria2[0].tabla_6_10_seccion10),
      $("#tabla_6_11_seccion10").val(data.hojaEnfermeria2[0].tabla_6_11_seccion10),
      $("#tabla_6_12_seccion10").val(data.hojaEnfermeria2[0].tabla_6_12_seccion10),
      $("#tabla_6_13_seccion10").val(data.hojaEnfermeria2[0].tabla_6_13_seccion10),
      $("#t_arterial_1_seccion10").val(data.hojaEnfermeria2[0].t_arterial_1_seccion10),
      $("#t_arterial_2_seccion10").val(data.hojaEnfermeria2[0].t_arterial_2_seccion10),
      $("#t_arterial_3_seccion10").val(data.hojaEnfermeria2[0].t_arterial_3_seccion10),
      $("#t_arterial_4_seccion10").val(data.hojaEnfermeria2[0].t_arterial_4_seccion10),
      $("#t_arterial_5_seccion10").val(data.hojaEnfermeria2[0].t_arterial_5_seccion10),
      $("#t_arterial_6_seccion10").val(data.hojaEnfermeria2[0].t_arterial_6_seccion10),
      $("#t_arterial_7_seccion10").val(data.hojaEnfermeria2[0].t_arterial_7_seccion10),
      $("#t_arterial_8_seccion10").val(data.hojaEnfermeria2[0].t_arterial_8_seccion10),
      $("#t_arterial_9_seccion10").val(data.hojaEnfermeria2[0].t_arterial_9_seccion10),
      $("#t_arterial_10_seccion10").val(data.hojaEnfermeria2[0].t_arterial_10_seccion10),
      $("#t_arterial_11_seccion10").val(data.hojaEnfermeria2[0].t_arterial_11_seccion10),
      $("#t_arterial_12_seccion10").val(data.hojaEnfermeria2[0].t_arterial_12_seccion10),
      $("#f_resp_1_seccion10").val(data.hojaEnfermeria2[0].f_resp_1_seccion10),
      $("#f_resp_2_seccion10").val(data.hojaEnfermeria2[0].f_resp_2_seccion10),
      $("#f_resp_3_seccion10").val(data.hojaEnfermeria2[0].f_resp_3_seccion10),
      $("#f_resp_4_seccion10").val(data.hojaEnfermeria2[0].f_resp_4_seccion10),
      $("#f_resp_5_seccion10").val(data.hojaEnfermeria2[0].f_resp_5_seccion10),
      $("#f_resp_6_seccion10").val(data.hojaEnfermeria2[0].f_resp_6_seccion10),
      $("#f_resp_7_seccion10").val(data.hojaEnfermeria2[0].f_resp_7_seccion10),
      $("#f_resp_8_seccion10").val(data.hojaEnfermeria2[0].f_resp_8_seccion10),
      $("#f_resp_9_seccion10").val(data.hojaEnfermeria2[0].f_resp_9_seccion10),
      $("#f_resp_10_seccion10").val(data.hojaEnfermeria2[0].f_resp_10_seccion10),
      $("#f_resp_11_seccion10").val(data.hojaEnfermeria2[0].f_resp_11_seccion10),
      $("#f_resp_12_seccion10").val(data.hojaEnfermeria2[0].f_resp_12_seccion10),
      $("#perimetro_1_seccion10").val(data.hojaEnfermeria2[0].perimetro_1_seccion10),
      $("#perimetro_2_seccion10").val(data.hojaEnfermeria2[0].perimetro_2_seccion10),
      $("#perimetro_3_seccion10").val(data.hojaEnfermeria2[0].perimetro_3_seccion10),
      $("#perimetro_4_seccion10").val(data.hojaEnfermeria2[0].perimetro_4_seccion10),
      $("#perimetro_5_seccion10").val(data.hojaEnfermeria2[0].perimetro_5_seccion10),
      $("#perimetro_6_seccion10").val(data.hojaEnfermeria2[0].perimetro_6_seccion10),
      $("#perimetro_7_seccion10").val(data.hojaEnfermeria2[0].perimetro_7_seccion10),
      $("#perimetro_8_seccion10").val(data.hojaEnfermeria2[0].perimetro_8_seccion10),
      $("#perimetro_9_seccion10").val(data.hojaEnfermeria2[0].perimetro_9_seccion10),
      $("#perimetro_10_seccion10").val(data.hojaEnfermeria2[0].perimetro_10_seccion10),
      $("#perimetro_11_seccion10").val(data.hojaEnfermeria2[0].perimetro_11_seccion10),
      $("#perimetro_12_seccion10").val(data.hojaEnfermeria2[0].perimetro_12_seccion10),
      $("#formula_1_seccion10").val(data.hojaEnfermeria2[0].formula_1_seccion10),
      $("#formula_2_seccion10").val(data.hojaEnfermeria2[0].formula_2_seccion10),
      $("#formula_3_seccion10").val(data.hojaEnfermeria2[0].formula_3_seccion10),
      $("#formula_4_seccion10").val(data.hojaEnfermeria2[0].formula_4_seccion10),
      $("#formula_5_seccion10").val(data.hojaEnfermeria2[0].formula_5_seccion10),
      $("#formula_6_seccion10").val(data.hojaEnfermeria2[0].formula_6_seccion10),
      $("#formula_7_seccion10").val(data.hojaEnfermeria2[0].formula_7_seccion10),
      $("#formula_8_seccion10").val(data.hojaEnfermeria2[0].formula_8_seccion10),
      $("#formula_9_seccion10").val(data.hojaEnfermeria2[0].formula_9_seccion10),
      $("#formula_10_seccion10").val(data.hojaEnfermeria2[0].formula_10_seccion10),
      $("#formula_11_seccion10").val(data.hojaEnfermeria2[0].formula_11_seccion10),
      $("#formula_12_seccion10").val(data.hojaEnfermeria2[0].formula_12_seccion10),
      $("#dieta_1_seccion10").val(data.hojaEnfermeria2[0].dieta_1_seccion10),
      $("#dieta_2_seccion10").val(data.hojaEnfermeria2[0].dieta_2_seccion10),
      $("#dieta_3_seccion10").val(data.hojaEnfermeria2[0].dieta_3_seccion10),
      $("#lib_orales_1_seccion10").val(data.hojaEnfermeria2[0].lib_orales_1_seccion10),
      $("#lib_orales_2_seccion10").val(data.hojaEnfermeria2[0].lib_orales_2_seccion10),
      $("#lib_orales_3_seccion10").val(data.hojaEnfermeria2[0].lib_orales_3_seccion10),
      $("#lib_orales_4_seccion10").val(data.hojaEnfermeria2[0].lib_orales_4_seccion10),
      $("#lib_orales_5_seccion10").val(data.hojaEnfermeria2[0].lib_orales_5_seccion10),
      $("#lib_orales_6_seccion10").val(data.hojaEnfermeria2[0].lib_orales_6_seccion10),
      $("#lib_orales_7_seccion10").val(data.hojaEnfermeria2[0].lib_orales_7_seccion10),
      $("#lib_orales_8_seccion10").val(data.hojaEnfermeria2[0].lib_orales_8_seccion10),
      $("#lib_orales_9_seccion10").val(data.hojaEnfermeria2[0].lib_orales_9_seccion10),
      $("#lib_orales_10_seccion10").val(data.hojaEnfermeria2[0].lib_orales_10_seccion10),
      $("#lib_orales_11_seccion10").val(data.hojaEnfermeria2[0].lib_orales_11_seccion10),
      $("#lib_orales_12_seccion10").val(data.hojaEnfermeria2[0].lib_orales_12_seccion10),
      $("#total_1_seccion10").val(data.hojaEnfermeria2[0].total_1_seccion10),
      $("#total_2_seccion10").val(data.hojaEnfermeria2[0].total_2_seccion10),
      $("#total_3_seccion10").val(data.hojaEnfermeria2[0].total_3_seccion10),
      $("#liquidos_parentales_1_seccion10").val(data.hojaEnfermeria2[0].liquidos_parentales_1_seccion10),
      $("#liquidos_parentales_2_seccion10").val(data.hojaEnfermeria2[0].liquidos_parentales_2_seccion10),
      $("#liquidos_parentales_3_seccion10").val(data.hojaEnfermeria2[0].liquidos_parentales_3_seccion10),
      $("#electrolitos_1_seccion10").val(data.hojaEnfermeria3[0].electrolitos_1_seccion10),
      $("#electrolitos_2_seccion10").val(data.hojaEnfermeria3[0].electrolitos_2_seccion10),
      $("#electrolitos_3_seccion10").val(data.hojaEnfermeria3[0].electrolitos_3_seccion10),
      $("#total_electrolitos_1_seccion10").val(data.hojaEnfermeria3[0].total_electrolitos_1_seccion10),
      $("#total_electrolitos_2_seccion10").val(data.hojaEnfermeria3[0].total_electrolitos_2_seccion10),
      $("#total_electrolitos_3_seccion10").val(data.hojaEnfermeria3[0].total_electrolitos_3_seccion10),
      $("#uresis_1_seccion10").val(data.hojaEnfermeria3[0].uresis_1_seccion10),
      $("#uresis_2_seccion10").val(data.hojaEnfermeria3[0].uresis_2_seccion10),
      $("#uresis_3_seccion10").val(data.hojaEnfermeria3[0].uresis_3_seccion10),
      $("#evacuaciones_1_seccion10").val(data.hojaEnfermeria3[0].evacuaciones_1_seccion10),
      $("#evacuaciones_2_seccion10").val(data.hojaEnfermeria3[0].evacuaciones_2_seccion10),
      $("#evacuaciones_3_seccion10").val(data.hojaEnfermeria3[0].evacuaciones_3_seccion10),
      $("#lab_1_seccion10").val(data.hojaEnfermeria3[0].lab_1_seccion10),
      $("#lab_2_seccion10").val(data.hojaEnfermeria3[0].lab_2_seccion10),
      $("#lab_3_seccion10").val(data.hojaEnfermeria3[0].lab_3_seccion10),
      $("#lab_4_seccion10").val(data.hojaEnfermeria3[0].lab_4_seccion10),
      $("#lab_5_seccion10").val(data.hojaEnfermeria3[0].lab_5_seccion10),
      $("#lab_6_seccion10").val(data.hojaEnfermeria3[0].lab_6_seccion10),
      $("#lab_7_seccion10").val(data.hojaEnfermeria3[0].lab_7_seccion10),
      $("#lab_8_seccion10").val(data.hojaEnfermeria3[0].lab_8_seccion10),
      $("#lab_9_seccion10").val(data.hojaEnfermeria3[0].lab_9_seccion10),
      $("#lab_10_seccion10").val(data.hojaEnfermeria3[0].lab_10_seccion10),
      $("#lab_11_seccion10").val(data.hojaEnfermeria3[0].lab_11_seccion10),
      $("#lab_12_seccion10").val(data.hojaEnfermeria3[0].lab_12_seccion10),
      $("#reactivos_1_seccion10").val(data.hojaEnfermeria3[0].reactivos_1_seccion10),
      $("#reactivos_2_seccion10").val(data.hojaEnfermeria3[0].reactivos_2_seccion10),
      $("#reactivos_3_seccion10").val(data.hojaEnfermeria3[0].reactivos_3_seccion10),
      $("#reactivos_4_seccion10").val(data.hojaEnfermeria3[0].reactivos_4_seccion10),
      $("#reactivos_5_seccion10").val(data.hojaEnfermeria3[0].reactivos_5_seccion10),
      $("#reactivos_6_seccion10").val(data.hojaEnfermeria3[0].reactivos_6_seccion10),
      $("#reactivos_7_seccion10").val(data.hojaEnfermeria3[0].reactivos_7_seccion10),
      $("#reactivos_8_seccion10").val(data.hojaEnfermeria3[0].reactivos_8_seccion10),
      $("#reactivos_9_seccion10").val(data.hojaEnfermeria3[0].reactivos_9_seccion10),
      $("#reactivos_10_seccion10").val(data.hojaEnfermeria3[0].reactivos_10_seccion10),
      $("#reactivos_11_seccion10").val(data.hojaEnfermeria3[0].reactivos_11_seccion10),
      $("#reactivos_12_seccion10").val(data.hojaEnfermeria3[0].reactivos_12_seccion10),
      $("#otros_estudios_1_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_1_seccion10),
      $("#otros_estudios_2_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_2_seccion10),
      $("#otros_estudios_3_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_3_seccion10),
      $("#otros_estudios_4_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_4_seccion10),
      $("#otros_estudios_5_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_5_seccion10),
      $("#otros_estudios_6_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_6_seccion10),
      $("#otros_estudios_7_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_7_seccion10),
      $("#otros_estudios_8_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_8_seccion10),
      $("#otros_estudios_9_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_9_seccion10),
      $("#otros_estudios_10_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_10_seccion10),
      $("#otros_estudios_11_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_11_seccion10),
      $("#otros_estudios_12_seccion10").val(data.hojaEnfermeria3[0].otros_estudios_12_seccion10),
      $("#cateter_corto_dolor_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_dolor_seccion10),
      $("#cateter_corto_calor_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_calor_seccion10),
      $("#cateter_corto_rubor_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_rubor_seccion10),
      $("#cateter_corto_numero_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_numero_seccion10),
      $("#cateter_corto_numero_punciones_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_numero_punciones_seccion10),
      $("#cateter_central_dolor_seccion10").val(data.hojaEnfermeria3[0].cateter_central_dolor_seccion10),
      $("#cateter_central_calor_seccion10").val(data.hojaEnfermeria3[0].cateter_central_calor_seccion10),
      $("#cateter_central_rubor_seccion10").val(data.hojaEnfermeria3[0].cateter_central_rubor_seccion10),
      $("#cateter_corto_recanaliza_seccion10").val(data.hojaEnfermeria3[0].cateter_corto_recanaliza_seccion10),
      $("#cateter_central_recanaliza_seccion10").val(data.hojaEnfermeria3[0].cateter_central_recanaliza_seccion10),
      $("#dieta_seccion10").val(data.hojaEnfermeria3[0].dieta_seccion10),
      $("#fecha_1_seccion10").val(data.hojaEnfermeria3[0].fecha_1_seccion10),
      $("#fecha_2_seccion10").val(data.hojaEnfermeria3[0].fecha_2_seccion10),
      $("#fecha_3_seccion10").val(data.hojaEnfermeria3[0].fecha_3_seccion10),
      $("#fecha_4_seccion10").val(data.hojaEnfermeria3[0].fecha_4_seccion10),
      $("#fecha_5_seccion10").val(data.hojaEnfermeria3[0].fecha_5_seccion10),
      $("#fecha_6_seccion10").val(data.hojaEnfermeria3[0].fecha_6_seccion10),
      $("#fecha_7_seccion10").val(data.hojaEnfermeria3[0].fecha_7_seccion10),
      $("#fecha_8_seccion10").val(data.hojaEnfermeria3[0].fecha_8_seccion10),
      $("#fecha_9_seccion10").val(data.hojaEnfermeria3[0].fecha_9_seccion10),
      $("#fecha_10_seccion10").val(data.hojaEnfermeria3[0].fecha_10_seccion10),
      $("#medicamentos_1_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_2_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_3_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_4_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_5_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_6_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_7_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_8_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_9_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#medicamentos_10_seccion10").val(data.hojaEnfermeria3[0].medicamentos_1_seccion10),
      $("#dosis_1_seccion10").val(data.hojaEnfermeria3[0].dosis_1_seccion10),
      $("#dosis_2_seccion10").val(data.hojaEnfermeria3[0].dosis_2_seccion10),
      $("#dosis_3_seccion10").val(data.hojaEnfermeria3[0].dosis_3_seccion10),
      $("#dosis_4_seccion10").val(data.hojaEnfermeria3[0].dosis_4_seccion10),
      $("#dosis_5_seccion10").val(data.hojaEnfermeria3[0].dosis_5_seccion10),
      $("#dosis_6_seccion10").val(data.hojaEnfermeria3[0].dosis_6_seccion10),
      $("#dosis_7_seccion10").val(data.hojaEnfermeria3[0].dosis_7_seccion10),
      $("#dosis_8_seccion10").val(data.hojaEnfermeria3[0].dosis_8_seccion10),
      $("#dosis_9_seccion10").val(data.hojaEnfermeria3[0].dosis_9_seccion10),
      $("#dosis_10_seccion10").val(data.hojaEnfermeria3[0].dosis_10_seccion10),
      $("#via_1_seccion10").val(data.hojaEnfermeria3[0].via_1_seccion10),
      $("#via_2_seccion10").val(data.hojaEnfermeria3[0].via_2_seccion10),
      $("#via_3_seccion10").val(data.hojaEnfermeria3[0].via_3_seccion10),
      $("#via_4_seccion10").val(data.hojaEnfermeria3[0].via_4_seccion10),
      $("#via_5_seccion10").val(data.hojaEnfermeria3[0].via_5_seccion10),
      $("#via_6_seccion10").val(data.hojaEnfermeria3[0].via_6_seccion10),
      $("#via_7_seccion10").val(data.hojaEnfermeria3[0].via_7_seccion10),
      $("#via_8_seccion10").val(data.hojaEnfermeria3[0].via_8_seccion10),
      $("#via_9_seccion10").val(data.hojaEnfermeria3[0].via_9_seccion10),
      $("#via_10_seccion10").val(data.hojaEnfermeria3[0].via_10_seccion10),
      $("#horarios_1_seccion10").val(data.hojaEnfermeria3[0].horarios_1_seccion10),
      $("#horarios_2_seccion10").val(data.hojaEnfermeria3[0].horarios_2_seccion10),
      $("#horarios_3_seccion10").val(data.hojaEnfermeria3[0].horarios_3_seccion10),
      $("#horarios_4_seccion10").val(data.hojaEnfermeria3[0].horarios_4_seccion10),
      $("#horarios_5_seccion10").val(data.hojaEnfermeria3[0].horarios_5_seccion10),
      $("#horarios_6_seccion10").val(data.hojaEnfermeria3[0].horarios_6_seccion10),
      $("#horarios_7_seccion10").val(data.hojaEnfermeria3[0].horarios_7_seccion10),
      $("#horarios_8_seccion10").val(data.hojaEnfermeria3[0].horarios_8_seccion10),
      $("#horarios_9_seccion10").val(data.hojaEnfermeria3[0].horarios_9_seccion10),
      $("#horarios_10_seccion10").val(data.hojaEnfermeria3[0].horarios_10_seccion10),
      $("#hora_nota_1_seccion10").val(data.hojaEnfermeria3[0].hora_nota_1_seccion10),
      $("#hora_nota_2_seccion10").val(data.hojaEnfermeria3[0].hora_nota_2_seccion10),
      $("#hora_nota_3_seccion10").val(data.hojaEnfermeria3[0].hora_nota_3_seccion10),
      $("#nota_enfermeria_1_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_1_seccion10),
      $("#nota_enfermeria_2_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_2_seccion10),
      $("#nota_enfermeria_3_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_3_seccion10),
      $("#nota_enfermeria_4_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_4_seccion10),
      $("#nota_enfermeria_5_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_5_seccion10),
      $("#nota_enfermeria_6_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_6_seccion10),
      $("#nota_enfermeria_7_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_7_seccion10),
      $("#nota_enfermeria_8_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_8_seccion10),
      $("#nota_enfermeria_9_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_9_seccion10),
      $("#nota_enfermeria_10_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_10_seccion10),
      $("#nota_enfermeria_11_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_11_seccion10),
      $("#nota_enfermeria_12_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_12_seccion10),
      $("#nota_enfermeria_13_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_13_seccion10),
      $("#nota_enfermeria_14_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_14_seccion10),
      $("#nota_enfermeria_15_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_15_seccion10),
      $("#nota_enfermeria_16_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_16_seccion10),
      $("#nota_enfermeria_17_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_17_seccion10),
      $("#nota_enfermeria_18_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_18_seccion10),
      $("#nota_enfermeria_19_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_19_seccion10),
      $("#nota_enfermeria_20_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_20_seccion10),
      $("#nota_enfermeria_21_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_21_seccion10),
      $("#nota_enfermeria_22_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_22_seccion10),
      $("#nota_enfermeria_23_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_23_seccion10),
      $("#nota_enfermeria_24_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_24_seccion10),
      $("#nota_enfermeria_25_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_25_seccion10),
      $("#nota_enfermeria_26_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_26_seccion10),
      $("#nota_enfermeria_27_seccion10").val(data.hojaEnfermeria3[0].nota_enfermeria_27_seccion10),
      $("#enfermera_nota_seccion10").val(data.hojaEnfermeria3[0].enfermera_nota_seccion10),
      $("#firma_nota_seccion10").val(data.hojaEnfermeria3[0].firma_nota_seccion10)
      


    }

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
  
    //seccion4
    habitacion_seccion4: $('#habitacion_seccion4').val(),
    diagnostico_pre_operatorio_seccion4: $('#diagnostico_pre_operatorio_seccion4').val(),
    operacion_planeada_seccion4: $('#operacion_planeada_seccion4').val(),
    diagnostico_post_operatorio_seccion4: $('#diagnostico_post_operatorio_seccion4').val(),
    operacion_realizada_seccion4: $('#operacion_realizada_seccion4').val(),
    descripcion_tecnica_quirurgica_seccion4: $('#descripcion_tecnica_quirurgica_seccion4').val(),
    hallazgos_transoperatorios_seccion4: $('#hallazgos_transoperatorios_seccion4').val(),
    reporte_gasas_compresas_seccion4: $('#reporte_gasas_compresas_seccion4').val(),
    incidentes_accidentes_seccion4: $('#incidentes_accidentes_seccion4').val(),
    sangrado_seccion4: $('#sangrado_seccion4').val(),
    estudios_servicios_auxiliares_seccion4: $('#estudios_servicios_auxiliares_seccion4').val(),
    nombre_anestesiologo_seccion4:$("#nombre_anestesiologo_seccion4").val(),
    nombre_ayudante1_seccion4: $('#nombre_ayudante1_seccion4').val(),
    nombre_ayudante2_seccion4: $('#nombre_ayudante2_seccion4').val(),
    nombre_instrumentista_seccion4: $('#nombre_instrumentista_seccion4').val(),
    nombre_enfermera_circulante_seccion4: $('#nombre_enfermera_circulante_seccion4').val(),
    estado_postquirurgico_inmediato_seccion4: $('#estado_postquirurgico_inmediato_seccion4').val(),
    pronostico_seccion4: $('#pronostico_seccion4').val(),
    envio_piezas_seccion4: $("#envio_piezas_seccion4").val(),
    otros_hallazgos_seccion4: $('#otros_hallazgos_seccion4').val(),
    nombre_cirujano_seccion4: $('#nombre_cirujano_seccion4').val(),

    //seccion5
    indicaciones_id: $("#indicaciones_id").val(),
    indicaciones_seccion5: $("#indicaciones_seccion5").val(),

    //seccion6
    //nota_medica_id_seccion6: $("#nota_medica_id_seccion6").val(),
    nota_medica_seccion6: $("#nota_medica_seccion6").val(),

    //seccion7
    fechaIngreso_seccion7: $("#fechaIngreso_seccion7").val(),
    fechaEgreso_seccion7: $("#fechaEgreso_seccion7").val(),
    motivoEgreso_seccion7: $("#motivoEgreso_seccion7").val(),
    diagnosticoFinal_seccion7: $("#diagnosticoFinal_seccion7").val(),
    resumenClinico_seccion7: $("#resumenClinico_seccion7").val(),
    problemasClinicos_seccion7:$("#problemasClinicos_seccion7").val(),
    plan_seccion7: $("#plan_seccion7").val(),
    recomendacionesVigilancia_seccion7: $("#recomendacionesVigilancia_seccion7").val(),

    //seccion8
    resumen_seccion8: $("#resumen_seccion8").val(),

    //seccion9
    fdn_seccion9: $("#fdn_seccion9").val(),
    habitacion_seccion9: $("#habitacion_seccion9").val(),
    edad_seccion9: $("#edad_seccion9").val(),
    medico_seccion9: $("#medico_seccion9").val(),
    signos_vitales_seccion9: $("#signos_vitales_seccion9").val(),
    ta_seccion9: $("#ta_seccion9").val(),
    fc_seccion9: $("#fc_seccion9").val(),
    fr_seccion9: $("#fr_seccion9").val(),
    tc_seccion9: $("#tc_seccion9").val(),
    peso_seccion9: $("#peso_seccion9").val(),
    talla_seccion9: $("#talla_seccion9").val(),
    diagnostico_preoperatorio_seccion9: $("#diagnostico_preoperatorio_seccion9").val(),
    cirugia_proyectada_seccion9: $("#cirugia_proyectada_seccion9").val(),
    tipo_cirugia_seccion9: $("#tipo_cirugia_seccion9").val(),
    estado_actual_paciente_seccion9: $("#estado_actual_paciente_seccion9").val(),
    vendaje_mpi_seccion9: $("#vendaje_mpi_seccion9").val(),
    tricotomia_seccion9: $("#tricotomia_seccion9").val(),
    protesis_seccion9: $("#protesis_seccion9").val(),
    maquillaje_seccion9: $("#maquillaje_seccion9").val(),
    marcado_seccion9: $("#marcado_seccion9").val(),
    ayuno_seccion9:$("#ayuno_seccion9").val(),
    alergia_seccion9: $("#alergia_seccion9").val(),
    patologias_relevantes_seccion9: $("#patologias_relevantes_seccion9").val(),
    estudios_preoperatorios_seccion9: $("#estudios_preoperatorios_seccion9").val(),
    valoracion_preoperatoria_seccion9: $("#valoracion_preoperatoria_seccion9").val(),
    sangre_reserva_seccion9: $("#sangre_reserva_seccion9").val(),
    grupo_rh_sanguineo_seccion9: $("#grupo_rh_sanguineo_seccion9").val(),
    observaciones_seccion9: $("#observaciones_seccion9").val(),
    enfermera_seccion9: $("#enfermera_seccion9").val(),
    turno_seccion9: $("#turno_seccion9").val(),
    sala_quirurgica_seccion9: $("#sala_quirurgica_seccion9").val(),
    time_out_seccion9: $("#time_out_seccion9").val(),
    razon_seccion9: $("#razon_seccion9").val(),
    cirugia_realizada_seccion9: $("#cirugia_realizada_seccion9").val(),
    cirujano_seccion9: $("#cirujano_seccion9").val(),
    termino_anestesia_seccion9: $("#termino_anestesia_seccion9").val(),
    anestesiologo_seccion9: $("#anestesiologo_seccion9").val(),
    instrumentista_seccion9: $("#instrumentista_seccion9").val(),
    primer_ayudante_seccion9: $("#primer_ayudante_seccion9").val(),
    segundo_ayudante_seccion9: $("#segundo_ayudante_seccion9").val(),
    circulante_seccion9: $("#circulante_seccion9").val(),
    inicio_anestesia_seccion9: $("#inicio_anestesia_seccion9").val(),
    tipo_anestesia_seccion9: $("#tipo_anestesia_seccion9").val(),
    inicio_cx_seccion9: $("#inicio_cx_seccion9").val(),
    termino_cx_seccion9: $("#termino_cx_seccion9").val(),
    egreso_sala_seccion9: $("#egreso_sala_seccion9").val(),
    medicamentos_1_seccion9: $("#medicamentos_1_seccion9").val(),
    medicamentos_2_seccion9: $("#medicamentos_2_seccion9").val(),
    medicamentos_3_seccion9: $("#medicamentos_3_seccion9").val(),
    medicamentos_4_seccion9: $("#medicamentos_4_seccion9").val(),
    medicamentos_5_seccion9: $("#medicamentos_5_seccion9").val(),
    medicamentos_6_seccion9: $("#medicamentos_6_seccion9").val(),
    medicamentos_dosis_1_seccion9: $("#medicamentos_dosis_1_seccion9").val(),
    medicamentos_dosis_2_seccion9: $("#medicamentos_dosis_2_seccion9").val(),
    medicamentos_dosis_3_seccion9: $("#medicamentos_dosis_3_seccion9").val(),
    medicamentos_dosis_4_seccion9: $("#medicamentos_dosis_4_seccion9").val(),
    medicamentos_dosis_5_seccion9: $("#medicamentos_dosis_5_seccion9").val(),
    medicamentos_dosis_6_seccion9: $("#medicamentos_dosis_6_seccion9").val(),
    medicamentos_via_1_seccion9: $("#medicamentos_via_1_seccion9").val(),
    medicamentos_via_2_seccion9: $("#medicamentos_via_2_seccion9").val(),
    medicamentos_via_3_seccion9: $("#medicamentos_via_3_seccion9").val(),
    medicamentos_via_4_seccion9: $("#medicamentos_via_4_seccion9").val(),
    medicamentos_via_5_seccion9: $("#medicamentos_via_5_seccion9").val(),
    medicamentos_via_6_seccion9: $("#medicamentos_via_6_seccion9").val(),    
    medicamentos_hora_1_seccion9: $("#medicamentos_hora_1_seccion9").val(),
    medicamentos_hora_2_seccion9: $("#medicamentos_hora_2_seccion9").val(),
    medicamentos_hora_3_seccion9: $("#medicamentos_hora_3_seccion9").val(),
    medicamentos_hora_4_seccion9: $("#medicamentos_hora_4_seccion9").val(),
    medicamentos_hora_5_seccion9: $("#medicamentos_hora_5_seccion9").val(),
    medicamentos_hora_6_seccion9: $("#medicamentos_hora_6_seccion9").val(),
    liquidos_1_seccion9: $("#liquidos_1_seccion9").val(),
    liquidos_2_seccion9: $("#liquidos_2_seccion9").val(),
    liquidos_3_seccion9: $("#liquidos_3_seccion9").val(),
    liquidos_4_seccion9: $("#liquidos_4_seccion9").val(),
    liquidos_5_seccion9: $("#liquidos_5_seccion9").val(),
    liquidos_6_seccion9: $("#liquidos_6_seccion9").val(),
    liquidos_volumen_1_seccion9: $("#liquidos_volumen_1_seccion9").val(),
    liquidos_volumen_2_seccion9: $("#liquidos_volumen_2_seccion9").val(),
    liquidos_volumen_3_seccion9: $("#liquidos_volumen_3_seccion9").val(),
    liquidos_volumen_4_seccion9: $("#liquidos_volumen_4_seccion9").val(),
    liquidos_volumen_5_seccion9: $("#liquidos_volumen_5_seccion9").val(),
    liquidos_volumen_6_seccion9: $("#liquidos_volumen_6_seccion9").val(),
    liquidos_hora_1_seccion9: $("#liquidos_hora_1_seccion9").val(),
    liquidos_hora_2_seccion9: $("#liquidos_hora_2_seccion9").val(),
    liquidos_hora_3_seccion9: $("#liquidos_hora_3_seccion9").val(),
    liquidos_hora_4_seccion9: $("#liquidos_hora_4_seccion9").val(),
    liquidos_hora_5_seccion9: $("#liquidos_hora_5_seccion9").val(),
    liquidos_hora_6_seccion9: $("#liquidos_hora_6_seccion9").val(),
    uresis_seccion9: $("#uresis_seccion9").val(),
    sangrado_seccion9: $("#sangrado_seccion9").val(),
    gasas_antes_seccion9: $("#gasas_antes_seccion9").val(),
    gasas_despues_seccion9: $("#gasas_despues_seccion9").val(),
    compresas_antes_seccion9: $("#compresas_antes_seccion9").val(),
    compresas_despues_seccion9: $("#compresas_despues_seccion9").val(),
    cotonoides_antes_seccion9: $("#cotonoides_antes_seccion9").val(),
    cotonoides_despues_seccion9: $("#cotonoides_despues_seccion9").val(),
    isopos_antes_seccion9: $("#isopos_antes_seccion9").val(),
    isopos_despues_seccion9: $("#isopos_despues_seccion9").val(),
    torundas_antes_seccion9: $("#torundas_antes_seccion9").val(),
    torundas_despues_seccion9: $("#torundas_despues_seccion9").val(),
    otros_antes_seccion9: $("#otros_antes_seccion9").val(),
    otros_despues_seccion9: $("#otros_despues_seccion9").val(),
    otros_2_antes_seccion9: $("#otros_2_antes_seccion9").val(),
    otros_2_despues_seccion9: $("#otros_2_despues_seccion9").val(),
    cuenta_completa_seccion9: $("#cuenta_completa_seccion9").val(),
    hora_seccion9:$("#hora_seccion9").val(),
    ta_ingreso_seccion9:$("#ta_ingreso_seccion9").val(),
    fc_ingreso_seccion9:$("#fc_ingreso_seccion9").val(),
    fr_ingreso_seccion9:$("#fr_ingreso_seccion9").val(),
    tc_ingreso_seccion9:$("#tc_ingreso_seccion9").val(),
    sa02_ingreso_seccion9:$("#sa02_ingreso_seccion9").val(),
    eva_ingreso_seccion9:$("#eva_ingreso_seccion9").val(),
    aldrete_ingreso_seccion9:$("#aldrete_ingreso_seccion9").val(),
    ta_15min_seccion9:$("#ta_15min_seccion9").val(),
    fc_15min_seccion9:$("#fc_15min_seccion9").val(),
    fr_15min_seccion9:$("#fr_15min_seccion9").val(),
    tc_15min_seccion9:$("#tc_15min_seccion9").val(),
    sa02_15min_seccion9:$("#sa02_15min_seccion9").val(),
    eva_15min_seccion9:$("#eva_15min_seccion9").val(),
    aldrete_15min_seccion9:$("#aldrete_15min_seccion9").val(),
    ta_30min_seccion9:$("#ta_30min_seccion9").val(),
    fc_30min_seccion9:$("#fc_30min_seccion9").val(),
    fr_30min_seccion9:$("#fr_30min_seccion9").val(),
    tc_30min_seccion9:$("#tc_30min_seccion9").val(),
    sa02_30min_seccion9:$("#sa02_30min_seccion9").val(),
    eva_30min_seccion9:$("#eva_30min_seccion9").val(),
    aldrete_30min_seccion9:$("#aldrete_30min_seccion9").val(),
    ta_45min_seccion9:$("#ta_45min_seccion9").val(),
    fc_45min_seccion9:$("#fc_45min_seccion9").val(),
    fr_45min_seccion9:$("#fr_45min_seccion9").val(),
    tc_45min_seccion9:$("#tc_45min_seccion9").val(),
    sa02_45min_seccion9:$("#sa02_45min_seccion9").val(),
    eva_45min_seccion9:$("#eva_45min_seccion9").val(),
    aldrete_45min_seccion9:$("#aldrete_45min_seccion9").val(),
    ta_60min_seccion9:$("#ta_60min_seccion9").val(),
    fc_60min_seccion9:$("#fc_60min_seccion9").val(),
    fr_60min_seccion9:$("#fr_60min_seccion9").val(),
    tc_60min_seccion9:$("#tc_60min_seccion9").val(),
    sa02_60min_seccion9:$("#sa02_60min_seccion9").val(),
    eva_60min_seccion9:$("#eva_60min_seccion9").val(),
    aldrete_60min_seccion9:$("#aldrete_60min_seccion9").val(),
    ta_60minmas_seccion9:$("#ta_60minmas_seccion9").val(),
    fc_60minmas_seccion9:$("#fc_60minmas_seccion9").val(),
    fr_60minmas_seccion9:$("#fr_60minmas_seccion9").val(),
    tc_60minmas_seccion9:$("#tc_60minmas_seccion9").val(),
    sa02_60minmas_seccion9:$("#sa02_60minmas_seccion9").val(),
    eva_60minmas_seccion9:$("#eva_60minmas_seccion9").val(),
    aldrete_60minmas_seccion9:$("#aldrete_60minmas_seccion9").val(),
    liquidos_via_1_seccion9:$("#liquidos_via_1_seccion9").val(),
    liquidos_via_2_seccion9:$("#liquidos_via_2_seccion9").val(),
    liquidos_via_3_seccion9:$("#liquidos_via_3_seccion9").val(),
    liquidos_via_4_seccion9:$("#liquidos_via_4_seccion9").val(),
    liquidos_via_5_seccion9:$("#liquidos_via_5_seccion9").val(),
    liquidos_via_6_seccion9:$("#liquidos_via_6_seccion9").val(),
    nota_quirurgica_seccion9:$("#nota_quirurgica_seccion9").val(),
    fecha_hora_cuidados_post_operatorios_seccion9:$("#fecha_hora_cuidados_post_operatorios_seccion9").val(),
    nota_recuperacion_seccion9:$("#nota_recuperacion_seccion9").val(),
    medicamento_2_1_seccion9: $("#medicamento_2_1_seccion9").val(),
    medicamento_2_2_seccion9: $("#medicamento_2_2_seccion9").val(),
    medicamento_2_3_seccion9: $("#medicamento_2_3_seccion9").val(),
    medicamento_2_4_seccion9: $("#medicamento_2_4_seccion9").val(),
    medicamento_2_5_seccion9: $("#medicamento_2_5_seccion9").val(),
    medicamento_2_6_seccion9: $("#medicamento_2_6_seccion9").val(),
    medicamento_2_7_seccion9: $("#medicamento_2_7_seccion9").val(),
    medicamento_2_8_seccion9: $("#medicamento_2_8_seccion9").val(),
    medicamento_2_9_seccion9: $("#medicamento_2_9_seccion9").val(),
    dosis_2_1_seccion9: $("#dosis_2_1_seccion9").val(),
    dosis_2_2_seccion9: $("#dosis_2_2_seccion9").val(),
    dosis_2_3_seccion9: $("#dosis_2_3_seccion9").val(),
    dosis_2_4_seccion9: $("#dosis_2_4_seccion9").val(),
    dosis_2_5_seccion9: $("#dosis_2_5_seccion9").val(),
    dosis_2_6_seccion9: $("#dosis_2_6_seccion9").val(),
    dosis_2_7_seccion9: $("#dosis_2_7_seccion9").val(),
    dosis_2_8_seccion9: $("#dosis_2_8_seccion9").val(),
    dosis_2_9_seccion9: $("#dosis_2_9_seccion9").val(),
    via_2_1_seccion9: $("#via_2_1_seccion9").val(),
    via_2_2_seccion9: $("#via_2_2_seccion9").val(),
    via_2_3_seccion9: $("#via_2_3_seccion9").val(),
    via_2_4_seccion9: $("#via_2_4_seccion9").val(),
    via_2_5_seccion9: $("#via_2_5_seccion9").val(),
    via_2_6_seccion9: $("#via_2_6_seccion9").val(),
    via_2_8_seccion9: $("#via_2_8_seccion9").val(),
    via_2_9_seccion9: $("#via_2_9_seccion9").val(),
    hora_2_1_seccion9: $("#hora_2_1_seccion9").val(),
    hora_2_2_seccion9: $("#hora_2_2_seccion9").val(),

    //seccion10
    medico_seccion10: $("#medico_seccion10").val(),
    diagnostico_seccion10: $("#diagnostico_seccion10").val(),
    dias_hospitalizacion_seccion10: $("#dias_hospitalizacion_seccion10").val(),
    fecha_seccion10: $("#fecha_seccion10").val(),
    cama_seccion10: $("#cama_seccion10").val(),
    peso_seccion10: $("#peso_seccion10").val(),
    talla_seccion10: $("#talla_seccion10").val(),
    alergia_seccion10:$("#alergia_seccion10").val(),
    tabla_7_1_seccion10:$("#tabla_7_1_seccion10").val(),
    tabla_7_2_seccion10:$("#tabla_7_2_seccion10").val(),
    tabla_7_3_seccion10:$("#tabla_7_3_seccion10").val(),
    tabla_7_4_seccion10:$("#tabla_7_4_seccion10").val(),
    tabla_7_5_seccion10:$("#tabla_7_5_seccion10").val(),
    tabla_7_6_seccion10:$("#tabla_7_6_seccion10").val(),
    tabla_7_7_seccion10:$("#tabla_7_7_seccion10").val(),
    tabla_7_8_seccion10:$("#tabla_7_8_seccion10").val(),
    tabla_7_9_seccion10:$("#tabla_7_9_seccion10").val(),
    tabla_7_10_seccion10:$("#tabla_7_10_seccion10").val(),
    tabla_7_11_seccion10:$("#tabla_7_11_seccion10").val(),
    tabla_7_12_seccion10:$("#tabla_7_12_seccion10").val(),
    tabla_7_13_seccion10:$("#tabla_7_13_seccion10").val(),
    tabla_8_1_seccion10:$("#tabla_8_1_seccion10").val(),
    tabla_8_2_seccion10:$("#tabla_8_2_seccion10").val(),
    tabla_8_3_seccion10:$("#tabla_8_3_seccion10").val(),
    tabla_8_4_seccion10:$("#tabla_8_4_seccion10").val(),
    tabla_8_5_seccion10:$("#tabla_8_5_seccion10").val(),
    tabla_8_6_seccion10:$("#tabla_8_6_seccion10").val(),
    tabla_8_7_seccion10:$("#tabla_8_7_seccion10").val(),
    tabla_8_8_seccion10:$("#tabla_8_8_seccion10").val(),
    tabla_8_9_seccion10:$("#tabla_8_9_seccion10").val(),
    tabla_8_10_seccion10:$("#tabla_8_10_seccion10").val(),
    tabla_8_11_seccion10:$("#tabla_8_11_seccion10").val(),
    tabla_8_12_seccion10:$("#tabla_8_12_seccion10").val(),
    tabla_8_3_seccion10:$("#tabla_8_13_seccion10").val(),
    tabla_9_1_seccion10:$("#tabla_9_1_seccion10").val(),
    tabla_9_2_seccion10:$("#tabla_9_2_seccion10").val(),
    tabla_9_3_seccion10:$("#tabla_9_3_seccion10").val(),
    tabla_9_4_seccion10:$("#tabla_9_4_seccion10").val(),
    tabla_9_5_seccion10:$("#tabla_9_5_seccion10").val(),
    tabla_9_6_seccion10:$("#tabla_9_6_seccion10").val(),
    tabla_9_7_seccion10:$("#tabla_9_7_seccion10").val(),
    tabla_9_8_seccion10:$("#tabla_9_8_seccion10").val(),
    tabla_9_9_seccion10:$("#tabla_9_9_seccion10").val(),
    tabla_9_10_seccion10:$("#tabla_9_10_seccion10").val(),
    tabla_9_11_seccion10:$("#tabla_9_11_seccion10").val(),
    tabla_9_12_seccion10:$("#tabla_9_12_seccion10").val(),
    tabla_9_13_seccion10:$("#tabla_9_13_seccion10").val(),
    tabla_10_1_seccion10:$("#tabla_10_1_seccion10").val(),
    tabla_10_2_seccion10:$("#tabla_10_2_seccion10").val(),
    tabla_10_3_seccion10:$("#tabla_10_3_seccion10").val(),
    tabla_10_4_seccion10:$("#tabla_10_4_seccion10").val(),
    tabla_10_5_seccion10:$("#tabla_10_5_seccion10").val(),
    tabla_10_6_seccion10:$("#tabla_10_6_seccion10").val(),
    tabla_10_7_seccion10:$("#tabla_10_7_seccion10").val(),
    tabla_10_8_seccion10:$("#tabla_10_8_seccion10").val(),
    tabla_10_9_seccion10:$("#tabla_10_9_seccion10").val(),
    tabla_10_10_seccion10:$("#tabla_10_10_seccion10").val(),
    tabla_10_11_seccion10:$("#tabla_10_11_seccion10").val(),
    tabla_10_12_seccion10:$("#tabla_10_12_seccion10").val(),
    tabla_10_13_seccion10:$("#tabla_10_13_seccion10").val(),
    tabla_11_1_seccion10:$("#tabla_11_1_seccion10").val(),
    tabla_11_2_seccion10:$("#tabla_11_2_seccion10").val(),
    tabla_11_3_seccion10:$("#tabla_11_3_seccion10").val(),
    tabla_11_4_seccion10:$("#tabla_11_4_seccion10").val(),
    tabla_11_5_seccion10:$("#tabla_11_5_seccion10").val(),
    tabla_11_6_seccion10:$("#tabla_11_6_seccion10").val(),
    tabla_11_7_seccion10:$("#tabla_11_7_seccion10").val(),
    tabla_11_8_seccion10:$("#tabla_11_8_seccion10").val(),
    tabla_11_9_seccion10:$("#tabla_11_9_seccion10").val(),
    tabla_11_10_seccion10:$("#tabla_11_10_seccion10").val(),
    tabla_11_11_seccion10:$("#tabla_11_11_seccion10").val(),
    tabla_11_12_seccion10:$("#tabla_11_12_seccion10").val(),
    tabla_11_13_seccion10:$("#tabla_11_13_seccion10").val(),
    tabla_12_1_seccion10:$("#tabla_12_1_seccion10").val(),
    tabla_12_2_seccion10:$("#tabla_12_2_seccion10").val(),
    tabla_12_3_seccion10:$("#tabla_12_3_seccion10").val(),
    tabla_12_4_seccion10:$("#tabla_12_4_seccion10").val(),
    tabla_12_5_seccion10:$("#tabla_12_5_seccion10").val(),
    tabla_12_6_seccion10:$("#tabla_12_6_seccion10").val(),
    tabla_12_7_seccion10:$("#tabla_12_7_seccion10").val(),
    tabla_12_8_seccion10:$("#tabla_12_8_seccion10").val(),
    tabla_12_9_seccion10:$("#tabla_12_9_seccion10").val(),
    tabla_12_10_seccion10:$("#tabla_12_10_seccion10").val(),
    tabla_12_11_seccion10:$("#tabla_12_11_seccion10").val(),
    tabla_12_12_seccion10:$("#tabla_12_12_seccion10").val(),
    tabla_12_13_seccion10:$("#tabla_12_13_seccion10").val(),
    tabla_13_1_seccion10:$("#tabla_13_1_seccion10").val(),
    tabla_13_2_seccion10:$("#tabla_13_2_seccion10").val(),
    tabla_13_3_seccion10:$("#tabla_13_3_seccion10").val(),
    tabla_13_4_seccion10:$("#tabla_13_4_seccion10").val(),
    tabla_13_5_seccion10:$("#tabla_13_5_seccion10").val(),
    tabla_13_6_seccion10:$("#tabla_13_6_seccion10").val(),
    tabla_13_7_seccion10:$("#tabla_13_7_seccion10").val(),
    tabla_13_8_seccion10:$("#tabla_13_8_seccion10").val(),
    tabla_13_9_seccion10:$("#tabla_13_9_seccion10").val(),
    tabla_13_10_seccion10:$("#tabla_13_10_seccion10").val(),
    tabla_13_11_seccion10:$("#tabla_13_11_seccion10").val(),
    tabla_13_12_seccion10:$("#tabla_13_12_seccion10").val(),
    tabla_13_13_seccion10:$("#tabla_13_13_seccion10").val(),
    tabla_14_1_seccion10:$("#tabla_14_1_seccion10").val(),
    tabla_14_2_seccion10:$("#tabla_14_2_seccion10").val(),
    tabla_14_3_seccion10:$("#tabla_14_3_seccion10").val(),
    tabla_14_4_seccion10:$("#tabla_14_4_seccion10").val(),
    tabla_14_5_seccion10:$("#tabla_14_5_seccion10").val(),
    tabla_14_6_seccion10:$("#tabla_14_6_seccion10").val(),
    tabla_14_7_seccion10:$("#tabla_14_7_seccion10").val(),
    tabla_14_8_seccion10:$("#tabla_14_8_seccion10").val(),
    tabla_14_9_seccion10:$("#tabla_14_9_seccion10").val(),
    tabla_14_10_seccion10:$("#tabla_14_10_seccion10").val(),
    tabla_14_11_seccion10:$("#tabla_14_11_seccion10").val(),
    tabla_14_12_seccion10:$("#tabla_14_12_seccion10").val(),
    tabla_14_13_seccion10:$("#tabla_14_13_seccion10").val(),
    tabla_15_1_seccion10:$("#tabla_15_1_seccion10").val(),
    tabla_15_2_seccion10:$("#tabla_15_2_seccion10").val(),
    tabla_15_3_seccion10:$("#tabla_15_3_seccion10").val(),
    tabla_15_4_seccion10:$("#tabla_15_4_seccion10").val(),
    tabla_15_5_seccion10:$("#tabla_15_5_seccion10").val(),
    tabla_15_6_seccion10:$("#tabla_15_6_seccion10").val(),
    tabla_15_7_seccion10:$("#tabla_15_7_seccion10").val(),
    tabla_15_8_seccion10:$("#tabla_15_8_seccion10").val(),
    tabla_15_9_seccion10:$("#tabla_15_9_seccion10").val(),
    tabla_15_10_seccion10:$("#tabla_15_10_seccion10").val(),
    tabla_15_11_seccion10:$("#tabla_15_11_seccion10").val(),
    tabla_15_12_seccion10:$("#tabla_15_12_seccion10").val(),
    tabla_15_13_seccion10:$("#tabla_15_13_seccion10").val(),
    tabla_16_1_seccion10:$("#tabla_16_1_seccion10").val(),
    tabla_16_2_seccion10:$("#tabla_16_2_seccion10").val(),
    tabla_16_3_seccion10:$("#tabla_16_3_seccion10").val(),
    tabla_16_4_seccion10:$("#tabla_16_4_seccion10").val(),
    tabla_16_5_seccion10:$("#tabla_16_5_seccion10").val(),
    tabla_16_6_seccion10:$("#tabla_16_6_seccion10").val(),
    tabla_16_7_seccion10:$("#tabla_16_7_seccion10").val(),
    tabla_16_8_seccion10:$("#tabla_16_8_seccion10").val(),
    tabla_16_9_seccion10:$("#tabla_16_9_seccion10").val(),
    tabla_16_10_seccion10:$("#tabla_16_10_seccion10").val(),
    tabla_16_11_seccion10:$("#tabla_16_11_seccion10").val(),
    tabla_16_12_seccion10:$("#tabla_16_12_seccion10").val(),
    tabla_16_13_seccion10:$("#tabla_16_13_seccion10").val(),
    tabla_17_1_seccion10:$("#tabla_17_1_seccion10").val(),
    tabla_17_2_seccion10:$("#tabla_17_2_seccion10").val(),
    tabla_17_3_seccion10:$("#tabla_17_3_seccion10").val(),
    tabla_17_4_seccion10:$("#tabla_17_4_seccion10").val(),
    tabla_17_5_seccion10:$("#tabla_17_5_seccion10").val(),
    tabla_17_6_seccion10:$("#tabla_17_6_seccion10").val(),
    tabla_17_7_seccion10:$("#tabla_17_7_seccion10").val(),
    tabla_17_8_seccion10:$("#tabla_17_8_seccion10").val(),
    tabla_17_9_seccion10:$("#tabla_17_9_seccion10").val(),
    tabla_17_10_seccion10:$("#tabla_17_10_seccion10").val(),
    tabla_17_11_seccion10:$("#tabla_17_11_seccion10").val(),
    tabla_17_12_seccion10:$("#tabla_17_12_seccion10").val(),
    tabla_17_13_seccion10:$("#tabla_17_13_seccion10").val(),
    tabla_18_1_seccion10:$("#tabla_18_1_seccion10").val(),
    tabla_18_2_seccion10:$("#tabla_18_2_seccion10").val(),
    tabla_18_3_seccion10:$("#tabla_18_3_seccion10").val(),
    tabla_18_4_seccion10:$("#tabla_18_4_seccion10").val(),
    tabla_18_5_seccion10:$("#tabla_18_5_seccion10").val(),
    tabla_18_6_seccion10:$("#tabla_18_6_seccion10").val(),
    tabla_18_7_seccion10:$("#tabla_18_7_seccion10").val(),
    tabla_18_8_seccion10:$("#tabla_18_8_seccion10").val(),
    tabla_18_9_seccion10:$("#tabla_18_9_seccion10").val(),
    tabla_18_10_seccion10:$("#tabla_18_10_seccion10").val(),
    tabla_18_11_seccion10:$("#tabla_18_11_seccion10").val(),
    tabla_18_12_seccion10:$("#tabla_18_12_seccion10").val(),
    tabla_18_13_seccion10:$("#tabla_18_13_seccion10").val(),
    tabla_19_1_seccion10:$("#tabla_19_1_seccion10").val(),
    tabla_19_2_seccion10:$("#tabla_19_2_seccion10").val(),
    tabla_19_3_seccion10:$("#tabla_19_3_seccion10").val(),
    tabla_19_4_seccion10:$("#tabla_19_4_seccion10").val(),
    tabla_19_5_seccion10:$("#tabla_19_5_seccion10").val(),
    tabla_19_6_seccion10:$("#tabla_19_6_seccion10").val(),
    tabla_19_7_seccion10:$("#tabla_19_7_seccion10").val(),
    tabla_19_8_seccion10:$("#tabla_19_8_seccion10").val(),
    tabla_19_9_seccion10:$("#tabla_19_9_seccion10").val(),
    tabla_19_10_seccion10:$("#tabla_19_10_seccion10").val(),
    tabla_19_11_seccion10:$("#tabla_19_11_seccion10").val(),
    tabla_19_12_seccion10:$("#tabla_19_12_seccion10").val(),
    tabla_19_13_seccion10:$("#tabla_19_13_seccion10").val(),
    tabla_20_1_seccion10:$("#tabla_20_1_seccion10").val(),
    tabla_20_2_seccion10:$("#tabla_20_2_seccion10").val(),
    tabla_20_3_seccion10:$("#tabla_20_3_seccion10").val(),
    tabla_20_4_seccion10:$("#tabla_20_4_seccion10").val(),
    tabla_20_5_seccion10:$("#tabla_20_5_seccion10").val(),
    tabla_20_6_seccion10:$("#tabla_20_6_seccion10").val(),
    tabla_20_7_seccion10:$("#tabla_20_7_seccion10").val(),
    tabla_20_8_seccion10:$("#tabla_20_8_seccion10").val(),
    tabla_20_9_seccion10:$("#tabla_20_9_seccion10").val(),
    tabla_20_10_seccion10:$("#tabla_20_10_seccion10").val(),
    tabla_20_11_seccion10:$("#tabla_20_11_seccion10").val(),
    tabla_20_12_seccion10:$("#tabla_20_12_seccion10").val(),
    tabla_20_13_seccion10:$("#tabla_20_13_seccion10").val(),
    tabla_21_1_seccion10:$("#tabla_21_1_seccion10").val(),
    tabla_21_2_seccion10:$("#tabla_21_2_seccion10").val(),
    tabla_21_3_seccion10:$("#tabla_21_3_seccion10").val(),
    tabla_21_4_seccion10:$("#tabla_21_4_seccion10").val(),
    tabla_21_5_seccion10:$("#tabla_21_5_seccion10").val(),
    tabla_21_6_seccion10:$("#tabla_21_6_seccion10").val(),
    tabla_21_7_seccion10:$("#tabla_21_7_seccion10").val(),
    tabla_21_8_seccion10:$("#tabla_21_8_seccion10").val(),
    tabla_21_9_seccion10:$("#tabla_21_9_seccion10").val(),
    tabla_21_10_seccion10:$("#tabla_21_10_seccion10").val(),
    tabla_21_11_seccion10:$("#tabla_21_11_seccion10").val(),
    tabla_21_12_seccion10:$("#tabla_21_12_seccion10").val(),
    tabla_21_13_seccion10:$("#tabla_21_13_seccion10").val(),
    tabla_22_1_seccion10:$("#tabla_22_1_seccion10").val(),
    tabla_22_2_seccion10:$("#tabla_22_2_seccion10").val(),
    tabla_22_3_seccion10:$("#tabla_22_3_seccion10").val(),
    tabla_22_4_seccion10:$("#tabla_22_4_seccion10").val(),
    tabla_22_5_seccion10:$("#tabla_22_5_seccion10").val(),
    tabla_22_6_seccion10:$("#tabla_22_6_seccion10").val(),
    tabla_22_7_seccion10:$("#tabla_22_7_seccion10").val(),
    tabla_22_8_seccion10:$("#tabla_22_8_seccion10").val(),
    tabla_22_9_seccion10:$("#tabla_22_9_seccion10").val(),
    tabla_22_10_seccion10:$("#tabla_22_10_seccion10").val(),
    tabla_22_11_seccion10:$("#tabla_22_11_seccion10").val(),
    tabla_22_12_seccion10:$("#tabla_22_12_seccion10").val(),
    tabla_22_13_seccion10:$("#tabla_22_13_seccion10").val(),
    tabla_23_1_seccion10:$("#tabla_23_1_seccion10").val(),
    tabla_23_2_seccion10:$("#tabla_23_2_seccion10").val(),
    tabla_23_3_seccion10:$("#tabla_23_3_seccion10").val(),
    tabla_23_4_seccion10:$("#tabla_23_4_seccion10").val(),
    tabla_23_5_seccion10:$("#tabla_23_5_seccion10").val(),
    tabla_23_6_seccion10:$("#tabla_23_6_seccion10").val(),
    tabla_23_7_seccion10:$("#tabla_23_7_seccion10").val(),
    tabla_23_8_seccion10:$("#tabla_23_8_seccion10").val(),
    tabla_23_9_seccion10:$("#tabla_23_9_seccion10").val(),
    tabla_23_10_seccion10:$("#tabla_23_10_seccion10").val(),
    tabla_23_11_seccion10:$("#tabla_23_11_seccion10").val(),
    tabla_23_12_seccion10:$("#tabla_23_12_seccion10").val(),
    tabla_23_13_seccion10:$("#tabla_23_13_seccion10").val(),
    tabla_24_1_seccion10:$("#tabla_24_1_seccion10").val(),
    tabla_24_2_seccion10:$("#tabla_24_2_seccion10").val(),
    tabla_24_3_seccion10:$("#tabla_24_3_seccion10").val(),
    tabla_24_4_seccion10:$("#tabla_24_4_seccion10").val(),
    tabla_24_5_seccion10:$("#tabla_24_5_seccion10").val(),
    tabla_24_6_seccion10:$("#tabla_24_6_seccion10").val(),
    tabla_24_7_seccion10:$("#tabla_24_7_seccion10").val(),
    tabla_24_8_seccion10:$("#tabla_24_8_seccion10").val(),
    tabla_24_9_seccion10:$("#tabla_24_9_seccion10").val(),
    tabla_24_10_seccion10:$("#tabla_24_10_seccion10").val(),
    tabla_24_11_seccion10:$("#tabla_24_11_seccion10").val(),
    tabla_24_12_seccion10:$("#tabla_24_12_seccion10").val(),
    tabla_24_13_seccion10:$("#tabla_24_13_seccion10").val(),
    tabla_1_1_seccion10:$("#tabla_1_1_seccion10").val(),
    tabla_1_2_seccion10:$("#tabla_1_2_seccion10").val(),
    tabla_1_3_seccion10:$("#tabla_1_3_seccion10").val(),
    tabla_1_4_seccion10:$("#tabla_1_4_seccion10").val(),
    tabla_1_5_seccion10:$("#tabla_1_5_seccion10").val(),
    tabla_1_6_seccion10:$("#tabla_1_6_seccion10").val(),
    tabla_1_7_seccion10:$("#tabla_1_7_seccion10").val(),
    tabla_1_8_seccion10:$("#tabla_1_8_seccion10").val(),
    tabla_1_9_seccion10:$("#tabla_1_9_seccion10").val(),
    tabla_1_10_seccion10:$("#tabla_1_10_seccion10").val(),
    tabla_1_11_seccion10:$("#tabla_1_11_seccion10").val(),
    tabla_1_12_seccion10:$("#tabla_1_12_seccion10").val(),
    tabla_1_13_seccion10:$("#tabla_1_13_seccion10").val(),
    tabla_2_1_seccion10:$("#tabla_2_1_seccion10").val(),
    tabla_2_2_seccion10:$("#tabla_2_2_seccion10").val(),
    tabla_2_3_seccion10:$("#tabla_2_3_seccion10").val(),
    tabla_2_4_seccion10:$("#tabla_2_4_seccion10").val(),
    tabla_2_5_seccion10:$("#tabla_2_5_seccion10").val(),
    tabla_2_6_seccion10:$("#tabla_2_6_seccion10").val(),
    tabla_2_7_seccion10:$("#tabla_2_7_seccion10").val(),
    tabla_2_8_seccion10:$("#tabla_2_8_seccion10").val(),
    tabla_2_9_seccion10:$("#tabla_2_9_seccion10").val(),
    tabla_2_10_seccion10:$("#tabla_2_10_seccion10").val(),
    tabla_2_11_seccion10:$("#tabla_2_11_seccion10").val(),
    tabla_2_12_seccion10:$("#tabla_2_12_seccion10").val(),
    tabla_2_13_seccion10:$("#tabla_2_13_seccion10").val(),
    tabla_3_1_seccion10:$("#tabla_3_1_seccion10").val(),
    tabla_3_2_seccion10:$("#tabla_3_2_seccion10").val(),
    tabla_3_3_seccion10:$("#tabla_3_3_seccion10").val(),
    tabla_3_4_seccion10:$("#tabla_3_4_seccion10").val(),
    tabla_3_5_seccion10:$("#tabla_3_5_seccion10").val(),
    tabla_3_6_seccion10:$("#tabla_3_6_seccion10").val(),
    tabla_3_7_seccion10:$("#tabla_3_7_seccion10").val(),
    tabla_3_8_seccion10:$("#tabla_3_8_seccion10").val(),
    tabla_3_9_seccion10:$("#tabla_3_9_seccion10").val(),
    tabla_3_10_seccion10:$("#tabla_3_10_seccion10").val(),
    tabla_3_11_seccion10:$("#tabla_3_11_seccion10").val(),
    tabla_3_12_seccion10:$("#tabla_3_12_seccion10").val(),
    tabla_3_13_seccion10:$("#tabla_3_13_seccion10").val(),
    tabla_4_1_seccion10:$("#tabla_4_1_seccion10").val(),
    tabla_4_2_seccion10:$("#tabla_4_2_seccion10").val(),
    tabla_4_3_seccion10:$("#tabla_4_3_seccion10").val(),
    tabla_4_4_seccion10:$("#tabla_4_4_seccion10").val(),
    tabla_4_5_seccion10:$("#tabla_4_5_seccion10").val(),
    tabla_4_6_seccion10:$("#tabla_4_6_seccion10").val(),
    tabla_4_7_seccion10:$("#tabla_4_7_seccion10").val(),
    tabla_4_8_seccion10:$("#tabla_4_8_seccion10").val(),
    tabla_4_9_seccion10:$("#tabla_4_9_seccion10").val(),
    tabla_4_10_seccion10:$("#tabla_4_10_seccion10").val(),
    tabla_4_11_seccion10:$("#tabla_4_11_seccion10").val(),
    tabla_4_12_seccion10:$("#tabla_4_12_seccion10").val(),
    tabla_4_13_seccion10:$("#tabla_4_13_seccion10").val(),
    tabla_5_1_seccion10:$("#tabla_5_1_seccion10").val(),
    tabla_5_2_seccion10:$("#tabla_5_2_seccion10").val(),
    tabla_5_3_seccion10:$("#tabla_5_3_seccion10").val(),
    tabla_5_4_seccion10:$("#tabla_5_4_seccion10").val(),
    tabla_5_5_seccion10:$("#tabla_5_5_seccion10").val(),
    tabla_5_6_seccion10:$("#tabla_5_6_seccion10").val(),
    tabla_5_7_seccion10:$("#tabla_5_7_seccion10").val(),
    tabla_5_8_seccion10:$("#tabla_5_8_seccion10").val(),
    tabla_5_9_seccion10:$("#tabla_5_9_seccion10").val(),
    tabla_5_10_seccion10:$("#tabla_5_10_seccion10").val(),
    tabla_5_11_seccion10:$("#tabla_5_11_seccion10").val(),
    tabla_5_12_seccion10:$("#tabla_5_12_seccion10").val(),
    tabla_5_13_seccion10:$("#tabla_5_13_seccion10").val(),
    tabla_6_1_seccion10:$("#tabla_6_1_seccion10").val(),
    tabla_6_2_seccion10:$("#tabla_6_2_seccion10").val(),
    tabla_6_3_seccion10:$("#tabla_6_3_seccion10").val(),
    tabla_6_4_seccion10:$("#tabla_6_4_seccion10").val(),
    tabla_6_5_seccion10:$("#tabla_6_5_seccion10").val(),
    tabla_6_6_seccion10:$("#tabla_6_6_seccion10").val(),
    tabla_6_7_seccion10:$("#tabla_6_7_seccion10").val(),
    tabla_6_8_seccion10:$("#tabla_6_8_seccion10").val(),
    tabla_6_9_seccion10:$("#tabla_6_9_seccion10").val(),
    tabla_6_10_seccion10:$("#tabla_6_10_seccion10").val(),
    tabla_6_11_seccion10:$("#tabla_6_11_seccion10").val(),
    tabla_6_12_seccion10:$("#tabla_6_12_seccion10").val(),
    tabla_6_13_seccion10:$("#tabla_6_13_seccion10").val(),
    t_arterial_1_seccion10:$("#t_arterial_1_seccion10").val(),
    t_arterial_2_seccion10:$("#t_arterial_2_seccion10").val(),
    t_arterial_3_seccion10:$("#t_arterial_3_seccion10").val(),
    t_arterial_4_seccion10:$("#t_arterial_4_seccion10").val(),
    t_arterial_5_seccion10:$("#t_arterial_5_seccion10").val(),
    t_arterial_6_seccion10:$("#t_arterial_6_seccion10").val(),
    t_arterial_7_seccion10:$("#t_arterial_7_seccion10").val(),
    t_arterial_8_seccion10:$("#t_arterial_8_seccion10").val(),
    t_arterial_9_seccion10:$("#t_arterial_9_seccion10").val(),
    t_arterial_10_seccion10:$("#t_arterial_10_seccion10").val(),
    t_arterial_11_seccion10:$("#t_arterial_11_seccion10").val(),
    t_arterial_12_seccion10:$("#t_arterial_12_seccion10").val(),
    f_resp_1_seccion10:$("#f_resp_1_seccion10").val(),
    f_resp_2_seccion10:$("#f_resp_2_seccion10").val(),
    f_resp_3_seccion10:$("#f_resp_3_seccion10").val(),
    f_resp_4_seccion10:$("#f_resp_4_seccion10").val(),
    f_resp_5_seccion10:$("#f_resp_5_seccion10").val(),
    f_resp_6_seccion10:$("#f_resp_6_seccion10").val(),
    f_resp_7_seccion10:$("#f_resp_7_seccion10").val(),
    f_resp_8_seccion10:$("#f_resp_8_seccion10").val(),
    f_resp_9_seccion10:$("#f_resp_9_seccion10").val(),
    f_resp_10_seccion10:$("#f_resp_10_seccion10").val(),
    f_resp_11_seccion10:$("#f_resp_11_seccion10").val(),
    f_resp_12_seccion10:$("#f_resp_12_seccion10").val(),
    perimetro_1_seccion10:$("#perimetro_1_seccion10").val(),
    perimetro_2_seccion10:$("#perimetro_2_seccion10").val(),
    perimetro_3_seccion10:$("#perimetro_3_seccion10").val(),
    perimetro_4_seccion10:$("#perimetro_4_seccion10").val(),
    perimetro_5_seccion10:$("#perimetro_5_seccion10").val(),
    perimetro_6_seccion10:$("#perimetro_6_seccion10").val(),
    perimetro_7_seccion10:$("#perimetro_7_seccion10").val(),
    perimetro_8_seccion10:$("#perimetro_8_seccion10").val(),
    perimetro_9_seccion10:$("#perimetro_9_seccion10").val(),
    perimetro_10_seccion10:$("#perimetro_10_seccion10").val(),
    perimetro_11_seccion10:$("#perimetro_11_seccion10").val(),
    perimetro_12_seccion10:$("#perimetro_12_seccion10").val(),
    formula_1_seccion10:$("#formula_1_seccion10").val(),
    formula_2_seccion10:$("#formula_2_seccion10").val(),
    formula_3_seccion10:$("#formula_3_seccion10").val(),
    formula_4_seccion10:$("#formula_4_seccion10").val(),
    formula_5_seccion10:$("#formula_5_seccion10").val(),
    formula_6_seccion10:$("#formula_6_seccion10").val(),
    formula_7_seccion10:$("#formula_7_seccion10").val(),
    formula_8_seccion10:$("#formula_8_seccion10").val(),
    formula_9_seccion10:$("#formula_9_seccion10").val(),
    formula_10_seccion10:$("#formula_10_seccion10").val(),
    formula_11_seccion10:$("#formula_11_seccion10").val(),
    formula_12_seccion10:$("#formula_12_seccion10").val(),
    dieta_1_seccion10:$("#dieta_1_seccion10").val(),
    dieta_2_seccion10:$("#dieta_2_seccion10").val(),
    dieta_3_seccion10:$("#dieta_3_seccion10").val(),
    lib_orales_1_seccion10:$("#lib_orales_1_seccion10").val(),
    lib_orales_2_seccion10:$("#lib_orales_2_seccion10").val(),
    lib_orales_3_seccion10:$("#lib_orales_3_seccion10").val(),
    lib_orales_4_seccion10:$("#lib_orales_4_seccion10").val(),
    lib_orales_5_seccion10:$("#lib_orales_5_seccion10").val(),
    lib_orales_6_seccion10:$("#lib_orales_6_seccion10").val(),
    lib_orales_7_seccion10:$("#lib_orales_7_seccion10").val(),
    lib_orales_8_seccion10:$("#lib_orales_8_seccion10").val(),
    lib_orales_9_seccion10:$("#lib_orales_9_seccion10").val(),
    lib_orales_10_seccion10:$("#lib_orales_10_seccion10").val(),
    lib_orales_11_seccion10:$("#lib_orales_11_seccion10").val(),
    lib_orales_12_seccion10:$("#lib_orales_12_seccion10").val(),
    total_1_seccion10:$("#total_1_seccion10").val(),
    total_2_seccion10:$("#total_2_seccion10").val(),
    total_3_seccion10:$("#total_3_seccion10").val(),
    liquidos_parentales_1_seccion10:$("#liquidos_parentales_1_seccion10").val(),
    liquidos_parentales_2_seccion10:$("#liquidos_parentales_2_seccion10").val(),
    liquidos_parentales_3_seccion10:$("#liquidos_parentales_3_seccion10").val(),
    electrolitos_1_seccion10:$("#electrolitos_1_seccion10").val(),
    electrolitos_2_seccion10:$("#electrolitos_2_seccion10").val(),
    electrolitos_3_seccion10:$("#electrolitos_3_seccion10").val(),
    total_electrolitos_1_seccion10:$("#total_electrolitos_1_seccion10").val(),
    total_electrolitos_2_seccion10:$("#total_electrolitos_2_seccion10").val(),
    total_electrolitos_3_seccion10:$("#total_electrolitos_3_seccion10").val(),
    uresis_1_seccion10: $("#uresis_1_seccion10").val(),
    uresis_2_seccion10: $("#uresis_2_seccion10").val(),
    uresis_3_seccion10: $("#uresis_3_seccion10").val(),
    evacuaciones_1_seccion10: $("#evacuaciones_1_seccion10").val(),
    evacuaciones_2_seccion10: $("#evacuaciones_2_seccion10").val(),
    evacuaciones_3_seccion10: $("#evacuaciones_3_seccion10").val(),
    lab_1_seccion10:$("#lab_1_seccion10").val(),
    lab_2_seccion10:$("#lab_2_seccion10").val(),
    lab_3_seccion10:$("#lab_3_seccion10").val(),
    lab_4_seccion10:$("#lab_4_seccion10").val(),
    lab_5_seccion10:$("#lab_5_seccion10").val(),
    lab_6_seccion10:$("#lab_6_seccion10").val(),
    lab_7_seccion10:$("#lab_7_seccion10").val(),
    lab_8_seccion10:$("#lab_8_seccion10").val(),
    lab_9_seccion10:$("#lab_9_seccion10").val(),
    lab_10_seccion10:$("#lab_10_seccion10").val(),
    lab_11_seccion10:$("#lab_11_seccion10").val(),
    lab_12_seccion10:$("#lab_12_seccion10").val(),
    reactivos_1_seccion10:$("#reactivos_1_seccion10").val(),
    reactivos_2_seccion10:$("#reactivos_2_seccion10").val(),
    reactivos_3_seccion10:$("#reactivos_3_seccion10").val(),
    reactivos_4_seccion10:$("#reactivos_4_seccion10").val(),
    reactivos_5_seccion10:$("#reactivos_5_seccion10").val(),
    reactivos_6_seccion10:$("#reactivos_6_seccion10").val(),
    reactivos_7_seccion10:$("#reactivos_7_seccion10").val(),
    reactivos_8_seccion10:$("#reactivos_8_seccion10").val(),
    reactivos_9_seccion10:$("#reactivos_9_seccion10").val(),
    reactivos_10_seccion10:$("#reactivos_10_seccion10").val(),
    reactivos_11_seccion10:$("#reactivos_11_seccion10").val(),
    reactivos_12_seccion10:$("#reactivos_12_seccion10").val(),
    otros_estudios_1_seccion10:$("#otros_estudios_1_seccion10").val(),
    otros_estudios_2_seccion10:$("#otros_estudios_2_seccion10").val(),
    otros_estudios_3_seccion10:$("#otros_estudios_3_seccion10").val(),
    otros_estudios_4_seccion10:$("#otros_estudios_4_seccion10").val(),
    otros_estudios_5_seccion10:$("#otros_estudios_5_seccion10").val(),
    otros_estudios_6_seccion10:$("#otros_estudios_6_seccion10").val(),
    otros_estudios_7_seccion10:$("#otros_estudios_7_seccion10").val(),
    otros_estudios_8_seccion10:$("#otros_estudios_8_seccion10").val(),
    otros_estudios_9_seccion10:$("#otros_estudios_9_seccion10").val(),
    otros_estudios_10_seccion10:$("#otros_estudios_10_seccion10").val(),
    otros_estudios_11_seccion10:$("#otros_estudios_11_seccion10").val(),
    otros_estudios_12_seccion10:$("#otros_estudios_12_seccion10").val(),
    cateter_corto_dolor_seccion10:$("#cateter_corto_dolor_seccion10").val(),
    cateter_corto_calor_seccion10:$("#cateter_corto_calor_seccion10").val(),
    cateter_corto_rubor_seccion10:$("#cateter_corto_rubor_seccion10").val(),
    cateter_corto_numero_seccion10:$("#cateter_corto_numero_seccion10").val(),
    cateter_corto_numero_punciones_seccion10:$("#cateter_corto_numero_punciones_seccion10").val(),
    cateter_central_dolor_seccion10:$("#cateter_central_dolor_seccion10").val(),
    cateter_central_calor_seccion10:$("#cateter_central_calor_seccion10").val(),
    cateter_central_rubor_seccion10:$("#cateter_central_rubor_seccion10").val(),
    cateter_corto_dolor_seccion10:$("#cateter_corto_recanaliza_seccion10").val(),
    cateter_central_recanaliza_seccion10:$("#cateter_central_recanaliza_seccion10").val(),
    dieta_seccion10: $("#dieta_seccion10").val(),
    fecha_1_seccion10:$("#fecha_1_seccion10").val(),
    fecha_2_seccion10:$("#fecha_2_seccion10").val(),
    fecha_3_seccion10:$("#fecha_3_seccion10").val(),
    fecha_4_seccion10:$("#fecha_4_seccion10").val(),
    fecha_5_seccion10:$("#fecha_5_seccion10").val(),
    fecha_6_seccion10:$("#fecha_6_seccion10").val(),
    fecha_7_seccion10:$("#fecha_7_seccion10").val(),
    fecha_8_seccion10:$("#fecha_8_seccion10").val(),
    fecha_9_seccion10:$("#fecha_9_seccion10").val(),
    fecha_10_seccion10:$("#fecha_10_seccion10").val(),
    medicamentos_1_seccion10:$("#medicamentos_1_seccion10").val(),
    medicamentos_2_seccion10:$("#medicamentos_2_seccion10").val(),
    medicamentos_3_seccion10:$("#medicamentos_3_seccion10").val(),
    medicamentos_4_seccion10:$("#medicamentos_4_seccion10").val(),
    medicamentos_5_seccion10:$("#medicamentos_5_seccion10").val(),
    medicamentos_6_seccion10:$("#medicamentos_6_seccion10").val(),
    medicamentos_7_seccion10:$("#medicamentos_7_seccion10").val(),
    medicamentos_8_seccion10:$("#medicamentos_8_seccion10").val(),
    medicamentos_9_seccion10:$("#medicamentos_9_seccion10").val(),
    medicamentos_10_seccion10:$("#medicamentos_10_seccion10").val(),
    dosis_1_seccion10:$("#dosis_1_seccion10").val(),
    dosis_2_seccion10:$("#dosis_2_seccion10").val(),
    dosis_3_seccion10:$("#dosis_3_seccion10").val(),
    dosis_4_seccion10:$("#dosis_4_seccion10").val(),
    dosis_5_seccion10:$("#dosis_5_seccion10").val(),
    dosis_6_seccion10:$("#dosis_6_seccion10").val(),
    dosis_7_seccion10:$("#dosis_7_seccion10").val(),
    dosis_8_seccion10:$("#dosis_8_seccion10").val(),
    dosis_9_seccion10:$("#dosis_9_seccion10").val(),
    dosis_10_seccion10:$("#dosis_10_seccion10").val(),
    via_1_seccion10:$("#via_1_seccion10").val(),
    via_2_seccion10:$("#via_2_seccion10").val(),
    via_3_seccion10:$("#via_3_seccion10").val(),
    via_4_seccion10:$("#via_4_seccion10").val(),
    via_5_seccion10:$("#via_5_seccion10").val(),
    via_6_seccion10:$("#via_6_seccion10").val(),
    via_7_seccion10:$("#via_7_seccion10").val(),
    via_8_seccion10:$("#via_8_seccion10").val(),
    via_9_seccion10:$("#via_9_seccion10").val(),
    via_10_seccion10:$("#via_10_seccion10").val(),
    horarios_1_seccion10:$("#horarios_1_seccion10").val(),
    horarios_2_seccion10:$("#horarios_2_seccion10").val(),
    horarios_3_seccion10:$("#horarios_3_seccion10").val(),
    horarios_4_seccion10:$("#horarios_4_seccion10").val(),
    horarios_5_seccion10:$("#horarios_5_seccion10").val(),
    horarios_6_seccion10:$("#horarios_6_seccion10").val(),
    horarios_7_seccion10:$("#horarios_7_seccion10").val(),
    horarios_8_seccion10:$("#horarios_8_seccion10").val(),
    horarios_9_seccion10:$("#horarios_9_seccion10").val(),
    horarios_10_seccion10:$("#horarios_10_seccion10").val(),
    hora_nota_1_seccion10:$("#hora_nota_1_seccion10").val(),
    hora_nota_2_seccion10:$("#hora_nota_2_seccion10").val(),
    hora_nota_3_seccion10:$("#hora_nota_3_seccion10").val(),
    nota_enfermeria_1_seccion10:$("#nota_enfermeria_1_seccion10").val(),
    nota_enfermeria_2_seccion10:$("#nota_enfermeria_2_seccion10").val(),
    nota_enfermeria_3_seccion10:$("#nota_enfermeria_3_seccion10").val(),
    nota_enfermeria_4_seccion10:$("#nota_enfermeria_4_seccion10").val(),
    nota_enfermeria_5_seccion10:$("#nota_enfermeria_5_seccion10").val(),
    nota_enfermeria_6_seccion10:$("#nota_enfermeria_6_seccion10").val(),
    nota_enfermeria_7_seccion10:$("#nota_enfermeria_7_seccion10").val(),
    nota_enfermeria_8_seccion10:$("#nota_enfermeria_8_seccion10").val(),
    nota_enfermeria_9_seccion10:$("#nota_enfermeria_9_seccion10").val(),
    nota_enfermeria_10_seccion10:$("#nota_enfermeria_10_seccion10").val(),
    nota_enfermeria_11_seccion10:$("#nota_enfermeria_11_seccion10").val(),
    nota_enfermeria_12_seccion10:$("#nota_enfermeria_12_seccion10").val(),
    nota_enfermeria_13_seccion10:$("#nota_enfermeria_13_seccion10").val(),
    nota_enfermeria_14_seccion10:$("#nota_enfermeria_14_seccion10").val(),
    nota_enfermeria_15_seccion10:$("#nota_enfermeria_15_seccion10").val(),
    nota_enfermeria_16_seccion10:$("#nota_enfermeria_16_seccion10").val(),
    nota_enfermeria_17_seccion10:$("#nota_enfermeria_17_seccion10").val(),
    nota_enfermeria_18_seccion10:$("#nota_enfermeria_18_seccion10").val(),
    nota_enfermeria_19_seccion10:$("#nota_enfermeria_19_seccion10").val(),
    nota_enfermeria_20_seccion10:$("#nota_enfermeria_20_seccion10").val(),
    nota_enfermeria_21_seccion10:$("#nota_enfermeria_21_seccion10").val(),
    nota_enfermeria_22_seccion10:$("#nota_enfermeria_22_seccion10").val(),
    nota_enfermeria_23_seccion10:$("#nota_enfermeria_23_seccion10").val(),
    nota_enfermeria_24_seccion10:$("#nota_enfermeria_24_seccion10").val(),
    nota_enfermeria_25_seccion10:$("#nota_enfermeria_25_seccion10").val(),
    nota_enfermeria_26_seccion10:$("#nota_enfermeria_26_seccion10").val(),
    nota_enfermeria_27_seccion10:$("#nota_enfermeria_27_seccion10").val(),
    enfermera_nota_seccion10:$("#enfermera_nota_seccion10").val(),
    firma_nota_seccion10:$("#firma_nota_seccion10").val(),



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
