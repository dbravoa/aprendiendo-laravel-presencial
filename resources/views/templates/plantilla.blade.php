<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Directivas de blade: Instrucciones que maneja el motor de plantillas, para que podamos trabajar con la plantilla cambiando ciertas partes --}}
    <title>@yield('titulo')</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @yield('contenido')
</body>

</html>
