<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>informacion</title>

</head>

<body>
<?php

//include("conexion.php");



$cantidad = $_POST["cantidad_producto"];
$precio=$_POST['precio_producto'];



 $cantidad=0;
$precio=0;
	
	

if ($resul=$cantidad*5){
	
	
	echo $resul ;
	echo'<br>';
		
}

	
	
$cantidad=$resul;
	


// consulta insertar
 $sql="INSERT INTO ventas( Cantidad, Precio) VALUES (:can, :pre) VALUES ('$cantidad', '$precio' )";

include("conexion.php");
  //ejecutar consulta
//global $conexion;
//$resultado=$conexion->query($sql);



  if (($resul = mysqli_query($conexion, $sql))=== false) {

     die(mysqli_error($conexion));
    }
    
	


 // cerrar conexion
  mysqli_close($conexion);


echo "<a href=index_venta.php>ir a tabla</a> "; 

	?>