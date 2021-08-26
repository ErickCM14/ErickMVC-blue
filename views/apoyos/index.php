<!DOCTYPE html5>
<html lang="es">
<head>
    <title>Apoyos: Autismo</title>
    
    <meta charset=UTF-8″ />
    
    <link href = "<?php echo constant('URL'); ?>public/css/estilos_apoyos.css" rel = "Stylesheet"  type = "text/css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
<!--    <script src="http://code.jquery.com/jquery-latest.js"></script> -->
    
    <!--<script src="scripts/main.js"></script>-->
    
    <!--<script>/* Links de videos a ver  

https://uniwebsidad.com/libros/bootstrap-3/capitulo-6/mensajes-de-alerta

    Validar form    
https://www.youtube.com/watch?v=FY-xiyhGr44    
    
 Onmouse
https://www.youtube.com/watch?v=VGkLLMd7LjI
    */ 
    efecto mouse
https://www.youtube.com/watch?v=Ufw0_jUbLB8
   <script>-->
    
</head>
    
<body>

<?php require 'views/header.php'; ?>


<div id="main">

    <h1 class="center" style="display">Apoyo al Autismo</h1>

    <p>Apoya al autismo, ayuda a los demás</p>


    <div class="contenedor">

        <div class="formulario">

            <h1 class="heading">Donación Autismo</h1>

            <div id="error"></div>

            <form action="">

                <div class="formNombre">
                    <label for="nombre"><strong>Nombre(s)</strong></label>
                    <input type="text" name="nombre" placeholder="Nombre" id="nombre">
                </div>

                <div class="formApellidos">
                    <label for="apellidos"><strong>Apellido(s)</strong></label>
                    <input type="text" name="apellidos" placeholder="Apellidos" id="apellidos">
                </div>

                <div class="formTarjeta">
                    <label for="tarjeta"><strong>Número de tarjeta</strong></label>
                    <input type="text" name="tarjeta" placeholder="Número de tarjeta" id="tarjeta">
                </div>

                <div class="formCvv">
                    <label for="cvv"><strong>CVV</strong></label>
                    <input type="text" name="cvv" placeholder="CVV" id="cvv">
                </div>

                <div class="formFechaExpiracion">
                    <label for="fechaExpiracion"><strong>Fecha de Expiración</strong></label>
                    <select id="selectorMeses">
                        <option value="0">Seleccione</option>
                        <option value="01">Enero</option>
                        <option value="02">Febrero</option>
                        <option value="03">Marzo</option>
                        <option value="04">Abril</option>
                        <option value="05">Mayo</option>
                        <option value="06">Junio</option>
                        <option value="07">Julio</option>
                        <option value="08">Agosto</option>
                        <option value="09">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>
                    <select id="selectorAnos">
                        <option value="0"> Seleccione</option>
                        <option value="20"> 2020</option>
                        <option value="21"> 2021</option>
                        <option value="22"> 2022</option>
                        <option value="23"> 2023</option>
                        <option value="24"> 2024</option>
                        <option value="25"> 2025</option>
                        <option value="26"> 2026</option>
                        <option value="27"> 2027</option>
                        <option value="28"> 2028</option>
                    </select>
                </div>

                <div class="formImgTarjetas">

                    <div class="mastercard" style="background-image: url(<?php echo constant('URL'); ?>Imagenes/mastercard.png);"></div>

                    <div class="visa" style="background-image: url(<?php echo constant('URL'); ?>Imagenes/visa.png);"></div>
                </div>

                <div class="formBoton">

                    <input type="submit" onclick="return enviarForm()" value="Confirmar">
                </div>

            </form>

        </div>

    </div>

</div>


<?php require 'views/footer.php'; ?>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--script src="assets/js/jquery.payform.min.js" 
    charset="utf-8"></script>
    <!--<script src="assets/js/script.js"></script>-->

<script src="<?php echo constant('URL');?>scripts/validacion_apoyos.js"></script> 
    
</body>
    
</html>