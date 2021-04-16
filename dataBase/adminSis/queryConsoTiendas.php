<!-- incluir conexion a base de datos -->
<?php require_once ("../dataBase/conexion.php");
$conexion = conexion();

#2. Definir la acción a realizar (selecT -> RESULSET)

$sql = "SELECT  p.nomPais, c.nomCiudad, s.nomSede
			FROM pais p
			INNER JOIN ciudad c ON p.idPais = c.idPais
			INNER JOIN sede s ON c.idCiudad = s.idCiudad
			ORDER BY p.nomPais";
/* selecionar los campos
		desde la tabla importante
		uniendo la tabla x con campos iguales osea primarykey & forean
		ordenar de x forma;	
*/
//$result =$conexion->query($sql)
$resultConsoTiendas=mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
    // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false

?>