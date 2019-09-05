<!-- Large modal -->
<div id="modalPrueba" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header  GrisOscuro">
        <h5 class="modal-title" id="wizard-title">Registro de Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#general" role="tab">Información General</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#adicional" role="tab">Información Adicional</a>
          <li>
        </ul>

        <div class="tab-content mt-2">
          <div class="tab-pane fade show active" id="general" role="tabpanel">
            <div class="form-row">

          <div class="col-md-12">
          <div class="card">
            <div class="card-header Aqua">Información General</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                        <input  id="inputFile" type="file" aria-describedby="nameHelp"  style="display:none">
                        <center>
                          <img type="file" src="/img/avatar.png" id="imagenFile" style="width:140px; height:140px; border-radius:100%">
                        </center>
                      </div>

                <div class="col-md-6">
                  <label for="example-text-input">Nombre</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Adrian" id="nombreCliente">
                  <label for="example-text-input" >Apellido Paterno</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Perez" id="apellido1Cliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" >Apellido Materno</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Jimenez" id="apellido2Cliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" >Teléfono</label>
                  <input class="form-control form-control-sm" type="number" placeholder="6641234567" id="telCliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Celular</label>
                  <input class="form-control form-control-sm" type="number" placeholder="6641234567" id="celCliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" >Correo Electrónico</label>
                  <input class="form-control form-control-sm" type="email" placeholder="correo@gmail.com" id="emailCliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Sexo</label>
                    <select class="form-control form-control-sm" id="sexo">
                      <option value="1">Masculino</option>
                      <option value="2">Femenino</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Fecha de Nacimiento</label>
                    <input class="form-control form-control-sm" type="date" value="2011-08-19" id="fechaNacimiento">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input form-control-sm">Estado Civil</label>
                    <select class="form-control" id="edoCivil">
                      <option value="1">Soltero (a)</option>
                      <option value="2">Casado (a)</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Ciudad</label>
                    <select class="form-control form-control-sm" id="ciudad">
                      <option value="1">Tijuana</option>
                    </select>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header Aqua">Ocupación</div>
              <div class="card-body">
                <div class="row">
                <div class="col-md-4">
                  <label for="example-text-input">Puesto</label>
                  <input class="form-control form-control-sm" type="text" placeholder="Mantenimiento" id="puestoCliente">
                </div>
                <div class="col-md-4">
                  <label for="example-text-input" >Compañia</label>
                  <input class="form-control form-control-sm" type="text" placeholder="ISSSTE" id="companiaCliente">
                </div>
                <div class="col-md-4">
                  <label for="example-text-input" >Teléfono</label>
                  <input class="form-control form-control-sm" type="tel" placeholder="6641234567" id="telCompania">
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header Aqua">En Caso de Emergencia</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <label for="example-text-input">Nombre</label>
                      <input class="form-control form-control-sm" type="text" placeholder="Miguel Serrano" id="nombreEmergencia">
                    </div>
                    <div class="col-md-4">
                      <label for="example-text-input">Relación</label>
                      <input class="form-control form-control-sm" type="text" placeholder="Amigo" id="relacionEmergencia">
                    </div>
                    <div class="col-md-4">
                      <label for="example-text-input">Teléfono</label>
                      <input class="form-control form-control-sm" type="tel" placeholder="6641234567" id="telEmegencia">
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div class="modal-footer">



        <button class="btn btn-GrisOscuro float-right" id="generalContinuar">Continuar</button>
      </div>
          <div class="tab-pane fade" id="adicional" role="tabpanel">
            <div class="form-row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header Aqua">Salud Personal</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="abdominales">
                        <label class="form-check-label" for="abdominales">¿Sufre dolores abdominales?</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="circulacion">
                        <label class="form-check-label" for="circulacion">¿Problemas de circulación?</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="dermatologico">
                          <label class="form-check-label" for="dermatologico">¿Problemas dermatológicos?</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="presion">
                        <label class="form-check-label" for="presion">¿Padece de presión baja/alta?</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="alergias">
                          <label class="form-check-label" for="alergias">¿Padece de alergias o gripa?</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="vih">
                        <label class="form-check-label" for="vih">¿VIH?</label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="anticoagulante">
                        <label class="form-check-label" for="anticoagulante">¿Toma algún anticoagulante?</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="hemorragias">
                          <label class="form-check-label" for="hemorragias">¿Ha presentado trombosis o hemorragias graves?</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="embarazo">
                          <label class="form-check-label" for="embarazo">¿Está o puede estar embarazada/Tiene el dispositivo intrauterino (DIU)?</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="auditivo">
                          <label class="form-check-label" for="auditivo">¿Tiene algun problema auditivo?</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="medicamento">
                          <label class="form-check-label" for="medicamento">¿Toma medicamentos?</label>
                          <a>¿Cual?</a>
                          <input class="form-control form-control-sm" type="text" placeholder="Paracetamol" id="cualMedicamento">
                        </div>
                      </div>
                    <div class="col-md-6">

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="tumores">
                      <label class="form-check-label" for="tumores">¿Tiene o ha tenido tumores benignos o malignos?</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hipertension">
                      <label class="form-check-label" for="hipertension">¿Padece de hipertensión?</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="diabetes">
                        <label class="form-check-label" for="diabetes">¿Padece diabetes?</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="menstruacion">
                      <label class="form-check-label" for="menstruacion">¿Se encuentra en su periodo menstrual?</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cirugias">
                        <label class="form-check-label" for="cirugias">¿Ha tenido cirugias en los ultimos 6 meses?</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id=implantes>
                      <label class="form-check-label" for="implantes">¿Tiene implantes, placas metalicas y/o tornillos en los huesos?</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="exposicionSol">
                        <label class="form-check-label" for="exposicionSol">¿Se ha expuesto, se expone actualmente o piensa exponerse al sol durante el tratamiento?</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="colesterol">
                        <label class="form-check-label" for="colesterol">¿Tiene resultados de colesterol y/o trigliceridos altos?</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="servicioProhibido">
                        <label class="form-check-label" for="servicioProhibido">¿Algún Doctor te ha prohibido algunos de nuestros servicios?¿Cual?</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Depilación" id="cualServicio">
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
              <button class="btn btn-GrisOscuro" id="adicionalContinuar" onclick="guardarCliente();">Guardar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
        <div class="progress mt-5">
          <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Paso 1 de 2</div>
        </div>
      </div>
    <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save for later</button>
      </div>-->
    </div>
  </div>
</div>
