<!-- Large modal -->
<div id="modalCliente" class="modal fade bd-example-modal-lg"   role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header  GrisOscuro">
        <h5 class="modal-title" id="tituloModal">Registro de Cita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div id="clienteSelect" class="form-group col-sm-9">
                        <label class="form-control-label">Nombre cliente:</label>
                        <select id="selectCliente" class="form-control form-control-sm disableBtn1" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                          <label class="form-control-label">Id cliente:</label>
                          <div class="input-group mb-3">
                            <input type="number" class="form-control form-control-sm" id="idCliente" name="precio" disabled>
                            <div class="input-group-append">
                                <button class="btn btn-success btn-sm btn-block  disableBtn1"  onclick="limpiarCheckbox();" ><a class="fa fa-eraser"> </a></button>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
        <hr>
          <div class="form-row">
            <div class="col-sm-6">
              <input  id="inputFile" type="file" aria-describedby="nameHelp"  style="display:none">
                <center>
                  <img type="file" src="img/avatar.png" id="imagenFile" style="width:140px; height:140px; border-radius:100%">
                </center>
              </div>
            <div class="col-md-6">
              <label for="example-text-input">Nombre *</label>
              <input class="form-control form-control-sm disableBtn" type="text" placeholder="Nombre" id="nombreCliente">
              <label for="example-text-input" >Apellido Paterno *</label>
              <input class="form-control form-control-sm disableBtn" type="text" placeholder="Apellido" id="apellido1Cliente">
            </div>
            <div class="col-md-6">
              <label for="example-text-input" >Apellido Materno</label>
              <input class="form-control form-control-sm disableBtn" type="text" placeholder="Apellido" id="apellido2Cliente">
            </div>
            <div class="col-md-6">
              <label for="example-text-input">Celular</label>
              <input class="form-control form-control-sm disableBtn" type="number" placeholder="(664)000-0000" id="celCliente">
            </div>
            <div class="col-md-6">
              <label for="example-text-input" >Correo Electrónico</label>
              <input class="form-control form-control-sm disableBtn" type="email" placeholder="Ejemplo@ejemplo.com" id="emailCliente">
            </div>
            <div class="col-md-6">
              <label for="example-text-input">Sexo *</label>
                <select class="form-control form-control-sm disableBtn" id="sexo">
                  <option></option>
                  <option value="1">Masculino</option>
                  <option value="2">Femenino</option>
                </select>
            </div>
            <div class="col-md-4">
              <label for="example-text-input">Fecha de Nacimiento *</label>
                <input class="form-control form-control-sm disableBtn" type="date" id="fechaNacimiento">
            </div>
            <div class="col-md-4">
              <label for="example-text-input form-control-sm">Estado Civil *</label>
                <select class="form-control form-control-sm disableBtn" id="edoCivil">
                  <option></option>
                  <option value="1">Soltero (a)</option>
                  <option value="2">Casado (a)</option>
                </select>
            </div>
            <div class="col-md-4">
              <label for="example-text-input">Estado *</label>
                <select class="form-control form-control-sm disableBtn" id="ciudad">
                  <option></option>
                  <option value="no">Seleccione uno...</option>
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
          </div>
            <hr>
            <div class="form-row">
              <div class="col-sm-12">
                <label for="">Tipo de Servicio</label>
                <div class="input-group mb-3">
                  <select class="form-control form-control-sm disableBtn1" id="selectServicio"></select>

                </div>
              </div>
              <div class="col-sm-9">
                <label for="">Consultorio</label>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                      <select class="form-control form-control-sm disableBtn1" id="selectConsul"></select>
                      <div class="input-group-append">
                        <button class="btn btn-success btn-sm btn-block disableBtn1"  id="addConsul" ><a class="fa fa-plus"> </a></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <label for="">Fecha</label>
                <input type="date" id="fechaCita"  class="form-control form-control-sm disableBtn1">
              </div>
              <div class="col-sm-6">
                <label for="">Terapeuta</label>
                <select class="form-control form-control-sm disableBtn1" id="selectTera">
                </select>
              </div>
              <div class="col-sm-3">
                <div class="bootstrap-timepicker">
                   <div class="form-group">
                     <label>Hora Inicio:</label>
                     <div class="input-group">
                       <input type="time" id="horaInicio" class="form-control form-control-sm disableBtn1 ">
                      </div>
                   </div>
                 </div>
              </div>
              <div class="col-sm-3">
                <div class="bootstrap-timepicker">
                   <div class="form-group">
                     <label>Hora Final:</label>
                     <div class="input-group">
                       <input type="time" id="horaFinal" class="form-control form-control-sm disableBtn1 ">
                      </div>
                   </div>
                 </div>
              </div>
              <div class="col-md-12">
                  <label for="example-text-input" >Observaciones</label>
                  <input class="form-control form-control-sm disableBtn1" type="text"  id="Observacion">
                 </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" onclick="guardarCita();" id="guardarCit" class="btn btn-primary">Save for later</button>
        </div>
      </div>
    </div>
  </div>
