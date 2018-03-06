<?php
/**
 * Description of Cms_model
 * Funciones de ejecucion
 * @author Asier
 */
class Cms_model extends Main {
    
    public function insertarEnvio($estado,$proceso,$nombreSalida, $teleSalida, $mailSalida, $diaSalida, $hora1Salida, $hora2Salida, $ciudadSalida, $cpSalida, $poblacionSalida, $direcSalida, $empresaSalida, $attSalida, $comenSalida, $nombreDestino, $teleDestino, $mailDestino, $diaDestino, $hora1Destino, $hora2Destino, $ciudadDestino, $cpDestino, $poblacionDestino, $direcDestino, $empresaDestino, $attDestino, $comenDestino, $altoCm, $anchoCm, $profundoCm, $km, $cantidad, $codeEnvio, $id_usuario){
        return $this->db->executeQuery("INSERT INTO envios (estado,proceso,nombreSalida,teleSalida,mailSalida,fechaIni,diaSalida,hora1Salida,hora2Salida,ciudadSalida,cpSalida,poblacionSalida,direcSalida,empresaSalida,attSalida,comenSalida,nombreDestino,teleDestino,mailDestino,diaDestino,hora1Destino,hora2Destino,ciudadDestino,cpDestino,poblacionDestino,direcDestino,empresaDestino,attDestino,comenDestino,altoCm,anchoCm,profundoCm,km,cantidad,codeEnvio,id_usuario) VALUES ('$estado','$proceso','$nombreSalida','$teleSalida','$mailSalida',NOW(),'$diaSalida','$hora1Salida','$hora2Salida','$ciudadSalida','$cpSalida','$poblacionSalida','$direcSalida','$empresaSalida','$attSalida','$comenSalida','$nombreDestino', '$teleDestino', '$mailDestino','$diaDestino','$hora1Destino','$hora2Destino','$ciudadDestino','$cpDestino','$poblacionDestino','$direcDestino','$empresaDestino','$attDestino','$comenDestino','$altoCm','$anchoCm','$profundoCm','$km','$cantidad','$codeEnvio','$id_usuario')");
    }
    
    public function selectEnvios($orden){
        $arrayArrays=  $this->db->executeSelectQuery("SELECT * FROM envios ORDER BY $orden");
        
        $arrayObjEnvio = array();
        foreach ($arrayArrays as $fila){
            $envio = new Envio($fila['id'], $fila['estado'], $fila['fechaIni'], $fila['fechaFin'], $fila['proceso'], $fila['altoCm'], $fila['anchoCm'], $fila['profundoCm'], $fila['km'], $fila['cantidad'], $fila['mailSalida'], $fila['nombreSalida'], $fila['teleSalida'], $fila['diaSalida'], $fila['mesSalida'], $fila['anoSalida'], $fila['cpSalida'], $fila['poblacionSalida'], $fila['direcSalida'], $fila['nPuertaSalida'], $fila['empresaSalida'], $fila['ciudadSalida'], $fila['hora1Salida'], $fila['hora2Salida'], $fila['attSalida'], $fila['comenSalida'], $fila['mailDestino'], $fila['nombreDestino'], $fila['teleDestino'], $fila['diaDestino'], $fila['mesDestino'], $fila['anoDestino'], $fila['cpDestino'], $fila['poblacionDestino'], $fila['direcDestino'], $fila['nPuertaDestino'], $fila['empresaDestino'], $fila['ciudadDestino'], $fila['hora1Destino'], $fila['hora2Destino'], $fila['attDestino'], $fila['comenDestino'], $fila['id_usuario'], $fila['id_coste'], $fila['id_categoria'], $fila['codeEnvio'], $fila['costeEnvio'], $fila['id_usuario_aceptado']);
        
            $arrayObjEnvio []= $envio;
        }
        return $arrayObjEnvio;
    }
    
    
    public function selectEnviosLibres($orden){
        $arrayArrays=  $this->db->executeSelectQuery("SELECT * FROM envios WHERE id_usuario_aceptado=0 ORDER BY $orden");
        
        $arrayObjEnvio = array();
        foreach ($arrayArrays as $fila){
            $envio = new Envio($fila['id'], $fila['estado'], $fila['fechaIni'], $fila['fechaFin'], $fila['proceso'], $fila['altoCm'], $fila['anchoCm'], $fila['profundoCm'], $fila['km'], $fila['cantidad'], $fila['mailSalida'], $fila['nombreSalida'], $fila['teleSalida'], $fila['diaSalida'], $fila['mesSalida'], $fila['anoSalida'], $fila['cpSalida'], $fila['poblacionSalida'], $fila['direcSalida'], $fila['nPuertaSalida'], $fila['empresaSalida'], $fila['ciudadSalida'], $fila['hora1Salida'], $fila['hora2Salida'], $fila['attSalida'], $fila['comenSalida'], $fila['mailDestino'], $fila['nombreDestino'], $fila['teleDestino'], $fila['diaDestino'], $fila['mesDestino'], $fila['anoDestino'], $fila['cpDestino'], $fila['poblacionDestino'], $fila['direcDestino'], $fila['nPuertaDestino'], $fila['empresaDestino'], $fila['ciudadDestino'], $fila['hora1Destino'], $fila['hora2Destino'], $fila['attDestino'], $fila['comenDestino'], $fila['id_usuario'], $fila['id_coste'], $fila['id_categoria'], $fila['codeEnvio'], $fila['costeEnvio'], $fila['id_usuario_aceptado']);
        
            $arrayObjEnvio []= $envio;
        }
        return $arrayObjEnvio;
    }
    public function selectMisEnvios($orden,$idusuario){
        $arrayArrays=  $this->db->executeSelectQuery("SELECT * FROM envios WHERE id_usuario=$idusuario    ORDER BY $orden");
        
        $arrayObjEnvio = array();
        foreach ($arrayArrays as $fila){
            $envio = new Envio($fila['id'], $fila['estado'], $fila['fechaIni'], $fila['fechaFin'], $fila['proceso'], $fila['altoCm'], $fila['anchoCm'], $fila['profundoCm'], $fila['km'], $fila['cantidad'], $fila['mailSalida'], $fila['nombreSalida'], $fila['teleSalida'], $fila['diaSalida'], $fila['mesSalida'], $fila['anoSalida'], $fila['cpSalida'], $fila['poblacionSalida'], $fila['direcSalida'], $fila['nPuertaSalida'], $fila['empresaSalida'], $fila['ciudadSalida'], $fila['hora1Salida'], $fila['hora2Salida'], $fila['attSalida'], $fila['comenSalida'], $fila['mailDestino'], $fila['nombreDestino'], $fila['teleDestino'], $fila['diaDestino'], $fila['mesDestino'], $fila['anoDestino'], $fila['cpDestino'], $fila['poblacionDestino'], $fila['direcDestino'], $fila['nPuertaDestino'], $fila['empresaDestino'], $fila['ciudadDestino'], $fila['hora1Destino'], $fila['hora2Destino'], $fila['attDestino'], $fila['comenDestino'], $fila['id_usuario'], $fila['id_coste'], $fila['id_categoria'], $fila['codeEnvio'], $fila['costeEnvio'], $fila['id_usuario_aceptado']);
            
            $arrayObjEnvio []= $envio;
        }
        return $arrayObjEnvio;
    }

