<?php //inicio el php

	require_once "../conexion.php"; // importo los parametros de conexion en conexion.php
	$conexion=conexion();  //creo variable $conexion y le asigno los valores de la funcion conexion importada por conexion.hp

		$categoria=$_POST['categoria']; // creo variable $tipodoc y le asigno los datos recibidos desde regisEst.php
		$codiProducto=$_POST['codiProducto'];  // creo variable $numdoc y le asigno los datos recibidos desde regisEst.php
		$nomProducto=$_POST['nomProducto'];  // creo variable $nombre y le asigno los datos recibidos desde regisEst.php
		$preProducto=$_POST['preProducto'];
		$cantProducto=$_POST['cantProducto'];

	// de buscaRepetido se responde a regisEst.php mediante el echo
		if(buscaRepetido($categoria,$codiProducto,$nomProducto,$preProducto,$conexion)==1){  // si el resultado de la funcion es igual a 1
			echo 2; // imprimir un 2  y devuevlo a registro.php a r  en  susses:funtion(r)
		}else{
            // realizar inserccion de datos a la base de datos
            // insertar en la tabla personal en los campos (*,*,*,*)
            //los valores de las variables ('*','*','*','*')
			$sql="INSERT into pruducto (nomProducto,codiProducto,idCategoria,precioProducto,cantProd)
				values ('$nomProducto','$codiProducto','$categoria','$preProducto','$cantProducto')";
			$result=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion

		}
		// funcion para enviar respuesta de ajax
		/*else if(insertarDato($conexion,$nombres,$apellidos,$email,$fechanac,$tipodoc,$estcivil,$celular,$sede,$telefono,$salario,$direccion)==1){
			echo 1;
		}else{
			echo 0;
		}
		*/
        
		// creo funcion buscaRepetido y le paso los datos de las variables creadas (tipo de documento, numero de documento y conexion)
		function buscaRepetido($categ,$codiPro,$nomPro,$prePro,$conexion){  
            // creo la variable $sql
	        //selecciono todo en la tabla usuarios donde las variables $ creadas deben ser iguals a los campos de la tabla (campo='$variable')			
			$sql="SELECT * from pruducto where idCategoria='$categ' and codiProducto='$codiPro' and nomProducto='$nomPro' and precioProducto='$prePro'"; 
	        //creo la variable $result y le paso los datos de la conexion y sql
			$result=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			if(mysqli_num_rows($result) > 0){  // si el resultado de las filas es mayor a 0 en la variable $result
				return 1;  // regrese un 1 en la funcion buscaRepetido
			}else{  // si no
				return 0;  // regrese un 0
			}
		}
		// funcion para enviar respuesta de ajax
		/*
		function insertarDato($conexion,$noms,$apes,$eml,$fecnc,$tpdc,$stcivil,$clular,$sed,$tlfono,$salrio,$dirccion){
			$sql="INSERT into personal (nombres,apellidos,email,fechaNac,tipoDoc,estCivil,celular,sede,telefono,salarios,direccion)
				values ('$noms','$apes','$eml','$fecnc','$tpdc','$stcivil','$clular','$sed','$tlfono','$salrio','$dirccion')";
			//creo la variable $result y le paso los datos de la conexion y sql
			$result=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			if(mysqli_num_rows($result) > 0){  // si el resultado de las filas es mayor a 0 en la variable $result
				return 1;  // regrese un 1 en la funcion buscaRepetido
			}else{  // si no
				return 0;  // regrese un 0
			}
		}
		*/

 ?>