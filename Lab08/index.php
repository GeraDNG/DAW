<?php

  session_start();
  if ($_SESSION["started"]) {
    if($_SESSION["userType"] === "admin") {
      header("Location: ./mostrarUsuarios.php");
    }
    else {
      header("Location: ./perfilUsuario.php");
    }
  }
  else {
    header("Location: ./registrarUsuario.php");
  }

?>
