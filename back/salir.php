<?php 
    include './core/Main.php';
    $login = new Sesion_model();

    if($login->cerrarSesion()){
        header("location:../index.php");
    }
