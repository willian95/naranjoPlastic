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
            <div class="col-md-4">
              <label for="example-text-input" >Correo Electrónico</label>
              <input class="form-control form-control-sm disableBtn" type="email" placeholder="Ejemplo@ejemplo.com" id="emailCliente">
            </div>
            <div class="col-md-4">
              <label for="example-text-input">Sexo *</label>
                <select class="form-control form-control-sm disableBtn" id="sexo">
                  <option></option>
                  <option value="1">Masculino</option>
                  <option value="2">Femenino</option>
                </select>
            </div>
            <div class="col-md-4">
              <label for="example-text-input">Fecha de Nacimiento *</label>
                <input class="form-control form-control-sm disableBtn" type="text" id="fechaNacimiento">
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
              <label for="example-text-input">Pais *</label>
                <select class="form-control form-control-sm disableBtn" id="pais">
                  <option></option>
                  @foreach(App\Pais::all() as $pais)
                    <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
                  @endforeach
                </select>
            </div>
            <div class="col-md-4">
              <label for="example-text-input">Estado *</label>
                <select class="form-control form-control-sm disableBtn" id="estados">
                  <option></option>
                   
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
                <input type="text" id="fechaCita"  class="form-control form-control-sm disableBtn1 datepicker">
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
                       <input type="time" id="horaInicio" class="form-control form-control-sm disableBtn1 timepicker">
                      </div>
                   </div>
                 </div>
              </div>
              <div class="col-sm-3">
                <div class="bootstrap-timepicker">
                   <div class="form-group">
                     <label>Hora Final:</label>
                     <div class="input-group">
                       <input type="time" id="horaFinal" class="form-control form-control-sm disableBtn1 timepicker">
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
