<!-- incluir conexion a base de datos -->
<?php require_once ("../dataBase/conexion.php");
$conexion = conexion();

#2. Definir la acción a realizar (selecT -> RESULSET)  con DATE() se extrae la fecha sin hora

$sql = "SELECT  pn.idPagNom, p.nombres, p.apellidos, m.nomMes , pn.nomina, P.numDocumento, tp.nomTipoDoc
			FROM pago_nomina pn
			INNER JOIN personal p ON p.idPer = pn.idPer
			INNER JOIN mes m ON m.idMes = pn.idMes
			INNER JOIN tipodoc tp ON tp.idTipoDoc = p.idTipoDoc
			ORDER BY M.nomMes";
		/* selecionar los campos
		desde la tabla importante
		uniendo la tabla x con campos iguales osea primarykey & forean
		ordenar de x forma;
		campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
        todos los datos de la tabla principal sin importar los nulos
		*/
//$result =$conexion->query($sql)
$resultConsoPagNom=mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
    // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false

?>