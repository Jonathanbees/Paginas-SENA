
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Logueo</title>
	<link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
</head>
<body>
    <div class="container-form sign-in">
	<form class="formulario" action="validacion.php" method="post">
		
		<h2 class="crete-account">Iniciar sesión</h2>
            <div class="iconos">
                <div class="border-icon">
                <i class="fas fa-user icon"></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
			<input type="text" name="usuario" placeholder="Usuario" required>
            <div class="fa fa-fw fa-eye password-icon show-password"></div> 
      <input name="password" type="password" class="form-control password1" placeholder="Contraseña" autocomplete="off"/>

	   </label>
  
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
  
    <form name="contact" id="contact" action="" method="post">
            <div class="form-group">
				
            <input style="width: 60%;margin: auto;border: solid thin white;padding: .7rem;border-radius: 2rem;background-color: white;font-weight: 600;margin-top: 3rem;font-size: .8rem;cursor: pointer;color: #222;" 
            type="submit" name="ingresar" value="Ingresar" class="button">
			<br>

		</form>
    <p>¿No tienes una cuenta?<a class="link" href="registro.php" style="text-decoration: none;
    color: rgb(255, 196, 0);"> Registrate</a></p>
  </div>

</body>
</html>