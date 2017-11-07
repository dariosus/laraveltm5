<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function buscar($buscar) {
      $peliculas = [
        "Toy Story",
        "Toy Story 2",
        "Buscando a Nemo",
        "Ratatouille"
      ];

      $peliFinal = "No Existe";

      foreach ($peliculas as $pelicula) {
        if ($pelicula == $buscar) {
          $peliFinal = $pelicula;
        }
      }

      $VAC = compact("peliFinal");

      return view("detallePelicula", $VAC);
    }

    public function listar() {
      $peliculas = [
        "Toy Story",
        "Toy Story 2",
        "Buscando a Nemo",
        "Ratatouille"
      ];

      $variablesACompartir = compact("peliculas");

      return view("peliculas", $variablesACompartir);
    }

    public function detalle($id) {
      $peliculas = [
        "Toy Story",
        "Toy Story 2",
        "Buscando a Nemo",
        "Ratatouille"
      ];

      $peliFinal = $peliculas[$id];

      $varACompartir = compact("peliFinal");

      return view("detallePelicula", $varACompartir);
    }
}
