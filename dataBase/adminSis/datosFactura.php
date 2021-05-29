<?php

	require_once "../dataBase/conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php

        $idCliente=$_POST['idCliente']; // creo variable $xx y le asigno los datos enviados mediante ajax
	$idPer=$_POST['idPer'];
        $idProducto=$_POST['idProducto'];
        $cantidad=$_POST['cantidad'];
/*
        var_dump(($idCliente)??'');  //para pruebas
        var_dump(($idPer)??'');  //para pruebas
        var_dump(($idProducto)??'');  //para pruebas
*/
        //CAPTURAR DATOS DE CLIENTE
        // capturar dato id para hacer consulta sql mediante GET
        if(isset($idCliente)){  // si exite mediante el metodo GET la [variable]
                $id = $idCliente;   // alamcenar en variable dato caputado                                
                // select para mostrar datos de tabla PERSONAL
                $sql = "SELECT  c.idCliente, c.nomCliente, c.apeCliente, td.nomTipoDoc, c.numDocCliente, c.celCliente, c.telCliente, c.direCliente, c.emailCliente
                                FROM clientes c
                                INNER JOIN tipodoc td ON c.idTipoDoc = td.idTipoDoc
                                WHERE c.idCliente = $id";
                        /* selecionar los campos
                        desde la tabla importante
                        uniendo la tabla x con campos iguales osea primarykey & forean
                        ordenar de x forma;
                        campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
                        todos los datos de la tabla principal sin importar los nulos
                        */
                //$result =$conexion->query($sql)
                $resultadoClienteFactura = mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
                // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false
                
                // si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
                if(mysqli_num_rows($resultadoClienteFactura) == 1){  //si existe un numero de filas en (resultadoClienteFactura) mayor a 1
                        $row = mysqli_fetch_array($resultadoClienteFactura);   // en row guardo los datos del array resultantes de (result)
                        $c_idCliente = $row['idCliente'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query
                        $c_nomCliente = $row['nomCliente'];
                        $c_apeCliente = $row['apeCliente'];
                        $td_nomTipoDoc = $row['nomTipoDoc'];
                        $c_numDocCliente = $row['numDocCliente'];
                        $c_celCliente = $row['celCliente'];
                        $c_telCliente = $row['telCliente'];
                        $c_direCliente = $row['direCliente'];
                        $c_emailCliente = $row['emailCliente'];
                }
        }       // IF ISSSET

        //CAPTURAR DATOS DE PRODUCTO        
        // capturar dato id para hacer consulta sql mediante GET
        if(isset($idProducto)){  // si exite mediante el metodo GET la [variable]
                $idP = $idProducto;   // alamcenar en variable dato caputado                                
                // select para mostrar datos de tabla PERSONAL
                $sqlP = "SELECT  p.idProducto, p.nomProducto, p.codiProducto, c.nomCategoria, p.precioProducto, DATE(p.fechaCreacionProducto), p.cantProd
                                FROM pruducto p
                                INNER JOIN categoria c ON p.idCategoria = c.idCategoria
                                WHERE p.idProducto = $idP ";
                        /* selecionar los campos
                        desde la tabla importante
                        uniendo la tabla x con campos iguales osea primarykey & forean
                        ordenar de x forma;
                        campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
                        todos los datos de la tabla principal sin importar los nulos
                        */
                //$result =$conexion->query($sql)
                $resultadopProduFactura = mysqli_query($conexion,$sqlP); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
                // si es correcta alamacena el conjunto de datos en el buffer del pProdu, si es negativa devuelve un false
                
                // si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
                if(mysqli_num_rows($resultadopProduFactura) == 1){  //si existe un numero de filas en (resultadopProduFactura) mayor a 1
                        $row = mysqli_fetch_array($resultadopProduFactura);   // en row guardo los datos del array resultantes de (result)
                        $p_idProducto = $row['idProducto'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query
                        $p_nomProducto = $row['nomProducto'];
                        $p_precioProducto = $row['precioProducto'];
                        $p_cantProd = $row['cantProd'];
                        $p_codiProducto = $row['codiProducto'];
                }                
        }

        //CAPTURAR DATOS DE COMISION       
        // capturar dato id para hacer consulta sql mediante GET
        if(isset($idPer)){  // si exite mediante el metodo GET la [variable]
                $idPC = $idPer;   // alamcenar en variable dato caputado                                
                // select para mostrar datos de tabla PERSONAL
                $sqlCo = "SELECT  idComisionVen, idPer, valComision
                          FROM comision_x_vendedor
                          WHERE idPer = $idPC ";
                        /* selecionar los campos
                        desde la tabla importante
                        uniendo la tabla x con campos iguales osea primarykey & forean
                        ordenar de x forma;
                        campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
                        todos los datos de la tabla principal sin importar los nulos
                        */
                //$result =$conexion->query($sql)
                $resultadoComiFactura = mysqli_query($conexion,$sqlCo); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
                // si es correcta alamacena el conjunto de datos en el buffer del pProdu, si es negativa devuelve un false
                
                // si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
                if(mysqli_num_rows($resultadoComiFactura) == 1){  //si existe un numero de filas en (resultadopProduFactura) mayor a 1
                        $row = mysqli_fetch_array($resultadoComiFactura);   // en row guardo los datos del array resultantes de (result)
                        $co_valComision = $row['valComision'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query

                }                
        }

        //CAPTURAR DATOS DE COMISION       
        // capturar dato id para hacer consulta sql mediante GET
        if(isset($idPer)){  // si exite mediante el metodo GET la [variable]
                $idPS = $idPer;   // alamcenar en variable dato caputado                                
                // select para mostrar datos de tabla PERSONAL
                $sqlCS = "SELECT  p.idPer, p.idSede, s.nomSede, c.nomCiudad, pa.nomPais, s.telefonoSede, s.direSede
                          FROM personal p
                          INNER JOIN sede s ON s.idSede = p.idSede
                          INNER JOIN ciudad c ON c.idCiudad = s.idCiudad
                          INNER JOIN pais pa ON pa.idPais = c.idPais
                          WHERE idPer = $idPS ";
                        /* selecionar los campos
                        desde la tabla importante
                        uniendo la tabla x con campos iguales osea primarykey & forean
                        ordenar de x forma;
                        campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
                        todos los datos de la tabla principal sin importar los nulos
                        */
                //$result =$conexion->query($sql)
                $resultadoSedeFactura = mysqli_query($conexion,$sqlCS); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
                // si es correcta alamacena el conjunto de datos en el buffer del pProdu, si es negativa devuelve un false
                
                // si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
                if(mysqli_num_rows($resultadoSedeFactura) == 1){  //si existe un numero de filas en (resultadopProduFactura) mayor a 1
                        $row = mysqli_fetch_array($resultadoSedeFactura);   // en row guardo los datos del array resultantes de (result)
                        $s_nomSede = $row['nomSede'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query
                        $c_nomCiudad = $row['nomCiudad'];
                        $pa_nomPais = $row['nomPais'];
                        $s_telefonoSede = $row['telefonoSede'];
                        $s_direSede = $row['direSede'];
                }                
        }

?>