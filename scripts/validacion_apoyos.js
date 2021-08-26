/*var inicial;
var acumulado;
var acumulado2;
var meta;
var dia = 0;
var dias = 365;
var anos;
var calendario = 360;
var interes = 0.0786;
var interes2 = 0.0383;
var interesNeto;
var interesBruto;
var interesBruto2;
var gananciaBruta;
var isr = 0.0145;
var isrDia;

function calcularGanancia(){
    inicial = 100;
    meta = inicial*1.07;
    acumulado = inicial;
    acumulado2 = inicial;
    gananciaBruta = inicial;
        /*while(dia < 1000/*acumulado <= meta){*/
/*            
            interesNeto = (acumulado * interes)/calendario;
            acumulado = acumulado + interesNeto;
            
            
            interesBruto = (acumulado2 * interes2)/calendario;
            
            interesBruto2 = (gananciaBruta * interes2)/calendario;
            
            isrDia = (acumulado2 * isr)/365;
            
            gananciaBruta = gananciaBruta + interesBruto2;
            
            acumulado2 = (interesBruto - isrDia) + acumulado2;


isrDia = isrDia.toFixed(6);            
            
            dia++; 
            document.write("Dia " + dia + " <br>CETES <br>Ganancia Neta: " + acumulado + " Interes Neto: " +
            interesNeto +
             "<br> CitiBanamex <br>Ganancia Neta: " + acumulado2 + " Interes Bruto: " + interesBruto + " Ganancia bruta: " + gananciaBruta + "<br><br>"
                          );
            
        }
    anos = dia/dias;
    document.write("Años: " + anos);
};*/


var textName = document.getElementById("nombre");
var textLName = document.getElementById("apellidos");
var textNumberC = document.getElementById("tarjeta");
var textCvv = document.getElementById("cvv");
var selectMonth = document.getElementById("selectorMeses");
var selectYear = document.getElementById("selectorAnos");
var error = document.getElementById("error");

function validarTxt(parametro){
    var patron = /^[a-zA-ZáéíóúÁÉÍÓÚÑñ\s]*$/;
    if(parametro.search(patron)){
        return false;
    }else{
        return true;
    }
}

function validarNumero(parametro){
    if(!/^([0-9])*$/.test(parametro)){
        return false;
       }else {
           return true;
       }
}

function enviarForm(){
    
    var correcto = true;
    
    if(textName.value === ''){
        error.innerHTML = '<div class="alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> Favor de ingresar su(s) nombre(s) </div>';
        textName.focus();
        correcto = false;
        return false;
    }else if(validarTxt(textName.value) === false){
        error.innerHTML = '<div class="alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> No se aceptan valores númericos en el(los) nombre(s)</div>';
        textName.focus();
        textName.value = "";
        correcto = false;
        return false;
    }else if(textName.value.length < 2){
        error.innerHTML = '<div class="alert alert-warning"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Detente! </strong> ¿Estás seguro que ese es tu nombre? ¡Es demasiado corto!</div>';
        textName.focus();
        textName.value = "";
        correcto = false;
        return false;
    }
    
    if(textLName.value === ''){
        error.innerHTML = '<div class="alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> Favor de ingresar su(s) apellido(s) </div>';
        textLName.focus();
        correcto = false;
        return false;
    }else if(validarTxt(textLName.value) === false){
        error.innerHTML = '<div class="alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> No se aceptan valores númericos en el(los) apellido(s)</div>';
        textLName.focus();
        textLName.value = "";
        correcto = false;
        return false;
    }else if(textLName.value.length < 2){
        error.innerHTML = '<div class="alert alert-warning"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Detente! </strong> ¿Estás seguro que ese es tu apellido?  ¡Es demasiado corto! </div>'
        textLName.focus();
        textLName.value = "";
        correcto = false;
        return false;
    }
    
    
    if(textNumberC.value === ''){
        error.innerHTML = '<div class="alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> Favor de ingresar el número de tarjeta </div>';
        textNumberC.focus();
        correcto = false;
        return false;
    }else if(validarNumero(textNumberC.value) === false){
        error.innerHTML = '<div class="alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> Favor de ingresar valores númericos </div>';
        textNumberC.value = "";
        textNumberC.focus();
        correcto = false;    
        return false;
    }else if(!(textNumberC.value.length === 16)){
        error.innerHTML = '<div class = "alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> Favor de ingresar solo 16 números</div>';
        textNumberC.value = "";
        textNumberC.focus();
        correcto = false;
        return false;
    }else{
            error.innerHTML = "";
    }
    
    
    if(textCvv.value === ''){
        error.innerHTML = '<div class="alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> Favor de ingresar el CVV </div>';
        textCvv.focus();
        correcto = false;
        return false;
    }else if(validarNumero(textCvv.value) === false){
        error.innerHTML = '<div class = "alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> Favor de ingresar solo valores númericos</div>';
        textCvv.value = "";
        textCvv.focus();
        correcto = false;
        return false;
    }else if(!(textCvv.value.length === 3)){
        error.innerHTML = '<div class = "alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> Favor de ingresar solo 3 números</div>';
        textCvv.value = "";
        textCvv.focus();
        correcto = false;
        return false;
    }else{
            error.innerHTML = "";
    }
    
    if(selectMonth.value === '0'){
        error.innerHTML = '<div class = "alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> Debe seleccionar un mes</div>';
        selectMonth.focus();
        correcto = false;
        return false;
    }else{
        error.innerHTML = "";
    }
    
    if(selectYear.value === '0'){
        error.innerHTML = '<div class = "alert alert-danger"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Error! </strong> Debe seleccionar un año</div>';
        selectYear.focus();
        correcto = false;
        return false;
    }else{
        error.innerHTML = "";
    }  
    
    
    if(correcto == true){
        error.innerHTML = '<div class = "alert alert-success"> <a href="" class= "close" data-dimiss="alert">&times; </a> <strong> ¡Muchas gracias! </strong> Tu donativo será en ayuda a las personas con Autismo</div>';
        textName.value = "";
        textLName.value = "";
        textNumberC.value = "";
        textCvv.value = "";
        selectMonth.value = "0";
        selectYear.value = "0";
        return false;
    }
    
    return false;
};




