<!-- Modal Agrega Usuario -->
<div class="modal fade " id="productoModal" tabindex="-1" role="dialog" aria-labelledby="productoModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog  " role="document">
      <div class="modal-content">
        <div class="modal-header GrisOscuro">
          <h5 class="modal-title" id="productoModalLongTitle">Agregar Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="addCliente" class="prueba">
                <div class="card">
                    <div class="card-header Aqua">
                        Datos Producto
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label class="form-control-label">Código:</label>
                                <input type="text" class="form-control form-control-sm" id="codigo" name="codigo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label class="form-control-label">Nombre del producto:</label>
                                <input type="text" class="form-control form-control-sm" id="descripcion" name="descripcion">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label class="form-control-label">Precio unitario:</label>
                                <input type="number" class="form-control form-control-sm" id="precio" name="precio">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label class="form-control-label">Costo:</label>
                                <input type="number" class="form-control form-control-sm" id="costo" name="costo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label class="form-control-label">Cantidad:</label>
                                <input type="number" class="form-control form-control-sm" id="cantidad" name="cantidad">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label class="form-control-label">Cantidad en Gramos o Mililitros:</label>
                                <input type="number" class="form-control form-control-sm" id="gramos" name="costo">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button id="insert" type="submit"  class="btn btn-GrisOscuro" onclick="insertar()">Insertar</button>
          <button id="updat" type="button" class="btn btn-primary" onclick="actualizarProducto()">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Modal -->
