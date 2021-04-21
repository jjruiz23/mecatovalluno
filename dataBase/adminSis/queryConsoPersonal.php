<!-- incluir conexion a base de datos -->
<?php require_once ("../dataBase/conexion.php");
$conexion = conexion();

#2. Definir la acción a realizar (selecT -> RESULSET)  con DATE() se extrae la fecha sin hora

$sql = "SELECT  p.idPer, p.nombres, p.apellidos, p.email, DATE(p.fechaNac), td.nomTipoDoc, p.numDocumento,
			ec.nomEstCivil, p.celular, s.nomSede, p.telefono, sl.valorSalario, p.direccion
			FROM personal p
			INNER JOIN tipodoc td ON p.idTipoDoc = td.idTipoDoc
			INNER JOIN estadocivil ec ON p.idEstCivil = ec.idEstCivil
			INNER JOIN sede s ON p.idSede = s.idSede
			INNER JOIN salarios sl ON p.idSalarios = sl.idSalarios
			ORDER BY p.idPer";
/* selecionar los campos
		desde la tabla importante
		uniendo la tabla x con campos iguales osea primarykey & forean
		ordenar de x forma;	
*/
//$result =$conexion->query($sql)
$resultConsoPersonal=mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
    // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false

?>