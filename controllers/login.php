<?php

class Login extends Controller{
    
    function __construct(){
        parent::__construct();
        $this -> view -> mensaje = "";
    }
    
    function render(){
        
        $this -> view -> render('login/index');
    }
    
    function iniciar(){
        $userName   = $_POST['userName'];
        $contrasena = $_POST['contrasena'];
        
        /*$mensaje = "";*/
        
        if($this->model->iniciarS(['usuarioLogin' => $userName,  'contrasena' => $contrasena])){
            $mensaje =  $_SESSION['usu'];
    
            

            
            $this -> view -> mensaje = $mensaje;
            /*echo $mensaje;*/
            
            $this -> view -> render('main/index');
        }else{
            $mensaje = 'Usuario o contraseña incorrecta';
            $this -> view -> mensaje = $mensaje;
            $this -> view -> render('login/index');
        }
    }
    
}
?>