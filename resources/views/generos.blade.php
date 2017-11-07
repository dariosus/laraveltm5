@extends("layouts.masterPage")

@section("title")
  Listado de géneros
@endsection

@section("principal")
      <h1>Mis peliculas</h1>
      <ul>

        @forelse ($generos as $key => $genero)
          <li>
            <a href="/genero/{{$key}}">
              {{$genero}}
            </a>
          </li>
        @empty
            <p>No hay géneros</p>
        @endforelse
      </ul>
@endsection
