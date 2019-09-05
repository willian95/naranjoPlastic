<div class="modal fade bd-example-modal-md" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header GrisOscuro">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar Stock</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formRegistro">
                    <div class="card">
                        <div class="card-header Aqua">
                            Datos Personales
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-control-label">Código</label>
                                    <input class="form-control" id="codigoActualizar" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-control-label">Descripción</label>
                                    <input class="form-control" id="DescripcionActualizar" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-control-label">Cantidad</label>
                                    <input class="form-control" id="cantidadAdd" type="number" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-GrisOscuro" id="addStock" onclick="agregarStock()">Agregar</button>
            </div>
        </div>
    </div>
</div>
