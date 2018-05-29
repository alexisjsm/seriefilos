<?php
// session_start();

require_once '../../Controlador/ObtenerUsuario.php';
// require_once '../../Controlador/ObtenerSeries.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Seriefilos: <?php echo $_SESSION['usuario'] ?></title>
  <link rel="icon" href="../img/favicon.png" type="image/x-png">
  <link rel="stylesheet" href="../../estilo/css/estilo_contacto.css">
  <link rel="stylesheet" href="../../estilo/css/estilo_perfil.css">
  <script src="../../lib/jquery/jquery-3.3.1.min.js"></script>
  <script src="../../js/buscador.js"></script>

</head>

<body>
  <div class="container">
    <header class="cabecera">
      <nav class="menu">
        <ul>
          <li class="t-logo">
            Seriefilos
          </li>
          <!--t-logo-->
          <li><a href="../../index.php">Inicio</a></li>
          <li><a href="catalogos.php">Catálogo</a></li>
          <li><a href="contacto.php">Contactos</a></li>

          <li class=""><a href="logout.php">Cerrar sesión</a></li>
        </ul>
        <div class="c-buscador">
          <form class="b-buscador" id="form_search" method="get" action="catalogos.php">
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
        <form class="perfil" id="perfil" method="post" enctype="multipart/form-data" >
          <fieldset>
            <legend>Datos del usuario</legend>
            <div class="c-foto">
              <img src="<?php echo $resultado[0]['foto'] ?>" id="imagen" alt="<?php echo "imagen de perfil de ". $_SESSION['usuario'] ?>">
              <div id="c-subir" hidden>
                <label for="subir">Subir foto de perfil</label>
                <input type="file" name="foto" id="foto" value="" accept="image/jpeg,image/gif,image/x-png">
            </div>
          </div>
              <label for="usuario">Usuario</label>
              <input type="text" name="usuario" id="usuario" value="<?php echo $resultado[0]['usuario']?>" disabled>
              <label for="email">Email</label>
              <input type="email" name="email" id="email" value="<?php echo $resultado[0]['email'] ?>" disabled>
              <div>
                <div class="password" hidden>
                  <label for="password">Nueva contraseña</label>
                  <input type="password" name="password" value="" id=password pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{4,16}$">

                  <label for="repeat">Repetir la nueva contraseña</label>
                  <input type="password" name="repeat" value="" id="repeat" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{4,16}$">
                </div>
            </fieldset>
          <fieldset>
            <legend>Datos personales</legend>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $resultado[0]['nombre'] ?>" disabled>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" value="<?php echo $resultado[0]['apellidos']; ?>" disabled>
            <label for="cumple">Cumpleaño</label>
            <input type="date" name="cumple" id="cumple" value="<?php echo $resultado[0]['cumple']; ?>" disabled>
          </fieldset>
          <div class="c-editar" id="c-editar">
              <button  type="button" name="Editar" id="Editar">
                <span class="fas fa-edit"></span>
                Editar
              </button>
          </div>
          <div hidden id="c-enviar">
            <button type="reset" name="Deshacer">
              <span class="fas fa-redo-alt"></span>
              Deshacer
            </button>
            <button type="submit" name="Enviar" id="Enviar">
              <span class="far fa-paper-plane"></span>
              Enviar
            </button>
          </div>
        </form>
        <script src="../../js/EditarUsuario.js"></script>
      </div>
    <!-- Adminitrador -->
        <?php include_once '../../modulos/administrador.php'; ?>

    <!-- Adminitrador -->
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
        </ul>
      </div>
    </footer>
  </div>
</body>

</html>
