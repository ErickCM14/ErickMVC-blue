<?php

class Acerca_De extends Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    function render(){
        $this->view->render('acerca_de/index');
    }
    
}

?>