<?php
require_once("../app/model/Producto.php");

class Pedido{
    private $codigo;    
    private $fecha;
    private $estado;
    private $lista_productos=array();

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

    public function getLista_productos(){
        return $this->lista_productos;
    }

    public function setLista_productos($lista_productos){
        $this->lista_productos = $lista_productos;
    }

    public function agregar_producto($producto){
        $this->lista_productos[$producto->getCodigo()]=$producto;
    }

    public function  remover_producto($producto){
        unset($this->lista_productos[$producto->getCodigo()]);
    }

    public function __destruct(){}
}