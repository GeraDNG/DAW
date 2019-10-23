<?php

  $name = isset($_GET["key"]) ? $_GET["key"] : NULL;
  $lastName = NULL;

  if(empty($name)) {
    die("Nombre no definido");
  }
  elseif ($name === "Gerardo" || $name === "gerardo") {
    $lastName = "Naranjo";
  }
  else {
    $lastName = "(Apellido no encontrado)";
  }
  /*
  switch($name){
    case "gerardo":
      $lastname = "Naranjo";
      break;
    default:
      break;
  }
  */

  

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Example 2 PHP</title>
  </head>
  <body>

    <strong>El nombre es: </strong>
    <?php echo "$name $lastName"; ?>

  </body>
</html>
