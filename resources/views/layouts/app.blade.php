<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NARANJO PLASTIC | CPTV</title>
    <link rel="icon" type="image/png" href="logotipo_narnajo.png" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet" type="text/css">


</head>
<body style="background-image: url(fondo8.jpg);" >
    <div id="app" >
 

        <main class="py-4" >
        <br> 
        <br>
        <br>
        <br>
            @yield('content')
        </main>
    </div>
</body>
</html>
