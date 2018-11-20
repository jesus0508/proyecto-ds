<?php
require_once("../app/model/Producto.php");
require_once("../app/service/ProductoService.php");
require_once("../app/service/PedidoService.php");
require_once("../app/repository/transfer/PedidoProductoDTO.php");
require_once("../app/repository/transfer/ProductoDTO.php");

class IngresoController extends Controller{

    public function __constructor(){}

    public function index(){
        $this->getView('ingreso');
    }

    public function ver_detalles($id){
        Session::init();
        $pedido=Session::get('pedido');

        $this->datos['mesa']=$pedido['cod_pedido'];
        $this->datos['pedidos']=$pedido['productos'];

        $producto_service=new ProductoService;
        $producto=$producto_service->read($id);
        $this->datos['producto']=$producto;
        $this->datos['monto']=$this->calcularMonto($this->datos['pedidos']);
        $this->getView('ingreso');
    }

    public function asignar_pedido($cod_pedido){
        Session::init();
        $pedido_service=new PedidoService;
        
        $pedido=$pedido_service->read($cod_pedido);
        
        $lista_productos=$pedido_service->readAllByMesa($cod_pedido);
        //var_dump($lista_productos);
        $valor=array('cod_pedido'=>$cod_pedido,'productos'=>$lista_productos);
        Session::add('pedido',$valor);
        $pedido=Session::get('pedido');
        //var_dump($pedido);
        $this->datos['mesa']=$pedido['cod_pedido'];
        $this->datos['pedidos']=$pedido['productos'];
        $this->datos['monto']=$this->calcularMonto($this->datos['pedidos']);

        $this->getView('ingreso');
    }

    public function agregar_producto($id){
        //$id='P0001';
        $id_producto=$_POST['id_producto'];
        $cantidad=$_POST['cantidad'];


        Session::init();
        $pedido_service=new PedidoService;
        $productoDTO=$pedido_service->registrar_producto($id,$id_producto,$cantidad);
        
        $producto_service=new ProductoService;
        $producto=$producto_service->read($id_producto);
        $pedido=Session::get('pedido');
        Session::remove($id);
        $pedido['productos']=$pedido_service->readAllByMesa($id);

        $valor=array('cod_pedido'=>$id,'productos'=> $pedido['productos']);
        Session::add('pedido',$valor);
        $pedido=Session::get('pedido');
        
        $this->datos['mesa']=$pedido['cod_pedido'];
        $this->datos['pedidos']=$pedido['productos'];
        $this->datos['monto']=$this->calcularMonto($this->datos['pedidos']);
        //var_dump($this->datos['pedidos']);
        $this->getView('ingreso');
    }

    public function eliminar_producto($id){
        $pedido_service=new PedidoService;
        $pedido=$pedido_service->remover_producto($id);
        echo json_encode($pedido);
    }


    public function calcularMonto($lista){
        $suma=0.0;
        foreach($lista as $iterador){
            $suma+=$iterador->getPrecio()*$iterador->getCantidad();
        }
        return $suma;
    }

}
