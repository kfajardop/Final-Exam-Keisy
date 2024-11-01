<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('artista_canciones', function (Blueprint $table) {
            $table->foreign(['album_id'], 'fk_artista_canciones_album1')->references(['id'])->on('cancion_albums')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['genero_id'], 'fk_artista_canciones_album_genero1')->references(['id'])->on('cancion_generos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['artista_id'], 'fk_canciones_cancion_artistas')->references(['id'])->on('artistas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('artista_canciones', function (Blueprint $table) {
            $table->dropForeign('fk_artista_canciones_album1');
            $table->dropForeign('fk_artista_canciones_album_genero1');
            $table->dropForeign('fk_canciones_cancion_artistas');
        });
    }
};
