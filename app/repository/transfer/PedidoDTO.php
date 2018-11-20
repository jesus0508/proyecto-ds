<?php
class PedidoDTO implements JsonSerializable{
    private $codigo; 
    private $fecha;
    private $estado;

    public function __construct(){}

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    
    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }
	public function jsonSerialize() {
        return [
        ];
	}
    public function __destruct(){}
}