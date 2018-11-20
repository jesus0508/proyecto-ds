<?php 
require_once('GenericService.php');
require_once("../app/repository/component/PedidoDAO.php");
require_once("../app/repository/DAOFactory.php");
require_once("../app/model/Producto.php");
require_once("../app/service/ProductoService.php");
require_once("../app/repository/transfer/PedidoDTO.php");
require_once("../app/repository/transfer/ProductoDTO.php");
require_once("../app/repository/transfer/PedidoProductoDTO.php");

class PedidoService implements GenericService{
    private $pedido_dao;

    public function __construct(){
        $DAO_Factory_Mongo=DAOFactory::getInstance();
        $this->pedido_dao=$DAO_Factory_Mongo::getPedidoDAO();
    }

    public function create($id){
        return $this->pedido_dao->create($id);
    }

    public function read($id){
        return $this->pedido_dao->read($id);
    }

    public function update($objeto){
        return $this->pedido_dao->update($objeto);
    }

    public function delete($id){

    }
    public function readAll(){
        return $this->pedido_dao->readAll(); 
    }

    public function remover_producto($id){
        
    }

    public function registrar_producto($id,$id_producto,$cantidad){

        $pedidoDTO=$this->read($id);
        if(!isset($pedidoDTO)){
            $pedidoDTO=$this->create($id);
        }

        /*Seleccionado por el cliente */
        $producto_service=new ProductoService;
        $productoDTO=$producto_service->readDTO($id_producto);
        
        
        /**Si el producto existe */
        $producto_pedido=$this->findByCodProducto($id,$id_producto);
        if(isset($producto_pedido)){
            $cantidad+=$producto_pedido->getCantidad();
            $productoDTO->setCantidad($cantidad);
            $this->pedido_dao->actualizar_producto($id,$productoDTO);
        }else{
            $productoDTO->setCantidad($cantidad);
            $this->pedido_dao->agregar_producto($id,$productoDTO);
        }
        
        

        $pedido_productoDTO=new PedidoProductoDTO($pedidoDTO,$productoDTO);

        return $productoDTO;
    }
    public function readAllByMesa($cod_pedido){
        return $this->pedido_dao->readAllByMesa($cod_pedido);
    }

    public function actualizarPedido($cod_pedido,$cod_producto){
        return $this->pedido_dao->actualizarPedido($cod_pedido,$cod_producto);
    }

    public function findByCodProducto($id,$cod_producto){
        return $this->pedido_dao->findByCodProducto($id,$cod_producto);
    }
}