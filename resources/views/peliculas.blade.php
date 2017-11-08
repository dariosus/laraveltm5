@extends("layouts.masterPage")

@section("title")
  Listado de películas
@endsection

@section("principal")
    <h1>Mis peliculas</h1>
    <ul>
      @if (count($peliculas) > 0)
        @foreach ($peliculas as $pelicula)
          <li>
            <a href="/pelicula/{{$pelicula->id}}">
              {{$pelicula->title}}
            </a>
          </li>
        @endforeach
      @else
        <p>No hay películas</p>
      @endif
    </ul>
@endsection
