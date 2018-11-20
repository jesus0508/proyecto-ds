<?php
class Producto {
	//Atributos
	private $codigo;
	private $nombre;
	private $categoria;
	private $precio;
	private $descripcion;

	//Constructor
	public function __construct() {}

	//Metodos
	public function getCodigo() {
		return $this->codigo;
	}
	public function getNombre() {
		return $this->nombre;
	}
	public function getCategoria() {
		return $this->categoria;
	}
	public function getPrecio() {
		return $this->precio;
	}
	public function getDescripcion() {
		return $this->descripcion;
	}

	public function setCodigo($codigo) {
		$this->codigo = $codigo;
	}

	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	public function setCategoria($categoria) {
		$this->categoria = $categoria;
	}

	public function setPrecio($precio) {
		$this->precio = $precio;
	}

	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	public function toString() {
		$info = "<br>Nombre:" . $this->getNombre();
		$info = "<br>Categoria: " . $this->getCategoria();
		$info = "<br>Descripcion: " . $this->getDescripcion();
		$info = "<br>Precio: " . $this->getDescripcion();
		return $info;
	}

	public function ventanaDesplegable($id_division, $variable) {

	}

	public function agregarProductos(){
		
	}

	public function __destruct() {}
}
?>