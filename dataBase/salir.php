<?php 

	session_start();  //creo una seccion para pasarlo mediante GET O POST

	unset($_SESSION['user']);  //cierro la seccion almacenada
	unset($_SESSION['nomPermiso']);	//cierro la seccion almacenada

	header("location:../index.php");  // forzamos el envio a la pagina index.php

 ?>