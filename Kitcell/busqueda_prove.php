<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilostabla.css">
<meta charset="utf-8">
<title>Kit Cell | Consulta producto</title>
</head>

<body>
	
	<?php
	
	
	//guardar en una variable el input
	$busqueda=$_GET["busqueda"];
	
		try{
			
			$base= new PDO ('mysql:host=localhost; dbname=cell2', 'root', '');
			
			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			//carateres UTF8
			//$base->exec("SET CHARACTER SET uft8");
			
			$sql="SELECT Id_proveedor, Id_pedido, Nombre_proveedor, Cantidad, Ciudad FROM `proveedores` WHERE Nombre_proveedor LIKE '%$busqueda%'";
			
			
			//preparar la consulta 
			$resultado=$base->prepare($sql);
			
			//tenemos el objeto tipo statment
			
			//ejercutarlo, le pasamos un parametro de tipo array
			$resultado->execute(array($busqueda));
			
			//Asociar los campos del array con los campos de la sencia sql
				
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		


			
             	echo " <table class=tabl width=70% border=0 align=center><center>
				<center><h1><span class=> Resultado busqueda</span></h1>
				<tr><td> Id_proveedor:<br></td>" ."<tr><td>". $registro['Id_proveedor'] ."</td><tr>".
					"<tr><td> Id_pedido:<br></td>" ."<tr><td>". $registro['Id_pedido'] ."</td><tr>".
					"<tr><td> Nombre_proveedor:<br></td>" ."<tr><td>". $registro['Nombre_proveedor'] ."</td><tr>".
				"<br><td> Cantidad: <br></td>" ."<tr><td>" .$registro['Cantidad'] ."</td></tr> ".
				 "<br><td> Ciudad:<br></td>" . "<tr><td>" .$registro['Ciudad'] ."</td></tr>"."<td><a href=index_prove.php>volver</a></td>".
				  "<br>";
			"</tr>";
			"</center>";
			"</table>";
		}
					
		$resultado->closeCursor();
					
		}catch(Exception $e){
			
			
		die('Error: ' . $e->getMessage());	
			
	}finally{
		
		$base=null;
		
	}
	
	
	
	
	?>
	  
</body>
</html>