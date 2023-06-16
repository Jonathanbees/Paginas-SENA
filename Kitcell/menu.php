


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Menu</title>
  <link rel="stylesheet" href="css/estilosinicio.css">
  <link rel="stylesheet" href="css/cartasinicio.css">
  <link rel="stylesheet" href="css/textosinicio.css">

</head>
<body>

<?php

  session_start();

  if(!isset($_SESSION["usuario"])){

    #header("Location:index.php");
    echo '<script>window.location="index.php"</script>';
  }

  ?>
<script type="text/javascript">
function Confirmation() {
 
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
             <li><a href="index_prove.php">Proveedores</a></li> 
             <li><a href="index_usuarios.php">Usuarios</a></li>   
			       <li><a href="Ver_ventas.php">Informes</a></li> 
             <li class="curren"><a href="cerrar_sesion.php" onclick="return Confirmation()">Salir</a></li>
	      </ul>			
  	  </nav>	
    </div>
  </header>


<main class="main">
    <div class="container">
      <br><br>
		  <h2>Bienvenid@ <?php echo $_SESSION["usuario"]?></h2>
      <br>
      <h3>¿Que es KitCell?</h3>
      <br>
      <p>Es un proyecto nacido de la problemática acerca de los inventarios manuales, en los que los datos de los productos, o las ventas diarias de los mismos, pueden llegar a <b>perderse</b> por algún error humano, por lo que es necesario un sistema de <i>inventario</i> en el que se puedan almacenar los datos sin riesgo de pérdida a la vez de tener la capacidad de consultarlos en cualquier momento
      </p>
      <p><img src="./img/Logo-kitcell.png" alt="imagen-kitcell" ></p>
      <h3>¿Hacia quien va desarrollado?</h3>
      <br>
      <p>Es un software que puede ser modelado hacia cualquier tipo de pequeña empresa, para este caso particular, la empresa <b>Univercell</b>, un pequeño negocio de la localidad de Sonsón(Colombia-Antioquia), el cual es un negocio que se dedica a la venta y distribución de artículos tecnológicos.
      </p>
      <p><img src="./img/Univercell-logo.png" alt="imagen-univercell"></p>
    </div>
  
  <h2 class="title">Creadores</h2>
  <div class="card-deck">

    <div class="card">
      <img  src="./img/Jonathan.jpg" alt="Jonathan" style="height:350px">
        <div class="contenido-card">
          <h3 class="card-title">Jonathan Betancur</h3>
          <p>Aprendiz del SENA y estudiante de la universidad EAFIT, interesado por el desarrollo de bases de datos, y diseño web</p>
          <a href="https://api.whatsapp.com/send?phone=573043910313&text=Hola,%20quiero%20saber%20más%20de%20ti%20" target="_blank">Conocer más</a>
        </div>
    </div>

    <div class="card">
      <img src="./img/Natalia.jpeg" alt="Natalia" style="height:350px">
        <div class="contenido-card">
          <h3>Kelly Natalia Durán</h3>
          <p>Aprendiz del SENA, propietaria del negocio: Univercell, al cual se le dedica el proyecto. Interesada por el desarrollo de las bases de datos</p>
          <a href="https://api.whatsapp.com/send?phone=573005783672&text=Hola,%20quiero%20saber%20más%20de%20ti" target="_blank">Conocer más</a>
        </div>
    </div>

    <div class="card">
      <img src="./img/Santiago.png" alt="Santiago" style="height:350px">
        <div class="contenido-card">
          <h3 class="card-title">Santiago Ossa</h3>
          <p class="card-text">Aprendiz del SENA, interesado el diseño web a la vez del establecimiento de la conexión de las bases de datos</p>
          <a href="https://api.whatsapp.com/send?phone=573136728867&text=Hola,%20quiero%20saber%20más%20de%20ti%20" target="_blank">Conocer más</a>
        </div>
    </div>
  </div>
</main>
<footer class= "footer">
  <div class="container">
    Univercell N.D, Copyright &copy; 2022
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./javascript/script.js"></script>
</body>
</html>
 