<?php
include_once("../app/repository/AccesoDB.php");
include_once("../app/model/Trabajador.php");
require_once("../app/repository/transfer/TrabajadorDTO.php");

class TrabajadorDAO{
    private $collection;

    public function __construct(){
        $bd=AccesoDB::getConnection();
        $this->collection=$bd->Persona;
    }

    public function read($codigo){
        $result=new Trabajador;
        $document=$this->collection->findOne(array('Clave'=> $codigo));
        if(isset($document)){
            $result->setDni($document['_id']);
            $result->setNombres($document['Nombres']);
            $result->setApellidos($document['Apellidos']);
            $result->setNumero_telefonico($document['NumTelefono']);
            $result->setCod_trabajador($document['Clave']);
            $result->setSueldo($document['Sueldo']);
            $result->setRol($document['Cargo']);
            return $result;
        }
        return null;
    }

    public function readAll(){
        $listaTrabajadores=array();
        $cursor=$this->collection->find();
        if(isset($cursor)){
            foreach($cursor as $document){
                $result=new Trabajador;
                $result->setDni($document['_id']);
                $result->setNombres($document['Nombres']);
                $result->setApellidos($document['Apellidos']);
                $result->setNumero_telefonico($document['NumTelefono']);
                $result->setCod_trabajador($document['Clave']);
                $result->setSueldo($document['Sueldo']);
                $result->setRol($document['Cargo']);
                $listaTrabajadores[]=$result;
            }
        }
        return $listaClientes;
    }

    public function login($codigo){
        $result=new TrabajadorDTO;
        $document=$this->collection->findOne(array('Clave'=> $codigo));
        if(isset($document)){
            $result->setNombres($document['Nombres']);
            $result->setApellidos($document['Apellidos']);
            $result->setCod_trabajador($document['Clave']);
            $result->setRol($document['Cargo']);
            $result->setEstado($document['Estado']);
            return $result;
        }
        return null;
    }

    public function __destruct(){}
}