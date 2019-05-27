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
    <div class="container-fluid">
        <div class="row">
            <div class="banner col-md-12 px-0 mx-0 mb-5 mt-0">
                <img class="img-fluid" src="img/banner.jpg" alt="">        
            </div>
   
            <div class="nuestros-servicios col-12">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center text-uppercase h3">Nuestros servicios</h2>
                    </div>

                    <div class="col-12">
                        <h3 class="text-center h5">Cómo podemos ayudarte</h3>
                    </div>

                    <ul class="lista-servicios fa-ul mt-4 col-10">
                        <li><span class="fa-li" ><i class="fas fa-check-square"></i></span>Proveemos una alimentación sana.</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Estimulamos la autonomía en las actividades de la vida diaria.</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Proporcionamos el apoyo para cada nivel de la necesidad, incluyendo incontinencia, movilidad y alimentación.</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Ofrecemos un marco adecuado para el desarrollo de relaciones y actividades sociales gratificantes.</li>
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Realizamos programas especiales para personas con diagnóstico de Alzheimer u otras demencias.</li>
                    </ul>

                    <figure class="col-10">
                        <img src="img/ancianos_piolas.jpg" class="img-fluid my-4" alt="Responsive image">
                    </figure>
                </div>
            </div>

            <div class="col-12 solucion-familias">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center text-uppercase h4">Creemos en una solución para las familias</h2>
                    </div>

                    <div class="col-10">    
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo omnis expedita consectetur facilis tempore, similique voluptatibus quaerat culpa est voluptatum.</p>
                    </div>
                </div>
            </div>

            <button type="button" class="btn-lg btn-primary m-auto btnContact">Contactate</button>
            
            <div class="el-mejor col-12 mt-4">
                <div class="row justify-content-center">
                    <figure class="col-10">
                        <img src="img/ancianos_piolas.jpg" class="img-fluid my-4" alt="Responsive image">
                    </figure>

                    <div class="col-12">
                        <h2 class="text-center text-uppercase el-club">El club</h2>
                    </div>

                    <div class="div-lista-solucion m-auto col-8">
                        <ul class="lista-solucion fa-ul mt-4">
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
            </div>

            <div class="el-club col-12 mt-4">
                <div class="row justify-content-around">
                    <figure class="col-6">
                        <img src="img/ancianos_piolas.jpg" class="img-fluid" alt="Responsive image">
                    </figure>

                    <figure class="col-6">
                        <img src="img/ancianos_piolas.jpg" class="img-fluid" alt="Responsive image">
                    </figure>
                </div>
            </div>

            <div class="contacto col-12 my-5 contacto">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center text-uppercase h3">Contacto</h2>
                    </div>
                    
                    <form class="col-10">
                        <div class="row justify-content-center">
                            <div class="form-group col-12">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" id="nombre" type="text" placeholder="Nombre">
                            </div>

                            <div class="form-group col-12">
                                <label for="telefono">Teléfono</label>
                                <input class="form-control" id="telefono" type="text" placeholder="Telefono">
                            </div>

                            <div class="form-group col-12">
                                <label for="formEmail">Email</label>
                                <input type="email" class="form-control" id="formEmail" aria-describedby="emailHelp" placeholder="Email">
                            </div>

                            <div class="form-group col-12">
                                <label for="formMensaje">Mensaje</label>
                                <textarea class="form-control" id="formMensaje" rows="3" placeholder="Mensaje"></textarea>
                            </div>
                        
                            <div class="col-12">
                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary enviarForm">Enviar</button>    
                                </div>
                            </div>
                        </div>
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