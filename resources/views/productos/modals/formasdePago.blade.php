<div class="modal fade bd-example-modal-lg" id="pagosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header GrisOscuro">
                <h5 class="modal-title" id="exampleModalLabel">Formas de Pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="example-text-input" class="form-control-label">Total en Pesos</label>
                                    <input class="form-control" type="number" placeholder="$ 0.00" id="tpesos" disabled>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="example-text-input" class="form-control-label">Total en Dolares</label>
                                    <input class="form-control" type="number" placeholder="$ 0.00" id="tdolar" disabled>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="example-text-input" class="form-control-label">Tipo de Cambio</label>
                                    <input class="form-control" type="number" placeholder="$ 0.00" id="tcambio" name={{$tCambio->id}} value={{$tCambio->cambio}} disabled>
                                </div>
                                <div class="form-group col-md-3" id="selectO">
                                    <label for="example-text-input" class="form-control-label">Tipo de pago</label>
                                    <select class="form-control"  id="pagos">
                                        <option value="0">Contado</option>
                                        <option value="1">Credito</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Efectivo</label>
                                <div class="col-8">
                                    <input class="form-control" type="number" placeholder="$ 0.00" id="efectivo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Dolares</label>
                                <div class="col-8">
                                    <input class="form-control" type="number" placeholder="$ 0.00" id="dolar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Tarjeta</label>
                                <div class="col-8">
                                    <input class="form-control" type="number" placeholder="$ 0.00" id="tarjeta">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Transferencia</label>
                                <div class="col-8">
                                    <input class="form-control" type="number" placeholder="$ 0.00" id="transferencia">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Deposito</label>
                                <div class="col-8">
                                    <input class="form-control" type="number" placeholder="$ 0.00" id="deposito">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-GrisOscuro" id="btnPagar"onclick="realizarCobro()">Pagar</button>
               <a id="btnNota" class="btn btn-GrisOscuro" target="_blank"> ticket</a>
            </div>
        </div>
    </div>
</div>
