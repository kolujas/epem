<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta name="google-site-verification" content="vxyPdxyaKSRN-iZo7TXNI_aIwLbJhqSyAC2Tb0bPR8o" />

        <!--CSS-->
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        
        @yield('css')

        <title>@yield('titulo')</title>
    </head>
    <body>
        <header id="header">
            <section>
                @yield('nav')
            </section>
        </header>
          
        <main>
            @yield('main')
        </main>

        <footer class="row justify-content-center">
            <section class="col-12 col-lg-10 col-xl-8">
                @yield('footer')
            </section>
        </footer>


        <script type="text/javascript" src="{{ asset('js/bootstrap/jquery-3.4.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('https://unpkg.com/scrollreveal') }}"></script>
        <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/scrollReveal.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/headroom.js') }}"></script>

        @yield('js')
    </body>
</html>