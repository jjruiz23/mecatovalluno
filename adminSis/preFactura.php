<?php // inicio lineas php
	session_start(); //creo una seccion para pasarlo mediante GET O POST

	if(isset($_SESSION['user'])){ // si la seecion esta definida desde login.php
    $canti=$_POST['cantidad'];  // capturo variable cantidad y la instancio
    //var_dump(($_POST['cantidad'])??'');  //para pruebas
    //echo $canti

?>  <!-- cierro lineas php -->

  <!-- solicito el query con los datos de consulta para mostrar y porteriormente editar -->
  <!-- y mediante php imprimirlos en los inputs y selects -->
<?php include '../dataBase/adminSis/datosFactura.php'; ?>

<?php
  // CONTROL DE FACTURA por cantidad de producto en inventario
  if($p_cantProd < $canti){
    header('Location:crearFactura.php');	// redirigir al index y cargar mensaje para enviar
			$_SESSION['messageFact'] = 'Cantidad de productos insuficientes en bodega !!!'; // guardo mensaje para imprimir en index.php
  }
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
        <form id="frmRegistro" name="frmRegistro" action="../print_invoice.php" method="POST">

    <!--*********************-->
          <?php
            // operaciones - se hacen despues de la linea de herencia de datos factura, para que reconozca las variables en el
            $valorUnitario = $p_precioProducto; // instancio valor session en varible para operar
            $neto = $valorUnitario*$canti;
            $comision = $neto * 0.02;
            $nuevaComision = $co_valComision + $comision;
            $nuevoStop = $p_cantProd - $canti;
            $iva = 0.19;
            $ivaFact = $neto * $iva;
            $total = $neto + $ivaFact;
          ?>        
    <!--*********************-->
          <a href="buscFacturaResul.php" class="btn btn-outline-success" >Buscar</a> <!--boton -->
          <a href="consoFactura.php" class="btn btn-outline-success">Consolidado</a> <!--boton -->
          <!--<a href="consoProducto.php" class="btn btn-outline-primary">Lista de productos</a> boton -->
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
                <?php $numFactura = intval($rowy[0] +1 );?>          
                <input  type="text" disabled class="form-control" id="numFactura" value="factura  #  <?php echo $numFactura ?>" required>
              <?php endwhile; ?>
              <?php endif ?>
            </div>
            <div class="col-sm-4">
              <!-- solicito la conexion y el query para mostrar datos de tabla en select -->
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoCliente): ?>
                <select  class="form-select" name="idCliente" id="idCliente" autofocus>  <!-- select que captura los option value -->
                  <option value="<?php echo $c_idCliente;?>" selected="Elegir..."><?php echo $c_apeCliente." ".$c_nomCliente." - ".$td_nomTipoDoc." : ".$c_numDocCliente;?></option>                  
                  <?php $nomComplCliente = $c_apeCliente." ".$c_nomCliente." - ".$td_nomTipoDoc." : ".$c_numDocCliente; ?>
                  <?php while ($rowy = mysqli_fetch_array($resultadoCliente)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[2]," "?><?php echo $rowy[1]," - "?><?php echo $rowy[3]," : "?><?php echo $rowy[4]," "?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif ?>
            </div>            
            <div class="col-sm-1">
            <?php include '../dataBase/adminSis/selects.php';  // para capturar valor de idPERSONAL
                 if ($resultadoPesonalFact): ?>
              <?php while ($rowy = mysqli_fetch_array($resultadoPesonalFact)): ?>           
              <input  type="text" hidden class="form-control" id="idPer" name="idPer" value="<?php echo $rowy[0] ?>" required>
              <?php endwhile; ?>
              <?php endif ?>
            </div>

            <div class="col-sm-1">
            <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoOrdenFactura): ?>
              <?php while ($rowy = mysqli_fetch_array($resultadoOrdenFactura)): ?>
                <?php $nuevoNumFactura = intval($rowy[0] + 1);?>          
                <input  type="text" hidden class="form-control" id="nuevoNumFactura" name="nuevoNumFactura" value="<?php echo $nuevoNumFactura ?>" required>
              <?php endwhile; ?>
              <?php endif ?>
            </div>

          </div>
          <p></p>
          <!-- Segunda fila de inputs --> 
          <div class="row g-3">
            <h5 class="card-title">Productos</h5>
            <div class="col-sm-3">
            <h6>Producto y valor unitario</h6>
            </div>
            <div class="col-sm-1">
            <h6>Stop Bodega</h6>
            </div>
            <div class="col-sm-1">
            <h6>Cantidad</h6>
            </div>
            <div class="col-sm-2">
            <h6>Sub-Total</h6>
            </div>
            <div class="col-sm-1">
            <h6>Iva : 19%</h6>
            </div>
            <div class="col-sm-2">
            <h6>Total</h6>
            </div>
            <div class="col-sm-1">
            <h6>Comision</h6>
            </div>
          </div>
          <!-- Segunda fila de inputs --> 
          <div class="row g-3">
            <h5 class="card-title"></h5>
            <div class="col-sm-3">
              <?php include '../dataBase/adminSis/selects.php';  
                 if ($resultadoProducto): ?>
                <select class="form-select" name="idProducto" id="idProducto" autofocus>  <!-- select que captura los option value -->
                  <option value="<?php echo $p_idProducto;?>" selected="Elegir..."><?php echo $p_nomProducto." : $ ".$p_precioProducto;?></option>                  
                  <?php $nombreProducto = $p_nomProducto ?>
                  <?php while ($rowy = mysqli_fetch_array($resultadoProducto)): ?>
	                  <option value ="<?php echo $rowy[0] ?>"><?php echo $rowy[2]," "?><?php echo $rowy[1]," - "?><?php echo $rowy[3]," : "?><?php echo $rowy[4]," "?><?php echo "  -  Cant : ". $rowy[5] ?></option>
	                <?php endwhile; ?>
                </select>
              <?php endif //var_dump($rowy[0]?? ''); ?>
              
            </div>
            <div class="col-sm-1">
              <input type="number" class="form-control" id="cantProd" name="cantProd" placeholder="cantProd" value="<?php echo $p_cantProd ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="number" class="form-control" id="canti" name="canti" placeholder="canti" value="<?php echo $canti ;?>" required>
            </div>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="neto" name="neto" placeholder="neto" value="<?php echo $neto ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="number" class="form-control" id="ivaFact" name="ivaFact" placeholder="ivaFact" value="<?php echo $ivaFact ;?>" required>
            </div>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="total" name="total" placeholder="total" value="<?php echo $total ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="number" class="form-control" id="comision" name="comision" placeholder="comision" value="<?php echo $comision ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="number" hidden class="form-control" id="nuevoStop" name="nuevoStop" placeholder="nuevoStop" value="<?php echo $nuevoStop ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="number" hidden class="form-control" id="nuevaComi" name="nuevaComi" placeholder="nuevaComi" value="<?php echo $nuevaComision ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="nomCliente" name="nomCliente" placeholder="NomCliente" value="<?php echo $nomComplCliente ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="nomProducto" name="nomProducto" placeholder="NomProducto" value="<?php echo $nombreProducto ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="precioProducto" name="precioProducto" placeholder="precioProducto" value="<?php echo $p_precioProducto ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="codiProducto" name="codiProducto" placeholder="CodigoProducto" value="<?php echo $p_codiProducto ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="nomPais" name="nomPais" placeholder="nomPais" value="<?php echo $pa_nomPais ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="nomCiudad" name="nomCiudad" placeholder="nomCiudad" value="<?php echo $c_nomCiudad ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="nomSede" name="nomSede" placeholder="nomSede" value="<?php echo $s_nomSede ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="telSede" name="telSede" placeholder="telSede" value="<?php echo $s_telefonoSede ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="direSede" name="direSede" placeholder="direSede" value="<?php echo $s_direSede ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="celCliente" name="celCliente" placeholder="celCliente" value="<?php echo $c_celCliente ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="telCliente" name="telCliente" placeholder="telCliente" value="<?php echo $c_telCliente ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="direCliente" name="direCliente" placeholder="direCliente" value="<?php echo $c_direCliente ;?>" required>
            </div>
            <div class="col-sm-1">
              <input type="text" hidden class="form-control" id="emailCliente" name="emailCliente" placeholder="emailCliente" value="<?php echo $c_emailCliente ;?>" required>
            </div>
          </div>

          <p></p>
          <!-- botones formulario -->
          <p></p>
          <a href="#" id="FacturarCompra" class="btn btn-success">Facturar</a>
          <button type="submit" id="preFactura" class="btn btn-primary">Imprimir Prefactura</button>
          <a type="text" href="crearFactura.php" class="btn btn-outline-primary">Nueva factura</a>
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