var detalle = [];
var productoInfo;
var totalProducto;
var idClientes;
var totalDinero = 0;
const mio = swal.mixin({
    toast: true,
    position: 'center',
    showConfirmButton: false,
    timer: 3000
});

function Detalle(id,codigo,descripcion,idProducto,precio,cantidad,cantidadAntV,cantidadDesV,total,costo){
    this.id=id;
    this.codigo = codigo;
    this.descripcion = descripcion;
    this.idProducto = idProducto;
    this.precio = precio;
    this.cantidad = cantidad;
    this.cantidadAntV = cantidadAntV;
    this.cantidadDesV = cantidadDesV;
    this.total = total;
    this.costo = costo;
}

$('#pagosModal').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset(); //para borrar todos los datos que tenga los input, textareas, select.
});

$( document ).ready(function() {
    $('#selectCliente').select2('open');

  $('a').removeClass('active');
  $('#menuProducto').addClass('active');
  $('#menuVentaProducto').addClass('active');
});

$("#selectCliente").change(function()
    {
        $('#idCliente').val($('#selectCliente').val());
        idClientes = $('#selectCliente').val();
        $('#selectProducto').select2('open');
    }
);

$('#cantidad').keyup(
    function(){
        var dato = $('#cantidad').val();
        var precio = $('#precio').val();
        totalProducto = (dato*precio);
    }
);

function getElement(id){
    return document.getElementById(id);
}

function agregaProducto(){
    if ($('#idCliente').val()=='') {
        mio({ type: 'error',title: 'Ingrese cliente'});
        $('#idCliente').focus();
        return 0;
    }
    else if ($('#selectProducto').val()==null) {
        mio({ type: 'error',title: 'Ingrese producto'});
        $('#selectServicio').focus();
        return 0;
    }
    else if ($('#cantidad').val()=='') {
        mio({ type: 'error',title: 'Ingrese cantidad'});
        $('#cantidad').focus();
        return 0;
    }
    //if($('#cantidad').val() != " " && $('#cantidad').val()>0){
        var productoDetalle = new Detalle(productoInfo[0].id,productoInfo[0].codigo,productoInfo[0].descripcion,productoInfo[0].id,productoInfo[0].precio,$('#cantidad').val(),productoInfo[0].existencia,productoInfo[0].existencia-$('#cantidad').val(),totalProducto,productoInfo[0].costo);
        detalle.push(productoDetalle);
        desplegarDetalle();
    //}
}

function desplegarDetalle(){
    var tabla = getElement("detallesVenta");
	tabla.innerHTML = "";
    var cadena = "";
    var suma = 0;
    for(var i=0;i<detalle.length; i++){
        var item = detalle[i];
        suma += item.total;
        cadena += "<tr><td>"+item.codigo+"</td><td>"+item.descripcion+"</td><td> "+item.precio+
        "</td><td>"+item.cantidad + "</td>  <td>"+item.total+
        "</td> <td><button onclick=elimina("+ i +") class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></button></td> </tr>";
    }
    tabla.innerHTML = cadena;
    $('#total').val(suma);
    $('#selectProducto').val(null).trigger('change');
    $('#selectProducto').select2('open');
    $('#codigo').val("");
    $('#precio').val("");
    $('#cantidad').val(" ");
}

function elimina(pos){
    detalle.splice(pos,1);
    desplegarDetalle();
}

$('#selectCliente').select2(
    /*{
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
            var markup = repo.name+' '+repo.apePat;
            return markup;
        },
        templateSelection: function(repo)
        {
            return repo.name+' '+repo.apePat;
        },
        escapeMarkup: function(markup)
        {
            return markup;
        }
    }*/
);

$("#selectProducto").change(function()
    {
        if($(this).val() != null)
            buscarProductos($(this).val());
    }
);

$('#selectProducto').on('select2:close', function (e) {
    $('#cantidad').focus();
});


$('#selectProducto').select2(
    /*{
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
    }*/
);

function buscarProductos(id){
    $.ajax({
        url:  'buscaProducto',
        type: 'GET',
        data: {id:id},
        success: function(data, textStatus, jqXHR) {
            console.log(data)
            $('#codigo').val(data.responseData[0].codigo);
            $('#precio').val(data.responseData[0].precio * data.cambio.cambio);
            productoInfo = data.responseData;
        }
    });
}

function formasPago(){
    if(($('#total').val() != '') && (parseInt($('#total').val()) > 0)){
        $('#pagosModal').modal('show');
        $('#btnNota').hide();
        $('#btnPagar').show();
        $('#tpesos').val($('#total').val());
        $('#tdolar').val(($('#total').val()/($('#tcambio').val())).toFixed(2));

    }
    else
    console.log('aun no hay productos que cobrar');
}

