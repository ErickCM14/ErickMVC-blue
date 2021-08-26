<!DOCTYPE html5>
<html lang="es">

<head>
    <title>Registro</title>

    <meta charset="utf-8">
    
    <link href = "<?php echo constant('URL'); ?>public/css/estilos_registro.css" rel = "Stylesheet"  type = "text/css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>

<body>

   <?php require "views/header.php"; ?>
    
    <div id="main">
       
       
    <div class="contenedor">
       
        <div class="cuadroRegistro">

           
            <form action="<?php echo constant('URL'); ?>registro/registrarUsuario" method="POST" class="contForm">

                <h1 style="text-align: center;padding:0";>Registro</h1>
                
                <div class="center error" style="margin: 1px;"> <?php echo $this->mensaje; ?> </div>
                
                <h2>Usuario y contraseña</h2>
                
                
                <div class="contenedorForm">
                    <label for="userName" class="claseLabel">Usuario</label>
                    <input type="text" name="userName" class="claseInput" placeholder="Ingrese usuario" autofocus autocomplete required pattern="[A-Za-z0-9]+"/>
                </div>

                <div class="contenedorForm">
                    <label for="contrasena" class="claseLabel">Contraseña</label>
                    <input type="password" name="contrasena" class="claseInput" placeholder="****" autocomplete required pattern="[A-Za-z0-9]+" />
                </div>

                <h3>Datos personales</h3>

                <div class="contenedorForm">
                    <label for="nombre" class="claseLabel">Nombre(s)</label>
                    <input title="Ingrese solo letras" type="text" name="nombre" class="claseInput" placeholder="Ingrese nombre" autocomplete required pattern="[A-Za-zÁáÉéÍíÓóÚú\s]+" />
                </div>

                <div class="contenedorForm">
                    <label for="apellidos" class="claseLabel">Apellidos(s)</label>
                    <input type="text" name="apellidos" class="claseInput" placeholder="Ingrese apellido(s)" autocomplete required pattern="[A-Za-zÁáÉéÍíÓóÚú\s]+" />
                </div>

                <div class="contenedorForm">
                    <fieldset style="width:50%; margin-left:25%;">
                        <legend class="claseLabel">Sexo</legend>
                        <label><input type="radio" name="sexo" value="Hombre" checked>Hombre</label>
                        <label><input type="radio" name="sexo" value="Mujer">Mujer</label>
                    </fieldset>
                </div>

                <div class="contenedorForm">
                    <label for="fechaNac" class="claseLabel">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNac" min="1900-01-01" max="2030-12-31" class="claseInput" style="width:50%; margin-left:25%" required  />
                </div>

                <div class="contenedorForm">
                    <label for="correo" class="claseLabel">Correo</label>
                    <input type="email" name="correo" class="claseInput" placeholder="usuario@correo.com" autocomplete required pattern="[A-Za-z0-9\.-_]+@[\w\d]+\.\w+" />
                </div>

                <div class="contenedorForm">
                    <input type="submit" value="Enviar" name="enviar" style="width:50%; margin-left:25%; cursor: pointer;">
                </div>

            </form>
            
        </div>
        
    </div>
    
    </div>
    
    <?php require 'views/footer.php'; ?>

</body>

</html>