
<div class="modal fade " id="ModalCaja" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog  ">
    <div class="modal-content">
      <div class="modal-header  GrisOscuro">
        <h5 class="modal-title" id="exampleModalLabel">Movimientos Caja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="form-group col-sm-12">
                <label class="form-control-label">Caja:</label>
                <select class="form-control" id="selectCaja">
                  <option value="1"  >Elige uno</option>
                  <option value="Inicio">Inicio</option>
                  <option value="Retiro">Retiro</option>
                  <option value="Entrada">Entrada</option>
                  <option value="Cierre">Cierre</option>
                </select>
              </div>
            </div>
            <div class="row">
              <label class="form-control-label">Comentario:</label>
              <textarea class="form-control" id="comentarioCaja" rows="3"></textarea>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label class="form-control-label">Pesos:</label>
                <input type="number" class="form-control" id="pesoCaja" value="0">
              </div>
              <div class="col-md-6">
                <label class="form-control-label">Dolar:</label>
                <input type="number" class="form-control" id="dolarCaja" value="0">
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="guardarCaja" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
