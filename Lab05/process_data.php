<?php

/*
echo "<pre>";
var_dump($_POST);
echo "<pre>";
*/

/*
$_POST es la variable que contiene los datos recibidos por el método POST de HTTP
$_GET es la variable que contiene los datos recibidos por el método GET de HTTP
Ambas variables son arreglos asociativos de PHP, esto quiere decir que sus índices son strings y no números
Las llaves de los arreglos corresponden a los "names" de los campos del formulario que se envió
Ejemplo de arreglo POST:

array(6) {
  ["numbers"]=>
  string(9) "1,2,3,4,5"
  ["sort_order"]=>
  string(4) "desc"
  ["number_type"]=>
  string(1) "2"
  ["stats"]=>
  array(1) {
    ["prom"]=>
    string(1) "1"
  }
  ["background_color"]=>
  string(7) "#ff0000"
  ["submit"]=>
  string(12) "Enviar datos"
}
*/

echo "Números: " . $_GET["numbers"] . "<br/>";
echo "Orden: " . $_GET["sort_order"] . "<br/>";
echo "Tipo de números: " . $_GET["number_type"] . "<br/>";
echo "Estadísticas: <br/>";
/*
foreach($_POST["stats"] as $name => $value){
	echo $name . ": " . $value . "<br/>";
}
*/
echo $_GET["stats"] .  "<br/>";

echo "Color: " . $_GET["background_color"];

?>
