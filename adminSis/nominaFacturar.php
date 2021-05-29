<?php // inicio lineas php
	session_start(); //creo una seccion para pasarlo mediante GET O POST

	if(isset($_SESSION['user'])){ // si la seecion esta definida desde login.php
 ?>  <!-- cierro lineas php -->

  <!-- solicito el query con los datos de consulta para mostrar y porteriormente editar -->
  <!-- y mediante php imprimirlos en los inputs y selects -->
  <?php include '../dataBase/adminSis/datosFacturaNomina.php'; ?>

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
        <h5 class="card-header">Nomina</h5> <!--titulo -->
        <div class="card-body">
        <form id="frmRegistro">

        <!--*********************-->
          <?php
            // operaciones - se hacen despues de la linea de herencia de datos factura, para que reconozca las variables en el
            $totalPago = $s_valorSalario + $cv_valComision; // instancio valor session en varible para operar 
            //var_dump(($p_idper)??'');  //para pruebas          
          ?>        
        <!--*********************-->

          <a href="nominaPagar.php" class="btn btn-outline-success">Nuevo consulta de pago</a> <!--boton -->
          <p></p>
          <h5 class="card-title">Empleado</h5>
          <!-- Primer fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoPesonal): ?>
                <select class="form-select" name="idPer" id="idPer" autofocus>  <!-- select que captura los option value -->
                  <option value="<?php echo $p_idper; ?>" selected="Elegir..."><?php echo $p_apellidos." ".$p_nombres." - ".$td_nomTipoDoc." : ".$p_numDocumento ;?></option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoPesonal)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[2]," "?><?php echo $rowy[1]," - "?><?php echo $rowy[3]," : "?><?php echo $rowy[4]," "?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>
            <?php // inicio lineas php
                  if($idPrmiso =="1" || $idPrmiso =="2"){ // si el permiso es igual a x muestre boton
            ?>  <!-- cierro lineas php --> 
            <div class="col-sm-2">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoMes): ?>
                <select class="form-select" name="idMes" id="idMes" autofocus>  <!-- select que captura los option value -->
                  <option value="" selected="Elegir...">Seleccione Mes &nbsp ... </option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoMes)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1]?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>
            <?php } ?> <!-- control de boton con permiso -->
          </div>
          <p></p>
          <!-- Segunda linea de inputs -->
          <div class="row g-3">   
            <div class="col-sm-2">
            <h6>Salario Base : </h6>
            </div>
            <div class="col-sm-2">
            <h6>Comisiones Mes : </h6>
            </div>
            <div class="col-sm-2">
            <h6>Total a Pagar : </h6>
            </div>
          </div>
          <!-- Segunda linea de inputs -->
          <div class="row g-3">   
            <div class="col-sm-2">
              <input type="number" class="form-control" id="valorSalario" placeholder="Salario" value="<?php echo $s_valorSalario ;?>" required>
            </div>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="comision" placeholder="Comisiones" value="<?php echo $cv_valComision ;?>" required>
            </div>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="totalPago" placeholder="TotalPago" value="<?php echo $totalPago ;?>" required>
            </div>
          </div>         
          <!-- botones formulario -->          
          <?php // inicio lineas php
                  if($idPrmiso =="1" || $idPrmiso =="2"){ // si el permiso es igual a x muestre boton
          ?>  <!-- cierro lineas php -->          
          <p></p>
          <a href="#" id="facturarNomina" class="btn btn-success">Facturar Nomina</a>
          <a type="#" id="borrarCampos" class="btn btn-danger">Borrar campos</a>
          <?php } ?> <!-- control de boton con permiso -->


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