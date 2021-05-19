<?php session_start();?> <!--creo una seccion para manejar variables $_SESSION-->

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">

	<!-- Titulo & icono de pestaña -->
	<title>Mecato Valluno</title>
	<link href="includes/images/logotipo.png" rel="shortcut icon" />

	<!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
		integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="index/css/styles.css">
	<!--diretorio importacion css-->
</head>

<body>

	<!--mensaje de alerta de bootstrap e integrandolo con jquery-->
         <?php if(isset($_SESSION['message'])) { ?> <!--si existe un mensaje en session en "login.php"-->                                    
            <div class="alert alert-danger alert-dismissible fade show" role="alert-link">
          		<?= $_SESSION['message'] ?>  <!--llamo el mensaje en seccion en "login.php"-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
         <?php session_unset(); } ?>     <!--Limpiar datos de session- para que solo aparezca cuando se llama -->

	<div class="container">
		<!-- contendor de columnas/filas -->
		<div class="d-flex justify-content-center h-100">
			<!-- distribuidor de columnas/filas -->
			<div class="card">
				<div class="card-header">
					<br>
					<h3>Modulo de Ingreso</h3>
					<!--Titulo o imagen tarjeta de ingreso-->
					<div class="d-flex justify-content-end social_icon">
						<img src="includes/images/logotipo.png" alt="" width="100" height="100">

						<!--Titulo negocio-->
						<!--    Botones a redes sociales
                    <span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>-->
					</div>
				</div>
				<div class="card-body">
					<form action="dataBase/login.php" method="POST">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usario" autofocus>
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Recordarme
						</div>
						<div class="form-group float-right">
							<!--Botones -->
							<button type="submit" class="btn btn-success" id="entrarSistema">Ingresar</button>  <!-- boton de entrar -->
						</div>
					</form>
				</div>
				<!--Footer de tarjeta de ingreso-->
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						¿No tienes una cuenta?<a href="adminSis/menuPpl1.php">Registrarse</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="adminSis/menuPpl.php">¿Olvidaste tu contraseña?</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Optional JavaScript y css alertify -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.css">
	<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>	

</body>

</html>

<!--cargo scrip de funciones js para llamar funciones y acciones en cada modulo-->
<script src="js/funciones.js"></script>

<!--scrip para llamar funciones js -->
<script>
	$(document).ready(accionesIndex);
</script>
