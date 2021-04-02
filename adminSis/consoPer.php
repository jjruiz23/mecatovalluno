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
                    <a href="crearPer.php" class="btn btn-outline-success">Crear</a>
                    <!--boton -->
                    <a href="buscPerResul.php" class="btn btn-outline-success">Buscar</a>
                    <!--boton -->

                    <p></p>
                    <h5 class="card-title">Consolidado General de Personal</h5>
                    <p></p> <!-- espacio entre botones superiores y contenedor de resultado -->


                    <!-- CONTENEDOR DE RESULTADO DE BUSQUEDA -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="row justify-content-center">

                                    <!-- CONTENEDOR DE RESULTADOS -->
                                    <div class="form-row">
                                        <!-- primer form-row-->
                                        <div class="table-responsive">
                                            <table class="table table-sm table-striped">
                                                <!-- tabla con campos pequeños -->

                                                <thead class="thead-dark">
                                                    <!-- para resaltar encabezados -->
                                                    <tr>
                                                        <!-- encabezados de tabla -->
                                                        <th>Fila</th>
                                                        <th>Documento</th>
                                                        <th>Numero</th>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                        <th>Colegio</th>
                                                        <th>Pais</th>
                                                        <th>Departamento</th>
                                                        <th>Ciudad</th>
                                                        <th>Accion</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!--para rellenar campos-->
                                                    <?php //lienas php
                                                    $query = "SELECT * FROM estudiantes";  // llamar toda la info de la tabla estudiantes
                                                    // almacenar la verificacion de datos de la conexion y el query y alamcenarlo
                                                    $result_estudiantes = mysqli_query($conexion, $query);
                                                    // mientras recorre el array de "result estudiantes" saque los datos en la variable $row
                                                    while ($row = mysqli_fetch_array($result_estudiantes)) { ?>
                                                        <?php $fila = $fila + 1; ?>
                                                        <!-- actualizo variable y la uso como operador de incremento para identificar indice de filas -->
                                                        <tr>
                                                            <!-- mostrar filas con los resultados -->
                                                            <td><?php echo  $fila ?> </td> <!-- identificador de filas resultantes -->
                                                            <td><?php echo  $row['tipoDoc'] ?> </td> <!-- imprimir el dato mediante la variable $row de $result_estudiantes-->
                                                            <td><?php echo  $row['numDoc'] ?> </td>
                                                            <td><?php echo  $row['nombre'] ?> </td>
                                                            <td><?php echo  $row['apellido'] ?> </td>
                                                            <td><?php echo  $row['colegio'] ?> </td>
                                                            <td><?php echo  $row['pais'] ?> </td>
                                                            <td><?php echo  $row['departamento'] ?> </td>
                                                            <td><?php echo  $row['ciudad'] ?> </td>
                                                            <!-- TD BOTONES edit and delete -->
                                                            <td>
                                                                <!--enviar a edit.php pero pasando el dato de id de bd mediante php-->
                                                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">
                                                                    <img src="../includes/images/edit.png" height="15">
                                                                </a>
                                                                <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">
                                                                    <!--enviar a edit.php pero pasando el dato de id de bd mediante php para ubicar datos en edit.php-->
                                                                    <img src="../includes/images/delete.png" height="15">
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    <?php }  // cierro tabla html entre lineas php
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div> <!-- table responsive -->
                                    </div> <!-- fin primer form-row -->

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