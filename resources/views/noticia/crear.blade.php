@extends('layout.index')

@section('css')
    <link href="{{ asset('css/noticia/crear.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Crear Noticia
@endsection

@section('main')
    <section>
        <header>
            <h1>Crear Noticia</h1>
        </header>
        <form action="/noticia/crear" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <label for="titulo">Titulo</label>
                    <input id="titulo" type="text" name="titulo" value="{{ old('titulo') }}">
                    @if($errors->has('titulo'))
                        <span class="error">{{ $errors->first('titulo') }}</span>
                    @endif
                </div>

                <div>
                    <label for="subtitulo">Subtitulo</label>
                    <input id="subtitulo" type="text" name="subtitulo" value="{{ old('subtitulo') }}">
                    @if($errors->has('subtitulo'))
                        <span class="error">{{ $errors->first('subtitulo') }}</span>
                    @endif
                </div>

                <div>
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
                    @if($errors->has('descripcion'))
                        <span class="error">{{ $errors->first('descripcion') }}</span>
                    @endif
                </div>

                <div>
                    <label for="fuente">Fuente</label>
                    <input id="fuente" type="text" name="fuente" value="{{ old('fuente') }}">
                    @if($errors->has('fuente'))
                        <span class="error">{{ $errors->first('fuente') }}</span>
                    @endif
                </div>
                    
                <div>
                    <input type="file" id="file" size="50" name="imagen">
                    <button id="btnFile" type="button">Imagen</button>
                    <span id="texto">No se eligió ningún archivo</span>
                    @if($errors->has('imagen'))
                        <span class="error">{{ $errors->first('imagen') }}</span>
                    @endif
                </div>
                
                <div>
                    <button type="submit" name="action">Crear Noticia</button>
                </div>
            </div>
        </div>
    </form>
@endsection