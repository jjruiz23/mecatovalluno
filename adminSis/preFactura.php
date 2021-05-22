<?php // inicio lineas php
	session_start(); //creo una seccion para pasarlo mediante GET O POST

	if(isset($_SESSION['user'])){ // si la seecion esta definida desde login.php
 ?>  <!-- cierro lineas php -->

 <?php 
    $cliente=$_POST['cliente'];  // recupero variable $usuario y le asigno los datos recibidos desde index.php
		$sede=$_POST['sede']; // recupero variable $pass y le asigno los datos recibidos desde index.php (sha1 es para encriptar los datos)
		$idProducto=$_POST['idProducto']; // recupero variable $pass y le asigno los datos recibidos desde index.php (sha1 es para encriptar los datos)
    $preProducto=$_POST['preProducto'];  // recupero variable $usuario y le asigno los datos recibidos desde index.php
		$cantidad=$_POST['cantidad']; // recupero variable $pass y le asigno los datos recibidos desde index.php (sha1 es para encriptar los datos)

    var_dump(($sede)??'');  //para pruebas
 ?>

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
        <h5 class="card-header">Factura</h5> <!--titulo -->
        <div class="card-body">
        <form id="frmRegistro">

          <a href="buscFacturaResul.php" class="btn btn-outline-success" >Buscar</a> <!--boton -->
          <a href="consoFactura.php" class="btn btn-outline-success">Consolidado</a> <!--boton -->
          <a href="consoProducto.php" class="btn btn-outline-primary">Lista de productos</a> <!--boton -->
          <p></p>
          <h5 class="card-title">Factura Nueva</h5>
          <!-- Primer fila de inputs -->
          <div class="row g-4">   
            <div class="col-sm-2">
            <input type="text" disabled class="form-control" id="prsonal" value="<?php echo 'Vendedor :  ', $_SESSION['user']; ?>" required>
            </div>
            <div class="col-sm-2">
            <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoOrdenFactura): ?>
              <?php while ($rowy = mysqli_fetch_array($resultadoOrdenFactura)): ?>           
                <input  type="text" disabled class="form-control" id="numFactura" value="factura  #  <?php echo $rowy[0] ?>" required>
              <?php endwhile; ?>
              <?php endif ?>
            </div>
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoCliente): ?>
                <select class="form-select" name="clinte" id="clinte" autofocus>  <!-- select que captura los option value -->
                  <option value="<?php echo $cliente;?>" selected="Elegir..."><?php echo $cliente;?></option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoCliente)): ?>
	                  <<option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[2]," "?><?php echo $rowy[1]," - "?><?php echo $rowy[3]," : "?><?php echo $rowy[4]," "?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>            
            <div class="col-sm-2">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoSede): ?>
                <select class="form-select" name="sde" id="sde" autofocus>  <!-- select que captura los option value -->
                  <option value="<?php echo $sede;?>" selected="Elegir..."><?php echo $sede;?></option>                  
                  <?php while ($rowy = mysqli_fetch_array($resultadoSede)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[1] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?> 
            </div>
            <div class="col-sm-1">
            <?php include '../dataBase/adminSis/selects.php';  // para capturar valor de idPERSONAL
                 if ($resultadoPesonalFact): ?>
              <?php while ($rowy = mysqli_fetch_array($resultadoPesonalFact)): ?>           
              <input  type="text" disabled class="form-control" id="idPer" value="<?php echo $rowy[0] ?>" required>
              <?php endwhile; ?>
              <?php endif ?>
            </div>
          </div>
          <p></p>
          <!-- Segunda fila de inputs --> 
          <div class="row g-3">
            <h5 class="card-title">Productos</h5>
            <div class="col-sm-2">
              <input type="number"  class="form-control" id="producto" placeholder="producto" value="<?php echo $idProducto;?>" required>
            </div>
            <div class="col-sm-2">
              <input type="number" disabled class="form-control" id="preProdcto" placeholder="Precio Producto" value="<?php echo $cantidad; ?>" required>
            </div>
            <div class="col-sm-2">
              <input type="number" disabled class="form-control" id="cantdad" placeholder="cantidad" value="<?php echo $preProducto;?>" required>
            </div>
          </div>

          <p></p>
          <!-- botones formulario -->
          <p></p>
          <button type="text" id="preFactura" class="btn btn-success"> Ver Prefactura</button>
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