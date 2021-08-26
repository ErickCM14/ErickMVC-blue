<DOCTYPE HTML5>
<html lang="es">
<head>
    
        
    
</head>    
    
<body>
    
    <?php require 'views/header.php'?>;

    <div id="main" style="display: flex; flex-direction: column">
       <h1 class="center">Perfil</h1>
              
       <table style="width:100%;justify-content: center; align-items: center; text-align: center;">
           <thead>
                   <tr>
                       <th>Nombre(s)</th>
                       <th>Apellido(s)</th>
                       <th>Sexo</th>
                       <th>Fecha de Nacimiento</th>
                       <th>Correo</th>
                   </tr>
           </thead>    
           <tbody>
                <?php
                include_once 'models/usuario.php';
    
                    foreach($this->usuario as $row){
                        $usuario = new Usuario();
                        $usuario = $row;
                   
                ?>
               <tr>
                   <td>  <?php echo $usuario->nombre; ?>  </td>
                   <td>  <?php echo $usuario->apellidos; ?>  </td>
                   <td>  <?php echo $usuario->sexo; ?> </td>
                   <td>  <?php echo $usuario->fechaNacimiento; ?> </td>
                   <td>  <?php echo $usuario->correo; ?> </td>
                   <td><a href=" <?php echo constant('URL'); ?>consuLta/modificar">Editar</a></td>
                   <td><a href=" <?php echo constant('URL'); ?>consulta/eliminar">Eliminar</a></td>
               </tr>
               
               <?php } ?>
               
           </tbody>
       </table>
       
       
       
    </div>

    <?php require 'views/footer.php'?>;    
    
</body>
    
</html>