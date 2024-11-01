<?php

namespace App\Http\Controllers;

use App\Models\CancionGenero;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CancionGeneroRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CancionGeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $cancionGeneros = CancionGenero::paginate();

        return view('cancion-genero.index', compact('cancionGeneros'))
            ->with('i', ($request->input('page', 1) - 1) * $cancionGeneros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cancionGenero = new CancionGenero();

        return view('cancion-genero.create', compact('cancionGenero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CancionGeneroRequest $request): RedirectResponse
    {
        CancionGenero::create($request->validated());

        return Redirect::route('cancion-generos.index')
            ->with('success', 'CancionGenero created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $cancionGenero = CancionGenero::find($id);

        return view('cancion-genero.show', compact('cancionGenero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $cancionGenero = CancionGenero::find($id);

        return view('cancion-genero.edit', compact('cancionGenero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CancionGeneroRequest $request, CancionGenero $cancionGenero): RedirectResponse
    {
        $cancionGenero->update($request->validated());

        return Redirect::route('cancion-generos.index')
            ->with('success', 'CancionGenero updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        CancionGenero::find($id)->delete();

        return Redirect::route('cancion-generos.index')
            ->with('success', 'CancionGenero deleted successfully');
    }
}
