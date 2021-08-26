<?php

class Controller{
    
    function __construct(){
        //echo '<p>Este es el Controlador base</p>';
        //echo 'Yo soy la libreria constructor Controller y voy despues que mi main contoller me llama----';
        $this->view = new View();
    }
    
    function loadModel($model){
        $url = 'models/'.$model.'model.php';
        /*echo 'Entro a Controller load model';*/
        
        
        if(file_exists($url)){
            echo $url . 'Loadmodelo';
            
            require $url;
          

            $modelName = $model.'Model';
            $this -> model = new $modelName();
        }else{
            /*Aqui debo checar porque todas las capas deben tener modelos*/
            /*echo 'No existo';*/
        }
        
    }
    
}

?>