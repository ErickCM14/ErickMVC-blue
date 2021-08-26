<!DOCTYPE html5>
<html lang="es">
<head>
   <title>Inicio</title>
   
   <meta charset="utf-8">
   
   <!-- <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/estilos.css" type="text/css"> -->
   
   <link rel="stylesheet" href="fonts.css">
   
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
</head>
   
<body>
    
    <?php require 'views/header.php'; ?>
    
    <div id="main">
        <h1 class="center" style="display:none">Inicio o Main</h1>
        <div class="center" style="margin: 10px"> <?php /*echo $this->mensaje; */?> </div>
        
        <section style="margin-left: 50px; margin-right: 50px">
        <h1>Autismo</h1>
        <h4>¿Qué es el autismo?</h4>
        <p>El trastorno del espectro autista (TEA) es una afección neurológica y de desarrollo que comienza en la niñez y dura toda la vida. Afecta cómo una persona se comporta, interactúa con otros, se comunica y aprende.</p>
            
        <p>Actualmente, el autismo <strong> no se considera un diagnóstico único</strong> sino un <strong>conjunto de trastornos</strong> que tienen en común un cierto grado de alteración en tres áreas: déficit de interacción social, problemas de comunicación y un repertorio anormalmente restringido de comportamientos e intereses.</p>
            
        <p>El diagnóstico temprano y la terapia conductual, educativa y familiar pueden reducir los síntomas y brindar apoyo para el desarrollo y el aprendizaje.</p>
            
        <p>El <strong>Día Mundial de Concienciación sobre el Autismo</strong> se celebra el 2 de abril. Fue creada por la Asamblea General de las Naciones Unidas, para poner de relieve la necesidad de contribuir a la mejora de la calidad de vida de las personas con autismo, para que puedan llevar una vida plena y gratificante como parte integrante de la sociedad.</p>
            
        <h4>Los distintos tipos o grados del autismo</h4>
        <p>Se diferencian 5 grandes tipos de autismo, por lo que las personas que lo padecen pueden situarse en cualquier punto del espectro:
        </p>
           
            <ul style="list-style-type: circle" class="vineta">
                <li>Autismo</li>
                <li>Síndrome de Rett</li>
                <li>Síndrome de Asperger</li>
                <li>Trastorno desintegrado infantil o síndrome de Heller</li>
                <li>Trastorno generalizado del desarrollo no especificado</li> 
            </ul>
            
        </section>        
        
        <div style="margin-left: 50px; margin-right: 50px;  display:flex; flex-direction:column;justify-content: center; align-items: center;">

            <div class = "Imgs" style="padding:0px; margin-bottom:20px; display:flex; flex-direction:row; width: 100%; height:100%;  justify-content: center; align-items: center;">
            
            <div class = "img1" style= " background-image: url(<?php echo constant('URL'); ?>Imagenes/contenedorninoadentro.jpg); 
            
            
            width: 30%;
            height: 219px;
            background-size: contain;
            background-repeat: no-repeat;">
            </div> 
            
            <div class = "img2" style= "background-image: url(<?php echo constant('URL'); ?>Imagenes/autismo.jpg);
            
            
            width: 40%;
            height: 219px;
            background-size: contain;
            background-repeat: no-repeat;">">
            
            </div>
            
            </div>
               
            <div style="display: flex; justify-content: center; align-items: center; width;100%; margin-bottom:20px;">
                
                
                <video style=" width:70%; height: 100%;">
                <source src="Imagenes/Autismo.mp4" type="video/mp4"/>
                </video>
            
            </div>
            
        </div>        
                
     <?php require 'views/footer.php'; ?>           
    </div>
    
     
    
</body>
</html>