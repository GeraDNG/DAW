<?php

  session_start();
  if(@!$_SESSION["started"]) {
    header("Location: ./registrarUsuario.php");
  }

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil de usuario</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
  </head>
  <body>
    <!-- Navegación -->
    <br/> <br/>
    <div class="grid-2">
      <a href="./mostrarUsuarios.php" class="noUnderLine"> <strong> Lista de Usuarios </strong> </a>
      <a href="./logout.php" class="noUnderLine"> <strong> Logout </strong> </a>
    </div>
    <br/> <br/> <br/> <br/> <br/>

    <p> <strong> Bienvenid@, <?php echo $_SESSION["userName"]; ?> </strong> </p>
    <br/> <br/> <br/>

    <!-- Información del usuario -->
    Información del usuario:
    <br/>
    <?php
      require_once "json.php";
      define("PATH","./usuarios.json");
      $receivedData = loadJson(PATH);
      foreach ($receivedData as $user) {
        if($user["userName"] === $_SESSION["userName"]) {
          echo "<br/> Username: " . $user["userName"];
          echo "<br/> Nombre: " . $user["nombre"];
          echo "<br/> Apellido: " . $user["apellido"];
          echo "<br/> Fecha de nacimiento: " . $user["fechaNacimiento"];
          echo "<br/> Tipo de usuario: " . $user["userType"];
          echo "<br/> Inicio de sesión: " . $_SESSION["time"] . "<br/>";
        }
      }
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Pie de página -->
    <footer class="nav">
      <p>Gerardo Daniel Naranjo Gallegos, A01209499 &copy; 2019</p>
      <p>Desarrollo de Aplicaciones Web. Laboratorio 08: Sesiones.</p>
    </footer>

  </body>


</html>