    public function selectMisEnviosAceptados($orden,$idusuario){
        $arrayArrays=  $this->db->executeSelectQuery("SELECT * FROM envios WHERE id_usuario_aceptado=$idusuario    ORDER BY $orden");
        
        $arrayObjEnvio = array();
        foreach ($arrayArrays as $fila){
            $envio = new Envio($fila['id'], $fila['estado'], $fila['fechaIni'], $fila['fechaFin'], $fila['proceso'], $fila['altoCm'], $fila['anchoCm'], $fila['profundoCm'], $fila['km'], $fila['cantidad'], $fila['mailSalida'], $fila['nombreSalida'], $fila['teleSalida'], $fila['diaSalida'], $fila['mesSalida'], $fila['anoSalida'], $fila['cpSalida'], $fila['poblacionSalida'], $fila['direcSalida'], $fila['nPuertaSalida'], $fila['empresaSalida'], $fila['ciudadSalida'], $fila['hora1Salida'], $fila['hora2Salida'], $fila['attSalida'], $fila['comenSalida'], $fila['mailDestino'], $fila['nombreDestino'], $fila['teleDestino'], $fila['diaDestino'], $fila['mesDestino'], $fila['anoDestino'], $fila['cpDestino'], $fila['poblacionDestino'], $fila['direcDestino'], $fila['nPuertaDestino'], $fila['empresaDestino'], $fila['ciudadDestino'], $fila['hora1Destino'], $fila['hora2Destino'], $fila['attDestino'], $fila['comenDestino'], $fila['id_usuario'], $fila['id_coste'], $fila['id_categoria'], $fila['codeEnvio'], $fila['costeEnvio'], $fila['id_usuario_aceptado']);
            
            $arrayObjEnvio []= $envio;
        }
        return $arrayObjEnvio;
    }


    public function envioDeCode($nombreDestino,$mailDestino,$codeEnvio){
        $header="To: $nombreDestino <$mailDestino>"."\r\n";
        $header .= "From: FastPacket <asier.com@gmail.com>";
        $envio=mail($mailDestino,"Esto es el código que tendras que dar al mensajero de FastPacket","Hola $nombreDestino, para poder cerrar el envio deberas darle al mensajero: $mailDestino y $codeEnvio",$header);
        
        if($envio){
            return true;
        }else {
            return false;
        }
        
    }
    
    
}