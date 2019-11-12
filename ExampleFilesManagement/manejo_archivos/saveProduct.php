<?php

$data = [$_POST["id"],$_POST["name"],$_POST["price"],$_POST["qty"]];
$data = implode(",",$data) . "\n";

if(@file_put_contents("./products.txt", $data, FILE_APPEND)){
    header("Location: ./productsList.php");
}
else{
    echo "Ha ocurrido un error al escribir en el archivo";
}
