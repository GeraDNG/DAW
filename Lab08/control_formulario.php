<?php

  require_once "./modelo_usuarios.php";

  $usuario =  [
                "userName" => $_POST["userName"],
                "password" => $_POST["password"],
                "nombre" => $_POST["nombre"],
                "apellido" => $_POST["apellido"],
                "fechaNacimiento" => $_POST["fechaNacimiento"],
                "userType" => "mortal"
              ];

  if(guardarUsuario($usuario)) {
    session_start();
    $_SESSION["started"] = true;
    $_SESSION["userName"] = $_POST["userName"];
    $_SESSION["userType"] = "mortal";
    date_default_timezone_set("America/Mexico_City");
    $_SESSION["time"] = date("Y-m-d h:i:sa");
    header("Location: ./index.php");
  }
  else {
    header("Location: error.html");
  }

?>
