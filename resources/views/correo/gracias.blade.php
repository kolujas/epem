@extends('layout.index')

@section('css')
    <link href="{{ asset('css/correo/gracias.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Gracias 
@endsection

@section('main')
    <section class="row col s12 m6 l6 xl6 gracias center-align">
        <h2>Gracias</h2>
        <p>Su consulta sera contestada a la brevedad</p>
        <a href="/" class="waves-effect waves-light btn">Volver</a>
    </section>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection