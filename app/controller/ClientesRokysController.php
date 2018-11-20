<?php
require_once("../app/model/Cliente.php");
require_once("../app/model/Trabajador.php");
require_once("../app/service/ClienteService.php");
require_once("../app/service/TarjetaRokysService.php");

class ClientesRokysController extends Controller{

    public function __constructor(){}

    public function index(){
            $cliente_service=new ClienteService;
            $clientes=$cliente_service->readAllWithTarjetaRokys();
            $this->datos['lista_clientes']=$clientes;
            $this->getView('ver_clientes'); 
    }
    public function listar(){

    }

    public function filtrar(){
        $cod=$_POST['DNI'];
        $cliente_service=new ClienteService;
        $clientes=$cliente_service->findByDNI($cod);
        $this->datos['lista_clientes']=$clientes;
        $this->getView('ver_clientes'); 
    }



    public function filtrarFetch(){
        $cod=$_POST['DNI'];
        $cliente_service=new ClienteService;
        $clientes=$cliente_service->findByDNI($cod);
        echo json_encode($clientes);
    }

    public function asignarTarjeta($cod){
        $cliente_service=new ClienteService;
        $clientes=$cliente_service->findByDNI2($cod);
        $cliente_service->asignarTarjeta($clientes);
        echo json_encode($clientes);
    }

}