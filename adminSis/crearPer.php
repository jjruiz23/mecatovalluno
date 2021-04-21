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
        <h5 class="card-header">Personal</h5> <!--titulo -->
        <div class="card-body">
        <form id="frmRegistro">

          <a href="buscPerResul.php" class="btn btn-outline-success" >Buscar</a> <!--boton -->
          <a href="consoPer.php" class="btn btn-outline-success">Consolidado</a> <!--boton -->
          <p></p>
          <h5 class="card-title">Registrar Nuevo</h5>
          <!-- Primer fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoTipoDoc): ?>
                <select class="form-select" name="tipodoc" id="tipodoc" autofocus>  <!-- select que captura los option value -->
                  <option value="" selected="Elegir...">Elija el Tipo de Documento &nbsp ... </option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoTipoDoc)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>
            <div class="col-sm-4">
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="numdocumento" placeholder="Numero Documento" value="" required>
            </div>
          </div>
          <p></p>
          <!-- Segunda fila de inputs -->          
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nombres" placeholder="Nombres" value="" required>
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" value="" required>
            </div>
          </div>
          <p></p>
          <!-- Tercera fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="celular" placeholder="Numero Celular" value="" required>
            </div>
            <div class="col-sm-4">
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="telefono" placeholder="Numero telefono" value="" required>
            </div>
          </div>
          <p></p>
          <!-- Cuarta fila de inputs -->
          <div class="row g-3">
            <div class="col-sm-4">
              <input type="text" class="form-control" id="direccion" placeholder="Direccion" value="" required>
            </div> 
            <div class="col-sm-4">
              <input type="email" name="email" class="form-control" id="email" placeholder="Correo Electronico   ejemplo@hotmail.com" value="" required>
            </div>                                     
          </div>
          <p></p>          
          <!-- Quinta fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <div class="row g-2">
                <div class="col-sm-4">
                  fecha Nacimiento
                </div>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="fechanac" step="1" min="1960-01-01" max="2002-12-31">
                </div>
              </div>     
            </div>
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoEstCivil): ?>
                <select class="form-select" name="estcivil" id="estcivil" autofocus>  <!-- select que captura los option value -->
                  <option value="" selected="Elegir...">Elija el Estado Civil &nbsp ... </option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoEstCivil)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>              
            </div>
          </div>
          <p></p>
          <!-- Sexta fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoSede): ?>
                <select class="form-select" name="sede" id="sede" autofocus>  <!-- select que captura los option value -->
                  <option value="" selected="Elegir...">Elija la Sede &nbsp ... </option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoSede)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?> 
            </div>
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoSalarios): ?>
                <select class="form-select" name="salarios" id="salarios" autofocus>  <!-- select que captura los option value -->
                  <option value="" selected="Elegir...">Elija el Salario &nbsp ... </option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoSalarios)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?> 
            </div>
          </div>
          <p></p>
          <!-- botones formulario -->
          <p></p>
          <a href="#" id="registrarNuevo" class="btn btn-success">Añadir Nuevo</a>
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