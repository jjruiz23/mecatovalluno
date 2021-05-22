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

<!-- CONTENIDO DEL MODULO -->

<!--container formulario-->
<div class="container" id="cnt-info"> <!-- contendor de columnas/filas -->
    <div class="row-justify"> <!-- distribuidor de columnas/filas -->
      <div class="col-sm-12 col-xs-12"> <!-- tamaños de distribucion de columnas/filas -->

      <!-- card con informacion del modulo -->
      <div class="card">
        <h5 class="card-header">Productos</h5> <!--titulo -->
        <div class="card-body">
        <a href="buscProductoResul.php" class="btn btn-outline-success" >Buscar</a> <!--boton -->
        <a href="consoProducto.php" class="btn btn-outline-success">Consolidado</a> <!--boton -->
        <p></p>
        <h5 class="card-title">Editar Producto</h5>

        <form id="frmRegistro">
          <!-- solicito el query con los datos de consulta para mostrar y porteriormente editar -->
          <!-- y mediante php imprimirlos en los inputs y selects -->
          <?php include '../dataBase/adminSis/editarProducto.php'; ?>          

          
          <!-- Primer fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoCategoria): ?>
                <select class="form-select" name="categoria" id="categoria" autofocus>  <!-- select que captura los option value -->
                  <!-- SELECT se muestra el dato de la variable y se asigna el valor del dato -->
                  <option value="<?php echo $p_idCategoria;?>" selected="Elegir..."><?php echo $c_nomCategoria;?></option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoCategoria)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>
            <div class="col-sm-4">
              <!-- INPUT se muestra el valor de la variable -->
              <input type="text" value="<?php echo $p_codiProducto;?>" class="form-control" id="codiProducto" placeholder="codiProducto" value="" required>
            </div>
            <div class="col-sm-1">
              <!-- INPUT oculto para enviar el valor de la variable -->
              <input type="hidden" disabled value="<?php echo $p_idProducto;?>" class="form-control" id="idProducto" required>
            </div>
          </div>
          <p></p>
          <!-- Segunda fila de inputs -->          
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" value="<?php echo $p_nomProducto;?>" class="form-control" id="nomProducto" placeholder="nomProducto" value="" required>
            </div>
            <div class="col-sm-4">
              <input type="text" value="<?php echo $p_precioProducto;?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="preProducto" placeholder="Precio Producto" required>
            </div>
          </div>
          <p></p>
          <!-- botones formulario -->
          <a type="#" id="actualizarProducto" name="actualizarProducto" class="btn btn-success">Actualizar Datos</a type="#">
          <a type="#" id="restaurarCampos" class="btn btn-primary">Restaurar Datos</a>
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