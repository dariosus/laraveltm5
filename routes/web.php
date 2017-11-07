<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("saludar/{nombre}/{apellido}", function($nombre, $apellido) {
  if (strlen($nombre) < 10) {
    echo "El nombre no tiene 10 letras";
  }
  else {
    echo "El nombre tiene mas de 10 letras";
  }
});

Route::post("bienvenidos", function() {
  echo "Bienvenidos a mi sitio";
});

Route::get("/generos", "GenerosController@listar");

Route::get("/peliculas", "PeliculasController@listar");

Route::get("/pelicula/{id}", "PeliculasController@detalle");

Route::get("detallePelicula/{id}", function($id) {
  echo "Me pediste la película $id";
});

Route::get('/', function () {
    return view('welcome');
});
