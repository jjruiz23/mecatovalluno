<!-- solicito el header -->
<?php include("../includes/header.php") ?>

<!-- body de la pagina -->

<p></p> <!--  espacio entre contenidos -->

<!-- solicito el menu -->
<?php include("barraMenu.php") ?>

<p></p> <!--espacio entre menu y contenido-->

<!-- CONTENIDO DEL MODULO -->

<!--container formulario-->
<div class="container"> <!-- contendor de columnas/filas -->
    <div class="row-justify"> <!-- distribuidor de columnas/filas -->
      <div class="col-sm-12 col-xs-12"> <!-- tamaños de distribucion de columnas/filas -->
        
      <!-- card con informacion del modulo -->
      <div class="card">
        <h5 class="card-header">Personal</h5> <!--titulo -->
        <div class="card-body">
          <a href="buscPer.php" class="btn btn-outline-success">Buscar</a> <!--boton -->
          <a href="consoPer.php" class="btn btn-outline-success">Consolidado</a> <!--boton -->
          <p></p>
          <h5 class="card-title">Registrar Nuevo</h5>
          <!-- Primer fila de inputs -->
          <form class="form-inline" action="/action_page.php">
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Nombres" aria-label="State">
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Correo Electronico" aria-label="Zip">
            </div>
              <div class="col-sm">
            </div>
          </div>
          <p></p>
          <!-- Segunda fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Apellidos" aria-label="State">
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
              <input type="text" class="form-control" placeholder="Numero Celular" aria-label="State">
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
              <input type="text" class="form-control" placeholder="Numero telefono" aria-label="State">
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
              <input type="text" class="form-control" placeholder="Direccion" aria-label="State">
            </div>
            <div class="col-sm">
            </div>
              <div class="col-sm">
            </div>
          </div>      
          
          <!-- botones formulario -->
          <p></p>
          <a href="#" class="btn btn-success">Añadir Nuevo</a>
          <a href="#" class="btn btn-danger">Borrar campos</a>
        </div>
      </div>

      </form>

    </div>   <!--col-sm-12-->
  </div> <!--row-->
</div> <!--container MAYOR-->


<!-- fin body de la pagina -->

<!-- solicito el footer -->
<?php include("../includes/footer.php") ?>