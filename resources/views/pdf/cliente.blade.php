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
                <td colspan="2">
                    <h3 class="text-center">Información General</h3>
                </td>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            <tr>
                <td>{{ $clientes->name }}</td>
                <td>{{ $clientes->apePat }}</td>
            </tr>
            <tr>
                <th>Fecha de Nacimiento</th>
                <th>Lugar de Nacimiento</th>
            </tr>
            <tr>
                <td>{{ $clientes->fechaNacimiento }}</td>
                <td>{{ $clientes->lugarNacimiento }}</td>
            </tr>
            <tr>
                <th>Edad</th>
                <th>Sexo</th>
            </tr>
            <tr>
                <td>{{ $clientes->edad }}</td>
                <td>
                    @if($clientes->sexo == 1)
                        Masculino
                    @elseif($clientes->sexo == 2)
                        Femenino
                    @endif
                </td>
            </tr>
            <tr>
                <th>Estado Marital</th>
                <th>Religion</th>
            </tr>
            <tr>
                <td>
                    @if($clientes->edoCivil == 1)
                        Soltero
                    @elseif($clientes->edoCivil == 2)
                        Casado
                    @elseif($clientes->edoCivil == 3)
                        Viudo
                    @elseif($clientes->edoCivil == 4)
                        Divorciado
                    @endif</td>
                <td>
                    {{ $clientes->religion }}
                </td>
            </tr>
            <tr>
                <th>Escolaridad</th>
                <th>Teléfono celular</th>
            </tr>
            <tr>
                <td>
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
                <td>
                    {{ $clientes->celular }}
                </td>
            </tr>
            <tr>
                <th>Teléfono de casa</th>
                <th>Teléfono de oficina</th>
            </tr>
            <tr>
                <td>{{ $clientes->telCasa }}</td>
                <td>{{ $clientes->telOficina }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <th>País</th>
            </tr>
            <tr>
                <td>{{ $clientes->email }}</td>
                <td>
                    {{ App\Pais::where('id', $clientes->pais)->value('nombre') }}
                </td>
            </tr>
            <tr>
                <th>Estado</th>
                <th>Calle</th>
            </tr>
            <tr>
                <td>{{ App\Estados::where('id', $clientes->estado)->value('nombre') }}</td>
                <td>
                    {{ $clientes->calle }}
                </td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <th>Código Postal</th>
            </tr>
            <tr>
                <td>{{ $clientes->ciudad }}</td>
                <td>
                    {{ $clientes->codigoPostal }}
                </td>
            </tr>
            <tr>
                <th>¿Cómo se enteró de Nosotros?</th>
                <th>¿Cirugías plásticas previas?</th>
            </tr>
            <tr>
                <td>{{ $clientes->enteroNosotros }}</td>
                <td>
                    {{ $clientes->cirugiasPrevias }}
                </td>
            </tr>
            <tr>
                <th>¿Otras cirugias?</th>
                <th></th>
            </tr>
            <tr>
                <td>{{ $clientes->otrasCirugias }}</td>
                <td>
                    
                </td>
            </tr>
            <tr>
                
                <td colspan="2"><h4>Ocupación</h4></td>
               
            </tr>
            <tr>
                <th>Puesto</th>
                <th>Compañia</th>
            </tr>
            <tr>
                <td>{{ $clientes->puesto }}</td>
                <td>
                    {{ $clientes->compania }}
                </td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <th></th>
            </tr>
            <tr>
                <td>{{ $clientes->telCompania }}</td>
                <td>
                   
                </td>
            </tr>
            <tr>
                <td colspan="2"><h4>En caso de emergencia</h4></td>

            </tr>
            <tr>
                <th>Nombre</th>
                <th>Relación</th>
            </tr>
            <tr>
                <td>{{ $clientes->emerNombre }}</td>
                <td>
                    {{ $clientes->emerRelacion }}
                </td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <th></th>
            </tr>
            <tr>
                <td>{{ $clientes->emerTel }}</td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h3 class="text-center">Ficha de identificación</h3>
                </td>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>Lugar de nacimiento</th>
            </tr>
            <tr>
                <td>{{ $clientes->nombreSeccion2 }}</td>
                <td>
                    {{ $clientes->lugarNacimientoSeccion2 }}
                </td>
            </tr>
            <tr>
                <th>Edad</th>
                <th>Teléfono</th>
            </tr>
            <tr>
                <td>{{ $clientes->edadSeccion2 }}</td>
                <td>
                    {{ $clientes->telefonoSeccion2 }}
                </td>
            </tr>
            <tr>
                <th>Sexo</th>
                <th>Fecha de elaboración de la historia</th>
            </tr>
            <tr>
                <td>
                    @if($clientes->sexoSeccion2 == 1)
                        Masculino
                    @elseif($clientes->sexoSeccion2 == 2)
                        Femenino
                    @endif
                </td>
                <td>
                    {{ $clientes->fechaHistoriaSeccion2 }}
                </td>
            </tr>
            <tr>
                <th>Fecha de nacimiento</th>
                <th>Religión</th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->fechaNacimientoSeccion2 }}
                </td>
                <td>
                    {{ $clientes->religionSeccion2 }}
                </td>
            </tr>
            <tr>
                <th>Dirección</th>
                <th>Ocupación</th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->direccionSeccion2 }}
                </td>
                <td>
                    {{ $clientes->ocupacionSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h4 class="text-center">Antecedentes Heredo Familiares</h4>
                </td>
            </tr>
            <tr>
                <th>Padre</th>
                <th>Madre</th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->padreSeccion2 }}
                </td>
                <td>
                    {{ $clientes->madreSeccion2 }}
                </td>
            </tr>
            <tr>
                <th>Enfermedades y cuales</th>
                <th>Enfermedades y cuales</th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->enfermedadesPadreSeccion2 }}
                </td>
                <td>
                    {{ $clientes->enfermedadesMadreSeccion2 }}
                </td>
            </tr>
            <tr>
                <th>Alergias</th>
                <th>Alergias</th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->alergiasPadreSeccion2 }}
                </td>
                <td>
                    {{ $clientes->alergiasMadreSeccion2 }}
                </td>
            </tr>
            <tr>
                <th>Abuelos Paternos</th>
                <th>Abuelos Maternos</th>
            </tr>
            <tr>
                <td>Enfermedades y cuales</td>
                <td>Enfermedades y cuales</td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->abuelosPaternosEnfermedadesSeccion2 }}
                </td>
                <td>
                    {{ $clientes->abuelosMaternosEnfermedadesSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">Hermanos</td>
            </tr>
            <tr>
                <th>Cuantos hermanos</th>
                <th>Enfermedades y cuales</th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->hermanosCuantosSeccion2 }}
                </td>
                <td>
                    {{ $clientes->hermanosEnfermedadesSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h4 class="text-center"><strong>Antecedentes Personales Patológicos</strong></h4>
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Enfermedades Congénitas</strong></td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->enfermedadesCongenitasSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Enfermedades propias de infancia y cuales</strong></td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->enfermedadesInfanciaSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Enfermedades crónico-degenerativas</strong></td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->enfermedadesCronicoDegenerativasSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Internamientos o intervenciones quirúrgicas</strong></td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->internamientosQuirurgicosSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Transfusiones</strong></td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->transfusionesSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Traumáticas</strong></td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->traumaticasSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Alergía a medicamentos y/o alimentos</strong></td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->alergiasSeccion2 }}
                </td>
            </tr>
            <tr>
                <th>Tabaquismo</th>
                <th>Alcoholismo</th>
            </tr>
            <tr>
                <td>
                    @if($clientes->tabaquismoSeccion2 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->alcoholismoSeccion2 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>Drogas</th>
                <td></td>
            </tr>
            <tr>
                <td>
                    @if($clientes->drogasSeccion2 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Cirugías anteriores</strong></td>
            </tr>
            <tr>
                <td colspan="2">{{ $clientes->cirugiasAnterioresSeccion2 }}</td>
            </tr>
            <tr>
                <td colspan="2"><strong>Medicamentos</strong></td>
            </tr>
            <tr>
                <td colspan="2">{{ $clientes->medicamentosSeccion2 }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <h3 class="text-center">Antecedentes personales no patológicos</h3>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Casa
                </td>
            </tr>
            <tr>
                <th>Número de habitaciones</th>
                <th>Cuántas personas</th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->numeroHabitacionesSeccion2 }}
                </td>
                <td>
                    {{ $clientes->cuantasPersonasSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Material</strong>
                </td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->materialSeccion2 }}
                </td>
            </tr>
            <tr>
                <th>Ventilación adecuada</th>
                <td></td>
            </tr>
            <tr>
                <td>
                    @if($clientes->ventilacionSeccion2 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Cuenta con los servicios:
                </td>
            </tr>
            <tr>
                <th>
                    Agua
                </th>
                <th>
                    Gas
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->aguaSeccion2 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->gasSeccion2 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Luz
                </th>
                <th>
                    Drenaje
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->luzSeccion2 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->drenajeSeccion2 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Mascotas
                </th>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    @if($clientes->mascotasSeccion2 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Cuáles mascotas</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->cualesMascotasSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Disposición de basura</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->disposicionBasuraSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Alimentación</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->alimentacionSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Ingiere Alcohol</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->ingiereAlcoholSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Organizaciones</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->organizacionSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Hace ejercicio</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->haceEjercicioSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Higiene</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->higieneSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Fuma</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->fumaSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Antecedentes Heredo-Familiares</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->antecedentesHeredoSeccion2 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h4 class="text-center">Antecedentes Gineco-Obstetricos</h4>
                </td>
            </tr>
            <tr>
                <th>
                    Menarca
                </th>
                <th>
                    Inicio de actividad sexual
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->menarcaSeccion2 }}
                </td>
                <td>
                    {{ $clientes->inicioActividadSeccion2 }}
                </td>
            </tr>
            <tr>
                <th>
                    Embarazos
                </th>
                <th>
                    Partos Naturales
                </th>
            </tr>
            <tr>
                <th>
                    {{ $clientes->gestasSeccion2 }}
                </th>
                <th>
                    {{ $clientes->abortosSeccion2 }}
                </th>
            </tr>
            <tr>
                <th>
                    Cesáreas
                </th>
                <th>
                    Abortos
                </th>
            </tr>
            <tr>
                <th>
                    {{ $clientes->cesareasSeccion2 }}
                </th>
                <th>
                    {{ $clientes->abortosSeccion2 }}
                </th>
            </tr>
            <tr>
                <th>
                    Fecha última menstruación
                </th>
                <th>
                    
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->furSeccion2 }}
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Interrogatorio por aparatos y sistemas</strong>
                </td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->interrogatorioPorAparatosSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>Motivo consulta</strong>
                </td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->motivoConsultaSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>Padecimiento actual</strong>
                </td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->padecimientoSeccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>Síntomas Generales</strong>
                </td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->sintomasGeneralesSeccion3 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h3 class="text-center">Interrogatorio por aparatos y sistemas</h3>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Respiratorio</strong>
                </td>
            </tr>
            <tr>
                <th>
                    Problemas al respirar
                </th>
                <th>
                    Sonidos al respirar
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->problemaRespirarSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->sonidosRespirarSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Respiración rápida
                </th>
                <th>
                    Secreciones
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->respiracionRapidaSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->secrecionesSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Respiración lenta
                </th>
                <th>
                    Color Esputo
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->respiracionLentaSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    {{ $clientes->colorEsputoSeccion3 }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Cardiovascular</strong>
                </td>
            </tr>
            <tr>
                <th>
                    Se agita?
                </th>
                <th>
                    Cansancio?
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->agitaSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->cansancioSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Cianosis?
                </th>
                <th>
                    Fatiga al comer y al hacer ejercicio?
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->cianosisSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->fatigaSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Soplos cardíacos?
                </th>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    @if($clientes->soplosSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Digestivo
                </td>
            </tr>
            <tr>
                <th>
                    Diarrea
                </th>
                <th>
                    Moco
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->diarreaSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->mocoSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Sangre
                </th>
                <th>
                    Estreñimiento
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->sangreSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->estreSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Excreta Normal
                </th>
                <th>
                    Vómitos
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->excretaSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->vomitosSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Genitourinario
                </td>
            </tr>
            <tr>
                <th>
                    Poliuria / Polaquiuria
                </th>
                <th>
                    Disuria
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->poliuriaSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->disuriaSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Sangre
                </th>
                <th>
                    Tenesmo Vesical
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->sangreGenitourinarioSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->tenesmoSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Color
                </th>
                <th>
                    Olor
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->olorSeccion3 }}
                </td>
                <td>
                    {{ $clientes->colorSeccion3 }}
                </td>
            </tr>
            <tr>
                <th>
                    Frecuencia
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->frecuenciaOrinarSeccion3 }}
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Nervioso
                </td>
            </tr>
            <tr>
                <th>
                    Hiperactividad
                </th>
                <th>
                    Perdida de fuerza
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->hiperactividadSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->perdidaFuerzaSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Somnolencia (horas de sueño)
                </th>
                <th>
                    Cefaléas
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->somnolenciaSeccion3 }}
                    
                </td>
                <td>
                    @if($clientes->cefaleasSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Irritabilidad
                </th>
                <th>
                    Paresias
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->irritabilidadSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->paresiasSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Falta de movimiento
                </th>
                <th>
                    Parestesiasis
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->faltaMovimientoSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->parestiasisSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h3 class="text-center">Músculo esquelético</h3>
                </td>
            </tr>
            <tr>
                <th>
                    Movimientos involuntarios y voluntarios
                </th>
                <th>
                    Artralgias
                </th>
            </tr>
            <tr>
                <td>
                    @if($clientes->movimientosInvoluntariosSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>
                    @if($clientes->artralgiasSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Contracción continua de músculos
                </th>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    @if($clientes->contraccionesMusculosSeccion3 == 1)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Piel y Faneras
                </td>
            </tr>
            <tr>
                <th>
                    Erupciones
                </th>
                <th>
                    Dematosis
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->erupcionesSeccion3 }}
                </td>
                <td>
                    {{ $clientes->dematosisSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    Glándulas
                </th>
                <th>
                    Uñas y pelo
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->glandulasSeccion3 }}
                </td>
                <td>
                    {{ $clientes->peloSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    Dientes (color, formación, deformidades)
                </th>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->dientesSeccion3 }}
                </td>
                <td>

                </td>
            </tr>

            <tr>
                <th>
                    GR
                </th>
                <th>
                    HB
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->grSeccion3 }}
                </td>
                <td>
                    {{ $clientes->hbSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    HCT
                </th>
                <th>
                    PLAG
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->hctSeccion3 }}
                </td>
                <td>
                    {{ $clientes->plagSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    C.M.H.G
                </th>
                <th>
                    L.E.U
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->cmhgSeccion3 }}
                </td>
                <td>
                    {{ $clientes->leuSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    L.I.N
                </th>
                <th>
                    Mono
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->linSeccion3 }}
                </td>
                <td>
                    {{ $clientes->monoSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    Eos
                </th>
                <th>
                    BAS
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->eosSeccion3 }}
                </td>
                <td>
                    {{ $clientes->basSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    Segmentados
                </th>
                <th>
                    En banda
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->segmentadosSeccion3 }}
                </td>
                <td>
                    {{ $clientes->enBandaSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    Qs: Glucosa
                </th>
                <th>
                    Urea
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->qsGlucosaSeccion3 }}
                </td>
                <td>
                    {{ $clientes->ureaSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    Creatinina
                </th>
                <th>
                    Col
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->creatininaSeccion3 }}
                </td>
                <td>
                    {{ $clientes->colSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    TAG
                </th>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    {{ $clientes->tagSeccion3 }}
                </td>
                <td>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>QS</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->qsSeccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>EGO</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $clientes->egoSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    TP
                </th>
                <th>
                    TPT
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->tpSeccion3 }}
                </td>
                <td>
                    {{ $clientes->tptSeccion3 }}
                </td>
            </tr>

            <tr>
                <th>
                    HIV
                </th>
                <th>
                    Otros
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->hivSeccion3 }}
                </td>
                <td>
                    {{ $clientes->otrosSeccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <h3 class="text-center">Exploración física</h3>
                </td>
            </tr>
            <tr>
                <th>
                    T/A
                </th>
                <th>
                    F.C
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->taSeccion4 }}
                </td>
                <td>
                    {{ $clientes->fcSeccion4 }}
                </td>
            </tr>
            <tr>
                <th>
                    F.R
                </th>
                <th>
                    Temp
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->fcSeccion4 }}
                </td>
                <td>
                    {{ $clientes->tempSeccion4 }}
                </td>
            </tr>

            <tr>
                <th>
                    Peso
                </th>
                <th>
                    Estatura
                </th>
            </tr>
            <tr>
                <td>
                    {{ $clientes->pesoSeccion4 }}
                </td>
                <td>
                    {{ $clientes->estatusSeccion4 }}
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    Habitus Exterior
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Cabeza</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">{{ $clientes->cabezaSeccion4 }}</td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>Cuello</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">{{ $clientes->cuelloSeccion4 }}</td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>Torax</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">{{ $clientes->toraxSeccion4 }}</td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>Abdomen</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">{{ $clientes->abdomenSeccion4 }}</td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>Extremidades</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">{{ $clientes->extremidadesSeccion4 }}</td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>Genitales</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">{{ $clientes->genitalesSeccion4 }}</td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>Diagnostico</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">{{ $clientes->diagnosticoSeccion4 }}</td>
            </tr>

            <tr>
                <td colspan="2">
                    <strong>Tratamiento</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2">{{ $clientes->tratamientoSeccion4 }}</td>
            </tr>

            
        </tbody>
    </table>

</body>
</html>