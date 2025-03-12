<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Resultados de aprendizaje')</title>
    {{-- Bootstrap 5 --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @yield('content')
</body>
</html>
