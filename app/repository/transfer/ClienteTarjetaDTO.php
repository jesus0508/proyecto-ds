<?php
class ClienteTarjetaDTO implements JsonSerializable{
    private $dni;
    private $nombre;
    private $apellidos;
    private $cod_tarjeta_rokys;
    private $estado_tarjeta_rokys;
    
    public function __construct($dni=null,$nombres=null,$apellidos=null,$cod_tarjeta_rokys=null,$estado_tarjeta_rokys=null){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->cod_tarjeta_rokys = $cod_tarjeta_rokys;
        $this->estado_tarjeta_rokys = $estado_tarjeta_rokys;
    }

    public function getDni(){
        return $this->dni;
    }
    public function setDni($dni){
        $this->dni = $dni;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    
    public function getCod_tarjeta_rokys(){
        return $this->cod_tarjeta_rokys;
    }
    public function setCod_tarjeta_rokys($cod_tarjeta_rokys){
        $this->cod_tarjeta_rokys = $cod_tarjeta_rokys;
    }

    public function getEstado_tarjeta_rokys(){
        return $this->estado_tarjeta_rokys;
    }
    public function setEstado_tarjeta_rokys($estado_tarjeta_rokys){
        $this->estado_tarjeta_rokys = $estado_tarjeta_rokys;
    }

    public function jsonSerialize() {
        return [
            'dni' => $this->dni,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
			'tarjeta'=> $this->tarjeta_rokys->getCod_tarjeta(),
			'estado'=>$this->tarjeta_rokys->getEstado()
        ];
    }

}

