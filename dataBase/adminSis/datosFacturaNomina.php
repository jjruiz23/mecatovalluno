<?php

	require_once "../dataBase/conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php

        //$idCliente=$_POST['idCliente']; // creo variable $xx y le asigno los datos enviados mediante ajax
	$idPer=$_POST['idPer'];
        //$idProducto=$_POST['idProducto'];
        //$cantidad=$_POST['cantidad'];
/*
        var_dump(($idCliente)??'');  //para pruebas
        var_dump(($idPer)??'');  //para pruebas
        var_dump(($idProducto)??'');  //para pruebas
*/
        //CAPTURAR DATOS DE CLIENTE
        // capturar dato id para hacer consulta sql mediante GET
        if(isset($idPer)){  // si exite mediante el metodo GET la [variable]
                $id = $idPer;   // alamcenar en variable dato caputado
                $idP = $id;   // alamcenar en variable dato caputado                                
                // select para mostrar datos de tabla PERSONAL
                $sql = "SELECT  p.idper, p.nombres, p.apellidos, td.nomTipoDoc, p.numDocumento, s.valorSalario
                                FROM personal p
                                INNER JOIN tipodoc td ON p.idTipoDoc = td.idTipoDoc
                                INNER JOIN salarios s ON p.idSalarios = s.idSalarios
                                WHERE p.idper = $id";

                $sqlP = "SELECT cv.idComisionVen, cv.idPer, cv.valComision
                                FROM comision_x_vendedor cv
                                WHERE cv.idPer = $idP";
                        /* selecionar los campos
                        desde la tabla importante
                        uniendo la tabla x con campos iguales osea primarykey & forean
                        ordenar de x forma;
                        campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
                        todos los datos de la tabla principal sin importar los nulos
                        */
                //$result =$conexion->query($sql)
                $resultadoNominaFactura = mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
                // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false
                $resultadopComisionVendedor = mysqli_query($conexion,$sqlP); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 


                // si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
                if(mysqli_num_rows($resultadoNominaFactura) == 1){  //si existe un numero de filas en (resultadoClienteFactura) mayor a 1
                        $row = mysqli_fetch_array($resultadoNominaFactura);   // en row guardo los datos del array resultantes de (result)
                        $p_idper = $row['idper'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query
                        $p_nombres = $row['nombres'];
                        $p_apellidos = $row['apellidos'];
                        $td_nomTipoDoc = $row['nomTipoDoc'];
                        $p_numDocumento = $row['numDocumento'];
                        $s_valorSalario = $row['valorSalario'];
                }

                // si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
                if(mysqli_num_rows($resultadopComisionVendedor) == 1){  //si existe un numero de filas en (resultadopComisionVendedor) mayor a 1
                        $row = mysqli_fetch_array($resultadopComisionVendedor);   // en row guardo los datos del array resultantes de (result)
                        $cv_idComisionVen = $row['idComisionVen'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query
                        $cv_idPer = $row['idPer'];
                        $cv_valComision = $row['valComision'];
                } 
        }       // IF ISSSET
        
/*
        //CAPTURAR DATOS DE PRODUCTO        
        // capturar dato id para hacer consulta sql mediante GET
        if(isset($idPer)){  // si exite mediante el metodo GET la [variable]
                $idP = $idPer;   // alamcenar en variable dato caputado                                
                // select para mostrar datos de tabla PERSONAL
                $sqlP = "SELECT  cv.idComisionVen, cv.idPer, cv.valComision
                                FROM comision_x_vendedor cv
                                WHERE cv.idPer = $idP ";
                         selecionar los campos
                        desde la tabla importante
                        uniendo la tabla x con campos iguales osea primarykey & forean
                        ordenar de x forma;
                        campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
                        todos los datos de la tabla principal sin importar los nulos
                        
                //$result =$conexion->query($sql)
                $resultadopComisionVendedor = mysqli_query($conexion,$sqlP); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
                // si es correcta alamacena el conjunto de datos en el buffer del pProdu, si es negativa devuelve un false
                
                // si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
                if(mysqli_num_rows($resultadopComisionVendedor) == 1){  //si existe un numero de filas en (resultadopComisionVendedor) mayor a 1
                        $row = mysqli_fetch_array($resultadopComisionVendedor);   // en row guardo los datos del array resultantes de (result)
                        $cv_idComisionVen = $row['idComisionVen'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query
                        $cv_idPer = $row['idPer'];
                        $cv_valComision = $row['valComision'];
                }                
        }
        */

?>