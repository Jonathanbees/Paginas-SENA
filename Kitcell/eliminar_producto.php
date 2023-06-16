<?php
  require("conexion.php");
    session_start();

  if(!isset($_SESSION["usuario"])){

    header("Location:index.php");
  }
  

  require("conexion.php");


  $Id=$_GET["Id_producto"];

$base->query("DELETE FROM productos WHERE Id_producto='$Id'");



  header("Location:index_productos.php");

?>