<!-- Large modal -->
<div id="modalCliente" class="modal fade bd-example-modal-lg modal-open" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

  <style>
    #custom-table .little-form{
      padding: 0 !important;
      width: 42px !important;
    }
  </style>

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
            <a class="nav-link" data-toggle="tab" href="#seccion10" role="tab">Hoja de enfermería</a>
          <li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#seccion9" role="tab">Hoja de registros de enfermería</a>
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

  <div class="tab-pane fade" id="seccion9" role="tabpanel">
    <div class="form-row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header Aqua">Seguimiento Quirurgico</div>
          <div class="card-body">
            
            <div class="row">
                
              <input style="display: none;" id="id_seccion9"/>

              <div class="col-md-4">
                
                <label for="example-text-input">FDN</label>
                <input class="form-control viewClient" id="fdn_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Edad</label>
                <input class="form-control viewClient" id="edad_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Habitacion</label>
                <input class="form-control viewClient" id="habitacion_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Medico tratante</label>
                <input class="form-control viewClient" id="medico_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Signos Vitales</label>
                <input class="form-control viewClient" id="signos_vitales_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">TA</label>
                <input class="form-control viewClient" id="ta_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">FC</label>
                <input class="form-control viewClient" id="fc_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">FR</label>
                <input class="form-control viewClient" id="fr_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">TC</label>
                <input class="form-control viewClient" id="tc_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">FC</label>
                <input class="form-control viewClient" id="fc_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Peso</label>
                <input class="form-control viewClient" id="peso_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Talla</label>
                <input class="form-control viewClient" id="talla_seccion9"/>
                
              </div>
              <div class="col-md-12">
                
                <label for="example-text-input">Diagnostico</label>
                <textarea class="form-control viewClient" rows="5" id="diagnostico_preoperatorio_seccion9"></textarea>
                
              </div>
              <div class="col-md-12">
                
                <label for="example-text-input">Cirugía proyectada</label>
                <textarea class="form-control viewClient" rows="5" id="cirugia_proyectada_seccion9"></textarea>
                
              </div>
              <div class="col-md-6">
                
                <label for="example-text-input">Tipo de cirugía</label>
                <select class="form-control" id="tipo_cirugia_seccion9">
                  <option value="Urgente">Urgente</option>
                  <option value="Programada">Programada</option>
                </select>
                
              </div>
              <div class="col-md-6">
                
                <label for="example-text-input">Estado Actual del paciente</label>
                <select class="form-control" id="estado_actual_paciente_seccion9">
                  <option value="Estable">Estable</option>
                  <option value="Delicado">Delicado</option>
                  <option value="Grave">Grave</option>
                </select>
                
              </div>

              <div class="col-md-6">
                
                <label for="example-text-input">Vendaje de MPI</label>
                <select class="form-control" id="vendaje_mpi_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>
              <div class="col-md-6">
                
                <label for="example-text-input">Alergias</label>
                <select class="form-control" id="alergia_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>

              <div class="col-md-6">
                
                <label for="example-text-input">Tricotomia</label>
                <select class="form-control" id="tricotomia_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>
              <div class="col-md-6">
                
                <label for="example-text-input">Patologias relevantes</label>
                <select class="form-control" id="patologias_relevantes_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>

              <div class="col-md-6">
                
                <label for="example-text-input">Protesis</label>
                <select class="form-control" id="protesis_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>
              <div class="col-md-6">
                
                <label for="example-text-input">Estudios pre-operatorios</label>
                <select class="form-control" id="estudios_preoperatorios_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>

              <div class="col-md-6">
                
                <label for="example-text-input">Maquillaje o esmalte</label>
                <select class="form-control" id="maquillaje_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>
              <div class="col-md-6">
                
                <label for="example-text-input">Valoración pre-operatoria</label>
                <select class="form-control" id="valoracion_preoperatoria_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>

              <div class="col-md-6">
                
                <label for="example-text-input">Marcado quirurgico</label>
                <select class="form-control" id="marcado_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>
              <div class="col-md-6">
                
                <label for="example-text-input">Sangre en reserva</label>
                <select class="form-control" id="sangre_reserva_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>

              <div class="col-md-6">
                
                <label for="example-text-input">Ayuno</label>
                <select class="form-control" id="ayuno_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>
              <div class="col-md-6">
                
                <label for="example-text-input">Grupo y RH sanguíneo</label>
                <select class="form-control" id="grupo_rh_sanguineo_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                  <option value="N/A">No Aplica</option>
                </select>
                
              </div>

              <div class="col-md-12">
                
                  <label for="example-text-input">Observaciones:</label>
                  <textarea class="form-control viewClient" rows="5" id="observaciones_seccion9"></textarea>
                  
                </div>

              <div class="col-md-6">
                
                <label for="example-text-input">Enfermera (o):</label>
                <input class="form-control viewClient" id="enfermera_seccion9"/>
                
              </div>

              <div class="col-md-6">
                
                <label for="example-text-input">Turno:</label>
                <input class="form-control viewClient" id="turno_seccion9"/>
                
              </div>

              <div class="col-md-4">
                
                <label for="example-text-input">Sala quirúrgica:</label>
                <input class="form-control viewClient" id="sala_quirurgica_seccion9"/>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Se llevó a cabo "Time-Out"</label>
                <select class="form-control" id="time_out_seccion9">
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                </select>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Razón:</label>
                <textarea class="form-control viewClient" id="razon_seccion9"></textarea>
                
              </div>

              <div class="col-md-12">
                
                <label for="example-text-input">Cirugía realizada:</label>
                <textarea class="form-control viewClient" id="cirugia_realizada_seccion9"></textarea>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Cirujano:</label>
                <textarea class="form-control viewClient" id="cirujano_seccion9"></textarea>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Anestesiologo:</label>
                <textarea class="form-control viewClient" id="anestesiologo_seccion9"></textarea>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">instrumentista:</label>
                <textarea class="form-control viewClient" id="instrumentista_seccion9"></textarea>
                
              </div>

              <div class="col-md-4">
                
                <label for="example-text-input">1er ayudante:</label>
                <input class="form-control viewClient" id="primer_ayudante_seccion9">
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">2do ayudante:</label>
                <input class="form-control viewClient" id="segundo_ayudante_seccion9"></textarea>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Circulante:</label>
                <input class="form-control viewClient" id="circulante_seccion9"></textarea>
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Inicio de anestesia:</label>
                <input class="form-control viewClient" id="inicio_anestesia_seccion9" />
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Tipo de anestesia:</label>
                <input class="form-control viewClient" id="tipo_anestesia_seccion9" />
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Inicio de CX:</label>
                <input class="form-control viewClient" id="inicio_cx_seccion9" />
                
              </div>
              <div class="col-md-4">
                
                <label for="example-text-input">Termino de CX:</label>
                <input class="form-control viewClient" id="termino_cx_seccion9" />
                
              </div>

              <div class="col-md-4">
                
                <label for="example-text-input">Termino de Anestesia:</label>
                <input class="form-control viewClient" id="termino_anestesia_seccion9" />
                
              </div>

              <div class="col-md-4">
                
                <label for="example-text-input">Egreso de sala:</label>
                <input class="form-control viewClient" id="egreso_sala_seccion9" />
                
              </div>

              <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Medicamentos</th>
                      <th scope="col">Dosis</th>
                      <th scope="col">Via</th>
                      <th scope="col">Hora</th>
                      <th scope="col">Liquidos</th>
                      <th scope="col">Vol</th>
                      <th scope="col">Via</th>
                      <th scope="col">Hora</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_1_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_dosis_1_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_via_1_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_hora_1_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_1_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_volumen_1_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_via_1_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_hora_1_seccion9" />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_2_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_dosis_2_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_via_2_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_hora_2_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_2_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_volumen_2_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_via_2_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_hora_2_seccion9" />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_3_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_dosis_3_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_via_3_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_hora_3_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_3_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_volumen_3_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_via_3_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_hora_3_seccion9" />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_4_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_dosis_4_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_via_4_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_hora_4_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_4_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_volumen_4_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_via_4_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_hora_4_seccion9" />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_5_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_dosis_5_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_via_5_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_hora_5_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_5_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_volumen_5_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_via_5_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_hora_5_seccion9" />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_6_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_dosis_6_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_via_6_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="medicamentos_hora_6_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_6_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_volumen_6_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_via_6_seccion9" />
                      </td>
                      <td>
                        <input class="form-control viewClient" id="liquidos_hora_6_seccion9" />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-md-6">
                <p class="text-center">Egresos</p>
                <div class="row">
                    <div class="col-md-6">
                      <label for="example-text-input">Uresis</label>
                      <textarea class="form-control viewClient" rows="5" id="uresis_seccion9"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="example-text-input">Sangrado</label>
                      <textarea class="form-control viewClient" rows="5" id="sangrado_seccion9"></textarea>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                  <p class="text-center">Cuenta Textil</p>
                  <table class="table">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Antes</th>
                          <th scope="col">Despues</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>Gasas</td>
                            <td>
                              <input class="form-control viewClient" id="gasas_antes_seccion9"/>
                            </td>
                            <td>
                                <input class="form-control viewClient" id="gasas_despues_seccion9"/>
                            </td>
                          </tr>
                          <tr>
                            <td>Compresas</td>
                            <td>
                              <input class="form-control viewClient" id="compresas_antes_seccion9"/>
                            </td>
                            <td>
                                <input class="form-control viewClient" id="compresas_despues_seccion9"/>
                            </td>
                          </tr>
                          <tr>
                            <td>Cotonoides</td>
                            <td>
                              <input class="form-control viewClient" id="cotonoides_antes_seccion9"/>
                            </td>
                            <td>
                                <input class="form-control viewClient" id="cotonoides_despues_seccion9"/>
                            </td>
                          </tr>
                          <tr>
                            <td>Isopos</td>
                            <td>
                              <input class="form-control viewClient" id="isopos_antes_seccion9"/>
                            </td>
                            <td>
                                <input class="form-control viewClient" id="isopos_despues_seccion9"/>
                            </td>
                          </tr>
                          <tr>
                            <td>Torundas</td>
                            <td>
                              <input class="form-control viewClient" id="torundas_antes_seccion9"/>
                            </td>
                            <td>
                                <input class="form-control viewClient" id="torundas_despues_seccion9"/>
                            </td>
                          </tr>
                          <tr>
                            <td>Otros</td>
                            <td>
                              <input class="form-control viewClient" id="otros_antes_seccion9"/>
                            </td>
                            <td>
                                <input class="form-control viewClient" id="otros_despues_seccion9"/>
                            </td>
                          </tr>
                          <tr>
                            <td>Otros</td>
                            <td>
                              <input class="form-control viewClient" id="otros_2_antes_seccion9"/>
                            </td>
                            <td>
                                <input class="form-control viewClient" id="otros_2_despues_seccion9"/>
                            </td>
                          </tr>
                      </tbody>
                  </table>
                  <label for="example-text-input">Cuenta Completa</label>
                    <select class="form-control form-control-sm disableBtn viewClient" id="cuenta_completa_seccion9">
                      <option value="si">Sí</option>
                      <option value="no">No</option>
                    </select>
                  <label for="example-text-input">Hora</label>
                  <input type="text" class="form-control" id="hora_seccion9">
                  
              </div>
              <div class="col-md-12">
                  <label for="example-text-input">Nota quirurgica</label>
                  <textarea class="form-control" rows="5" id="nota_quirurgica_seccion9"></textarea>
              </div>
              <div class="col-md-12">
                  <label for="example-text-input">Fecha y hora de ingresos a cuidados post - operatorios</label>
                  <input class="form-control viewClient" id="fecha_hora_cuidados_post_operatorios_seccion9" />
              </div>

              <div class="col-md-12">
                <p class="text-center">Monitorizacion del paciente</p>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Ingreso</th>
                      <th scope="col">15 Minutos</th>
                      <th scope="col">30 Minutos</th>
                      <th scope="col">45 Minutos</th>
                      <th scope="col">60 Minutos</th>
                      <th scope="col">> 60 Minutos</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>TA (mmHg)</td>
                      <td>
                        <input type="text" class="form-control" id="ta_ingreso_seccion9">
                      </td>
                      <td>
                          <input type="text" class="form-control" id="ta_15min_seccion9">
                      </td>
                      <td>
                          <input type="text" class="form-control" id="ta_30min_seccion9">
                      </td>
                      <td>
                          <input type="text" class="form-control" id="ta_45min_seccion9">
                      </td>
                      <td>
                          <input type="text" class="form-control" id="ta_60min_seccion9">
                      </td>
                      <td>
                          <input type="text" class="form-control" id="ta_60minmas_seccion9">
                      </td>
                    </tr>
                    <tr>
                      <td>FC (Ipm)</td>
                      <td>
                        <input type="text" class="form-control" id="fc_ingreso_seccion9">
                      </td>
                      <td>
                          <input type="text" class="form-control" id="fc_15min_seccion9">
                      </td>
                      <td>
                          <input type="text" class="form-control" id="fc_30min_seccion9">
                      </td>
                      <td>
                          <input type="text" class="form-control" id="fc_45min_seccion9">
                      </td>
                      <td>
                          <input type="text" class="form-control" id="fc_60min_seccion9">
                      </td>
                      <td>
                          <input type="text" class="form-control" id="fc_60minmas_seccion9">
                      </td>
                    </tr>
                    <tr>
                        <td>FR (rpm)</td>
                        <td>
                          <input type="text" class="form-control" id="fr_ingreso_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="fr_15min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="fr_30min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="fr_45min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="fr_60min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="fr_60minmas_seccion9">
                        </td>
                      </tr>
                      <tr>
                        <td>TC (°c)</td>
                        <td>
                          <input type="text" class="form-control" id="tc_ingreso_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="tc_15min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="tc_30min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="tc_45min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="tc_60min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="tc_60minmas_seccion9">
                        </td>
                      </tr>
                      <tr>
                        <td>SaO2 (%)</td>
                        <td>
                          <input type="text" class="form-control" id="sa02_ingreso_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="sa02_15min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="sa02_30min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="sa02_45min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="sa02_60min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="sa02_60minmas_seccion9">
                        </td>
                      </tr>
                      <tr>
                        <td>EVA (0-10)</td>
                        <td>
                          <input type="text" class="form-control" id="eva_ingreso_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="eva_15min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="eva_30min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="eva_45min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="eva_60min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="eva_60minmas_seccion9">
                        </td>
                      </tr>
                      <tr>
                        <td>ALDRETE (0-10)</td>
                        <td>
                          <input type="text" class="form-control" id="aldrete_ingreso_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="aldrete_15min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="aldrete_30min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="aldrete_45min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="aldrete_60min_seccion9">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="aldrete_60minmas_seccion9">
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-md-12">
                <label for="">Nota de recuperación</label>
                <textarea class="form-control" rows="5" id="nota_recuperacion_seccion9"></textarea>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="tab-pane fade" id="seccion10" role="tabpanel">
  <div class="form-row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header Aqua">Hoja de enfermería</div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <label for="example-text-input">Medico:</label>
                    <input name="" id="medico_seccion10"  class="form-control viewClient" />
                  </div>
                  <div class="col-md-8">
                    <label for="example-text-input">Diagnostico:</label>
                    <input name="" id="diagnostico_seccion10"  class="form-control viewClient" />
                    <input type="text" style="display: none;" id="id_seccion10">
                  </div>
                  <div class="col-md-4">
                    <label for="example-text-input">Dias de hospitalizacion:</label>
                    <input name="" id="dias_hospitalizacion_seccion10"  class="form-control viewClient" />
                  </div>
                  <div class="col-md-4">
                    <label for="example-text-input">Fecha:</label>
                    <input name="" id="fecha_seccion10"  class="form-control viewClient" />
                  </div>
                  <div class="col-md-4">
                    <label for="example-text-input">Cama:</label>
                    <input name="" id="cama_seccion10"  class="form-control viewClient" />
                  </div>
                  <div class="col-md-4">
                    <label for="example-text-input">Peso:</label>
                    <input name="" id="peso_seccion10"  class="form-control viewClient" />
                  </div>
                  <div class="col-md-4">
                    <label for="example-text-input">Talla:</label>
                    <input name="" id="talla_seccion10"  class="form-control viewClient" />
                  </div>
                  <div class="col-md-12">
                    <label for="example-text-input">Alergias:</label>
                    <input name="" id="alergia_seccion10"  class="form-control viewClient" />
                  </div>
                  <div class="col-md-12" id="custom-table">
                      <div class="table-responsive">
                          <table class="table">
                              <thead>
                                <tr>
                                  <th>FC</th>
                                  <th>TC</th>
                                  <th>7</th>
                                  <th>8</th>
                                  <th>9</th>
                                  <th>10</th>
                                  <th>11</th>
                                  <th>12</th>
                                  <th>13</th>
                                  <th>14</th>
                                  <th>15</th>
                                  <th>16</th>
                                  <th>17</th>
                                  <th>18</th>
                                  <th>19</th>
                                  <th>20</th>
                                  <th>21</th>
                                  <th>22</th>
                                  <th>23</th>
                                  <th>24</th>
                                  <th>1</th>
                                  <th>2</th>
                                  <th>4</th>
                                  <th>5</th>
                                  <th>6</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>170</td>
                                  <td>41 °C</td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_1_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_1_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>160</td>
                                  <td></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_2_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_2_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>150</td>
                                  <td>40 °C</td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_3_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_3_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>140</td>
                                  <td></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_4_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_4_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>130</td>
                                  <td>39 °C</td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_5_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_5_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>120</td>
                                  <td></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_6_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_6_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>110</td>
                                  <td>38 °C</td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_7_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_7_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>100</td>
                                  <td></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_8_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_8_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>90</td>
                                  <td>37 °C</td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_9_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_9_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>80</td>
                                  <td></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_10_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_10_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>70</td>
                                  <td>36 °C</td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_11_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_11_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>60</td>
                                  <td></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_12_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_12_seccion10"></td>
                                </tr>
                                <tr>
                                  <td>50</td>
                                  <td>35 °C</td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_7_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_8_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_9_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_10_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_11_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_12_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_13_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_14_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_15_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_16_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_17_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_18_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_19_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_20_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_21_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_22_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_23_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_24_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_1_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_2_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_3_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_4_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_5_13_seccion10"></td>
                                  <td><input type="text" class="form-control viewClient little-form" id="tabla_6_13_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">T. Arterial</td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_1_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_2_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_3_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_4_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_5_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_6_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_7_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_8_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_9_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_10_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_11_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="t_arterial_12_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">F. Resp</td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_1_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_2_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_3_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_4_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_5_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_6_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_7_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_8_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_9_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_10_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_11_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="f_resp_12_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Perimetro</td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_1_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_2_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_3_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_4_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_5_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_6_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_7_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_8_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_9_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_10_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_11_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="perimetro_12_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Formula</td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_1_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_2_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_3_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_4_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_5_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_6_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_7_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_8_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_9_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_10_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_11_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="formula_12_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Dieta</td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="dieta_1_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="dieta_2_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="dieta_3_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Lib. Orales</td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_1_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_2_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_3_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_4_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_5_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_6_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_7_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_8_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_9_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_10_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_11_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lib_orales_12_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Total</td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="total_1_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="total_2_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="total_3_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Liquidos Parentales</td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="liquidos_parentales_1_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="liquidos_parentales_2_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="liquidos_parentales_3_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Electrolitos y/o hemoderivados</td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="electrolitos_1_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="electrolitos_2_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="electrolitos_3_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Total</td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="total_electrolitos_1_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="total_electrolitos_2_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="total_electrolitos_3_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Uresis</td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="uresis_1_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="uresis_2_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="uresis_3_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Evacuaciones</td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="evacuaciones_1_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="evacuaciones_2_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="evacuaciones_3_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Vomito, succión y drenajes</td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="vomito_1_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="vomito_2_seccion10"></td>
                                  <td colspan="8"><input type="text" class="form-control viewClient" id="vomito_3_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Laboratorio y productos biológicos</td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_1_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_2_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_3_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_4_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_5_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_6_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_7_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_8_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_9_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_10_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_11_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="lab_12_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Reactivos</td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_1_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_2_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_3_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_4_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_5_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_6_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_7_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_8_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_9_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_10_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_11_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="reactivos_12_seccion10"></td>
                                </tr>
                                <tr>
                                  <td colspan="2">Otros estudios</td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_1_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_2_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_3_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_4_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_5_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_6_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_7_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_8_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_9_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_10_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_11_seccion10"></td>
                                  <td colspan="2"><input type="text" class="form-control viewClient" id="otros_estudios_12_seccion10"></td>
                                </tr>
                              </tbody>
                          </table>
                          
                      </div>
                  </div>
                  <div class="col-md-6">
                    <p class="text-center"><b>Cateter corto periférico</b></p>
                    <div class="col-md-12">
                      <label for="example-text-input">Dolor</label>
                      <select class="form-control viewClient" id="cateter_corto_dolor_seccion10">
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label for="example-text-input">Calor</label>
                      <select class="form-control viewClient" id="cateter_corto_calor_seccion10">
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label for="example-text-input">Rubor</label>
                      <select class="form-control viewClient" id="cateter_corto_rubor_seccion10">
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label for="example-text-input">Recanaliza</label>
                      <select class="form-control viewClient" id="cateter_corto_recanaliza_seccion10">
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label for="example-text-input">Cateter No.</label>
                      <select class="form-control viewClient" id="cateter_corto_numero_seccion10">
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <p class="text-center"><b>CATETER CENTRAL Y/O IMPLANTABLE (PORTHCAT)</b></p>
                    <div class="col-md-12">
                      <label for="example-text-input">Dolor</label>
                      <select class="form-control viewClient" id="cateter_central_dolor_seccion10">
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label for="example-text-input">Calor</label>
                      <select class="form-control viewClient" id="cateter_central_central_seccion10">
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label for="example-text-input">Rubor</label>
                      <select class="form-control viewClient" id="cateter_central_rubor_seccion10">
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label for="example-text-input">Recanaliza</label>
                      <select class="form-control viewClient" id="cateter_central_recanaliza_seccion10">
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <textarea rows="5" class="form-control viewClient" id="dieta_seccion10"></textarea>
                  </div>
                  <div class="col-md-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Fecha</th>
                          <th scope="col">Medicamentos</th>
                          <th scope="col">Dosis</th>
                          <th scope="col">Via</th>
                          <th scope="col">Horarios</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="text" class="form-control viewClient" id="fecha_1_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="medicamentos_1_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="dosis_1_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="via_1_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="horarios_1_seccion10"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control viewClient" id="fecha_2_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="medicamentos_2_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="dosis_2_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="via_2_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="horarios_2_seccion10"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control viewClient" id="fecha_3_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="medicamentos_3_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="dosis_3_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="via_3_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="horarios_3_seccion10"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control viewClient" id="fecha_4_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="medicamentos_4_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="dosis_4_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="via_4_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="horarios_4_seccion10"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control viewClient" id="fecha_5_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="medicamentos_5_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="dosis_5_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="via_5_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="horarios_5_seccion10"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control viewClient" id="fecha_6_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="medicamentos_6_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="dosis_6_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="via_6_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="horarios_6_seccion10"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control viewClient" id="fecha_7_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="medicamentos_7_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="dosis_7_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="via_7_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="horarios_7_seccion10"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control viewClient" id="fecha_8_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="medicamentos_8_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="dosis_8_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="via_8_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="horarios_8_seccion10"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control viewClient" id="fecha_9_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="medicamentos_9_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="dosis_9_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="via_9_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="horarios_9_seccion10"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control viewClient" id="fecha_10_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="medicamentos_10_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="dosis_10_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="via_10_seccion10"></td>
                          <td><input type="text" class="form-control viewClient" id="horarios_10_seccion10"></td>
                        </tr>
                      </tbody>
                    </table>
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
