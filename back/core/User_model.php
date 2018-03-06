<?php

/**
 * Description of User_model
 * @author asier
 */
class User_model extends Main {    
    public function selectUsuario($id){
        $arrayResult = $this->db->executeSelectQuery("SELECT * FROM usuarios WHERE id=$id");
        foreach ($arrayResult as $fila){
            return new Usuario($fila['id'],$fila['email'], $fila['nombre'], $fila['apellido'], $fila['password'], $fila['dni'], $fila['vehiculo'], $fila['tipoUser'], $fila['fecha_nacimiento'], $fila['avatar'], $fila['Activado'], $fila['fecha_registro']);
        }             
    }
    
    public function recuperarActivacion($email){
        $arrayResult = $this->db->executeSelectQuery("SELECT * FROM usuarios WHERE email='$email' AND Activado=0");
        if(count($arrayResult)>0){
            foreach($arrayResult as $fila)
            {
                $nombre = $fila['nombre'] ;		
                $header="To: $nombre <$email>"."\r\n";
                $header .= "From: Administrador <admin@cms.es>";
                $textoemail="$nombre, bienvenido a Fastpacket";
                $textoemail.="Gracias por registrarse en nuestro sitio.<br/>";
                $textoemail.="Su cuenta ha sido creada, y debe ser activada antes de poder ser utilizada.";
                $textoemail.="Para activar la cuenta, haga click en el siguiente enlace o copielo en la barra de direcciones del navegador: ";
                $textoemail.=" http://fastpacket.rivasruido.es/back/activate.php?email=".$fila['email']."&activation=".$fila['activation_key'];

                mail($email,"Bienvenido a FastPacket. Complete su registro",$textoemail,$header);
            }
            return true;
        }
        else
        {
            return false;
        }
        
    }

	public function UsuarioActivado($id)
	{
		$user=$this->selectUsuario($_SESSION["id_usuario"]);		
		$Activado=$user->getActivado();
		return $Activado;
	}

	public function ActivaUsuario($key_activate,$email_activate)
	{

        $arrayResult = $this->db->executeSelectQuery("SELECT * FROM usuarios WHERE email='$email_activate' AND activation_key='$key_activate'");
        if(count($arrayResult)>0){
            //si tiene resultados activamos el usuario
            $result=false;
            foreach($arrayResult as $fila)
            {
                $idusuario=$fila['id'];
                $result = $this->db->executeQuery("UPDATE usuarios SET Activado=1 , activation_key=000 WHERE id=$idusuario ");
            }

            return $result;
        }
        else{
        //si no devolvemos false
            return false;
        
        }


	}

   


}
