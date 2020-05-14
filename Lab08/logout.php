<?php

  session_start();
  if($_SESSION["started"]) {
    $_SESSION["started"] = false;
    /*
    unset($_SESSION["userName"]);
    unset($_SESSION["userType"]);
    unset($_SESSION["started"]);
    session_unset($_SESSION["userName"]);
    session_unset($_SESSION["userType"]);
    session_unset($_SESSION["started"]);
    */
    session_unset();
    session_destroy();
  }
  header("Location: registrarUsuario.php");

?>
