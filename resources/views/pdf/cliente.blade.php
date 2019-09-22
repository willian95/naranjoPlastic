<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <title>Document</title>
</head>
<body>


    

    <table class="table">
        <tbody>
            <tr>
                <td colspan="4">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="8">
                    <p style="text-align: right;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                    <p style="text-align: right;">Edificio Plaza Medical</p>
                    <p style="text-align: right;">José Clemente Orozco #2468-306</p>
                    <p style="text-align: right;">Zona Rio Tijuana, B.C. 22320</p>
                    <p style="text-align: right;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                        
                    <p style="text-align: right;">Número de Registro:</p>
                    <p style="text-align: right;">Fecha de Registro:</p>
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    <h1 class="text-center">Información General</h1>
                </td>
            </tr>
            <tr>
                <th colspan="6">Nombre/first name</th>
                <th colspan="6">Segundo Nombre / Middle Name</th>
            </tr>
            <tr>
                <td colspan="6">{{ $clientes->name }}</td>
                <td colspan="6">{{ $clientes->segundoNombre }}</td>
            </tr>
            <tr>
                <th colspan="12">Apellido/Last Name</th>
            </tr>
            <tr>
                <td colspan="12">{{ $clientes->lastname }}</td>
            </tr>
            <tr>
                <th colspan="3">Fecha de Nacimiento</th>
                <th colspan="3">Lugar de Nacimiento</th>
                <th colspan="3">Edad</th>
                <th colspan="3">Sexo</th>
            </tr>
            <tr>
                <td colspan="3">{{ $clientes->fechaNacimiento }}</td>
                <td colspan="3">{{ $clientes->lugarNacimiento }}</td>
                <td colspan="3">{{ $clientes->edad }}</td>
                <td colspan="3">
                    @if($clientes->sexo == 1)
                        Masculino
                    @elseif($clientes->sexo == 2)
                        Femenino
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="4">Estado Marital</th>
                <th colspan="4">Tipo de Sangre</th>
                <th colspan="4">Religion</th>
            </tr>
            <tr>
                <td colspan="4">
                    @if($clientes->edoCivil == 1)
                        Soltero
                    @elseif($clientes->edoCivil == 2)
                        Casado
                    @elseif($clientes->edoCivil == 3)
                        Viudo
                    @elseif($clientes->edoCivil == 4)
                        Divorciado
                    @endif
                </td>
                <td colspan="4">
                    {{ $clientes->tipoSangre }}
                </td>
                <td colspan="4">
                    {{ $clientes->religion }}
                </td>
            </tr>
            <tr>
                <th colspan="6">Escolaridad</th>
                <th colspan="6">Ocupación</th>
            </tr>
            <tr>
                <td colspan="6">
                    @if($clientes->escolaridad == 1)
                        Sin estudios
                    @elseif($clientes->escolaridad == 2)
                        Primaria
                    @elseif($clientes->escolaridad == 3)
                        Secundaria
                    @elseif($clientes->escolaridad == 4)
                        Técnica
                    @elseif($clientes->escolaridad == 5)
                        Universitaria
                    @elseif($clientes->escolaridad == 6)
                        Maestría
                    @elseif($clientes->escolaridad == 7)
                        Post-Grado
                    @endif</td>
                <td colspan="6">
                    {{ $clientes->ocupacionSeccion2 }}
                </td>
            </tr>
            <tr>
                <th colspan="6">Calle y No. / Street</th>
                <th colspan="6">C.P. / ZIP CODE</th>
            </tr>
            <tr>
                <td colspan="6">{{ $clientes->calle }}</td>
                <td colspan="6">{{ $clientes->codigoPostal }}</td>
            </tr>
            <tr>
                <th colspan="4">Ciudad / City</th>
                <th colspan="4">Estado / Estate</th>
                <th colspan="4">País / Country</th>
            </tr>
            <tr>
                <td colspan="4">{{ $clientes->ciudad }}</td>
                <td colspan="4">{{ App\Estados::where('id', $clientes->estado)->value('nombre') }}</td>
                <td colspan="4">
                    {{ App\Pais::where('id', $clientes->pais)->value('nombre') }}
                </td>
            </tr>
            <tr>
                <th colspan="6">Telefono de casa</th>
                <th colspan="6">Teléfono Celular</th>
            </tr>
            <tr>
                
                <td colspan="6">
                    {{ $clientes->telCasa }}
                </td>
                <td colspan="6">
                    {{ $clientes->celCliente }}
                </td>
            </tr>
            <tr>
                <th colspan="6">Telefono de oficina</th>
                <th colspan="6">Pase Médico</th>
            </tr>
            <tr>
                <td colspan="6">{{ $clientes->telOficina }}</td>
                <td colspan="6">
                    {{ $clientes->paseMedico }}
                </td>
            </tr>
            <tr>
                <th colspan="12">Email</th>
            </tr>
            <tr>
                <td colspan="12">{{ $clientes->email }}</td>
            </tr>
            <tr>
                <th colspan="12">¿Cómo se enteró de Nosotros?</th> 
            </tr>
            <tr>
                <td colspan="12">{{ $clientes->enteroNosotros }}</td>
            </tr>

            <tr>
                <th colspan="12">Especifique</th>
            </tr>
            <tr>
                <td colspan="12">{{ $clientes->especifiqueEnteroNosotros }}</td>
            </tr>

            <tr>
                <th colspan="12">Aseguradora</th>
            </tr>
            <tr>
                <td colspan="12">{{ $clientes->aseguradora }}</td>
            </tr>

            <tr>
                <th colspan="6">Cirugías Plásticas Previas</th>
                <th colspan="6">Otras Cirugias</th>
            </tr>
            <tr>
                <td colspan="6">{{ $clientes->cirugiasPrevias }}</td>
                <td colspan="6">{{ $clientes->otrasCirugias }}</td>
            </tr>

            <tr>
                <th colspan="12">Diagnóstico Pre-Operatorio</th>
            </tr>
            <tr>
                <td colspan="12">{{ $clientes->diagnosticoPreOperatorio }}</td>

            </tr>

            <tr>
                <th colspan="12">Procedimiento Quirurgico</th>
            </tr>
            <tr>
                <td colspan="12">{{ $clientes->procedimientoQuirurgico }}</td>

            </tr>

            <tr>
                <th colspan="12">Plan Quirurgico</th>
            </tr>
            <tr>
                <td colspan="12">{{ $clientes->planQuirurgico }}</td>

            </tr>

            <tr>
                <th colspan="12">Cuidados y Plan Terapeutico Pre-Quirurgico</th>
            </tr>
            <tr>
                <td colspan="12">{{ $clientes->cuidadoTerapeutico }}</td>

            </tr>

            <tr>
                <td colspan="12">
                    <h1 class="text-center">Historia Clínina</h1>
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    Nombre:
                </td>
                <td colspan="6">
                    Teléfono:
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    {{ $clientes->name }}
                </td>
                <td colspan="6">
                    {{ $clientes->telCasa }}
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    Edad:
                </td>
                <td colspan="6">
                    Estado Civil:
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    {{ $clientes->edad }}
                </td>
                <td colspan="6">
                    {{ $clientes->edoCivil }}
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    Ocupación:
                </td>
                <td colspan="6">
                    Religión:
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    {{ $clientes->ocupacionSeccion2 }}
                </td>
                <td colspan="6">
                    {{ $clientes->religion }}
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    Originaria:
                </td>
                <td colspan="6">
                    Reside:
                </td>
            </tr>

            <tr>
                <td colspan="6">
                    {{ $clientes->originariaSecion2 }}
                </td>
                <td colspan="6">
                    {{ $clientes->resideSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    AHF:
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->ahfSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    APNP:
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->apnpSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    APP:
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->appSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    AGO:
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->agoSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    Padecimiento Actual:
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->padecimientoSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    Exploración física
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->exploracionFisicaSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    Laboratorio
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->laboratorioSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    Idx
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->idxSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    Plan
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->planSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h1>Valoración Pre-Anestesica</h1>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    Nombre: 
                </td>
                <td colspan="4">
                    Edad: 
                </td>
                <td colspan="4">
                    Sexo: 
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    {{ $clientes->name }}
                </td>
                <td colspan="4">
                    {{ $clientes->edad }} 
                </td>
                <td colspan="4">
                    {{ $clientes->sexo }}
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    Peso: 
                </td>
                <td colspan="4">
                    Talla: 
                </td>
                <td colspan="4">
                    T/A: 
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    {{ $clientes->peso_seccion3 }}
                </td>
                <td colspan="4">
                    {{ $clientes->talla_seccion3 }} 
                </td>
                <td colspan="4">
                    {{ $clientes->ta_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    FC: 
                </td>
                <td colspan="4">
                    FR: 
                </td>
                <td colspan="4">
                    Temp: 
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    {{ $clientes->fc_seccion3 }}
                </td>
                <td colspan="4">
                    {{ $clientes->fr_seccion3 }} 
                </td>
                <td colspan="4">
                    {{ $clientes->temp_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    Actividad física:
                </td>
                <td colspan="4">
                    Puede subir escaleras: 
                </td>
                <td colspan="4">
                    Cuántos pisos: 
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    {{ $clientes->actividad_fisica_seccion3 }}
                </td>
                <td colspan="4">
                    {{ $clientes->subir_escaleras_seccion3 }} 
                </td>
                <td colspan="4">
                    {{ $clientes->cuantos_pisos_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h1 class="text-center">Historia Familiar</h1>
                </td>
            </tr>

            <tr>
                <td colspan="8">Alguien en su familia tiene tendencia a sangrar excesivamente
                </td>
                <td colspan="4">
                    @if($clientes->sangrar_excesivamente_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>

            </tr>

            <tr>
                <td colspan="8">Alguien en su familia ha experimentado reacciones anormales con anestesia
                </td>
                <td colspan="4">
                    @if($clientes->reacciones_anormales_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">Alguien de su familia ha experimentado fiebre durante la anestesia
                </td>
                <td colspan="4">
                    @if($clientes->fiebre_anestesia_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h1 class="text-center">Historia Médica</h1>
                </td>
            </tr>

            <tr>
                <td colspan="8">Es alérgico a ciertos medicamentos
                </td>
                <td colspan="4">
                    @if($clientes->alergico_medicamentos_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>

            </tr>

            <tr>
                <td colspan="12">¿Cuáles?</td>
            </tr>
            <tr>
                <td colspan="12">
                    {{ $clientes->cuales_medicamentos_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">Describa las reacciones</td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->reacciones_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="8">Es alérgico a cintas adhesivas</td>
                <td colspan="4">
                    @if($clientes->alergico_cinta_adhesiva_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">Es alérgico al oído</td>
                <td colspan="4">
                    @if($clientes->alergico_oido_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">Toma más de 2 o 3 bebidas alcohólicas por semana </td>
                <td colspan="4">
                    @if($clientes->bebidas_alcoholicas_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">Se ha abstenido de tomar bebidas alcohólicas</td>
                <td colspan="4">

                    @if($clientes->abstenido_bebidas_alcoholicas_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">Sufre delirios</td>
                <td colspan="4">

                    @if($clientes->sufre_delirios_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">Fuma</td>
                <td colspan="4">

                    @if($clientes->fuma_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">Ha recibido transfusión sanguínea alguna vez</td>
                <td colspan="4">

                    @if($clientes->transfusion_sanguinea_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">Ha presentado reacción durante la transfusión
                    </td>
                <td colspan="4">

                    @if($clientes->transfusion_sanguinea_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="12">Describa la reacción:
                    </td>
            </tr>
            <tr>
                <td colspan="12">

                    {{ $clientes->reaccion_transfusion_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="8">Está embarazada:
                    </td>
                <td colspan="4">
                    @if($clientes->embarazada_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    Fecha de última menstruación: 
                </td>
                <td colspan="4">
                    {{ $clientes->menstruacion_seccion3 }} 
                </td>
            </tr>

            <tr>
                <td colspan="8">
                    Fecha de última menstruación: 
                </td>
                <td colspan="4">
                    {{ $clientes->menstruacion_seccion3 }} 
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h1 class="text-center">Padecimientos</h1>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    Enfermedad del Corazón:
                </td>
                <td colspan="2">
                    @if($clientes->menstruacion_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                    Enfermedad Musculares:
                </td>
                <td colspan="2">
                    @if($clientes->enfermedades_musculares_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    Angina, dolor de pecho:
                </td>
                <td colspan="2">
                    @if($clientes->angina_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                    Bronquitis:
                </td>
                <td colspan="2">
                    @if($clientes->bronquitis_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    Angina, dolor de pecho:
                </td>
                <td colspan="2">
                    @if($clientes->angina_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                    Bronquitis:
                </td>
                <td colspan="2">
                    @if($clientes->bronquitis_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    Adiccón a drogas:
                </td>
                <td colspan="2">
                    @if($clientes->adiccion_drogas_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                    Enfisema:
                </td>
                <td colspan="2">
                    @if($clientes->enfisema_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    Frecuentes dolores de cabeza:
                </td>
                <td colspan="2">
                    @if($clientes->dolores_cabeza_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                    Embolia cerebral:
                </td>
                <td colspan="2">
                    @if($clientes->embolia_cerebral_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Enfermedades mentales:
                </td>
                <td colspan="2">
                    @if($clientes->enfermedades_mentales_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                    Varices:
                </td>
                <td colspan="2">
                    @if($clientes->varices_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Embolia pulmonar
                </td>
                <td colspan="2">
                    @if($clientes->embolia_pulmonar_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                        Estrabismo:
                </td>
                <td colspan="2">
                    @if($clientes->estrabismo_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Enfermedades articulares
                </td>
                <td colspan="2">
                    @if($clientes->enfermedades_articulares_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                        Glaucoma:
                </td>
                <td colspan="2">
                    @if($clientes->glaucoma_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Fracturas óseas
                </td>
                <td colspan="2">
                    @if($clientes->fracturas_oseas_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                        Hepatitis:
                </td>
                <td colspan="2">
                    @if($clientes->hepatitis_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Problemas de columna
                </td>
                <td colspan="2">
                    @if($clientes->problema_columna_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                        Presión alta:
                </td>
                <td colspan="2">
                    @if($clientes->presion_alta_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Desmayos
                </td>
                <td colspan="2">
                    @if($clientes->desmayos_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                        Diabetes:
                </td>
                <td colspan="2">
                    @if($clientes->diabetes_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Enfermedades de pulmones
                </td>
                <td colspan="2">
                    @if($clientes->enfermedades_pulmones_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                        Flebitis:
                </td>
                <td colspan="2">
                    @if($clientes->flebitis_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Asma o dificultad respiratoria:
                </td>
                <td colspan="2">
                    @if($clientes->asma_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                        Abstinencia a drogas:
                </td>
                <td colspan="2">
                    @if($clientes->abstinencia_drogas_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Enfermedad de la tiroides
                </td>
                <td colspan="2">
                    @if($clientes->tiroides_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                        Enfermedad de los riñones
                </td>
                <td colspan="2">
                    @if($clientes->enfermedad_rinones_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    Tuberculosis
                </td>
                <td colspan="2">
                    @if($clientes->tuberculosis_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">
                        Tendencia a moretones
                </td>
                <td colspan="2">
                    @if($clientes->moretones_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    ¿Padece alergia a algún material, cinta micropore, latex, etc?
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->padece_alergia_material_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    ¿En qué fecha se hizo su último examen físico?
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->fecha_ultimo_examen_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    En qué fecha se realizó las ultimas radiografías de torax:
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->fecha_ultima_radiografia_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                        En qué fecha se realizó el último electrocardiograma:
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->fecha_ultimo_electrocardiograma_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h3 class="text-center">Clase de Anestesia que ha recibido</h3>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    {{ $clientes->clase_anestesia_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Experimenta reacciones anormales?
                </td>
                <td colspan="4">
                    @if($clientes->reacciones_anormales_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Ha sufrido fiebre en operaciones previas?
                </td>
                <td colspan="4">
                    @if($clientes->fiebre_operaciones_previas_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Usa dientes postizos?
                </td>
                <td colspan="4">
                    @if($clientes->dientes_postizos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Le faltan algunos dientes?
                </td>
                <td colspan="4">
                    @if($clientes->faltan_dientes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Están tapados sus dientes con porcelana permanente?
                </td>
                <td colspan="4">
                    @if($clientes->dientes_porcelana_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Tiene dientes sueltos o rotos?
                </td>
                <td colspan="4">
                    @if($clientes->dientes_sueltos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Se le dificulta mover la boca o abrirla
                </td>
                <td colspan="4">
                    @if($clientes->dificulta_mover_boca_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Usa lentes de contacto?
                </td>
                <td colspan="4">
                    @if($clientes->lentes_contacto_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Usa pestañas postizas que estén adheridas a sus parpados?
                </td>
                <td colspan="4">
                    @if($clientes->pestanas_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Usa un ojo artificial?
                </td>
                <td colspan="4">
                    @if($clientes->ojo_artificial_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8">
                        ¿Tiene defectos mayores o congénitos?
                </td>
                <td colspan="4">
                    @if($clientes->defectos_mayores_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h1>Medicamentos que emplea usted actualmente</h1>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Aspirina
                </td>
                <td colspan="2">
                    @if($clientes->aspirina_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">Oxigeno</td>
                <td colspan="2">
                    @if($clientes->oxigeno_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Digitales (para la palpitación)
                </td>
                <td colspan="2">
                    @if($clientes->digitales_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">LSD</td>
                <td colspan="2">
                    @if($clientes->lsd_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Quinidinas
                </td>
                <td colspan="2">
                    @if($clientes->quinidinas_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">Gotas para glaucoma</td>
                <td colspan="2">
                    @if($clientes->gotas_glaucoma_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Nitroglicerina
                </td>
                <td colspan="2">
                    @if($clientes->nitroglicerina_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">Pastillas para dormir</td>
                <td colspan="2">
                    @if($clientes->pastillas_dormir_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Medicamentos para presión
                </td>
                <td colspan="2">
                    @if($clientes->medicamentos_presion_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">Narcoticos</td>
                <td colspan="2">
                    @if($clientes->narcoticos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Diureticos
                </td>
                <td colspan="2">
                    @if($clientes->diureticos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">Lasix</td>
                <td colspan="2">
                    @if($clientes->lasix_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Anticoagulantes
                </td>
                <td colspan="2">
                    @if($clientes->anticoagulantes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">Heparina</td>
                <td colspan="2">
                    @if($clientes->heparina_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Medicamentos para diabetes
                </td>
                <td colspan="2">
                    @if($clientes->medicamentos_diabetes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">Algún otro medicamento</td>
                <td colspan="2">
                    @if($clientes->otro_medicamento_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Tranquilizantes
                </td>
                <td colspan="2">
                    @if($clientes->tranquilizantes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">¿Cual?</td>
                <td colspan="2">
                    {{ $clientes->cual_otro_medicamento_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="4">
                        Anti depresivos
                </td>
                <td colspan="2">
                    @if($clientes->antidepresivos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4">Dosis?</td>
                <td colspan="2">
                    {{ $clientes->dosis_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <p>Su anestesiólogo platicara con usted y le aconsejara el tipo de anestesia que medicamente se considere la más apropiada para su caso. Por lo general, la anestesia empleada hoy en día es de bajo riesgo.</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <p>No obstante, usted debe comprender que al igual que cualquier otro procedimiento médico y la administración de anestesia presenta ciertos riesgos; los cuales pueden varias con los hábitos, la edad, enfermedades agregadas de cada paciente; por lo que es importante que usted lea y conteste detenidamente esta forma.</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <p>Firme la parte inferior cuando esté de acuerdo con lo leído y contestado adecuadamente.</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <u style="width: 100%"></u>
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    <p>
                            Firma de paciente o persona responsable y parentesco                                                             Anestesiólogo
                    </p>
                </td>
            </tr>

            
        </tbody>
    </table>

</body>
</html>