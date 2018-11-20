<?php
class CategoriaDTO{
    private $cod_categoria;
    private $nombre;
    private $lista_productos;

    public function __construct(){}

    public function find_product($nombre_producto){
        foreach($lista_productos as $producto){
            if($nombre_producto===$producto->getNombre()){
                return $producto;
            }
        }
        return null;
    }
    
}