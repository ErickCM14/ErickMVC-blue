<?php

include_once 'models/usuario.php';

class LoginModel extends Model{
     
    public function __construct(){
        parent::__construct();
    }
    
    public function iniciarS($datos){
        $_SESSION['usu'] = null;
        /*var_dump($datos);*/
        
        try{
            
            if($query = $this->db->connect()->query("SELECT usuarioLogin, nombre FROM usuario WHERE usuarioLogin = '" . $datos["usuarioLogin"] . "' and contrasena = '" . $datos["contrasena"] . "'")){
                
            
            while($row = $query -> fetch()){
                $item = new Usuario();
                
                $item -> usuarioLogin = $row['usuarioLogin'];
                
                /*echo $item -> usuarioLogin;*/
                
                /*$item -> usuarioLogin = $row['usuarioLogin'];*/
                $_SESSION['usu'] = $row['usuarioLogin'];
            }
            
            isset($_SESSION['usu']) ? $retorno = true : $retorno = false;
            
            return $retorno;
            
            }
    }catch(PDOException $e){
            echo 'entro rechazo';
            /*echo '---hbhb---' . $e . '------que----';*/
            echo $e;
            return false;
        }

    }
}

?>