<?php

namespace App\Http\Controllers;

use App\Models\ArtistaCancione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ArtistaCancioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArtistaCancioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $artistaCanciones = ArtistaCancione::paginate();

        return view('artista-cancione.index', compact('artistaCanciones'))
            ->with('i', ($request->input('page', 1) - 1) * $artistaCanciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $artistaCancione = new ArtistaCancione();

        return view('artista-cancione.create', compact('artistaCancione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtistaCancioneRequest $request): RedirectResponse
    {
        ArtistaCancione::create($request->validated());

        return Redirect::route('artista-canciones.index')
            ->with('success', 'ArtistaCancione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $artistaCancione = ArtistaCancione::find($id);

        return view('artista-cancione.show', compact('artistaCancione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $artistaCancione = ArtistaCancione::find($id);

        return view('artista-cancione.edit', compact('artistaCancione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtistaCancioneRequest $request, ArtistaCancione $artistaCancione): RedirectResponse
    {
        $artistaCancione->update($request->validated());

        return Redirect::route('artista-canciones.index')
            ->with('success', 'ArtistaCancione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ArtistaCancione::find($id)->delete();

        return Redirect::route('artista-canciones.index')
            ->with('success', 'ArtistaCancione deleted successfully');
    }
}
