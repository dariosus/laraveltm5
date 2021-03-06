<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    @yield("css")
    <title>
      @yield("title")
    </title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li>Inicio</li>
          <li>
              <a href="/peliculas">Peliculas</a>
          </li>
          <li><a href="/generos">Generos</a></li>
          @if (isset($usuario) && $usuario)
            <li>
              Bienvenido {{$usuario->name}}
            </li>
          @else
            <li>
              <a href="/login">Login</a>
            </li>
            <li>
              <a href="/register">Register</a>
            </li>
          @endif
        </ul>
      </nav>
    </header>
    <section class="container">
      @yield("principal")
    </section>
  </body>
</html>
