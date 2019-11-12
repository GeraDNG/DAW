<?php

$filePath = "./test.txt";
$text = "Ese oso sí se asea";

if($numBytes = @file_put_contents($filePath, "\n" . $text, FILE_APPEND)){
    echo "Se escribieron $numBytes en el archivo '$filePath' <br/><br/>";
}
else{
    echo "No se pudo escribir en el archivo<br><br>";
}

if($data = @file_get_contents($filePath)){
    echo $data;
}
else{
    echo "No se pudo abrir el archivo";
}
