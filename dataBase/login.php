<?php //inicio el php

	session_start();  //creo una seccion para manejar variables $_SESSION
	require_once "conexion.php"; // importo los parametros de conexion en conexion.php
	
	$conexion=conexion();  //creo variable $conexion y le asigno los valores de la funcion conexion importada por conexion.hp
/*
	if(!isset($_POST['usuario'])){  // si el valor no esta definido
		$_POST['usuario']='';    // dejer la variable en blanco
		$_POST['password']='';    // dejer la variable en blanco	   
	}
*/
		$usuario=$_POST['usuario'];  // recupero variable $usuario y le asigno los datos recibidos desde index.php
		$pass=$_POST['password']; // recupero variable $pass y le asigno los datos recibidos desde index.php (sha1 es para encriptar los datos)

		var_dump($_POST['usuario']?? '');	// prueba de fucnionamiento
		var_dump($_POST['password']?? ''); // prueba de fucnionamiento
			
			// creo la variable $sql
			//selecciono todo en la tabla usuario y campo de tabla permisos donde las variables $ creadas deben ser iguals a los campos de la tabla (campo='$variable')
		$sql="SELECT u.nomUusuarios, u.passwd, u.idPermiso, p.nomPermiso
			FROM usuario u
			INNER JOIN permisos p ON u.idPermiso = p.idPermiso
			WHERE nomUusuarios='$usuario' AND passwd='$pass'";  
			// creo variable $result y le asigno los valores de $conexion y $sql
		$result1=mysqli_query($conexion,$sql);		//la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
		
		if(mysqli_num_rows($result1) > 0){	//si el resultado de las filas es mayor a 0 en la variabel $result			
			echo $mensaje1; // para pruebas
			// separo la tupla de datos del resultado del query, en las variables $row para poderla manipular
			while ($row = mysqli_fetch_row($result1)){
				$idPrmiso = strval($row[2]);	// castin para convertir dato de tabla en variable
				$nomPermiso = strval($row[3]);	// castin para convertir dato de tabla en variable
				$mensaje1 = "SI funciono"; // para pruebas
				$mensaje2 = "NO funciono"; // para pruebas
			//header('Location:../adminSis/menuPpl.php');	// redireccione al siguiente modulo
			$_SESSION['user']=$usuario;   //se almacenan los datos de $usuario en la seccion ['user']
           	$_SESSION['nomPrmiso']=$nomPermiso;   //se almacenan los datos de $usuario en la seccion ['idPrmiso']
			// IF(s) para control de secciones por permiso
			if($idPrmiso == "1"){	// si el id del persmiso es x redirigir a x modulo
				header('Location:../adminSis/menuPpl.php');	// redireccione al siguiente modulo
			}elseif($idPrmiso == "2"){
				header('Location:../direcSede/menuPpl.php');	// redireccione al siguiente modulo
			}elseif($idPrmiso == "3"){
				header('Location:../vendedor/menuPpl.php');	// redireccione al siguiente modulo
			} // else if
		}	//while
		}else{  // sino
			echo $mensaje1;  //para pruebas
			header('Location:../index.php');	// redirigir al index y cargar mensaje para enviar
			$_SESSION['message'] = 'Usuario no EXISTE !!!'; // guardo mensaje para imprimir en index.php
    		//$_SESSION['mesagge_type'] = 'danger';   // guardo colo de mensaje para imprimir en index.php
		}//else

		mysqli_free_result($result1); // libera espacio en memoria.
		mysqli_close($conexion);	// cierro conexion
?>
