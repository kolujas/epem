@extends('layout.index')

@section('css')
    <link href="{{ asset('css/web/inicio.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Inicio
@endsection


@section('main')
    <section>
        <header>
        @component('components.nav')
        @endcomponent
        </header>
    </section>

    <div class="container">
        <div class="row">
            <div class="nuestros-servicios col-12">
                <h2 class="text-center">Nuestros servicios</h2>
                <h3 class="text-center">Cómo podemos ayudarte</h3>
                <ul>
                    <li>Proveemos una alimentación sana.</li>
                    <li>Estimulamos la autonomía en las actividades de la vida diaria.</li>
                    <li>Proporcionamos el apoyo para cada nivel de la necesidad, incluyendo incontinencia, movilidad y alimentación.</li>
                    <li>Ofrecemos un marco adecuado para el desarrollo de relaciones y actividades sociales gratificantes.</li>
                    <li>Realizamos programas especiales para personas con diagnóstico de Alzheimer u otras demencias.</li>
                </ul>
                <img src="img/ancianos_piolas.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-12">
                <h2>Creemos en una solución para las familias</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo omnis expedita consectetur facilis tempore, similique voluptatibus quaerat culpa est voluptatum.</p>
            </div>
            <button type="button" class="btn btn-primary m-auto">Contactate</button>
            <div class="el-mejor col-12 mt-4">
                <img src="img/ancianos_piolas.jpg" class="img-fluid" alt="Responsive image">

                <ul class="mt-4">
                    <li>Proveemos una alimentación sana.</li>
                    <li>Estimulamos la autonomía en las actividades de la vida diaria.</li>
                    <li>Proporcionamos el apoyo para cada nivel de la necesidad, incluyendo incontinencia, movilidad y alimentación.</li>
                    <li>Ofrecemos un marco adecuado para el desarrollo de relaciones y actividades sociales gratificantes.</li>
                    <li>Realizamos programas especiales para personas con diagnóstico de Alzheimer u otras demencias.</li>
                </ul>
            </div>

            <div class="el-club col-12 mt-4 row">
                <div class="col-6">
                    <img src="img/ancianos_piolas.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-6">
                    <img src="img/ancianos_piolas.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>

            <div class="contacto col-12 mt-4 mb-5 row">
                <form class="col-12 m-auto">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" id="nombre" type="text" placeholder="Ingresa tu nombre">
                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input class="form-control" id="apellido" type="text" placeholder="Ingresa tu apellido">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input class="form-control" id="telefono" type="text" placeholder="Ingresa tu telefono">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mensaje</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe tu mensaje"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    @component('components.footer')
    @endcomponent
@endsection