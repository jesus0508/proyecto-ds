<?php
require_once 'PedidoDTO.php';
require_once 'ProductoDTO.php';

class PedidoProductoDTO implements JsonSerializable{
    private $codigo; 
    private $fecha;
    private $estado;
    private $nombre;
    private $codigo_producto;
    private $precio;
    private $cantidad;

    public function __construct($pedido_dto,$producto_dto){
        $this->codigo_producto=$producto_dto->getCodigo();
        $this->nombre=$producto_dto->getNombre();
        $this->precio=$producto_dto->getPrecio();
        $this->cantidad=$producto_dto->getCantidad();
        $this->codigo=$pedido_dto->getCodigo();
        $this->estado=$pedido_dto->getEstado();
        $this->fecha=$pedido_dto->getFecha();
    }

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
    
    public function setProductoDTO($producto_dto){
        $this->codigo_producto=$producto_dto->getCodigo();
        $this->nombre=$producto_dto->getNombre();
        $this->precio=$producto_dto->getPrecio();
        $this->cantidad=$producto_dto->getCantidad();
    }

    public function setPedidoDTO($pedido_dto){
        $this->codigo=$pedido_dto->getCodigo();
        $this->estado=$pedido_dto->getEstado();
        $this->fecha=$pedido_dto->getFecha();
    }

    public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getCodigo_producto(){
		return $this->codigo_producto;
	}

	public function setCodigo_producto($codigo_producto){
		$this->codigo_producto = $codigo_producto;
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
        return ['codigo' => $this->codigo,
        'fecha' => $this->fecha,
        'estado' => $this->estado,
        'codigo_producto' => $this->codigo_producto,
        'nombre' => $this->nombre,
        'precio' => $this->precio,
        'cantidad' => $this->cantidad];
    }



    public function __destruct(){}
}