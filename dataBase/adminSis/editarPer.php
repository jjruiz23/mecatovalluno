<?php

	require_once "../dataBase/conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php


        // capturar dato id para hacer consulta sql mediante GET
        if(isset($_GET['id'])){  // si exite mediante el metodo GET la [variable]
                $id = $_GET['id'];   // alamcenar en variable dato caputado                                
                // select para mostrar datos de tabla PERSONAL
                $sql = "SELECT  p.idPer, p.nombres, p.apellidos, p.email, DATE(p.fechaNac), td.nomTipoDoc, td.idTipoDoc ,p.numDocumento,
                        ec.nomEstCivil, ec.idEstCivil ,p.celular, s.nomSede, s.idSede ,p.telefono, sl.valorSalario, sl.idSalarios ,p.direccion, r.nomRol
                        FROM personal p
                        INNER JOIN tipodoc td ON p.idTipoDoc = td.idTipoDoc
                        INNER JOIN estadocivil ec ON p.idEstCivil = ec.idEstCivil
                        INNER JOIN sede s ON p.idSede = s.idSede
                        INNER JOIN salarios sl ON p.idSalarios = sl.idSalarios
                        LEFT JOIN rol_x_personal rp ON p.idPer = rp.idPer
                        LEFT JOIN rol r ON r.idRol = rp.idRol
                        WHERE p.idPer=$id";
                        /* selecionar los campos
                        desde la tabla importante
                        uniendo la tabla x con campos iguales osea primarykey & forean
                        ordenar de x forma;
                        campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
                        todos los datos de la tabla principal sin importar los nulos
                        */
                //$result =$conexion->query($sql)
                $resultadoPesonalEdit = mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
                // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false
                
                // si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
                if(mysqli_num_rows($resultadoPesonalEdit) == 1){  //si existe un numero de filas en (resultadoPesonalEdit) mayor a 1
                        $row = mysqli_fetch_array($resultadoPesonalEdit);   // en row guardo los datos del array resultantes de (result)
                        $p_idPer = $row['idPer'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query
                        $p_nombres = $row['nombres'];
                        $p_apellidos = $row['apellidos'];
                        $p_email = $row['email'];
                        $p_fechaNac = $row[4];  // se captura por valor de ubicacion en el query
                        $td_nomTipoDoc = $row['nomTipoDoc'];
                        $p_numDocumento = $row['numDocumento'];
                        $ec_nomEstCivil = $row['nomEstCivil'];
                        $p_celular = $row['celular'];
                        $s_nomSede = $row['nomSede'];
                        $p_telefono = $row['telefono'];
                        $sl_valorSalario = $row['valorSalario'];
                        $p_direccion = $row['direccion'];
                        $r_nomRol = $row['nomRol'];
                        $td_idTipoDoc = $row['idTipoDoc'];
                        $ec_idEstCivil = $row['idEstCivil'];
                        $s_idSede = $row['idSede'];
                        $sl_idSalarios = $row['idSalarios'];
                }
                
        }
?>