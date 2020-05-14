<?php
require_once "json.php";

define("PATH","./usuarios.json");

/*function guardarUsuario($usuario) {
  if(loadJson(PATH)){
    $listaUsuarios[uniqid()] = $usuario;
    return writeJson(PATH, $listaUsuarios);
  }
  return false;
}*/

function guardarUsuario($usuario) {
  if($receivedData = loadJson(PATH)){
    $listaUsuarios[uniqid()] = $usuario;
    $dataToWrite = $receivedData + $listaUsuarios;
    return writeJson(PATH, $dataToWrite);
  }
  return false;
}

?>
