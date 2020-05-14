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
    <a href="./index.html" class="noUnderLine"> <strong> Ir a registro de usuarios </strong> </a>
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
        echo "<br/> Fecha de nacimiento: " . $value["fechaNacimiento"] . "<br/>";
        $counter++;
      }
    ?>
  </body>
</html>
