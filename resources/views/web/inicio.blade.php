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
                <h2 class="h1 text-center text-white">Centro para personas mayores</h2>
                <p class="h4 text-white px-5 text-center">Desarrollamos un modelo integral centrado en personas mayores que desean interactuar con otros y participar en actividades recreativas y terapéuticas</p>       
            </div>
   
            <div class="nuestros-servicios col-12">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center text-uppercase h3">Nuestros servicios</h2>
                        <h3 class="text-center h5">Cómo podemos ayudarte</h3>
                    </div>

                    <div class="row cartas">
                        <div class="col-sm-6 my-2 primer-card">
                            <div class="card">
                            <div class="card-body row">
                            <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                                <p class="card-text">Proveemos una alimentación sana.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6 my-2">
                            <div class="card">
                            <div class="card-body row">
                            <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                                <p class="card-text">Estimulamos la autonomía en las actividades de la vida diaria.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6 my-2">
                            <div class="card">
                            <div class="card-body row">
                                <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                                <p class="card-text">Proporcionamos el apoyo para cada nivel de la necesidad, incluyendo incontinencia, movilidad y alimentación.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6 my-2">
                            <div class="card">
                            <div class="card-body row">
                                <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                                <p class="card-text">Ofrecemos un marco adecuado para el desarrollo de relaciones y actividades sociales gratificantes.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6 my-2">
                            <div class="card">
                            
                            <div class="card-body row">
                                <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-2"></i></span>
                                <p class="card-text">Realizamos programas especiales para personas con diagnóstico de Alzheimer u otras demencias.</p>
                            </div>
                            </div>
                        </div>
                        </div>

                
                    <figure class="col-10">
                            <img src="img/ancianos_piolas.jpg" class="img-fluid my-4" alt="Responsive image">
                    </figure>
                </div>
                
            </div>

            <div class="col-12 solucion-familias bg-dark text-white px-0 mx-0 py-4">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center text-uppercase h4">Creemos en una solución para las familias</h2>
                    </div>

                    <div class="col-12 text-center ">    
                        <p class="mt-4">Buscamos una solución para las familias. Creemos en una conciliación familiar - laboral de aquellas personas que se encuentran a cargo de mayores con algún retoque de cuidado o asistencia. Queremos aportar a las familias y cuidadores los conocimiento necesarios para la realización de las tareas de asistencia.</p>
                    </div>
                </div>
                <div class="col-12 text-center">
                <button type="button" class="btn-lg btn-primary m-auto btnContact">Contactate</button>
                </div>
            </div>
            
            <div class="el-mejor col-12 mt-4">
                <div class="row justify-content-center">
                    <figure class="col-10">
                        <img src="img/ancianos_piolas.jpg" class="img-fluid my-4" alt="Responsive image">
                    </figure>

                    <div class="col-12">
                        <h2 class="text-center text-uppercase el-equipo">El club</h2>
                    </div>

                    <div class="club div-lista-solucion m-auto col-8">
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
            <div class="row justify-content-around col-12">
                    <div class="col-12">
                        <h2 class="text-center text-uppercase h3">El equipo</h2>
                    </div>
                    <div class="card col-12 col-md-5 my-3">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card col-12 col-md-5 my-3">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card col-12 col-md-5 my-3">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card col-12 col-md-5 my-3">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card col-12 col-md-5 my-3">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card col-12 col-md-5 my-3">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
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