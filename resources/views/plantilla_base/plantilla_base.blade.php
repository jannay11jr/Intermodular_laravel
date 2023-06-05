
<html>
    <head>
        <title>
        @yield('titulo')
        </title>
        @vite(['resources/sass/app.scss', 'resources/js/bootstrap.js'])
        <style>
            .nav-a {
                margin-bottom: 70px;
            }
            .fecha {
                text-align:right;
            }


        </style>

    </head>
    <body>
            <div class="nav-a">
            @extends('nav-bar/nav-bar')
            </div>
        <div>
            <div class="fecha">
            {{ fechaActual('d/m/Y') }}
            </div>
        @yield('contenido')
        </div>
    </body>
</html>
