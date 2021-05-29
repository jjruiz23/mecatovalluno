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
        <h5 class="card-header">Materia Prima</h5> <!--titulo -->
        <div class="card-body">
        <form id="frmRegistro">

          <a href="buscProductoResul.php" class="btn btn-outline-success" >Buscar</a> <!--boton -->
          <a href="consoInvProd.php" class="btn btn-outline-success">Consolidado</a> <!--boton -->
          <p></p>
          <h5 class="card-title">Registrar Nuevo</h5>
          <!-- Primer fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoCategoria): ?>
                <select class="form-select" name="categoria" id="categoria" autofocus>  <!-- select que captura los option value -->
                  <option value="" selected="Elegir...">Elija la categoria &nbsp ... </option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoCategoria)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="codiProducto" placeholder="codigo Mat. Prima" value="" required>
            </div>
          </div>
          <p></p>
          <!-- Segunda fila de inputs --> 
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nomProducto" placeholder="Nombre Mat. Prima" value="" required>
            </div>
            <div class="col-sm-2">
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="preProducto" placeholder="Precio Mat. Prima" value="" required>
            </div><div class="col-sm-2">
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="cantProducto" placeholder="Unidades Mat. Prima" value="" required>
            </div>
          </div>

          <p></p>
          <!-- botones formulario -->
          <p></p>
          <a href="#" id="registrarNuevoProducto" class="btn btn-success">Añadir Nuevo</a>
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