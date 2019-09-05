@extends('layouts.layout')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@section('title')
  Abonos a Servicios - NARANJO PLASTIC | CPTVo!
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Abono a Venta </h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div id="clienteSelect" class="form-group col-sm-6">
                        <label class="form-control-label">Buscar Cliente:</label>
                        <select id="selectCliente" class="form-control form-control-sm" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label class="form-control-label">Código Cliente:</label>
                        <input type="text" class="form-control form-control-sm" id="codigo" name="precio" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
                <div class="row">
                        <h4>Pagos Pendientes </h4>
                    <table id="productostable" class="table table-striped table-sm" style="width:100%">
                            <thead class="Aqua">
                                <tr>
                                    <th>Folio</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Abonos</th>
                                    <th>Pendiente</th>
                                    <th>Abonar</th>
                                </tr>
                            </thead>
                            <tbody id="ventasDeuda">
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('modal')
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
    <script src="js/ServiciosJS/abono.js"></script>
@endsection
