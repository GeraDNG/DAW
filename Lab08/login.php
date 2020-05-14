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
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
  </head>
  <body>
    <!-- Navegación -->
    <br/> <br/>
    <div class="nav">
      <a href="./registrarUsuario.php" class="noUnderLine"> <strong> Registro de Usuarios </strong> </a>
    </div>
    <br/> <br/> <br/> <br/> <br/>


    <br> <br>
    <!-- Title -->
    <strong>Login Page</strong>
    <br> <br>
    <!-- Formulario -->
    <form class="myForm" id="Lab08-Form" action="./control_login.php" method="POST">
      <!-- Entradas de texto -->
      <label for="userName"> <strong> Username: </strong> </label>
      <input type="text" name="userName" id="userName" placeholder="geradng" required autofocus/>
      <br />
      <label for="password"> <strong> Password: </strong> </label>
      <input type="password" name="password" id="password" placeholder="1Aa" required />
      <br /> <br /> <br />
      <!-- Botón -->
      <input type="submit" name="enviar" value="Iniciar sesión" />
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
