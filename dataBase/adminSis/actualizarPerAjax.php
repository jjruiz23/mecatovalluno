<<<<<<< HEAD
<?php //inicio el php

	require_once "../conexion.php"; // importo los parametros de conexion en conexion.php
	$conexion=conexion();  //creo variable $conexion y le asigno los valores de la funcion conexion importada por conexion.hp

		$nombres=$_POST['nombres']; // creo variable $xx y le asigno los datos enviados mediante ajax
		$email=$_POST['email'];
		$apellidos=$_POST['apellidos'];
		$fechanac=$_POST['fechanac'];
		$tipodoc=$_POST['tipodoc'];
		$numdocumento=$_POST['numdocumento'];
		$estcivil=$_POST['estcivil'];
		$celular=$_POST['celular'];
		$sede=$_POST['sede'];
        $telefono=$_POST['telefono'];
        $salarios=$_POST['salarios'];
        $direccion=$_POST['direccion'];
		$idPer=$_POST['idPers'];

		// funcion de buscaCambios se responde a editPer.php mediante el echo
		if(buscaCambios($conexion,$nombres,$email,$apellidos,$fechanac,$tipodoc,$numdocumento,$estcivil,$celular,$sede,$telefono,$salarios,$direccion,$idPer)==1){  // si el resultado de la funcion es igual a 1
			echo 2; // imprimir un 2  y devuevlo a ediPer.php a r  en  susses:funtion(r)
		}else{
			//actualizar en la tabla el campo='variable'   donde campo='variable'  
			$query="UPDATE personal set nombres='$nombres', apellidos='$apellidos', email='$email', fechaNac='$fechanac',
				idTipoDoc='$tipodoc', numDocumento='$numdocumento', idEstCivil='$estcivil', celular='$celular', idSede='$sede', telefono='$telefono',
				idSalarios='$salarios', direccion='$direccion' WHERE idPer='$idPer'";
            $result=mysqli_query($conexion, $query); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			echo 1;	
		}
        
		// creo funcion buscaCambios y le paso los datos de las variables creadas (tipo de documento, numero de documento y conexion)
		function buscaCambios($conexion,$nomb,$eml,$apelidos,$fechnc,$tipdc,$numdocmnto,$estcvl,$cellr,$sde,$telfno,$salros,$dircion,$idPr){  
            // creo la variable $sql
	        //selecciono todo en la tabla usuarios donde las variables $ creadas deben ser iguals a los campos de la tabla (campo='$variable')			
			$sql="SELECT * from personal where idPer='$idPr' and nombres='$nomb' and apellidos='$apelidos' and email='$eml' and fechaNac='$fechnc' and
			idTipoDoc='$tipdc' and numDocumento='$numdocmnto' and idEstCivil='$estcvl' and celular='$cellr' and idSede='$sde' and telefono='$telfno' and
			idSalarios='$salros' and direccion='$dircion'"; 
	        //creo la variable $result y le paso los datos de la conexion y sql
			$result1=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			if(mysqli_num_rows($result1) > 0){  // si el resultado de las filas es mayor a 0 en la variable $result
				return 1;  // regrese un 1 en la funcion buscaCambios
			}else{  // si no
				return 0;  // regrese un 0
			}
		}		

=======
<?php //inicio el php

	require_once "../conexion.php"; // importo los parametros de conexion en conexion.php
	$conexion=conexion();  //creo variable $conexion y le asigno los valores de la funcion conexion importada por conexion.hp

		$nombres=$_POST['nombres']; // creo variable $xx y le asigno los datos enviados mediante ajax
		$email=$_POST['email'];
		$apellidos=$_POST['apellidos'];
		$fechanac=$_POST['fechanac'];
		$tipodoc=$_POST['tipodoc'];
		$numdocumento=$_POST['numdocumento'];
		$estcivil=$_POST['estcivil'];
		$celular=$_POST['celular'];
		$sede=$_POST['sede'];
        $telefono=$_POST['telefono'];
        $salarios=$_POST['salarios'];
        $direccion=$_POST['direccion'];
		$idPer=$_POST['idPers'];

		// funcion de buscaCambios se responde a editPer.php mediante el echo
		if(buscaCambios($conexion,$nombres,$email,$apellidos,$fechanac,$tipodoc,$numdocumento,$estcivil,$celular,$sede,$telefono,$salarios,$direccion,$idPer)==1){  // si el resultado de la funcion es igual a 1
			echo 2; // imprimir un 2  y devuevlo a ediPer.php a r  en  susses:funtion(r)
		}else{
			//actualizar en la tabla el campo='variable'   donde campo='variable'  
			$query="UPDATE personal set nombres='$nombres', apellidos='$apellidos', email='$email', fechaNac='$fechanac',
				idTipoDoc='$tipodoc', numDocumento='$numdocumento', idEstCivil='$estcivil', celular='$celular', idSede='$sede', telefono='$telefono',
				idSalarios='$salarios', direccion='$direccion' WHERE idPer='$idPer'";
            $result=mysqli_query($conexion, $query); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			echo 1;	
		}
        
		// creo funcion buscaCambios y le paso los datos de las variables creadas (tipo de documento, numero de documento y conexion)
		function buscaCambios($conexion,$nomb,$eml,$apelidos,$fechnc,$tipdc,$numdocmnto,$estcvl,$cellr,$sde,$telfno,$salros,$dircion,$idPr){  
            // creo la variable $sql
	        //selecciono todo en la tabla usuarios donde las variables $ creadas deben ser iguals a los campos de la tabla (campo='$variable')			
			$sql="SELECT * from personal where idPer='$idPr' and nombres='$nomb' and apellidos='$apelidos' and email='$eml' and fechaNac='$fechnc' and
			idTipoDoc='$tipdc' and numDocumento='$numdocmnto' and idEstCivil='$estcvl' and celular='$cellr' and idSede='$sde' and telefono='$telfno' and
			idSalarios='$salros' and direccion='$dircion'"; 
	        //creo la variable $result y le paso los datos de la conexion y sql
			$result1=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			if(mysqli_num_rows($result1) > 0){  // si el resultado de las filas es mayor a 0 en la variable $result
				return 1;  // regrese un 1 en la funcion buscaCambios
			}else{  // si no
				return 0;  // regrese un 0
			}
		}		

>>>>>>> master
 ?>