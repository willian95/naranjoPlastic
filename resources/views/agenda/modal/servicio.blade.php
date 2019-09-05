  <div class="modal fade" id="modalServicio"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Servicio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
 <table id="tableConsultorios" class="table table-striped  table-sm" style="width:100%">
                          <thead class=" Aqua " >
                            <tr>
                              <th style="font-weight: normal; ">Nombre</th>                              
                              <th style="font-weight: normal; text-align: center;">Acci贸n</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th></th>
                              <th></th>                              
                            </tr>
                          </tfoot>
                        </table> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="addServicio();"id="agregarConsultorio">Agregar</button>
        </div>
      </div>
    </div>
  </div>
