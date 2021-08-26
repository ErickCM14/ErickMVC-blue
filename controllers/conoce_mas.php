<?php

class Conoce_Mas extends Controller{
    
    function __construct(){
        
        parent::__construct();
        
    }
    
    function render(){
        $this->view->render('conoce_mas/index');
    }
    
}

?>