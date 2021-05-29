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
        <h5 class="card-header">Sede</h5> <!--titulo -->
        <div class="card-body">
        <?php // inicio lineas php
                    if($idPrmiso =="1"){ // si el permiso es igual a x muestre boton
                    ?>  <!-- cierro lineas php -->
                    <a href="crearPais.php" class="btn btn-outline-success" >Crear Pais</a> <!--boton -->
                    <a href="crearCiudad.php" class="btn btn-outline-success">Crear Ciudad</a> <!--boton -->
                    <a href="crearSede.php" class="btn btn-outline-success">Crear Sede</a> <!--boton -->
                    <?php } ?> <!-- control de boton con permiso -->
        <p></p>
        <h5 class="card-title">Editar Sede</h5>

        <form id="frmRegistro">
          <!-- solicito el query con los datos de consulta para mostrar y porteriormente editar -->
          <!-- y mediante php imprimirlos en los inputs y selects -->
          <?php include '../dataBase/adminSis/editarSede.php'; ?>          
          
          <!-- Primer fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoPais): ?>
                <select disabled class="form-select" name="idPais" id="idPais" autofocus>  <!-- select que captura los option value -->
                  <!-- SELECT se muestra el dato de la variable y se asigna el valor del dato -->
                  <option value="<?php echo $p_idPais;?>" selected="Elegir..."><?php echo $p_nomPais;?></option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoPais)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>            
            <div class="col-sm-1">
              <!-- INPUT oculto para enviar el valor de la variable -->
              <input type="hidden" disabled value="<?php echo $s_idSede;?>" class="form-control" id="idSede" required>
            </div>
          </div>
          <p></p>
          <!-- Segunda fila de inputs -->          
          <div class="row g-3">   
            <div class="col-sm-4">
            <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoCiudad): ?>
                <select class="form-select" name="idCiudad" id="idCiudad" autofocus>  <!-- select que captura los option value -->
                  <!-- SELECT se muestra el dato de la variable y se asigna el valor del dato -->
                  <option value="<?php echo $p_idCiudad;?>" selected="Elegir..."><?php echo $p_nomCiudad;?></option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoCiudad)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?> 
            </div>
            <div class="col-sm-4">
              <input type="text" value="<?php echo $p_nomSede; ?>" class="form-control" id="nuevaSede" placeholder="Nueva Sede" required>
            </div>
          </div>
          <p></p>
          <!-- tercera fila de inputs -->          
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" value="<?php echo $p_telefonoSede;?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="telefonoSede" placeholder="Telefono Sede" required>
            </div>
            <div class="col-sm-4">
              <input type="text" value="<?php echo $p_direSede;?>" class="form-control" id="direcSede" placeholder="Direccion Sede" value="" required>
            </div>
          </div>

          <p></p>
          <!-- botones formulario -->
          <a type="#" id="actualizarSede" name="actualizarProducto" class="btn btn-success">Actualizar Datos</a type="#">
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