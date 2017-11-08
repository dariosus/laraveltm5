<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActoresController extends Controller
{
    public function listar() {
      $actores = Actor::all();

      $VAC = compact("actores");

      return view("listadoActores", $VAC);
    }
}
