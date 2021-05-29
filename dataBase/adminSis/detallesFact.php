<?php

	require_once "../dataBase/conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php

        // capturar dato id para hacer consulta sql mediante GET
        $id = $_GET['id'];   // alamcenar en variable dato caputado
        // select para mostrar datos de tabla PERSONAL
        /*
        $sql = "SELECT  p.idPer, p.nombres, p.apellidos, p.email, DATE(p.fechaNac), td.nomTipoDoc, p.numDocumento,
                ec.nomEstCivil, p.celular, s.nomSede, p.telefono, sl.valorSalario, p.direccion, r.nomRol
                FROM personal p
                INNER JOIN tipodoc td ON p.idTipoDoc = td.idTipoDoc
                INNER JOIN estadocivil ec ON p.idEstCivil = ec.idEstCivil
                INNER JOIN sede s ON p.idSede = s.idSede
                INNER JOIN salarios sl ON p.idSalarios = sl.idSalarios
                LEFT JOIN rol_x_personal rp ON p.idPer = rp.idPer
                LEFT JOIN rol r ON r.idRol = rp.idRol
                WHERE p.idPer=$id";
        */
        $sql = "SELECT  ofp.idOrdenFactura, p.nomProducto, ofp.cantiProdFact, ofp.totalFactProd
			FROM ord_fact_prod ofp
			INNER JOIN pruducto p ON p.idProducto = ofp.idProducto
			WHERE ofp.idOrdenFactura=$id";
                /* selecionar los campos
                    desde la tabla importante
                    uniendo la tabla x con campos iguales osea primarykey & forean
                    ordenar de x forma;
                    campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
                    todos los datos de la tabla principal sin importar los nulos
                */
        //$result =$conexion->query($sql)
        $resultadoFacturaDet = mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
        // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false
                
?>