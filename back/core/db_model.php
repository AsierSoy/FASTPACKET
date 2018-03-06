<?php

class Db_model {
    
    private $host,$userdb,$passdb,$namedb;
    private $conexion;
    
    function __construct($host, $userdb, $passdb, $namedb) {
        $this->host = $host;
        $this->userdb = $userdb;
        $this->passdb = $passdb;
        $this->namedb = $namedb;
    }

    //Funciones
    private function connectDB(){
        $this->conexion=mysqli_connect($this->host, $this->userdb, $this->passdb, $this->namedb);      
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
    }
    
    private function disconnectDB(){
        mysqli_close($this->conexion);
    }
    
    public function executeQuery($sql){
        $this->connectDB();
        $consulta = mysqli_query($this->conexion,$sql)  or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
        $this->disconnectDB();
        return $consulta;
    }
    
    public function executeSelectQuery($sql){
        $this->connectDB();
        $consulta = mysqli_query($this->conexion,$sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
        $this->disconnectDB();
        
        $nfilas= mysqli_num_rows($consulta);
        $datos=array();
        for($i=0;$i<$nfilas;$i++){
            $fila=  mysqli_fetch_array($consulta);
            $datos []= $fila;
        }
        return $datos;
        
    }
}
