<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title></title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li>Inicio</li>
          <li>
              <a href="peliculas">Peliculas</a>
          </li>
          <li>Generos</li>
        </ul>
      </nav>
    </header>
    <h1>Mis peliculas</h1>
    <ul>
      <?php foreach ($generos as $key => $genero) : ?>
        <li>
          <a href="/genero/<?=$key?>">
            <?=$genero?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
