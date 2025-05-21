<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Mi CV Online')</title> {{-- Título dinámico para cada página --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('head_extra') {{-- Para CSS o scripts adicionales por página --}}
    </head>
    <body>
        <div class="container mt-4">
        {{-- Aquí se cargará el contenido específico de cada sección del CV --}}
        @yield('content')
        </div>

        @yield('scripts_extra') {{-- Para scripts JavaScript adicionales por página --}}
    </body>
</html>