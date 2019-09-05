<div class="modal fade bd-example-modal-lg" id="Membresia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header GrisOscuro">
        <h5 class="modal-title" id="tituloNuevaMembresia">Nueva Membresia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header Aqua">Datos de la Membresia</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <label for="example-text-input">Nombre *</label>
                    <input class="form-control form-control-sm disableBtn" type="text" id="nameMembresia">
                  </div>
                  <div class="col-md-4">
                    <label for="example-text-input" >Costo *</label>
                    <input class="form-control form-control-sm disableBtn" type="text" id="costoMembresia">
                  </div>
                  <div class="col-md-4"  >
                    <label for="example-text-input" >Vigencia *</label>
                    <input class="form-control form-control-sm disableBtn" value="<?php echo date("Y-m-d");?>T00:00:00"  type="date" id="vigenciaMembresia">
                  </div>
                </div>
                <hr/>
                <div class="col-md-12">
                  <button class=" float-right btn  fa fa-plus btn-success btn-sm disableBtn" id="btnListaProductos" ><a> Producto</a></button>
                  <button class="float-right btn  fa fa-plus btn-success btn-sm disableBtn" id="btnListaServicios" ><a> Servicio</a></button>
                  <br>
                    <div class="table-responsive"><br>
                      <table id="detalleMembresias" class="table table-striped table-sm" style="width:100%">
                      <thead>
                        <tr  class="text-white" style="background-color:#17bac2">
                          <th>Nombre</th>
                          <th>Cantidad Disponible</th>
                          <th>Acción</th>
                        </tr>
                      </thead>
                      <tbody>

                       </tbody>
                     </table>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="agregarMembresia" onclick="guardarMembresia();">Guardar</button>
      </div>
    </div>
  </div>
</div>
