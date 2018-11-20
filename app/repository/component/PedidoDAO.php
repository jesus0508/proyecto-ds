<?php
    require_once('../app/repository/AccesoDB.php');
    require_once("../app/model/Pedido.php");
    require_once("../app/model/Producto.php");
    require_once("../app/repository/design/IPedidoDAO.php");
    require_once("../app/repository/transfer/PedidoDTO.php");
    require_once("../app/repository/transfer/ProductoDTO.php");

class PedidoDAO implements IPedidoDAO{
    private $collection;

    public function __construct(){
        $bd=AccesoDB::getConnection();
        $this->collection=$bd->Pedido;
    }

    public function create($pedido){
        $result=-10;
        if(!empty($pedido)){
            $this->collection->insertOne([
                'cod_Pedido'=>$pedido->getCodigo(),
                'estado'=>$pedido->getEstado(),
                'fechaPedido'=>$pedido->getFecha()
                ]);
            $result=1;
        }
        return $result;
    }

    public function read($id){
        $result=new PedidoDTO;

        $document=$this->collection->findOne(array('cod_Pedido'=> $id));

        if($document){
            $result->setCodigo($document['cod_Pedido']);
            $result->setEstado($document['estado']);
            $result->setFecha($document['fechaPedido']);
            return $result;
        }
        return null;
    }

    public function update($pedido){

    }
    public function delete($id){

    }
    public function readAll(){

    }
    public function readAllByMesa($id){
         $productoDao=new ProductoDAO;
         $listaProductos=array();
         $cursor=$this->collection->findOne(array('cod_Pedido'=> $id));
         if(isset($cursor)){
            foreach($cursor['productos'] as $product){
                    $result=new ProductoDTO;
                    if(isset($product)){
                        $cod=$product['Cod_product'];
                        $result->setCodigo($cod);
                        $producto_detalle=$productoDao->read($cod);
                        $result->setNombre($producto_detalle->getNombre());
                        $result->setPrecio($producto_detalle->getPrecio());
                        $result->setCantidad($product['cantidad']);
                        $listaProductos[]=$result;
                    }
                 }
            }
         return $listaProductos;
    }

    public function actualizar_producto($cod_pedido,$producto){
        if(!empty($cod_pedido)){
            $updateResult = $this->collection->updateOne(
                [ 'cod_Pedido' => $cod_pedido , 'productos.Cod_product'=>$producto->getCodigo()],
                ['$set'=> [ 'productos.$' => [ 'Cod_product'=>$producto->getCodigo(),
                                    'cantidad'=> $producto->getCantidad() ]
                                ]  
                ]
            );
            return $updateResult;
        }  
    }

    public function agregar_producto($cod_pedido,$producto){
        if(!empty($cod_pedido)){
            $updateResult = $this->collection->updateOne(
                [ 'cod_Pedido' => $cod_pedido],
                ['$addToSet'=> ['productos'=> [ 'Cod_product'=>$producto->getCodigo(),
                                    'cantidad'=> $producto->getCantidad() ]
                                ]  
                ]
            );
            return $updateResult;
        }  
    }

    public function findByCodProducto($cod_pedido,$cod_producto){
        $productoDao=new ProductoDAO;
        $cursor=$this->collection->findOne(array('cod_Pedido'=> $cod_pedido));
        if(isset($cursor)){
           foreach($cursor['productos'] as $product){
                   $result=new ProductoDTO;
                   if(isset($product) && $product['Cod_product']==$cod_producto){
                       $cod=$product['Cod_product'];
                       $result->setCodigo($cod);
                       $producto_detalle=$productoDao->read($cod);
                       $result->setNombre($producto_detalle->getNombre());
                       $result->setPrecio($producto_detalle->getPrecio());
                       $result->setCantidad($product['cantidad']);
                       return $result;
                   }
                }
           }
           return null;
    }
}
