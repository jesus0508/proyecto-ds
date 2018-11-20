<?php
abstract class Persona{
    protected $dni;
    protected $nombres;
    protected $apellidos;
    protected $numero_telefonico;
    
    public function __construct(){}
    
    public function __construct1($dni,$nombres,$apellidos,$numero_telefonico){
        $this->dni=$dni;
        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
        $this->numero_telefonico=$numero_telefonico;
    }

    public function getNombres(){
        return $this->nombres;
    }

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getDni(){
        return $this->dni;
    }

    public function setDni($dni){
        $this->dni = $dni;
    }

    public function getNumero_telefonico(){
        return $this->numero_telefonico;
    }

    public function setNumero_telefonico($numero_telefonico){
        $this->numero_telefonico = $numero_telefonico;
    }

    public function __destruct(){}
}