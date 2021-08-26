<?php

include_once 'models/usuario.php';

class ConsultaModel extends Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public  function select(){
        $items = [];
/*        echo 'Entre select';*/
        try{
            $query = $this->db->connect()->query('SELECT nombre, apellidos, sexo, fechaNacimiento, correo FROM USUARIO WHERE usuarioLogin = "' . $_SESSION['usu'] . '"');
            /*echo 'Ejecute query';*/
            while($row = $query -> fetch()){
                $item = new Usuario();
                $item -> nombre          = $row['nombre'];
                $item -> apellidos       = $row['apellidos'];
                $item -> sexo            = $row['sexo'];
                $item -> fechaNacimiento = $row['fechaNacimiento'];
                $item -> correo          = $row['correo'];
                
                array_push($items, $item);
            }
            
//            echo 'antes de retornar';
            return $items;
            
        }catch(PDOException $e){
            return [];
        }
        
    }
    
    public function update($datos){
        
        try{
            $query = $this->db->connect()->prepare('UPDATE USUARIO SET nombre = :nombre, apellidos = :apellidos, sexo = :sexo, fechaNacimiento = :fechaNacimiento, correo = :correo WHERE usuarioLogin = :usuarioLogin');
            
            $query -> execute(['nombre' => $datos['nombre'], 'apellidos' => $datos['apellidos'], 'sexo' => $datos['sexo'], 'fechaNacimiento' => $datos['fechaNacimiento'], 'correo' => $datos['correo'], 'usuarioLogin' => $datos['usuarioLogin']]);
            
            return true;
            
        }catch(PDOException $e){
            return false;
        }
    }
    
}

?>