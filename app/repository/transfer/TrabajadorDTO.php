<?php
require_once 'PersonaDTO.php';

class TrabajadorDTO extends PersonaDTO implements JsonSerializable{
    private $cod_trabajador;
    private $sueldo;
    private $rol;
	private $estado;

    public function __construct(){
        /*parent::__construct();*/
    }

	public function getCod_trabajador(){
		return $this->cod_trabajador;
	}

	public function setCod_trabajador($cod_trabajador){
		$this->cod_trabajador = $cod_trabajador;
	}

	public function getSueldo(){
		return $this->sueldo;
	}

	public function setSueldo($sueldo){
		$this->sueldo = $sueldo;
	}

	public function getRol(){
        return $this->rol;
	}

	public function setRol($rol){
		$this->rol = $rol;
	}
	
	public function getEstado(){
        return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
    }	

	public function jsonSerialize() {
        return [
            'dni' => $this->dni,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
			'numero_telefonico' => $this->numero_telefonico,
			'cod_trabajador' => $this->cod_trabajador,
			'sueldo' => $this->sueldo,
			'rol'=> $this->rol,
			'estado'=> $this->estado
        ];
    }
        
    public function __destruct(){}
}