<?php 
require_once('GenericService.php');
require_once("../app/repository/transfer/TrabajadorDTO.php");
require_once("../app/repository/component/TrabajadorDAO.php");

class TrabajadorService implements GenericService{
    private $trabajador_dao;

    public function __construct(){
        $this->trabajador_dao=new TrabajadorDAO;
    }
    public function create($objeto){
        
    }
    public function update($objeto){
        
    }

    public function read($id){
        $trabajador= $this->trabajador_dao->read($id);
        if($trabajador->getEstado()){
            return $trabajador;
        }
        return null;
    }

    public function delete($id){

    }
    public function readAll(){
        return $trabajador_dao->readAll(); 
    }

    public function verificar_codigo($codigo){
        $trabajadorDto= $this->trabajador_dao->login($codigo);
        if($trabajadorDto){
            if($trabajadorDto->getEstado()=="Activo"){
                return $trabajadorDto;
            }
        }
        return null;
    }
}