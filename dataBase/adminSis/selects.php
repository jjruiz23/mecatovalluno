<?php

	require_once "../dataBase/conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php

    // select para mostrar datos de tabla PAIS
    $resultadoPais = mysqli_query($conexion, "SELECT * FROM pais ORDER BY 1 ASC;");
    // select para mostrar datos de tabla CIUDAD
    $resultadoCiudad = mysqli_query($conexion, "SELECT * FROM ciudad ORDER BY 1 ASC;");
    // select para mostrar datos de tabla ESTADO CIVIL
    $resultadoSede = mysqli_query($conexion, "SELECT * FROM sede ORDER BY 1 ASC;");
    // select para mostrar datos de tabla PERSONAL
    $resultadoPesonal = mysqli_query($conexion, "SELECT  p.idPer, p.nombres, p.apellidos, td.nomTipoDoc, p.numDocumento
                                                    FROM personal p
                                                    INNER JOIN tipodoc td ON p.idTipoDoc = td.idTipoDoc
                                                    ORDER BY p.apellidos;");
    // select para mostrar datos de tabla ROL
    $resultadoRol = mysqli_query($conexion, "SELECT * FROM rol ORDER BY 1 ASC;");
    // select para mostrar datos de tabla TIPO DE DOCUMENTO
    $resultadoTipoDoc = mysqli_query($conexion, "SELECT * FROM tipodoc ORDER BY 1 ASC;");
    // select para mostrar datos de tabla ESTADO CIVIL
    $resultadoEstCivil = mysqli_query($conexion, "SELECT * FROM estadocivil ORDER BY 1 ASC;");
    // select para mostrar datos de tabla SALARIOS
    $resultadoSalarios = mysqli_query($conexion, "SELECT * FROM salarios ORDER BY 1 ASC;");
    // select para mostrar datos de tabla CATEGORIA
    $resultadoCategoria = mysqli_query($conexion, "SELECT * FROM categoria ORDER BY 1 ASC;");
    

?>