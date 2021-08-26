<?php

class Registro extends Controller{

    function __construct(){
        //echo '--Aqui entro a lo que pidio el url--';
        parent::__construct();
        //echo '--Ya hice la traida de objeto view---';
        //echo 'Qe pasa aqui';
        $this -> view -> mensaje = "";
    }
    
    function render(){
        $this -> view -> render('registro/index');
    }
    
    function registrarUsuario(){
        
        $userName   = $_POST['userName'];
        $contrasena = $_POST['contrasena'];
        $nombre     = $_POST['nombre'];
        $apellidos  = $_POST['apellidos'];
        $sexo       = $_POST['sexo'];
        $fechaNac   = $_POST['fechaNac'];
        $correo     = $_POST['correo'];
        
        $mensaje = "";
        
        if($this->model->insert(['idUsuario' => 'null', 'usuarioLogin' => $userName,  'contrasena' => $contrasena, 'nombre' => $nombre, 'apellidos' => $apellidos, 'sexo' => $sexo, 'fechaNacimiento' => $fechaNac, 'correo' => $correo])){
            $mensaje = 'Se registro correctamente';
        }else{
            $mensaje = 'Usuario duplicado, ingrese uno nuevo';
        }
        
        $this -> view -> mensaje = $mensaje;
        $this -> render();
    }
}

?>