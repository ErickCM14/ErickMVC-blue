<!DOCTYPE HTML5>
<html>
<head>
    <meta charset="utf-8">

    <!-- <link rel="stylesheet" href= "<?php /*echo constant('URL'); */?>public/css/estilos.css" type="text/css"> -->

    <link rel="stylesheet" href="fonts.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <script defer src="scripts/main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"> -->



</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-4 ">
    <div class="container-fluid pe-5 me-5 ms-5">
        <a class="navbar-brand" href="main">AutismoCM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo constant('URL'); ?>main" ><span class="me-2"> <i class="bi bi-house-fill"></i> </span>Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo constant('URL'); ?>conoce_mas" ><span class="me-2" ><i class="bi bi-eye-fill"></i></span>Conoce más</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo constant('URL'); ?>juegos" ><span class="me-2" ><i class="bi bi-joystick"></i></span>Juegos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo constant('URL'); ?>apoyos" ><span class="me-2" ><i class="bi bi-credit-card-fill"></i></span>Apoyos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo constant('URL'); ?>acerca_de" ><span class="me-2" ><i class="bi bi-info-circle-fill"></i></span>Acerca</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href=" <?php $r = isset($_SESSION['usu']) ? 'consulta' : 'main'; echo constant('URL'); echo $r;?> ">
                        <?php $r = isset($_SESSION['usu']) ? $_SESSION['usu'] : 'Invitado'; echo $r;?> 
            </a></li>
            <li><a class="dropdown-item" href=" <?php $r = isset($_SESSION['usu']) ? 'cerrar' : 'login'; echo constant('URL'); echo $r;?> ">
                        <?php $r = isset($_SESSION['usu']) ? 'Cerrar Sesión' : 'Iniciar Sesión'; echo $r;?>
            </a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div id="header">

        <div class="logo">
            <a href="main">AutismoCM</a>
        </div>

        <div class = "menu_bar">
            <a href="#" class="bt-menu">
                <i class="bi bi-list"></i>
            </a>
        </div>

        <nav class="nav">
            <ul class= "nav-menu nav-menu-toggle">
                <li><a href="<?php echo constant('URL'); ?>main" ><span class="<?php echo constant('URL'); ?>"> <i class="bi bi-house-fill"></i> </span>Inicio</a></li>
                <li class="submenu">
                    <a href="<?php echo constant('URL'); ?>conoce_mas" ><span class="<?php echo constant('URL'); ?>"><i class="bi bi-eye-fill"></i></span>Conoce más
<!--                <span class="caret icon-keyboard_arrow_down"></span>   -->
                   </a>
<!--                 <ul class="children">
                        <li><a href="#">Sub Eleneto <span class=""></span></a></li>
                        <li><a href="#">Sub Eleneto #2 <span class=""></span></a></li>
                        <li><a href="#">Sub Eleneto #3 <span class=""></span></a></li>
                    </ul>   -->
                </li>
                <li><a href="<?php echo constant('URL'); ?>juegos" ><span class="<?php echo constant('URL'); ?>"><i class="bi bi-joystick"></i></span>Juegos</a></li>
                <li><a href="<?php echo constant('URL'); ?>apoyos" ><span class="<?php echo constant('URL'); ?>"><i class="bi bi-credit-card-fill"></i></span>Apoyos</a></li>
                <li><a href="<?php echo constant('URL'); ?>acerca_de" ><span class="<?php echo constant('URL'); ?>"><i class="bi bi-info-circle-fill"></i></span>Acerca de</a></li>

                <li class= "subusu"> <a href="#"> <span class="<?php echo constant('URL'); ?>"><i class="bi bi-person-circle"></i></span> </a>

                    <ul class="children">

                        <li><a href=" <?php $r = isset($_SESSION['usu']) ? 'consulta' : 'main';
echo constant('URL');
echo $r;?> ">
                        <?php $r = isset($_SESSION['usu']) ? $_SESSION['usu'] : 'Invitado';
echo $r;?> </a></li>


                        <li><a href=" <?php $r = isset($_SESSION['usu']) ? 'cerrar' : 'login';
echo constant('URL');
echo $r;?> ">
                        <?php $r = isset($_SESSION['usu']) ? 'Cerrar Sesión' : 'Iniciar Sesión';
echo $r;?> </a></li>
                    </ul>

                </li>

            </ul>

        </nav>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>