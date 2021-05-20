<?php // inicio lineas php
	session_start(); //creo una seccion para pasarlo mediante GET O POST

	if(isset($_SESSION['user'])){ // si la seecion esta definida desde login.php
 ?>  <!-- cierro lineas php -->

<!-- incluir conexion a base de datos -->
<?php include("../dataBase/conexion.php") ?>
<?php $conexion = conexion(); ?>
<!-- invoco funcion conexion y la almaceno para usar en query -->

<!-- solicito el header -->
<?php include("../includes/header.php") ?>

<!-- body de la pagina -->

<p></p> <!--  espacio entre contenidos -->

<!-- solicito el menu -->
<?php include("barraMenu.php") ?>

<p></p>
<!--espacio entre menu y contenido-->

<!-- INICIALIZAR VARIABLE EN 0 de forma global para usar en while de tabla -->
<?php $fila = 0; ?>

<!-- CONTENIDO DEL MODULO -->

<!--container botones y formulario de busqueda-->
<div class="container" id="cnt-info">   <!-- contendor de columnas/filas -->
    <div class="row-justify">    <!-- distribuidor de columnas/filas -->
        <div class="col-sm-12 col-xs-12">    <!-- tamaños de distribucion de columnas/filas -->

            <!-- card con informacion del modulo -->
            <div class="card">
                <h5 class="card-header">Consolidado Personal</h5>  <!--titulo -->
                <div class="card-body">
                    <a href="crearPer.php" class="btn btn-outline-success">Crear</a>    <!--boton -->
                    <a href="buscPerResul.php" class="btn btn-outline-success">Buscar</a>     <!--boton -->
                    <a href="consoPer.php" class="btn btn-outline-success">Consolidado</a>     <!--boton -->
                    
                    <p></p> <!-- espacio entre botones superiores y contenedor de resultado -->

                    <!-- CONTENEDOR DE RESULTADO DE BUSQUEDA -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="row justify-content-center">

                                    <!-- CONTENEDOR DE RESULTADOS -->
                                    <div style="text-align: center;">
                                    <div class="table-responsive table-bordered border-success">
                                            <table class="table table-sm table-striped border-success ">
                                            <h5 class="card-title">Consolidado General de Personal</h5>
                                                <thead class="table-dark">
                                                    <!-- para resaltar encabezados -->
                                                    <tr>
                                                        <!-- encabezados de tabla -->
                                                        <th>Fila</th>
                                                        <th>IdPer</th>
                                                        <th>Tipo Doc</th>
                                                        <th>Numero Doc</th>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                        <th>Celular</th>
                                                        <th>Telefono</th>
                                                        <th>Direccion</th>
                                                        <th>Email</th>
                                                        <th>Fecha Nacimiento</th>
                                                        <th>Est Civil</th>
                                                        <th>Sede</th>
                                                        <th>Salario</th>
                                                        <th>Cargo</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!--para rellenar campos con los datos el array de la consulta debe ir en el tbody-->
                                                    <?php //lineas php
                                                    include '../dataBase/adminSis/detallesPer.php'; // invoco el query en directorio
                                                    while ($row = mysqli_fetch_row($resultadoPesonalDet)) { // separar tuplas de datos del resultado sql
                                                        $fila = $fila + 1;  //incrementador contador de filas
                                                        $idd =  strval($row[0]); // guardar dato tipo string mediante castin
                                                                                 // para enviar a otro modulo mediante post o get                                                
                                                    ?>
                                                <tr>
                                                    <td><?= $fila ?></td>
                                                    <td><?= $row[0] ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row[5] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[6] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    <td><?= $row[1] ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row[2] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[8] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    <td><?= $row[10] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[12] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    <td><?= $row[3] ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row[4] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[7] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    <td><?= $row[9] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[11] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    <td><?= $row[13] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    
                                                            <!-- TD BOTONES edit and delete -->
                                                            <td>
                                                                <!--enviar a edit.php pero pasando el dato de id de bd mediante php-->
                                                                <a href="editPer.php?id=<?php echo $idd ?>" onclick="return ConfirmarAccionEdit()" id="editarPersonal" class="btn btn-light border-success btn-outline-dark">
                                                                    <img src="../includes/images/edit.png" height="15">
                                                                </a>                                                                
                                                            </td>
                                                        </tr>

                                                    <?php }  // cierro el array con los datos de la consulta para mostrar dentro del tbody
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div> <!-- table responsive -->
                                    </div>
                                    
                                </div> <!--  row -->
                            </div>
                            <!--col-sm-12-->
                        </div> <!-- form-row-->
                    </div> <!-- class="form-group" CONTENEDOR BUSQUEDA -->

                </div>  <!--card-body-->
            </div>   <!--card-->

        </div>  <!--col-sm-12-->
    </div>  <!--row-->
</div>  <!--container MAYOR-->

        <!-- XXXX -->
        <p></p>

<!-- fin body de la pagina -->

<!-- solicito el footer -->
<?php include("../includes/footer.php") ?>

<!-- solicito las funciones del modulo cargadas en el footer desde js -->
<script>
    $(document).ready(accionesAdminSis);
</script>

<?php // inicio lineas php
} else {  // si la seccion no esta definida
	header("location:../index.php"); // forzamos el envio a la pagina index.php
	}
 ?>