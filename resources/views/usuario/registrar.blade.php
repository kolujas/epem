@extends('layout.index')

@section('css')
    <link href="{{ asset('css/usuario/registrar.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Registrarse
@endsection

@section('main')
    <section>
        <header>
            <h1>Registrarse</h1>
        </header>
        <form action="/registrar" method="post">
            @csrf
            <div>
                <div>
                    <label for="nombre">Nombre</label>
                    <input id="nombre" type="text" name="nombre" value="{{ old('nombre') }}">
                    @if($errors->has('nombre'))
                        <span class="error">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>

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
                    <label for="confirmacion">Confirmar Contraseña</label>
                    <input id="confirmacion" type="password" name="clave_confirmation" class="validate">
                    @if($errors->has('clave_confirmation'))
                        <span class="error">{{ $errors->first('clave_confirmation') }}</span>
                    @endif
                </div>
                
                <div>
                    <button type="submit" name="action">Registrarse</button>
                </div>
            </div>
        </form>
    </section>
@endsection