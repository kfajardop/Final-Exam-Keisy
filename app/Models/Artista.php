<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Artista
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property ArtistaCancione[] $artistaCanciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Artista extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function artistaCanciones()
    {
        return $this->hasMany(\App\Models\ArtistaCancione::class, 'id', 'artista_id');
    }
    
}
