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
        <h5 class="card-header">Pais / Ciudad</h5> <!--titulo -->
        <div class="card-body">
        <form id="frmRegistro">

          <a href="consoTiendas.php" class="btn btn-outline-success">Consolidado Tiendas</a> <!--boton -->
          <a href="crearPais.php" class="btn btn-outline-success" >Crear Pais</a> <!--boton -->
          <a href="crearSede.php" class="btn btn-outline-success">Crear Sede</a> <!--boton -->
          <p></p>
          <h5 class="card-title">Editar Pais o ciudad</h5>
          <!-- Primer fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">              
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoPais): ?>
                <select class="form-select" name="idPais" id="idPais" autofocus>  <!-- select que captura los option value -->
                  <option value="" selected="Elegir...">Elija Pais &nbsp ... </option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoPais)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>
            <div class="col-sm-4">
            <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoCiudad): ?>
                <select class="form-select" name="idCiudad" id="idCiudad" autofocus>  <!-- select que captura los option value -->
                  <option value="" selected="Elegir...">Elija Ciudad &nbsp ... </option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoCiudad)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>        
            </div>
          </div>
          <p></p>
          <!-- Segunda fila de inputs --> 
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" disabled class="form-control" id="nomPais" placeholder="Nuevo nombre de Pais" value="" required>
            </div>
            <div class="col-sm-4">
              <input type="text" disabled class="form-control" id="nomCiudad" placeholder="Nuevo nombre de Ciudad" value="" required>
            </div>
          </div>
          <!-- botones formulario -->
          <p></p>
          <a href="#" id="actuPais" class="btn btn-success">Actualizar Pais</a>          
          <a type="#" id="borrarCampos" class="btn btn-danger" style="margin-left: 148px">Borrar campos</a>
          <a href="#" id="actuCiudad" class="btn btn-success" style="margin-left: 148px">Actualizar Ciudad</a>
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