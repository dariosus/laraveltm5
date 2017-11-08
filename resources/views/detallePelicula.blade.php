@extends("layouts.masterPage")

@section("title")
  {{$peliFinal}}
@endsection

@section("principal")
    <h1>Elegiste la película {{$peliFinal->title}}</h1>
    <ul>
      <li>Premios: {{$peliFinal->awards}}</li>
      <li>Fecha de estreno: {{$peliFinal->release_date}}</li>
    </ul>
@endsection
