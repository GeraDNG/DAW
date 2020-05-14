<?php

  require_once "./modelo_usuarios.php";

  $usuario =  [
                "userName" => $_POST["userName"],
                "password" => $_POST["password"],
                "nombre" => $_POST["nombre"],
                "apellido" => $_POST["apellido"],
                "fechaNacimiento" => $_POST["fechaNacimiento"]
              ];

  if(guardarUsuario($usuario)){
    header("Location: ./mostrarUsuarios.php");
  }
  else {
    header("Location: error.html");
  }

?>
