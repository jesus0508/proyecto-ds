<?php
class Rol{
    private $codRol;
    private $nombre;

    public function __construct(){}

	public function getCodRol(){
		return $this->codRol;
	}

	public function setCodRol($codRol){
		$this->codRol = $codRol;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
    }
    
    public function __destruct(){}
}