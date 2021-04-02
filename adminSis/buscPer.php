<p></p>
<!--espacio entre menu y contenido-->

<!-- CONTENIDO DEL MODULO -->

<!--container botones y formulario de busqueda-->
<div class="container">
    <!-- contendor de columnas/filas -->
    <div class="row-justify">
        <!-- distribuidor de columnas/filas -->
        <div class="col-sm-12 col-xs-12">
            <!-- tamaños de distribucion de columnas/filas -->

            <!-- card con informacion del modulo -->
            <div class="card">
                <h5 class="card-header">Buscar Personal</h5>
                <!--titulo -->
                <div class="card-body">
                    <p></p>
                    <!-- Primer fila de inputs -->
                    <div class="row g-3">
                        <div class="col-sm-2 col-md-2 col-xs-2">
                            <a href="crearPer.php" class="btn btn-outline-success">Crear</a>
                            <a href="consoPer.php" class="btn btn-outline-success">Consolidado</a>
                            <!--boton -->
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

                </div>    <!--card header-->
            </div>    <!--card-->
        </div>  <!--col-sm-12-->
    </div>  <!--row-->
</div><!--container MAYOR-->

        <!-- XXXX -->
        <p></p>

<!-- fin body de la pagina 

<script type="text/javascript">  // creo el script de tipo texto
	$(document).ready(function(){  // cargo la funcion
        $('#buscar').click(function(){  // asigno evento a funcion click del boton Entrar utilizando #
            if ($('#buscador').val() == "") {   // si el input usuario esta vacio
                console.log("cargo la funcion");
				alertify.alert("<b>Debes ingresar el ID</b> Campo en blanco").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
                return false;   //para que el mensaje no se cierre automaticamente
            }
        }); //.click(funtion)
    }); //.ready(function)
</script>

-->
<!--cargo scrip de funciones js para llamar funciones y acciones en cada modulo-->
<script src="../js/funciones.js"></script>

<!-- solicito las funciones del modulo cargadas en el footer desde js -->
<script>
  $(document).ready(accionesAdminSis);
</script>