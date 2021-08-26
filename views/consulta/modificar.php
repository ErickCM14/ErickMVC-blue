<DOCTYPE HTML5>
<html lang="es">
<head>
    
        
    
</head>    
    
<body>
    
    <?php require 'views/header.php'?>;

   <!--style="display: flex; flex-direction: column"
   
   PONGO MUCHOS STYLE PORQUE ES PARA ENTREGAR ME GANO LA PRISA
   -->
   
   
    <div id="main" >
       <h1 class="center">Editar perfil</h1>
    <div style="width: 30%; height: 60%; border:solid white 3px; border-radius: 10px;   padding: 10px 10px 10px 40px ; margin-left:35%; background: rgba(0, 15, 255, 0.78); color:rgba(255, 255, 255, 0.9);">            
               
                         <h1 style="text-align: center; margin-right:10%;"><?php echo $_SESSION['usu']; ?></h1>
                <?php
                include_once 'models/usuario.php';
    
                    foreach($this->usuaria as $row){
                        $usuario = new Usuario();
                        $usuario = $row;
                   
                ?>
        <form action="<?php echo constant('URL');?>consulta/confirmar" method="post">
                <div class="contenedorForm">
                    <label for="nombre">Nombre(s)</label>
                    <input title="Ingrese solo letras" type="text" name="nombre" class="nombre" value="<?php echo $usuario->nombre; ?>" autocomplete required pattern="[A-Za-zÁáÉéÍíÓóÚú\s]+" />
                </div>

                <div class="contenedorForm">
                    <label for="apellidos">Apellidos(s)</label>
                    <input type="text" name="apellidos" class="apellidos" value="<?php echo $usuario->apellidos; ?> " autocomplete required pattern="[A-Za-zÁáÉéÍíÓóÚú\s]+" />
                </div>

                <div class="contenedorForm">
                    <fieldset>
                        <legend>Sexo</legend>
                        <label><input type="radio" name="sexo" value="Hombre" checked>Hombre</label>
                        <label><input type="radio" name="sexo" value="Mujer">Mujer</label>
                    </fieldset>
                </div>

                <div class="contenedorForm">
                    <label for="fechaNac">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNac" min="1900-01-01" max="2030-12-31" class="fechaNac" required  />
                </div>

                <div class="contenedorForm">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" class="correo" placeholder="usuario@correo.com" value=" <?php echo $usuario->correo; ?> " autocomplete required pattern="[A-Za-z0-9\.-_]+@[\w\d]+\.\w+" />
                </div>

                <div class="contenedorForm">
                    <input type="submit" value="Enviar" name="enviar">
                </div>
        </form>
                  
            <!-- LO QUITO PERO SIRVE
                   <a href=" <?php echo constant('URL'); ?>consulta/modificar">Editar</a>
                   <a href=" <?php echo constant('URL'); ?>consulta/eliminar">>Eliminar</a>
               
               -->
               
               <?php } ?>
       
       
       </div>
    </div>

    <?php require 'views/footer.php'?>;    
    
</body>
    
</html>