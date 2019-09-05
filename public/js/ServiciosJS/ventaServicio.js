var detalle = [];
var idClientes;
var dataServicio;
var valorServicio = 0;
var totalDinero = 0;
var detalleMembresia;
const mio = swal.mixin({
    toast: true,
    position: 'center',
    showConfirmButton: false,
    timer: 3000
});

$('#Modal1').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset(); //para borrar todos los datos que tenga los input, textareas, select.
    $('#usarMembresias').prop('disabled', true);
});

$('#pagosModal').on('hidden.bs.modal', function(){
    detalleMembresia = 0;
    $(this).find('form')[0].reset(); //para borrar todos los datos que tenga los input, textareas, select.
});

window.onload = function(){
    var fecha = new Date();
    var mes = fecha.getMonth()+1;
    var dia = fecha.getDate();
    var ano = fecha.getFullYear();
    if(dia<10)
      dia='0'+dia;
    if(mes<10)
      mes='0'+mes;
    document.getElementById('fecha').value=ano+"-"+mes+"-"+dia;
  }

function getElement(id){
    return document.getElementById(id);
}

function Detalle(id,descripcion,cantidad,precio,importe,completo){
    this.id=id;
    this.descripcion = descripcion;
    this.cantidad = cantidad;
    this.precio = precio;
    this.importe = importe;
    this.completo = completo;
}

function agregaServicio(){
    if ($('#idCliente').val()=='') {
        mio({ type: 'error',title: 'Ingrese cliente'});
        $('#idCliente').focus();
        return 0;
    }
    else if ($('#selectServicio').val()==null) {
        mio({ type: 'error',title: 'Ingrese servicio'});
        $('#selectServicio').focus();
        return 0;
    }
    else if ($('#cantidad').val()=='') {
        mio({ type: 'error',title: 'Ingrese cantidad'});
        $('#cantidad').focus();
        return 0;
    }
 
    //if($('#cantidad').val() != " " && $('#cantidad').val()>0){ 
    if($('#tipoServicio').val()==1){
             var productoDetalle = new Detalle(dataServicio[0].id,dataServicio[0].nombre +" SESIONES "+dataServicio[0].cantidadSesion ,$('#cantidad').val(),$('#precio').val(),$('#cantidad').val()*$('#precio').val(),valorServicio);
        }
        else{
        var productoDetalle = new Detalle(dataServicio[0].id,dataServicio[0].nombre  ,$('#cantidad').val(),$('#precio').val(),$('#cantidad').val()*$('#precio').val(),valorServicio);
        }
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
        suma += item.importe;
        cadena += "<tr><td>"+item.id+"</td><td>"+item.descripcion+"</td><td> "+item.precio+
        "</td><td>"+item.cantidad + "</td>  <td>"+item.importe+
        "</td> <td><button onclick=elimina("+ i +") class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></button></td> </tr>";
    }
    tabla.innerHTML = cadena;
    $('#total').val(suma);
    $('#selectServicio').val(null).trigger('change');
    $('#selectServicio').select2('open');
    $('#precio').val("");
    $('#cantidad').val(" ");
    $('#tipoServicio').val(1);
}

function elimina(pos){
    detalle.splice(pos,1);
    desplegarDetalle();
}

$( document ).ready(function() {
    $('#selectCliente').select2('open');

  $('a').removeClass('active');
  $('#MenuServicio').addClass('active');
  $('#MenuServicosVenta').addClass('active');
});

$("#selectCliente").change(function()
    {
        if($(this).val() != null){
            $('#idCliente').val($('#selectCliente').val());
            idClientes = $('#selectCliente').val();
            buscarClientesMembresias($('#selectCliente').val());
        }
    }
);

///////////////////////////////////////////////////////////////////////////////////////////////////////

function buscarClientesMembresias(id){
    $.ajax({
        url:  'buscaMembresiaCliente',
        type: 'GET',
        data: {id:id},
        success: function(data, textStatus, jqXHR) {
            detalleMembresia = data.responseData;
            //console.log(detalleMembresia);
            if(detalleMembresia.length > 0){
                $('#usarMembresias').prop('disabled', false);
                $('#clienteMembresia').val(detalleMembresia[0].name+' '+detalleMembresia[0].apePat+' '+detalleMembresia[0].apePat);
                $('#idclienteMembresia').val(detalleMembresia[0].idMembresia);
                detalleMembresiaCliente();
            }
            else
                $('#usarMembresias').prop('disabled', true);
        }
    });
}

