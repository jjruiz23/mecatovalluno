
<div class="container"> <!-- contendor de columnas/filas -->
    <div class="row-justify"> <!-- distribuidor de columnas/filas -->
      <div class="col-sm-12 col-xs-12"> <!-- tamaños de distribucion de columnas/filas -->

      <div class="card text-center">

        <!--  Barra de botones de navegacion -->
        <nav class="navbar navbar-dark bg-dark">
          <form id="frmMenu" class="container-fluid justify-content-center">
            <li class="nav-item dropdown">
              <a class="btn btn-outline-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Personal
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="crearPer.php">Crear</a></li>
                <li><a class="dropdown-item" href="" id="btnBuscarPer">Buscar</a></li>
                <li><a class="dropdown-item" href="consoPer.php">Consolidado</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="btn btn-outline-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cliente
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="crearCliente.php">Crear</a></li>
                <li><a class="dropdown-item" href="" id="btnBuscarCliente">Buscar</a></li>
                <li><a class="dropdown-item" href="consoClientes.php">Consolidado</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="btn btn-outline-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Roles
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="crearRol.php">Crear</a></li>
                <li><a class="dropdown-item" href="asignarRol.php">Asigar Rol</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="btn btn-outline-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Gestion Tiendas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="crearPais.php">Crear Pais</a></li>
                <li><a class="dropdown-item" href="crearCiudad.php">Crear Ciudad</a></li>
                <li><a class="dropdown-item" href="crearSede.php">Crear Sede</a></li>
                <li><a class="dropdown-item" href="consoTiendas.php">Consolidado</a></li>
              </ul>
            </li>
          </form>
        </nav>

      </div> <!-- fin de card y menu -->

    </div>   <!--col-sm-12-->
  </div> <!--row-->
</div> <!--container MAYOR-->