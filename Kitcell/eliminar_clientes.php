<?php
  require("conexion.php");
    session_start();

  if(!isset($_SESSION["usuario"])){

    header("Location:index.php");
  }


  $Id=$_GET["Id_cliente"];

  $base->query("DELETE FROM `clientes` WHERE Id_cliente='$Id'");


  header("Location:index_clientes.php");

?>