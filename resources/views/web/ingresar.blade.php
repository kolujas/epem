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
<div class="container-fluid py-5 bg-dark">
<h2 class="text-center text-white mb-5">Ingresar</h2>
    <div class="row">
        <form class="col-10 col-md-10 col-lg-8 m-auto text-white">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Recordarme
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    </div>
</div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection