<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilosinicio.css">
<link rel="stylesheet" href="css/estilostabla.css">
	
</head>
	

	
	
<body>

<?php

  


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
             <li class="current"><a href="menu.php">Inicio</a></li>
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
  
		    
	
	
        

 <!--------------------------------------------------------------------------------------------------->

  <?php

  require("conexion.php");


  $tamano_pag=15;

    if (isset($_GET['pagina'])){

      if($_GET['pagina']==1){

        header("Location:index_usuarios.php");

      }else{

        $pagina=$_GET['pagina'];
      }

      }else{

    $pagina=1;

  }

  $empezar_desde=($pagina-1)*$tamano_pag;

//------------------------------------------VER LOS REGISTROS-------------------------------------------

  $resultado=$base->query("SELECT * FROM usuarios");

  $registros=$resultado->fetchAll(PDO::FETCH_OBJ);


  $num_fila=$resultado->rowCount();

    $total_pagina=ceil($num_fila/$tamano_pag);  

    $resultado->closeCursor();


//----------------------------------------INGRESAR REGISTROS-------------------------------------------- 



?>

<!-------------------------------------------FORMULARIO-------------------------------------------------------->

<h1><span class="subtitulo">Usuario</span></h1>
<center><form action="busqueda_usuario.php" method="get">
	
  <label>Buscador</label>
  
  <input type="text" name="busqueda">
  
  
  <input type=submit value="Buscar">

  </center>


  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

    <table width="70%" border="0" align="center">


      <?php

      $resultado=$base->query("SELECT * FROM usuarios LIMIT $empezar_desde, $tamano_pag");

       $registros=$resultado->fetchAll(PDO::FETCH_OBJ);

      ?>
<thead>
      <tr>
        <th class="primera_fila">Id</th>
        <th class="primera_fila">Nombre</th>
        <th class="primera_fila">Apellido</th>
        <th class="primera_fila">Usuario</th>
      
		  <th class="primera_fila" colspan="2">Acciones</th>
      </tr> 
 </thead>
    <tbody>
        <?php
        
        foreach ($registros as $usuario):    
        ?>

      <tr>
        <!--ver los registros-->
        <td><?php echo $usuario->Id?></td>
        <td><?php echo $usuario->nombre?></td>
        <td><?php echo $usuario->apellido?></td>
        <td><?php echo $usuario->usuario?></td>
		  <script type="text/javascript">
function Confirmation() {
 
	if (confirm('Esta seguro de eliminar el registro?')==true) {
	    alert('El registro ha sido eliminado correctamente!!!');
	    return true;
	}else{
	    //alert('Cancelo la eliminacion');
	    return false;
	}
}
</script>
        
        <td class="bot"><a href="eliminar_usuarios.php?Id=<?php echo $usuario->Id?>"><input class="btn btn-danger" type='button' name='del' id='del'  value='Eliminar' onclick="return Confirmation()"></a></td>


  

        <?php
       
        endforeach;
        ?>

 
      
    </table>
  </form>
 </div>
</section>    


<!------------------------------------------------------------------------------------------------------------->

  <footer>

    <?php

 
    

      echo "<p class='paginacion'>Paginación <br>";

      for($i=1; $i<=$total_pagina; $i++){

        echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";

     
	  }

 

    ?>

  </footer>

<p>&nbsp;</p>
</body>
</html>