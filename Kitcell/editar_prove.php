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
     
      $nombre=$_GET["nom"];
      $can=$_GET["can"];
      $ciu=$_GET["ciu"];
      

  //si pulso en actualizar
  }else{
      //recibir los valores de los input
      $id = $_POST["id"];
     
  $nombre=$_POST["nom"];
      $can = $_POST["can"];
      $ciu = $_POST["ciu"];
     

      //$base->query("UPDATE `proveedores` SET Nombre='$nom', Ciudad='$ciu', Telefono='$tel', Id_libro='$lib', Cantidad='$can' WHERE Id_proveedor='$id'");

      //Marcadores
      $sql="UPDATE `proveedores` SET  Nombre_proveedor=:nom, Cantidad=:can , Ciudad=:ciu WHERE Id_proveedor=:id";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":id"=>$id,  ":nom"=>$nombre, ":can"=>$can, ":ciu"=>$ciu));

      header("Location:index_prove.php");

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
      <td>Nombre_prove</td>
      <td><label for="nom"></label>
      <input class="but" type="text" name="nom" id="nom" value="<?php echo $nombre ?>"></td>
    </tr>
    <tr>
      <td>Cantidad</td>
      <td><label for="can"></label>
      <input class="but" type="text" name="can" id="can" value="<?php echo $can ?>"></td>
    </tr>

    <tr>
      <td>Ciudad</td>
      <td><label for="ciu"></label>
      <input class="but" type="text" name="ciu" id="ciu" value="<?php echo $ciu ?>"></td>
    </tr>

   

    

    <tr>
      <td colspan="2"><input class="inp" type="submit" name="actualizar" id="actualizar" value="Actualizar"></td>
    </tr>

  </table>
</form>

<p>&nbsp;</p>
</body>
</html>