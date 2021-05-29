<!-- incluir conexion a base de datos -->
<?php require_once ("../dataBase/conexion.php");
$conexion = conexion();

#2. Definir la acción a realizar (selecT -> RESULSET)  con DATE() se extrae la fecha sin hora

// capturar dato id para hacer consulta sql mediante GET
if(isset($_GET['id'])){  // si exite mediante el metodo GET la [variable]
	$id = $_GET['id'];   // alamcenar en variable dato caputado                                
	// select para mostrar datos de tabla PERSONAL
	
$sql = "SELECT  p.nomPais, c.nomCiudad, s.nomSede, s.telefonoSede, s.direSede, DATE(s.fechaCreacion), p.idPais, c.idCiudad, s.idSede
			FROM pais p
			INNER JOIN ciudad c ON p.idPais = c.idPais
			INNER JOIN sede s ON c.idCiudad = s.idCiudad
			WHERE s.idSede=$id";
			/* selecionar los campos
			desde la tabla importante
			uniendo la tabla x con campos iguales osea primarykey & forean
			ordenar de x forma;
			campos con rompimientos de tabla se debe de hacer los dos CON LEFT join para que la union sea integra y muestre 
			todos los datos de la tabla principal sin importar los nulos
			*/
	//$result =$conexion->query($sql)
	$resultadoSedeEdit = mysqli_query($conexion,$sql); // la funcion mysqli_query ejecuta la sentencia con los parametros indicados(bd, query) 
	// si es correcta alamacena el conjunto de datos en el buffer del cliente, si es negativa devuelve un false
	
	// si busco filas en resultado y el resultado es igual a 1 // asi se imprimen mediante php los valores en los inputs y selects
	if(mysqli_num_rows($resultadoSedeEdit) == 1){  //si existe un numero de filas en (resultadoSedeEdit) mayor a 1
			$row = mysqli_fetch_array($resultadoSedeEdit);   // en row guardo los datos del array resultantes de (result)
			$p_nomPais = $row['nomPais'];         //en la variable capturo los datos de row en bd por nombre de indice  o ubicacion en el query
			$p_nomCiudad = $row['nomCiudad'];  // se captura por valor de ubicacion en el query
			$p_nomSede = $row['nomSede']; // para mostrar en formulario
			$p_telefonoSede = $row['telefonoSede'];      // valor para enviar por formulario
			$p_direSede = $row['direSede'];      // valor para enviar por formulario
			$p_idPais = $row['idPais'];      // valor para enviar por formulario
			$p_idCiudad = $row['idCiudad'];      // valor para enviar por formulario
			$s_idSede = $row['idSede'];      // valor para enviar por formulario


	}
	
}


?>