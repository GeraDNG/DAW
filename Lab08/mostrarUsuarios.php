<?php

  session_start();
  if (@!$_SESSION["started"]) {
    header("Location: ./registrarUsuario.php");
  }
  elseif (@$_SESSION["userType"] !== "admin") {
    header("Location: ./perfilUsuario.php");
  }

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
  </head>
  <body>
    <!-- Navegación -->
    <br /> <br />
    <div class="grid-2">
      <a href="./perfilUsuario.php" class="noUnderLine"> <strong> Perfil de Usuario </strong> </a>
      <a href="./logout.php" class="noUnderLine"> <strong> Logout </strong> </a>
    </div>
    <br /> <br /> <br /> <br /> <br />

    <!-- Lista -->
    <?php
      require_once "json.php";
      define("PATH","./usuarios.json");
      $aux = loadJson(PATH);
      $counter = 1;
      echo "<strong> Los usuarios registrados son: </strong> <br/>";
      foreach ($aux as $key => $value) {
        echo "<br/><br/> " . $counter . ") ";
        echo "<br/> Username: " . $value["userName"];
        echo "<br/> Nombre: " . $value["nombre"];
        echo "<br/> Apellido: " . $value["apellido"];
        echo "<br/> Fecha de nacimiento: " . $value["fechaNacimiento"];
        echo "<br/> Tipo de usuario: " . $value["userType"]  . "<br/>";
        $counter++;
      }
    ?>

    <br><br><br><br>

    <!-- Pie de página -->
    <footer class="nav">
      <p>Gerardo Daniel Naranjo Gallegos, A01209499 &copy; 2019</p>
      <p>Desarrollo de Aplicaciones Web. Laboratorio 08: Sesiones.</p>
    </footer>

  </body>
</html>
