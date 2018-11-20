<?php
include_once("AccesoDB.php");
include_once("../app/model/Usuario.php");

class UsuarioDAO{
    public function construct(){}

    public function read($clave){
        $bd=AccesoDB::getConnection();
        $collection=$bd->usuario;
        $result=new Usuario;
        $document=$collection->findOne(array('codigo'=>$clave));
        if(isset($document)){
            $result->setClave($document['codigo']);
            $result->setRol($document['rol']);
            $result->setEstado($document['estado']);
            return $result;
        }else{
            die('Acceso Denegado');
        }
    }

}