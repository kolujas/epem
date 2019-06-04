@extends('layout.index')

@section('css')
    <link href="{{ asset('css/eventos/crear.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Inicio
@endsection

@section('nav')
    @component('components.nav')
    @endcomponent
@endsection

@section('main')
<div class="container-fluid bg-dark py-5">
    <h2 class="text-center text-white mb-5">Crear evento</h2>
    <form class="col-10 col-md-10 col-lg-8 m-auto text-white">
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Título</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
    <label for="inputEmail4">Archivo</label>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
    <label class="custom-file-label" for="inputGroupFile04">Elige un archivo</label>
  </div>
</div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection