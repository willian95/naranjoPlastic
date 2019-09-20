<!-- Large modal -->
<div id="modalCliente" class="modal fade bd-example-modal-lg modal-open" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header  GrisOscuro">
        <h5 class="modal-title" id="tituloModal">Registro de Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#seccion1" role="tab">Sección 1</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion2" role="tab">Sección 2</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion3" role="tab">Sección 3</a>
          <li>
        </ul>

        <div class="tab-content mt-2">
          <div class="tab-pane fade show active" id="seccion1" role="tabpanel">
            <div class="form-row">

          <div class="col-md-12">
          <div class="card">
            <div class="card-header Aqua">Información General</div>
              <div class="card-body">
                <div class="row">
                  {{--<div class="col-sm-6">
                        <input  id="inputFile" type="file" aria-describedby="nameHelp"  style="display:none">
                        <center>
                          <img type="file" src="/img/avatar.png" id="imagenFile" style="width:140px; height:140px; border-radius:100%">
                        </center>
                      </div>--}}

                <div class="col-md-6">
                  <label for="example-text-input">Nombre / first Name *</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="text" placeholder="Nombre" id="nombreCliente">
                  <label for="example-text-input" >Apellidos / Last Name *</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="text" placeholder="Apellido" id="apellido1Cliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Segundo Nombre / Middle Name *</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="text" placeholder="Segundo nombre" id="segundoNombreCliente">
                  <label for="example-text-input">Fecha de Nacimiento / Date of Birth *</label>
                    <input class="form-control form-control-sm disableBtn viewClient" type="date" id="fechaNacimiento">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" >Lugar de Nacimiento / Hometown</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="text" placeholder="Lugar de nacimiento" id="lugarNacimiento">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" >Edad / Age</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="number" placeholder="Edad" id="edad">
                </div>

                <div class="col-md-6">
                  <label for="example-text-input">Sexo / Sex *</label>
                    <select class="form-control form-control-sm disableBtn viewClient" id="sexo">
                      <option></option>
                      <option value="1">Masculino</option>
                      <option value="2">Femenino</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="example-text-input">Tipo de Sangre / Blood Type</label>
                      <select class="form-control form-control-sm disableBtn viewClient" id="tipoSangre">
                        <option value="O positivo">O positivo</option>
                        <option value="A negativo">A negativo</option>
                        <option value="A positivo">A positivo</option>
                        <option value="B negativo">B negativo</option>
                        <option value="B positivo">B positivo</option>
                        <option value="AB negativo">AB negativo</option>
                        <option value="AB positivo">AB positivo</option>
                      </select>
                  </div>

                <div class="col-md-6">
                  <label for="example-text-input form-control-sm">Estado Civil / Marital Status*</label>
                    <select class="form-control disableBtn viewClient" id="edoCivil">
                      <option></option>
                      <option value="1">Soltero (a)</option>
                      <option value="2">Casado (a)</option>
                      <option value="3">Viudo (a)</option>
                      <option value="4">Divorciado (a)</option>
                      <option value="5">Unión libre</option>
                    </select>
                </div>

                <div class="col-md-6">
                  <label for="example-text-input">Religión / Religion</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="text" placeholder="Religión" id="religion">
                </div>

                <div class="col-md-6">
                  <label for="example-text-input">Escolaridad / Educational Stage</label>
                    <select class="form-control form-control-sm disableBtn viewClient" id="escolaridad">
                      <option></option>
                      <option value="1">Sin estudios</option>
                      <option value="2">Primaria</option>
                      <option value="3">Secundaria</option>
                      <option value="4">Técnica</option>
                      <option value="5">Universitaria</option>
                      <option value="6">Maestría</option>
                      <option value="7">Post-Grado</option>
                    </select>
                </div>

                <div class="col-md-6">
                  <label for="example-text-input">Ocupación / Occupation</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="text" id="ocupacion_seccion2">
                </div>
                 
                <div class="col-md-6">
                  <label for="example-text-input">Teléfono celular / Cellphone number</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="number" placeholder="(664)000-0000" id="celCliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Teléfono de casa / Home phone number</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="number" placeholder="(664)000-0000" id="telCliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Teléfono de oficina / workplace number</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="number" placeholder="(664)000-0000" id="telOficCliente">
                </div>
                
                
                <div class="col-md-6">
                  <label for="example-text-input" >Email *</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="email" placeholder="Ejemplo@ejemplo.com" id="emailCliente">
                </div>
                
               
                <div class="col-md-6">
                  <label for="example-text-input">País / Country *</label>
                  <select id="pais" class="form-control viewClient" onchange="obtenerEstados()">
                    
                    <option value="0" selected>Seleccione un país</option>
                    @foreach(\DB::table('paises')->get() as $pais)
                      <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
                    @endforeach

                  </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Estado / State *</label>
                    <select class="form-control form-control-sm disableBtn viewClient" id="estados">
                    
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Calle y No. / Street</label>
                  <input type="text" id="calle" class="form-control viewClient">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Ciudad / City</label>
                  <input type="text" id="ciudad" class="form-control viewClient">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Código Postal / ZIP Code</label>
                  <input type="text" id="codigo-postal" class="form-control viewClient">
                </div>
                <div class="col-md-6">
                    <label for="example-text-input">Pase Médico / Medical Pass Placas / Plate Number:</label>
                    <input type="text" id="paseMedico" class="form-control viewClient">
                </div>
                <div class="col-md-12">
                  <label for="example-text-input">¿Cómo se enteró de nosotros? / How did you know about us?</label>
                  <select class="form-control form-control-sm disableBtn viewClient" id="entero-nosotros">
                      <option></option>
                      <option value="Amigo / Friend">Amigo / Friend</option>
                      <option value="Internet">Internet</option>
                    </select>
                </div>
                <div class="col-md-12">
                  <label for="example-text-input">Especifique / Specify</label>
                  <textarea class="form-control viewClient" id="especifiqueEnteroNosotros" rows="5"></textarea>
                  
                </div>
                <div class="col-md-12">
                    <label for="example-text-input">Aseguradora / Financial AID</label>
                    <input class="form-control viewClient" id="aseguradora">
      
                  </div>
                <div class="col-md-6">
                  <label for="example-text-input">¿Cirugías plásticas previas? / Previous Plastic Surgeries</label>
                  <input type="text" id="cirugias-previas" class="form-control viewClient">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">¿Otras cirugías? / Other Surgeries</label>
                  <input type="text" id="otras-cirugias" class="form-control viewClient">
                </div>
              </div>
              </div>
            </div>
          </div>
          {{--<div class="col-md-12">
            <div class="card">
              <div class="card-header Aqua">Ocupación / Occupation</div>
              <div class="card-body">
                <div class="row">
                <div class="col-md-4">
                  <label for="example-text-input">Puesto</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="text" id="puestoCliente">
                </div>
                <div class="col-md-4">
                  <label for="example-text-input" >Compañia</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="text" id="companiaCliente">
                </div>
                <div class="col-md-4">
                  <label for="example-text-input" >Teléfono</label>
                  <input class="form-control form-control-sm disableBtn viewClient" type="tel" id="telCompania">
                </div>
              </div>
              </div>
            </div>
          </div>--}}
          <div class="col-md-12">
            <div class="card">
              <div class="card-header Aqua">En Caso de Emergencia</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <label for="example-text-input">Nombre</label>
                      <input class="form-control form-control-sm disableBtn viewClient" type="text" id="nombreEmergencia">
                    </div>
                    <div class="col-md-4">
                      <label for="example-text-input">Relación</label>
                      <input class="form-control form-control-sm disableBtn viewClient" type="text" id="relacionEmergencia">
                    </div>
                    <div class="col-md-4">
                      <label for="example-text-input">Teléfono</label>
                      <input class="form-control form-control-sm disableBtn viewClient" type="tel" id="telEmegencia">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header Aqua">Consulta de primera vez</div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <label for="example-text-input">Diagnóstico pre-operatorio</label>
                          <textarea class="form-control form-control-sm disableBtn viewClient" id="diagnosticoPreOperatorio" rows="5"></textarea>
                        </div>
                        <div class="col-md-12">
                          <label for="example-text-input">Procedimiento quirurgico</label>
                          <textarea class="form-control form-control-sm disableBtn viewClient" id="procedimientoQuirurgico" rows="5"></textarea>
                        </div>
                        <div class="col-md-12">
                          <label for="example-text-input">Plan Quirurgico</label>
                          <textarea class="form-control form-control-sm disableBtn viewClient" id="planQuirurgico" rows="5"></textarea>
                        </div>
                        <div class="col-md-12">
                          <label for="example-text-input">Cuidados y plan terapeutico pre-quirurgico</label>
                          <textarea class="form-control form-control-sm disableBtn viewClient" id="cuidadoTerapeutico" rows="5"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

      </div class="modal-footer">
        <button class="btn btn-GrisOscuro float-right" id="generalContinuar">Continuar</button>
      </div>
          <div class="tab-pane fade" id="seccion2" role="tabpanel">
            <div class="form-row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header Aqua">Sección 2</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                          <h3>Ficha de Identificación</h3>
                      </div>
                      {{--<div class="col-md-6">
                        <label for="example-text-input">Nombre</label>
                        <input type="text" id="nombre_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input">Teléfono</label>
                        <input type="text" id="telefono_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input">Edad</label>
                        <input type="text" id="edad_seccion2" class="form-control viewClient">
                      </div>

                      <div class="col-md-6">
                          <label for="example-text-input form-control-sm">Estado Civil / Marital Status*</label>
                          <select class="form-control disableBtn viewClient" id="edoCivil_seccion2">
                            <option></option>
                            <option value="1">Soltero (a)</option>
                            <option value="2">Casado (a)</option>
                            <option value="3">Viudo (a)</option>
                            <option value="4">Divorciado (a)</option>
                            <option value="5">Unión libre</option>
                          </select>
                      </div>--}}
                      {{--<div class="col-md-6">
                        <label for="example-text-input">Ocupación</label>
                        <input type="text" id="ocupacion_seccion2" class="form-control viewClient">
                      </div>--}}
                      {{--<div class="col-md-6">
                        <label for="example-text-input">Religión</label>
                        <input type="text" id="religion_seccion2" class="form-control viewClient">
                      </div>--}}
                      <div class="col-md-6">
                        <label for="example-text-input">Originaria</label>
                        <input type="text" id="originariaSeccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input">Reside</label>
                        <input type="text" id="direccion_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">AHF</label>
                        <input type="text" id="ahfSeccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">APNP</label>
                        <textarea class="form-control viewClient" id="apnpSeccion2" rows="5"></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">APP</label>
                        <textarea class="form-control viewClient" id="appSeccion2" rows="5"></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">AGO</label>
                        <textarea class="form-control viewClient" id="agoSeccion2" rows="5"></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">Padecimiento actual:</label>
                        <textarea name="" id="padecimiento_seccion2" rows="5" class="form-control viewClient"></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">Exploración Física:</label>
                        <textarea name="" id="exploracionFisicaSeccion2" rows="5" class="form-control viewClient"></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">Laboratorio:</label>
                        <textarea name="" id="laboratorioSeccion2" rows="5" class="form-control viewClient"></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">Idx:</label>
                        <textarea name="" id="idxSeccion2" rows="5" class="form-control viewClient"></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">Plan:</label>
                        <textarea name="" id="planSeccion2" rows="5" class="form-control viewClient"></textarea>
                      </div>

                      
                      {{--<div class="col-md-6">
                        <label for="example-text-input">Lugar nacimiento</label>
                        <input type="text" id="lugar_nacimiento_seccion2" class="form-control viewClient">
                      </div>--}}
                      
                      
                      
                      {{--<div class="col-md-6">
                        <label for="example-text-input">Fecha de elaboración de la historia</label>
                        <input type="date" id="fecha_historia_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input">Fecha de Nacimiento</label>
                          <input class="form-control form-control-sm disableBtn viewClient" type="date" id="fecha_nacimiento_seccion2">
                      </div>
                      
                      
                      

                    </div>

                    <div class="row">
                      <div class="col-12">
                          <h3>Antecedentes Heredo Familiares</h3>
                      </div>
                      <div class="col-md-6">
                          <label for="example-text-input">Padre: </label>
                          <input type="text" id="padre_seccion2" class="form-control viewClient">

                          <label for="example-text-input">Enfermedades y cuales: </label>
                          <input type="text" id="enfermedades_padre_seccion2" class="form-control viewClient">

                          <label for="example-text-input">alergias: </label>
                          <input type="text" id="alergias_padre_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-6">
                          <label for="example-text-input">Madre: </label>
                          <input type="text" id="madre_seccion2" class="form-control viewClient">

                          <label for="example-text-input">Enfermedades y cuales: </label>
                          <input type="text" id="enfermedades_madre_seccion2" class="form-control viewClient">

                          <label for="example-text-input">alergias: </label>
                          <input type="text" id="alergias_madre_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-6">
                          <h5>Abuelos Paternos</h5>
                          <label for="example-text-input">Enfermedades y Cuales: </label>
                          <input type="text" id="abuelos_paternos_enfermedades_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-6">
                          <h5>Abuelos Maternos</h5>
                          <label for="example-text-input">Enfermedades y Cuales: </label>
                          <input type="text" id="abuelos_maternos_enfermedades_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-6">
                          <h5>Hermanos</h5>
                          <label for="example-text-input">Cuantos Hermanos: </label>
                          <input type="number" id="hermanos_cuantos_seccion2" class="form-control viewClient">
                          <label for="example-text-input">Enfermedades y Cuales: </label>
                          <input type="text" id="hermanos_enfermedades_seccion2" class="form-control viewClient">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                          <h3>Antecedentes Personales Patológicos</h3>
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Enfermedades congénitas: </label>
                          <input type="text" id="enfermedades_congenitas_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Enfermedades propias de infancia y cuales: </label>
                          <input type="text" id="enfermedades_infancia_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Enfermedades crónico-degenerativas</label>
                          <input type="text" id="enfermedades_cronico_degenerativas_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Internamientos o intervenciones quirúrgicas</label>
                          <input type="text" id="internamientos_quirurgicos_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Transfusiones</label>
                          <input type="text" id="transfusiones_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Traumáticas</label>
                          <input type="text" id="traumaticas_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Alergía a medicamentos y/o alimentos</label>
                          <input type="text" id="alergias_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="tabaquismo">
                            <label class="form-check-label" for="tabaquismo">Tabaquismo</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="alcoholismo">
                            <label class="form-check-label" for="alcoholismo">Alcoholismo</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="drogas">
                            <label class="form-check-label" for="drogas">Drogas</label>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input viewClient">Cirugías anteriores</label>
                          <input type="text" id="cirugias_anteriores_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input viewClient">Medicamentos</label>
                          <input type="text" id="medicamentos_seccion2" class="form-control viewClient">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                          <h3>Antecedentes Personales No Patológicos</h3>
                          <h5>Casa:</h5>
                      </div>
                      <div class="col-md-6">
                          
                          <label for="example-text-input">Número de habitaciones:</label>
                          <input type="number" id="numero_habitaciones_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-6">
                          <label for="example-text-input">Cuántas personas:</label>
                          <input type="number" id="cuantas_personas_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Material:</label>
                          <input type="text" id="material_seccion2" class="form-control viewClient">
                      </div>
                      <div class="col-md-12">
                        <div class="form-check">
                          <input class="form-check-input viewClient" type="checkbox" value="" id="ventilacion">
                          <label class="form-check-label" for="ventilacion">Ventilación adecuada</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Cuenta con los servicios:</label>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="agua_seccion2">
                            <label class="form-check-label" for="agua_seccion2">Agua</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="gas_seccion2">
                            <label class="form-check-label" for="gas_seccion2">Gas</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="luz_seccion2">
                            <label class="form-check-label" for="luz_seccion2">Luz</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="drenaje_seccion2">
                            <label class="form-check-label" for="drenaje_seccion2">Drenaje</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="mascotas_seccion2">
                            <label class="form-check-label" for="mascotas_seccion2">Mascotas</label>
                          </div>
                      </div>
                      <div class="col-md-12">
          
                            <label for="example-text-input">Cuáles mascotas:</label>
                            <input type="text" id="cuales_mascotas_seccion2" class="form-control viewClient" readonly>
                      
                      </div>
                      <div class="col-md-12">
                      
                            <label for="example-text-input">Disposición de basura:</label>
                            <input type="text" id="disposicion_basura_seccion2" class="form-control viewClient">
                       
                      </div>
                      <div class="col-md-12">
                         
                            <label for="example-text-input">Alimentación:</label>
                            <input type="text" id="alimentacion_seccion2" class="form-control viewClient">
                      
                      </div>
                      <div class="col-md-12">
                         
                            <label for="example-text-input">Ingiere Alcohol:</label>
                            <input type="text" id="ingiere_alcohol_seccion2" class="form-control viewClient">
                      
                      </div>
                      <div class="col-md-12">
           
                            <label for="example-text-input">Organizaciones:</label>
                            <input type="text" id="organizaciones_seccion2" class="form-control viewClient">
                        
                      </div>
                      <div class="col-md-12">
           
                            <label for="example-text-input">Hace ejercicio:</label>
                            <input type="text" id="hace_ejercicio_seccion2" class="form-control viewClient">
                        
                      </div>
                      <div class="col-md-12">
                          
                            <label for="example-text-input">Higiene:</label>
                            <input type="text" id="higiene_seccion2" class="form-control viewClient">
                        
                      </div>
                      <div class="col-md-12">
                          
                            <label for="example-text-input">Fuma:</label>
                            <input type="text" id="fuma_seccion2" class="form-control viewClient">
                        
                      </div>
                      <div class="col-md-12">
                          
                            <label for="example-text-input">Antecedentes Heredo-Familiares:</label>
                            <input type="text" id="antecedentes_heredo_seccion2" class="form-control viewClient">
                        
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <h3>Antecedentes Gineco-Obstetricos</h3>
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Menarca:</label>
                        <input type="text" id="menarca_seccion2" class="form-control viewClient">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Inicio de actividad sexual:</label>
                        <input type="text" id="inicio_actividad_seccion2" class="form-control viewClient">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Embarazos:</label>
                        <input type="number" id="gestas_seccion2" class="form-control viewClient">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Partos Naturales:</label>
                        <input type="number" id="partos_seccion2" class="form-control viewClient">
                    
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Cesáreas:</label>
                        <input type="number" id="cesareas_seccion2" class="form-control viewClient">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Abortos:</label>
                        <input type="number" id="abortos_seccion2" class="form-control viewClient">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Fecha Ultima Menstruación:</label>
                        <input type="date" id="fur_seccion2" class="form-control viewClient">
                     
                      </div>

                      <div class="col-md-12">
                      
                        <label for="example-text-input">Interrogatorio por aparatos y sistemas:</label>
                        <textarea class="form-control viewClient" id="interrogatorio_por_aparatos_seccion2" rows="5"></textarea>
                     
                      </div>

                      <div class="col-md-12">
                      
                        <label for="example-text-input">Motivo consulta:</label>
                        <textarea class="form-control viewClient" id="motivo_consulta_seccion2" rows="5"></textarea>
                     
                      </div>--}}
                      

                    </div>

                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-GrisOscuro float-right" id="seccion2Continuar">Continuar</button>
              {{--<button class="btn btn-GrisOscuro" id="adicionalContinuar" onclick="guardarCliente();">Guardar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>--}}
          </div>

          <div class="tab-pane fade" id="seccion3" role="tabpanel">
            <div class="form-row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header Aqua">Valoración Pre-anestesica</div>
                  <div class="card-body">
                    
                    <div class="row">
                      <div class="col-md-4">
                        <label for="example-text-input">Peso:</label>
                        <input name="" id="peso_seccion3"  class="form-control viewClient" />
                      </div>
                      <div class="col-md-4">
                        <label for="example-text-input">Talla:</label>
                        <input name="" id="talla_seccion3" class="form-control viewClient" />
                      </div>
                      <div class="col-md-4">
                        <label for="example-text-input">T/A:</label>
                        <input name="" id="ta_seccion3" class="form-control viewClient" />
                      </div>
                      <div class="col-md-4">
                        <label for="example-text-input">F.C:</label>
                        <input name="" id="fc_seccion3"  class="form-control viewClient" />
                      </div>
                      
                      <div class="col-md-4">
                        <label for="example-text-input">F.R:</label>
                        <input name="" id="fr_seccion3"  class="form-control viewClient" />
                      </div>
                      <div class="col-md-4">
                        <label for="example-text-input">Temp:</label>
                        <input name="" id="temp_seccion3" class="form-control viewClient" />
                      </div>

                      <div class="col-md-6">
                          <label for="example-text-input form-control-sm">Actividad física</label>
                          <select class="form-control disableBtn viewClient" id="actividad_fisica_seccion3">
                            <option></option>
                            <option value="Poca">Poca</option>
                            <option value="Moderada">Moderada</option>
                            <option value="Activa">Activa</option>
                          </select>
                      </div>

                      <div class="col-md-6">
                          <label for="example-text-input form-control-sm">Puede subir escaleras</label>
                          <select class="form-control disableBtn viewClient" id="subir_escaleras_seccion3">
                            <option></option>
                            <option value="Si">Sí</option>
                            <option value="No">No</option>
                          </select>
                      </div>

                      <div class="col-md-6">
                          <label for="example-text-input form-control-sm">¿Cuántos pisos?</label>
                          <select class="form-control disableBtn viewClient" id="cuantos_pisos_seccion3">
                            <option></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="mas">Más</option>
                          </select>
                      </div>

                      <div class="col-md-12">
                        <h3 class="text-center">Historia Familiar</h3>
                      </div>

                      <div class="col-md-12">

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sangrar_excesivamente_seccion3">
                            <label class="form-check-label" for="sangrar_excesivamente_seccion3">Alguien en su familia tiene tendencia a sangrar excesivamente</label>
                          </div>

                      </div>

                      <div class="col-md-12">

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="reacciones_anormales_seccion3">
                            <label class="form-check-label" for="reacciones_anormales_seccion3">Alguien en su familia ha experimentado reacciones anormales con anestesia</label>
                          </div>
                      </div>

                      <div class="col-md-12">

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="fiebre_anestesia_seccion3">
                            <label class="form-check-label" for="fiebre_anestesia_seccion3">Alguien de su familia ha experimentado fiebre durante la anestesia</label>
                          </div>

                      </div>

                      <div class="col-md-12">
                        <h3 class="text-center">Historia Médica</h3>
                      </div>

                      <div class="col-md-12">

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="alergico_medicamentos_seccion3">
                            <label class="form-check-label" for="alergico_medicamentos_seccion3">Es alérgico a ciertos medicamentos</label>
                          </div>

                      </div>

                      <div class="col-md-12">
                        <label for="">¿Cuales?</label>
                        <textarea id="cuales_medicamentos_seccion3" rows="5" class="form-control viewClient"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Describa las reacciones</label>
                        <textarea id="reacciones_seccion3" rows="5" class="form-control viewClient"></textarea>
                      </div>

                      

                      <div class="col-md-12">
                          <label for=""></label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="alergico_cinta_adhesiva_seccion3">
                            <label class="form-check-label" for="alergico_cinta_adhesiva_seccion3">Es alergico a cintas adhesivas</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <label for=""></label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="alergico_oido_seccion3">
                            <label class="form-check-label" for="alergico_oido_seccion3">Es alergico al oído</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <label for=""></label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="bebidas_alcoholicas_seccion3">
                            <label class="form-check-label" for="bebidas_alcoholicas_seccion3">Toma más de 2 o 3 bebidas alcohólicas por semana</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <label for=""></label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sufre_delirios_seccion3">
                            <label class="form-check-label" for="sufre_delirios_seccion3">Sufre delirios</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <label for=""></label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="fuma_seccion3">
                            <label class="form-check-label" for="fuma_seccion3">Fuma</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <label for=""></label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="transfusion_sanguinea_seccion3">
                            <label class="form-check-label" for="transfusion_sanguinea_seccion3">Ha recibido transfusión sanguínea alguna vez</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                          <label for=""></label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="reaccion_transfusion_sanguinea_seccion3">
                            <label class="form-check-label" for="reaccion_transfusion_sanguinea_seccion3">Ha presentado reacción durante la transfusión</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                        <label for="">Describa la reacción:</label>
                        <textarea id="reaccion_transfusion_seccion3" rows="5" class="form-control viewClient"></textarea>
                      </div>

                      <div class="col-md-12">

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="embarazada_seccion3">
                            <label class="form-check-label" for="embarazada_seccion3">Está embarazada</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                        <label for="example-text-input">Fecha última menstruación:</label>
                        <input type="date" name="" id="menstruacion_seccion3" class="form-control viewClient" />
                      </div>

                      <div class="col-md-12">
                        <h3>Padecimientos</h3>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="corazon_seccion3">
                          <label class="form-check-label" for="corazon_seccion3">Enfermedad del corazón</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="angina_seccion3">
                          <label class="form-check-label" for="angina_seccion3">Angina, dolor de pecho</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="adiccion_drogas_seccion3">
                          <label class="form-check-label" for="adiccion_drogas_seccion3">Adicción a drogas</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="dolores_cabeza_seccion3">
                          <label class="form-check-label" for="dolores_cabeza_seccion3">Frecuentes dolores de cabeza</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="enfermedades_mentales_seccion3">
                          <label class="form-check-label" for="enfermedades_mentales_seccion3">Enfermedades Mentales</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="embolia_pulmonar_seccion3">
                          <label class="form-check-label" for="embolia_pulmonar_seccion3">Embolia Pulmonar</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="enfermedades_articulares_seccion3">
                          <label class="form-check-label" for="enfermedades_articulares_seccion3">Enfermedades Articulares</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="fracturas_seccion3">
                          <label class="form-check-label" for="fracturas_seccion3">Fracturas Óseas</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="problemas_columna_seccion3">
                          <label class="form-check-label" for="problemas_columna_seccion3">Problemas de Columna</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="desmayos_seccion3">
                          <label class="form-check-label" for="desmayos_seccion3">Desmayos</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="enfermedades_pulmones_seccion3">
                          <label class="form-check-label" for="enfermedades_pulmones_seccion3">Enfermedades de pulmones</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="asma_seccion3">
                          <label class="form-check-label" for="asma_seccion3">Asma o dificultad respitatoria</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="tiroides_seccion3">
                          <label class="form-check-label" for="tiroides_seccion3">Enfermedades de la tiroides</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="tuberculosis_seccion3">
                          <label class="form-check-label" for="tuberculosis_seccion3">Tuberculosis</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="enfermedades_musculares_seccion3">
                          <label class="form-check-label" for="enfermedades_musculares_seccion3">Enfermedades musculares</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="bronquitis_seccion3">
                          <label class="form-check-label" for="bronquitis_seccion3">Bronquitis</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="enfisema_seccion3">
                          <label class="form-check-label" for="enfisema_seccion3">Enfisema</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="embolia_cerebral_seccion3">
                          <label class="form-check-label" for="embolia_cerebral_seccion3">Embolia Cerebral</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="varices_seccion3">
                          <label class="form-check-label" for="varices_seccion3">Varices</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="estrabismo_seccion3">
                          <label class="form-check-label" for="estrabismo_seccion3">Estrabismo</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="glaucoma_seccion3">
                          <label class="form-check-label" for="glaucoma_seccion3">Glaucoma</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="hepatitis_seccion3">
                          <label class="form-check-label" for="hepatitis_seccion3">Hepatitis</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="presion_alta_seccion3">
                          <label class="form-check-label" for="presion_alta_seccion3">Presión Alta</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="diabetes_seccion3">
                          <label class="form-check-label" for="diabetes_seccion3">Diabetes</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flebitis_seccion3">
                          <label class="form-check-label" for="flebitis_seccion3">Flebitis</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="abstinencia_drogas_seccion3">
                          <label class="form-check-label" for="abstinencia_drogas_seccion3">Abstinencia a drogas</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="enfermedad_rinones_seccion3">
                          <label class="form-check-label" for="enfermedad_rinones_seccion3">Enfermedad de los riñones</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="moretones_seccion3">
                          <label class="form-check-label" for="moretones_seccion3">Tendencia a los moretones</label>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <label for="example-text-input">¿Padece alergia a algún material, cinta micropore, latex, etc?</label>
                        <input name="" id="fc_seccion3" type="text"  class="form-control viewClient" />
                      </div>

                      <div class="col-md-12">
                        <label for="example-text-input">¿En que fecha se hizo su último examen médico?</label>
                        <input type="date" name="" id="fecha_ultimo_examen_seccion3" type="text"  class="form-control viewClient" />
                      </div>

                      <div class="col-md-6">
                        <label for="example-text-input">¿En qué fecha se realizó las ultimas radiografías de torax?</label>
                        <input type="date" name="" id="fecha_ultima_radiografia_seccion3" type="text"  class="form-control viewClient" />
                      </div>

                      <div class="col-md-6">
                        <label for="example-text-input">¿En qué fecha se realizó las ultimas radiografías de torax?</label>
                        <input type="date" name="" id="fecha_ultimo_electrocardiograma_seccion3" type="text"  class="form-control viewClient" />
                      </div>

                      <div class="col-md-12">
                        <h3>Clase de anestesia que ha recibido</h3>
                        <select class="form-control disableBtn viewClient" id="clase_anestesia_seccion3">
                          <option></option>
                          <option value="Raquia">Raquia</option>
                          <option value="Local">Local</option>
                          <option value="General">General</option>
                          <option value="Bloqueo Epidural">Bloqueo Epidural</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="reacciones_anormales_anestesia_seccion3">
                          <label class="form-check-label" for="reacciones_anormales_anestesia_seccion3">Experimenta reacciones anormales</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="fiebre_operaciones_previas_seccion3">
                          <label class="form-check-label" for="fiebre_operaciones_previas_seccion3">Ha sufrido fiebre en operaciones previas</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="dientes_postizos_seccion3">
                          <label class="form-check-label" for="dientes_postizos_seccion3">Usa dientes postizos</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="faltan_dientes_seccion3">
                          <label class="form-check-label" for="faltan_dientes_seccion3">Le faltan algunos dientes</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="dientes_porcelana_seccion3">
                          <label class="form-check-label" for="dientes_porcelana_seccion3">Están tapados sus dientes con porcelana permanente</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="dientes_sueltos_seccion3">
                          <label class="form-check-label" for="dientes_sueltos_seccion3">Tiene dientes sueltos o rotos</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="dificulta_mover_boca_seccion3">
                          <label class="form-check-label" for="dificulta_mover_boca_seccion3">Se le dificulta mover la boca o abrirla</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="lentes_contacto_seccion3">
                          <label class="form-check-label" for="lentes_contacto_seccion3">Usa lentes de contacto</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="pestanas_seccion3">
                          <label class="form-check-label" for="pestanas_seccion3">Usa pestañas postizas que estén adheridas a sus parpados</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="ojo_artificial_seccion3">
                          <label class="form-check-label" for="ojo_artificial_seccion3">Usa un ojo artificial</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defectos_mayores_seccion3">
                          <label class="form-check-label" for="defectos_mayores_seccion3">Tiene defectos mayores o congénitos</label>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h3>Medicamentos que emplea usted actualmente</h3>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="aspirina_seccion3">
                          <label class="form-check-label" for="aspirina_seccion3">Aspirina</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="oxigeno_seccion3">
                          <label class="form-check-label" for="oxigeno_seccion3">Oxígeno</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="digitales_seccion3">
                          <label class="form-check-label" for="digitales_seccion3">Digitales (para la palpitación)</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="lsd_seccion3">
                          <label class="form-check-label" for="lsd_seccion3">LSD</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="quinidinas_seccion3">
                          <label class="form-check-label" for="quinidinas_seccion3">Quinidinas</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="gotas_glaucoma_seccion3">
                          <label class="form-check-label" for="gotas_glaucoma_seccion3">Gotas para galucoma</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="nitroglicerina_seccion3">
                          <label class="form-check-label" for="nitroglicerina_seccion3">Nitroglicerina</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="pastillas_dormir_seccion3">
                          <label class="form-check-label" for="pastillas_dormir_seccion3">Pastillas para dormir</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="medicamentos_presion_seccion3">
                          <label class="form-check-label" for="medicamentos_presion_seccion3">Medicamentos para presión</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="narcoticos_seccion3">
                          <label class="form-check-label" for="narcoticos_seccion3">Narcoticos</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="diureticos_seccion3">
                          <label class="form-check-label" for="diureticos_seccion3">Diureticos</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="lasix_seccion3">
                          <label class="form-check-label" for="lasix_seccion3">Lasix</label>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="anticoagulantes_seccion3">
                          <label class="form-check-label" for="anticoagulantes_seccion3">Anticoagulantes</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="heparina_seccion3">
                          <label class="form-check-label" for="heparina_seccion3">Heparina</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="medicamentos_diabetes_seccion3">
                          <label class="form-check-label" for="medicamentos_diabetes_seccion3">Medicamentos para diabetes</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="otro_medicamento_seccion3">
                          <label class="form-check-label" for="otro_medicamento_seccion3">Algún otro medicamento</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="tranquilizantes_seccion3">
                          <label class="form-check-label" for="tranquilizantes_seccion3">Tranquilizantes</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        
                          <label for="example-text-input">¿Cuál?</label>
                          <input name="" id="cual_otro_medicamento_seccion3" class="form-control viewClient" />
                        
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="antidepresivos_seccion3">
                          <label class="form-check-label" for="antidepresivos_seccion3">Antidepresivos</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        
                          <label for="example-text-input">Dosis?</label>
                          <input name="" id="dosis_seccion3" class="form-control viewClient" />
                      
                      </div>
                      
                      {{--<div class="col-md-12">
                        <h5>Interrogatorio por aparatos y sistemas</h5>
                      </div>
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="astenia_seccion3">
                          <label class="form-check-label" for="astenia_seccion3">Astenia</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="adinamia_seccion3">
                          <label class="form-check-label" for="adinamia_seccion3">Adinamia</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="hiporexia_seccion3">
                          <label class="form-check-label" for="hiporexia_seccion3">Hiporexia</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="perdida_peso_seccion3">
                          <label class="form-check-label" for="perdida_peso_seccion3">Perdida de peso</label>
                        </div>
                      </div>--}}
                      {{--<div class="col-md-12">
                        <h3>Interrogatorio por aparatos y sistemas</h3>
                        <h5>Respiratorio</h5>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="problema_respirar_seccion3">
                            <label class="form-check-label" for="problema_respirar_seccion3">Problemas al respirar</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="sonidos_respirar_seccion3">
                            <label class="form-check-label" for="sonidos_respirar_seccion3">Sonidos al respirar</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="respiracion_rapida_seccion3">
                            <label class="form-check-label" for="respiracion_rapida_seccion3">Respiracion rápida</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="secreciones_seccion3">
                            <label class="form-check-label" for="secreciones_seccion3">Secreciones</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="respiracion_lenta_seccion3">
                            <label class="form-check-label" for="respiracion_lenta_seccion3">Respiración lenta</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                        
                          <label class="form-label" for="color_esputo_seccion3">Color Esputo</label>
                        <input class="form-control viewClient" type="text" value="" id="color_esputo_seccion3">
                          
                      </div>
                      <div class="col-md-12">
                        <h5>Cardiovascular</h5>
                      </div>
                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="agita_seccion3">
                            <label class="form-check-label" for="agita_seccion3">Se agita?</label>
                          </div>
                          
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="cansancio_seccion3">
                            <label class="form-check-label" for="cansancio_seccion3">Cansancio?</label>
                          </div>
                          
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="cianosis_seccion3">
                            <label class="form-check-label" for="cianosis_seccion3">Cianosis?</label>
                          </div>
                          
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="fatiga_seccion3">
                            <label class="form-check-label" for="fatiga_seccion3">Fatiga al comer y al hacer ejercicio?</label>
                          </div>
                          
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="soplos_seccion3">
                            <label class="form-check-label" for="soplos_seccion3">Soplos cardíacos?</label>
                          </div>
                          
                      </div>

                      <div class="col-md-12">
                          <h3>Sistema digestivo</h3>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="diarrea_seccion3">
                            <label class="form-check-label" for="diarrea_seccion3">Diarrea</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="moco_seccion3">
                            <label class="form-check-label" for="moco_seccion3">Moco</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="sangre_seccion3">
                            <label class="form-check-label" for="sangre_seccion3">Sangre</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="estre_seccion3">
                            <label class="form-check-label" for="estre_seccion3">Estreñimineto</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="excreta_seccion3">
                            <label class="form-check-label" for="excreta_seccion3">Excreta normal</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="vomitos_seccion3">
                            <label class="form-check-label" for="vomitos_seccion3">Vómitos</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                        <h3>Genitourinario</h3>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                              
                            <input class="form-check-input viewClient" type="checkbox" value="" id="poliuria_seccion3">
                            <label class="form-check-label" for="poliuria_seccion3">Poliuria/Polaquiuria</label>
                            
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                              
                            <input class="form-check-input viewClient" type="checkbox" value="" id="disuria_seccion3">
                            <label class="form-check-label" for="disuria_seccion3">Disuria</label>

                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                              
                            <input class="form-check-input viewClient" type="checkbox" value="" id="sangre_genitourinario_seccion3">
                            <label class="form-check-label" for="sangre_genitourinario_seccion3">Sangre</label>
                            
                          </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input viewClient" type="checkbox" value="" id="tenesmo_seccion3">
                          <label class="form-check-label" for="tenesmo_seccion3">Tenesmo vesical</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        
                          <label class="form-label" for="olor_seccion3">Olor</label>
                        <input class="form-control viewClient" type="text" value="" id="olor_seccion3">
                        
                          
                      </div>

                      <div class="col-md-6">
                        
                          <label class="form-label" for="color_seccion3">Color</label>
                          <input class="form-control viewClient" type="text" value="" id="color_seccion3">
                            
                      </div>

                      <div class="col-md-6">
                    
                          <label class="form-label" for="frecuencia_orinar_seccion3">Frecuencia al orinar</label>  
                        <input class="form-control viewClient" type="text" value="" id="frecuencia_orinar_seccion3">
                          
                            
                      </div>

                      <div class="col-md-12">
                          <h3>Nervioso</h3>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="hiperactividad_seccion3">
                            <label class="form-check-label" for="hiperactividad_seccion3">Hiperactividad</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="perdida_fuerza_seccion3">
                            <label class="form-check-label" for="perdida_fuerza_seccion3">Perdida de fuerza</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="somnolencia_seccion3">Somnolencia (horas de sueño)</label>   
                        <input class="form-control viewClient" type="number" value="" id="somnolencia_seccion3">
                       
                          
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="cefaleas_seccion3">
                            <label class="form-check-label" for="cefaleas_seccion3">Cefaléas</label>
                          </div>    
                            
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="irritabilidad_seccion3">
                            <label class="form-check-label" for="irritabilidad_seccion3">Irritabilidad</label>
                          </div>    
                            
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="paresias_seccion3">
                            <label class="form-check-label" for="paresias_seccion3">Paresias</label>
                          </div>    
                            
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="falta_movimiento_seccion3">
                            <label class="form-check-label" for="falta_movimiento_seccion3">Falta de movimiento</label>
                          </div>    
                            
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="parestiasis_seccion3">
                            <label class="form-check-label" for="parestiasis_seccion3">Parestesiasis</label>
                          </div>    
                            
                      </div>

                      <div class="col-md-12">
                        <h3>Músculo esquelético</h3>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="movimientos_involuntarios_seccion3">
                            <label class="form-check-label" for="movimientos_involuntarios_seccion3">Movimientos involuntarios y voluntarios</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="artralgias_seccion3">
                            <label class="form-check-label" for="artralgias_seccion3">Artralgias</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input viewClient" type="checkbox" value="" id="contraccion_musculos_seccion3">
                            <label class="form-check-label" for="contraccion_musculos_seccion3">Contracción continua de músculos</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                        <h3>Piel y Faneras</h3>
                      </div>

                      <div class="col-md-6">
                          
                          <label class="form-label" for="erupciones_seccion3">Erupciones (ulceras, fistula, lesiones)</label>
                          <input class="form-control viewClient" type="text" value="" id="erupciones_seccion3">  
                      </div>

                      <div class="col-md-6">
                          
                          <label class="form-label" for="dematosis_seccion3">Dematosis</label>
                          <input class="form-control viewClient" type="text" value="" id="dematosis_seccion3">
                      </div>

                      <div class="col-md-6">
                          
                          <label class="form-label" for="glandulas_seccion3">Glándulas</label>
                          <input class="form-control viewClient" type="text" value="" id="glandulas_seccion3">
                      </div>

                      <div class="col-md-6">
                          
                          <label class="form-label" for="pelo_seccion3">Uñas y Pelo</label>
                          <input class="form-control viewClient" type="text" value="" id="pelo_seccion3">
                      </div>

                      <div class="col-md-6">
                          
                          <label class="form-label" for="dientes_seccion3">Dientes (color, formación, deformidades)</label>
                          <input class="form-control viewClient" type="text" value="" id="dientes_seccion3">
                      </div>

                      <div class="col-md-12">
                        <h3>Exámenes de Laboratorio</h3>
                      </div>

                      <div class="col-md-6">
                          <label class="form-label" for="gr_seccion3">GR</label>
                          <input class="form-control viewClient" type="text" value="" id="gr_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="hb_seccion3">HB</label>
                          <input class="form-control viewClient" type="text" value="" id="hb_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="hct_seccion3">HCT</label>
                          <input class="form-control viewClient" type="text" value="" id="hct_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="plag_seccion3">Plag</label>
                          <input class="form-control viewClient" type="text" value="" id="plag_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="cmhg_seccion3">C.M.H.G</label>
                          <input class="form-control viewClient" type="text" value="" id="cmhg_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="leu_seccion3">L.E.U</label>
                          <input class="form-control viewClient" type="text" value="" id="leu_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="lin_seccion3">L.I.N</label>
                          <input class="form-control viewClient" type="text" value="" id="lin_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="mono_seccion3">Mono</label>
                          <input class="form-control viewClient" type="text" value="" id="mono_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="eos_seccion3">Eos</label>
                          <input class="form-control viewClient" type="text" value="" id="eos_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="bas_seccion3">BAS</label>
                          <input class="form-control viewClient" type="text" value="" id="bas_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="segmentados_seccion3">Segmentados</label>
                          <input class="form-control viewClient" type="text" value="" id="segmentados_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="enbanda_seccion3">En banda</label>
                          <input class="form-control viewClient" type="text" value="" id="enbanda_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="qs_glucosa_seccion3">QS: Glucosa</label>
                          <input class="form-control viewClient" type="text" value="" id="qs_glucosa_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="urea_seccion3">Urea</label>
                          <input class="form-control viewClient" type="text" value="" id="urea_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="creatinina_seccion3">Creatinina</label>
                          <input class="form-control viewClient" type="text" value="" id="creatinina_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="col_seccion3">Col</label>
                          <input class="form-control viewClient" type="text" value="" id="col_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="tag_seccion3">TAG</label>
                          <input class="form-control viewClient" type="text" value="" id="tag_seccion3">
                      </div>

                      <div class="col-md-12">
                        <label class="form-label" for="tag_seccion3">QS</label>
                        <input class="form-control viewClient" type="text" value="" id="qs_seccion3">
                      </div>

                      <div class="col-md-12">
                        <label class="form-label" for="tag_seccion3">EGO</label>
                        <input class="form-control viewClient" type="text" value="" id="ego_seccion3">
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="tag_seccion3">TP</label>
                        <input class="form-control viewClient" type="text" value="" id="tp_seccion3">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="tag_seccion3">TPT</label>
                        <input class="form-control viewClient" type="text" value="" id="tpt_seccion3">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="tag_seccion3">HIV</label>
                        <input class="form-control viewClient" type="text" value="" id="hiv_seccion3">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="tag_seccion3">otros</label>
                        <input class="form-control viewClient" type="text" value="" id="otros_seccion3">
                      </div>

                    </div>--}}

                    {{--<button style="margin-top: 10px;" class="btn btn-GrisOscuro float-right" id="seccion3Continuar">Continuar</button>--}}
                    <button class="btn btn-GrisOscuro" id="adicionalContinuar" onclick="guardarCliente();">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                  </div>
                </div>
              </div>
            </div>
          </div>


          {{--<div class="tab-pane fade" id="seccion4" role="tabpanel">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header Aqua">Sección 4</div>
                    <div class="card-body">
                      
                    <div class="row">
                      <div class="col-md-12">
                        <h3>Exploración Física</h3>
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="ta_seccion4">T/A</label>
                          <input class="form-control viewClient" type="text" value="" id="ta_seccion4">
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="fc_seccion4">F.C</label>
                          <input class="form-control viewClient" type="text" value="" id="fc_seccion4">
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="fr_seccion4">F.R</label>
                          <input class="form-control viewClient" type="text" value="" id="fr_seccion4">
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="temp_seccion4">Temp</label>
                          <input class="form-control viewClient" type="text" value="" id="temp_seccion4">
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="peso_seccion4">Peso</label>
                          <input class="form-control viewClient" type="text" value="" id="peso_seccion4">
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="estatura_seccion4">Estatura</label>
                          <input class="form-control viewClient" type="text" value="" id="estatura_seccion4">
                      </div>
                      <div class="col-md-12">
                        <h3>Habitus Exterior</h3>
                      </div>

                      <div class="col-md-12">
                        <label for="">Cabeza</label>
                        <textarea id="cabeza_seccion4" rows="5" class="form-control viewClient"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Cuello</label>
                        <textarea id="cuello_seccion4" rows="5" class="form-control viewClient"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Torax</label>
                        <textarea id="torax_seccion4" rows="5" class="form-control viewClient"></textarea>
                      </div>
                      
                      <div class="col-md-12">
                        <label for="">Abdomen</label>
                        <textarea id="abdomen_seccion4" rows="5" class="form-control viewClient"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Extremidades</label>
                        <textarea id="extremidades_seccion4" rows="5" class="form-control viewClient"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Genitales</label>
                        <textarea id="genitales_seccion4" rows="5" class="form-control viewClient"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Diagnóstico</label>
                        <textarea id="diagnostico_seccion4" rows="5" class="form-control viewClient"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Tratamiento</label>
                        <textarea id="tratamiento_seccion4" rows="5" class="form-control viewClient"></textarea>
                      </div>

                    </div>
                      
  
                      
  
                      
  
                    </div>
                  </div>
                </div>
              </div>
                <button class="btn btn-GrisOscuro" id="adicionalContinuar" onclick="guardarCliente();">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>--}}


        </div>
      </div>
    <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save for later</button>
      </div>-->
    </div>
  </div>
</div>
