<?php

require_once 'controllers/errores.php';

class App{
    /*Va a centralizar todo*/
    function __construct(){
       /*echo "<p> Nueva App </p>";*/
        
/*Se va a encontrar porque en htacces pusimos eso de url*/
        $url = isset($_GET['url']) ? $_GET['url']: null;
        
/*Para que elimine los que no me sirven*/
        $url = rtrim($url,'/');
/*Que me busque algo dentro de*/
        $url = explode('/',$url);
            
/*Me muestra un array con lo que contiene*/
        //var_dump($url);
        
        if(empty($url[0])){
            /*echo 'Lo primero no hay nada /----';*/
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;          
        }
        
        $archivoController = 'controllers/' . $url[0] . '.php';
        
        
        if(file_exists($archivoController)){
            /*echo 'Lo primero Aqui si hay /----';*/
            /*echo $archivoController;*/
            require_once $archivoController;
            /*echo 'Traigo esto' . $archivoController;*/
            $controller = new $url[0];
            
            $controller->loadModel($url[0]);
            
            
            $nparam = sizeof($url);
            
            /*echo '--------' . $nparam . '---------';*/
            
            if($nparam > 1){
                if($nparam > 2){
                    $param = [];
                    for($i = 2; $i<$nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }
            
/*            if(isset($url[1])){
                //echo '¿Donde aparezco?';
                $controller->{$url[1]}();
                echo $url[0];
            }else{
                $controller->render();
            }*/
            
        }else{
            $controller = new Errores();
        }
        
    }
    
}

?>