function realizarCobro(){
    var totalPagado = 0;
    var efectivo = parseFloat(($('#efectivo').val() != '' )?($('#efectivo').val()):0);
    var dolar = parseFloat(($('#dolar').val() != '' )?(($('#dolar').val())*($('#tcambio').val())):0);
    var tarjeta = parseFloat(($('#tarjeta').val() != '' )?($('#tarjeta').val()):0);
    var deposito = parseFloat(($('#deposito').val() != '' )?($('#deposito').val()):0);
    var transferencia = parseFloat(($('#transferencia').val() != '' )?($('#transferencia').val()):0);
    totalPagado = (efectivo+dolar+tarjeta+deposito+transferencia).toFixed(2);

    if($('#pagos').val() == 0){
        if(parseFloat(totalPagado) >= parseFloat($('#total').val())){
            if(totalPagado > $('#total').val()){
                totalDinero = (totalPagado - parseFloat($('#total').val())).toFixed(2);
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
                        cobrar($('#total').val() ,'Pagado');
                    }
                })
            }
            else{
                cobrar($('#total').val(),'Pagado');
            }
        }else {
          swal({
              position:'center',
              type: 'warning',
              title: 'Pesos:'+($('#tpesos').val()-totalPagado).toFixed(2) +' &nbsp;Dolar:'+(($('#tpesos').val()-totalPagado)/$('#tcambio').val()).toFixed(2) ,
              showConfirmButton: true,
              confirmButtonColor: '#17bac2',
          });
        }
    }
    else{
        cobrar(totalPagado,'Pendiente');
    }
}

function cobrar(totalPagado,statusVenta) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'insertarVenta',
        type: 'POST',
        data: {
            idCliente: idClientes,
            Total:  $('#total').val(),
            abono: totalPagado,
            status: statusVenta,
            idTipoPago: $('#pagos').val(),
            idFormaPago: $("#tcambio").attr("name"),
            idTipoVenta: 1
        },
        success: function(data, textStatus, jqXHR) {
            for(var i=0; i < detalle.length; i++){
                insertarDetalles(i,data.responseData.id);
            }
            for(var i=0; i < detalle.length;i++){
                descuentaProducto(i);
            }
            insertarPagos(data.responseData.id);
            swal({
                position:'center',
                type: 'success',
                title: 'Venta Registrada!',
                showConfirmButton: false,
                timer: 1500
            });
            detalle = [];
            productoInfo = 0;
            totalProducto = 0;
            idClientes = 0;
            totalDinero = 0;

            desplegarDetalle();
            $('#total').val("");
            $('#codigo').val("");
            $('#precio').val("");
            $('#cantidad').val("");
            //href="{{url('ticket',1)}}"
            //$('#pagosModal').modal('hide');
            $('#btnNota').show();
            $('#btnPagar').hide();
            $("#btnNota").attr("href", "ticket/"+data.responseData.id);
            $('#selectCliente').val(null).trigger('change');
            //$('#selectCliente').select2('open');
            $('#selectProducto').select2('close');
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function insertarDetalles(i,folio){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'insertarDetalle',
        type: 'POST',
        data: {
            folio: folio,
            idProducto: detalle[i].id,
            precio: detalle[i].precio,
            cantidad: detalle[i].cantidad,
            cantidadDisponible: detalle[i].cantidadAntV,
            cantidadStock: detalle[i].cantidadDesV,
            total: detalle[i].total,
            costo: detalle[i].costo,
            nombre: detalle[i].descripcion,
        },
        success: function(data, textStatus, jqXHR) {
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
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

function descuentaProducto(i){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'actualizaExistencia',
        type: 'POST',
        data: {
            id: detalle[i].id,
            existencia: detalle[i].cantidadDesV
        },
        success: function(data, textStatus, jqXHR) {
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

$('#iniCaja').click(function(){
  $('#ModalCaja').modal('show');
});

$('#guardarCaja').click(function(){
  if ($('#selectCaja').val()==1) {
    console.log($('#selectCaja').val());
      mio({ type: 'error',title: 'Ingrese seleccione uno'});
      $('#selectCaja').focus();
      return 0;
  }
  if ($('#comentarioCaja').val()=='' ) {
      mio({ type: 'error',title: 'Agrege comentario'});
      $('#comentarioCaja').focus();
      return 0;
  }
  if ($('#pesoCaja').val()<=0 && $('#dolarCaja').val()<=0) {
      mio({ type: 'error',title: ' Ingrese cantidad'});
      $('#pesoCaja').focus();
      return 0;
  }
  ajaxCaja();
});

function  ajaxCaja(){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'movimiento',
        type: 'POST',
        data: {
            operacion: $('#selectCaja').val(),
            comentario:$('#comentarioCaja').val(),
            pesos: $('#pesoCaja').val(),
            dolar: $('#dolarCaja').val(),
        },
        success: function(data, textStatus, jqXHR) {
          $('#ModalCaja').modal('hide');
          swal({
            position: 'center',
            type: 'success',
            title: 'Se realizo correctamente',
            showConfirmButton: false,
            timer: 1500
          })
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}
