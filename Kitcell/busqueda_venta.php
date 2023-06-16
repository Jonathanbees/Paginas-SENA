<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilostabla.css">
<meta charset="utf-8">
<title>Kit Cell | Consulta venta</title>
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
			
			$sql="SELECT Id_venta, Id_producto, Id_cliente, Id_usuario, Fecha, Cantidad, Precio FROM `ventas` WHERE Id_venta LIKE '%$busqueda%'";
			
			
			//preparar la consulta 
			$resultado=$base->prepare($sql);
			
			//tenemos el objeto tipo statment
			
			//ejercutarlo, le pasamos un parametro de tipo array
			$resultado->execute(array($busqueda));
			
			//Asociar los campos del array con los campos de la sencia sql
				
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){


			
             	echo " <table class=tabl width=70% border=0 align=center><center>
				<center><h1><span class=> Resultado busqueda</span></h1>
				 <tbody>
				<tr><td> Id_venta:<br></td>" ."<tr><td>". $registro['Id_venta'] ."</td><tr>".
					"<tr><td> Id_producto:<br></td>" ."<tr><td>". $registro['Id_producto'] ."</td><tr>".
					"<tr><td> Id_cliente:<br></td>" ."<tr><td>". $registro['Id_cliente'] ."</td><tr>".
					"<tr><td> Id_usuario:<br></td>" ."<tr><td>". $registro['Id_usuario'] ."</td><tr>".
					"<tr><td> Fecha:<br></td>" ."<tr><td>". $registro['Fecha'] ."</td><tr>".
				 "<br><td> Cantidad: <br></td>" ."<tr><td>" .$registro['Cantidad'] ."</td></tr> ".
				 "<br><td> Precio:<br></td>" . "<tr><td>" .$registro['Precio'] ."</td></tr>"."<td><a href=index_ventas.php>volver</a></td>".
				  "<br>";
			"</tr>";
			"</center>";
			"</tbody>";
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