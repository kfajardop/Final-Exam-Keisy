<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ArtistaCancione
 *
 * @property $id
 * @property $nombre
 * @property $duracion
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 * @property $artista_id
 * @property $genero_id
 * @property $album_id
 *
 * @property CancionAlbum $cancionAlbum
 * @property CancionGenero $cancionGenero
 * @property Artista $artista
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ArtistaCancione extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'duracion', 'artista_id', 'genero_id', 'album_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cancionAlbum()
    {
        return $this->belongsTo(\App\Models\CancionAlbum::class, 'album_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cancionGenero()
    {
        return $this->belongsTo(\App\Models\CancionGenero::class, 'genero_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function artista()
    {
        return $this->belongsTo(\App\Models\Artista::class, 'artista_id', 'id');
    }
    
}
