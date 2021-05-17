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
                                                        <th>Tipo Doc</th>
                                                        <th>Numero Doc</th>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                        <th>Celular</th>                                                        
                                                        <th>Sede</th>
                                                        <th>Cargo</th>                                                   
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                <!--para rellenar campos con los datos el array de la consulta debe ir en el tbody-->
                                                <?php //lienas php
                                                    include '../dataBase/adminSis/queryConsoPersonal.php'; // invoco el query en directorio
                                                    while ($row = mysqli_fetch_row($resultConsoPersonal)) { // separar tuplas de datos del resultado sql
                                                        $fila = $fila + 1;  //incrementador contador de filas
                                                        $idd =  strval($row[0]); // guardar dato tipo string mediante castin
                                                                                 // para enviar a otro modulo mediante post o get
                                                    ?>
                                                <tr>
                                                    <td><?= $fila ?></td>
                                                    <td><?= $row[3] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[4] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    <td><?= $row[1] ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row[2] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[5] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    <td><?= $row[6] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[7] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    
                                                    <!-- TD BOTONES ver, editar y eliminar -->
                                                    <td>
                                                        <!--enviar a xxxx.php pero pasando el dato de id de bd mediante php-->
                                                        <a href="detaPer.php?id=<?php echo $idd ?>" id="detallePersonal" class="btn btn-light border-success btn-outline-dark">
                                                            <img src="../includes/images/view.png" height="17">
                                                        </a>
                                                        </a><!-- utilizar funcion js para cofirmar accion -->
                                                        <a href="editPer.php?id=<?php echo $idd ?>" onclick="return ConfirmarAccionEdit()" id="editarPersonal" class="btn btn-light border-success btn-outline-dark">
                                                            <img src="../includes/images/edit.png" height="17">
                                                        </a><!-- utilizar funcion js para cofirmar accion -->
                                                        <a href="../dataBase/adminSis/delPer.php?id=<?php echo $idd ?>" onclick="return ConfirmarAccionDel()" id="delPersonal" class="btn btn-light border-success btn-outline-dark">
                                                            <img src="../includes/images/delete.png" height="17">
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php }  // cierro el array con los datos de la consulta para mostrar dentro del tbody
                                                ?>
                                                </tbody>
                                            </table>
                                        </div> <!-- table responsive -->
                                    </div>  <!-- text-aling center -->
                                    
                                </div> <!--  row -->
                            </div>   <!--col-sm-12-->
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