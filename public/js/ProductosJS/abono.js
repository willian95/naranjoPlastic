var arregloAbonos;
var totalPagado = 0;
var totalDinero = 0;
var idModif;

$('#pagosModal').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset(); //para borrar todos los datos que tenga los input, textareas, select.
});

function getElement(id){
    return document.getElementById(id);
}

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

$( document ).ready(function() {
    $('#selectCliente').select2('open');

  $('a').removeClass('active');
  $('#menuProducto').addClass('active');
  $('#menuAbonoProducto').addClass('active');
});

$("#selectCliente").change(function()
    {
        $('#codigo').val($('#selectCliente').val());
        idClientes = $('#selectCliente').val();
        buscaVentas(idClientes, 1);
        $('#selectProducto').select2('open');
    }
);

function buscaVentas(idCliente, idTipoVenta){
    $.ajax({
        url:  'cargaVentas',
        type: 'GET',
        data: {idCliente:idCliente, idTipoVenta: idTipoVenta},
        success: function(data, textStatus, jqXHR) {
            arregloAbonos = data.responseData;
            desplegarAdeudos()
            console.log(data.responseData);
        }
    });
}

function desplegarAdeudos(){
    var tabla = getElement("ventasDeuda");
	tabla.innerHTML = "";
    var cadena = "";
    if(arregloAbonos.length==0){
      swal({
          position:'center',
          type: 'success',
          title: 'No cuenta con adeudos!',
          showConfirmButton: false,
          timer: 1500
      });
    }
    for(var i=0;i<arregloAbonos.length; i++){
        var item = arregloAbonos[i];
        cadena += "<tr><td>"+item.id+"</td><td>"+item.created_at+"</td><td>"+item.total + "</td><td>"+item.abono + "</td> <td> "+(item.total-item.abono).toFixed(2)+
        "</td> <td><button onclick=abona("+ i +") class=\"btn btn-danger\"><i class=\"fa fa-usd\" aria-hidden=\"true\"></i></button></td> </tr>";
    }
    tabla.innerHTML = cadena;
}

function abona(i){
    idModif = i;
    $('#selectO').hide();
    $('#pagosModal').modal('show');
    $('#btnNota').hide();
    $('#btnPagar').show();
    $('#tpesos').val((arregloAbonos[i].total-arregloAbonos[i].abono).toFixed(2));
    $('#tdolar').val(((arregloAbonos[i].total-arregloAbonos[i].abono)/$('#tcambio').val()).toFixed(2));
}

function realizarCobro(){
    var totalPagado = 0;
    var efectivo = parseFloat(($('#efectivo').val() != '' )?($('#efectivo').val()):0);
    var dolar = parseFloat(($('#dolar').val() != '' )?(($('#dolar').val())*($('#tcambio').val())):0);
    var tarjeta = parseFloat(($('#tarjeta').val() != '' )?($('#tarjeta').val()):0);
    var deposito = parseFloat(($('#deposito').val() != '' )?($('#deposito').val()):0);
    var transferencia = parseFloat(($('#transferencia').val() != '' )?($('#transferencia').val()):0);
    totalPagado = efectivo+dolar+tarjeta+deposito+transferencia;

    if(parseFloat(totalPagado) >= parseFloat($('#tpesos').val())){
        if(totalPagado > $('#tpesos').val()){
            totalDinero = (totalPagado.toFixed(2) - parseFloat($('#tpesos').val())).toFixed(2);

            swal({
                title: 'Estás seguro?',
                text: 'Cambio: '+totalDinero+'',
                showCancelButton: true,
                confirmButtonColor: '#17bac2',
                cancelButtonColor: '#b5b3b3',
                confirmButtonText: 'Si, Pagar!',
                cancelButtonText: 'No, cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    cobrar(arregloAbonos[idModif].id,$('#tpesos').val() ,'Pagado');
                }
            })
        }
        else{
            cobrar(arregloAbonos[idModif].id,$('#tpesos').val(),'Pagado');
        }
    }
    else{
        cobrar(arregloAbonos[idModif].id, parseFloat(totalPagado)+ parseFloat(arregloAbonos[idModif].abono),'Pendiente');
    }
}

function cobrar(id,totalPagado,status) {
    $.ajax({
        headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: 'actualizaVentas',
    type: 'POST',
    data: {
       id: id,
       abono: totalPagado,
       status: status
    },
    success: function(data, textStatus, jqXHR) {
        insertarPagos(data.responseData.id);
        arregloAbonos = null;
        totalPagado = 0;
        totalDinero = 0;
        idModif = null;
        swal({
            position:'center',
            type: 'success',
            title: 'Abono Registrado!',
            showConfirmButton: false,
            timer: 1500
        });
        //$('#pagosModal').modal('hide');
        $('#btnNota').show();
        $('#btnPagar').hide();
        $("#btnNota").attr("href", "ticket/"+data.responseData.id);
        $('#ventasDeuda').empty();
        buscaVentas(idClientes, 1);
    },
    error: function(xhr,ajaxOptions,thrownError){
    }
  });
}

function insertarPagos(folio){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'insertaPagos',
        type: 'POST',
        data: {
            folio: folio,
            idCliente: idClientes,
            pesos: parseFloat(($('#efectivo').val() != '' )?($('#efectivo').val()):0),
            dollar: parseFloat(($('#dolar').val() != '' )?($('#dolar').val()):0),
            tarjeta: parseFloat(($('#tarjeta').val() != '' )?($('#tarjeta').val()):0),
            deposito: parseFloat(($('#deposito').val() != '' )?($('#deposito').val()):0),
            transferencia: parseFloat(($('#transferencia').val() != '' )?($('#transferencia').val()):0),
            cambio: totalDinero
        },
        success: function(data, textStatus, jqXHR) {
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}
