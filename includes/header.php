                   
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- Titulo & icono de pestaña -->
  <title>Mecato Valluno</title>
  <link href="../includes/images/logotipo.png" rel="shortcut icon" />
</head>

<body>

  <p></p> <!-- Espacio inicial -->

  <!-- Header -->
  <div class="container">    <!-- contendor de columnas/filas -->
    <div class="row-justify">   <!-- distribuidor de columnas/filas -->
      <div class="col-sm-12 col-xs-12">   <!-- tamaños de distribucion de columnas/filas -->

        <nav class="navbar navbar-dark bg-dark">
          <div class="container-fluid">
            <!-- imagen del header -->
            <img src="../includes/images/logHeader.png" alt="" width="240" height="70">
            <!-- # titulo con link
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active fw-italic" href="www.google.com.co">MECATO VALLUNO</a>
                </li>
              </ul> -->
            <span class="text-dark">
              <!-- Boton de usuario y salir -->
              <li class="nav-item dropdown">
                <a class="btn btn-outline-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['user'] . " / " . $_SESSION['nomPrmiso'] ?> ▼
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <!-- boton para borrar datos de variables de $_SESSION_star y controlar acceso a modulos -->
                  <li><a class="dropdown-item" href="../dataBase/salir.php">Salir</a></li>
                </ul>
              </li>
            </span>
          </div>
        </nav>

      </div> <!--col-sm-12-->
    </div> <!--row-->
  </div> <!--container MAYOR-->

  <p></p> <!-- Espacio inicial -->

  <!-- Fin Header -->
