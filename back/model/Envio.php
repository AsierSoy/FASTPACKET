<?php

class Envio {

    private $id,$estado,$fechaIni,$fechaFin,$proceso,$altoCm,$anchoCm,$profundoCm,$km,$cantidad,$mailSalida,$nombreSalida,$teleSalida,$diaSalida,$mesSalida,$anoSalida,$cpSalida,$poblacionSalida,$direcSalida,$nPuertaSalida,$empresaSalida,$ciudadSalida,$hora1Salida,$hora2Salida,$attSalida,$comenSalida,$mailDestino,$nombreDestino,$teleDestino,$diaDestino,$mesDestino,$anoDestino,$cpDestino,$poblacionDestino,$direcDestino,$nPuertaDestino,$empresaDestino,$ciudadDestino,$hora1Destino,$hora2Destino,$attDestino,$comenDestino,$id_usuario,$id_coste,$id_categoria,$codeEnvio,$costeEnvio,$idusuarioaceptado;
    
    function __construct($id, $estado, $fechaIni, $fechaFin, $proceso, $altoCm, $anchoCm, $profundoCm, $km, $cantidad, $mailSalida, $nombreSalida, $teleSalida, $diaSalida, $mesSalida, $anoSalida, $cpSalida, $poblacionSalida, $direcSalida, $nPuertaSalida, $empresaSalida, $ciudadSalida, $hora1Salida, $hora2Salida, $attSalida, $comenSalida, $mailDestino, $nombreDestino, $teleDestino, $diaDestino, $mesDestino, $anoDestino, $cpDestino, $poblacionDestino, $direcDestino, $nPuertaDestino, $empresaDestino, $ciudadDestino, $hora1Destino, $hora2Destino, $attDestino, $comenDestino, $id_usuario, $id_coste, $id_categoria, $codeEnvio, $costeEnvio,$idusuarioaceptado) {
        $this->id = $id;
        $this->estado = $estado;
        $this->fechaIni = $fechaIni;
        $this->fechaFin = $fechaFin;
        $this->proceso = $proceso;
        $this->altoCm = $altoCm;
        $this->anchoCm = $anchoCm;
        $this->profundoCm = $profundoCm;
        $this->km = $km;
        $this->cantidad = $cantidad;
        $this->mailSalida = $mailSalida;
        $this->nombreSalida = $nombreSalida;
        $this->teleSalida = $teleSalida;
        $this->diaSalida = $diaSalida;
        $this->mesSalida = $mesSalida;
        $this->anoSalida = $anoSalida;
        $this->cpSalida = $cpSalida;
        $this->poblacionSalida = $poblacionSalida;
        $this->direcSalida = $direcSalida;
        $this->nPuertaSalida = $nPuertaSalida;
        $this->empresaSalida = $empresaSalida;
        $this->ciudadSalida = $ciudadSalida;
        $this->hora1Salida = $hora1Salida;
        $this->hora2Salida = $hora2Salida;
        $this->attSalida = $attSalida;
        $this->comenSalida = $comenSalida;
        $this->mailDestino = $mailDestino;
        $this->nombreDestino = $nombreDestino;
        $this->teleDestino = $teleDestino;
        $this->diaDestino = $diaDestino;
        $this->mesDestino = $mesDestino;
        $this->anoDestino = $anoDestino;
        $this->cpDestino = $cpDestino;
        $this->poblacionDestino = $poblacionDestino;
        $this->direcDestino = $direcDestino;
        $this->nPuertaDestino = $nPuertaDestino;
        $this->empresaDestino = $empresaDestino;
        $this->ciudadDestino = $ciudadDestino;
        $this->hora1Destino = $hora1Destino;
        $this->hora2Destino = $hora2Destino;
        $this->attDestino = $attDestino;
        $this->comenDestino = $comenDestino;
        $this->id_usuario = $id_usuario;
        $this->id_coste = $id_coste;
        $this->id_categoria = $id_categoria;
        $this->codeEnvio = $codeEnvio;
        $this->costeEnvio = $costeEnvio;
        $this->idusuarioaceptado=$idusuarioaceptado;
    }

