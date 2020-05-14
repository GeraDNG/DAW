<?php

  session_start();
  require_once "modelo_usuarios.php";

  function validarUsuario() {
    if ($receivedData = leerUsuarios()) {
      foreach ($receivedData as $user) {
        if ($user["userName"] === $_POST["userName"]) {
          if ($user["password"] === $_POST["password"]) {
            $_SESSION["userName"] = $user["userName"];
            $_SESSION["userType"] = $user["userType"];
            $_SESSION["started"] = true;
            date_default_timezone_set("America/Mexico_City");
            $_SESSION["time"] = date("Y-m-d h:i:sa");
            return true;
          }
        }
      }
      return false; // No se ocupan los return false, al validar con el IF-ELSE
    }
    return false;
  }

  if ( validarUsuario() ) {
    header("Location: index.php");
  }
  else {
    $_SESSION["started"] = false;
    header("Location: errorLogin.html");
  }

?>
