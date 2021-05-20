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

<!-- CONTENIDO DEL MODULO -->

<!--container botones y formulario de busqueda-->
<div class="container">    <!-- contendor de columnas/filas -->
    <div class="row-justify">    <!-- distribuidor de columnas/filas -->
        <div class="col-sm-12 col-xs-12">  <!-- tamaños de distribucion de columnas/filas -->

            <!-- card con informacion del modulo -->
            <div class="card">
                <h5 class="card-header">Buscar Personal</h5>
                <!--titulo -->
                <div class="card-body">
                    <p></p>
                    <!-- Primer fila de inputs -->
                    <div class="row g-3">
                        <div class="col-sm-2 col-md-2 col-xs-2">
                            <a href="crearPer.php" class="btn btn-outline-success">Crear</a>
                            <a href="consoPer.php" class="btn btn-outline-success">Consolidado</a>
                            <!--boton -->
                        </div>
                        <div class="col-sm">
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-4">
                            <form action="../adminSis/buscPerResul.php" method="GET" id="respuesta">
                                <!-- recargo pagina con el resultado del query -->
                                <input type="text" style="text-align:center" name="buscador" id="buscador" placeholder="Ingrese ID"> <!-- input captura de datos-->
                                <button type="submit" class="btn btn-success" id="buscar"> Buscar </button> <!-- boton para activar formulario -->
                            </form>
                        </div>
                    </div>
                    <p></p> <!-- espacio entre botones superiores y contenedor de resultado -->


                    <!-- CONTENEDOR DE RESULTADO DE BUSQUEDA -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="row justify-content-center">

                                    <?php  // inicio lineas php

                                    include '../dataBase/buscadorPer.php'; // invoco el query en buscadorPer.php

                                    //entonces obtenga un array con los datos de la variable $result proveniente de cbrrador2.php
                                    while ($row = mysqli_fetch_array($result)) { ?>
                                        <!--los datos de los campos en Bd los almaceno en la variable $row -->

                                        <!-- inicio lineas html para graficar tabla -->
                                        <div class="table-responsive table-bordered border-success">
                                            <table class="table table-sm table-striped border-success ">
                                                <!-- tabla con campos pequeños -->
                                                <h4 class="text-center"> Resultado de busqueda </h4>

                                                <thead>
                                                    <!-- bloque de filas <tr> -->
                                                    <!-- para resaltar encabezados -->
                                                    <tr class="table-dark">
                                                        <!-- encabezados de tabla -->
                                                        <th>Tipo Documento</th>
                                                        <th>Numero Documento</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>Colegio</th>
                                                        <th>Pais</th>
                                                        <th>Departamento</th>
                                                        <th>Ciudad</th>
                                                        <th>Accion</th>
                                                    </tr>
                                                </thead>

                                                <tr>
                                                    <!-- mostrar filas con los resultados -->
                                                    <td><?= $row['tipoDoc'] ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row['numDoc'] ?></td>
                                                    <td><?= $row['nombre'] ?></td>
                                                    <td><?= $row['apellido'] ?></td>
                                                    <td><?= $row['colegio'] ?></td>
                                                    <td><?= $row['pais'] ?></td>
                                                    <td><?= $row['departamento'] ?></td>
                                                    <td><?= $row['ciudad'] ?></td>
                                                    <!-- TD BOTONES edit and delete -->
                                                    <td>
                                                        <!--enviar a edit.php pero pasando el dato de id de bd mediante php para ubicar datos en edit.php-->
                                                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">
                                                            <img src="../includes/images/edit.png" height="28">
                                                        </a>
                                                        <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">
                                                            <!--enviar a edit.php pero pasando el dato de id de bd mediante php para ubicar datos en edit.php-->
                                                            <img src="../includes/images/delete.png" height="28">
                                                        </a>
                                                    </td> <!-- TD BOTONES edit and delete -->
                                                </tr>
                                            </table>
                                        </div>

                                    <?php } // cierro tabla html entre lineas php
                                    ?>

                                </div> <!--  row -->
                            </div>  <!--col-sm-12-->
                        </div> <!-- form-row-->
                    </div> <!-- class="form-group" CONTENEDOR BUSQUEDA -->
                </div>  <!--card body-->
            </div>   <!--card-->
        </div> <!--col-sm-12-->
    </div> <!--row-->
</div> <!--container mayor-->

<!-- XXXX -->
<p></p>

<!-- fin body de la pagina -->

<!-- solicito el footer -->
<?php include("../includes/footer.php") ?>

<!-- solicito las funciones del modulo cargadas en el footer desde js -->
<script>
    $(document).ready(accionesAdminSis);
</script>