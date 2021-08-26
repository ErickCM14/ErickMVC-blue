<!DOCTYPE html5>
<html lang="es">
<head>

    <title>Iniciar Sesión</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/estilos_login.css" type="text/css"/>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>

<body>

    <?php require 'views/header.php'; ?>

    <!--<div class="cabecera" style="baclground:red">-->

<div id="main">
   
   <h1 class="center">Inicie Sesión</h1>
       
    <div class="contenedor">    
       
        <div class="contenidoLogin">

            <h1>Iniciar Sesión</h1>
            
            
            <form action="<?php echo constant('URL'); ?>login/iniciar" method="post">

                <label for="userName">Usuario</label>
                <input type="text" name="userName" placeholder="Usuario" autocomplete="off" required/>

                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" placeholder="Contraseña" required>

                <div class="submit-links">
                    <input type="submit" value="Ingresar">

                    <a href="<?php echo constant('URL'); ?>consulta">¿Ha olvidado su contraseña?</a>

                    <a href="<?php echo constant('URL'); ?>registro">¿No tiene cuenta? Registrese</a>
                </div>

          <h4 class="center" style="display:flex; justify-conten:center; color:white;"><?php echo $this->mensaje; ?></h4>
           
            </form>
        </div>
    </div>
</div>


    <?php require 'views/footer.php'; ?>

</body>

</html>