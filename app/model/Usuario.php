<?php
class Usuario{
    private $clave;
    private $estado;
    private $rol;

    public function __construct(){}
    
    public function getClave(){
        return $this->clave;
    }

    public function setClave($clave){
        $this->clave = $clave;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getRol(){
        return $this->rol;
    }

    public function setRol($rol){
        $this->rol = $rol;
    }

    public function __destruct(){}
}