<?php //inicio el php

	require_once "../conexion.php"; // importo los parametros de conexion en conexion.php
	$conexion=conexion();  //creo variable $conexion y le asigno los valores de la funcion conexion importada por conexion.hp

		$nuevaSede=$_POST['nuevaSede']; // creo variable $tipodoc y le asigno los datos recibidos desde regisEst.php
		$idCiudad=$_POST['idCiudad'];  // creo variable $numdoc y le asigno los datos recibidos desde regisEst.php
		$telefonoSede=$_POST['telefonoSede'];  // creo variable $nombre y le asigno los datos recibidos desde regisEst.php
		$direcSede=$_POST['direcSede'];
		$idSede=$_POST['idSede'];

		// funcion de buscaCambios se responde a editPer.php mediante el echo
		if(buscaRepetido($nuevaSede,$idCiudad,$telefonoSede,$direcSede,$conexion)==1){  // si el resultado de la funcion es igual a 1
			echo 2; // imprimir un 2  y devuevlo a ediPer.php a r  en  susses:funtion(r)
		}else{
			//actualizar en la tabla el campo='variable'   donde campo='variable'  
			$query="UPDATE sede set nomSede='$nuevaSede', idCiudad='$idCiudad', telefonoSede='$telefonoSede', direSede='$direcSede'
				WHERE idSede='$idSede'";
            $result=mysqli_query($conexion, $query); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			echo 1;
		}
        
		// creo funcion buscaRepetido y le paso los datos de las variables creadas (tipo de documento, numero de documento y conexion)
		function buscaRepetido($nvSede,$nvIdCiudad,$telSede,$dirSede,$conexion){  
            // creo la variable $sql
	        //selecciono todo en la tabla usuarios donde las variables $ creadas deben ser iguals a los campos de la tabla (campo='$variable')			
			$sql="SELECT * from sede where nomSede='$nvSede' and idCiudad='$nvIdCiudad' and telefonoSede='$telSede' and direSede='$dirSede'"; 
	        //creo la variable $result y le paso los datos de la conexion y sql
			$result=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			if(mysqli_num_rows($result) > 0){  // si el resultado de las filas es mayor a 0 en la variable $result
				return 1;  // regrese un 1 en la funcion buscaRepetido
			}else{  // si no
				return 0;  // regrese un 0
			}
		}		

 ?>