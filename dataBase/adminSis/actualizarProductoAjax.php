<?php //inicio el php

	require_once "../conexion.php"; // importo los parametros de conexion en conexion.php
	$conexion=conexion();  //creo variable $conexion y le asigno los valores de la funcion conexion importada por conexion.hp

		$categoria=$_POST['categoria']; // creo variable $tipodoc y le asigno los datos recibidos desde regisEst.php
		$codiProducto=$_POST['codiProducto'];  // creo variable $numdoc y le asigno los datos recibidos desde regisEst.php
		$nomProducto=$_POST['nomProducto'];  // creo variable $nombre y le asigno los datos recibidos desde regisEst.php
		$preProducto=$_POST['preProducto'];
		$idProducto=$_POST['idProducto'];

		// funcion de buscaCambios se responde a editPer.php mediante el echo
		if(buscaCambios($conexion,$categoria,$codiProducto,$nomProducto,$preProducto,$idProducto)==1){  // si el resultado de la funcion es igual a 1
			echo 2; // imprimir un 2  y devuevlo a ediPer.php a r  en  susses:funtion(r)
		}else{
			//actualizar en la tabla el campo='variable'   donde campo='variable'  
			$query="UPDATE pruducto set nomProducto='$nomProducto', codiProducto='$codiProducto', idCategoria='$categoria', precioProducto='$preProducto'
				WHERE idProducto='$idProducto'";
            $result=mysqli_query($conexion, $query); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			echo 1;
		}
        
		// creo funcion buscaCambios y le paso los datos de las variables creadas (tipo de documento, numero de documento y conexion)
		function buscaCambios($conexion,$categ,$codiPro,$nomPro,$prePro,$idPro){  
            // creo la variable $sql
	        //selecciono todo en la tabla usuarios donde las variables $ creadas deben ser iguals a los campos de la tabla (campo='$variable')			
			$sql="SELECT * from pruducto where idProducto='$idPro' and idCategoria='$categ' and codiProducto='$codiPro' and nomProducto='$nomPro' and
			precioProducto='$prePro'"; 
	        //creo la variable $result y le paso los datos de la conexion y sql
			$result1=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			if(mysqli_num_rows($result1) > 0){  // si el resultado de las filas es mayor a 0 en la variable $result
				return 1;  // regrese un 1 en la funcion buscaCambios
			}else{  // si no
				return 0;  // regrese un 0
			}
		}		

 ?>