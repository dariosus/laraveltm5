<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function listar() {
      $generos = [
        "Comedia",
        "Accion",
        "Terror",
        "Drama"
      ];

      $VAC = compact("generos");

      return view("generos", $VAC);
    }
}
