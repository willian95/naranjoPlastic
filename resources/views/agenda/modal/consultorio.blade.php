  <div class="modal fade" id="modalConsultorio"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Consultorio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <button class=" float-right btn btn-danger btn-sm" id="borrarConsult"><a class="fa fa-close"> Eliminar Consultorio</a></button>
          <label for=""class="form-control-label">Nombre Consultorio</label>
          <input type="text" class="form-control" id="nombreConsultorio">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="AddConsul();"id="agregarConsultorio">Agregar</button>
        </div>
      </div>
    </div>
  </div>
