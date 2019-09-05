var table;
var idUpdate;

const mio = swal.mixin({
    toast: true,
    position: 'center',
    showConfirmButton: false,
    timer: 3000
});

$('#productoModal').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset(); //para borrar todos los datos que tenga los input, textareas, select.
});

$(document).ready(function() {
    table =$('#tablaProductos').DataTable( {
        processing:true,
        serveSide:true,
        ajax:'infoProductos',
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
            {data:'codigo',name:'codigo'},
            {data:'descripcion', name:'descripcion'},
            {data:'precio', name:'precio'},
            {data:'existencia', name:'existencia'},
            {data:'created_at', name:'created_at'},
            {data:'action', name:'action',orderable:false,searchable:false}
        ],
        dom: 'Bfrtip',
        lengthChange: true,
        buttons: [
            'excel', 'pdf', 'print'
        ],
        columnDefs: [
          { className: 'text-center', targets: [0,2,3,4,5] },
        ],
    } );
    $('a').removeClass('active');
    $('#menuProducto').addClass('active');
    $('#menuAltaProducto').addClass('active');
} );

$('#addProducto').click(function() {
    modificar();
    $('#cantidad').attr('readonly', false);
    $('#gramos').attr('readonly',false);
    $('#updat').hide();
    $('#insert').show();
    $('#productoModal').modal('show');
});

function actualizaProducto(id){
    modificar();
    buscarProductos(id);
    $('#insert').hide();
    $('#updat').show();
    $('#productoModal').modal('show');
}

function eliminaProducto(id){
    swal({
        title: 'Estás seguro?',
        text: "Se borrara el producto de forma permanente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#17bac2',
        cancelButtonColor: '#b5b3b3',
        confirmButtonText: 'Si, borrarlo!',
        cancelButtonText: 'No, cancelar',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            eliminarProducto(id);
        }
    })
}

function eliminarProducto(id) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:  'EliminarProductos',
        type: 'DELETE',
        data: {id:id},
        success: function(data, textStatus, jqXHR) {
            swal({
                position: 'center',
                type: 'success',
                title: 'El Producto ha sido borrado',
                showConfirmButton: false,
                timer: 1500
              });
                table.ajax.reload();
        }
    });
}

function ver(id){
    $('#codigo').attr('readonly', true);
    $('#descripcion').attr('readonly', true);
    $('#precio').attr('readonly', true);
    $('#costo').attr('readonly', true);
    $('#cantidad').attr('readonly', true);
    $('#gramos').attr('readonly',true);

    buscarProductos(id);
    $('#insert').hide();
    $('#updat').hide();
    $('#productoModal').modal('show');
}

function modificar(){
    $('#codigo').attr('readonly', false);
    $('#descripcion').attr('readonly', false);
    $('#precio').attr('readonly', false);
    $('#costo').attr('readonly', false);
    $('#gramos').attr('readonly', false);
}

function insertar(){
    insertaProducto();
    //insertarCantidad();
}

function insertaProducto(){
    if ($('#codigo').val()=='') {
        mio({ type: 'error',title: 'Ingrese Codigo'});
        $('#codigo').focus();
        return 0;
    }
    else if ($('#descripcion').val()=='') {
        mio({ type: 'error',title: 'Ingrese descripcion'});
        $('#descripcion').focus();
        return 0;
    }
    else if ($('#precio').val()=='') {
        mio({ type: 'error',title: 'Ingrese precio'});
        $('#precio').focus();
        return 0;
    }
    else if ($('#costo').val()=='') {
        mio({ type: 'error',title: 'Ingrese costo'});
        $('#costo').focus();
        return 0;
    }
    else  if ($('#cantidad').val()=='') {
        mio({ type: 'error',title: 'Ingrese cantidad'});
        $('#cantidad').focus();
        return 0;
    }
    else if ($('#gramos').val()=='') {
        mio({ type: 'error',title: 'Ingrese gramos'});
        $('#gramos').focus();
        return 0;
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'insertaProducto',
        type: 'POST',
        data: {
            codigo: $('#codigo').val(),
            descripcion: $('#descripcion').val().toUpperCase(),
            precio: $('#precio').val(),
            costo: $('#costo').val(),
            gramos: $('#gramos').val()
        },
        success: function(data, textStatus, jqXHR) {
            insertarCantidad(data.responseData.id);
            insertarInventarioServicios(data.responseData.id);
        },
        error: function(xhr,ajaxOptions,thrownError){
            swal({
                type: 'error',
                title: 'Oops...',
                text: xhr.status+'\n'+thrownError,
                footer: ajaxOptions
            })
        }
    });
}

