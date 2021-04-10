<?php
	/*
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "pruebas2";

    $conexion = new mysqli($db_host, $db_user, $db_pass, $db_name); //determino los parametros de conexion y retorno el resultado
	*/

	require_once "conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php

    // select para mostrar datos de tabla PAIS
    $resultadoPais = mysqli_query($conexion, "SELECT * FROM pais ORDER BY 1 ASC;");
    // select para mostrar datos de tabla CIUDAD
    $resultadoCiudad = mysqli_query($conexion, "SELECT * FROM ciudad ORDER BY 1 ASC;");

?>