<!-- incluir conexion a base de datos -->
<?php require_once ("../dataBase/conexion.php");
$conexion = conexion();

#2. Definir la acción a realizar (selecT -> RESULSET)  con DATE() se extrae la fecha sin hora

$sql = "SELECT  of.idOrdenFactura, c.nomCliente, p.nombres, p.apellidos, p.numDocumento, of.netoFactura, of.ivaFactura, of.totalFactura, DATE(of.fechaFactura), c.apeCliente
			FROM orden_factura of
			INNER JOIN clientes c ON of.idCliente = c.idCliente
			INNER JOIN personal p ON p.idPer = of.idPer
			ORDER BY of.idOrdenFactura";			
		/* selecionar los campos
		desde la tabla importante
		uniendo la tabla x con campos iguales osea primarykey & forean
		ordenar de x forma;
		campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
        todos los datos de la tabla principal sin importar los nulos
		*/
//$result =$conexion->query($sql)
$resultConsoFactura=mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
    // si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false

?>