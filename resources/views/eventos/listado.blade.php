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
    <h2 class="text-white text-center mb-4">Listado de Eventos</h2>
    <div class="row mb-4">
        <a class="btn btn-primary btn-lg text-white m-auto">Crear</a>
    </div>
    <div class="row">
    <table class="table table-hover table-dark text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Título</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td><a class="btn text-white" href="#"><i class="fas fa-edit"></i></a></td>
      <td><a class="btn text-white" href="#"><i class="fas fa-trash"></i></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td><a class="btn text-white" href="#"><i class="fas fa-edit"></i></a></td>
      <td><a class="btn text-white" href="#"><i class="fas fa-trash"></i></a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Valentina</td>
      <td><a class="btn text-white" href="#"><i class="fas fa-edit"></i></a></td>
      <td><a class="btn text-white" href="#"><i class="fas fa-trash"></i></a></td>
    </tr>
  </tbody>
</table>
    </div>
</div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection