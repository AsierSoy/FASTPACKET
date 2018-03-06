<?php
/*
 * Fecha creación: 24 Diciembrea 2014
 * Fecha de última actualización: 2016
 * Versión: 1.0
 * Autor: Asier Sogorb
 * Aplicación: FastPacket
 * Empresa: Asier
 */
error_reporting(E_ALL);
ini_set('display_errors', 'On');


include './core/db_model.php';
include './core/Cms_model.php';
include './core/Login_model.php';
include './core/Sesion_model.php';
include './core/User_model.php';
include './model/Usuario.php';
include './model/Envio.php';
include './model/Categoria.php';
include './core/common.php';
class Main {

    public $db;

    function __construct() {
        include './inc/conexion.php';
        $this->db = new Db_model($host, $userdb, $passdb, $namedb);
    }


}
