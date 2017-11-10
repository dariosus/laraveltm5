<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;
use App\Genero;

class PeliculasController extends Controller
{
    public function guardar(Request $r) {

      //VALIDAR

      $reglas = [
        "titulo" => "required|string|unique:movies,title",
        "premios" => "required|integer|min:0",
        "rating" => "required|numeric|min:0|max:10",
        "fecha_de_estreno" => "required|date",
        "duracion" => "required|integer|min:0"
      ];

      $mensajes = [
        "required" => "El campo :attribute es requerido",
        "min" => "El campo :attribute tiene un minimo de :min",
        "unique" => "El campo :attribute esta repetido",
        "max" => "El campo :attribute tiene un máximo de :max",
        "integer" => "El campo :attribute debe ser un número entero",
        "numeric" => "El campo :attribute debe ser un número",
        "string" => "El campo :attribute debe ser un texto",
        "date" => "El campo :attribute debe ser una fecha"
      ];

      $this->validate($r, $reglas, $mensajes);

      return redirect("/peliculas");
    }

    public function agregar() {
      $generos = Genero::all();

      $VAC = compact("generos");

      return view("agregarPelicula", $VAC);
    }

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
