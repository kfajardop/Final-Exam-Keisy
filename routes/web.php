<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CancionAlbumController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CancionGeneroController;
use App\Http\Controllers\ArtistaCancioneController;





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('cancion-albums', CancionAlbumController::class);

Route::resource('artistas', ArtistaController::class);

Route::resource('cancion-generos', CancionGeneroController::class);

Route::resource('artista-canciones', ArtistaCancioneController::class);







