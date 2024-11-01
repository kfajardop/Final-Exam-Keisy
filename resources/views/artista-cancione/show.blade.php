@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Canción</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Canción</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('artista-canciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $artistaCancione->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Duracion:</strong>
                            {{ $artistaCancione->duracion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Artista Id:</strong>
                            {{ $artistaCancione->artista_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Genero Id:</strong>
                            {{ $artistaCancione->genero_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Album Id:</strong>
                            {{ $artistaCancione->album_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
