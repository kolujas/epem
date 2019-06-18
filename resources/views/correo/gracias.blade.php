@extends('layout.index')

@section('css')
    <link href="{{ asset('css/correo/gracias.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Gracias por contactarte 
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
                    <h2 class="h1 text-center text-white">Gracias por contactarte</h2>
                    <p class="h4 text-white px-5 text-center">Te responderemos en la brevedad</p>
                </div>
                <div class="banner-contact col-12 text-center">
                    <button type="button" class="btn-lg btn-outline-primary m-auto text-white btnContact">Volver</button>
                </div>
            </div>
        </div>
        <!-- <div class="col-12 gracias bg-dark text-white m-0 py-4">
            <div class="row justify-content-center py-4 py-lg-5">
                <div class="col-12">
                    <h2 class="text-center h2 m-0">Gracias por contactarte</h2>
                </div>

                <div class="col-12 col-lg-10 col-xl-8 text-center my-4">    
                    <p class="m-0">Te responderemos en la brevedad</p>
                </div>

                <div class="banner-contact col-12 text-center">
                    <button type="button" class="btn-lg btn-outline-primary m-auto text-white btnReturn">Volver</button>
                </div>
            </div>
        </div> -->
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection