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
        Schema::create('artista_canciones', function (Blueprint $table) {
            $table->increments('id')->unique('id_unique');
            $table->string('nombre');
            $table->string('duracion', 200)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('artista_id')->index('fk_canciones_cancion_artistas_idx');
            $table->unsignedInteger('genero_id')->index('fk_artista_canciones_album_genero1_idx');
            $table->unsignedInteger('album_id')->index('fk_artista_canciones_album1_idx');

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artista_canciones');
    }
};
