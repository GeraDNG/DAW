<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejemplo 1 de PHP</title>
  </head>

  <body>

    <h1>PHP Example</h1>

    <?php
      define("PI", 3.141592);
      $var = "variableDeTexto";
      $arreglo = ["1", "2", "3"];
      echo "<h2> Este es un texto generado con PHP </h2> " . $var;
      echo "<h2> Este es un texto generado con PHP $var </h2> ";
      echo '<h2> Este es un texto generado con PHP </h2> $var';
      echo "<h2> Este es un arreglo </h2> "; print_r($arreglo);
      echo "<h2> Este es un arreglo </h2> "; var_dump($arreglo);

      phpinfo();
    ?>

  </body>
</html>
