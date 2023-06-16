<?php
  require("conexion.php");
    session_start();

  if(!isset($_SESSION["usuario"])){

    header("Location:index.php");
  }
  

  $Id=$_GET["Id_proveedor"];

  $base->query("DELETE FROM proveedores WHERE Id_proveedor='$Id'");

  header("Location:index_prove.php");

?>