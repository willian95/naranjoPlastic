@extends('layouts.layout')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@section('title')
  Vender Servicios - NARANJO PLASTIC | CPTV
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Generar Venta <button style="float:right" class="btn btn-success btn-sm" id="usarMembresias" disabled>Usar Membresia</button></h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div id="clienteSelect" class="form-group col-sm-7">
                        <label class="form-control-label">Nombre cliente:</label>
                        <select id="selectCliente" class="form-control form-control-sm" style="width: 100%;">
                            <option selected="" disabled="" value="">Seleccione</option>
                            @foreach(App\Clientes::all() as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->name }} {{ $cliente->apePat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-2">
                        <label class="form-control-label">Id cliente:</label>
                        <input type="number" class="form-control form-control-sm" id="idCliente" name="precio" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label class="form-control-label">Nombre Servicio:</label>
                        <select id="selectServicio" class="form-control form-control-sm" style="width: 100%;">
                            <option selected="" disabled="" value="">Seleccione</option>
                            @foreach(App\Servicio::all() as $servicio)
                                <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-2">
                        <label class="form-control-label">Fecha ingreso:</label>
                        <input type="date" class="form-control form-control-sm" id="fecha" name="fecha">
                    </div>

                    <div class="form-group col-sm-2">
                        <label class="form-control-label">Tipo de Servicio:</label>
                        <select id="tipoServicio" class="form-control form-control-sm" style="width: 100%;">
                            <option value="1">Completo</option>
                            <option value="2">Sesion</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-2">
                        <label class="form-control-label">Precio:</label>
                        <input type="number" class="form-control form-control-sm" id="precio" name="cantidad" disabled>
                    </div>
                    <div class="form-group col-sm-2">
                        <label class="form-control-label">Cantidad:</label>
                        <input type="number" class="form-control form-control-sm" id="cantidad" name="cantidad">
                    </div> 
                </div> 
                <div class="row">
                    <div class="for-group offset-sm-5 col-sm-4">
                        <button type="button" class="btn btn-GrisOscuro" onclick="agregaServicio()">
                            Agregar Servicio
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
 <div class="card-header"><h4>Desglose de ticket </h4></div>
 <div class="card-body">
    <div class="table-responsive">
        <table id="productostable" class="table table-striped table-sm" style="width:100%">
                <thead class="Aqua">
                    <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Importe</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="detallesVenta">

                </tbody>
        </table>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group float-right">
                    <label for="email">Total Operación:</label>
                    <input type="number" id="total" class="form-control" disabled>
                </div>
            </div>
        </div>
        <div class="row float-right">
            <div class="col-md-12">
                <button onclick="formasPago()" class="btn btn-GrisOscuro form-control">
                    Cobrar
                </button>
            </div>
        </div>
    </div>
 </div>
</div>

@endsection

@section('modal')
    @include('servicios.venta.modal.usarMembresia')
    @include('productos.modals.formasdePago')
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="js/ServiciosJS/ventaServicio.js"></script>
@endsection