function detalleMembresiaCliente(){
    var tabla = getElement("detalleMembresiaClientes");
	tabla.innerHTML = "";
    var cadena = "";
    for(var i=0;i<detalleMembresia.length; i++){
        var item = detalleMembresia[i];
        cadena += "<tr><td>"+item.nombre+"</td><td>"+item.cantidad+"</td><td><input value=0 id="+'cantReal'+i+" class=\"form-control\" type=\"number\"></input></td>"+"</tr>";
    }
    tabla.innerHTML = cadena;
}

function realizarCobroMembresia(){
    if(validaCampos()){
        //console.log('si')
        cobrarMembresia();
    }
    else{ 
        console.log('no');
    }
}

function validaCampos(){
    for(var i = 0; i < detalleMembresia.length; i++){
        if($("#cantReal"+i).val() != ''){
            if($("#cantReal"+i).val() <= detalleMembresia[i].cantidad){
                console.log('cumple');
            }
            else {
                mio({ type: 'error',title: 'Ingrese Una Cantidad Valida'});
                $("#cantReal"+i).focus();
                return 0;
            }
        }
        else {
            mio({ type: 'error',title: 'Ingrese Una Cantidad'});
            $("#cantReal"+i).focus();
            return 0;
        }
    }
    return 1;
}

////////////////////////////////////////////////////////////////////////////////////////

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
    }*/
);

$("#selectServicio").change(function()
    {
        if($(this).val() != null){
            buscarServicios($(this).val());
            //buscaProductosServicios($(this).val());
        }
    }
);

$('#selectServicio').on('select2:close', function (e) {
    $('#fecha').focus();
});

$('#selectServicio').select2(
    /*{
        ajax: {
            url: 'listaServicio',
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
    }*/
);

function buscarServicios(id){
    $.ajax({
        url:  'buscaServicio',
        type: 'GET',
        data: {id:id},
        success: function(data, textStatus, jqXHR) {
            $('#precio').val(data.responseData[0].presioCompleto * data.cambio.cambio);
            dataServicio = data.responseData;
            console.log(data.responseData);
        }
    });
}

$('#tipoServicio').change(function(){
    if($(this).val() != 1){
        $('#precio').val(dataServicio[0].presioSesion);
        valorServicio = 1;
    }
    else{
        $('#precio').val(dataServicio[0].presioCompleto);
        valorServicio = 0;
    }
    $('#cantidad').focus();
});

