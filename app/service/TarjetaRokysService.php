<?php 
require_once('GenericService.php');
require_once("../app/repository/component/TarjetaRokysDAO.php");
require_once("../app/repository/DAOFactory.php");

class TarjetaRokysService implements GenericService{
    private $tarjeta_rokys_dao;

    public function __construct(){
        $DAO_Factory_Mongo=DAOFactory::getInstance();
        $this->tarjeta_rokys_dao=$DAO_Factory_Mongo::getTarjetaRokysDAO();
    }
    
    public function create($objeto){
        return $this->tarjeta_rokys_dao->create($objeto);
    }
    public function update($objeto){
        return $this->tarjeta_rokys_dao->update($objeto);
    }
    public function read($id){
        return $this->tarjeta_rokys_dao->read($id);
    }
    public function delete($id){

    }
    public function readAll(){
        return $this->tarjeta_rokys_dao->readAll(); 
    }

    public function getFirst(){
        return $this->tarjeta_rokys_dao->getFirst("INACTIVO");
    }

    public function activarTarjeta(){
        $tarjeta_rokys=$this->getFirst();
        if(isset($tarjeta_rokys)){
            $tarjeta_rokys->setEstado('OFF');
            $this->update($tarjeta_rokys);
        }
        return $tarjeta_rokys;
    }

    public function asignarTarjeta($cod){
        $tarjeta_rokys=$this->read($cod);
        if(isset($tarjeta_rokys)){
            $tarjeta_rokys->setEstado('EATING');
            $this->update($tarjeta_rokys);
        }
        return $tarjeta_rokys;
    }

    public function desactivarTarjeta(){
        $tarjeta_rokys=$this->getFirst();
        if(isset($tarjeta_rokys)){
            $tarjeta_rokys->setEstado('INACTIVO');
            $this->update($tarjeta_rokys);
        }
        return $tarjeta_rokys;
    }

}