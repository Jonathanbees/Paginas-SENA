<?php
  require("conexion.php");
    session_start();

  if(!isset($_SESSION["usuario"])){

    header("Location:index.php");
  }
  

  $Id=$_GET["Id"];

  $base->query("DELETE FROM usuarios WHERE Id='$Id'");

  header("Location:index_usuarios.php");

?>