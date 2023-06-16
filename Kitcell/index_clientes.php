<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kit Cell | clientes</title>

<link rel="stylesheet" type="text/css" href="css/estilosinicio.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/estilostabla.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
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
             <li><a href="index_prove.php">Proveedores</a></li> 
             <li><a href="index_usuarios.php">Usuarios</a></li>   
			       <li><a href="Ver_ventas.php">Informes</a></li> 
             <li class="curren"><a href="cerrar_sesion.php" onclick="return Confirmation()">Salir</a></li>
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

        header("Location:index_clientes.php");

      }else{

        $pagina=$_GET['pagina'];
      }

      }else{

    $pagina=1;

  }

  $empezar_desde=($pagina-1)*$tamano_pag;

//------------------------------------------VER LOS REGISTROS-------------------------------------------

  $resultado=$base->query("SELECT * FROM clientes");

  $registros=$resultado->fetchAll(PDO::FETCH_OBJ);


  $num_fila=$resultado->rowCount();

    $total_pagina=ceil($num_fila/$tamano_pag);  

    $resultado->closeCursor();


//----------------------------------------INGRESAR REGISTROS-------------------------------------------- 

 if(isset($_POST["insert"])){

  $nombre=$_POST["Nom"];
  $telefono=$_POST["Tel"];
  $dire=$_POST["Dir"];
 
  $sql="INSERT INTO clientes (Nombre, Telefono, Direccion) VALUES (:nom, :tel, :dir)";

  $resultado=$base->prepare($sql);

  $resultado->execute(array(":nom"=>$nombre, ":tel"=>$telefono, ":dir"=>$dire));

  header("Location:index_clientes.php");

}

?>

<!-------------------------------------------FORMULARIO-------------------------------------------------------->


<h1><span class="subtitulo">Clientes</span></h1>
<center><form action="busqueda_cliente.php" method="get">
	
		<label>Buscador</label>
		<input type="text" name="busqueda">
		<input type=submit value="Buscar">
	</center>
     </form>
  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <div class="table-container">
    <table class="tabl">
    <?php

      $resultado=$base->query("SELECT * FROM clientes LIMIT $empezar_desde, $tamano_pag");

      $registros=$resultado->fetchAll(PDO::FETCH_OBJ);

      ?>
      <thead>
      <tr class="cabeza">
        <th class="primera_fila">Id_cliente</th>
        <th class="primera_fila">Nombre</th>
        <th class="primera_fila">Teléfono</th>
        <th class="primera_fila">Dirección</th>
        <th class="primera_fila" colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>
        <?php
        
        foreach ($registros as $cliente):    
        ?>

      <tr>
        <!--ver los registros-->
        <td><?php echo $cliente->Id_cliente?></td>
        <td><?php echo $cliente->Nombre?></td>
        <td><?php echo $cliente->Telefono?></td>
        <td><?php echo $cliente->Direccion?></td>
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

        <td class="bot"><a href="eliminar_clientes.php?Id_cliente=<?php echo $cliente->Id_cliente?>"><input class="btn btn-danger" type='button' name='del' id='del' value='Eliminar' onclick="return Confirmation()"></a></td>


        <!--Actualizar registros.-->
        <td class='bot'><a href="editar_clientes.php?Id=<?php echo $cliente->Id_cliente?>
                                                 & nom=<?php echo $cliente->Nombre?>
                                                 & tel=<?php echo $cliente->Telefono?>
                                                 & dir=<?php echo $cliente->Direccion?>">

          <input class="btn btn-warning" type='button' name='up' id='up' value='Actualizar'></a></td>
      </tr>

        <?php
       
        endforeach;
        ?>

      <tr>
        <td></td>
        <td><input class='but' type='text' name='Nom' size='10'></td>
        <td><input class='but' type='text' name='Tel' size='10'></td>
        <td><input class='but' type='text' name='Dir' size='10'></td>
        <td class='bot' colspan="2"><input input class="btn btn-success" type='submit' name='insert' id='insertar' value='Insertar'></a></td>
      </tr>
      </tbody>
    </table>
  </form>
 </div>
</main>    


<!------------------------------------------------------------------------------------------------------------->

<center>
    <?php
      echo "<p class='pag'>Paginación <br>";
      for($i=1; $i<=$total_pagina; $i++){
        echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";
      }
    ?>
  </center>
  <footer class="footer">
  <div class="container">
    Univercell N.D, Copyright &copy; 2022
  </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./javascript/script.js"></script>

</body>
</html>