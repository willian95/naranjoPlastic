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
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion4" role="tab">Sección 4</a>
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
                  <label for="example-text-input">Nombres / first & Middle Name *</label>
                  <input class="form-control form-control-sm disableBtn" type="text" placeholder="Nombre" id="nombreCliente">
                  <label for="example-text-input" >Apellidos / Last Name *</label>
                  <input class="form-control form-control-sm disableBtn" type="text" placeholder="Apellido" id="apellido1Cliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Fecha de Nacimiento / Date of Birth *</label>
                    <input class="form-control form-control-sm disableBtn" type="date" id="fechaNacimiento">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" >Lugar de Nacimiento / Hometown</label>
                  <input class="form-control form-control-sm disableBtn" type="text" placeholder="Lugar de nacimiento" id="lugarNacimiento">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" >Edad / Age</label>
                  <input class="form-control form-control-sm disableBtn" type="number" placeholder="Edad" id="edad">
                </div>
                 
                <div class="col-md-6">
                  <label for="example-text-input">Teléfono celular / Cellphone number</label>
                  <input class="form-control form-control-sm disableBtn" type="number" placeholder="(664)000-0000" id="celCliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Teléfono de casa / Home phone number</label>
                  <input class="form-control form-control-sm disableBtn" type="number" placeholder="(664)000-0000" id="telCliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Teléfono de oficina / workplace number</label>
                  <input class="form-control form-control-sm disableBtn" type="number" placeholder="(664)000-0000" id="telOficCliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Religión / Religion</label>
                  <input class="form-control form-control-sm disableBtn" type="text" placeholder="Religión" id="religion">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Escolaridad / Educational Stage</label>
                    <select class="form-control form-control-sm disableBtn" id="escolaridad">
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
                  <label for="example-text-input" >Email *</label>
                  <input class="form-control form-control-sm disableBtn" type="email" placeholder="Ejemplo@ejemplo.com" id="emailCliente">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Sexo / Sex *</label>
                    <select class="form-control form-control-sm disableBtn" id="sexo">
                      <option></option>
                      <option value="1">Masculino</option>
                      <option value="2">Femenino</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input form-control-sm">Estado Civil / Marital Status*</label>
                    <select class="form-control disableBtn" id="edoCivil">
                      <option></option>
                      <option value="1">Soltero (a)</option>
                      <option value="2">Casado (a)</option>
                      <option value="3">Viudo (a)</option>
                      <option value="4">Divorciado (a)</option>
                    </select>
                </div>
               
                <div class="col-md-6">
                  <label for="example-text-input">País / Country *</label>
                  <select id="pais" class="form-control" onchange="obtenerEstados()">
                    
                    <option value="0" selected>Seleccione un país</option>
                    @foreach(\DB::table('paises')->get() as $pais)
                      <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
                    @endforeach

                  </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Estado / State *</label>
                    <select class="form-control form-control-sm disableBtn" id="estados">
                    
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Calle y No. / Street</label>
                  <input type="text" id="calle" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Ciudad / City</label>
                  <input type="text" id="ciudad" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">Código Postal / ZIP Code</label>
                  <input type="text" id="codigo-postal" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">¿Cómo se enteró de nosotros? / How did you know about us?</label>
                  <input type="text" id="entero-nosotros" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">¿Cirugías plásticas previas? / Previous Plastic Surgeries</label>
                  <input type="text" id="cirugias-previas" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="example-text-input">¿Otras cirugías? / Other Surgeries</label>
                  <input type="text" id="otras-cirugias" class="form-control">
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header Aqua">Ocupación / Occupation</div>
              <div class="card-body">
                <div class="row">
                <div class="col-md-4">
                  <label for="example-text-input">Puesto</label>
                  <input class="form-control form-control-sm disableBtn" type="text" id="puestoCliente">
                </div>
                <div class="col-md-4">
                  <label for="example-text-input" >Compañia</label>
                  <input class="form-control form-control-sm disableBtn" type="text" id="companiaCliente">
                </div>
                <div class="col-md-4">
                  <label for="example-text-input" >Teléfono</label>
                  <input class="form-control form-control-sm disableBtn" type="tel" id="telCompania">
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
                      <input class="form-control form-control-sm disableBtn" type="text" id="nombreEmergencia">
                    </div>
                    <div class="col-md-4">
                      <label for="example-text-input">Relación</label>
                      <input class="form-control form-control-sm disableBtn" type="text" id="relacionEmergencia">
                    </div>
                    <div class="col-md-4">
                      <label for="example-text-input">Teléfono</label>
                      <input class="form-control form-control-sm disableBtn" type="tel" id="telEmegencia">
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
                      <div class="col-md-6">
                        <label for="example-text-input">Nombre</label>
                        <input type="text" id="nombre_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input">Lugar nacimiento</label>
                        <input type="text" id="lugar_nacimiento_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input">Edad</label>
                        <input type="text" id="edad_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input">Teléfono</label>
                        <input type="text" id="telefono_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input">Fecha de elaboración de la historia</label>
                        <input type="date" id="fecha_historia_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="example-text-input">Fecha de Nacimiento</label>
                          <input class="form-control form-control-sm disableBtn" type="date" id="fecha_nacimiento_seccion2">
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-12">
                          <h3>Antecedentes Heredo Familiares</h3>
                      </div>
                      <div class="col-md-6">
                          <label for="example-text-input">Padre: </label>
                          <input type="text" id="padre_seccion2" class="form-control">

                          <label for="example-text-input">Enfermedades y cuales: </label>
                          <input type="text" id="enfermedades_padre_seccion2" class="form-control">

                          <label for="example-text-input">alergias: </label>
                          <input type="text" id="alergias_padre_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label for="example-text-input">Madre: </label>
                          <input type="text" id="madre_seccion2" class="form-control">

                          <label for="example-text-input">Enfermedades y cuales: </label>
                          <input type="text" id="enfermedades_madre_seccion2" class="form-control">

                          <label for="example-text-input">alergias: </label>
                          <input type="text" id="alergias_madre_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <h5>Abuelos Paternos</h5>
                          <label for="example-text-input">Enfermedades y Cuales: </label>
                          <input type="text" id="abuelos_paternos_enfermedades_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <h5>Abuelos Maternos</h5>
                          <label for="example-text-input">Enfermedades y Cuales: </label>
                          <input type="text" id="abuelos_maternos_enfermedades_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <h5>Hermanos</h5>
                          <label for="example-text-input">Cuantos Hermanos: </label>
                          <input type="number" id="hermanos_cuantos_seccion2" class="form-control">
                          <label for="example-text-input">Enfermedades y Cuales: </label>
                          <input type="text" id="hermanos_enfermedades_seccion2" class="form-control">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                          <h3>Antecedentes Personales Patológicos</h3>
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Enfermedades congénitas: </label>
                          <input type="text" id="enfermedades_congenitas_seccion2" class="form-control">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Enfermedades propias de infancia y cuales: </label>
                          <input type="text" id="enfermedades_infancia_seccion2" class="form-control">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Enfermedades crónico-degenerativas</label>
                          <input type="text" id="enfermedades_cronico_degenerativas_seccion2" class="form-control">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Internamientos o intervenciones quirúrgicas</label>
                          <input type="text" id="internamientos_quirurgicos_seccion2" class="form-control">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Transfusiones</label>
                          <input type="text" id="transfusiones_seccion2" class="form-control">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Traumáticas</label>
                          <input type="text" id="traumaticas_seccion2" class="form-control">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Alergía a medicamentos y/o alimentos</label>
                          <input type="text" id="alergias_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="tabaquismo">
                            <label class="form-check-label" for="tabaquismo">Tabaquismo</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="alcoholismo">
                            <label class="form-check-label" for="alcoholismo">Alcoholismo</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="drogas">
                            <label class="form-check-label" for="drogas">Drogas</label>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                          <h3>Antecedentes Personales No Patológicos</h3>
                          <h5>Casa:</h5>
                      </div>
                      <div class="col-md-6">
                          
                          <label for="example-text-input">Número de habitaciones:</label>
                          <input type="number" id="numero_habitaciones_seccion2" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label for="example-text-input">Cuántas personas:</label>
                          <input type="number" id="cuantas_personas_seccion2" class="form-control">
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Material:</label>
                          <input type="text" id="material_seccion2" class="form-control">
                      </div>
                      <div class="col-md-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="ventilacion">
                          <label class="form-check-label" for="ventilacion">Ventilación adecuada</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                          <label for="example-text-input">Cuenta con los servicios:</label>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="agua_seccion2">
                            <label class="form-check-label" for="agua_seccion2">Agua</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="gas_seccion2">
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
                            <input class="form-check-input" type="checkbox" value="" id="drenaje_seccion2">
                            <label class="form-check-label" for="drenaje_seccion2">Drenaje</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="mascotas_seccion2">
                            <label class="form-check-label" for="mascotas_seccion2">Mascotas</label>
                          </div>
                      </div>
                      <div class="col-md-12">
          
                            <label for="example-text-input">Cuáles mascotas:</label>
                            <input type="text" id="cuales_mascotas_seccion2" class="form-control">
                      
                      </div>
                      <div class="col-md-12">
                      
                            <label for="example-text-input">Disposición de basura:</label>
                            <input type="text" id="disposicion_basura_seccion2" class="form-control">
                       
                      </div>
                      <div class="col-md-12">
                         
                            <label for="example-text-input">Alimentación:</label>
                            <input type="text" id="alimentacion_seccion2" class="form-control">
                      
                      </div>
                      <div class="col-md-12">
           
                            <label for="example-text-input">Organizaciones:</label>
                            <input type="text" id="organizaciones_seccion2" class="form-control">
                        
                      </div>
                      <div class="col-md-12">
                          
                            <label for="example-text-input">Higiene:</label>
                            <input type="text" id="higiene_seccion2" class="form-control">
                        
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <h3>Antecedentes Gineco-Obstetricos</h3>
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Gestas:</label>
                        <input type="number" id="gestas_seccion2" class="form-control">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Partos:</label>
                        <input type="number" id="partos_seccion2" class="form-control">
                    
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Cesáreas:</label>
                        <input type="number" id="cesareas_seccion2" class="form-control">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Abortos:</label>
                        <input type="number" id="abortos_seccion2" class="form-control">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Fur:</label>
                        <input type="number" id="fur_seccion2" class="form-control">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">IVSA:</label>
                        <input type="number" id="ivsa_seccion2" class="form-control">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">PF:</label>
                        <input type="number" id="pf_seccion2" class="form-control">
                     
                      </div>
                      <div class="col-md-6">
                      
                        <label for="example-text-input">Expediente número:</label>
                        <input type="text" id="expediente_numero_seccion2" class="form-control">
                     
                      </div>

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
                  <div class="card-header Aqua">Sección 3</div>
                  <div class="card-body">
                    
                    <div class="row">
                      <div class="col-md-12">
                        <label for="example-text-input">Padecimiento actual:</label>
                        <textarea name="" id="padecimiento_seccion3" rows="5" class="form-control"></textarea>
                      </div>
                      <div class="col-md-12">
                        <h5>Sintomas Generales</h5>
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
                      </div>
                      <div class="col-md-12">
                        <h3>Interrogatorio por aparatos y sistemas</h3>
                        <h5>Respiratorio</h5>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="problema_respirar_seccion3">
                            <label class="form-check-label" for="problema_respirar_seccion3">Problemas al respirar</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sonidos_respirar_seccion3">
                            <label class="form-check-label" for="sonidos_respirar_seccion3">Sonidos al respirar</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="respiracion_rapida_seccion3">
                            <label class="form-check-label" for="respiracion_rapida_seccion3">Respiracion rápida</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="secreciones_seccion3">
                            <label class="form-check-label" for="secreciones_seccion3">Secreciones</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="respiracion_lenta_seccion3">
                            <label class="form-check-label" for="respiracion_lenta_seccion3">Respiración lenta</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                        
                          <label class="form-label" for="color_esputo_seccion3">Color Esputo</label>
                        <input class="form-control" type="text" value="" id="color_esputo_seccion3">
                          
                      </div>
                      <div class="col-md-12">
                        <h5>Cardiovascular</h5>
                      </div>
                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="agita_seccion3">
                            <label class="form-check-label" for="agita_seccion3">Se agita?</label>
                          </div>
                          
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cansancio_seccion3">
                            <label class="form-check-label" for="cansancio_seccion3">Cansancio?</label>
                          </div>
                          
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cianosis_seccion3">
                            <label class="form-check-label" for="cianosis_seccion3">Cianosis?</label>
                          </div>
                          
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="fatiga_seccion3">
                            <label class="form-check-label" for="fatiga_seccion3">Fatiga al comer y al hacer ejercicio?</label>
                          </div>
                          
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="soplos_seccion3">
                            <label class="form-check-label" for="soplos_seccion3">Soplos cardíacos?</label>
                          </div>
                          
                      </div>

                      <div class="col-md-12">
                          <h3>Sistema digestivo</h3>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="diarrea_seccion3">
                            <label class="form-check-label" for="diarrea_seccion3">Diarrea</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="moco_seccion3">
                            <label class="form-check-label" for="moco_seccion3">Moco</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sangre_seccion3">
                            <label class="form-check-label" for="sangre_seccion3">Sangre</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="estre_seccion3">
                            <label class="form-check-label" for="estre_seccion3">Estreñimineto</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="excreta_seccion3">
                            <label class="form-check-label" for="excreta_seccion3">Excreta normal</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="vomitos_seccion3">
                            <label class="form-check-label" for="vomitos_seccion3">Vómitos</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                        <h3>Genitourinario</h3>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                              
                            <input class="form-check-input" type="checkbox" value="" id="poliuria_seccion3">
                            <label class="form-check-label" for="poliuria_seccion3">Poliuria/Polaquiuria</label>
                            
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                              
                            <input class="form-check-input" type="checkbox" value="" id="disuria_seccion3">
                            <label class="form-check-label" for="disuria_seccion3">Disuria</label>

                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                              
                            <input class="form-check-input" type="checkbox" value="" id="sangre_genitourinario_seccion3">
                            <label class="form-check-label" for="sangre_genitourinario_seccion3">Sangre</label>
                            
                          </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="tenesmo_seccion3">
                          <label class="form-check-label" for="tenesmo_seccion3">Tenesmo vesical</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        
                          <label class="form-check-label" for="olor_seccion3">Olor</label>
                        <input class="form-control" type="text" value="" id="olor_seccion3">
                        
                          
                      </div>

                      <div class="col-md-6">
                        
                          <label class="form-check-label" for="color_seccion3">Color</label>
                          <input class="form-control" type="text" value="" id="color_seccion3">
                            
                      </div>

                      <div class="col-md-6">
                    
                          <label class="form-check-label" for="frecuencia_orinar_seccion3">Frecuencia al orinar</label>  
                        <input class="form-control" type="text" value="" id="frecuencia_orinar_seccion3">
                          
                            
                      </div>

                      <div class="col-md-12">
                          <h3>Nervioso</h3>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="hiperactividad_seccion3">
                            <label class="form-check-label" for="hiperactividad_seccion3">Hiperactividad</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="perdida_fuerza_seccion3">
                            <label class="form-check-label" for="perdida_fuerza_seccion3">Perdida de fuerza</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label" for="somnolencia_seccion3">Somnolencia (horas de sueño)</label>   
                        <input class="form-control" type="number" value="" id="somnolencia_seccion3">
                       
                          
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cefaleas_seccion3">
                            <label class="form-check-label" for="cefaleas_seccion3">Cefaléas</label>
                          </div>    
                            
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="irritabilidad_seccion3">
                            <label class="form-check-label" for="irritabilidad_seccion3">Irritabilidad</label>
                          </div>    
                            
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="paresias_seccion3">
                            <label class="form-check-label" for="paresias_seccion3">Paresias</label>
                          </div>    
                            
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="falta_movimiento_seccion3">
                            <label class="form-check-label" for="falta_movimiento_seccion3">Falta de movimiento</label>
                          </div>    
                            
                      </div>

                      <div class="col-md-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="parestiasis_seccion3">
                            <label class="form-check-label" for="parestiasis_seccion3">Parestesiasis</label>
                          </div>    
                            
                      </div>

                      <div class="col-md-12">
                        <h3>Músculo esquelético</h3>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="movimientos_involuntarios_seccion3">
                            <label class="form-check-label" for="movimientos_involuntarios_seccion3">Movimientos involuntarios y voluntarios</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="artralgias_seccion3">
                            <label class="form-check-label" for="artralgias_seccion3">Artralgias</label>
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="contraccion_musculos_seccion3">
                            <label class="form-check-label" for="contraccion_musculos_seccion3">Contracción continua de músculos</label>
                          </div>
                      </div>

                      <div class="col-md-12">
                        <h3>Piel y Faneras</h3>
                      </div>

                      <div class="col-md-6">
                          
                          <label class="form-label" for="erupciones_seccion3">Erupciones (ulceras, fistula, lesiones)</label>
                          <input class="form-control" type="text" value="" id="erupciones_seccion3">  
                      </div>

                      <div class="col-md-6">
                          
                          <label class="form-label" for="dematosis_seccion3">Dematosis</label>
                          <input class="form-control" type="text" value="" id="dematosis_seccion3">
                      </div>

                      <div class="col-md-6">
                          
                          <label class="form-label" for="glandulas_seccion3">Glándulas</label>
                          <input class="form-control" type="text" value="" id="glandulas_seccion3">
                      </div>

                      <div class="col-md-6">
                          
                          <label class="form-label" for="pelo_seccion3">Uñas y Pelo</label>
                          <input class="form-control" type="text" value="" id="pelo_seccion3">
                      </div>

                      <div class="col-md-6">
                          
                          <label class="form-label" for="dientes_seccion3">Dientes (color, formación, deformidades)</label>
                          <input class="form-control" type="text" value="" id="dientes_seccion3">
                      </div>

                      <div class="col-md-12">
                        <h3>Exámenes de Laboratorio</h3>
                      </div>

                      <div class="col-md-6">
                          <label class="form-label" for="gr_seccion3">GR</label>
                          <input class="form-control" type="text" value="" id="gr_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="hb_seccion3">HB</label>
                          <input class="form-control" type="text" value="" id="hb_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="hct_seccion3">HCT</label>
                          <input class="form-control" type="text" value="" id="hct_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="plag_seccion3">Plag</label>
                          <input class="form-control" type="text" value="" id="plag_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="cmhg_seccion3">C.M.H.G</label>
                          <input class="form-control" type="text" value="" id="cmhg_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="leu_seccion3">L.E.U</label>
                          <input class="form-control" type="text" value="" id="leu_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="lin_seccion3">L.I.N</label>
                          <input class="form-control" type="text" value="" id="lin_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="mono_seccion3">Mono</label>
                          <input class="form-control" type="text" value="" id="mono_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="eos_seccion3">Eos</label>
                          <input class="form-control" type="text" value="" id="eos_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="bas_seccion3">BAS</label>
                          <input class="form-control" type="text" value="" id="bas_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="segmentados_seccion3">Segmentados</label>
                          <input class="form-control" type="text" value="" id="segmentados_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="enbanda_seccion3">En banda</label>
                          <input class="form-control" type="text" value="" id="enbanda_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="qs_glucosa_seccion3">QS: Glucosa</label>
                          <input class="form-control" type="text" value="" id="qs_glucosa_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="urea_seccion3">Urea</label>
                          <input class="form-control" type="text" value="" id="urea_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="creatinina_seccion3">Creatinina</label>
                          <input class="form-control" type="text" value="" id="creatinina_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="col_seccion3">Col</label>
                          <input class="form-control" type="text" value="" id="col_seccion3">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="tag_seccion3">TAG</label>
                          <input class="form-control" type="text" value="" id="tag_seccion3">
                      </div>

                      

                    </div>

                    <button class="btn btn-GrisOscuro float-right" id="seccion3Continuar">Continuar</button>

                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="tab-pane fade" id="seccion4" role="tabpanel">
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
                          <input class="form-control" type="text" value="" id="ta_seccion4">
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="fc_seccion4">F.C</label>
                          <input class="form-control" type="text" value="" id="fc_seccion4">
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="fr_seccion4">F.R</label>
                          <input class="form-control" type="text" value="" id="fr_seccion4">
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="temp_seccion4">Temp</label>
                          <input class="form-control" type="text" value="" id="temp_seccion4">
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="peso_seccion4">Peso</label>
                          <input class="form-control" type="text" value="" id="peso_seccion4">
                      </div>
                      <div class="col-md-4">
                          <label class="form-label" for="estatura_seccion4">Estatura</label>
                          <input class="form-control" type="text" value="" id="estatura_seccion4">
                      </div>
                      <div class="col-md-12">
                        <h3>Habitus Exterior</h3>
                      </div>

                      <div class="col-md-12">
                        <label for="">Cabeza</label>
                        <textarea id="cabeza_seccion4" rows="5" class="form-control"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Cuello</label>
                        <textarea id="cuello_seccion4" rows="5" class="form-control"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Torax</label>
                        <textarea id="torax_seccion4" rows="5" class="form-control"></textarea>
                      </div>
                      
                      <div class="col-md-12">
                        <label for="">Abdomen</label>
                        <textarea id="abdomen_seccion4" rows="5" class="form-control"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Extremidades</label>
                        <textarea id="extremidades_seccion4" rows="5" class="form-control"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Genitales</label>
                        <textarea id="genitales_seccion4" rows="5" class="form-control"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Diagnóstico</label>
                        <textarea id="diagnostico_seccion4" rows="5" class="form-control"></textarea>
                      </div>

                      <div class="col-md-12">
                        <label for="">Tratamiento</label>
                        <textarea id="tratamiento_seccion4" rows="5" class="form-control"></textarea>
                      </div>

                    </div>
                      
  
                      
  
                      
  
                    </div>
                  </div>
                </div>
              </div>
                <button class="btn btn-GrisOscuro" id="adicionalContinuar" onclick="guardarCliente();">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>


        </div>
      </div>
    <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save for later</button>
      </div>-->
    </div>
  </div>
</div>
