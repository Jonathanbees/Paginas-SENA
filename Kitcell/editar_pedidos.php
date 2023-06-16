<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizar</title>
<link rel="stylesheet" type="text/css" href="css/css_edi.css">

</head>

<body>

<?php

  session_start();

  if(!isset($_SESSION["usuario"])){

    header("Location:index.php");
  }


  require("conexion.php");

  //Si no ha pulsado en el boton actualizar
   if(!isset($_POST['actualizar'])){

      //Almacenar en variables lo que viene en la URL
      $id=$_GET["Id"];
      $nom=$_GET["nom"];
      $can=$_GET["can"];
      $fec=$_GET["fec"];

  //si pulso en actualizar
  }else{
      //recibir los valores de los input
      $id = $_POST["id"];
      $nom= $_POST["nom"];
      $can = $_POST["can"];
      $fec = $_POST["fec"];

      //$base->query("UPDATE `pedidos` SET Id_cliente='$cli', Id_libro='$lib', Fecha='$fec' WHERE Id_pedido='$id'");

      //Marcadores
      $sql="UPDATE `pedidos` SET  Nombre=:nom, Cantidad=:can, Fecha=:fec WHERE Id_pedido=:id";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":id"=>$id, ":nom"=>$nom, ":can"=>$can, ":fec"=>$fec));

      header("Location:index_pedidos.php");

  }

?>

<p>
 
</p>
<p>&nbsp;</p>

<!--Decirle al formulario que la operacipon se va a hacer en la misma pagina-->
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <table width="25%" border="0" align="center">

    <h1>ACTUALIZAR</h1>

    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id ?>"></td>
    </tr>

    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input class="but" type="text" name="nom" id="nom" value="<?php echo $nom ?>"></td>
    </tr>

    <tr>
      <td>Cantidad</td>
      <td><label for="can"></label>
      <input class="but" type="text" name="can" id="can" value="<?php echo $can?>"></td>
    </tr>

    <tr>
      <td>Fecha</td>
      <td><label for="fec"></label>
      <input class="but" type="text" name="fec" id="fec" value="<?php echo $fec ?>"></td>
    </tr>

    <tr>
      <td colspan="2"><input class="inp" type="submit" name="actualizar" id="actualizar" value="Actualizar"></td>
    </tr>

  </table>
</form>

<p>&nbsp;</p>
</body>
</html>