function insertarCantidad(id){
    if ($('#cantidad').val()=='') {
        mio({ type: 'error',title: 'Ingrese cantidad'});
        $('#cantidad').focus();
        return 0;
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'insertarInventario',
        type: 'POST',
        data: {
            id: id,
            existencia: $('#cantidad').val()
        },
        success: function(data, textStatus, jqXHR) {
            swal({
                position:'center',
                type: 'success',
                title: 'Producto Agregado!',
                showConfirmButton: false,
                timer: 1500
            });
            table.ajax.reload();
            $('#productoModal').modal('hide');
        },
        error: function(xhr,ajaxOptions,thrownError){
            swal({
                type: 'error',
                title: 'Oops...',
                text: xhr.status+'\n'+thrownError,
                footer: ajaxOptions
            })
        }
    });
}

function buscarProductos(id){
    $.ajax({
        url:  'buscaProducto',
        type: 'GET',
        data: {id:id},
        success: function(data, textStatus, jqXHR) {
            console.log(data);
            $('#cantidad').attr('readonly', true); 
            idUpdate = data.responseData[0].id;
            $('#codigo').val(data.responseData[0].codigo);
            $('#descripcion').val(data.responseData[0].descripcion);
            $('#precio').val(data.responseData[0].precio);
            $('#costo').val(data.responseData[0].costo);
            $('#cantidad').val(data.responseData[0].existencia);
            $('#gramos').val(data.responseData[0].gramos);
        }
    });
}

function actualizarProducto() {
    if ($('#codigo').val()=='') {
        mio({ type: 'error',title: 'Ingrese Codigo'});
        $('#codigo').focus();
        return 0;
    }
    else if ($('#descripcion').val()=='') {
        mio({ type: 'error',title: 'Ingrese descripcion'});
        $('#descripcion').focus();
        return 0;
    }
    else if ($('#precio').val()=='') {
        mio({ type: 'error',title: 'Ingrese precio'});
        $('#precio').focus();
        return 0;
    }
    else if ($('#costo').val()=='') {
        mio({ type: 'error',title: 'Ingrese costo'});
        $('#costo').focus();
        return 0;
    }
    $.ajax({
        headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: 'actualizaProductos',
    type: 'POST',
    data: {
       id: idUpdate,
       codigo: $('#codigo').val(),
       descripcion: $('#descripcion').val().toUpperCase(),
       precio: $('#precio').val(),
       costo:  $('#costo').val(),
       gramos: $('#gramos').val()
    },
    success: function(data, textStatus, jqXHR) {
        idUpdate=0;
        $('#productoModal').modal('hide');
        table.ajax.reload();

        swal({
            position:'center',
            type: 'success',
            title: 'Producto Actualizado!',
            showConfirmButton: false,
            timer: 1500
        });
    },
    error: function(xhr,ajaxOptions,thrownError){
        alert(xhr.status);
        alert(thrownError);
    }
  });
}

function insertarInventarioServicios(id){
    if ($('#gramos').val()=='') {
        mio({ type: 'error',title: 'Ingrese gramos'});
        $('#gramos').focus();
        return 0;
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'insertarInventarioServicio',
        type: 'POST',
        data: {
            id: id,
            botes: 0,
            existencia: $('#gramos').val()
        },
        success: function(data, textStatus, jqXHR) {
            swal({
                position:'center',
                type: 'success',
                title: 'Producto Agregado!',
                showConfirmButton: false,
                timer: 1500
            });
            table.ajax.reload();
            $('#productoModal').modal('hide');
        },
        error: function(xhr,ajaxOptions,thrownError){
            swal({
                type: 'error',
                title: 'Oops...',
                text: xhr.status+'\n'+thrownError,
                footer: ajaxOptions
            })
        }
    });
}