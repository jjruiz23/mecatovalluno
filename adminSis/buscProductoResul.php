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

<!-- INICIALIZAR VARIABLE EN 0 de forma global para usar en while de tabla -->
<?php $fila = 0; ?>

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
                <h5 class="card-header">Buscar Item Inventario</h5>
                <!--titulo -->
                <div class="card-body">
                    <p></p>
                    <!-- Primer fila de inputs -->
                    <div class="row g-3">
                        <div class="col-sm-2 col-md-2 col-xs-2">
                            <a href="consoInvProd.php" class="btn btn-outline-success">Consolidado</a>
                            <!--boton -->
                        </div>
                        <div class="col-sm">
                        </div>
                        <div class="col-sm-4 col-md-4 col-xs-4">
                            <form action="../adminSis/buscProductoResul.php" method="GET" id="respuesta">
                                <!-- recargo pagina con el resultado del query -->
                                <input type="text" style="text-align:center" name="buscador" id="buscador" placeholder="Ingrese ID"> <!-- input captura de datos-->
                                <button type="submit" class="btn btn-success" id="buscarPro"> Buscar </button> <!-- boton para activar formulario -->
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

                                    include '../dataBase/buscadorProducto.php'; // invoco el query en buscadorPer.php

                                    //entonces obtenga un array con los datos de la variable $result proveniente de cbrrador2.php
                                    while ($row = mysqli_fetch_array($result)) {
                                        $fila = $fila + 1;  //incrementador contador de filas
                                        $idd =  strval($row[0]); // guardar dato tipo string mediante castin
                                                                 // para enviar a otro modulo mediante post o get ?>
                                        
                                        <!--los datos de los campos en Bd los almaceno en la variable $row -->
                                        
                                    <!-- CONTENEDOR DE RESULTADOS -->
                                    <div style="text-align: center;">
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
                                                        <th>Fila</th>                                                        
                                                        <th>Nombre Prod</th>
                                                        <th>Codigo Prod</th>
                                                        <th>Categoria Prod</th>
                                                        <th>Precio Prod</th>
                                                        <th>Fecha Creacion</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>

                                                <tr>
                                                    <!-- mostrar filas con los resultados -->
                                                    <td><?= $fila ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row[1] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[2] ?></td> <!-- o por la posicion dada en el query de consutlta -->
                                                    <td><?= $row[3] ?></td> <!-- imprimir el dato mediante la variable $row de $result -->
                                                    <td><?= $row[4] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <td><?= $row[5] ?></td> <!-- se puede indicar mediante el nombre del indice de la tabla de bd -->
                                                    <!-- TD BOTONES edit and delete -->
                                                    <td>
                                                        <!--enviar a xxxx.php pero pasando el dato de id de bd mediante php-->
                                                        <!-- utilizar funcion js para cofirmar accion -->
                                                        <a href="editProducto.php?id=<?php echo $idd ?>" onclick="return ConfirmarAccionEdit()" id="editarProducto" class="btn btn-light border-success btn-outline-dark">
                                                            <img src="../includes/images/edit.png" height="17">
                                                        </a><!-- utilizar funcion js para cofirmar accion -->
                                                        <?php // inicio lineas php
                                                        if($idPrmiso =="1"){ // si el permiso es igual a x muestre boton
                                                        ?>  <!-- cierro lineas php -->
                                                        <a href="../dataBase/adminSis/delProducto.php?id=<?php echo $idd ?>" onclick="return ConfirmarAccionDel()" id="delProducto" class="btn btn-light border-success btn-outline-dark">
                                                            <img src="../includes/images/delete.png" height="17">
                                                        </a>
                                                        <?php } ?> <!-- control de boton con permiso -->
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
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

<?php // inicio lineas php
} else {  // si la seccion no esta definida
	header("location:../index.php"); // forzamos el envio a la pagina index.php
	}
 ?>