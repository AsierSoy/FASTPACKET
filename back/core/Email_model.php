<?php
/**
 * Description of User_model
 *
 * @author roberto
 */
class Email_model extends Main {
    
    public function PlantillaMailUsuarioClave($nombre,$email,$password){

	if(!ini_get('allow_url_fopen')){
		echo "Es necesario activar la directiva allow_url_fopen del php.ini";
		exit;
	}
 		$email_plantilla =file_get_contents('email/email-template-es.txt');
	    $email_plantilla = str_replace('{Usuario}', $nombre, $email_plantilla);
		$email_plantilla = str_replace('{Email}', $email, $email_plantilla);
        $email_plantilla = str_replace('{Clave}', password, $email_plantilla);	
		return $email_plantilla ;
    }
    /*luque_roberto@hotmail.com*/
    
}
