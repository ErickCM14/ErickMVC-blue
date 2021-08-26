<?php

class View{
    
    function __construct(){
        //echo '<p>Este es la Vista base</p>';
    }
    
    function render($nombre){
        /*echo '----Soy el render';*/
        require 'views/' . $nombre . '.php';

    }
}

?>