<?php 
include_once("../app/repository/component/ClienteDAO.php");
include_once("../app/repository/component/TarjetaRokysDAO.php");
include_once("../app/repository/component/TrabajadorDAO.php");
include_once("../app/repository/component/PedidoDAO.php");
include_once("../app/repository/component/ProductoDAO.php");

class DAOFactory{
    private static $daoFac;

    private function __construct(){
    }

    public static function getInstance(){
        if(!isset(self::$daoFac)){
            self::$daoFac=new self;
        }
        return self::$daoFac;
    }

    public static function getClienteDAO(){
        return new ClienteDAO;
    }

    public static function getTrabajadorDAO(){
        return  new TrabajadorDAO;
    }

    public static function getProductoDAO(){
        return  new ProductoDAO;
    }

    public  static function getPedidoDAO(){
        return  new PedidoDAO;
    }

    public static function getTarjetaRokysDAO(){
        return  new TarjetaRokysDAO;
    }
}