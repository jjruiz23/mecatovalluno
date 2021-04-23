<?php

    require_once "conexion.php";    //importo los parametros de conexion en conexion.php
	$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php
    var_dump($_GET["id"]?? '');
    if(isset($_GET['id'])){  //si existe el dato id mediante el metodo $_GET
        $id = $_GET['id'];   //capturo el dato id y lo almaceno en la variable
        $query = "DELETE FROM personal WHERE idPer=$id";  //sentencia  // eliminar en la tabla task toda la fila mediante el id
        $result = mysqli_query($conexion, $query);  // consulto en la bd si hay conincidencias de conexion y el query

        if(!$result){   //si un valor diferente de result
            die ("Query failed");  // imprima fallo
        }
        sleep(2);   //retrasa funcion por x segundos
        header("Location:../../adminSis/consoPer.php");  // enviar a la pagina xxxx.php
    }

?>