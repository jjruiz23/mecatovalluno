<p></p>
<!--espacio entre menu y contenido-->

<!-- CONTENIDO DEL MODULO -->

<!-- card con informacion del modulo -->
<div class="card">
    <h5 class="card-header">Buscar Personal</h5>  <!--titulo -->
    <div class="card-body">
        <p></p>
        <!-- Primer fila de inputs -->
        <div class="row g-3">
            <div class="col-sm-2 col-md-2 col-xs-2">
                <a href="crearPer.php" class="btn btn-outline-success">Crear</a>
                <a href="consoPer.php" class="btn btn-outline-success">Consolidado</a>
                <!--botones -->
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm-4 col-md-4 col-xs-4">
                <form action="../adminSis/buscPerResul.php" method="get" id="respuesta">
                    <!-- recargo pagina con el resultado del query -->
                    <input type="text" style="text-align:center" name="buscador" id="buscador" placeholder="Ingrese ID"> <!-- input captura de datos-->
                    <button type="submit" class="btn btn-success" id="buscar"> Buscar </button> <!-- boton para activar formulario -->
                </form>
            </div>
        </div>
        <p></p> <!-- espacio entre botones superiores y contenedor de resultado -->
    </div> <!--card body-->
</div> <!--card-->

<!-- XXXX -->
<p></p>

<!-- fin body de la pagina -->

<!--cargo scrip de funciones js para llamar funciones y acciones en cada modulo-->
<!-- se carga de forma independiente ya que el pprincipal esta en footer.php -->
<script src="../js/funciones.js"></script>

<!-- solicito las funciones del modulo cargadas en el footer desde js -->
<script>
    $(document).ready(accionesAdminSis);
</script>