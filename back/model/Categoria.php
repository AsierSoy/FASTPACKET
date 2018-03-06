<?php

class Categoria {
    private $id,$prioridad;
    
    function __construct($id, $prioridad) {
        $this->id = $id;
        $this->prioridad = $prioridad;
    }
    function getId() {
        return $this->id;
    }

    function getPrioridad() {
        return $this->prioridad;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPrioridad($prioridad) {
        $this->prioridad = $prioridad;
    }


    
}
