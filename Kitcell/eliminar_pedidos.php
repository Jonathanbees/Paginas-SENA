<?php
  require("conexion.php");
    session_start();

  if(!isset($_SESSION["usuario"])){

    header("Location:index.php");
  }
  

  $Id=$_GET["Id_pedido"];

  $base->query("DELETE FROM pedidos WHERE Id_pedido='$Id'");



  header("Location:index_pedidos.php");

?>