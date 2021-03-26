<!-- solicito el header -->
<?php include("../includes/header.php") ?>

<!-- body de la pagina -->

<p></p> <!--  espacio entre contenidos -->

<!-- menu -->

<div class="container"> <!-- contendor de columnas/filas -->
    <div class="row-justify"> <!-- distribuidor de columnas/filas -->
      <div class="col-sm-12 col-xs-12"> <!-- tamaños de distribucion de columnas/filas -->

      <div class="card text-center">

        <!--  Barra de botones de navegacion -->
        <nav class="navbar navbar-dark bg-dark">
          <form class="container-fluid justify-content-center">
            <li class="nav-item dropdown">
              <a class="btn btn-outline-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Personal
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="crearPer.php">Crear</a></li>
                <li><a class="dropdown-item" href="#">Buscar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="btn btn-outline-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cliente
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Crear</a></li>
                <li><a class="dropdown-item" href="#">Buscar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="btn btn-outline-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Roles
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Crear</a></li>
                <li><a class="dropdown-item" href="#">Asigar Rol</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="btn btn-outline-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Gestion Tiendas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Crear Pais</a></li>
                <li><a class="dropdown-item" href="#">Crear Ciudad</a></li>
                <li><a class="dropdown-item" href="#">Crear Sede</a></li>
              </ul>
            </li>
        </nav>
        <!-- card con informacion del modulo -->
        <div class="card-body card-text-left">
          <h5 class="card-title">Menu Principal</h5>
          <p class="card-text">Te permite navegar por los diferentes modulos del sistema para administrar la informacion</p>
          <!--     <a href="#" class="btn btn-primary">Go somewhere</a>   -->
        </div>
      </div> <!-- fin de card y menu -->

    </div>   <!--col-sm-12-->
  </div> <!--row-->
</div> <!--container MAYOR-->


<!-- fin body de la pagina -->

<!-- solicito el footer -->
<?php include("../includes/footer.php") ?>