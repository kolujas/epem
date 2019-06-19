@extends('layout.index')

@section('css')
    <link href="{{ asset('css/web/inicio.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    EPEM
@endsection

@section('nav')
    @component('components.nav')
    @endcomponent
@endsection

@section('main')
    <div class="container-fluid">
        <div class="parallax-padre row justify-content-lg-center">
            <div class="col-12 p-0 m-0">
                <div class="parallax"></div>
                <div class="banner-info">
                    <h2 class="h1 text-center text-white">Centro para personas mayores</h2>
                    <p class="h4 text-white px-5 text-center">Desarrollamos un modelo integral, centrado en personas mayores que deseen interactuar con otros y participar en actividades recreativas y terapéuticas, que promuevan su autonomía</p>
                </div>
                <div class="banner-contact col-12 text-center">
                    <button type="button" class="btn-lg btn-outline-primary m-auto text-white btnContact">Contactate</button>
                </div>
            </div>
   
            <div id="nuestros-servicios" class="nuestros-servicios col-12">
                <div class="row justify-content-center">
                    <div class="col-12 my-4">
                        <h2 class="text-center h3">Nuestros servicios</h2>
                        <h3 class="text-center h5 m-0">Cómo podemos ayudarte</h3>
                    </div>

                    <div class="cartas row col-lg-10 col-xl-8 justify-content-center">
                        <div class="card col-12 col-md-5 col-lg-3 mb-4">
                            <div class="card-body row">
                                <span class="col-12 text-center">
                                <i class="fas fa-utensils fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center">Proveemos una alimentación sana.</p>
                            </div>
                        </div>

                        <div class="card col-12 col-md-5 col-lg-3 mb-4">
                            <div class="card-body row">
                                <span class="col-12 text-center">
                                    <i class="fas fa-diagnoses fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center">Estimulamos la autonomía en las actividades de la vida diaria.</p>
                            </div>
                        </div>

                        <div class="card col-12 col-md-5 col-lg-3 mb-4">
                            <div class="card-body row">
                                <span class="col-12 text-center">
                                <i class="fab fa-accessible-icon fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center">Proporcionamos el apoyo para cada nivel de necesidad.</p>
                            </div>
                        </div>

                        <div class="card col-12 col-md-5 col-lg-3 mb-4">
                            <div class="card-body row">
                                <span class="col-12 text-center">
                                <i class="fas fa-user-friends fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center">Ofrecemos un marco adecuado para el desarrollo de relaciones y actividades sociales gratificantes.</p>
                            </div>
                        </div>

                        <div class="card col-12 col-md-5 col-lg-3 mb-4">
                            <div class="card-body row">
                                <span class="col-12 text-center">
                                <i class="fas fa-brain fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center">Realizamos programas especiales para personas con diagnóstico de Alzheimer u otras demencias.</p>
                            </div>
                        </div>

                        <div class="card col-12 col-md-5 col-lg-3 mb-4">
                            <div class="card-body row">
                                <span class="col-12 text-center">
                                <i class="fas fa-hands-helping fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center">Brindamos orientación a familiares y acompañantes de personas mayores.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-12 solucion-familias bg-dark text-white m-0">
                <div class="row justify-content-center py-4 py-lg-5">
                    <div class="col-12">
                        <h2 class="text-center h2 m-0">Una solución para las familias</h2>
                    </div>

                    <div class="col-12 col-lg-10 col-xl-8 text-justify my-4">    
                        <p class="m-0">Creemos posible la conciliación familiar - laboral de aquellas personas que se encuentran a cargo de mayores con algún requerimiento de asistencia. Brindamos a las familias y cuidadores un marco de apoyo para evitar la sobrecarga, permitiéndoles continuar con su actividad laboral y rutina diaria.</p>
                    </div>
                </div>
            </div>
            
            <div id="el-club" class="el-club col-12 col-xl-8 py-4">
                <div class="row justify-content-center">
                    <div class="col-12 mb-4">
                        <h2 class="text-center m-0">El club</h2>
                    </div>

                    <figure class="col-12 col-lg-6 col-xl-7 mb-md-4 py-1">
                        <img src="img/ancianos_piolas.jpg" class="img-fluid" alt="Responsive image">
                    </figure>

                    <div class="club div-lista-solucion col-10 col-md-6 col-lg-4 col-xl-4">
                        <ul class="lista-solucion fa-ul mb-0">
                            <li class="mb-2 pb-1"><span class="fa-li"><i class="fas fa-check"></i></span>Supervisón médica</li>
                            <li class="mb-2 pb-1"><span class="fa-li"><i class="fas fa-check"></i></span>Área de nutrición</li>
                            <li class="mb-2 pb-1"><span class="fa-li"><i class="fas fa-check"></i></span>Asistencia geriátrica</li>
                            <li class="mb-2 pb-1"><span class="fa-li"><i class="fas fa-check"></i></span>Kinesiología</li>
                            <li class="mb-2 pb-1"><span class="fa-li"><i class="fas fa-check"></i></span>Psicología</li>
                            <li class="mb-2 pb-1"><span class="fa-li"><i class="fas fa-check"></i></span>Trabajo social</li>
                            <li class="mb-2 pb-1"><span class="fa-li"><i class="fas fa-check"></i></span>Prof eduación física</li>
                            <li class="mb-2 pb-1"><span class="fa-li"><i class="fas fa-check"></i></span>Talleristas</li>
                            <li class="mb-2 pb-1"><span class="fa-li"><i class="fas fa-check"></i></span>Personal administrativo</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="el-equipo" class="el-equipo row col-12 justify-content-center">
                <div class="col-12 my-4">
                    <h2 class="text-center h3 m-0">El equipo</h2>
                </div>

                <div class="cartas row col-lg-10 col-xl-8 justify-content-center">
                    <div class="card col-12 col-md-5 col-lg-3 mb-4">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title h4 m-0 text-right">Supervisión Médica</h3>
                        </div>
                    </div>

                    <div class="card col-12 col-md-5 col-lg-3 mb-4">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title h4 m-0 text-right">Área de Nutrición</h3>
                        </div>
                    </div>

                    <div class="card col-12 col-md-5 col-lg-3 mb-4">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title h4 m-0 text-right">Asistencia Geriátrica</h3>
                        </div>
                    </div>

                    <div class="card col-12 col-md-5 col-lg-3 mb-4">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title h4 m-0 text-right">Trabajo Social</h3>
                        </div>
                    </div>
                    
                    <div class="card col-12 col-md-5 col-lg-3 mb-4">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title h4 m-0 text-right">Prof. Educación Fisica</h3>
                        </div>
                    </div>
                    
                    <div class="card col-12 col-md-5 col-lg-3 mb-4">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title h4 m-0 text-right">Talleristas</h3>
                        </div>
                    </div>

                    <div class="card col-12 col-md-5 col-lg-3 mb-4">
                        <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title h4 m-0 text-right">Terapia ocupacional</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contacto" class="contacto col-12 py-4 contacto text-white formContent">
                <div class="row justify-content-center">
                    <div class="col-12 mb-4">
                        <h2 class="text-center h2 m-0 text-dark">Contacto</h2>
                    </div>                
                    <form class="col-12 col-lg-5 col-xl-4 m-auto py-4 needs-validation" novalidate action="/contactar" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="form-group col-11">
                                <label for="nombre">Nombre</label>
                                <input name="nombre" class="form-control nombre" id="nombre" type="text" placeholder="Nombre" required minlength=2 maxlength=60>
                                <div class="invalid-feedback">
                                Escribe tu nombre
                                </div>
                                <div class="error">
                                @if($errors->has('nombre')){{ $errors->first('nombre') }}@endif
                                </div>
                            </div>
                            <div class="form-group col-11">
                                <label for="telefono">Teléfono</label>
                                <input name="telefono" class="form-control telefono" id="telefono" type="number" placeholder="Telefono" required> 
                                <div class="invalid-feedback">
                                Escribe tu teléfono
                                </div>
                                <span class="error">@if($errors->has('telefono')){{ $errors->first('telefono') }}@endif</span>
                            </div>
                            <div class="form-group col-11">
                                <label for="formEmail">Email</label>
                                <input name="correo" type="email" class="form-control email" id="formEmail" aria-describedby="emailHelp" placeholder="Email" required maxlength=100>
                                <div class="invalid-feedback">
                                    Escribe tu email (debe ser válido)
                                </div>
                                <span class="error">@if($errors->has('correo')){{ $errors->first('correo') }}@endif</span>
                            </div>
                            <div class="form-group col-11">
                                <label for="formMensaje">Mensaje</label>
                                <textarea name="descripcion" class="form-control descripcion" id="formMensaje" rows="3" placeholder="Mensaje" required></textarea>
                                <div class="invalid-feedback">
                                    Escribe tu mensaje
                            </div>
                            <span class="error">@if($errors->has('descripcion')){{ $errors->first('descripcion') }}@endif</span>
                            </div>                            
                            <div class="col-12 text-center">
                                <button type="submit" class="btn-lg m-auto text-white enviarForm">Enviar</button> 
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


@section('js')
    <script type="text/javascript" src="{{ asset('js/web/inicio.js') }}"></script>
@endsection