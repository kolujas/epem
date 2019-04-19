@extends('layout.index')

@section('css')
    <link href="{{ asset('css/usuario/ingresar.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Ingresar
@endsection

@section('main')
    <section>
        <header>
            <h1>Ingresar</h1>
        </header>
        <form action="/ingresar" method="post">
            @csrf
            <div>
                <div>
                    <label for="correo">Correo</label>
                    <input id="correo" type="email" name="correo" value="{{ old('correo') }}">
                    @if($errors->has('correo'))
                        <span class="error">{{ $errors->first('correo') }}</span>
                    @endif
                </div>

                <div>
                    <label for="clave">Contraseña</label>
                    <input id="clave" type="password" name="clave" class="validate">
                    @if($errors->has('clave'))
                        <span class="error">{{ $errors->first('clave') }}</span>
                    @endif
                    </div>
                    
                <div>
                    <button type="submit" name="action">Ingresar</button>
                </div>
            </div>
        </form>
    </section>
@endsection