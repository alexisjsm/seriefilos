<?php session_start() ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta name="title" content="Seriefilos">
  <meta name="description" content="La web para amantes de las series">
  <meta name="robots" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/icons/favicon.png" type="image/x-png">
  <link rel="manifest" href="manifest.json" >
  <meta charset="utf-8">
  <title>Seriefilos: La web para amantes de las series </title>
  <script src="/lib/jquery/jquery-3.3.1.min.js"></script>
  <script src="/js/buscador.js" ></script>
  <link rel="stylesheet" href="estilo/css/estilo_index.css">
</head>

<body>
  <div class="container">
    <header class="cabecera">
      <nav class="menu">
        <ul>
          <li class="t-logo">Inicio <span class="fas fa-angle-down"></span></li>
          <li><a href="catalogo">Catálogo</a></li>
          <li class="s-menu">
            <?php if (isset($_SESSION['usuario'])&&!empty($_SESSION['usuario'])): ?>
              <a href="perfil"><?php echo $_SESSION['usuario']; ?></a>
              <div class="s-menu-contenido">
                <a href="logout">Cerrar sesión</a>
            <?php else: ?>
              <a href="login">Iniciar sesión</a>
              <div class="s-menu-contenido">
                <a href="signup#Registrate">Registrate</a>
            <?php endif; ?>
            </div>
          </li>
        </ul>
        <div class="c-buscador">
          <form class="b-buscador" id="form_search" method="get" action="catalogo">
            <button id="button_search" type="button" class="m-buscador">
        <span class="fa fa-search"></span>
      </button>
            <input type="search" id="buscador" name="buscador" value="" placeholder="Buscar..">
          </form>
        </div>
      </nav>
      <!-- menu -->
    </header>
    <!-- cabecera -->
    <main class="contenido">
      <div class="t-logo" id="t-logo">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>

        <div class="logo">
          <h1>Seriefilos</h1>
          <h2>La web para amantes de las series </h2>
        </div>

      </div>
      <div class="c-descripcion">
        <div class="articulo">
          <h2>Busca serie...</h2>
            <img class="search-icon" src="img/icons/busca.svg" alt="Buscar-icon">
        </div>
        <div class="articulo">
          <h2>Si te gusta... </h2>
            <img  class="fav-icon" src="img/icons/fav.svg" alt="Favorito-icon">
        </div>
        <div class="articulo">
          <h2>¿No está? Añade</h2>
            <img class="add-icon" src="img/icons/agregar.svg" alt="Agregar-icon">
        </div>
        <div class="articulo">
          <h2>Y comparte.. </h2>
            <img  class="share-icon" src="img/icons/share.svg" alt="Compartir-icon">
        </div>
      </div>

    </main>
    <!-- fin contenido-->
    <footer>
      <div class="redes_sociales">
        <ul>
          <li>
            <a href="https://facebook.com/">
        <span class="fab fa-facebook"></span>
        facebook
      </a>
          </li>
          <li>
            <a href="https://twitter.com/">
        <span class="fab fa-twitter"></span>
        twitter
      </a>
          </li>
          <li>
            <a href="https://www.instagram.com/">
        <span class="fab fa-instagram"></span>
        instagram
      </a>
          </li>
          <li><a href="contacto">
            <span class="fas fa-info"></span>
            nfo
          </a></li>

        </ul>
      </div>
    </footer>
  </div>
  <!-- fin container-->

</body>

</html>
