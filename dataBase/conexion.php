<?php // incio el php

function conexion() // inicio funcion conexion()
{
    $db_host = "localhost";
    $db_user = "pruebamv5";
    $db_pass = "Dolby2323";
    $db_name = "pruebamv5";

    return $conexion = new mysqli($db_host, $db_user, $db_pass, $db_name); //determino los parametros de conexion y retorno el resultado

    /* comprueba la conexión */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
}

?>

 <?php     //para guardar datos en seccion
    //session_start();   // guardar mensajes  //si lo activo no me deja seguir el index al inicio
    ?>