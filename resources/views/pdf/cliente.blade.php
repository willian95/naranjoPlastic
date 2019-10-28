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
                    <p style="text-align: right; font-size: 10px;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Edificio Plaza Medical</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">José Clemente Orozco #2468-306</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Zona Rio Tijuana, B.C. 22320</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                        
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Número de Registro: {{ $clientes->id }}</p>
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Fecha de Registro: {{ $clientes->created_at->format('d/m/Y') }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    <h3 class="text-center">Ficha Clínica</h3>
                </td>
            </tr>
            <tr>
                <th colspan="6" style="font-size: 12px; border: 1px solid; padding: 0px;">Nombre/first name</th>
                <th colspan="6" style="font-size: 12px; border: 1px solid; padding: 0px;">Segundo Nombre / Middle Name</th>
            </tr>
            <tr>
                <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->name }}</td>
                <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->segundoNombre }}</td>
            </tr>
            <tr>
                <th colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">Apellido/Last Name</th>
            </tr>
            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->apePat }}</td>
            </tr>
            <tr>
                <th colspan="3" style="font-size:12px; border: 1px solid; padding: 0px;">Fecha de Nacimiento</th>
                <th colspan="3" style="font-size:12px; border: 1px solid; padding: 0px;">Lugar de Nacimiento</th>
                <th colspan="3" style="font-size:12px; border: 1px solid; padding: 0px;">Edad</th>
                <th colspan="3" style="font-size:12px; border: 1px solid; padding: 0px;">Sexo</th>
            </tr>
            <tr>
                <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->fechaNacimiento }}</td>
                <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->lugarNacimiento }}</td>
                <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->edad }}</td>
                <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->sexo == 1)
                        Masculino
                    @elseif($clientes->sexo == 2)
                        Femenino
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Estado Marital</th>
                <th colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Tipo de Sangre</th>
                <th colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Religion</th>
            </tr>
            <tr>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->edoCivil == 1)
                        Soltero
                    @elseif($clientes->edoCivil == 2)
                        Casado
                    @elseif($clientes->edoCivil == 3)
                        Viudo
                    @elseif($clientes->edoCivil == 4)
                        Divorciado
                    @elseif($clientes->edoCivil == 5)
                        Unión libre
                    @endif
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->tipoSangre }}
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->religion }}
                </td>
            </tr>
            <tr>
                <th colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;">Escolaridad</th>
                <th colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;">Ocupación</th>
            </tr>
            <tr>
                <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
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
                <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->ocupacionSeccion2 }}
                </td>
            </tr>
        </tbody>
    </table>

        <table class="table" style="margin-top: 20px;">
            <tbody>
                    <tr>
                        <th colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;">Calle y No. / Street</th>
                        <th colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;">C.P. / ZIP CODE</th>
                    </tr>
                    <tr>
                        <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->calle }}</td>
                        <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->codigoPostal }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Ciudad / City</th>
                        <th colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Estado / Estate</th>
                        <th colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">País / Country</th>
                    </tr>
                    <tr>
                        <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->ciudad }}</td>
                        <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">{{ App\Estados::where('id', $clientes->estado)->value('nombre') }}</td>
                        <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                            {{ App\Pais::where('id', $clientes->pais)->value('nombre') }}
                        </td>
                    </tr>
            </tbody>
        </table>

        <table class="table">
            <tbody>
            <tr>
                <th colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;">Telefono de casa</th>
                <th colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;">Teléfono Celular</th>
            </tr>
            <tr>
                
                <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->telCasa }}
                </td>
                <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->celular }}
                </td>
            </tr>
            <tr>
                <th colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;">Telefono de oficina</th>
                <th colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;">Pase Médico</th>
            </tr>
            <tr>
                <td colspan="6"  style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->telOficina }}</td>
                <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->paseMedico }}
                </td>
            </tr>
            <tr>
                <th colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">Email</th>
            </tr>
            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->email }}</td>
            </tr>
            <tr>
                <th colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">¿Cómo se enteró de Nosotros?</th> 
            </tr>
            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->enteroNosotros }}</td>
            </tr>

            <tr>
                <th colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">Especifique</th>
            </tr>
            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->especifiqueEnteroNosotros }}</td>
            </tr>

            <tr>
                <th colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">Aseguradora</th>
            </tr>
            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->aseguradora }}</td>
            </tr>

            <tr>
                <th colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;">Cirugías Plásticas Previas</th>
                <th colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;">Otras Cirugias</th>
            </tr>
            <tr>
                <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->cirugiasPrevias }}</td>
                <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">{{ $clientes->otrasCirugias }}</td>
            </tr>
            </tbody>
        </table>

        <div style="page-break-before:always">&nbsp;</div> 

        <table class="table">
            {{--<tbody>
                
            <tr>
                <th colspan="4">Diagnóstico Pre-Operatorio</th>
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
            </tr>--}}
            <tbody>
            <tr>
                <td colspan="4">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="8">
                    <p style="text-align: right; font-size: 10px;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Edificio Plaza Medical</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">José Clemente Orozco #2468-306</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Zona Rio Tijuana, B.C. 22320</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                        
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Número de Registro: {{ $clientes->id }}</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Fecha de Registro: {{ $clientes->created_at->format('d/m/Y') }}</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h3 class="text-center">Historia Clínica</h3>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Nombre:
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $clientes->name }} {{ $clientes->segundoNombre }} {{ $clientes->apePat }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Teléfono
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->telCasa }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Edad:
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->edad }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Estado Civil
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->edoCivil == 1)
                        Soltero
                    @elseif($clientes->edoCivil == 2)
                        Casado
                    @elseif($clientes->edoCivil == 3)
                        Viudo
                    @elseif($clientes->edoCivil == 4)
                        Divorciado
                    @elseif($clientes->edoCivil == 5)
                        Unión libre
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Ocupación:
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->ocupacionSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Religión
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->religion }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Originaria:
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->originariaSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Reside
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->resideSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    AHF:
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->ahfSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    APNP:
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->apnpSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    APP:
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->appSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    AGO:
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->agoSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Padecimiento Actual:
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->padecimientoSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Exploración física
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->exploracionFisicaSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Laboratorio
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->laboratorioSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Idx
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->idxSeccion2 }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Plan
                </td>
                <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->planSeccion2 }}
                </td>
            </tr>

            </tbody>
        </table>

        <div style="page-break-before:always">&nbsp;</div>

        <table class="table">
            <tbody>
                <tr>
                    <td colspan="4">
                        <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                    </td>
                    <td colspan="8">
                        <p style="text-align: right; font-size: 10px;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                        <p style="text-align: right; font-size: 10px; margin-top: -12px;">Edificio Plaza Medical</p>
                        <p style="text-align: right; font-size: 10px; margin-top: -12px;">José Clemente Orozco #2468-306</p>
                        <p style="text-align: right; font-size: 10px; margin-top: -12px;">Zona Rio Tijuana, B.C. 22320</p>
                        <p style="text-align: right; font-size: 10px; margin-top: -12px;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                            
                        <p style="text-align: right; font-size: 10px; margin-top: -12px;">Número de Registro: {{ $clientes->id }}</p>
                        <p style="text-align: right; font-size: 10px; margin-top: -12px;">Fecha de Registro: {{ $clientes->created_at->format('d/m/Y') }}</p>
                    </td>
                </tr>
            <tr>
                <td colspan="12">
                    <h3 class="text-center">Valoración Pre-Anestesica</h3>
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Nombre: {{ $clientes->name }}  {{ $clientes->segundoNombre }} {{ $clientes->apePat }}
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Edad: {{ $clientes->edad }}
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Sexo: {{ $clientes->sexo }}
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Peso: 
                </td>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Talla: 
                </td>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    T/A: 
                </td>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    FC: 
                </td>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    FR: 
                </td>
                <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Temp: 
                </td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->peso_seccion3 }}
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->talla_seccion3 }} 
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->ta_seccion3 }}
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->fc_seccion3 }}
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->fr_seccion3 }} 
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->temp_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Actividad física:
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Puede subir escaleras: 
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Cuántos pisos: 
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->actividad_fisica_seccion3 }}
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->subir_escaleras_seccion3 }} 
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->cuantos_pisos_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12" style="border: 1px solid; padding: 0px;">
                    <h4 class="text-center">Historia Familiar</h4>
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Alguien en su familia tiene tendencia a sangrar excesivamente
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->sangrar_excesivamente_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>

            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Alguien en su familia ha experimentado reacciones anormales con anestesia
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->reacciones_anormales_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Alguien de su familia ha experimentado fiebre durante la anestesia
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->fiebre_anestesia_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="12" style="border: 1px solid; padding: 0px;">
                    <h4 class="text-center">Historia Médica</h4>
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Es alérgico a ciertos medicamentos
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->alergico_medicamentos_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>

            </tr>

            <tr>
                <td colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">¿Cuáles?</td>
            </tr>
            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->cuales_medicamentos_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">Describa las reacciones</td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">
                    {{ $clientes->reacciones_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Es alérgico a cintas adhesivas</td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->alergico_cinta_adhesiva_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Es alérgico al oído</td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->alergico_oido_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Toma más de 2 o 3 bebidas alcohólicas por semana </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->bebidas_alcoholicas_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Se ha abstenido de tomar bebidas alcohólicas</td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">

                    @if($clientes->abstenido_bebidas_alcoholicas_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Sufre delirios</td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">

                    @if($clientes->sufre_delirios_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Fuma</td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">

                    @if($clientes->fuma_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Ha recibido transfusión sanguínea alguna vez</td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">

                    @if($clientes->transfusion_sanguinea_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Ha presentado reacción durante la transfusión
                    </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">

                    @if($clientes->transfusion_sanguinea_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">Describa la reacción:
                    </td>
            </tr>
            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">

                    {{ $clientes->reaccion_transfusion_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Está embarazada:
                    </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->embarazada_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Fecha de última menstruación: 
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->menstruacion_seccion3 }} 
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Fecha de última menstruación: 
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->menstruacion_seccion3 }} 
                </td>
            </tr>
            </tbody>
        </table>

        <div style="page-break-before:always">&nbsp;</div>

        <table class="table">
            <tbody>
                    <tr>
                            <td colspan="4">
                                <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                            </td>
                            <td colspan="8">
                                <p style="text-align: right; font-size: 10px;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Edificio Plaza Medical</p>
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">José Clemente Orozco #2468-306</p>
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Zona Rio Tijuana, B.C. 22320</p>
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                                    
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Número de Registro: {{ $clientes->id }}</p>
                                <p style="text-align: right; font-size: 10px; margin-top: -12px; margin-bottom: -12px;">Fecha de Registro: {{ $clientes->created_at->format('d/m/Y') }}</p>
                            </td>
                        </tr>
            <tr>
                <td colspan="12" >
                    <h4 class="text-center">Padecimientos</h4>
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Enfermedad del Corazón:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->corazon_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Enfermedad Musculares:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->enfermedades_musculares_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Angina, dolor de pecho:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->angina_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Bronquitis:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->bronquitis_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Adiccón a drogas:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->adiccion_drogas_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Enfisema:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->enfisema_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Frecuentes dolores de cabeza:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->dolores_cabeza_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Embolia cerebral:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->embolia_cerebral_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Enfermedades mentales:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->enfermedades_mentales_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Varices:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->varices_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Embolia pulmonar
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->embolia_pulmonar_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Estrabismo:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->estrabismo_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Enfermedades articulares
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->enfermedades_articulares_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Glaucoma:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->glaucoma_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Fracturas óseas
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->fracturas_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Hepatitis:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->hepatitis_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Problemas de columna
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->problemas_columna_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Presión alta:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->presion_alta_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Desmayos
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->desmayos_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Diabetes:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->diabetes_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Enfermedades de pulmones
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->enfermedades_pulmones_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Flebitis:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->flebitis_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Asma o dificultad respiratoria:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->asma_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Abstinencia a drogas:
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->abstinencia_drogas_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Enfermedad de la tiroides
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->tiroides_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Enfermedad de los riñones
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->enfermedad_rinones_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Tuberculosis
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->tuberculosis_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Tendencia a moretones
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->moretones_seccion3 == '1')
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">
                    ¿Padece alergia a algún material, cinta micropore, latex, etc?
                </td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->padece_alergia_material_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">
                    ¿En qué fecha se hizo su último examen físico?
                </td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->fecha_ultimo_examen_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">
                    En qué fecha se realizó las ultimas radiografías de torax:
                </td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->fecha_ultima_radiografia_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">
                        En qué fecha se realizó el último electrocardiograma:
                </td>
            </tr>

            <tr>
                <td colspan="12" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->fecha_ultimo_electrocardiograma_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12" style="border: 1px solid; padding: 0px;">
                    <h4 class="text-center">Clase de Anestesia que ha recibido</h4>
                </td>
            </tr>

            

            <tr>
                <td colspan="3" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Raquia @if($clientes->clase_anestesia_seccion3 == 'Raquia') X @endif
                </td>
                <td colspan="3" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Local @if($clientes->clase_anestesia_seccion3 == 'Local') X @endif
                </td>
                <td colspan="3" style="font-size:12px; border: 1px solid; padding: 0px;">
                    General @if($clientes->clase_anestesia_seccion3 == 'General') X @endif
                </td>
                <td colspan="3" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Bloqueo Epidural @if($clientes->clase_anestesia_seccion3 == 'Bloqueo Epidural') X @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Experimenta reacciones anormales?
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->reacciones_anormales_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Ha sufrido fiebre en operaciones previas?
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->fiebre_operaciones_previas_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Usa dientes postizos?
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->dientes_postizos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Le faltan algunos dientes?
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->faltan_dientes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Están tapados sus dientes con porcelana permanente?
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->dientes_porcelana_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Tiene dientes sueltos o rotos?
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->dientes_sueltos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Se le dificulta mover la boca o abrirla
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->dificulta_mover_boca_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Usa lentes de contacto?
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->lentes_contacto_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8"style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Usa pestañas postizas que estén adheridas a sus parpados?
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->pestanas_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Usa un ojo artificial?
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->ojo_artificial_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        ¿Tiene defectos mayores o congénitos?
                </td>
                <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->defectos_mayores_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>
        
            </tbody>
        </table>

        <div style="page-break-before:always">&nbsp;</div>

        <table class="table">
            <tbody>
                    <tr>
                            <td colspan="4">
                                <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                            </td>
                            <td colspan="8">
                                <p style="text-align: right; font-size: 10px;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Edificio Plaza Medical</p>
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">José Clemente Orozco #2468-306</p>
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Zona Rio Tijuana, B.C. 22320</p>
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                                    
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Número de Registro: {{ $clientes->id }}</p>
                                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Fecha de Registro: {{ $clientes->created_at->format('d/m/Y') }}</p>
                            </td>
                        </tr>

            <tr>
                <td colspan="12" style="border: 1px solid; padding: 0px;">
                    <h4 class="text-center">Medicamentos que emplea usted actualmente</h4>
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Aspirina
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->aspirina_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Oxigeno</td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->oxigeno_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Digitales (para la palpitación)
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->digitales_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">LSD</td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->lsd_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Quinidinas
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->quinidinas_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Gotas para glaucoma</td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->gotas_glaucoma_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Nitroglicerina
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->nitroglicerina_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Pastillas para dormir</td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->pastillas_dormir_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Medicamentos para presión
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->medicamentos_presion_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Narcoticos</td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->narcoticos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Diureticos
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->diureticos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Lasix</td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->lasix_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Anticoagulantes
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->anticoagulantes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Heparina</td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->heparina_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Medicamentos para diabetes
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->medicamentos_diabetes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Algún otro medicamento</td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->otro_medicamento_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Tranquilizantes
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->tranquilizantes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">¿Cual?</td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->cual_otro_medicamento_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Anti depresivos
                </td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->antidepresivos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">Dosis?</td>
                <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->dosis_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <p style="font-size: 12px;">Su anestesiólogo platicara con usted y le aconsejara el tipo de anestesia que medicamente se considere la más apropiada para su caso. Por lo general, la anestesia empleada hoy en día es de bajo riesgo.</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <p style="font-size: 12px;">No obstante, usted debe comprender que al igual que cualquier otro procedimiento médico y la administración de anestesia presenta ciertos riesgos; los cuales pueden varias con los hábitos, la edad, enfermedades agregadas de cada paciente; por lo que es importante que usted lea y conteste detenidamente esta forma.</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <p>______________________________________________</p>
                    <p style="font-size: 12px;">Firme la parte inferior cuando esté de acuerdo con lo leído y contestado adecuadamente.</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <u style="width: 100%"></u>
                </td>
            </tr>
            <tr>
                <td colspan="12">
                        <p>______________________________________________</p>
                    <p style="font-size: 12px;">
                            
                            Firma de paciente o persona responsable y parentesco                                                             Anestesiólogo
                    </p>
                </td>
            </tr>

            <div style="page-break-before:always">&nbsp;</div> 

            <tr>
                <td colspan="4">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="8">
                    <p style="text-align: right; font-size: 10px;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Edificio Plaza Medical</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">José Clemente Orozco #2468-306</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Zona Rio Tijuana, B.C. 22320</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                        
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Número de Registro: {{ $clientes->id }}</p>
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Fecha de Registro: {{ $clientes->created_at->format('d/m/Y') }}</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h3 class="text-center">NOTA POSTOPERATORIA</h3>
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Habitación: {{ $notaPostOperatoria->habitacion_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Diagnostico pre-operatorio: {{ $notaPostOperatoria->diagnostico_pre_operatorio_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Operacion planeada: {{ $notaPostOperatoria->operacion_planeada_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Diagnostico post-operatorio: {{ $notaPostOperatoria->diagnostico_post_operatorio_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Operacion realizada: {{ $notaPostOperatoria->operacion_realizada_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Descripción de la técnica quirurgica: {{ $notaPostOperatoria->descripcion_tecnica_quirurgica_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Hallazgos trans-operatorios: {{ $notaPostOperatoria->hallazgos_transoperatorios_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Reporte gasas y compresas: {{ $notaPostOperatoria->reporte_gasas_compresas_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Incidentes y accidentes: {{ $notaPostOperatoria->incidentes_accidentes_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Sangrado: {{ $notaPostOperatoria->sangrado_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    ESTUDIOS DE SERVICIOS AUXICILIARES DE DIAGNOSTICO Y TRATAMIENTO TRANSOPERATORIOS: {{ $notaPostOperatoria->estudios_servicios_auxiliares_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Nombre del anestesiologo: {{ $notaPostOperatoria->nombre_anestesiologo_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Nombre del ayudante1: {{ $notaPostOperatoria->nombre_ayudante1_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Nombre del ayudante2: {{ $notaPostOperatoria->nombre_ayudante2_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Nombre del instrumentista: {{ $notaPostOperatoria->nombre_instrumentista_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Nombre de enfermera circulante: {{ $notaPostOperatoria->nombre_enfermera_circulante_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Estado post-quirurgico inmediato: {{ $notaPostOperatoria->estado_postquirurgico_inmediato_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Pronostico: {{ $notaPostOperatoria->pronostico_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    ENVIO DE PIEZAS O BIOPSIAS QUIRURGICAS PARA EXAMEN MACROSCOPICO E HISTOPATOLÓGICO: {{ $notaPostOperatoria->envio_piezas_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Otros hallazgos: {{ $notaPostOperatoria->otros_hallazgos_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Nombre del cirujano: {{ $notaPostOperatoria->nombre_cirujano_seccion4 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Firma:
                </td>
            </tr>

            <div style="page-break-before:always">&nbsp;</div>

            <tr>
                <td colspan="4">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="8">
                    <p style="text-align: right; font-size: 10px;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Edificio Plaza Medical</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">José Clemente Orozco #2468-306</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Zona Rio Tijuana, B.C. 22320</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                        
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Número de Registro: {{ $clientes->id }}</p>
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Fecha de Registro: {{ $clientes->created_at->format('d/m/Y') }}</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h3 class="text-center">Indicaciones Post Quirurgicas</h3>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    Nombre: {{ $clientes->name }} {{ $clientes->apePat }}
                </td>
                <td colspan="6">
                    Edad: {{ $clientes->edad }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    {{ $indicaciones->indicaciones_seccion5 }}
                </td>
            </tr>

            <div style="page-break-before:always">&nbsp;</div>

            <tr>
                <td colspan="4">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="8">
                    <p style="text-align: right; font-size: 10px;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Edificio Plaza Medical</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">José Clemente Orozco #2468-306</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Zona Rio Tijuana, B.C. 22320</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                        
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Número de Registro: {{ $clientes->id }}</p>
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Fecha de Registro: {{ $clientes->created_at->format('d/m/Y') }}</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h3 class="text-center">Nota Médica</h3>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    Nombre: {{$clientes->name}} {{$clientes->apePat}}
                </td>
                <td colspan="6">
                    Edad:{{$clientes->edad}}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Sexo:{{ $clientes->sexo }}
                </td>
                <td colspan="2">
                    Talla:{{ $clientes->talla_seccion3 }}
                </td>
                <td colspan="2">
                    TA:{{ $clientes->ta_seccion3 }}
                </td>
                <td colspan="2">
                    FC:{{ $clientes->fc_seccion3 }}
                </td>
                <td colspan="2">
                    FR:{{ $clientes->fr_seccion3 }}
                </td>
                <td colspan="2">
                    TEMP:{{ $clientes->temp_seccion3 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    {{ $notaMedica->nota_medica_seccion6 }}
                </td>
            </tr>

            <div style="page-break-before:always">&nbsp;</div>

            <tr>
                <td colspan="4">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="8">
                    <p style="text-align: right; font-size: 10px;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Edificio Plaza Medical</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">José Clemente Orozco #2468-306</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Zona Rio Tijuana, B.C. 22320</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                        
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Número de Registro: {{ $clientes->id }}</p>
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Fecha de Registro: {{ $clientes->created_at->format('d/m/Y') }}</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    <h3 class="text-center">Nota de Egreso</h3>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    Nombre: {{$clientes->name}} {{$clientes->apePat}}
                </td>
                <td colspan="6">
                    Edad:{{$clientes->edad}}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Sexo:{{ $clientes->sexo }}
                </td>
                <td colspan="2">
                    Talla:{{ $clientes->talla_seccion3 }}
                </td>
                <td colspan="2">
                    TA:{{ $clientes->ta_seccion3 }}
                </td>
                <td colspan="2">
                    FC:{{ $clientes->fc_seccion3 }}
                </td>
                <td colspan="2">
                    FR:{{ $clientes->fr_seccion3 }}
                </td>
                <td colspan="2">
                    TEMP:{{ $clientes->temp_seccion3 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Fecha Ingreso: {{ $notaEgreso->fechaIngreso_seccion7 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Fecha Egreso: {{ $notaEgreso->fechaEgreso_seccion7 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Motivo de Egreso: {{ $notaEgreso->motivoEgreso_seccion7 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Diagnosticos Finales: {{ $notaEgreso->diagnosticoFinal_seccion7 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Resumen Clinico: {{ $notaEgreso->resumenClinico_seccion7 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Problemas clinico pendientes: {{ $notaEgreso->problemasClinicos_seccion7 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Plan: {{ $notaEgreso->plan_seccion7 }}
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    Recomendaciones para vigilancia ambulatoria: {{ $notaEgreso->recomendacionesVigilancia_seccion7 }}
                </td>
            </tr>

            <div style="page-break-before:always">&nbsp;</div>

            <tr>
                <td colspan="4">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="8">
                    <p style="text-align: right; font-size: 10px;">Licencia Sanitaria: 15-AM-02-004-0003</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Edificio Plaza Medical</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">José Clemente Orozco #2468-306</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Zona Rio Tijuana, B.C. 22320</p>
                    <p style="text-align: right; font-size: 10px; margin-top: -12px;">Tel. (664) 391 13 24 USA (619) 354 37 01</p>
                        
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Número de Registro: {{ $clientes->id }}</p>
                <p style="text-align: right; font-size: 10px; margin-top: -12px;">Fecha de Registro: {{ $clientes->created_at->format('d/m/Y') }}</p>
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    Nombre: {{$clientes->name}} {{$clientes->apePat}}
                </td>
            </tr>

            <tr>
                <td colspan="12">
                    Resumen de seguimiento y fecha: {{$seguimiento->resumen_seccion8}}
                </td>
            </tr>


            
        </tbody>
    </table>

    

</body>
</html>