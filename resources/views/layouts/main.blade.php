<!DOCTYPE html>
<html lang="es-MX" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href={{ asset('vendor/bootstrap/css/bootstrap.min.css') }}>
    </head>
    <body>
        @yield('main_container')
        <script src={{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
        {{-- <script src={{ asset('js/main.js') }}></script> --}}
    </body>
</html>