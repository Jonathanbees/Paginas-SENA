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
      $des=$_GET["des"];
      $can=$_GET["can"];
      $pre=$_GET["pre"];

  //si pulso en actualizar
  }else{
      //recibir los valores de los input
      $id = $_POST["id"];
      $nom = $_POST["nom"];
      $des = $_POST["des"];
      $can = $_POST["can"];
      $pre = $_POST["pre"];

      //$base->query("UPDATE `libros` SET Nombre='$nom', Autor='$aut', Categoria='$cat', Precio='$pre' WHERE Id_libro='$id'");

      //Marcadores
      $sql="UPDATE `productos` SET Nombre=:nom, Descripcion=:des, Cantidad=:can, Precio=:pre WHERE Id_producto=:id";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":id"=>$id, ":nom"=>$nom, ":des"=>$des, ":can"=>$can, ":pre"=>$pre));

      header("Location:index_productos.php");

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
      <td>Descripcion</td>
      <td><label for="des"></label>
      <input class="but" type="text" name="des" id="des" value="<?php echo $des ?>"></td>
    </tr>

    <tr>
      <td>Cantidad</td>
      <td><label for="can"></label>
      <input class="but" type="text" name="can" id="can" value="<?php echo $can ?>"></td>
    </tr>

    <tr>
      <td>Precio</td>
      <td><label for="pre"></label>
      <input class="but" type="text" name="pre" id="pre" value="<?php echo $pre ?>"></td>
    </tr>

    <tr>
      <td colspan="2"><input class="inp" type="submit" name="actualizar" id="actualizar" value="Actualizar"></td>
    </tr>

  </table>
</form>

<p>&nbsp;</p>
</body>
</html>