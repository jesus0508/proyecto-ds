<?php
class TarjetaRokys implements JsonSerializable{
    private $cod_tarjeta;
    private $saldo;
    private $fecha_vencimiento;
    private $estado;
	private $cliente;

    public function __construct(){}
        
	public function getCod_tarjeta(){
		return $this->cod_tarjeta;
	}

	public function setCod_tarjeta($cod_tarjeta){
		$this->cod_tarjeta = $cod_tarjeta;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function getFecha_vencimiento(){
		return $this->fecha_vencimiento;
	}

	public function setFecha_vencimiento($fecha_vencimiento){
		$this->fecha_vencimiento = $fecha_vencimiento;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getCliente(){
		return $this->cliente;
	}

	public function setCliente($cliente){
		$this->cliente=$cliente;
	}

	public function jsonSerialize() {
        return [
            'tarjeta' => $this->cod_tarjeta,
            'saldo' => $this->saldo,
            'fecha_vencimiento' => $this->fecha_vencimiento,
			'estado' => $this->estado
        ];
    }

    public function __destruct(){}
}