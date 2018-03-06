<?php
/**
 * Description of Usuario
 *
 * @author mcacbook
 */
class Usuario {

    private $id,$email,$nombre,$apellido,$password,$dni,$vehiculo,$tipoUser,$fechaNacimiento,$avatar,$Activado,$fecha_registro;
    
    function __construct($id, $email, $nombre, $apellido, $password, $dni, $vehiculo, $tipoUser, $fechaNacimiento,$avatar,$Activado,$fecha_registro) {
        $this->id = $id;
        $this->email = $email;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->password = $password;
        $this->dni = $dni;
        $this->vehiculo = $vehiculo;
        $this->tipoUser = $tipoUser;
        $this->fechaNacimiento = $fechaNacimiento;       
        $this->Activado = $Activado;
		$this->fecha_registro = $fecha_registro;
    }

	function getActivado() {
        return $this->Activado;
    }
	 function getfecha_registro() {
        return $this->fecha_registro;
    }

    function getId() {
        return $this->id;
    }
    
    function getEmail() {
        return $this->email;
    }
    

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getPassword() {
        return $this->password;
    }

    function getDni() {
        return $this->dni;
    }

    function getVehiculo() {
        return $this->vehiculo;
    }

    function getTipoUser() {
        return $this->tipoUser;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }



    function getAvatar() {
        return $this->avatar;
    }
    
    
	function setActivado($Activado) {        
		 $this->Activado = $Activado;
    }
    function setfecha_registro($fecha_registro) {        
		 $this->fecha_registro = $fecha_registro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }
    
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setVehiculo($vehiculo) {
        $this->vehiculo = $vehiculo;
    }

    function setTipoUser($tipoUser) {
        $this->tipoUser = $tipoUser;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }
        
    function setAvatar($avatar) {
        $this->avatar = $avatar;
    }


    
    
    
    
}
