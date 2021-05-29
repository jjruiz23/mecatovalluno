<?php // inicio lineas php
	session_start(); //creo una seccion para pasarlo mediante GET O POST

	if(isset($_SESSION['user'])){ // si la seecion esta definida desde login.php
 ?>  <!-- cierro lineas php -->

<!-- solicito el header -->
<?php include("../includes/header.php") ?>

<!-- body de la pagina -->

<p></p> <!--  espacio entre contenidos -->

<!-- solicito el menu -->
<?php include("barraMenu.php") ?>

<p></p> <!--espacio entre menu y contenido-->

<?php if(isset($_SESSION['messageFact'])) { ?> <!--si existe un mensaje en session en "preFactura.php"--> 
  <div class="container"> <!-- contendor de columnas/filas -->
    <div class="row-justify"> <!-- distribuidor de columnas/filas -->
      <div class="col-sm-12 col-xs-12"> <!-- tamaños de distribucion de columnas/filas -->

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
          		<?= $_SESSION['messageFact'] ?>  <!--llamo el mensaje en seccion en "login.php"-->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

      </div><!-- col-sm -->
    </div> <!-- row-justify -->
  </div> <!-- container -->
<?php unset($_SESSION['messageFact']); } ?>     <!--Limpiar datos de session para que solo aparezca cuando se llama -->

<!-- CONTENIDO DEL MODULO -->

<!--container formulario-->
<div class="container" id="cnt-info"> <!-- contendor de columnas/filas -->
    <div class="row-justify"> <!-- distribuidor de columnas/filas -->
      <div class="col-sm-12 col-xs-12"> <!-- tamaños de distribucion de columnas/filas -->

      <!-- card con informacion del modulo -->
      <div class="card">
        <h5 class="card-header">Factura</h5> <!--titulo -->
        <div class="card-body">
        <form id="frmRegistro" name="frmRegistro" action="preFactura.php" method="POST">

<?php //var_dump($_SESSION['idPer']?? '');	// prueba de fucnionamiento ?>

          <a href="buscFacturaResul.php" class="btn btn-outline-success" >Buscar</a> <!--boton -->
          <a href="consoFactura.php" class="btn btn-outline-success">Consolidado</a> <!--boton -->
          <!--<a href="consoProducto.php" class="btn btn-outline-primary">Lista de productos</a> boton -->
          <p></p>
          <h5 class="card-title">Factura Nueva</h5>
          <!-- Primer fila de inputs -->
          <div class="row g-4">   
            <div class="col-sm-2">
              <input type="text" disabled class="form-control" id="personal" value="<?php echo 'Vendedor :  ', $_SESSION['user']; ?>" required>
            </div>
            <div class="col-sm-2">
            <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoOrdenFactura): ?>
              <?php while ($rowy = mysqli_fetch_array($resultadoOrdenFactura)): ?>
              <?php $numFactura = intval($rowy[0]) + 1 ;
              ?>         
              <input  type="text" disabled class="form-control" id="numFactura" value="factura  #  <?php echo $numFactura ?>" required>
              <?php endwhile; ?>
              <?php endif ?>
            </div>
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoCliente): ?>
                <select class="form-select" name="idCliente" id="idCliente" autofocus>  <!-- select que captura los option value -->
                  <option value="" selected="Elegir...">Elija un Cliente &nbsp (si no existe, primero crear) &nbsp ... </option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoCliente)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[2]," "?><?php echo $rowy[1]," - "?><?php echo $rowy[3]," : "?><?php echo $rowy[4]," "?></option>
                    <?php //$_SESSION['nomCliente'] = $rowy[2]." ".$rowy[1];  ?>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>   
            <div class="col-sm-1">
            <?php include '../dataBase/adminSis/selects.php';  // para capturar valor de idPERSONAL
                 if ($resultadoPesonalFact): ?>
              <?php while ($rowy = mysqli_fetch_array($resultadoPesonalFact)): ?>           
              <input  type="text" hidden class="form-control" id="idPer" name="idPer" value="<?php echo $rowy[0]; ?>" required>
              <?php endwhile; ?>
              <?php endif ?>
            </div>
          </div>
          <p></p>
          <!-- Segunda fila de inputs --> 
          <div class="row g-3">
            <h5 class="card-title">Productos</h5>
            <div class="col-sm-4">
            <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoProducto): ?>
                <select class="form-select" name="idProducto" id="idProducto" autofocus>  <!-- select que captura los option value -->
                  <option value="" selected="Elegir...">Elija el producto &nbsp ... </option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoProducto)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?><?php echo " : $ ". $rowy[4] ?><?php echo "  -  Cant : ". $rowy[5] ?></option>
                    <?php //$_SESSION['nomProducto'] = $rowy[1]. " : $ ".$rowy[4] ; ?> <!-- contateno nombre y valor en variable session -->
                    <?php //$_SESSION['precProducto'] = $rowy[4] ; ?> <!-- extraigo dato de precio y almaceno valor en variable session -->
                  <?php endwhile; ?>
                </select>
               
                <?php endif ?>
            </div>
            <div class="col-sm-2">
              <input type="number"  class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" required>
            </div>
          </div>

          <p></p>
          <!-- botones formulario -->
          <p></p>
          <button type="submit" id="preFactura" class="btn btn-success"> Ver Prefactura</button>
          <a type="#" id="borrarCampos" class="btn btn-danger">Borrar campos</a>
          </form>
        </div>  <!--card-body-->
      </div>  <!--card-->    

    </div>   <!--col-sm-12-->
  </div> <!--row-->
</div> <!--container MAYOR-->


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