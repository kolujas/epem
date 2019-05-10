@extends('layout.index')

@section('css')
    <link href="{{ asset('css/web/inicio.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Inicio
@endsection

@section('nav')
    @component('components.nav')
    @endcomponent
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="nuestros-servicios col-12">
                <h2 class="text-center text-uppercase h3">Nuestros servicios</h2>
                <h3 class="text-center h5">Cómo podemos ayudarte</h3>

                <ul class="lista-servicios fa-ul px-3 mt-4">
                    <li><span class="fa-li" ><i class="fas fa-check-square"></i></span>Proveemos una alimentación sana.</li>
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Estimulamos la autonomía en las actividades de la vida diaria.</li>
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Proporcionamos el apoyo para cada nivel de la necesidad, incluyendo incontinencia, movilidad y alimentación.</li>
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Ofrecemos un marco adecuado para el desarrollo de relaciones y actividades sociales gratificantes.</li>
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Realizamos programas especiales para personas con diagnóstico de Alzheimer u otras demencias.</li>
                </ul>
                <img src="img/ancianos_piolas.jpg" class="img-fluid px-4 my-4" alt="Responsive image">
            </div>

            <div class="col-12 solucion-familias">
                <h2 class="text-center text-uppercase h4">Creemos en una solución para las familias</h2>
                <p class="px-3 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo omnis expedita consectetur facilis tempore, similique voluptatibus quaerat culpa est voluptatum.</p>
            </div>

            <button type="button" class="btn btn-primary m-auto btnContact">Contactate</button>
            
            <div class="el-mejor col-12 mt-4">
                <img src="img/ancianos_piolas.jpg" class="img-fluid px-4 my-4" alt="Responsive image">

            <h2 class="text-center el-club">El club</h2>
                <div class="div-lista-solucion m-auto row col-9">
                    <ul class="lista-solucion fa-ul px-3 mt-4">
                        <li><span class="fa-li" ><i class="fas fa-check-square"></i></span>Supervisón médica</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Área de nutrición</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Asistencia geriátrica</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Kinesiología</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Psicología</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Trabajo social</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Prof eduación física</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Talleristas</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Personal administrativo</li>
                    </ul>
                </div>
            </div>

            <div class="el-club col-12 mt-4 ml-1 mr-1 row">
                <div class="col-6">
                    <img src="img/ancianos_piolas.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-6">
                    <img src="img/ancianos_piolas.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
            <div class="contacto mt-5 m-auto">
                <div class="contacto col-12 my-5 row mx-auto">
                    <form class="col-12">
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
                        
                        <button type="submit" class="btn btn-primary w-50 align-middle">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection