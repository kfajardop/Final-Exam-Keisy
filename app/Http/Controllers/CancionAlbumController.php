<?php

namespace App\Http\Controllers;

use App\Models\CancionAlbum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CancionAlbumRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CancionAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $cancionAlbums = CancionAlbum::paginate();

        return view('cancion-album.index', compact('cancionAlbums'))
            ->with('i', ($request->input('page', 1) - 1) * $cancionAlbums->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cancionAlbum = new CancionAlbum();

        return view('cancion-album.create', compact('cancionAlbum'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CancionAlbumRequest $request): RedirectResponse
    {
        CancionAlbum::create($request->validated());

        return Redirect::route('cancion-albums.index')
            ->with('success', 'CancionAlbum created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $cancionAlbum = CancionAlbum::find($id);

        return view('cancion-album.show', compact('cancionAlbum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $cancionAlbum = CancionAlbum::find($id);

        return view('cancion-album.edit', compact('cancionAlbum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CancionAlbumRequest $request, CancionAlbum $cancionAlbum): RedirectResponse
    {
        $cancionAlbum->update($request->validated());

        return Redirect::route('cancion-albums.index')
            ->with('success', 'CancionAlbum updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        CancionAlbum::find($id)->delete();

        return Redirect::route('cancion-albums.index')
            ->with('success', 'CancionAlbum deleted successfully');
    }
}
