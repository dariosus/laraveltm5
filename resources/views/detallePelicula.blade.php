@extends("layouts.masterPage")

@section("title")
  {{$peliFinal->title}}
@endsection

@section("principal")
    <h1>Elegiste la película {{$peliFinal->title}}</h1>
    <ul>
      <li>Premios: {{$peliFinal->awards}}</li>
      <li>Fecha de estreno: {{$peliFinal->release_date}}</li>
      <li>Genero: {{$peliFinal->genero->name}}</li>
      <li>Actores:
        <ul>
          @foreach ($peliFinal->actores as $actor)
            <li>
              {{$actor->getNombreCompleto()}}
            </li>
          @endforeach
        </ul>

      </li>
    </ul>
    <a href="/borrarPelicula/{{$peliFinal->id}}">
      <button type="button" class="btn btn-danger" name="button">Borrar</button>
    </a>
@endsection
