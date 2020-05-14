<?php

  session_start();
  if(@$_SESSION["started"]) {
    header("Location: perfilUsuario.php");
  }

?>

<!DOCTYPE html>

<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
  </head>

  <body>

    <!-- Navegación -->
    <br /> <br />
    <div class="nav">
      <a href="./login.php" class="noUnderLine"> <strong> Iniciar sesión </strong> </a>
    </div>

    <br /> <br /> <br /> <br /> <br />
    <!-- Formulario -->
    <form class="myForm" id="Lab07-Form" action="./control_formulario.php" method="POST">
      <!-- Entradas de texto -->
      <label for="userName"> <strong> Username: </strong> </label>
      <input type="text" name="userName" id="userName" placeholder="geradng" required autofocus/>
      <br />
      <label for="password"> <strong> Password: </strong> </label>
      <input type="text" name="password" id="password" placeholder="1Aa" required />
      <br />
      <label for="nombre"> <strong> Nombre: </strong> </label>
      <input type="text" name="nombre" id="nombre" placeholder="Gerardo Daniel" required />
      <br />
      <label for="apellido"> <strong> Apellido: </strong> </label>
      <input type="text" name="apellido" id="apellido" placeholder="Naranjo Gallegos" required />
      <br />
      <label for="fechaNacimiento"> <strong> Fecha de nacimiento: </strong> </label>
      <input type="text" name="fechaNacimiento" id="fechaNacimiento" value="AAAA/MM/DD" placeholder="AAAA/MM/DD" required />
      <br /> <br /> <br />
      <!-- Botón -->
      <input type="submit" name="enviar" value="Enviar formulario" />
      <br /> <br /> <br />
    </form>
    <br />

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Pie de página -->
    <footer class="nav">
      <p>Gerardo Daniel Naranjo Gallegos, A01209499 &copy; 2019</p>
      <p>Desarrollo de Aplicaciones Web. Laboratorio 08: Sesiones.</p>
    </footer>


  </body>

</html>
