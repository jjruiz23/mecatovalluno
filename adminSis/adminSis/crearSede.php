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
        <form id="frmRegistro">

          <a href="consoTiendas.php" class="btn btn-outline-success">Consolidado Tiendas</a> <!--boton -->
          <a href="crearPais.php" class="btn btn-outline-success" >Crear Pais</a> <!--boton -->
          <a href="crearCiudad.php" class="btn btn-outline-success">Crear Ciudad</a> <!--boton -->
          <p></p>
          <h5 class="card-title">Registrar Nueva Sede</h5>
          <!-- Primer fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
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
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nuevaSede" placeholder="Ingrese Nombre" value="" required>
            </div>
          </div>
          <p></p>
          <!-- segunda fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" class="form-control" id="telefonoSede" placeholder="Ingrese Telefono" value="" required>
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="direcSede" placeholder="Ingrese Direccion" value="" required>
            </div>
          </div>
          <p></p>
          <!-- botones formulario -->
          <p></p>
          <a href="#" id="registrarSede" class="btn btn-success">Añadir Nuevo</a>
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