<?php

  function getProducts() {
    $data = [];
    $file = fopen("./products.txt", "r");
    if($file) {
      while($line = fgetcsv($file)) {
        $data[] = $line;
      }
      return $data;
    }
    else {
      return false;
    }
    fclose("./products.txt");
  }

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      var_dump(getProducts());
    ?>
  </body>
</html>
