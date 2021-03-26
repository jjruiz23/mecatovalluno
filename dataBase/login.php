<?php //inicio el php

	session_start();  //creo una seccion para pasarlo mediante GET O POST
	require_once "conexion.php"; //importo los parametros de conexion en conexion.php

	$conexion=conexion();  // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php

		$usuario=$_POST['usuario'];  // creo variable $usuario y le asigno los datos recibidos desde index.php
		$pass=sha1($_POST['password']); // creo variable $pass y le asigno los datos recibidos desde index.php (sha1 es para encriptar los datos)

   // creo la variable $sql
	//selecciono todo en la tabla usuarios donde las variables $ creadas deben ser iguals a los campos de la tabla (campo='$variable')
		$sql="SELECT * from usuarios where usuario='$usuario' and password='$pass'";  
		// creo variable $result y le asigno los valores de la $conexion y $sql
		$result=mysqli_query($conexion,$sql);	//la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion

		if(mysqli_num_rows($result) > 0){	//si el resultado de las filas es mayor a 0 en la variabel $result
			$_SESSION['user']=$usuario;   //entonces almacene los datos de $usuario en la seccion ['user']
			echo 1;   // ademas devuelva un 1    devuevlo a index.php a r  en  susses:funtion(r)
		}else{  // sino
			echo 0;  // devuelva 0
		}
 ?>