<div class="modal fade bd-example-modal-lg modal-open"  data-backdrop="static" data-keyboard="false" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header GrisOscuro">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
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
                    Datos Personales
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <center>

                            <input  id="inputFile" type="file" aria-describedby="nameHelp"  style="display:none">
                          <img type="file" src="/img/avatar.png" id="imagenFile" style="width:140px; height:140px; border-radius:100%">
                        </center>
                      </div>
                      <div class="col-sm-6">
                        <label for="name">Nombres *</label>
                        <input class="form-control form-control-sm rdOnly" id="name" type="text"  placeholder="Nombre">

                        <label for="apePat">Apellido Paterno *</label>
                        <input class="form-control form-control-sm rdOnly" id="apePat" type="text" placeholder="Apellido">
                      </div>
                      <div class="col-sm-6">
                        <label for="apeMat">Apellido Materno</label>
                        <input class="form-control form-control-sm rdOnly" id="apeMat" type="text" placeholder="Apellido">
                      </div>
                      <div class="col-sm-6">
                        <label for="idCiudad">Estado</label>
                        <select class="form-control form-control-sm rdOnly" id="idCiudad">
                           <option value="1">Aguascalientes</option>
                           <option value="2">Baja California</option>
                           <option value="3">Baja California Sur</option>
                           <option value="4">Campeche</option>
                           <option value="5">Chiapas</option>
                           <option value="6">Chihuahua</option>
                           <option value="7">Coahuila</option>
                           <option value="8">Colima</option>
                           <option value="9">Distrito Federal</option>
                           <option value="10">Durango</option>
                           <option value="11">Estado de México</option>
                           <option value="12">Guanajuato</option>
                           <option value="13">Guerrero</option>
                           <option value="14">Hidalgo</option>
                           <option value="15">Jalisco</option>
                           <option value="16">Michoacán</option>
                           <option value="17">Morelos</option>
                           <option value="18">Nayarit</option>
                           <option value="19">Nuevo León</option>
                           <option value="20">Oaxaca</option>
                           <option value="21">Puebla</option>
                           <option value="22">Querétaro</option>
                           <option value="23">Quintana Roo</option>
                           <option value="24">San Luis Potosí</option>
                           <option value="25">Sinaloa</option>
                           <option value="26">Sonora</option>
                           <option value="27">Tabasco</option>
                           <option value="28">Tamaulipas</option>
                           <option value="29">Tlaxcala</option>
                           <option value="30">Veracruz</option>
                           <option value="31">Yucatán</option>
                           <option value="32">Zacatecas</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label for="TelCasa">Teléfono</label>
                        <input class="form-control form-control-sm rdOnly" id="TelCasa" type="number" placeholder="(664)000-0000">
                      </div>
                      <div class="col-sm-6">
                        <label for="Celular">Celular *</label>
                        <input class="form-control form-control-sm rdOnly" id="celular" type="number" placeholder="(664)000-0000">
                      </div>
                      <div class="col-sm-6">
                        <label for="email">Correo *</label>
                        <input class="form-control form-control-sm rdOnly" id="email" type="email" placeholder="Ejemplo@ejemplo.com">
                      </div>
                      <div class="col-sm-4">
                        <label for="password">Contraseña *</label>
                        <input class="form-control form-control-sm rdOnly" id="password" type="password" placeholder="Password">
                      </div>
                      <div class="col-sm-2">
                        <label for="colorId">Color</label>
                        <input class="form-control form-control-sm rdOnly" id="colorId" type="color" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header Aqua">
                    Permisos
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <label>Administrador</label>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="1" id="usuarioPermiso">
                          <label class="form-check-label" for="usuarioPermiso">
                            Usuarios y Permisos
                          </label>
                        </div>
                         <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox"   id="agendaAdmin">
                          <label class="form-check-label" for="agendaAdmin">
                            Agenda
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox"   id="borrarPermiso">
                          <label class="form-check-label" for="borrarPermiso">
                            Permiso de Eliminar
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox"   id="membresias">
                          <label class="form-check-label" for="membresias">
                            Membresias
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox"  id="tipoCambio">
                          <label class="form-check-label" for="tipoCambio">
                            Tipo de cambio
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox"  id="altaCliente">
                          <label class="form-check-label" for="altaCliente">
                            Alta de clientes
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <label>Servicios</label>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox"   id="venderServ">
                          <label class="form-check-label" for="venderServ">
                            Vender
                          </label>
                        </div>                       
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="1" id="abonosServ">
                          <label class="form-check-label" for="abonosServ">
                            Abonos
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="1" id="altaServ">
                          <label class="form-check-label" for="altaServ">
                            Alta
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="1" id="usoMembresia">
                          <label class="form-check-label" for="usoMembresia">
                            Impresion membresia
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <label>Productos</label>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="1" id="venderProd">
                          <label class="form-check-label" for="venderProd">
                            Vender
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="1" id="abonoProd">
                          <label class="form-check-label" for="abonoProd">
                            Abono
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="1" id="altaProd">
                          <label class="form-check-label" for="altaProd">
                            Alta
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="1" id="agregarStock">
                          <label class="form-check-label" for="agregarStock">
                            Agregar stock
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <label>Inventarios</label>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="" id="productoPublico">
                          <label class="form-check-label" for="productoPublico">
                            Productos al público
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="" id="productoServ">
                          <label class="form-check-label" for="productoServ">
                            Productos en servicio
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <label>Reportes</label>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="" id="rendimientoRepor">
                          <label class="form-check-label" for="rendimientoRepor">
                            Rendimiento
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly" type="checkbox" value="" id="ventaCajero">
                          <label class="form-check-label" for="ventaCajero">
                            Venta cajero
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input rdOnly " type="checkbox" value="" id="ventaGeneral">
                          <label class="form-check-label" for="ventaGeneral">
                            Venta general
                          </label>
                        </div>
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
