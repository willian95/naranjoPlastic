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
            <a class="nav-link active" data-toggle="tab" href="#seccion1" role="tab">Ficha Clínica</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion2" role="tab">Historia Clínica</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion3" role="tab">Valoración Pre-Anestesica</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion4" role="tab">Nota Post Operatoria</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion5" role="tab">Indicaciones Post Quirurgicas</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion6" role="tab">Nota Médica</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion7" role="tab">Nota de Egreso</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion8" role="tab">Seguimiento quirurgico</a>
          <li>
        </ul>

        <div class="tab-content mt-2">
          <div class="tab-pane fade show active" id="seccion1" role="tabpanel">
            <div class="form-row">

          <div class="col-md-12">
          <div class="card">
            <div class="card-header Aqua">Ficha Clínica</div>
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
                    {{--<input class="form-control form-control-sm disableBtn viewClient" type="date" id="fechaNacimiento">--}}
                    <input type='text' class="datepicker viewClient" id="fechaNacimiento"/>
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
                  <div class="card-header Aqua">Historia Clínica</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                          <h3>Ficha de Identificación</h3>
                      </div>
                      
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
                        <input type="text" id="ahfSeccion2" class="form-control">
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">APNP</label>
                        <textarea class="form-control viewClient" id="apnpSeccion2" rows="5"></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">APP</label>
                        <textarea class="form-control viewClient" id="appSeccion2" rows="5">Diabetes Mellitus Gestacional de 1 mes de diagnóstico, niega alergias, cirugías niega Qx, niega Transfusiones, niega traumatismos, niega infectocontagiosos.</textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">AGO</label>
                        <textarea class="form-control viewClient" id="agoSeccion2" rows="5">Menarca 13 años, Ciclos menstruales regulares 30 x 4, IVSA 17 años, Compañeros sexuales 2, Gesta 5, Para 3, P1 con peso de 4200gr en 2003, P2 con peso de 2500gr en 2009, P3 4600gr en 2010. Aborto 1, Cesárea 0. Método de planificación familiar: Hormonal oral. FUM 8 agosto 2015, FPP: 15 de mayo 2015.</textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">Padecimiento actual:</label>
                        <textarea name="" id="padecimiento_seccion2" rows="5" class="form-control viewClient">Paciente femenino de 41 años de edad, cursando su cuarto embarazo de 32 SDG, enviada de la consulta de Ginecología y obstétrica por ser portadora de DMG</textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">Exploración Física:</label>
                        <textarea name="" id="exploracionFisicaSeccion2" rows="5" class="form-control viewClient">TA: 100/60 mmHg, FC 84 1pm, FR: 20 rpm. Talla: 1.49 mts, Peso: 53 kgs.
                          Consciente, alerta, orientada en 3 esferas. Adecuada coloración de piel y tegumentos, mucosas normohidratadas. Cuello cilíndrico, con presencia de acantosis nigricans leve, sin adenomegalias. Área pulmonar con murmullo vesicular presente, sin sibilancias ni estertores. Ruidos Cardiacos rítmicos de buen tono e intensidad, sin otros fenómenos agregados. Abdomen globoso a expensas de útero gestante, sin dolor a la palpación. Extremidades integras, no edema, reflejos osteotendinosos normales.</textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">Laboratorio:</label>
                        <textarea name="" id="laboratorioSeccion2" rows="5" class="form-control viewClient">02-03-16
                          glucosa 93mgs. Tamiz glucosa a los 60min. 216 mgs/dl
                          Ego: proteínas negativo, leucos 7-8x c., celulas epiteliales +++, hifas ++.
                          17-03-16
                          Glucosa 81mgs. Glucosa posprandial a los 120min. 132 mgs.</textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">Idx:</label>
                        <textarea name="" id="idxSeccion2" rows="5" class="form-control viewClient">Femenino de 41 años de edad. Multigesta, con dos procutos macrosomicos en embarazos anteriores, no atendida en este lugar, sin dx. De Diabetes en ese momento. Ahora lo encontramos positiva con TAMIZ y se inició tratamiento con dieta y metformina 1x2. Embarazo de 32 SDG</textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="example-text-input">Plan:</label>
                        <textarea name="" id="planSeccion2" rows="5" class="form-control viewClient">    • Dieta para Diabético de 1800 kcal con tres colaciones
                          • Laboratorio glucosa ayuno y posprandial, Hb glucosilada, ego. Hormonas tiroideas.
                          • Aumtomonitoreo capilar de acuerdo a metas terapéuticas ideales.
                          • Medicamentos: 
                      Laboratorio: Glucosa en ayuno, Glucosa posprandial 60 min, Hemoglobina Glucosilada, EGO. BHC.
                      Cita en 2 semanas
                      Cita abierta a urgencias, se dan datos de alarma.
                      Pronostico: Reservado para el binomio</textarea>
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
                            <input class="form-check-input" type="checkbox" value="" id="abstenido_bebidas_alcoholicas_seccion3">
                            <label class="form-check-label" for="abstenido_bebidas_alcoholicas_seccion3">Se ha abstenido de tomar bebidas alcohólicas</label>
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
                        <!--<input type="date" name="" id="" class="form-control viewClient" />-->
                        <input type='text' class="datepicker viewClient" id="menstruacion_seccion3"/>
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
                        <input name="" id="padece_alergia_material_seccion3" type="text"  class="form-control viewClient" />
                      </div>

                      <div class="col-md-12">
                        <label for="example-text-input">¿En que fecha se hizo su último examen médico?</label>
                        <input type="text" name="" id="fecha_ultimo_examen_seccion3" type="text"  class="form-control viewClient datepicker" />
                      </div>

                      <div class="col-md-6">
                        <label for="example-text-input">¿En qué fecha se realizó las ultimas radiografías de torax?</label>
                        <input type="text" name="" id="fecha_ultima_radiografia_seccion3" type="text"  class="form-control viewClient datepicker" />
                      </div>

                      <div class="col-md-6">
                        <label for="example-text-input">¿En qué fecha se realizó el último electrocardiograma?</label>
                        <input type="text" name="" id="fecha_ultimo_electrocardiograma_seccion3" type="text"  class="form-control viewClient datepicker" />
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
                      
                      

                    {{--<button style="margin-top: 10px;" class="btn btn-GrisOscuro float-right" id="seccion3Continuar">Continuar</button>--}}
                    {{--<button class="btn btn-GrisOscuro" id="adicionalContinuar" onclick="guardarCliente();">Guardar</button>--}}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                  </div>
                </div>
              </div>
            </div>
          </div>

          
      </div>
      <div class="tab-pane fade" id="seccion4" role="tabpanel">
          <div class="form-row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header Aqua">Nota Post Operatoria</div>
                <div class="card-body">
                  
                  <div class="row">
                    
                    <div class="col-md-12">
                      
                        <label for="example-text-input">Habitación</label>
                        <input name="" id="habitacion_seccion4" class="form-control viewClient" />
                        <input type="text" style="display: none;" id="notapostoperatoria_id">
                      
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Diagnóstico</label>
                        <textarea class="form-control viewClient" rows="5"  id="diagnostico_pre_operatorio_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Operación planeada</label>
                        <textarea class="form-control viewClient" rows="5" id="operacion_planeada_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Diagnostico post operatoria</label>
                        <textarea rows="5" class="form-control viewClient" id="diagnostico_post_operatorio_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Operación realizada</label>
                        <textarea class="form-control viewClient" rows="5" id="operacion_realizada_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Descripción técnica quirurgica</label>
                        <textarea class="form-control viewClient" rows="5" id="descripcion_tecnica_quirurgica_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Hallazgos transoperatorios</label>
                        <textarea class="form-control viewClient" rows="5" id="hallazgos_transoperatorios_seccion4"></textarea>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="example-text-input">Reporte gasas y compresas</label>
                        <textarea class="form-control viewClient" rows="5" id="reporte_gasas_compresas_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Incidentes y accidentes</label>
                        <textarea class="form-control viewClient" rows="5" id="incidentes_accidentes_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Sangrado</label>
                        <textarea class="form-control viewClient" rows="5" id="sangrado_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Estudios, servicios auxiliares</label>
                        <textarea class="form-control viewClient" rows="5" id="estudios_servicios_auxiliares_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Nombre anestesiologo</label>
                        <input class="form-control viewClient" type="text" class="form-control" id="nombre_anestesiologo_seccion4">
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Nombre ayudante1</label>
                        <input class="form-control viewClient" type="text" class="form-control" id="nombre_ayudante1_seccion4">
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Nombre ayudante2</label>
                        <input class="form-control viewClient" type="text" class="form-control" id="nombre_ayudante2_seccion4">
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Nombre instrumentista</label>
                        <input type="text" class="form-control viewClient" id="nombre_instrumentista_seccion4">
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Nombre enfermera circulante</label>
                        <input type="text" class="form-control viewClient" id="nombre_enfermera_circulante_seccion4">
                    </div>
                  
                    <div class="col-md-12">
                        <label for="example-text-input">Estado postquirurgico</label>
                        <textarea class="form-control viewClient" rows="5" id="estado_postquirurgico_inmediato_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="example-text-input">Pronóstico</label>
                        <textarea class="form-control viewClient" rows="5" id="pronostico_seccion4"></textarea>
                    </div>

                    <div class="col-md-12">
                      <label for="example-text-input">Envío de piezas biopsias quirurgicas para examen macroscopico e histopatológico</label>
                      <textarea class="form-control viewClient" rows="5" id="envio_piezas_seccion4"></textarea>
                  </div>

                  <div class="col-md-12">
                    <label for="example-text-input">Otros hallazgos</label>
                    <textarea class="form-control viewClient" rows="5" id="otros_hallazgos_seccion4"></textarea>
                  </div>

                  <div class="col-md-12">
                    <label for="example-text-input">Nombre del cirujano</label>
                    <input class="form-control viewClient" type="text" class="form-control" id="nombre_cirujano_seccion4">
                  </div>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                </div>
              </div>
            </div>
          </div>
        </div>


    </div>
    <div class="tab-pane fade" id="seccion5" role="tabpanel">
        <div class="form-row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header Aqua">Indicaciones PostQuirurgicas</div>
              <div class="card-body">
                
                <div class="row">
                  
                  <div class="col-md-12">
                    
                    <label for="example-text-input">Indicaciones</label>
                    <textarea id="indicaciones_seccion5" class="form-control viewClient" rows="8"></textarea>
                    <input type="text" style="display:none;" id="indicaciones_id">
                    
                  </div>


                  <!--<button class="btn btn-GrisOscuro" id="adicionalContinuar" onclick="guardarCliente();">Guardar</button>-->
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="seccion6" role="tabpanel">
      <div class="form-row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header Aqua">Nota Médica</div>
            <div class="card-body">
              
              <div class="row">
                
                <div class="col-md-12">
                  
                  <label for="example-text-input">Nota</label>
                  <textarea id="nota_medica_seccion6" class="form-control viewClient" rows="8"></textarea>
                  <input type="text" style="display:none;" id="nota_medica_id_seccion6">
                  
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="tab-pane fade" id="seccion7" role="tabpanel">
      <div class="form-row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header Aqua">Nota de egreso</div>
            <div class="card-body">
              
              <div class="row">
                
                <div class="col-md-12">
                    <label for="fechaIngreso">Fecha de ingreso</label>
                    <input type='text' class="datepicker viewClient form-control" id="fechaIngreso_seccion7"/>
                </div>

                <div class="col-md-12">
                    <label for="fechaEgreso">Fecha de egreso</label>
                    <input type='text' class="datepicker viewClient form-control" id="fechaEgreso_seccion7"/>
                </div>

                <div class="col-md-12">
                  <label for="">Motivo de egreso</label>
                  <textarea class="form-control viewClient" rows="5" id="motivoEgreso_seccion7"></textarea>
                </div>

                <div class="col-md-12">
                  <label for="">Diagnosticos finales</label>
                  <textarea class="form-control viewClient" rows="5" id="diagnosticoFinal_seccion7"></textarea>
                </div>

                <div class="col-md-12">
                  <label for="">Resumen clínico</label>
                  <textarea class="form-control viewClient" rows="5" id="resumenClinico_seccion7"></textarea>
                </div>
              
                <div class="col-md-12">
                  <label for="">Problemas clínicos pendientes</label>
                  <textarea class="form-control viewClient" rows="5" id="problemasClinicos_seccion7"></textarea>
                </div>

                <div class="col-md-12">
                  <label for="">Plan</label>
                  <textarea class="form-control viewClient" rows="5" id="plan_seccion7"></textarea>
                </div>

                <div class="col-md-12">
                  <label for="">Recomendaciones para vigilancia ambulatoria</label>
                  <textarea class="form-control viewClient" rows="5" id="recomendacionesVigilancia_seccion7"></textarea>
                </div>

                <input type="text" style="display:none;" id="notaEgreso_id_seccion7">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade" id="seccion8" role="tabpanel">
      <div class="form-row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header Aqua">Seguimiento Quirurgico</div>
            <div class="card-body">
              
              <div class="row">
                
                <div class="col-md-12">
                  
                  <label for="example-text-input">Resumen de seguimiento y fecha</label>
                  <textarea id="resumen_seccion8" class="form-control viewClient" rows="8"></textarea>
                  <input type="text" style="display:none;" id="resumen_id_seccion8">
                  
                </div>

                <button class="btn btn-GrisOscuro" id="adicionalContinuar" onclick="guardarCliente();">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

            </div>
          </div>
        </div>
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
