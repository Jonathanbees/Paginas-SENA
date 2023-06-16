<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Proveedores</title>
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
        <nav>
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
		

	
   
<!-------------------------------------------------------------------------------------------------------------->

  <?php

  require("conexion.php");


   $tamano_pag=15;

    if (isset($_GET['pagina'])){

      if($_GET['pagina']==1){

        header("Location:index_prove.php");

      }else{

        $pagina=$_GET['pagina'];
      }

      }else{

    $pagina=1;

  }

  $empezar_desde=($pagina-1)*$tamano_pag;

//---------------------------------------------VER LOS REGISTROS-------------------------------------------

  $resultado=$base->query("SELECT * FROM proveedores");

  //guardar en $registros un array de objetos
  //ARRAY DE Objectos asociativos
  $registros=$resultado->fetchAll(PDO::FETCH_OBJ);


  $num_fila=$resultado->rowCount();

    $total_pagina=ceil($num_fila/$tamano_pag);  

    $resultado->closeCursor();


//-------------------------------------------INGRESAR REGISTROS-------------------------------------------- 

 if(isset($_POST["insert"])){
	 $pedi=$_POST["ped"];

  $nom_prov=$_POST["nom"];
  $cantidad=$_POST["Can"];
  $ciudad=$_POST["Ciu"];
  

  
 
  $sql="INSERT INTO proveedores(Id_pedido, Nombre_proveedor, Cantidad, Ciudad) VALUES (:ped, :nom, :can, :ciu)";

  $resultado=$base->prepare($sql);

  $resultado->execute(array(":ped"=>$pedi, ":nom"=>$nom_prov, ":can"=>$cantidad, ":ciu"=>$ciudad));

  header("Location:index_prove.php");

}

?>

<!-----------------------------------------------FORMULARIO---------------------------------------------------------->
<h1><span class="subtitulo"> Proveedores</span></h1>
<center><form action="busqueda_prove.php" method="get">
	
  <label>Buscador</label>
  
  <input type="text" name="busqueda">
  
  
  <input type=submit value="Buscar">

  </center>
    
   </form>

  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

    <table width="70%" border="0" align="center">

      <?php

      $resultado=$base->query("SELECT * FROM proveedores LIMIT $empezar_desde, $tamano_pag");

       $registros=$resultado->fetchAll(PDO::FETCH_OBJ);

      ?>
 <thead>
      <tr >
        <th class="primera_fila">Id_prov</th>
		<th class="primera_fila">Id_pedido</th> 
        <th class="primera_fila">Nombre_prove</th>
        <th class="primera_fila">Cantidad</th>
        <th class="primera_fila">Ciudad</th>
        <th class="primera_fila" colspan="2">Acciones</th>
      </tr> 
</thead>
    <tbody>
        <?php
        
        foreach ($registros as $proveed):    
        ?>

      <tr>
        <!--ver los registros-->
        <td><?php echo $proveed->Id_proveedor?></td>
		  <td><?php echo $proveed->Id_pedido?></td>
        <td><?php echo $proveed->Nombre_proveedor?></td>
        <td><?php echo $proveed->Cantidad?></td>
        <td><?php echo $proveed->Ciudad?></td>
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

        <td class="bot"><a href="eliminar_prove.php?Id_proveedor=<?php echo $proveed->Id_proveedor?>"><input class="btn btn-danger" type='button' name='del' id='del' value='Eliminar' onclick="return Confirmation()"></a></td>


        <!--Actualizar registros.-->
        <td class='bot'><a href="editar_prove.php?Id=<?php echo $proveed->Id_proveedor?>
			                                   & ped=<?php echo $proveed->Id_pedido?>
                                               & nom=<?php echo $proveed->Nombre_proveedor?>
                                               & can=<?php echo $proveed->Cantidad?>
                                               & ciu=<?php echo $proveed->Ciudad?>">
                                               
          <input class="btn btn-warning" type='button' name='up' id='up' value='Actualizar'></a></td>
      </tr>

        <?php
        
        endforeach;
        ?>

    	<tr>
        <td></td>
	    <td><input class="but" type='text' name='ped' size='10'></td>
        <td><input class="but" type='text' name='nom' size='10'></td>
        <td><input class="but" type='text' name='Can' size='10'></td>
        <td><input class="but" type='text' name='Ciu' size='10'></td>
       
        <td class='bot'colspan="2"><input class="btn btn-success" type='submit' name='insert' id='insertar' value='Insertar'></a></td>
      </tr>
    </table>
  </form>
 </div>
</section>    

<!-------------------------------------------------------------------------------------------------------------->

  <footer>
      <?php

      echo "<p class='paginacion'>Paginación <br>";

      for($i=1; $i<=$total_pagina; $i++){

        echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";

     
	  }

    ?>
  
  </footer>

<p>&nbsp;</p>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./javascript/script.js"></script>
</body>
</html>