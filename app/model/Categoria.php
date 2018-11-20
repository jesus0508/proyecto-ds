<?php
class Categoria{
    private $cod_categoria;
    private $nombre;
    private $listaProductos;

    public function __construct(){}

    public function findProduct($nombreProducto){
        foreach($listaProductos as $producto){
            if($nombreProducto===$producto->getNombre()){
                return $producto;
            }
        }
        return null;
    }
    
}