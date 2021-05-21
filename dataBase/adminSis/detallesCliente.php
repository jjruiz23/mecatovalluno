<?php

	require_once "../dataBase/conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php

        // capturar dato id para hacer consulta sql mediante GET
        $id = $_GET['id'];   // alamcenar en variable dato caputado
        // select para mostrar datos de tabla CLIENTES
        $query = "SELECT  c.idCliente, c.nomCliente, c.apeCliente, td.nomTipoDoc, c.numDocCliente, c.celCliente,
                        c.emailCliente, DATE(c.fechaNacCliente), ec.nomEstCivil, c.telCliente, c.direCliente
			FROM clientes c
			INNER JOIN tipodoc td ON c.idTipoDoc = td.idTipoDoc
                        INNER JOIN estadocivil ec ON c.idEstCivil = ec.idEstCivil
			WHERE c.idCliente=$id";

                /* selecionar los campos
                    desde la tabla importante
                    uniendo la tabla x con campos iguales osea primarykey & forean
                    ordenar de x forma;
                    campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
                    todos los datos de la tabla principal sin importar los nulos
                */
        //$result =$conexion->query($sql)
        $resultadoClienteDet = mysqli_query($conexion,$query); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
        // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false
                
?>