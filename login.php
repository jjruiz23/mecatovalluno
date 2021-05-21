
 <?php
  session_start();
 
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['usuario'];
  $password = $_POST['password'];

  $conexion=conexion();  // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php
   
  // Esto se puede remplazar por un usuario real guardado en la base de datos.
  if($email == 'email@dominio.com' && $password == '1234'){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: principal.php"); 
  }else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }
 
?>