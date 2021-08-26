<?php

class Main extends Controller{
    
    function __construct(){
        /*echo 'Aqui me llamo la app, para despues ir a mi padre------';*/
        parent::__construct();
        /*echo 'Estoy mandando al render de la Vista despues de que pedi de mi padre controller su contruc y metodo';*/
        //echo '<p> Nuevo controlador Main </p>';
    }
    
    function render(){
        $this->view->render('main/index');
    }
    
    function saludo(){
        echo '<p>Es el método saludo</p>';
    }
    
}

?>