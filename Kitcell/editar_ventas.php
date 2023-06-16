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

      $prod=$_GET["prod"];
      $cli=$_GET["cli"];
      $usu=$_GET["usu"];
	   $fec=$_GET["fec"];
      $can=$_GET["can"];
	   $pre=$_GET["pre"];
      
  //si pulso en actualizar
  }else{
      //recibir los valores de los input
      $id = $_POST["id"];

      $prod = $_POST["prod"];
      $cli = $_POST["cli"];
      $usu = $_POST["usu"];
	   $fec = $_POST["fec"];
      $can = $_POST["can"];
      $pre = $_POST["pre"];

      //$base->query("UPDATE `pedidos` SET Id_cliente='$cli', Id_libro='$lib', Fecha='$fec' WHERE Id_pedido='$id'");

      //Marcadores
      $sql="UPDATE `ventas` SET Id_producto=:prod, Id_cliente=:cli, Id_usuario=:usu, Fecha=:fec, Cantidad=:can, Precio=:pre WHERE Id_venta=:id";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":id"=>$id, ":prod"=>$prod, ":cli"=>$cli, ":usu"=>$usu, ":fec"=>$fec, ":can"=>$can, ":pre"=>$pre));

      header("Location:index_ventas.php");

    }

?>


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
      <td>Id_producto</td>
      <td><label for="prod"></label>
      <input class="but" type="text" name="prod" id="prod" value="<?php echo $prod ?>"></td>
    </tr>

   <tr>
      <td>Id_cliente</td>
      <td><label for="cli"></label>
      <input class="but" type="text" name="cli" id="cli" value="<?php echo $cli ?>"></td>
    </tr>

   <tr>
      <td>Id_usuario</td>
      <td><label for="usu"></label>
      <input class="but" type="text" name="usu" id="usu" value="<?php echo $usu ?>"></td>
    </tr>
	  
   <tr>
      <td>Fecha</td>
      <td><label for="fec"></label>
      <input class="but" type="text" name="fec" id="fec" value="<?php echo $fec ?>"></td>
    </tr>
	  
  
    <tr>
      <td>Cantidad</td>
      <td><label for="can"></label>
      <input class="but" type="text" name="can" id="can" value="<?php echo $can?>"></td>
    </tr>

    <tr>
      <td>Precio</td>
      <td><label for="pre"></label>
      <input class="but" type="text" name="pre" id="pre" value="<?php echo $pre?>"></td>
    </tr>

    <tr>
      <td colspan="2"><input class="inp" type="submit" name="actualizar" id="actualizar" value="Actualizar"></td>
    </tr>

  </table>
</form>

<p>&nbsp;</p>
</body>
</html>