<div class="modal fade bd-example-modal-lg"  data-backdrop="static" data-keyboard="false" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header GrisOscuro">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formTipoDeCambio">
          <div class="form-group" >
            <div class="form-row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header Aqua">
                    Tipo de cambio
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <label for="name">Nombres</label>
                        <input class="form-control form-control-sm rdOnly" id="name" type="text"  placeholder="Jose Maria">
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
