<?php
  /** @var User $usuario */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/web/panel.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Panel
@endsection

@section('main')
    <section>
        <header>
            <h2>Panel</h2>
        </header>
        <p>¡Bienvenido {{$usuario->nombre}}!</p>
        <ul>
            <li>Correo: {{$usuario->correo}}</li>
            <li>Nivel: {{$usuario->nivel->nombre}}</li>
        </ul>
    </section>
@endsection