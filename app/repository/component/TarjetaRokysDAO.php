<?php
require_once('../app/repository/AccesoDB.php');
require_once('../app/model/TarjetaRokys.php');
require_once('../app/repository/design/ITarjetaRokysDAO.php');

class TarjetaRokysDAO implements ITarjetaRokysDAO{
    private $collection;

    public function __construct(){
        $db=AccesoDB::getConnection();
        $this->collection=$db->TarjetaRocky;
    }
    
    public function create($tarjeta_rokys){
        $result=-1;
        if(!empty($tarjeta_rokys)){
            $this->collection->insertOne([
                'UID'=>$tarjeta_rokys->getCod_tarjeta(),
                'estado'=>$tarjeta_rokys->getEstado(),
                'Saldo'=>$tarjeta_rokys->getSaldo()
            ]);
            $result=1;
        }
        return $result;
    }

    public function read($id){
        $result=new TarjetaRokys;
        $document=$this->collection->findOne(array('UID'=> $id));
        if(isset($document)){
            $result->setCod_tarjeta($document['UID']);
            $result->setSaldo($document['Saldo']);
            $result->setEstado($document['estado']);
        }
        return $result;
    }
    
    public function update($tarjeta_rokys){
        $updateResult = $this->collection->updateOne(
            [ 'UID' => $tarjeta_rokys->getCod_tarjeta()],
            [ '$set' => [ 'estado' => $tarjeta_rokys->getEstado() ]]
        );
        return $updateResult;
    }

    public function delete($id){
        
    }

    public function readAll(){
        $listaTarjetasRFID=array();
        $cursor=$this->collection->find();
        if(isset($cursor)){
            foreach($cursos as $document){
                $result=new TarjetaRokys;
                $result->setCod_tarjeta($document['UID']);
                $result->setSaldo($document['Saldo']);
                $result->setEstado($document['Estado']);
                $listaTarjetasRFID[]=$result;
            }
        }
        return $listaTarjetasRFID;
    }

    public function getFirst($cod){
        $result=new TarjetaRokys;
        $document=$this->collection->findOne(array('estado'=> $cod));
        if(isset($document)){
            $result->setCod_tarjeta($document['UID']);
            $result->setSaldo($document['Saldo']);
            $result->setEstado($document['estado']);
            return $result;
        }
        return null;
    }
    

    public function __destruct(){}
}