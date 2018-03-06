<?php
class Login_model extends Main {
        //funciones de login
    public function comprobarUsuario($email,$password){
        $codepass = sha1($password);
        $arrayResult = $this->db->executeSelectQuery("SELECT * FROM usuarios WHERE email='$email' AND password='$codepass' ");
        if( count($arrayResult)>0 ){
            foreach ($arrayResult as $fila){
                return new Usuario($fila['id'], $fila['email'], $fila['nombre'], $fila['apellido'], $fila['password'], $fila['dni'], $fila['vehiculo'], $fila['tipoUser'], $fila['fecha_nacimiento'], $fila['avatar'],$fila['Activado'],$fila['fecha_registro']) ;
            }
        }else {
            return false;
        }
        
    }
    
    public function insertUsuario($email,$nombre,$apellido,$password,$dni,$vehiculo,$tipoUser,$diaNacimiento){
        $arrayResult = $this->db->executeSelectQuery("SELECT * FROM usuarios WHERE email='$email' ");
        
        if(count($arrayResult)>0 ){
            return false;
        }else {
           $Codepass = sha1($password);
		   $random_key = md5(openssl_random_pseudo_bytes(32));
           
		   $result = $this->db->executeQuery("INSERT INTO usuarios (email,nombre,apellido,password,dni,vehiculo,tipoUser,fecha_nacimiento,activation_key,Activado) VALUES ('$email','$nombre','$apellido','$Codepass','$dni','$vehiculo','$tipoUser','$diaNacimiento','$random_key','0')");
		   
			if ($result){
			//Si es correcto enviamos un email indicando usuario password y la url para que confirme su email y podamos activar su cuenta
				$header="To: $nombre <$email>"."\r\n";
				$header .= "From: Administrador <admin@cms.es>";
				$textoemail="$nombre, bienvenido a Fastpacket";
				$textoemail.="Gracias por registrarse en nuestro sitio.<br/>";
				$textoemail.="Su cuenta ha sido creada, y debe ser activada antes de poder ser utilizada.<br/>";
				$textoemail.="Para activar la cuenta, haga click en el siguiente enlace o copielo en la barra de direcciones del navegador: ";
                $textoemail.=" http://fastpacket.rivasruido.es/back/activate.php?email=$email&activation=".$random_key;
				

				mail($email,"Bienvenido a FastPacket. Complete su registro",$textoemail,$header);
			}
			else
			{
			//handle the error here
			}

			
			return $result;
		   //Aviso envio GUID unico para activar la cuenta
        }
        
    }

	

    public function generarPass(){
        $cadena="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $longitudCadena= strlen($cadena);
        
        $password="";
        for($i=0; $i<6; $i++){
            $pos=  rand(0, $longitudCadena-1);
            $password .= substr($cadena, $pos, 1);
        }
        return $password;
        
    }
    public function recuperarPass($email){
      $result=false;
        $arrayResult = $this->db->executeSelectQuery("SELECT * FROM usuarios WHERE email='$email' ");
        if(count($arrayResult)>0){
            $password=$this->generarPass();
            $passCode=sha1($password);
            
            $result = $this->db->executeQuery("UPDATE usuarios SET password='$passCode' WHERE email='$email' ");
            

			if ( $result === true){
				//Si es correcto enviamos un email con la nueva contraseña
                $nombre ='';
				foreach($arrayResult as $fila){
					$nombre = $fila['nombre'];
				}
				$header="To: $nombre <$email>"."\r\n";
				$header .= "From: Administrador <admin@cms.es>";
				mail($email,"Recuperación de contraseña para App FastPacket","Hola $nombre, para poder acceder a tu panel de administración debes ingresar estos datos: $email y $password",$header);
          
                return true;
			}
			else
			{
			//handle the error here
                return false;
			}
              
            
            
        }else{
            return false;
        }
    }
}
