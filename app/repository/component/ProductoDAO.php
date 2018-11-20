<?php
require_once('../app/repository/AccesoDB.php');
require_once('../app/model/Producto.php');
require_once('../app/repository/design/IProductoDAO.php');
require_once("../app/repository/transfer/ProductoDTO.php");

class ProductoDAO implements IProductoDAO{
    private $collection;

    public function __construct(){
        $bd=AccesoDB::getConnection();
        $this->collection=$bd->Producto;
    }

    public function create($producto){

    }
    public function read($id){
        $document = $this->collection->findOne(array('Codigo' => $id));
        $result=new Producto;
        if(isset($document)){
            $result->setCodigo($document['Codigo']);
            $result->setNombre($document['Nombre']);
            $result->setCategoria($document['Categoria']);
            $result->setPrecio($document['Precio']);
            $result->setDescripcion($document['Descripcion']);
            return $result;
        }
    }

    public function readDTO($id){
        $document = $this->collection->findOne(array('Codigo' => $id));
        $result=new ProductoDTO;
        if(isset($document)){
            $result->setCodigo($document['Codigo']);
            $result->setNombre($document['Nombre']);
            $result->setPrecio($document['Precio']);
            return $result;
        }
    }

    public function update($producto){

    }
    public function delete($id){

    }
    public function readAll(){
        		
    }
 
    public function findProductByCategory($producto,$categoria){
        $producto=new Producto;
        $document=$collection->find();
    }
}