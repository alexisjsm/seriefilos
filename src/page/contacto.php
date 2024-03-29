<?php session_start() ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/img/icons/favicon.png" type="image/x-png">
  <link rel="manifest" href="/manifest.json" >
  <meta charset="utf-8">
  <title>Seriefilos: Contacto</title>
  <link rel="stylesheet" href="../../estilo/css/estilo_contacto.css">
  <script src="../../lib/jquery/jquery-3.3.1.min.js"></script>
  <script src="../../js/api.js"></script>
  <script src="../../js/buscador.js"></script>
  <script src="../../js/enviarCorreo.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
  <div class="container">
    <header class="cabecera">
      <!--t-logo-->
      <nav class="menu">
        <ul>
          <li class="t-logo">
            Seriefilos  <span class="fas fa-angle-down"></span>
          </li>
          <li><a href="../../index">Inicio</a></li>
          <li><a href="/catalogo">Catálogo</a></li>
          <li class="s-menu">
            <?php if (isset($_SESSION['usuario'])&&!empty($_SESSION['usuario'])): ?>
              <a href="perfil"><?php echo $_SESSION['usuario'] ?></a>
              <div class="s-menu-contenido">
             <a href="logout">Cerrar sesión</a>
            <?php else: ?>
              <a href="../login">Iniciar sesión</a>
              <div class="s-menu-contenido">
                <a href="signup.php#Registrate">Registrate</a>
            <?php endif; ?>
            </div>
          </li>
        </ul>
        <div class="c-buscador">
          <form class="b-buscador" id="form_search" method="get" action="/catalogo">
            <button id="button_search" type="button" class="m-buscador">
        <span class="fa fa-search"></span>
      </button>
            <input type="search" id="buscador" name="buscador" value="" placeholder="Buscar..">
          </form>
        </div>
      </nav>
      <!-- menu -->
    </header>
    <!-- cabecera-->
    <main class="contenido" id="contenido">
      <div class="formulario">
        <form class="contacto" id="contacto" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend>Informacion y conctacto</legend>
            <?php if (!isset($_SESSION['usuario'])&&empty($_SESSION['usuario'])): ?>
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" value="" required>
              <label for="correo">Correo</label>
              <input type="email" name="correo" id="correo" value="" required>
            <?php endif; ?>
            <label for="asunto">Asunto</label>
            <input type="text" name="asunto" value=""  id="asunto" required>
            <label for="comentario">Comentario</label>
            <textarea name="comentario" id="comentario" required></textarea>
          </fieldset>
                  <div class="g-recaptcha" data-sitekey="6Lc6nVwUAAAAACbVVbJvzAcHhVdGUqzPwATI3YVh"></div>
          <div class="c-enviar">
            <button type="reset" name="Deshacer">
              <span class="fas fa-redo-alt"></span>
              Deshacer
            </button>
            <button type="submit" name="Enviar">
              <span class="far fa-paper-plane"></span>
              Enviar
            </button>
          </div>
        </form>
      </div>
    </main>
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
          <li><a href="#contenido">
            <span class="fas fa-info"></span>
            nfo
          </a></li>
        </ul>
      </div>
    </footer>
  </div>
</body>

</html>