    function getId() {
        return $this->id;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFechaIni() {
        return $this->fechaIni;
    }

    function getFechaFin() {
        return $this->fechaFin;
    }

    function getProceso() {
        return $this->proceso;
    }

    function getAltoCm() {
        return $this->altoCm;
    }

    function getAnchoCm() {
        return $this->anchoCm;
    }

    function getProfundoCm() {
        return $this->profundoCm;
    }

    function getKm() {
        return $this->km;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getMailSalida() {
        return $this->mailSalida;
    }

    function getNombreSalida() {
        return $this->nombreSalida;
    }

    function getTeleSalida() {
        return $this->teleSalida;
    }

    function getDiaSalida() {
        return $this->diaSalida;
    }

    function getMesSalida() {
        return $this->mesSalida;
    }

    function getAnoSalida() {
        return $this->anoSalida;
    }

    function getCpSalida() {
        return $this->cpSalida;
    }

    function getPoblacionSalida() {
        return $this->poblacionSalida;
    }

    function getDirecSalida() {
        return $this->direcSalida;
    }

    function getNPuertaSalida() {
        return $this->nPuertaSalida;
    }

    function getEmpresaSalida() {
        return $this->empresaSalida;
    }

    function getCiudadSalida() {
        return $this->ciudadSalida;
    }

    function getHora1Salida() {
        return $this->hora1Salida;
    }

    function getHora2Salida() {
        return $this->hora2Salida;
    }

    function getAttSalida() {
        return $this->attSalida;
    }

    function getComenSalida() {
        return $this->comenSalida;
    }

    function getMailDestino() {
        return $this->mailDestino;
    }

    function getNombreDestino() {
        return $this->nombreDestino;
    }

    function getTeleDestino() {
        return $this->teleDestino;
    }

    function getDiaDestino() {
        return $this->diaDestino;
    }

    function getMesDestino() {
        return $this->mesDestino;
    }

    function getAnoDestino() {
        return $this->anoDestino;
    }

    function getCpDestino() {
        return $this->cpDestino;
    }

    function getPoblacionDestino() {
        return $this->poblacionDestino;
    }

    function getDirecDestino() {
        return $this->direcDestino;
    }

    function getNPuertaDestino() {
        return $this->nPuertaDestino;
    }

    function getEmpresaDestino() {
        return $this->empresaDestino;
    }

    function getCiudadDestino() {
        return $this->ciudadDestino;
    }

    function getHora1Destino() {
        return $this->hora1Destino;
    }

    function getHora2Destino() {
        return $this->hora2Destino;
    }

    function getAttDestino() {
        return $this->attDestino;
    }

    function getComenDestino() {
        return $this->comenDestino;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getId_coste() {
        return $this->id_coste;
    }

    function getId_categoria() {
        return $this->id_categoria;
    }

    function getCodeEnvio() {
        return $this->codeEnvio;
    }
    
    function getCosteEnvio() {
        return $this->costeEnvio;
    }

    function getAceptado(){
        return $this->idusuarioaceptado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFechaIni($fechaIni) {
        $this->fechaIni = $fechaIni;
    }

    function setFechaFin($fechaFin) {
        $this->fechaFin = $fechaFin;
    }

    function setProceso($proceso) {
        $this->proceso = $proceso;
    }

    function setAltoCm($altoCm) {
        $this->altoCm = $altoCm;
    }

    function setAnchoCm($anchoCm) {
        $this->anchoCm = $anchoCm;
    }

    function setProfundoCm($profundoCm) {
        $this->profundoCm = $profundoCm;
    }

    function setKm($km) {
        $this->km = $km;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setMailSalida($mailSalida) {
        $this->mailSalida = $mailSalida;
    }

    function setNombreSalida($nombreSalida) {
        $this->nombreSalida = $nombreSalida;
    }

    function setTeleSalida($teleSalida) {
        $this->teleSalida = $teleSalida;
    }

    function setDiaSalida($diaSalida) {
        $this->diaSalida = $diaSalida;
    }

    function setMesSalida($mesSalida) {
        $this->mesSalida = $mesSalida;
    }

    function setAnoSalida($anoSalida) {
        $this->anoSalida = $anoSalida;
    }

    function setCpSalida($cpSalida) {
        $this->cpSalida = $cpSalida;
    }

    function setPoblacionSalida($poblacionSalida) {
        $this->poblacionSalida = $poblacionSalida;
    }

    function setDirecSalida($direcSalida) {
        $this->direcSalida = $direcSalida;
    }

    function setNPuertaSalida($nPuertaSalida) {
        $this->nPuertaSalida = $nPuertaSalida;
    }

    function setEmpresaSalida($empresaSalida) {
        $this->empresaSalida = $empresaSalida;
    }

    function setCiudadSalida($ciudadSalida) {
        $this->ciudadSalida = $ciudadSalida;
    }

    function setHora1Salida($hora1Salida) {
        $this->hora1Salida = $hora1Salida;
    }

    function setHora2Salida($hora2Salida) {
        $this->hora2Salida = $hora2Salida;
    }

    function setAttSalida($attSalida) {
        $this->attSalida = $attSalida;
    }

    function setComenSalida($comenSalida) {
        $this->comenSalida = $comenSalida;
    }

    function setMailDestino($mailDestino) {
        $this->mailDestino = $mailDestino;
    }

    function setNombreDestino($nombreDestino) {
        $this->nombreDestino = $nombreDestino;
    }

    function setTeleDestino($teleDestino) {
        $this->teleDestino = $teleDestino;
    }

    function setDiaDestino($diaDestino) {
        $this->diaDestino = $diaDestino;
    }

    function setMesDestino($mesDestino) {
        $this->mesDestino = $mesDestino;
    }

    function setAnoDestino($anoDestino) {
        $this->anoDestino = $anoDestino;
    }

    function setCpDestino($cpDestino) {
        $this->cpDestino = $cpDestino;
    }

    function setPoblacionDestino($poblacionDestino) {
        $this->poblacionDestino = $poblacionDestino;
    }

    function setDirecDestino($direcDestino) {
        $this->direcDestino = $direcDestino;
    }

    function setNPuertaDestino($nPuertaDestino) {
        $this->nPuertaDestino = $nPuertaDestino;
    }

    function setEmpresaDestino($empresaDestino) {
        $this->empresaDestino = $empresaDestino;
    }

    function setCiudadDestino($ciudadDestino) {
        $this->ciudadDestino = $ciudadDestino;
    }

    function setHora1Destino($hora1Destino) {
        $this->hora1Destino = $hora1Destino;
    }

    function setHora2Destino($hora2Destino) {
        $this->hora2Destino = $hora2Destino;
    }

    function setAttDestino($attDestino) {
        $this->attDestino = $attDestino;
    }

    function setComenDestino($comenDestino) {
        $this->comenDestino = $comenDestino;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setId_coste($id_coste) {
        $this->id_coste = $id_coste;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    function setCodeEnvio($codeEnvio) {
        $this->codeEnvio = $codeEnvio;
    }
    
    function setCosteEnvio($costeEnvio) {
        $this->costeEnvio = $costeEnvio;
    }

 function setAceptado($idusuarioaceptado){
     $this->idusuarioaceptado=$idusuarioaceptado;
 }
    
}
