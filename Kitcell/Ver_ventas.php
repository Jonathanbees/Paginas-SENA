<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Informes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilosinicio.css">
<link rel="stylesheet" href="css/estilostabla.css">
<link rel="stylesheet" href="css/styl_for.css">
	
	
</head>
<body style="background-image: url(img/3.jpg)">

<?php

  session_start();

  if(!isset($_SESSION["usuario"])){

    header("Location:index.php");
  }

?>
	
		       		  <script type="text/javascript">
function Confirmacion() {
 
	if (confirm('Esta seguro que desea salir?')==true) {
	    alert('usted ha salido con exito');
	    return true;
	}else{
	    //alert('Cancelo la eliminacion');
	    return false;
	}
}
</script>

<header class= "header">
    <div class="container logo-nav">
      <a href="menu.php" class="logo">Univercell</a>
      <span class="menu-icon">Menú</span>
      <nav class="navigation">
        <ul>
               
             <li><a href="index_ventas.php">Ventas</a></li>
             <li><a href="index_clientes.php">Clientes</a></li>
             <li><a href="index_pedidos.php">Pedidos</a></li>
             <li><a href="index_productos.php">Productos</a></li> 
             <li><a href="index_prove.php">Provedores</a></li> 
             <li><a href="index_usuarios.php">Usuarios</a></li>
			<li><a href="Ver_ventas.php">Informe</a></li>
             <li><a href="cerrar_sesion.php" onclick="return Confirmacion()">Salir</a></li>      
        </ul>  
	  </nav> 
    </div> 
</header>
 
   
<br><br> <br><br> <br><br> <br><br><br><br>        
    
<center>
  <main class="id">
	  <h2><label for="" style="color:white">Ventas por dia:</label></h2>

	  <form action="Vista_venta.php" method="get">
		<!----><input type="date" id="start" name="fecha_venta" value="2022-02-21"
			   min="2018-01-01" max="2022-05-31">

	
	
		<input type="submit" value="Buscar por dia">
	 </form>
	  </center>
	 
	<br><br>
	  
	<center>  <form action="Vista_venta.php" method="get">
	
	<h2><label for="" style="color:white">Ventas por mes:</label></h2>
	
	<select name="fecha_venta">
		<option value="Enero" name="fecha_venta">Enero</option>
		<option value="febrero" name="fecha_venta">Febrero</option>
		<option value="Marzo" name="fecha_venta">Marzo</option>
		<option value="Abril" name="fecha_venta">Abril</option>
		<option value="Mayo" name="fecha_venta">Mayo</option>
		<option value="Junio" name="fecha_venta">Junio</option>
		<option value="Julio" name="fecha_venta">Julio</option>
		<option value="Agosto" name="fecha_venta">Agosto</option>
		<option value="Septiembre" name="fecha_venta">Septiembre</option>
		<option value="Octubre" name="fecha_venta">Octubre</option>
		<option value="Noviembre" name="fecha_venta">Noviembre</option>
		<option value="Diciembre" name="fecha_venta">Diciembre</option>
	</select>
		
	</select>
	
		<input type="submit" value="Buscar por mes">
	
	  </form>
	  
	
	  </center>
	  
	  
</main>
<br><br><br><br><br><br><br>

<!------------------------------------------------------------------------------------------------------------------>

<footer class="footer">
  <div class="container">
    Univercell N.D, Copyright &copy; 2022
  </div>
</footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./javascript/script.js"></script>
  <script src="./javascript/eliminarpublicidad.js"></script>
</body>
</html>