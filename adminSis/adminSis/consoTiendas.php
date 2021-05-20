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
                    <a href="crearPais.php" class="btn btn-outline-success" >Crear Pais</a> <!--boton -->
                    <a href="crearCiudad.php" class="btn btn-outline-success">Crear Ciudad</a> <!--boton -->
                    <a href="crearSede.php" class="btn btn-outline-success">Crear Sede</a> <!--boton -->

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
                                                    </tr>
                                                </thead>
                                                <tbody>  <!-- cuerpo de la tabla, resultados de consulta sql -->

                                                <?php  // inicio lineas php para descargar resultado de query en la tabla dentro del tbody
                                                    include '../dataBase/adminSis/queryConsoTiendas.php'; // invoco el query en directorio
                                                    while ($row = mysqli_fetch_row($resultConsoTiendas)) { // separar tuplas de datos del resultado sql
                                                        $fila = $fila + 1;
                                                    ?>
                                                <tr>
                                                    <td><?= $fila ?></td>
                                                    <td><?= $row[0] ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row[1] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[2] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    <td><?= $row[3] ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row[4] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[5] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    
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