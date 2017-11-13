<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = "movies";
    //protected $primaryKey = "idPelicula";
    protected $guarded = [];

    public function genero() {
      return $this->belongsTo("App\Genero", "genre_id");
    }

    public function actores() {
      return $this->belongsToMany("App\Actor", "actor_movie", "movie_id", "actor_id");
    }
}
