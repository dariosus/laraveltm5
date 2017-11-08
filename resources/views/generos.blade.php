@extends("layouts.masterPage")

@section("title")
  Listado de géneros
@endsection

@section("principal")
      <h1>Mis peliculas</h1>
      <ul>

        @forelse ($generos as $genero)
          <li>
            <a href="/genero/{{$genero->id}}">
              {{$genero->name}}
            </a>
          </li>
        @empty
            <p>No hay géneros</p>
        @endforelse
      </ul>
@endsection
