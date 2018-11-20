<?php

require_once('Persona.php');
require_once('TarjetaRokys.php');

class Cliente extends Persona implements JsonSerializable{
    private $correo;
	private $direccion;
	private $tarjeta_rokys;

	public function __construct($dni=null,$nombres=null,$apellidos=null,$numero_telefonico=null,$correo=null,$direccion=null){
		parent::__construct1($dni,$nombres,$apellidos,$numero_telefonico);
		$this->correo=$correo;
		$this->direccion=$direccion;
	}
	
    public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function setTarjetaRokys($tarjeta_rokys){
		$this->tarjeta_rokys=$tarjeta_rokys;
	}

	public function getTarjetaRokys(){
		return $this->tarjeta_rokys;
	}

	public function jsonSerialize() {
        return [
            'dni' => $this->dni,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
			'numero_telefonico' => $this->numero_telefonico,
			'correo' => $this->correo,
			'direccion' => $this->direccion,
			'tarjeta'=> $this->tarjeta_rokys->getCod_tarjeta(),
			'estado'=>$this->tarjeta_rokys->getEstado()
        ];
    }

    public function __destruct(){
		parent::__destruct();
	}
}