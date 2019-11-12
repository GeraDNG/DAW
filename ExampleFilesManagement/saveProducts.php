<?php

  $data = [$_POST["ID"], $_POST["name"], $_POST["price"], $_POST["QTY"]];
  $data = implode(",", $data);

  if(@file_put_contents("./products.txt", $data, FILE_APPEND)) {
    header("Location: ./productsList.php")
  }
  else {
    echo "Ha ocurrido un error al escribir en el archivo";
  }

?>
