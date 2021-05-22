<?php

	require_once "../dataBase/conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php


        // capturar dato id para hacer consulta sql mediante GET
        if(isset($_GET['id'])){  // si exite mediante el metodo GET la [variable]
                $id = $_GET['id'];   // alamcenar en variable dato caputado                                
                // select para mostrar datos de tabla PERSONAL
                
                $sql = "SELECT  p.idProducto, p.nomProducto, p.codiProducto, c.nomCategoria, p.precioProducto, p.idCategoria
                        FROM pruducto p
                        INNER JOIN categoria c ON p.idCategoria = c.idCategoria
                        WHERE p.idProducto=$id";
                        /* selecionar los campos
                        desde la tabla importante
                        uniendo la tabla x con campos iguales osea primarykey & forean
                        ordenar de x forma;
                        campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
                        todos los datos de la tabla principal sin importar los nulos
                        */
                //$result =$conexion->query($sql)
                $resultadoProductoEdit = mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
                // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false
                
                // si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
                if(mysqli_num_rows($resultadoProductoEdit) == 1){  //si existe un numero de filas en (resultadoProductoEdit) mayor a 1
                        $row = mysqli_fetch_array($resultadoProductoEdit);   // en row guardo los datos del array resultantes de (result)
                        $p_idProducto = $row['idProducto'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query
                        $p_nomProducto = $row['nomProducto'];  // se captura por valor de ubicacion en el query
                        $p_codiProducto = $row['codiProducto']; // para mostrar en formulario
                        $c_nomCategoria = $row['nomCategoria'];      // valor para enviar por formulario
                        $p_precioProducto = $row['precioProducto'];      // valor para enviar por formulario
                        $p_idCategoria = $row['idCategoria'];      // valor para enviar por formulario
                }
                
        }
?>