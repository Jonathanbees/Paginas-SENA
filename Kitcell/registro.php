<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registro_usuario</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/styleindex.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
</head>
<body>
<div class="container-form sign-up">
	<form class="formulario" action="validacion.php" method="post">
	<h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                <i class="fas fa-envelope icon"></i>
                
                </div>
            </div>
			<p class="cuenta-gratis">Crear una cuenta gratis</p>

			<input type="text" name="nombre" placeholder="Nombre" required>
			<input type="text" name="apellido" placeholder="Apellido" required>
			<input type="text" name="usuario" placeholder="Usuario" required>
		<span class="fa fa-fw fa-eye password-icon show-password"></span> </label></left>
      <input type="password" name="password" class="form-control password1"  placeholder="Contraseña" />
  
  <script>	
					  window.addEventListener("load", function() {

            // icono para mostrar contraseña
            showPassword = document.querySelector('.show-password');
            showPassword.addEventListener('click', () => {

                // elementos input de tipo clave
                password1 = document.querySelector('.password1');
             

                if ( password1.type === "text" ) {
                    password1.type = "password"
                
                    showPassword.classList.remove('fa-eye-slash');
                } else {
                    password1.type = "text"
                   
                    showPassword.classList.toggle("fa-eye-slash");
                }

            })

					  });</script>
				<input type="submit" name="registrate" value="Registrate" class="button">
				<br>
				<p>¿Ya tienes una cuenta?<a class="link" href="index.php"> Iniciar sesión</a></p>
</div>
</form>
</body>
</html>


	