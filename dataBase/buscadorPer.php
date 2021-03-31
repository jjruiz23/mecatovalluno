<?php

require_once "conexion.php";    //importo los parametros de conexion en conexion.php
$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php

if(!isset($_POST['buscador'])){  // si el valor no esta definido
    $_POST['buscador']='';    // dejer la variable en blanco

   //$buscador=$_POST['buscador']; // prueba de fucnionamiento

}

var_dump($_POST["buscador"]?? '');
//$buscador = $_POST['buscador'];  //capturar variable enviada al 
//var_dump($_GET['buscador']);
$buscador = $_POST['buscador'];  //capturar variable enviada al modulo
// query 
$sql="SELECT * 
        FROM estudiantes 
        WHERE numDoc LIKE '$buscador'";

//$result =$conexion->query($sql)
$result=mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
    // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false
?>