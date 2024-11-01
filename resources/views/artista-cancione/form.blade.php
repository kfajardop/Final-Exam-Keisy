<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $artistaCancione?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion" class="form-label">{{ __('Duracion') }}</label>
            <input type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ old('duracion', $artistaCancione?->duracion) }}" id="duracion" placeholder="Duracion">
            {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="artista_id" class="form-label">{{ __('Artista Id') }}</label>
            <select name="artista_id" id="artista_id" class="form-control @error('artista_id') is-invalid @enderror">
                <option value="">{{ __('Select an Artist') }}</option>
                @foreach(\App\Models\Artista::all() as $artista)
                    <option value="{{ $artista->id }}" {{ old('artista_id', $artistaCancione?->artista_id) == $artista->id ? 'selected' : '' }}>
                        {{ $artista->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('artista_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="genero_id" class="form-label">{{ __('Genero Id') }}</label>
            <select name="genero_id" id="genero_id" class="form-control @error('genero_id') is-invalid @enderror">
                <option value="">{{ __('Select a Genre') }}</option>
                @foreach(\App\Models\CancionGenero::all() as $genero)
                    <option value="{{ $genero->id }}" {{ old('genero_id', $artistaCancione?->genero_id) == $genero->id ? 'selected' : '' }}>
                        {{ $genero->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('genero_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="album_id" class="form-label">{{ __('Album Id') }}</label>
            <select name="album_id" id="album_id" class="form-control @error('album_id') is-invalid @enderror">
                <option value="">{{ __('Select an Album') }}</option>
                @foreach(\App\Models\CancionAlbum::all() as $album)
                    <option value="{{ $album->id }}" {{ old('album_id', $artistaCancione?->album_id) == $album->id ? 'selected' : '' }}>
                        {{ $album->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('album_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
