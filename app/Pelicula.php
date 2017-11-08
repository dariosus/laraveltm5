<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = "movies";
    //protected $primaryKey = "idPelicula";
    protected $guarded = [];
}
