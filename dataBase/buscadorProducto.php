<?php

require_once "conexion.php";    //importo los parametros de conexion en conexion.php
$conexion=conexion();   // creo variable $conexion y alamaceno los valores retornados por la funcion conexion importada por conexion.php

if(!isset($_GET['buscador'])){  // si el valor no esta definido
    $_GET['buscador']='';    // dejer la variable en blanco

   //$buscador=$_POST['buscador']; // prueba de fucnionamiento

}

var_dump($_GET["buscador"]?? '');
//$buscador = $_POST['buscador'];  //capturar variable enviada al 
//var_dump($_POST['buscador']);
$buscador = $_GET['buscador'];  //capturar variable enviada al modulo

$sql = "SELECT  p.idProducto, p.nomProducto, p.codiProducto, c.nomCategoria, p.precioProducto, DATE(p.fechaCreacionProducto)
			FROM pruducto p
			INNER JOIN categoria c ON p.idCategoria = c.idCategoria
            WHERE p.codiProducto LIKE '$buscador'";
		/* selecionar los campos
		desde la tabla importante
		uniendo la tabla x con campos iguales osea primarykey & forean
		ordenar de x forma;
		campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
        todos los datos de la tabla principal sin importar los nulos
		*/
//$result =$conexion->query($sql)
$result=mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
    // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false

/* query 

$sql="SELECT * 
        FROM personal 
        WHERE numDocumento LIKE '$buscador'";
*/
?>