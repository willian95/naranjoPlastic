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
                    Sexo: @if($clientes->sexo == 1) Masculino @else Femenino @endif
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

        <table>
            <tbody>
            <tr>
                <td colspan="20">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="6">
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
                <td colspan="26" style="border: 1px solid; padding: 0px;">
                    <h4 class="text-center">Medicamentos que emplea usted actualmente</h4>
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Aspirina
                </td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->aspirina_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Oxigeno</td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->oxigeno_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Digitales (para la palpitación)
                </td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->digitales_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">LSD</td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->lsd_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Quinidinas
                </td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->quinidinas_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Gotas para glaucoma</td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->gotas_glaucoma_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Nitroglicerina
                </td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->nitroglicerina_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Pastillas para dormir</td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->pastillas_dormir_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Medicamentos para presión
                </td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->medicamentos_presion_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Narcoticos</td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->narcoticos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Diureticos
                </td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->diureticos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Lasix</td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->lasix_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Anticoagulantes
                </td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->anticoagulantes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Heparina</td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->heparina_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Medicamentos para diabetes
                </td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->medicamentos_diabetes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Algún otro medicamento</td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->otro_medicamento_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Tranquilizantes
                </td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->tranquilizantes_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">¿Cual?</td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->cual_otro_medicamento_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Anti depresivos
                </td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    @if($clientes->antidepresivos_seccion3)
                        Sí
                    @else
                        No
                    @endif
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">Dosis?</td>
                <td colspan="5" style="font-size:10px; border: 1px solid; padding: 0px;">
                    {{ $clientes->dosis_seccion3 }}
                </td>
            </tr>

            <tr>
                <td colspan="26">
                    <p style="font-size: 12px;">Su anestesiólogo platicara con usted y le aconsejara el tipo de anestesia que medicamente se considere la más apropiada para su caso. Por lo general, la anestesia empleada hoy en día es de bajo riesgo.</p>
                </td>
            </tr>

            <tr>
                <td colspan="26">
                    <p style="font-size: 12px;">No obstante, usted debe comprender que al igual que cualquier otro procedimiento médico y la administración de anestesia presenta ciertos riesgos; los cuales pueden varias con los hábitos, la edad, enfermedades agregadas de cada paciente; por lo que es importante que usted lea y conteste detenidamente esta forma.</p>
                </td>
            </tr>

            <tr>
                <td colspan="26">
                    <p>______________________________________________</p>
                    <p style="font-size: 12px;">Firme la parte inferior cuando esté de acuerdo con lo leído y contestado adecuadamente.</p>
                </td>
            </tr>

            <tr>
                <td colspan="26">
                    <u style="width: 100%"></u>
                </td>
            </tr>
            <tr>
                <td colspan="26">
                        <p>______________________________________________</p>
                    <p style="font-size: 12px;">
                            
                            Firma de paciente o persona responsable y parentesco
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="26">
                        <p>______________________________________________</p>
                    <p style="font-size: 12px;">    
                        Anestesiólogo
                    </p>
                </td>
            </tr>

            <div style="page-break-before:always">&nbsp;</div> 

            @if($hojaEnfermeria != null)
            <tr>
                <td colspan="20">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="6">
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
                <td colspan="26">
                    <h3 class="text-center">Hoja de enfermeria</h3>
                </td>
            </tr>

            <tr>
                <td colspan="10" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Nombre: {{ $clientes->name }}  {{ $clientes->segundoNombre }} {{ $clientes->apePat }}
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Edad: {{ $clientes->edad }}
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Sexo: @if($clientes->sexo == 1) Masculino @else Femenino @endif
                </td>
            </tr>

            <tr>
                <td colspan="14" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Medico tratante: {{ $hojaEnfermeria->medico_seccion10 }}
                </td>
                <td colspan="12" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Diagnostico: {{ $hojaEnfermeria->medico_seccion10 }}
                </td>
            </tr>

            <tr>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Días de hospitalización: {{ $hojaEnfermeria->diagnostico_seccion10 }}
                </td>
                <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                    fecha: {{ $hojaEnfermeria->fecha_seccion10 }}
                </td>
                <td colspan="10" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Cama: {{ $hojaEnfermeria->cama_seccion10 }}
                </td>
            </tr>
            <tr>
                <td colspan="13" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Peso: {{ $hojaEnfermeria->peso_seccion10 }}
                </td>
                <td colspan="13" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Talla: {{ $hojaEnfermeria->talla_seccion10 }}
                </td>
            </tr>
            <tr>
                <td colspan="26" style="font-size:12px; border: 1px solid; padding: 0px;">
                    Alergias: {{ $hojaEnfermeria->alergia_seccion10 }}
                </td>
            </tr>

            </tbody>
        </table>

        <table width="550">
            <thead>
                <tr>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">FC</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">TC</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">7</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">8</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">9</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">10</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">11</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">12</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">13</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">14</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">15</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">16</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">17</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">18</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">19</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">20</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">21</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">22</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">23</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">24</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">1</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">2</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">3</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">4</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">5</th>
                    <th style="font-size:12px; border: 1px solid; padding: 0px;" scope="col">6</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">170</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">41 °C</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_1_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_1_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">160</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;"></td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_2_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_2_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">150</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">40 °C</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_3_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_3_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">140</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;"></td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_4_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_4_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">130</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">39 °C</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_5_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_5_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">120</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;"></td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_6_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_6_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">110</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">38 °C</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_7_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_7_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">100</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;"></td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_8_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_8_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">90</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">37 °C</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_9_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_9_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">80</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;"></td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_10_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_10_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">70</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">36 °C</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_11_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_11_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">60</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;"></td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_12_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">50</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">35 °C</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_12_seccion10 }}</td>
                </tr>
                <tr>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">50</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">35 °C</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_7_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_8_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_9_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_10_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_11_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_12_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_13_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_14_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_15_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_16_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_17_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_18_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_19_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria->tabla_20_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_21_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_22_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_23_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_24_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_1_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_2_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_3_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_4_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_5_12_seccion10 }}</td>
                    <td style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->tabla_6_12_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">F. resp</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_1_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_2_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_3_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_4_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_5_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_6_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_7_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_8_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_9_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_10_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_11_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->t_arterial_12_seccion10 }}</td>
         
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">T. Arterial</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_1_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_2_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_3_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_4_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_5_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_6_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_7_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_8_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_9_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_10_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_11_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->f_resp_12_seccion10 }}</td>
         
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Perimetro</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_1_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_2_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_3_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_4_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_5_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_6_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_7_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_8_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_9_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_10_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_11_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->perimetro_12_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Formula</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_1_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_2_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_3_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_4_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_5_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_6_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_7_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_8_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_9_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_10_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_11_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->formula_12_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Dieta</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->dieta_1_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->dieta_2_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->dieta_3_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Lib orales</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_1_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_2_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_3_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_4_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_5_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_6_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_7_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_8_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_9_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_10_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_11_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lib_orales_12_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Total</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->total_1_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->total_2_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->total_3_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Liquidos Parentales</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->liquidos_parentales_1_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->liquidos_parentales_2_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->liquidos_parentales_3_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Electrolitos y/o Hemoderivados</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->electrolitos_1_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->electrolitos_2_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->electrolitos_3_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Total</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->total_electrolitos_1_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->total_electrolitos_2_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->total_electrolitos_3_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Uresis</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->uresis_1_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->uresis_2_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->uresis_3_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Evacuaciones</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->evacuaciones_1_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->evacuaciones_2_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->evacuaciones_3_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Vómitos, succión y drenajes</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->vomito_1_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->vomito_2_seccion10 }}</td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->vomito_3_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Laboratorio y productos biológicos</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_1_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_2_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_3_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_4_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_5_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_6_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_7_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_8_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_9_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_10_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_11_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_12_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">Reactivos</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_1_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_2_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_3_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_4_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_5_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_6_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_7_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_8_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_9_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_10_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_11_seccion10 }}</td>
                    <td colspan="2" style="font-size:12px; border: 1px solid; padding: 0px;">{{ $hojaEnfermeria2->lab_12_seccion10 }}</td>
                </tr>
                <tr>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        <h3 class="text-center">Cateter Corto Periferico</h3>
                    </td>
                    <td colspan="10" style="font-size:12px; border: 1px solid; padding: 0px;">
                        <h3 class="text-center">No. Punciones</h3>
                    </td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        <h3 class="text-center">Cateter Central y/o Implantable (porthcat)</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Dolor
                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeria->cateter_corto_dolor_seccion10 }}
                    </td>
                    <td colspan="10">
                        {{ $hojaEnfermeria->cateter_corto_numero_punciones_seccion10 }}
                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Dolor
                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeria->cateter_central_dolor_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Calor
                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeria->cateter_corto_calor_seccion10 }}
                    </td>
                    <td colspan="10">

                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Calor
                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeria->cateter_central_calor_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Rubor
                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeria->cateter_corto_rubor_seccion10 }}
                    </td>
                    <td colspan="10">

                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Rubor
                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeria->cateter_central_rubor_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Recanaliza
                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeria->cateter_corto_recanaliza_seccion10 }}
                    </td>
                    <td colspan="10">

                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Recanaliza
                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeria->cateter_central_recanaliza_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Cateter No.
                    </td>
                    <td colspan="4" style="font-size:12px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeria->cateter_corto_numero_seccion10 }}
                    </td>
                    <td colspan="10">

                    </td>
                    <td colspan="8" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Aguja Gripper y/o Huber Calibre
                    </td>
                </tr>
                <tr>
                    <td colspan="26" style="font-size:12px; border: 1px solid; padding: 0px;">
                        Dieta: {{ $hojaEnfermeria->dieta_seccion10 }}
                    </td>
                </tr>

                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        Fecha
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        Medicamentos
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        Dosis
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        Via
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        Horarios
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span>{{ $hojaEnfermeria->fecha_1_seccion10 }}
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span>{{ $hojaEnfermeria->medicamentos_1_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span>{{ $hojaEnfermeria->dosis_1_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span>{{ $hojaEnfermeria->via_1_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        {{ $hojaEnfermeria->horarios_1_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->fecha_2_seccion10 }}
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->medicamentos_2_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->dosis_2_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->via_2_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->horarios_2_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->fecha_3_seccion10 }}
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->medicamentos_3_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->dosis_3_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->via_3_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->horarios_3_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->fecha_4_seccion10 }}
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->medicamentos_4_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->dosis_4_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->via_4_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->horarios_4_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->fecha_5_seccion10 }}
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->medicamentos_5_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->dosis_5_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->via_5_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->horarios_5_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->fecha_6_seccion10 }}
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->medicamentos_6_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->dosis_6_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->via_6_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->horarios_6_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->fecha_7_seccion10 }}
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->medicamentos_7_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->dosis_7_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->via_7_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->horarios_7_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->fecha_8_seccion10 }}
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->medicamentos_8_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->dosis_8_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->via_8_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->horarios_8_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->fecha_9_seccion10 }}
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->medicamentos_9_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->dosis_9_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->via_9_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->horarios_9_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->fecha_10_seccion10 }}
                    </td>
                    <td colspan="6" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->medicamentos_10_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->dosis_10_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->via_10_seccion10 }}
                    </td>
                    <td colspan="5" style="font-size:12px; border: 1px solid; padding: 0px;" >
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeria->horarios_10_seccion10 }}
                    </td>
                </tr>

                @endif
                
            </tbody>
        </table>

      
        @if($hojaEnfermeria != null)
            <div style="page-break-before:always">&nbsp;</div> 
        @endif

        <table>
            <tbody>
                <tr>
                    <td colspan="20">
                        <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                    </td>
                    <td colspan="6">
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
                    <td colspan="26">
                        <h3 class="text-center">HOJA DE REGISTRO DE ENFERMERIA EN UNIDAD QUIRURGICA</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="20" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Paciente: {{ $clientes->name }} {{ $clientes->apePat }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        FDN: {{ $hojaEnfermeriaUnidadQuirurgica->fdn_seccion9 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Edad: {{ $clientes->edad }}
                    </td>
                </tr>
                <tr>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Sexo: @if($clientes->sexo == 1) Masculino @else Femenino @endif
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Habitación: {{ $hojaEnfermeriaUnidadQuirurgica->habitacion_seccion9 }}
                    </td>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Médico Tratatnte: {{ $hojaEnfermeriaUnidadQuirurgica->medico_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Signos vitales: {{ $hojaEnfermeriaUnidadQuirurgica->signos_vitales_seccion9 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        T.A: {{ $hojaEnfermeriaUnidadQuirurgica->ta_seccion9 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        F.C: {{ $hojaEnfermeriaUnidadQuirurgica->fc_seccion9 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        F.R: {{ $hojaEnfermeriaUnidadQuirurgica->fr_seccion9 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        T.C: {{ $hojaEnfermeriaUnidadQuirurgica->tc_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Peso: {{ $hojaEnfermeriaUnidadQuirurgica->peso_seccion9 }}
                    </td>
                    <td colspan="2" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Talla: {{ $hojaEnfermeriaUnidadQuirurgica->talla_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Diagnostico Preoperatorio: {{ $hojaEnfermeriaUnidadQuirurgica->diagnostico_pre_operatorio_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Cirugía proyectada: {{ $hojaEnfermeriaUnidadQuirurgica->cirugia_proyectada_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="13" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Tipo de cirugia: {{ $hojaEnfermeriaUnidadQuirurgica->tipo_cirugia_seccion9 }}
                    </td>
                    <td colspan="13" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Tipo de cirugia: {{ $hojaEnfermeriaUnidadQuirurgica->estado_actual_paciente_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Vendaje de MPI:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->vendaje_mpi_seccion9 }}
                    </td>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Alergias:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->alergia_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Tricotomía:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->tricotomia_seccion9 }}
                    </td>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Patología relevantes:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->patologías_relevantes_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Protesis:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->protesis_seccion9 }}
                    </td>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Estudios preoperatorios:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->estudios_preoperatorios_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Maquillaje o esmalte:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->protesis_seccion9 }}
                    </td>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Valoración preoperatoria:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->valoracion_preoperatoria_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Marcado quirurgico:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->marcado_seccion9 }}
                    </td>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Sangre reserva:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sangre_reserva_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Ayuno:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->marcado_seccion9 }}
                    </td>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Grupo y RH Sanguíneo:
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sangre_reserva_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Observaciones: {{ $hojaEnfermeriaUnidadQuirurgica->observaciones_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="13">
                        Enfermera: {{ $hojaEnfermeriaUnidadQuirurgica->enfermera_seccion9 }}
                    </td>
                    <td colspan="13">
                        Turno: {{ $hojaEnfermeriaUnidadQuirurgica->turno_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Sala quirurgica: {{ $hojaEnfermeriaUnidadQuirurgica->sala_quirurgica_seccion9 }}
                    </td>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Se llevó a cabo "Time-out": {{ $hojaEnfermeriaUnidadQuirurgica->time_out_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Razón: {{ $hojaEnfermeriaUnidadQuirurgica->razon_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Cirugia realizada: {{ $hojaEnfermeriaUnidadQuirurgica->cirugia_realizada_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Cirujano: {{ $hojaEnfermeriaUnidadQuirurgica->cirujano_seccion9 }}
                    </td>
                    <td colspan="10" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Anestesiologo: {{ $hojaEnfermeriaUnidadQuirurgica->anestesiologo_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Instrumentista: {{ $hojaEnfermeriaUnidadQuirurgica->instrumentista_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        1er ayudante: {{ $hojaEnfermeriaUnidadQuirurgica->primer_ayudante_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        2do ayudante: {{ $hojaEnfermeriaUnidadQuirurgica->segundo_ayudante_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Circulante: {{ $hojaEnfermeriaUnidadQuirurgica->circular_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Cirujano: {{ $hojaEnfermeriaUnidadQuirurgica->cirujano_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Anestesiologo: {{ $hojaEnfermeriaUnidadQuirurgica->anestesiologo_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Instrumentista: {{ $hojaEnfermeriaUnidadQuirurgica->instrumentista_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Inicio Anestesia: {{ $hojaEnfermeriaUnidadQuirurgica->inicio_anestesia_seccion9 }}
                    </td>
                    <td colspan="18" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Tipo Anestesia: {{ $hojaEnfermeriaUnidadQuirurgica->tipo_anestesia_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Inicio Anestesia: {{ $hojaEnfermeriaUnidadQuirurgica->inicio_anestesia_seccion9 }}
                    </td>
                    <td colspan="18" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Tipo Anestesia: {{ $hojaEnfermeriaUnidadQuirurgica->tipo_anestesia_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Inicio CX: {{ $hojaEnfermeriaUnidadQuirurgica->inicio_cx_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Termino CX: {{ $hojaEnfermeriaUnidadQuirurgica->termino_cx_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Termino de anestesia: {{ $hojaEnfermeriaUnidadQuirurgica->termino_anestesia_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Egreso sala: {{ $hojaEnfermeriaUnidadQuirurgica->egreso_sala_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Medicamentos
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Dosis
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Vía
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                       Hora
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Líquidos
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Vol
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Vía
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Hora
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->medicamentos_1_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->dosis_1_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->via_1_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->hora_1_seccion10 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_1_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_volumen_1_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_via_1_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_hora_1_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->medicamentos_2_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->dosis_2_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->via_2_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->hora_2_seccion10 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_2_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_volumen_2_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_via_2_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_hora_2_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->medicamentos_3_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->dosis_3_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->via_3_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->hora_3_seccion10 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_3_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_volumen_3_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_via_3_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_hora_3_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->medicamentos_4_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->dosis_4_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->via_4_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->hora_4_seccion10 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_4_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_volumen_4_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_via_4_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_hora_4_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->medicamentos_5_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->dosis_5_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->via_5_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->hora_5_seccion10 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_5_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_volumen_5_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_via_5_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_hora_5_seccion10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->medicamentos_6_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->dosis_6_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->via_6_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->hora_6_seccion10 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_6_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_volumen_6_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_via_6_seccion10 }}
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span> {{ $hojaEnfermeriaUnidadQuirurgica->liquidos_hora_6_seccion10 }}
                    </td>
                </tr>

                <tr>
                    <td colspan="20" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Cuenta Textil
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Egresos
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Antes
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Después
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Uresis: {{ $hojaEnfermeriaUnidadQuirurgica->uresis_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Gasas
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->gasas_antes_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->gasas_despues_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Sangrado: {{ $hojaEnfermeriaUnidadQuirurgica->sangrado_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Compresas
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->compresas_antes_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->compresas_despues_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Cotonoides
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->cotonoides_antes_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->cotonoides_despues_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Isopos
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->isopos_antes_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->isopos_despues_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Torundas
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->torundas_antes_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->torundas_despues_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Otros:
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->otros_antes_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->otros_despues_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Otros:
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->otros_2_antes_seccion9 }}
                    </td>
                    <td colspan="8" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->otros_2_despues_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="20" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Cuenta Completa: {{ $hojaEnfermeriaUnidadQuirurgica->cuenta_completa_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="20" style="font-size:10px; border: 1px solid; padding: 0px;">
                        hora: {{ $hojaEnfermeriaUnidadQuirurgica->hora_seccion9 }}
                    </td>
                    <td colspan="6" style="font-size:10px; border: 1px solid; padding: 0px;">
                        
                    </td>
                </tr>

                <tr>
                    <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Nota quirurgica: {{ $hojaEnfermeriaUnidadQuirurgica->nota_quirurgica_seccion9 }}
                    </td>
                </tr>

                <tr>
                    <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                       Fecha y hora de ingresos a cuidados a post - operatorios: {{ $hojaEnfermeriaUnidadQuirurgica->fecha_hora_cuidados_post_operatorios_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                        DESTINO POST – QUIRURGICO: “SALA DE RECUPERACIÓN”, “HABITACIÓN – SALA GENERAL” O “U. DE CUIDADOS INTENSIVOS / INTERMEDIOS”
                    </td>
                </tr>

                <tr>
                    <td colspan="26">
                        
                    </td>
                </tr>

                <tr>
                    <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                        <h3 class="text-center">Monitorización del paciente</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Ingreso
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        15 minutos
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        30 minutos
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        45 minutos
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        60 minutos
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        > 60 minutos
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        TA (mmhg)
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->ta_ingreso_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->ta_15min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->ta_30min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->ta_45min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->ta_60min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->ta_60minmass_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        FC (Ipm)
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fc_ingreso_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fc_15min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fc_30min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fc_45min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fc_60min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fc_60minmass_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        FR (rpm)
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fr_ingreso_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fr_15min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fr_30min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fr_45min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fr_60min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->fr_60minmass_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        TC °C
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->tc_ingreso_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->tc_15min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->tc_30min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->tc_45min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->tc_60min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->tc_60minmass_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        SaO2 (%)
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_ingreso_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_15min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_30min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_45min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_60min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_60minmass_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        EVA (0-10)
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->eva_ingreso_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->eva_15min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->eva_30min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->eva_45min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->eva_60min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->eva_60minmass_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Aldrete (0-10)
                    </td>
                    <td colspan="3" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_ingreso_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_15min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_30min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_45min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_60min_seccion9 }}
                    </td>
                    <td colspan="4" style="font-size:10px; border: 1px solid; padding: 0px;">
                        {{ $hojaEnfermeriaUnidadQuirurgica->sa02_60minmass_seccion9 }}
                    </td>
                </tr>

                <tr>
                    <td colspan="26">

                    </td>
                </tr>

                <tr>
                    <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                        Nota de recuperacion: {{ $hojaEnfermeriaUnidadQuirurgica->nota_recuperacion_seccion9 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="26" style="font-size:10px; border-top: 1px solid; padding: 0px;">
                        <span style="visibility:hidden">h</span>
                    </td>
                </tr>
                {{--<tr>
                    <td colspan="7">
                        Fecha y hora cuidados Operatorios: {{ $hojaEnfermeriaUnidadQuirurgica->fecha_hora_cuidados_post_operatorios_seccion9 }}
                    </td>
                    <td colspan="7">
                        Enfermera (O) TM: {{ $hojaEnfermeriaUnidadQuirurgica->enfermera_seccion9 }}
                    </td>
                    <td colspan="6">
                        T.V: 
                    </td>
                    <td colspan="6">

                    </td>
                </tr>--}}

                
            </tbody>
        </table>

        <div style="page-break-before:always">&nbsp;</div> 

        <table style="width: 100%;">

            <tbody>

            
            <tr>
                <td colspan="20">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="6">
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
                <td colspan="26">
                    <h3 class="text-center">NOTA POSTOPERATORIA</h3>
                </td>
            </tr>
            <tr>
                <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                    Habitación: @if($notaPostOperatoria != null) {{ $notaPostOperatoria->habitacion_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                    Diagnostico pre-operatorio: @if($notaPostOperatoria != null) {{ $notaPostOperatoria->diagnostico_pre_operatorio_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                    Operacion planeada: @if($notaPostOperatoria != null) {{ $notaPostOperatoria->operacion_planeada_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                    Diagnostico post-operatorio: @if($notaPostOperatoria != null) {{$notaPostOperatoria->diagnostico_post_operatorio_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td colspan="26" style="font-size:10px; border: 1px solid; padding: 0px;">
                    Operacion realizada: @if($notaPostOperatoria != null) {{$notaPostOperatoria->operacion_realizada_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Descripción de la técnica quirurgica: @if($notaPostOperatoria != null) {{$notaPostOperatoria->descripcion_tecnica_quirurgica_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Hallazgos trans-operatorios: @if($notaPostOperatoria != null) {{$notaPostOperatoria->hallazgos_transoperatorios_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Reporte gasas y compresas: @if($notaPostOperatoria != null) {{$notaPostOperatoria->reporte_gasas_compresas_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Incidentes y accidentes: @if($notaPostOperatoria != null) {{$notaPostOperatoria->incidentes_accidentes_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Sangrado: @if($notaPostOperatoria != null) {{$notaPostOperatoria->sangrado_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    ESTUDIOS DE SERVICIOS AUXICILIARES DE DIAGNOSTICO Y TRATAMIENTO TRANSOPERATORIOS: @if($notaPostOperatoria != null) {{$notaPostOperatoria->estudios_servicios_auxiliares_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Nombre del anestesiologo: @if($notaPostOperatoria != null) {{$notaPostOperatoria->nombre_anestesiologo_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Nombre del ayudante1: @if($notaPostOperatoria != null) {{$notaPostOperatoria->nombre_ayudante1_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Nombre del ayudante2: @if($notaPostOperatoria != null) {{$notaPostOperatoria->nombre_ayudante2_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Nombre del instrumentista: @if($notaPostOperatoria != null) {{$notaPostOperatoria->nombre_instrumentista_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Nombre de enfermera circulante: @if($notaPostOperatoria != null) {{$notaPostOperatoria->nombre_enfermera_circulante_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Estado post-quirurgico inmediato: @if($notaPostOperatoria != null) {{$notaPostOperatoria->estado_postquirurgico_inmediato_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Pronostico: @if($notaPostOperatoria != null) {{$notaPostOperatoria->pronostico_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    ENVIO DE PIEZAS O BIOPSIAS QUIRURGICAS PARA EXAMEN MACROSCOPICO E HISTOPATOLÓGICO: @if($notaPostOperatoria != null) {{$notaPostOperatoria->envio_piezas_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Otros hallazgos: @if($notaPostOperatoria != null) {{$notaPostOperatoria->otros_hallazgos_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Nombre del cirujano: @if($notaPostOperatoria != null) {{$notaPostOperatoria->nombre_cirujano_seccion4 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Firma:
                </td>
            </tr>

            </tbody>
        
        </table>
            <div style="page-break-before:always">&nbsp;</div>

        <table style="width: 100%;">
            <tbody>
                    <tr>
                    <td colspan="20">
                        <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                    </td>
                    <td colspan="6">
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
                    <td style="font-size:10px; border: none; padding: 0px;" colspan="26">
                        <h1 class="text-center">Indicaciones Post Quirurgicas</h1>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="20">
                        Nombre: {{ $clientes->name }} {{ $clientes->apePat }}
                    </td>
                    <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="6">
                        Edad: {{ $clientes->edad }}
                    </td>
                </tr>
                <tr>
                    <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                        <span style="visibility: hidden">h</span>@if($indicaciones != null){{ $indicaciones->indicaciones_seccion5 }}@endif
                    </td>
                </tr>
            </tbody>
        </table>

            <div style="page-break-before:always">&nbsp;</div>

        <table style="width: 100%">
            <tbody>
            <tr>
                <td colspan="20">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="6">
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
                <td style="font-size:10px; border: none; padding: 0px;" colspan="26">
                    <h1 class="text-center">Nota Médica</h1>
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="20">
                    Nombre: {{$clientes->name}} {{$clientes->apePat}}
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="6">
                    Edad:{{$clientes->edad}}
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="4">
                    Sexo:@if($clientes->sexo == 1) Masculino @else Femenino @endif
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="4">
                    Talla:{{ $clientes->talla_seccion3 }}
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="4">
                    TA:{{ $clientes->ta_seccion3 }}
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="4">
                    FC:{{ $clientes->fc_seccion3 }}
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="4">
                    FR:{{ $clientes->fr_seccion3 }}
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="6">
                    TEMP:{{ $clientes->temp_seccion3 }}
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    <span style="visibility:hidden">h</span>@if($notaMedica != null) {{ $notaMedica->nota_medica_seccion6 }} @endif
                </td>
            </tr>
            </tbody>
        </table>

        <div style="page-break-before:always">&nbsp;</div>
        
        <table style="width: 100%">
            <tbody>
            <tr>
                <td colspan="20">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="6">
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
                <td style="font-size:10px; border: none; padding: 0px;" colspan="26">
                    <h1 class="text-center">Nota de Egreso</h1>
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="13">
                    Nombre: {{$clientes->name}} {{$clientes->apePat}}
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="13">
                    Edad:{{$clientes->edad}}
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="4">
                    Sexo: @if($clientes->sexo == 1) Masculino @else Femenino @endif
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="4">
                    Talla:{{ $clientes->talla_seccion3 }}
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="4">
                    TA:{{ $clientes->ta_seccion3 }}
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="4">
                    FC:{{ $clientes->fc_seccion3 }}
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="4">
                    FR:{{ $clientes->fr_seccion3 }}
                </td>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="6">
                    TEMP:{{ $clientes->temp_seccion3 }}
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Fecha Ingreso: @if($notaEgreso != null) {{ $notaEgreso->fechaIngreso_seccion7 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Fecha Egreso: @if($notaEgreso != null) {{ $notaEgreso->fechaEgreso_seccion7 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Motivo de Egreso: @if($notaEgreso != null) {{ $notaEgreso->motivoEgreso_seccion7 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Diagnosticos Finales: @if($notaEgreso != null) {{ $notaEgreso->diagnosticoFinal_seccion7 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Resumen Clinico: @if($notaEgreso != null) {{ $notaEgreso->resumenClinico_seccion7 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Problemas clinico pendientes: @if($notaEgreso != null) {{ $notaEgreso->problemasClinicos_seccion7 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Plan: @if($notaEgreso != null) {{ $notaEgreso->plan_seccion7 }} @endif
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Recomendaciones para vigilancia ambulatoria: @if($notaEgreso != null) {{ $notaEgreso->recomendacionesVigilancia_seccion7 }} @endif
                </td>
            </tr>
            </tbody>
        </table>

            <div style="page-break-before:always">&nbsp;</div>
        
        <table style="width: 100%;">
            <tbody>
            <tr>
                <td colspan="20">
                    <img src="{{ public_path('/dist/img/logo_jeune.png') }}" alt="">
                </td>
                <td colspan="6">
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
                <td style="font-size:10px; border: none; padding: 0px;" colspan="26">
                    <h1 class="text-center">Nota de Seguimiento Post-Quirurgico</h1>
                </td>
            </tr>
            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Nombre: {{$clientes->name}} {{$clientes->apePat}}
                </td>
            </tr>

            <tr>
                <td style="font-size:10px; border: 1px solid; padding: 0px;" colspan="26">
                    Resumen de seguimiento y fecha: @if($seguimiento != null) {{$seguimiento->resumen_seccion8}} @endif
                </td>
            </tr>


            
        </tbody>
    </table>

    

</body>
</html>