<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--CSS-->
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        
        @yield('css')

        <title>@yield('titulo')</title>
    </head>
    <body>
        <header>
            <section>
                @yield('nav')
            </section>
        </header>

        @if(Session::has('status'))
          <div id="notificacion">
            <p>{{ Session::get('status') }}</p>
          </div>
        @endif
          
        <main>
            @yield('main')
        </main>

        <script type="text/javascript" src="{{ asset('js/bootstrap/jquery-3.4.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

        <footer class="row justify-content-center">
            <section class="col-10">
                @yield('footer')
            </section>
        </footer>
    </body>
</html>