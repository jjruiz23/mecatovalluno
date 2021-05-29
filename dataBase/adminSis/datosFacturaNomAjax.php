<?php //inicio el php

	require_once "../conexion.php"; // importo los parametros de conexion en conexion.php
	$conexion=conexion();  //creo variable $conexion y le asigno los valores de la funcion conexion importada por conexion.hp

		$idMes=$_POST['idMes']; // creo variable $tipodoc y le asigno los datos recibidos desde regisEst.php
		$idPer=$_POST['idPer'];  // creo variable $numdoc y le asigno los datos recibidos desde regisEst.php
		$totalPago=$_POST['totalPago'];

		//actualizar en la tabla el campo='variable'   donde campo='variable'  
		$sql="INSERT into pago_nomina (idPer,idMes,nomina)
			values ('$idPer','$idMes','$totalPago')";
		$result=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			
		echo 1;


 ?>