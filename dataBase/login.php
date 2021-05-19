<?php //inicio el php

	session_start();  //creo una seccion para manejar variables $_SESSION
	require_once "conexion.php"; // importo los parametros de conexion en conexion.php
	
	$conexion=conexion();  //creo variable $conexion y le asigno los valores de la funcion conexion importada por conexion.hp

	if(!isset($_POST['usuario'])){  // si el valor no esta definido
		$_POST['usuario']='';    // dejer la variable en blanco
		$_POST['password']='';    // dejer la variable en blanco
	
	   //$buscador=$_POST['buscador']; // prueba de fucnionamiento	
	}

		$usuario=$_POST['usuario'];  // creo variable $usuario y le asigno los datos recibidos desde index.php
		$pass=$_POST['password']; // creo variable $pass y le asigno los datos recibidos desde index.php (sha1 es para encriptar los datos)

		var_dump($_POST['usuario']?? '');
		var_dump($_POST['password']?? '');
		// creo la variable $sql
			//selecciono todo en la tabla usuario donde las variables $ creadas deben ser iguals a los campos de la tabla (campo='$variable')
		$sql="SELECT * FROM usuario WHERE nomUusuarios='$usuario' AND passwd='$pass'";  
		// creo variable $result y le asigno los valores de la $conexion y $sql
		$result1=mysqli_query($conexion,$sql);		//la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
		$mensaje2 = "si funciono"; // para pruebas
		if(mysqli_num_rows($result1) > 0){	//si el resultado de las filas es mayor a 0 en la variabel $result
			echo $mensaje2;
			header('Location:../adminSis/menuPpl.php');	// redireccione al siguiente modulo
			$_SESSION['user']=$usuario;   //entonces almacene los datos de $usuario en la seccion ['user']
            $_SESSION['clave']=$pass;   //entonces almacene los datos de $usuario en la seccion ['user']
			//echo 1;   // ademas devuelva un 1    devuevlo a index.php a r  en  susses:funtion(r)
		}else{  // sino
			header('Location:../index.php');
			$_SESSION['message'] = 'Usuario no EXISTE !!!'; // guardo mensaje para imprimir en index.php
    		//$_SESSION['mesagge_type'] = 'danger';   // guardo colo de mensaje para imprimir en index.php
		}
		mysqli_free_result($result1); // libera espacio en memoria.
		mysqli_close($conexion);
 ?>