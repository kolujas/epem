<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--CSS-->
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        @yield('css')

        <title>@yield('titulo')</title>
    </head>
    <body>
        <header>
            <h1><a href="/">Home</a></h1>
            <nav>
                <u>
                    @if(!Auth::check())
                        <li><a href="/ingresar">Ingresar</a></li>
                        <li><a href="/registrar">Registrarse</a></li>
                    @else
                        <li><a href="/panel">Panel</a></li>
                        @if(Auth::user()->nivel->id_nivel == 2)
                            <li><a href="/noticia/crear">Crear Noticia</a></li>
                        @endif
                        <li><a href="/salir">Cerrar Sesión</a></li>
                    @endif
                </u>
            </nav>
        </header>

        @if(Session::has('status'))
          <div id="notificacion">
            <p>{{ Session::get('status') }}</p>
          </div>
        @endif
          
        <main>
            @yield('main')
        </main>
    </body>
</html>