function formasPago(){
    if(($('#total').val() != '') && (parseInt($('#total').val()) > 0)){
        $('#pagosModal').modal('show');
        $('#btnPagar').show();
        $('#btnNota').hide();
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
    totalPagado = efectivo+dolar+tarjeta+deposito+transferencia;

    if($('#pagos').val() == 0){
        if(parseFloat(totalPagado) >= parseFloat($('#total').val())){
            if(totalPagado > $('#total').val()){
                totalDinero = (totalPagado.toFixed(2) - parseFloat($('#total').val())).toFixed(2);
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
            idTipoVenta: 2,
            idTerapeuta: $('#terapeuta').val(),
            created_at: $('#fecha').val()
        },
        success: function(data, textStatus, jqXHR) {
            for(var i=0; i < detalle.length; i++){
                insertarDetalles(i,data.responseData.id,data.responseData.idCliente);
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
            $('#idCliente').val("");
            $('#precio').val("");
            $('#cantidad').val("");
            $('#btnNota').show();
            $('#btnPagar').hide();
            $("#btnNota").attr("href", "ticketServicio/"+data.responseData.id);
            $('#selectCliente').val(null).trigger('change');
            $('#terapeuta').val(null).trigger('change');
            //$('#selectCliente').select2('open');
            $('#selectServicio').select2('close');
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function insertarDetalles(i,folio,cliente){
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
            total: detalle[i].importe,
            idTerapeuta: $('#terapeuta').val(),
            nombre: detalle[i].descripcion,
            completo: detalle[i].completo,
            idCliente: cliente
        },
        success: function(data, textStatus, jqXHR) {
			buscaProductosServicios(data.responseData[i].idProducto,data.responseData.completo,data.responseData.cantidad,data.responseData.idTerapeuta,data.responseData.idCliente);

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

function buscaProductosServicios(id,completo,cantidad,terapeuta,cliente){
    console.log(id);
    $.ajax({
        url:  'buscaProductosServicio',
        type: 'GET',
        data: {idServicio:id},
        success: function(data, textStatus, jqXHR) {
            console.log(data.responseData);
            insertaDetallesVentaServicios(data.responseData,completo,cantidad,terapeuta,cliente,id);
            descuenta(data.responseData,completo,cantidad);
        }
    });
}

function insertaDetallesVentaServicios(valores,completo,cantidad,terapeuta,cliente,tipoServicio){
    var cantidades;
    var utilizar;
    var cantDescontar;
    for(var j=0; j<valores.length; j++){
        if(completo == 1){
            cantDescontar = (parseInt(cantidad)*parseInt(valores[j].productoSesion));
            cantidades = parseInt(valores[j].stock)-(cantDescontar);
        }
        else{
            cantDescontar = (parseInt(cantidad)*parseInt(valores[j].productoCompleto));
            cantidades = parseInt(valores[j].stock)-cantDescontar;
        }
        if(cantidades >= 0){
            utilizar = parseInt(cantidades);
        }
        else{
            utilizar = parseInt(valores[j].gramos)-Math.abs(parseInt(cantidades));
        }
        insertarDetallesVentaServicio(terapeuta,cliente,valores[j].idProducto,valores[j].stock,cantDescontar,utilizar,tipoServicio);
    }
}

function insertarDetallesVentaServicio(terapeuta,cliente,producto,stocks,cantUtiliza,disponibles,tipoServicio){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'insertarDetalleVentaServicio',
        type: 'POST',
        data: {
            idTerapeuta: terapeuta,
            idCliente: cliente,
            idProducto: producto,
            stock: stocks,
            servicioCantidad: cantUtiliza,
            disponible: disponibles,
            idTipoServicio: tipoServicio
        },
        success: function(data, textStatus, jqXHR) {
        },
        error: function(xhr,ajaxOptions,thrownError){
        }
    });
}

function descuenta(valores,completo,cantidad){
    var cantidades;
    for(var j=0; j<valores.length; j++){
        if(parseInt(valores[j].botes) == 0){
            descuentaBotella(valores[j].existencia-1,valores[j].idProducto);
            ingresaBotella(valores[j].idProducto,parseInt(valores[j].botes)+1,valores[j].gramos);
        }
        if(completo == 1){
            cantidades = parseInt(valores[j].stock)-(parseInt(cantidad)*parseInt(valores[j].productoSesion));
        }
        else{
            cantidades = parseInt(valores[j].stock)-(parseInt(cantidad)*parseInt(valores[j].productoCompleto));
        }
        if(cantidades > 0){
            ingresaStock(valores[j].idProducto,parseInt(cantidades));

        }
        else if(cantidad == 0){
            ingresaBotella(valores[j].idProducto,parseInt(valores[j].botes)+1);
            ingresaStock(valores[j].gramos);
        }
        else{
            descuentaBotella(valores[j].existencia-1,valores[j].idProducto);
            ingresaBotella(valores[j].idProducto,parseInt(valores[j].botes)+1);
            ingresaStock(valores[j].idProducto,parseInt(valores[j].gramos)-Math.abs(parseInt(cantidades)))
        }
        cantidades = 0;
    }
}

function ingresaStock(id,datos){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'actualizaProductosServicio',
        type: 'POST',
        data: {
            id: id,
            existencia: datos
        },
        success: function(data, textStatus, jqXHR) {
        },
        error: function(xhr,ajaxOptions,thrownError){
        }
    });
}

function ingresaBotella(id,botellas){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'actualizaProductosServicio',
        type: 'POST',
        data: {
            id: id,
            botes: botellas
        },
        success: function(data, textStatus, jqXHR) {
        },
        error: function(xhr,ajaxOptions,thrownError){
        }
    });
}

function descuentaBotella(existencia,id){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'actualizaInventario',
        type: 'POST',
        data: {
            id: id,
            existencia: existencia,
        },
        success: function(data, textStatus, jqXHR) {
        },
        error: function(xhr,ajaxOptions,thrownError){
        }
    });
}


