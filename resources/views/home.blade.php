@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestión de Canciones </h1>
@stop

@section('content')
<div style="text-align: center; font-family: Arial, sans-serif; margin-top: 20px;">
    <p style="font-size: 24px; color: #4a4a4a;">¡Bienvenido!</p>
    
    
    <h5 style="font-size: 18px; font-style: italic; color: #666; margin: 10px 0;">
        "Descubre el ritmo que transforma tus momentos en recuerdos inolvidables. 
        ¡Déjate llevar por el poder de la música y encuentra tu próxima canción favorita!"
    </h5>
</div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
