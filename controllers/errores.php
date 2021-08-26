<?php

class Errores extends Controller{

    function __construct(){
        parent:: __construct();
        $this->view->mensaje = 'Error al cargar para obtener contenido';
        $this->view->render('errores/index');
    }
    
}

?>