<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Ventas</title>
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
  
	

<!--------------------------------------------------------------------------------------------------------->

  <?php

  require("conexion.php");
		  

  $tamano_pag=15;

    if (isset($_GET['pagina'])){

      if($_GET['pagina']==1){

        header("Location:index_ventas.php");

      }else{

        $pagina=$_GET['pagina'];
      }

      }else{

    $pagina=1;

  }

  $empezar_desde=($pagina-1)*$tamano_pag;

//---------------------------------------------VER LOS REGISTROS-------------------------------------------

  $resultado=$base->query("SELECT * FROM ventas");

  //guardar en $registros un array de objetos
  //ARRAY DE Objectos asociativos
  $registros=$resultado->fetchAll(PDO::FETCH_OBJ);


  $num_fila=$resultado->rowCount();

    $total_pagina=ceil($num_fila/$tamano_pag);  

    $resultado->closeCursor();


//-------------------------------------------INGRESAR REGISTROS-------------------------------------------- 

  if(isset($_POST["insert"])){
	 

  $producto=$_POST["Pro"];
  $cliente=$_POST["Cli"];
  $usuario=$_POST["Usu"];
  $fecha=$_POST["Fec"];
  $can=$_POST["Can"];
  $precio=$_POST["Pre"];
	 
 
  $sql="INSERT INTO ventas( Id_producto, Id_cliente, Id_usuario, Fecha, Cantidad, Precio) VALUES ( :pro, :cli, :usu, :fec, :can, :pre)";


  $resultado=$base->prepare($sql);

  $resultado->execute(array(":pro"=>$producto, ":cli"=>$cliente, ":usu"=>$usuario,":fec"=>$fecha, ":can"=>$can, ":pre"=>$precio));

//Restar al inventario
	  
	
	// $cant_prod=$can_pro=$_GET["Cantidad"];
	// $cant_final= $cant_prod-$can;
	 
	    
	  //debe ser al mismo producto
	  
	
    $sql_inv="UPDATE `productos` SET  Cantidad=Cantidad-$can WHERE Id_producto=$producto";
	  
	
    $resultado_inv=$base->prepare($sql_inv);

   $resultado_inv->execute();

 header("Location:index_ventas.php");
}
		  
	
		  

  ?>

<!-----------------------------------------------FORMULARIO-------------------------------------------------------->


<h1><span class="subtitulo">Ventas</span></h1>
<center><form action="busqueda_venta.php" method="get">
  <label>Buscador</label>
  <input type="text" name="busqueda">
  <input class="btn btn-secondary btn-lg" type=submit value="Buscar">
  </center>
   </form>
  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <div class="table-container">
    <table class="tabl" width="70%" border="0" align="center">

      <?php

      $resultado=$base->query("SELECT * FROM ventas LIMIT $empezar_desde, $tamano_pag");

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
        <th class="primera_fila" colspan="2">Acciones</th>
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

		<!--alerta si esta seguro de eliminar!-->  
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

        <td class="bot"><a href="eliminar_ventas.php?Id_venta=<?php echo $product->Id_venta?>"><input class="btn btn-danger" type='button' name='del' id='del' value='Eliminar' onclick="return Confirmation()"></a></td>


        <!--Actualizar registros.-->
        <td class='bot'><a href="editar_ventas.php?Id=<?php echo $product->Id_venta?>
                                               & prod=<?php echo $product->Id_producto?>
                                               & cli=<?php echo $product->Id_cliente?>
                                               & usu=<?php echo $product->Id_usuario?>
                                               & fec=<?php echo $product->Fecha?>
                                               & can=<?php echo $product->Cantidad?>
                                               & pre=<?php echo $product->Precio?>">

          <input title="Actualizar"class="btn btn-warning" type='button' name='up' id='up' value='Actualizar'></a></td>
      </tr>

      <?php  
        endforeach;
        ?>
        

      <tr>
        <td></td>
		    <td><input class="but" type='text' name='Cli' size='10' ></td>
		    <td><input class="but" type='text' name='Pro' size='10' ></td>
		    <td><input class="but" type='text' name='Usu' size='10' ></td>
		    <td><input class="but" type='text' name='Fec' size='10' ></td>
        <td><input class="but" type='text' name='Can' size='10' ></td>
        <td><input class="but" type='text' name='Pre' size='10' ></td>
        <td class='bot' colspan="2"><input class="btn btn-success" type='submit' name='insert' id='insertar' value='Insertar'></a></td>
      </tr>
    </tbody>
  </table>
  </form>    
 </div>
</main>

<!------------------------------------------------------------------------------------------------------------------>

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./javascript/script.js"></script>
</body>
</html>