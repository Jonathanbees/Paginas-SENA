<?php

try{

	$base= new PDO ('mysql:host=localhost; dbname=cell2', 'root', '');
			
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$base->exec("SET CHARACTER SET utf8");

	//echo "Conexion exitosa";

}catch(Exception $e){
			
			
		die('Error: ' . $e->getline());	
			
	}


?>




