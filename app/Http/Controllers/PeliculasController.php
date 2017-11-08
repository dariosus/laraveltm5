<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

class PeliculasController extends Controller
{
    public function mejores() {
      $peliculas = Pelicula::orderBy("rating", "DESC")->take(5)->where("awards", ">", 2)->get();

      $variablesACompartir = compact("peliculas");

      return view("peliculas", $variablesACompartir);

    }

    public function buscar($buscar) {
      $peliculas = Pelicula::where("title", "LIKE", "%$buscar%")->get();
      $VAC = compact("peliculas");

      return view("peliculas", $VAC);
    }

    public function listar() {
      $peliculas = Pelicula::all();

      $variablesACompartir = compact("peliculas");

      return view("peliculas", $variablesACompartir);
    }

    public function detalle($id) {
      $peliFinal = Pelicula::find($id);

      $varACompartir = compact("peliFinal");

      return view("detallePelicula", $varACompartir);
    }
}
