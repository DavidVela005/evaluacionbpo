<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.js' ])
</head>
<body>
   @include('layouts.tareas.header')
   @yield('content');
</body>
</html>

