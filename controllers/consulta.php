<?php

class Consulta extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->usuario = [];
        $this->view->usuaria = [];
    }
    
    function render(){
        /*echo 'Entre en reder';*/
        $usuario = $this->model->select();
        /*echo 'traje lo de usuario a render';*/
        
        $this->view->usuario = $usuario;
        $this->view->render('consulta/index');
    }
    
    function modificar($param = null){
        $usuario = $this->model->select();
        
        $this->view->usuaria = $usuario;
        $this->view->render('consulta/modificar');
    }
    
    function confirmar($param = null){
        
        $userName        = $_SESSION['usu'];
        $nombre          = $_POST['nombre'];
        $apellidos       = $_POST['apellidos'];
        $sexo            = $_POST['sexo'];
        $fechaNacimiento = $_POST['fechaNac']; 
        $correo          = $_POST['correo'];
        
        $mensaje = "";
        
        
        if($this->model->update(['usuarioLogin' => $userName, 'nombre' => $nombre, 'apellidos' => $apellidos, 'sexo' => $sexo, 'fechaNacimiento' => $fechaNacimiento, 'correo' => $correo])){
            
            
            
            $mensaje = $_SESSION['usu'] . ' sus datos se han modificado';
            
        $this -> view -> mensaje = $mensaje;
            
        $usuario = $this->model->select();
        
        $this->view->usuario = $usuario;            
        $this -> view -> render('consulta/index');
            
        }else{
            
          /*  echo '---------ejectue mal Query------';*/
            $mensaje = $_SESSION['usu'] . ' existio algun error';
            
        }
        

        
    }
}

?>