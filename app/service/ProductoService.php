<?php 
require_once('GenericService.php');
require_once("../app/repository/component/ProductoDAO.php");
require_once("../app/repository/DAOFactory.php");


class ProductoService implements GenericService{
    private $producto_dao;

    public function __construct(){
        $DAO_Factory_Mongo=DAOFactory::getInstance();
        $this->producto_dao=$DAO_Factory_Mongo::getProductoDAO();
    }

    public function create($producto){

    }

    public function read($id){
        return $producto=$this->producto_dao->read($id);
    }

    public function readDTO($id){
        return $producto=$this->producto_dao->readDTO($id);
    }

    public function update($objeto){
        return $this->producto_dao->update($objeto);
    }

    public function delete($id){

    }
    public function readAll(){
        return $this->producto_dao->readAll(); 
    }

}