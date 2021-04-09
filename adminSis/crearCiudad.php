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
        <h5 class="card-header">Ciudad</h5> <!--titulo -->
        <div class="card-body">
        <form id="frmRegistro">

          <a href="crearPais.php" class="btn btn-outline-success" >Crear Pais</a> <!--boton -->
          <a href="crearSede.php" class="btn btn-outline-success">Crear Sede</a> <!--boton -->
          <p></p>
          <h5 class="card-title">Registrar Nueva Ciudad</h5>
          <!-- Primer fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <select class="form-select" name="tipodoc" id="tipodoc" autofocus>  <!-- select que captura los option value -->
                <option value="" selected="Elegir...">Elija Pais &nbsp ... </option>
                <option value="CEDULA C">Cedula C</option>
                <option value="CEDULA">Cedula Extranjeria</option>
                <option value="PASAPORTE">Pasaporte</option>
              </select>
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="numdocumento" placeholder="Ingrese nueva Ciudad" value="" required>
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