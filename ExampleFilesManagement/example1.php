<?php

  $filePath = "./example1.txt";
  $text = "Ese oso sí se asea";

  if($numBytes = @file_put_contents($filePath, $text, FILE_APPEND)) {
    echo "Archivo editado con $numBytes en el archivo '$filePath' <br/><br/>";
  }
  else {
    echo "No se puede escribir en el archivo <br/><br/>";
  }

  if ($data = @file_get_contents($filePath)) {
    echo $data . "<br/><br/>";
  }
  else {
    echo "No hay archivo <br/><br/>";
  }

?>
