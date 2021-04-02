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
              <input type="text" class="form-control" id="nombres" placeholder="Nombres" value="" required>
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="email" placeholder="Correo Electronico" value="" required>
            </div>
              <div class="col-sm">
            </div>
          </div>
          <p></p>
          <!-- Segunda fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" value="" required>
            </div>
            <div class="col-sm-4">
              <div class="row g-2">
                <div class="col-sm-4">
                  fecha Nacimiento
                </div>
                <div class="col-sm-8">
                <input type="date" class="form-control" step="1" min="1960-01-01" max="2021-12-31">
                </div>
              </div>
               

            </div>
              <div class="col-sm">
            </div>
          </div>
          <p></p>
          <!-- Tercera fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <select class="form-select" name="tipodoc" id="tipodoc">  <!-- select que captura los option value -->
                <option value="" selected="Elegir...">Tipo Documento &nbsp ... </option>
                <option value="CEDULA C">Cedula C</option>
                <option value="CEDULA">Cedula Extranjeria</option>
                <option value="PASAPORTE">Pasaporte</option>
              </select>
            </div>
            <div class="col-sm-4">
            <select class="form-select" name="tipodoc" id="tipodoc">  <!-- select que captura los option value -->
                <option value="" selected="Elegir...">Estado Civil ... </option>
                <option value="SOLTERO">Soltero</option>
                <option value="CASADO">Casado</option>
                <option value="VIUDO">Viudo</option>
              </select>
            </div>
              <div class="col-sm">
            </div>
          </div>
          <p></p>
          <!-- Cuarta fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" class="form-control" id="celular" placeholder="Numero Celular" value="" required>
            </div>
            <div class="col-sm-4">
            <select class="form-select" name="tipodoc" id="tipodoc">  <!-- select que captura los option value -->
                <option value="" selected="Elegir...">Sede ... </option>
                <option value="CALI">Cali</option>
                <option value="MEDELLIN">Medellin</option>
                <option value="BOGOTA">Bogota</option>
              </select>
            </div>
              <div class="col-sm">
            </div>
          </div>
          <p></p>
          <!-- Quinta fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" class="form-control" id="telefono" placeholder="Numero telefono" value="" required>
            </div>
            <div class="col-sm-4">
            <select class="form-select" name="tipodoc" id="tipodoc">  <!-- select que captura los option value -->
                <option value="" selected="Elegir...">Salarios ... </option>
                <option value=1000000>1.000.000</option>
                <option value=1500000>1.500.000</option>
                <option value=2000000>2.200.000</option>
              </select>
            </div>
              <div class="col-sm">
            </div>
          </div>
          <p></p>
          <!-- Sexta fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" class="form-control" id="direccion" placeholder="Direccion" value="" required>
            </div>
            <div class="col-sm">
            </div>
              <div class="col-sm">
            </div>
          </div>      
          
          <!-- botones formulario -->
          <p></p>
          <a href="#" class="btn btn-success">Añadir Nuevo</a>
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
  /*$(document).ready(function(){
    console.log("carfo funcion");
    $("#borrarCampos").click(function(){
      console.log("carfo click");
      alertify.alert("<b>Datos borrados</b> Ingresar informacion de nuevo").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
      $("#frmRegistro")[0].reset();
    })
  });*/
</script>

