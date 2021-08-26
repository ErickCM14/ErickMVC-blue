<?php

class Model{
    
    function __construct(){
        //echo 'soy el modelo libreria';
        $this -> db = new Database();
        //echo '----Entre o no----';
    }
    
}

?>