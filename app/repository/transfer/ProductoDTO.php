<?php
class ProductoDTO implements JsonSerializable{
    private $nombre;
    private $codigo;
    private $precio;
    private $cantidad;

    public function __construct(){}
        
    public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setPrecio($precio){
		$this->precio = $precio;
	}

	public function getCantidad(){
		return $this->cantidad;
	}

	public function setCantidad($cantidad){
		$this->cantidad = $cantidad;
	}

	public function jsonSerialize() {
        return [
            'codigo' => $this->codigo,
            'nombre' => $this->nombre,
            'precio' => $this->precio,
			'cantidad' => $this->cantidad
        ];
	}
	
    public function __destruct(){}
}