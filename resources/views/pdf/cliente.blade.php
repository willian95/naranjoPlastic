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

            

            
        </tbody>
    </table>

</body>
</html>