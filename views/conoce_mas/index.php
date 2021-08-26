<!DOCTYPE html5>
<html lang="es">
<head>
    <title>Conoce más: Autismo</title>
    
    <meta charset=UTF-8″/>
    
    <link href = "<?php echo constant('URL'); ?>public/css/estilos_conoce.css" rel = "Stylesheet"  type = "text/css">

    <link rel = stylesheet href="fonts.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
<!--	<script src="http://code.jquery.com/jquery-latest.js"></script>-->
	
	<script src="scripts/main.js"></script>
    
</head>
    
<body>
   
   <?php require 'views/header.php'; ?>
   
    <div id="main">
        
        <h1 class="center">Tipos de Autismo</h1>
    
    <p>Da clic en las siguientes enlaces para obtener mas información acerca de los tipos de Autismo; AUN NO DIRIGE A NINGUN LADO LOS LINKS, FALTA QUE SE LE AGREGUE, EL PRIMERO REDIRIGE A GOOGLE</p>
    
    <div class="tiposAutismo" id="tiposAutismo">
       
        <div class="autismo">
            
            <div class="imgAutismo cont"> 
                <div class="uno" style="background-image: url(<?php echo constant('URL'); ?>Imagenes/autismoNormal.jpg);">
                    <div class="info"><p class="parrafo">Comienza durante los 3 primeros años de vida</p></div>
                </div>
                
                <div class="botones">
                    <input type="button" value="Autismo" onclick="location.href='https://www.google.com'">
                </div>
            </div>
        
            <div class="rett cont">
                <div class="uno" style="background-image: url(<?php echo constant('URL'); ?>Imagenes/sindromeRett.jpg);">
                    <div class="info"><p class="parrafo">Se presenta casi con exclusividad en niñas</p></div>
                </div>
            
                <div class="botones">
                    <input type="button" value="Síndrome de Rett">
                </div>
            </div>
        
            <div class="asperger cont">
                <div class="uno" style="background-image: url(<?php echo constant('URL'); ?>Imagenes/sindromeAsperger.jpg);">
                    <div class="info"><p class="parrafo">Autismo más difícil y, en ocasiones, tardío de diagnosticar</p></div>
                </div>
            
                <div class="botones">
                    <input type="button" value="Síndrome de Asperger">
                </div>
            </div>
        
        </div>        
    
               
        <div class="autismo">       
            <div class="heller cont">
                <div class="uno" style="background-image: url(<?php echo constant('URL'); ?>Imagenes/sindromeHeller.jpg);">
                    <div class="info"><p class="parrafo">Suele aparecer sobre los 2 años; se diferencia en su carácter regresivo y repentino</p></div>
                </div>
           
                <div class="botones">
                    <input type="button" value="Sindrome de Heller">
                </div>
            </div>
        
        
            <div class="heller cont">
                <div class="uno" style="background-image: url(<?php echo constant('URL'); ?>Imagenes/tgdne.jpg);">
                    <div class="info"><p class="parrafo">Los síntomas clínicos son demasiado heterogéneos</p></div>
                </div>
           
                <div class="botones">
                    <input type="button" value="PDD-NOS">
                </div>
            </div>
        
        </div>
        
    </div>
    
</div>
       
    <?php require 'views/footer.php'; ?>

    
    <script src="scripts/validacion_apoyos.js"></script>
    
    
</body>
    
</html>