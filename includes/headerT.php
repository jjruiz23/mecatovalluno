<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

      <!-- Optional JavaScript; choose one of the two! -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- Optional JavaScript y css alertify -->

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.css">
      <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>



      <!-- jQuery first, then Popper.js, then Bootstrap JS este orden para el funcionamiento de los alert -->
      <!--
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
-->
      <!-- Option 1: Bootstrap Bundle with Popper 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
-->
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      -->
      <!--cargo scrip de funciones js para llamar funciones y acciones en cada modulo-->
      <script src="../js/funciones.js"></script>

  <!-- Titulo & icono de pestaña -->
  <title>Mecato Valluno</title>
  <link href="../includes/images/logotipo.png" rel="shortcut icon" />
</head>

<body>

  <p></p> <!-- Espacio inicial -->
  <?php
  $user = "julian";
  $rol = "administrador";
  ?>

  <!-- Header -->
  <div class="container"> <!-- contendor de columnas/filas -->
    <div class="row-justify"> <!-- distribuidor de columnas/filas -->
      <div class="col-sm-12 col-xs-12"> <!-- tamaños de distribucion de columnas/filas -->

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
            <span class="text-dark">  <!-- Boton de usuario y salir -->
            <li class="nav-item dropdown">
              <a class="btn btn-outline-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                <?php echo $user." / ". $rol ?> ▼
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Salir</a></li>
              </ul>
            </li>
            </span>
          </div>

      </div>
      </nav>

    </div>
    <!--col-sm-12-->
  </div>
  <!--row-->
  </div>
  <!--container MAYOR-->

  <p></p> <!-- Espacio inicial -->

  <!-- Fin Header -->