<?php
  require("conexion.php");
    session_start();

  if(!isset($_SESSION["usuario"])){

    header("Location:index.php");
  }


 
  

  $Id=$_GET["Id_venta"];

  $base->query("DELETE FROM ventas WHERE Id_venta='$Id'");

  header("Location:index_ventas.php");

?>