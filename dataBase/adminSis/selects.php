<?php

	require_once "../dataBase/conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php
    
    $idPer=$_SESSION['idPer'];   //se almacenan los datos de $usuario en la seccion ['idPrmiso']
/*
    $idCliente = $_SESSION['idCliente'];
    $idProducto = $_SESSION['idProducto'];
    $cantidad = $_SESSION['cantidad'];
*/
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

    // select para mostrar datos de tabla PERSONAL Para factura
    $resultadoPesonalFact = mysqli_query($conexion, "SELECT  p.idPer, p.nombres, p.apellidos, td.nomTipoDoc, p.numDocumento
                                                        FROM personal p
                                                        INNER JOIN tipodoc td ON p.idTipoDoc = td.idTipoDoc
                                                        WHERE p.idPer = $idPer;");

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
    // select para mostrar datos de tabla CATEGORIA
    $resultadoMes = mysqli_query($conexion, "SELECT * FROM mes ORDER BY 1 ASC;");
    // select para mostrar datos de tabla CLIENTE
    $resultadoCliente = mysqli_query($conexion, "SELECT  c.idCliente, c.nomCliente, c.apeCliente, td.nomTipoDoc, c.numDocCliente, c.celCliente
                                                    FROM clientes c
                                                    INNER JOIN tipodoc td ON c.idTipoDoc = td.idTipoDoc
                                                    ORDER BY c.apeCliente");
                                               
    // select para mostrar datos de tabla ORDEN_FACTURA - muestra la ultima fila
    $resultadoOrdenFactura = mysqli_query($conexion, "SELECT idOrdenFactura, fechaFactura 
                                                        FROM orden_factura 
                                                        ORDER BY idOrdenFactura DESC LIMIT 1;");
    // select para mostrar datos de tabla PRODUCTO
    $resultadoProducto = mysqli_query($conexion, "SELECT  p.idProducto, p.nomProducto, p.codiProducto, c.nomCategoria, p.precioProducto, p.cantProd, DATE(p.fechaCreacionProducto)
                                                        FROM pruducto p
                                                        INNER JOIN categoria c ON p.idCategoria = c.idCategoria
                                                        ORDER BY p.nomProducto");                                                                                                      
    

?>