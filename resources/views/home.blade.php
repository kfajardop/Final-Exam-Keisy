@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>MusicAdmin </h1>
@stop

@section('content')
    <p>¡Bienvenido!</p>
    <h5>"Descubre el ritmo que transforma tus momentos en recuerdos inolvidables. ¡Déjate llevar por el poder de la música y encuentra tu próxima canción favorita!"</h5>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
