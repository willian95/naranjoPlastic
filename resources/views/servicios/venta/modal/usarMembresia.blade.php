<div class="modal fade bd-example-modal-lg"  data-backdrop="static" data-keyboard="false" id="Modal1"   role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header GrisOscuro">
        <h5 class="modal-title" id="exampleModalLabel">Usar Membresia</h5>
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
                      <div class="card-header">
                          <h4>Datos Membresia</h4>
                      </div>
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-9">
                                  <div class="row">
                                      <div id="clienteSelect" class="form-group col-sm-7">
                                          <label class="form-control-label">Nombre cliente:</label>
                                          <input type="text" class="form-control form-control-sm" id="clienteMembresia" name="clienteMembresia" disabled>
                                      </div>
                                      <div class="form-group col-sm-2">
                                          <label class="form-control-label">Id cliente:</label>
                                          <input type="text" class="form-control form-control-sm" id="idclienteMembresia" name="idclienteMembresia" disabled>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="card">
                      <div class="card-header"><h4>Detalle de Membresia</h4></div>
                      <div class="card-body">
                         <div class="table-responsive">
                             <table id="tablaDetelleMembresiaClientes" class="table table-striped table-sm" style="width:100%">
                                     <thead class="Aqua">
                                         <tr>
                                             <th>Servicio</th>
                                             <th>Cantidad Disponible</th>
                                             <th>Cantidad A Utilizar</th>
                                         </tr>
                                     </thead>
                                     <tbody id="detalleMembresiaClientes">
                     
                                     </tbody>
                             </table>
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
        <button type="button" class="btn btn-GrisOscuro" id="btnPagar1"onclick="realizarCobroMembresia()">Cobrar</button>
        <a id="btnNota1" class="btn btn-GrisOscuro" target="_blank"> ticket</a>
      </div>
    </div>
  </div>
</div>