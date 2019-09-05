<div class="modal fade bd-example-modal-lg"  data-backdrop="static" data-keyboard="false" id="Modal1"   role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header GrisOscuro">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formRegistro">
          <div class="form-group" >
            <div class="form-row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header Aqua">
                    Datos del Servicio
                  </div>
                  <div class="card-body">
                    <div class="row">
                       <div class="col-sm-4">
                        <label for="nombre">Nombre de Servicio *</label>
                        <input class="form-control form-control-sm rdOnly"  autofocus id="nombre" type="text"  placeholder="Servicio 1">
                      </div>
                      <div class="col-sm-3">
                        <label for="presioCompleto">Precio por Paquete * </label>
                        <input class="form-control form-control-sm rdOnly" id="presioCompleto" type="number" placeholder="$0.00">
                      </div>
                      <div class="col-sm-3">
                        <label for="presioSesion">Precio por Sesión *</label>
                        <input class="form-control form-control-sm rdOnly" id="presioSesion" type="number" placeholder="$0.00">
                      </div>
                      <div class="col-sm-2">
                        <label for="cantidadSesion">No.Sesiones *</label>
                        <input class="form-control form-control-sm rdOnly" id="cantidadSesion" type="number" value="0">
                      </div>
                    </div>
                    <hr/>
                    <div class="row">
                      <div class="col-sm-12">
                        <label for="selectProducto">Buscar</label>
                        <select id="selectProducto" class="form-control rdOnly" style="width: 100%;">
                        </select>  </div>
                    </div>
                    <hr/>
                    <div class="row">
                      <div class="table-responsive">
                        <table id="tableProductos" class="table table-striped  table-sm" style="width:100%">
                          <thead class=" Aqua " >
                            <tr>
                              <th style="font-weight: normal; ">Nombre</th>
                              <th style="font-weight: normal; text-align: center;">Cnt. gramos/ml Producto</th>
                              <th style="font-weight: normal; text-align: center;">Cnt. por Paquete</th>
                              <th style="font-weight: normal; text-align: center;">Cnt. por Sesión</th>
                              <th style="font-weight: normal; text-align: center;">Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-GrisOscuro" id="addUserButon" onclick="registarUsuario()">Guardar</button>
      </div>
    </div>
  </div>
</div>
