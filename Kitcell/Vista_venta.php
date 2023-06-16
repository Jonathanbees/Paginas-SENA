<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Informes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilosinicio.css">
<link rel="stylesheet" href="css/estilostabla.css">
	
	
</head>
<body>

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

 <main class="main">
    <div class="container"><br><br>
  


<!--------------------------------------------------------------------------------------------------------->

  <?php

  require("conexion.php");


 
//---------------------------------------------VER LOS REGISTROS-------------------------------------------



  $resultado=$base->query("SELECT * FROM ventas");
  //guardar en $registros un array de objetos
  //ARRAY DE Objectos asociativos
  $registros=$resultado->fetchAll(PDO::FETCH_OBJ);


  $num_fila=$resultado->rowCount();

    

    $resultado->closeCursor();

  
		 
		  

  ?>

<!-----------------------------------------------FORMULARIO-------------------------------------------------------->
<h1><span class="subtitulo">Total de ventas</span></h1>
<center><form action="busqueda_venta.php" method="get">
	
  <label>Buscador</label>
  
  <input type="text" name="busqueda">
  
  
  <input type=submit value="Buscar">

  </center>
    
   </form>


<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <div class="table-container">
    <table class="tabl" width="70%" border="0" align="center">

      <?php
	
	$sumar_total=0;	
	   
$fecha_venta=$_GET['fecha_venta'];
		
		//por mes
     if ($fecha_venta=='Enero'){
    
      $fecha_venta='2022-02-%';
      }

		if ($fecha_venta=='Febrero'){
    
      $fecha_venta='2022-02-%';
      
      
    }
    if ($fecha_venta=='Marzo'){
    
      $fecha_venta='2022-03-%';
      
      
    }

    if ($fecha_venta=='Abril'){
    
      $fecha_venta='2022-04-%';
      
      
    }
    if ($fecha_venta=='Mayo'){
    
      $fecha_venta='2022-05-%';
      
      
    }

    if ($fecha_venta=='Junio'){
    
      $fecha_venta='2022-06-%';
      
      
    }
    if ($fecha_venta=='Julio'){
    
      $fecha_venta='2022-07-%';
      
      
    }

    if ($fecha_venta=='Agosto'){
    
      $fecha_venta='2022-08-%';
      
      
    }
    if ($fecha_venta=='Septiembre'){
    
      $fecha_venta='2022-09-%';
      
      
    }

    if ($fecha_venta=='Octubre'){
    
      $fecha_venta='2022-10-%';
      
      
    }
    if ($fecha_venta=='Noviembre'){
    
      $fecha_venta='2022-11-%';
      
      
    }

    if ($fecha_venta=='Diciembre'){
    
      $fecha_venta='2022-12-%';
      
      
    }
		//por año
	 
       $resultado=$base->query("SELECT * FROM ventas WHERE Fecha LIKE '$fecha_venta'");
	   
       $registros=$resultado->fetchAll(PDO::FETCH_OBJ);
		

      ?>
    <thead>
      <tr>
        <th class="primera_fila">Id_venta</th>
		    <th class="primera_fila">Id_producto</th>
		    <th class="primera_fila">Id_cliente</th>
		    <th class="primera_fila">Id_usuario</th> 
		    <th class="primera_fila">Fecha</th>
        <th class="primera_fila">Cantidad</th>
        <th class="primera_fila">Precio</th>
		  </tr> 
    </thead>
    <tbody>
        <?php
        
        foreach ($registros as $product):    
        ?>
      <tr>
        <!--ver los registros-->
        <td><?php echo $product->Id_venta?></td>
		    <td><?php echo $product->Id_producto?></td>
		    <td><?php echo $product->Id_cliente?></td>
		    <td><?php echo $product->Id_usuario?></td>
		    <td><?php echo $product->Fecha?></td>
        <td><?php echo $product->Cantidad?></td>
        <td><?php echo $product->Precio?></td>
		<?php
	
		 $sumar_total=$sumar_total+$product->Precio;
		  ?>
		


      <?php  
        endforeach;
        ?>
        
		  
		  
		  <?php
	//Mostrar valor total opc
			
			//$resultadoss=$base->query("SELECT SUM(Precio)FROM ventas");
			
			   //$registross=$resultadoss->fetchAll(PDO::FETCH_OBJ);
		
			//preparar la consulta 

		
		
?>
      </tr>
      </tbody>
    </table>
  </form>
  </div>
		  <div class="form-group">
			<label class="total">Total|Ventas</labe> 
			  <input type="text" value="$<?php echo $sumar_total?>"class="form-control" disabled>
      </div>
  
      </main>

<!------------------------------------------------------------------------------------------------------------------>

 <footer>

  
  </footer>
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