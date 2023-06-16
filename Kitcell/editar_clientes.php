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
      $tel=$_GET["tel"];
      $dir=$_GET["dir"];

  //si pulso en actualizar
  }else{
      //recibir los valores de los input
      $id = $_POST["id"];
      $nom = $_POST["nom"];
      $tel = $_POST["tel"];
      $dir = $_POST["dir"];

      //$base->query("UPDATE `clientes` SET Nombre='$nom', Apellido='$ape', Cedula='$ced', Telefono='$tel', Direccion='$dir' WHERE Id_cliente='$id'");

      //Marcadores
      $sql="UPDATE `clientes` SET Nombre=:nom, Telefono=:tel, Direccion=:dir WHERE Id_cliente=:id";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":id"=>$id, ":nom"=>$nom, ":tel"=>$tel, ":dir"=>$dir));

      header("Location:index_clientes.php");

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
      <td>Telèfono</td>
      <td><label for="tel"></label>
      <input class="but" type="text" name="tel" id="tel" value="<?php echo $tel ?>"></td>
    </tr>

    <tr>
      <td>Direcciòn</td>
      <td><label for="dir"></label>
      <input class="but" type="text" name="dir" id="dir" value="<?php echo $dir ?>"></td>
    </tr>

    <tr>
      <td colspan="2"><input class="inp" type="submit" name="actualizar" id="actualizar" value="Actualizar"></td>
    </tr>

  </table>
</form>

<p>&nbsp;</p>
</body>
</html>