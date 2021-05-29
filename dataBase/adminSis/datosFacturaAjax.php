<?php //inicio el php

	require_once "../conexion.php"; // importo los parametros de conexion en conexion.php
	$conexion=conexion();  //creo variable $conexion y le asigno los valores de la funcion conexion importada por conexion.hp

		$idCliente=$_POST['idCliente']; // creo variable $tipodoc y le asigno los datos recibidos desde regisEst.php
		$idPer=$_POST['idPer'];  // creo variable $numdoc y le asigno los datos recibidos desde regisEst.php
		$idProducto=intval($_POST['idProducto']);  // creo variable $nombre y le asigno los datos recibidos desde regisEst.php
		$canti=$_POST['canti'];
		$neto=$_POST['neto'];
		$ivaFact=$_POST['ivaFact'];
		$total=$_POST['total'];
		$comision=$_POST['comision'];
		$nuevoStop=$_POST['nuevoStop'];
		$nuevoNumFactura=$_POST['nuevoNumFactura'];
		$nuevaComi=$_POST['nuevaComi'];

		// funcion de buscaCambios se responde a editPer.php mediante el echo
		/*if(buscaCambios($conexion,$categoria,$codiProducto,$nomProducto,$preProducto,$idProducto,$cantProducto)==1){  // si el resultado de la funcion es igual a 10'
			echo 2; // imprimir un 2  y devuevlo a ediPer.php a r  en  susses:funtion(r)
		}else{*/
			//actualizar en la tabla el campo='variable'   donde campo='variable'  
			$sql="INSERT into orden_factura (idPer,idCliente,netoFactura,ivaFactura,totalFactura)
				values ('$idPer','$idCliente','$neto','$ivaFact','$total')";
			$result=mysqli_query($conexion,$sql); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			
						
			$sql2="INSERT into ord_fact_prod (idOrdenFactura,idProducto,cantiProdFact,totalFactProd)
				values ('$nuevoNumFactura','$idProducto','$canti','$total')";
			$result2=mysqli_query($conexion,$sql2); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion
			
			$sql3="UPDATE pruducto set cantProd='$nuevoStop'
				WHERE idProducto='$idProducto'";
			$result3=mysqli_query($conexion,$sql3); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion

			$sql4="UPDATE comision_x_vendedor set valComision='$nuevaComi'
				WHERE idPer='$idPer'";
			$result4=mysqli_query($conexion,$sql4); ////la funcion mysqli_query devulve un valor mayor a 0 si encuentra resultado de $sql en $conexion

			echo 1;

				


 ?>