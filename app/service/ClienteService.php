<?php 
require_once('GenericService.php');
require_once("../app/repository/component/ClienteDAO.php");
require_once("../app/repository/DAOFactory.php");
require_once("../app/service/TarjetaRokysService.php");

class ClienteService implements GenericService{
    const CIFRAS_DNI=8;
    const CIFRAS_TELEFONO=7;

    private $cliente_dao;

    public function __construct(){
        $DAO_Factory_Mongo=DAOFactory::getInstance();
        $this->cliente_dao=$DAO_Factory_Mongo::getClienteDAO();
    }

    public function create($cliente){
        $error=array();
        if(strlen($cliente->getDni()) !=self::CIFRAS_DNI){
            $error['dni'] = "Cifras del DNI incorrectas";
        }
        if(strlen($cliente->getNumero_telefonico())<self::CIFRAS_TELEFONO){
            $error['telefono'] = "Numero Telefonico Incorrecto";
        }
        if(count($error)==0){
            $this->cliente_dao->create($cliente);
            $this->activar_tarjeta($cliente,$error);
        }
        return $error;
    }

    public function activar_tarjeta($cliente,$error){
        $tarjeta_rokys_service=new TarjetaRokysService;
        $tarjeta_rokys=$tarjeta_rokys_service->activarTarjeta();
        if(isset($tarjeta_rokys)){
            $cliente->setTarjetaRokys($tarjeta_rokys);
            $clienteService->update($cliente);
        }else{
            $error['tarjetas']="No quedan disponibles tarjetas";
        }
    }

    public function asignarTarjeta($cliente,$error=[]){
        $tarjeta_rokys_service=new TarjetaRokysService;
        $tarjeta_rokys=$tarjeta_rokys_service->asignarTarjeta($cliente->getTarjetaRokys()->getCod_tarjeta());
        if(isset($tarjeta_rokys)){
            $cliente->setTarjetaRokys($tarjeta_rokys);
            $this->update($cliente);
        }else{
            $error['tarjetas']="No quedan disponibles tarjetas";
        }
    }

    public function update($objeto){
        return $this->cliente_dao->update($objeto);
    }
    public function read($id){
        return $this->cliente_dao->read($id);
    }
    public function delete($id){

    }
    public function readAll(){
        return $this->cliente_dao->readAll(); 
    }
    public function findbyDNI($dni){
        return $this->cliente_dao->findbyDNI($dni);
    }

    public function findbyDNI2($dni){
        return $this->cliente_dao->findbyDNI2($dni);
    }
    public function readAllWithTarjetaRokys(){
        return $this->cliente_dao->readAllWithTarjetaRokys();
    }


}