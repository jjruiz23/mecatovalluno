<!-- incluir conexion a base de datos -->
<?php require_once ("../dataBase/conexion.php");
$conexion = conexion();

#2. Definir la acción a realizar (selecT -> RESULSET)  con DATE() se extrae la fecha sin hora

$sql = "SELECT  p.idPer, p.nombres, p.apellidos, td.nomTipoDoc, p.numDocumento,	p.celular, s.nomSede, r.nomRol
			FROM personal p
			INNER JOIN tipodoc td ON p.idTipoDoc = td.idTipoDoc
			INNER JOIN sede s ON p.idSede = s.idSede
			LEFT JOIN rol_x_personal rp ON p.idPer = rp.idPer
			LEFT JOIN rol r ON r.idRol = rp.idRol
			ORDER BY p.apellidos";
		/* selecionar los campos
		desde la tabla importante
		uniendo la tabla x con campos iguales osea primarykey & forean
		ordenar de x forma;
		campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
        todos los datos de la tabla principal sin importar los nulos
		*/
//$result =$conexion->query($sql)
$resultConsoPersonal=mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
    // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false

?>