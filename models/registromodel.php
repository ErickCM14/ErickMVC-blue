<?php

class RegistroModel extends Model{
    
    public function __construct(){
        //echo 'Este es el Resgirto Model hijo de Model';
        parent::__construct();
        //echo '----Salgo exitoso de la conexio y de Regustri Model';
    }
    
    public function insert($datos){

        try{
            $query = $this->db->connect()->prepare('INSERT INTO USUARIO (idUsuario, usuarioLogin, contrasena, nombre, apellidos, sexo, fechaNacimiento, correo) VALUES (:idUsuario, :usuarioLogin, :contrasena, :nombre, :apellidos, :sexo, :fechaNacimiento, :correo)');

            $query->execute(['idUsuario' => $datos['idUsuario'], 'usuarioLogin' => $datos['usuarioLogin'], 'contrasena' => $datos['contrasena'], 'nombre' => $datos['nombre'], 'apellidos' => $datos['apellidos'], 'sexo' => $datos['sexo'], 'fechaNacimiento' => $datos['fechaNacimiento'], 'correo' => $datos['correo']]);
            
            return true;
        }catch(PDOException $e){
            return false;
        }   
        
    }
    
}

?>