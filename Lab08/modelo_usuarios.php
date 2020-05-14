<?php
require_once "json.php";

define("PATH","./usuarios.json");

function guardarUsuario($usuario) {
  if($receivedData = loadJson(PATH)){
    $listaUsuarios[uniqid()] = $usuario;
    $dataToWrite = $receivedData + $listaUsuarios;
    return writeJson(PATH, $dataToWrite);
  }
  return false;
}

function leerUsuarios() {
  if($receivedData = loadJson(PATH)){
    return $receivedData;
  }
  return false;
}

?>
