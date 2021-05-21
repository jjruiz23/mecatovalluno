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
        <h5 class="card-header">Clientes</h5> <!--titulo -->
        <div class="card-body">
        <a href="buscClienteResul.php" class="btn btn-outline-success" >Buscar</a> <!--boton -->
        <a href="consoClientes.php" class="btn btn-outline-success">Consolidado</a> <!--boton -->
        <p></p>
        <h5 class="card-title">Editar Cliente</h5>

        <!-- <form id="frmRegistro" action="../adminSis/editPer.php?id=<?php echo $_GET['id']; ?>" method="POST"> -->
        <form id="frmRegistro">
          <!-- solicito el query con los datos de consulta para mostrar y porteriormente editar -->
          <!-- y mediante php imprimirlos en los inputs y selects -->
          <?php include '../dataBase/adminSis/editarCliente.php'; ?>          

          
          <!-- Primer fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoTipoDoc): ?>
                <select class="form-select" name="tipodoc" id="tipodoc" autofocus>  <!-- select que captura los option value -->
                  <!-- SELECT se muestra el dato de la variable y se asigna el valor del dato -->
                  <option value="<?php echo $td_idTipoDoc;?>" selected="Elegir..."><?php echo $td_nomTipoDoc;?></option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoTipoDoc)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>
            <div class="col-sm-4">
              <!-- INPUT se muestra el valor de la variable -->
              <input type="text" value="<?php echo $c_numDocumento;?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="numdocumento" placeholder="Numero Documento"  required>
            </div>
            <div class="col-sm-1">
              <!-- INPUT se muestra el valor de la variable -->
              <input type="hidden" disabled value="<?php echo $c_idCliente;?>" class="form-control" id="idPer" required>
            </div>
          </div>
          <p></p>
          <!-- Segunda fila de inputs -->          
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" value="<?php echo $c_nombres;?>" class="form-control" id="nombres" placeholder="Nombres" value="" required>
            </div>
            <div class="col-sm-4">
              <input type="text" value="<?php echo $c_apellidos;?>" class="form-control" id="apellidos" placeholder="Apellidos" value="" required>
            </div>
          </div>
          <p></p>
          <!-- Tercera fila de inputs -->
          <div class="row g-3">   
            <div class="col-sm-4">
              <input type="text" value="<?php echo $c_celular;?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="celular" placeholder="Numero Celular" required>
            </div>
            <div class="col-sm-4">
              <input type="text" value="<?php echo $c_telefono;?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="telefono" placeholder="Numero telefono" required>
            </div>
          </div>
          <p></p>
          <!-- Cuarta fila de inputs -->
          <div class="row g-3">
            <div class="col-sm-4">
              <input type="text" value="<?php echo $c_direccion;?>" class="form-control" id="direccion" placeholder="Direccion" required>
            </div> 
            <div class="col-sm-4">
              <input type="email" value="<?php echo $c_email;?>" name="email" class="form-control" id="email" placeholder="Correo Electronico   ejemplo@hotmail.com" required>
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
                <input type="date" value="<?php echo $c_fechaNac;?>" class="form-control" id="fechanac" step="1" min="1960-01-01" max="2002-12-31">
                </div>
              </div>     
            </div>
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoEstCivil): ?>
                <select class="form-select" name="estcivil" id="estcivil" autofocus>  <!-- select que captura los option value -->
                  <option value="<?php echo $ec_idEstCivil;?>" selected="Elegir..."><?php echo $ec_nomEstCivil;?></option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoEstCivil)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>              
            </div>
          </div>
          <p></p>
          <!-- botones formulario -->
          <a type="#" id="actualizarCliente" name="actualizarPersonal" class="btn btn-success">Actualizar Datos</a type="#">
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