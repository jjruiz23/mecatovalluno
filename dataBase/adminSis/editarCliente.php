<?php

	require_once "../dataBase/conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php


        // capturar dato id para hacer consulta sql mediante GET
        if(isset($_GET['id'])){  // si exite mediante el metodo GET la [variable]
                $id = $_GET['id'];   // alamcenar en variable dato caputado                                
                // select para mostrar datos de tabla PERSONAL
                $sql = "SELECT  c.idCliente, c.nomCliente, c.apeCliente, td.nomTipoDoc, c.numDocCliente, c.celCliente,
                        c.emailCliente, DATE(c.fechaNacCliente), ec.nomEstCivil, c.telCliente, c.direCliente,
                        c.idTipoDoc, c.idEstCivil
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
                $resultadoClienteEdit = mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
                // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false
                
                // si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
                if(mysqli_num_rows($resultadoClienteEdit) == 1){  //si existe un numero de filas en (resultadoClienteEdit) mayor a 1
                        $row = mysqli_fetch_array($resultadoClienteEdit);   // en row guardo los datos del array resultantes de (result)
                        $c_idCliente = $row['idCliente'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query
                        $c_nombres = $row['nomCliente'];
                        $c_apellidos = $row['apeCliente'];
                        $c_email = $row['emailCliente'];
                        $c_fechaNac = $row[7];  // se captura por valor de ubicacion en el query
                        $td_nomTipoDoc = $row['nomTipoDoc'];
                        $c_numDocumento = $row['numDocCliente']; // para mostrar en formulario
                        $ec_nomEstCivil = $row['nomEstCivil'];
                        $c_celular = $row['celCliente'];
                        $c_telefono = $row['telCliente'];
                        $c_direccion = $row['direCliente'];
                        $td_idTipoDoc = $row['idTipoDoc'];      // valor para enviar por formulario
                        $ec_idEstCivil = $row['idEstCivil'];    // valor para enviar por formulario
                }
                
        }
?>