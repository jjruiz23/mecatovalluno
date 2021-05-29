<?php //inicio el php

	require_once "../conexion.php"; // importo los parametros de conexion en conexion.php
	$conexion=conexion();  //creo variable $conexion y le asigno los valores de la funcion conexion importada por conexion.hp

		$idPer=$_POST['idPer']; // creo variable $tipodoc y le asigno los datos recibidos desde regisEst.php
		$idRol=$_POST['idRol'];
		$nomUsuario=$_POST['nomUsuario'];
		$passwdUsuario=$_POST['passwdUsuario']; 
		
	// de buscaRepetido se responde a regisEst.php mediante el echo
		if(buscaRepetido($idRol,$idPer,$conexion)==1){  // si el resultado de la funcion es igual a 1
			echo 2; // imprimir un 2  y devuevlo a registro.php a r  en  susses:funtion(r)
		}else{
            // realizar inserccion de datos a la base de datos
            // insertar en la tabla personal en los campos (*,*,*,*)	
            //los valores de las variables ('*','*','*','*')
			$sql="INSERT into rol_x_personal (idRol,idPer) values ('$idRol','$idPer')";
			$result=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			
			$sql2="INSERT into usuario (nomUusuarios,idPer,idPermiso,passwd) values ('$nomUsuario','$idPer','$idRol','$passwdUsuario')";
			$result2=mysqli_query($conexion,$sql2); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion

		
		}
       
		// creo funcion buscaRepetido y le paso los datos de las variables creadas (tipo de documento, numero de documento y conexion)
		function buscaRepetido($nvIdRol,$nvIdPer,$conexion){  
            // creo la variable $sql
	        //selecciono todo en la tabla usuarios donde las variables $ creadas deben ser iguals a los campos de la tabla (campo='$variable')			
			$sql="SELECT * from rol_x_personal where idRol='$nvIdRol' AND idPer='$nvIdPer'"; 
	        //creo la variable $result y le paso los datos de la conexion y sql
			$result=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			if(mysqli_num_rows($result) > 0){  // si el resultado de las filas es mayor a 0 en la variable $result
				return 1;  // regrese un 1 en la funcion buscaRepetido
			}else{  // si no
				return 0;  // regrese un 0
			}
		}
 ?>