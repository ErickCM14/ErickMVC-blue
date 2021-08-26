<!DOCTYPE html5>
<html lang="es">

<head>
    <title>juegos: Autismo</title>
    <meta charset="UTF-8">


    <link href="<?php echo constant('URL'); ?>public/css/estilos_juegos.css" rel="Stylesheet" type="text/css">

    <link rel=stylesheet href="fonts.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->

    <script src="scripts/main.js"></script>

</head>

<body>
   
   <?php require 'views/header.php' ?>
   
   <div id="main">
       
       <h1 class="center" >Arrastra y gana</h1>
       
       <p style="font-size:20px"><strong>Instrucciones:</strong> Arrastre los balones a su respectivo deporte</p>
       <br/>
       
       <div id="aciertos" style="font-size: 20px; font-weight: bold; color:green"></div>
       <div id="errores" style="font-size: 20px; font-weight: bold; color:red"></div>
       
       <div id="contenedor" class="contenedor">
            
            <div id="palabras"></div>
            <div id="imagenes"></div>
            <h1 id="mensaje">¡Felicidades, lo haz logrado!</h1>
        </div>
       
   </div>
   
   <?php require 'views/footer.php' ?>


    <script>
        const imgs = [
            'basquetbol-1', 'futbol-2',
            'americano-3', 'golf-4', 'tenis-5', 'beisbol-6', 'boliche-7', 'volibol-8'
        ];
        
        const palb = [
            'Basquetbol', 'Futbol',
            'FutbolAmericano', 'Golf', 'Tenis', 'Beisbol', 'Boliche', 'Volibol'
        ];

        const palabras = document.getElementById('palabras');

        const imagenes = document.getElementById('imagenes');

        const mensaje = document.getElementById('mensaje');

        let terminado = imgs.length;

        for (let i = 0; i < terminado; i++) {
            const div = document.createElement('div');
            div.className = 'placeholder';
            div.dataset.id = imgs[i];
            div.style.backgroundImage = `url("Imagenes/deportes/${palb[i]}.jpg")`;
            palabras.appendChild(div);
        }

        while (imgs.length) {
            const index = Math.floor(Math.random() * imgs.length);
            const div = document.createElement('div');
            div.className = 'imagen';
            div.id = imgs[index];
            div.draggable = true;
            div.style.backgroundImage = `url("Imagenes/deportes/${imgs[index]}.jpg")`;
            imagenes.appendChild(div);
            /*console.log(index);*/
            imgs.splice(index, 1);
        }


        imagenes.addEventListener('dragstart', e => {
            e.dataTransfer.setData('id', e.target.id);
        });

        palabras.addEventListener('dragover', e => {
            e.preventDefault();
            e.target.classList.add('hover');
        });

        palabras.addEventListener('dragleave', e => {
            e.target.classList.remove('hover');
        });

        var errores = 0;
        var aciertos = 0;

        palabras.addEventListener('drop', e => {

            e.target.classList.remove('hover');
            const id = e.dataTransfer.getData('id');
            
            if (e.target.dataset.id === id) {
                /*const div = document.createElement('div');
                div.className = 'imagen';
                e.target.style.backgroundSize = 'contain';*/
                e.target.appendChild(document.getElementById(id));

                /*console.log(id + 'Erick');
                console.log(e.target);*/

                aciertos++;
                /*console.log('Aciertos: ' + aciertos);*/
                
                terminado--;
                
                if(terminado == 0){
        var elemento = document.getElementById('contenedor');
        var elementoAciertos = document.getElementById('aciertos');
        var elementoErrores = document.getElementById('errores');
                    
                    elementoAciertos.textContent = "Aciertos: " + aciertos;
                    
                    elementoErrores.textContent = "Errores: " + errores;
        
            elemento.className = 'ganaste';
                               
     //document.body.classList.add('ganaste');
                }

            } else {
                errores++;
                /*console.log('Errores: ' + errores);*/
            }

        });
    </script>    
            
</body>

</html>