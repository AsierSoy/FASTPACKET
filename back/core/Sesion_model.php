<?php
/**
 * Description of classSesion
 * @author asier
 * 
 */
class Sesion_model extends Main {

public function estableceSesion($nameSesion,$valorSesion)
{
   
		if(!isset($_SESSION['id_usuario'])) {
			session_start();
		}
        $_SESSION[$nameSesion]=$valorSesion;


}

    public function tieneSesion ($nameSesion){
        if(!isset($_SESSION['id_usuario'])) {
			session_start();
		}
        if(isset($_SESSION[$nameSesion])){
            return true;
        }else {
            return false;
        }
    }
     
    public function seguridad($nameSesion){
        if(!$this->tieneSesion($nameSesion)){
            header("location:../index.php");
        }
    }
    
    public function cerrarSesion(){
        if(!isset($_SESSION['id_usuario'])) {
			session_start();
		}
        session_unset();
        return session_destroy();
    }    
}