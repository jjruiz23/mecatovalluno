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
                <h5 class="card-header">Consolidado Tiendas</h5>  <!--titulo -->
                <div class="card-body">
                    <?php // inicio lineas php
                    if($idPrmiso =="1"){ // si el permiso es igual a x muestre boton
                    ?>  <!-- cierro lineas php -->
                    <a href="editarPaisCiudad.php" class="btn btn-outline-success" >Editar Pais / Sede</a> <!--boton -->
                    <a href="crearSede.php" class="btn btn-outline-success">Crear Sede</a> <!--boton -->
                    <?php } ?> <!-- control de boton con permiso -->

                    <p></p> <!-- espacio entre botones superiores y contenedor de resultado -->

                    <!-- CONTENEDOR DE RESULTADO DE BUSQUEDA -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="row justify-content-center">
                                    
                                    <div style="text-align: center;">
                                        <div class="table-responsive table-bordered border-success">
                                            <table class="table table-sm table-striped border-success ">
                                                <!-- tabla con campos pequeños -->
                                                <h5 class="card-title">Consolidado General de Tiendas</h5>
                                                <thead> <!-- encabezados de la tabla -->
                                                    <tr class="table-dark">
                                                        <th>Filas</th>
                                                        <th>Pais</th>
                                                        <th>Ciudad</th>
                                                        <th>Sede</th>
                                                        <th>Telefono</th>
                                                        <th>Direccion</th>
                                                        <th>Fecha Creacion</th>
                                                        <th>Acciones</th>                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>  <!-- cuerpo de la tabla, resultados de consulta sql -->

                                                <?php  // inicio lineas php para descargar resultado de query en la tabla dentro del tbody
                                                    include '../dataBase/adminSis/queryConsoTiendas.php'; // invoco el query en directorio
                                                    while ($row = mysqli_fetch_row($resultConsoTiendas)) { // separar tuplas de datos del resultado sql
                                                        $fila = $fila + 1;
                                                        $idd =  strval($row[6]); // guardar dato tipo string mediante castin
                                                        $ids =  strval($row[7]); // guardar dato tipo string mediante castin

                                                    ?>
                                                <tr>
                                                    <td><?= $fila ?></td>
                                                    <td><?= $row[0] ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row[1] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[2] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    <td><?= $row[3] ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row[4] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[5] ?></td> <!-- o por la posicion dada en el query de consutlta -->

                                                    <!-- TD BOTONES ver, editar y eliminar -->
                                                    <td>
                                                        <!--enviar a xxxx.php pero pasando el dato de id de bd mediante php-->
                                                        <a href="editSede.php?id=<?php echo $ids ?>" onclick="return ConfirmarAccionEdit()" id="editarSede" class="btn btn-light border-success btn-outline-dark">
                                                            <img src="../includes/images/edit.png" height="17">
                                                        </a><!-- utilizar funcion js para cofirmar accion -->
                                                        <?php // inicio lineas php
                                                        if($idPrmiso =="1"){ // si el permiso es igual a x muestre boton
                                                        ?>  <!-- cierro lineas php -->
                                                        <a href="../dataBase/adminSis/delSede.php?id=<?php echo $ids ?>" onclick="return ConfirmarAccionDel()" id="delSede" class="btn btn-light border-success btn-outline-dark">
                                                            <img src="../includes/images/delete.png" height="17">
                                                        </a>
                                                        <?php } ?> <!-- control de boton con permiso -->
                                                    </td>
                                                    
                                                </tr>
                                                <?php } // cierro el query de consulta y extraccion de datos para mostrar dentro del tbody
                                                ?>
                                                </tbody>
                                            </table>
                                        </div> <!--  table-responsive table-bordered border-success -->
                                    </div>   <!--style aling center-->                              

                                </div> <!--row justify-content-center-->
                            </div> <!--col-sm-12-->
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