/*$("#terapeuta").change(function()
    {
        //console.log($('#terapeuta').val())
    }
);*/

$('#terapeuta').select2(
    {
        ajax:
        {
            url: 'listaTerapeuta',
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

$('#usarMembresias').click(function() {
    //detalleMembresia = [];
    $('#btnPagar1').show();
    $('#btnNota1').hide();
    $('#Modal1').modal('show');
});

///////////////////////////////////////////////////////////////////////////////////////////

function cobrarMembresia() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'insertarVenta',
        type: 'POST',
        data: {
            idCliente: $('#idclienteMembresia').val(),
            Total:  0,
            abono: 0,
            status: 'MEMBRESIA',
            idTipoPago: 0,
            idFormaPago: $("#tcambio").attr("name"),
            idTipoVenta: 2,
            idTerapeuta: 0
        },
        success: function(data, textStatus, jqXHR) {
            var idBuscar = data.responseData.id;
            console.log(idBuscar);
            for(var i=0; i < detalleMembresia.length; i++){
                insertarDetallesMembresia(i,data.responseData.id,data.responseData.idCliente);
                //console.log(i,detalleMembresia);
            }

            for(var j = 0; j < detalleMembresia.length; j++){
                //console.log(j,detalleMembresia);
                descuentaProductoS(j);
            }
            //insertarPagos(data.responseData.id);
            swal({
                position:'center',
                type: 'success',
                title: 'Venta Registrada!',
                showConfirmButton: false,
                timer: 1500
            });
            productoInfo = 0;
            totalProducto = 0;
            idClientes = 0;
            totalDinero = 0;
            $('#total').val("");
            $('#idCliente').val("");
            $('#precio').val("");
            $('#cantidad').val("");
            $('#btnNota1').show();
            $('#btnPagar1').hide();
            $("#btnNota1").attr("href", "ticketServicio/"+idBuscar);
            $('#selectCliente').val(null).trigger('change');
            $('#selectServicio').select2('close');
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function insertarDetallesMembresia(i,folio,cliente){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'insertarDetalle',
        type: 'POST',
        data: {
            folio: folio,
            idProducto: detalleMembresia[i].idProdServ,
            precio: 0,
            cantidad: $('#cantReal'+i).val(),
            total: 0,
            idTerapeuta: 0,
            nombre: detalleMembresia[i].nombre,
            completo: 1,
            idCliente: cliente
        },
        success: function(data, textStatus, jqXHR) {
            console.log(detalleMembresia);
            if(detalleMembresia[i].tipo == 'SERVICIO'){
			    buscaProductosServicios(detalleMembresia[i].idProdServ,data.responseData.completo,data.responseData.cantidad,data.responseData.idTerapeuta,data.responseData.idCliente);
            }
            else{
            console.log(detalleMembresia[i].idProdServ+" "+i);
            console.log("buscarProducto");
                buscarProductos(detalleMembresia[i].idProdServ,i);
                //console.log(data.responseData.idProducto);       
            }
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function buscarProductos(id,i){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:  'buscaProducto',
        type: 'GET',
        data: {id:id},
        success: function(data, textStatus, jqXHR) {
            //console.log(i,data.responseData[0].existencia);
            console.log(data.responseData,id);
            descuentaProducto(i,data.responseData[0].existencia);
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function descuentaProducto(i,cantidadD){
    //console.log(i,'hola');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'actualizaExistencia',
        type: 'POST',
        data: {
            id: detalleMembresia[i].idProdServ,
            existencia: parseInt(cantidadD)-parseInt($('#cantReal'+i).val())
        },
        success: function(data, textStatus, jqXHR) {
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function descuentaProductoS(i){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'actualizaCantidadMembresia',
        type: 'POST',
        data: {
            id: detalleMembresia[i].id,
            cantidad: detalleMembresia[i].cantidad-$('#cantReal'+i).val()
        },
        success: function(data, textStatus, jqXHR) {
            if(data.responseData.cantidad == 0){
                eliminarProductosMembresias(data.responseData.id);
            }
        },
        error: function(xhr,ajaxOptions,thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function eliminarProductosMembresias(id) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:  'eliminarProductosMembresia',
        type: 'DELETE',
        data: {id:id},
        success: function(data, textStatus, jqXHR) {
        }
    });
}