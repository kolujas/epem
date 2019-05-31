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
        <div class="row justify-content-lg-center">
            <div class="banner col-12 p-0 m-0">
                <img class="img-fluid" src="img/banner.jpg" alt="">
                <h2 class="h1 text-center text-white">Centro para personas mayores</h2>
                <p class="h4 text-white px-5 text-center">Desarrollamos un modelo integral centrado en personas mayores que desean interactuar con otros y participar en actividades recreativas y terapéuticas</p>
            </div>
   
            <div class="nuestros-servicios col-12">
                <div class="row justify-content-center">
                    <div class="col-12 my-4">
                        <h2 class="text-center text-uppercase h3">Nuestros servicios</h2>
                        <h3 class="text-center h5 m-0">Cómo podemos ayudarte</h3>
                    </div>
                <div class="card-deck cartas row col-lg-10 col-xl-8">
                    <div class="card">
                    <div class="card-body row">
                            <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                            <p class="card-text">Proveemos una alimentación sana .</p>
                        </div>
                    </div>
                    <div class="card">
                    <div class="card-body row">
                            <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                            <p class="card-text">Estimulamos la autonomía en las actividades de la vida diaria.</p>
                        </div>
                    </div>
                    <div class="card">
                    <div class="card-body row">
                            <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                            <p class="card-text">Proporcionamos el apoyo para cada nivel de la necesidad, incluyendo incontinencia, movilidad y alimentación.</p>
                        </div>
                    </div>
                </div>
                <div class="card-deck cartas row col-lg-10 col-xl-8 my-5">
                    <div class="card">
                    <div class="card-body row">
                            <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                            <p class="card-text">Ofrecemos un marco adecuado para el desarrollo de relaciones y actividades sociales gratificantes.</p>
                        </div>
                    </div>
                    <div class="card">
                    <div class="card-body row">
                            <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                            <p class="card-text">Realizamos programas especiales para personas con diagnóstico de Alzheimer u otras demencias.</p>
                        </div>
                    </div>
                </div>
                    <!-- <div class="card-group cartas row col-lg-10 col-xl-8 justify-content-around">
                        <div class="card col-12 col-md-6 col-lg-4 col-xl-4 bg-dark text-white mx-1 mb-4">
                            <div class="card-body row">
                                <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                                <p class="card-text">Proveemos una alimentación sana .</p>
                            </div>
                        </div>
                        <div class="card col-12 col-md-6 col-lg-4 col-xl-4 bg-dark text-white mb-4 mx-1">
                            <div class="card-body row">
                                <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                                <p class="card-text">Estimulamos la autonomía en las actividades de la vida diaria.</p>
                            </div>
                        </div>
                        <div class="card col-12 col-md-6 col-lg-4 col-xl-4 bg-dark text-white mb-4 mx-1">
                            <div class="card-body row">
                                <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                                <p class="card-text">Proporcionamos el apoyo para cada nivel de la necesidad, incluyendo incontinencia, movilidad y alimentación.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-group cartas row col-lg-10 col-xl-8 justify-content-around">
                        <div class="card col-12 col-md-6 col-lg-4 col-xl-4 bg-dark text-white mb-4 mx-1">
                            <div class="card-body row">
                                <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                                <p class="card-text">Ofrecemos un marco adecuado para el desarrollo de relaciones y actividades sociales gratificantes.</p>
                            </div>
                        </div>
                        <div class="card col-12 col-md-6 col-lg-4 col-xl-4 bg-dark text-white mb-4 mx-1">
                            <div class="card-body row">
                                <span class="col-12 text-center"><i class="text-primary fas fa-carrot fa-7x mb-3"></i></span>
                                <p class="card-text">Realizamos programas especiales para personas con diagnóstico de Alzheimer u otras demencias.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 -->
            <div class="col-12 solucion-familias bg-dark text-white m-0">
                <div class="row justify-content-center py-4 py-lg-5">
                    <div class="col-12">
                        <h2 class="text-center text-uppercase h4 m-0">Creemos en una solución para las familias</h2>
                    </div>

                    <div class="col-12 col-lg-10 col-xl-8 text-justify my-4">    
                        <p class="m-0">Buscamos una solución para las familias. Creemos en una conciliación familiar - laboral de aquellas personas que se encuentran a cargo de mayores con algún retoque de cuidado o asistencia. Queremos aportar a las familias y cuidadores los conocimiento necesarios para la realización de las tareas de asistencia.</p>
                    </div>

                    <div class="col-12 text-center">
                        <button type="button" class="btn-lg btn-primary m-auto btnContact">Contactate</button>
                    </div>
                </div>
            </div>
            
            <div class="el-mejor col-12 col-xl-8 py-4">
                <div class="row justify-content-center">
                    <div class="col-12 mb-4">
                        <h2 class="text-center text-uppercase el-equipo m-0">El club</h2>
                    </div>

                    <figure class="col-12 col-lg-6 col-xl-5 mb-md-4">
                        <img src="img/ancianos_piolas.jpg" class="img-fluid" alt="Responsive image">
                    </figure>

                    <div class="club div-lista-solucion col-10 col-md-6 col-lg-4 col-xl-3">
                        <ul class="lista-solucion fa-ul mb-0">
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

            <div class="row justify-content-around col-12">
                    <div class="col-12 mb-4">
                        <h2 class="text-center text-uppercase h3 m-0">El equipo</h2>
                    </div>
                    
                    <div class="card-columns cartas row col-lg-10 col-xl-8">
                        <div class="card col-12 col-md-6 col-lg-4 bg-dark text-white mb-4">
                            <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title h4 m-0 text-center">Supervisión Médica</h3>
                            </div>
                        </div>
                        <div class="card col-12 col-md-6 col-lg-4 bg-dark text-white mb-4">
                            <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title h4 m-0 text-center">Area de Nutricion</h3>
                            </div>
                        </div>
                        <div class="card col-12 col-md-6 col-lg-4 bg-dark text-white mb-4">
                            <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title h4 m-0 text-center">Asistencia Geriátrica</h3>
                            </div>
                        </div>
                        <div class="card col-12 col-md-6 col-lg-4 bg-dark text-white mb-4">
                            <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title h4 m-0 text-center">Trabajo Social</h3>
                            </div>
                        </div>
                        <div class="card col-12 col-md-6 col-lg-4 bg-dark text-white mb-4">
                            <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title h4 m-0 text-center">Prof. Educacion Fisica</h3>
                            </div>
                        </div>
                        <div class="card col-12 col-md-6 col-lg-4 bg-dark text-white mb-4">
                            <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title h4 m-0 text-center">Talleristas</h3>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="contacto col-12 py-4 contacto text-white formContent">
                <div class="row justify-content-center">
                    <div class="col-12 mb-4">
                        <h2 class="text-center text-uppercase h3 m-0">Contacto</h2>
                    </div>

                    <form class="col-12 col-lg-5 col-xl-4 ml-auto mr-5 py-4">
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
                            <div class="col-12 text-center">
                                <button type="submit" class="btn-lg btn-primary m-auto enviarForm bg-dark">Enviar</button> 
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