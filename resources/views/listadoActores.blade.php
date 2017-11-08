@extends("layouts.masterPage")

@section("title")
  Listado de actores
@endsection

@section("principal")
  <h1>Listado de actores</h1>
  <ul>
    @foreach($actores as $actor)
      <li>
        {{$actor->getNombreCompleto()}}
      </li>
    @endforeach
  </ul>
@endsection
