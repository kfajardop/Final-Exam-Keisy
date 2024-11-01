<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ArtistaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $artistas = Artista::paginate();

        return view('artista.index', compact('artistas'))
            ->with('i', ($request->input('page', 1) - 1) * $artistas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $artista = new Artista();

        return view('artista.create', compact('artista'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtistaRequest $request): RedirectResponse
    {
        Artista::create($request->validated());

        return Redirect::route('artistas.index')
            ->with('success', 'Artista created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $artista = Artista::find($id);

        return view('artista.show', compact('artista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $artista = Artista::find($id);

        return view('artista.edit', compact('artista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtistaRequest $request, Artista $artista): RedirectResponse
    {
        $artista->update($request->validated());

        return Redirect::route('artistas.index')
            ->with('success', 'Artista updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Artista::find($id)->delete();

        return Redirect::route('artistas.index')
            ->with('success', 'Artista deleted successfully');
    }
}
