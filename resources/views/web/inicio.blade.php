<?php
    /** @var array $gallery */
?>
@extends('layout.index')

@section('css')
    <link href="{{asset('css/galeria/grid/gallery-grid.css')}}" rel="stylesheet">
    <link href="{{asset('css/web/inicio.css')}}" rel="stylesheet">
@endsection

@section('titulo')
    EPEM - El Club - Centro para personas mayores
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
                    <a href="#contacto" class="btn-lg btn-outline-primary m-auto text-white btnContact">Contactate</a>
                </div>
            </div>
   
            <div id="nuestros-servicios" class="nuestros-servicios col-12">
                <div class="row justify-content-center">
                    <div class="col-12 my-4">
                        <h2 class="text-center h3">Nuestros Servicios</h2>
                        <h3 class="text-center h5 m-0">Cómo podemos ayudarte</h3>
                    </div>

                    <div class="cartas row col-lg-10 col-xl-8 justify-content-center">
                        <div class="card col-6 col-md-3 col-lg-3 mb-3 p-0 px-2 ml-md-2">
                            <div class="card-body row px-0">
                                <span class="col-12 text-center p-0">
                                    <i class="card-icon fas fa-utensils fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center px-2">Proveemos una alimentación sana.</p>
                            </div>
                        </div>

                        <div class="card col-6 col-md-3 col-lg-3 mb-3 p-0 px-2">
                            <div class="card-body row px-0">
                                <span class="col-12 text-center p-0">
                                    <i class="card-icon fas fa-diagnoses fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center px-2">Estimulamos la autonomía en las actividades de la vida diaria.</p>
                            </div>
                        </div>

                        <div class="card col-6 col-md-3 col-lg-3 mb-3 p-0 px-2 mr-md-2">
                            <div class="card-body row px-0">
                                <span class="col-12 text-center p-0">
                                    <i class="card-icon fab fa-accessible-icon fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center px-2">Proporcionamos el apoyo para cada nivel de necesidad.</p>
                            </div>
                        </div>

                        <div class="card col-6 col-md-3 col-lg-3 mb-3 p-0 px-2 ml-md-2">
                            <div class="card-body row px-0">
                                <span class="col-12 text-center p-0">
                                    <i class="card-icon fas fa-user-friends fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center px-2">Ofrecemos un marco adecuado para el desarrollo de relaciones y actividades sociales gratificantes.</p>
                            </div>
                        </div>

                        <div class="card col-6 col-md-3 col-lg-3 mb-4 p-0 px-2">
                            <div class="card-body row px-0">
                                <span class="col-12 text-center p-0">
                                    <i class="card-icon fas fa-brain fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center px-2">Realizamos programas especiales para personas con diagnóstico de Alzheimer u otras demencias.</p>
                            </div>
                        </div>

                        <div class="card col-6 col-md-3 col-lg-3 mb-4 p-0 px-2 mr-md-2">
                            <div class="card-body row px-0">
                                <span class="col-12 text-center p-0">
                                    <i class="card-icon fas fa-hands-helping fa-7x mb-3"></i>
                                </span>
                                <p class="card-text text-center px-2">Brindamos orientación a familiares y acompañantes de personas mayores.</p>
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
            
            <div id="el-club" class="el-club col-12 py-4">
                <div class="row justify-content-center">
                    <div class="col-12 mb-4">
                        <h2 class="text-center m-0">El Club</h2>
                    </div>

                    <figure class="col-12 col-md-8 col-lg-6 col-xl-5 mb-md-4 py-1 py-lg-2 py-xl-1">
                        <img src="img/el-club-compressor.jpg" class="img-fluid" alt="Responsive image">
                    </figure>

                    <div class="club div-lista-solucion col-10 col-md-4 col-lg-3 col-xl-3">
                        <ul class="lista-solucion fa-ul mb-0">
                            <li class="mb-2 pb-lg-1 pb-xl-2"><span class="fa-li"><i class="fas fa-check"></i></span>Supervisón médica</li>
                            <li class="mb-2 pb-lg-1 pb-xl-2"><span class="fa-li"><i class="fas fa-check"></i></span>Área de nutrición</li>
                            <li class="mb-2 pb-lg-1 pb-xl-2"><span class="fa-li"><i class="fas fa-check"></i></span>Asistencia geriátrica</li>
                            <li class="mb-2 pb-lg-1 pb-xl-2"><span class="fa-li"><i class="fas fa-check"></i></span>Kinesiología</li>
                            <li class="mb-2 pb-lg-1 pb-xl-2"><span class="fa-li"><i class="fas fa-check"></i></span>Psicología</li>
                            <li class="mb-2 pb-lg-1 pb-xl-2"><span class="fa-li"><i class="fas fa-check"></i></span>Trabajo social</li>
                            <li class="mb-2 pb-lg-1 pb-xl-2"><span class="fa-li"><i class="fas fa-check"></i></span>Profesor de eduación física</li>
                            <li class="mb-2 pb-lg-1 pb-xl-2"><span class="fa-li"><i class="fas fa-check"></i></span>Talleristas</li>
                            <li class="mb-2 pb-lg-1 pb-xl-2"><span class="fa-li"><i class="fas fa-check"></i></span>Personal administrativo</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="el-equipo" class="el-equipo row col-12 justify-content-center">
                <div class="col-12 my-4">
                    <h2 class="text-center h3 m-0">El Equipo</h2>
                </div>

                <div class="cartas row col-lg-10 col-xl-8 justify-content-center">
                    <div class="card col-6 col-md-3 col-lg-3 mb-3 p-0 px-2 ml-md-2">
                        <img class="card-img-top" src="img/equipo/Administrativo-compressor.png" alt="Card image cap">
                        <div class="card-body px-1">
                            <h3 class="card-title d-flex h4 m-0">
                                <span>Administrativo</span>
                                <span>Lucas Digilio</span>
                            </h3>
                        </div>
                    </div>

                    <div class="card col-6 col-md-3 col-lg-3 mb-3 p-0 px-2">
                        <img class="card-img-top" src="img/equipo/Directora-compressor.png" alt="Card image cap">
                        <div class="card-body px-1">
                            <h3 class="card-title d-flex h4 m-0">
                                <span>Directora Médica</span>
                                <span>Dra. Alicia Miranda</span>
                            </h3>
                        </div>
                    </div>

                    <div class="card col-6 col-md-3 col-lg-3 mb-3 p-0 px-2 mr-md-2">
                        <img class="card-img-top" src="img/equipo/Cocina-compressor.png" alt="Card image cap">
                        <div class="card-body px-1">
                            <h3 class="card-title d-flex h4 m-0">
                                <span>Encargado de Cocina</span>
                                <span>Fabio Oscar Lares</span>
                            </h3>
                        </div>
                    </div>

                    <div class="card col-6 col-md-3 col-lg-3 mb-3 p-0 px-2 ml-md-2">
                        <img class="card-img-top" src="img/equipo/Enfermera-compressor.png" alt="Card image cap">
                        <div class="card-body px-1">
                            <h3 class="card-title d-flex h4 m-0">
                                <span>Enfermera</span>
                                <span>Lic. Clarita de Jesus Altamiranda</span>
                            </h3>
                        </div>
                    </div>
                    
                    <div class="card col-6 col-md-3 col-lg-3 mb-3 p-0 px-2">
                        <img class="card-img-top" src="img/equipo/Nutricionista-compressor.png" alt="Card image cap">
                        <div class="card-body px-1">
                            <h3 class="card-title d-flex h4 m-0">
                                <span>Nutricionista</span>
                                <span>Lic. Florencia Ludevid</span>
                            </h3>
                        </div>
                    </div>
                    
                    <div class="card col-6 col-md-3 col-lg-3 mb-3 p-0 px-2 mr-md-2">
                        <img class="card-img-top" src="img/equipo/Ed-fisica-compressor.png" alt="Card image cap">
                        <div class="card-body px-1">
                            <h3 class="card-title d-flex h4 m-0">
                                <span>Profesor de Educación Física</span>
                                <span>Matias Ulloa</span>
                            </h3>
                        </div>
                    </div>

                    <div class="card col-6 col-md-3 col-lg-3 mb-4 p-0 px-2">
                        <img class="card-img-top" src="img/equipo/Psicologa-compressor.png" alt="Card image cap">
                        <div class="card-body px-1">
                            <h3 class="card-title d-flex h4 m-0">
                                <span>Psicóloga</span>
                                <span>Lic Laura Moura Frietas</span>
                            </h3>
                        </div>
                    </div>

                    <div class="card col-6 col-md-3 col-lg-3 mb-4 p-0 px-2">
                        <img class="card-img-top" src="img/equipo/Tallerista-compressor.png" alt="Card image cap">
                        <div class="card-body px-1">
                            <h3 class="card-title d-flex h4 m-0">
                                <span>Tallerista</span>
                                <span>Adrian Mortola</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="frase container py-5">
                <div class="row">
                    <ul class="m-auto py-3 list-group list-group-flush h5">
                        <li>
                            <span><i class="fas fa-plus"></i></span> Activos
                        </li>
                        <li>
                            <span><i class="fas fa-plus"></i></span> Iguales
                        </li>
                        <li class="mr-2">
                            <span><i class="fas fa-plus"></i></span> Libres
                        </li>
                    </ul>
                </div>
            </div>

            @if(count($gallery))
                <div id="galeria" class="gallery-container col-12 col-lg-10 p-0 mt-4 mx-md-auto">
                    <h2 class="text-center m-0">Galería de fotos</h2>
                    <div class="tz-gallery galeria p-0">
                        <div class="row py-4 px-3">
                            @for($i = 0; $i < count($gallery); $i++)
                                <div class="col-sm-6 col-md-4 mb-4">
                                    <a class="lightbox" href="{{asset($gallery[$i])}}">
                                        <img class="mb-0" src="{{asset($gallery[$i])}}" alt="Park">
                                    </a>
                                </div>
                            @endfor
                        </div>
                    </div> 
                </div>
            @endif


            <div id="contacto" class="contacto col-12 py-4 contacto text-white formContent">
                <div class="row justify-content-center">
                    <div class="col-12 mb-4">
                        <h2 class="text-center h2 m-0 text-dark">Contacto</h2>
                    </div>                
                    <form class="col-12 col-lg-5 col-xl-4 m-auto needs-validation" novalidate action="/contactar" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="form-group col-11">
                                <label for="nombre">Nombre</label>
                                <input name="nombre" class="form-control nombre" id="nombre" type="text" placeholder="Nombre" required minlength=2 maxlength=60 value="{{ old('nombre') }}">
                                <div class="invalid-feedback">
                                Escribe tu nombre
                                </div>
                                <div class="error">
                                @if($errors->has('nombre')){{ $errors->first('nombre') }}@endif
                                </div>
                            </div>
                            <div class="form-group col-11">
                                <label for="telefono">Teléfono</label>
                                <input name="telefono" class="form-control telefono" id="telefono" type="number" placeholder="Telefono" value="{{ old('telefono') }}" required> 
                                <div class="invalid-feedback">
                                Escribe tu teléfono
                                </div>
                                <span class="error">@if($errors->has('telefono')){{ $errors->first('telefono') }}@endif</span>
                            </div>
                            <div class="form-group col-11">
                                <label for="formEmail">Email</label>
                                <input name="correo" type="email" class="form-control email" id="formEmail" aria-describedby="emailHelp" placeholder="Email" required maxlength=100 value="{{ old('correo') }}">
                                <div class="invalid-feedback">
                                    Escribe tu email (debe ser válido)
                                </div>
                                <span class="error">@if($errors->has('correo')){{ $errors->first('correo') }}@endif</span>
                            </div>
                            <div class="form-group col-11">
                                <label for="formMensaje">Mensaje</label>
                                <textarea name="descripcion" class="form-control descripcion" id="formMensaje" rows="3" placeholder="Mensaje" required>{{ old('descripcion') }}</textarea>
                                <div class="invalid-feedback">
                                    Escribe tu mensaje
                            </div>
                            <span class="error">@if($errors->has('descripcion')){{ $errors->first('descripcion') }}@endif</span>
                            </div>
                            <div class="mb-3">
                                {!! Recaptcha::render() !!}
                                <span class="error">@if($errors->has('g-recaptcha-response')){{ $errors->first('g-recaptcha-response') }}@endif</span>
                            </div>                           
                            <div class="col-12 text-center">
                                <button type="submit" class="btn-lg m-auto text-white enviarForm">Enviar</button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="whatsapp">
                <a target="_blank" href="https://wa.me/5491132583841"><img src="/img/wsp.png" alt="Icono de whatsapp"></a>
            </div>

            <div class="donde-encontrarnos col-12">
                <div class="row justify-content-center">
                    <div class="col-12 my-4">
                        <h2 class="text-center h2 m-0 text-dark">Ubicación</h2>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.12709438945!2d-58.35825038458987!3d-34.67674166887283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a3333ba2912519%3A0xa14a7d22ce6c9bba!2sAv.+Manuel+Belgrano+2169%2C+B1872FVA+Sarand%C3%AD%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1560891690715!5m2!1ses!2sar" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
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
    <script src="{{asset('js/galeria/baguetteBox.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/headroom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/web/inicio.js') }}"></script>

    <script>
         baguetteBox.run('.tz-gallery', {
            buttons: true,
        });
    </script>
@endsection