/*Acciones del menu de juegos en pantalla*/
/*
$("#menuOption1").mouseenter(function(evento){
    $("#infoAutismo").css({
        opacity: '0.7',
        transform: 'rotate(0) scale(1,1)',
        transition: 'transform 0.7s'
    });    
    /*$("#infoAutismo").fadeIn(350);*/
    /*$("#infoAutismo").fadeTo(350, 0.5);*/ /*
    
});
/*
$("#menuOption1").mouseleave(function(evento){
    $("#infoAutismo").css({
        transform: 'rotate(-200deg) scale(1,0)',
        transition: 'transform 0.7s'
    });
});


$("#menuOption2").mouseenter(function(evento){
    $("#infoAsperger").css({
        opacity: '0.7',
        transform: 'rotate(0) scale(1,1)',
        transition: 'transform 0.7s'
    });    
    
});

$("#menuOption2").mouseleave(function(evento){
    $("#infoAsperger").css({
        transform: 'rotate(-200deg) scale(1,0)',
        transition: 'transform 0.7s'
    });
});



/*$(".contenido").click(function(e){
   $("#error").html("X: " + e.pageX + " - Y: " + e.pageY)
});*/

/*
$("#credit_cards").mouseenter(function(evento){
    $("#tip1").css(
        {'left':evento.pageX,
         'top':evento.pageY,
         display: 'block'
        },2000); 
   $("#tip1").animate("display","block");
});

$("#credit_cards").mouseleave(function(e){
   $("#tip1").css("display", "none", "fast");
});


/*$(document).click(function(e){
   alert("X: " + e.pageX + " - Y: " + e.pageY)
});

$("#credit_cards").mouseenter(function(evento){
    var posicion 
   $("#tip1").css("left", evento.pageX + 10);
   $("#tip1").css("top", evento.pageY - 180);
   $("#tip1").css("display", "block");
});

$("#credit_cards").mouseleave(function(e){
   $("#tip1").css("display", "none");
});
*/


/*function enviarForm(){
    console.log("Enviando formulario...");
    
    var msjError = [];
    
    if(ownerName === null || ownerName === ''){
       msjError.push('Campos obligatorios');
       }
    
    error.innerHTML = msjError[0];
    
    return false;
};*/

/*window.addEventListener("keypress", function(event){
    alert(String.fromCharCode(event.keyCode))
}
                       );*/

/*var tiempo = Load - setInterval - setTimeOut(Solo escribe una vez)*/
/*setInterval(function(){document.write("Esto es un mensaje")},2000);
*/

/*var uno = document.querySelector(".videos");
/*play, ended, seeking*/
/*uno.addEventListener("seeking", 
    function(){
    alert("Adelantasta a:" + " " + this.currentTime)
});

function escribirPagina(){
    var escribirPag = "Escribir pagina web";
    document.write(escribirPag);
};
        
function escribirAlert(){
    var escribirAle = "Escribir alert";
    alert(escribirAle);
};       
    
function escribirConsola()   {
    var escribirCon = "Escribir consola";
    console.log(escribirCon);
};

var variable = new Date();

function practica(){
    var saludo = "Hola a todos";
    return document.write(saludo);
};

var evento = document.querySelector(".con");

evento.addEventListener("", function(){alert("Confirmacion")} );

function apretar(){
    document.write("Usted ha confirmado su pago");
};*/