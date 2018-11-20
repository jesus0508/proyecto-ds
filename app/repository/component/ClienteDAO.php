<?php
require_once('../app/repository/AccesoDB.php');
require_once('../app/repository/transfer/ClienteDTO.php');
require_once('../app/repository/transfer/ClienteTarjetaDTO.php');
require_once('../app/repository/design/IClienteDAO.php');
require_once('../app/repository/component/TarjetaRokysDAO.php');

class ClienteDAO implements IClienteDAO{
    private $collection;

    public function __construct(){
        $bd=AccesoDB::getConnection();
        $this->collection=$bd->Persona;
    }

    public function create($cliente){
        $result=-10;
        if(!empty($cliente)){
            $this->collection->insertOne([
                'DNI'=>$cliente->getDni(),
                'Nombres'=>$cliente->getNombres(),
                'Apellidos'=>$cliente->getApellidos(),
                'NumTelefono'=>$cliente->getNumero_telefonico(),
                'Correo'=>$cliente->getCorreo(),
                'Direccion'=>$cliente->getDireccion(),
                ]);
            $result=1;
        }
        return $result;
    }

    public function read($id){
        $result=new Cliente;
        $document=$this->collection->findOne(array('DNI'=> $codigo));
        if(isset($document)){
            $result->setDni($document['DNI']);
            $result->setNombres($document['Nombres']);
            $result->setApellidos($document['Apellidos']);
            $result->setNumero_telefonico($document['NumTelefono']);
            $result->setDireccion($document['NumTelefono']);
            $result->setCorreo($document['Correo']);
            return $result;
        }
    }

    public function update($cliente){
        $cod=$cliente->getTarjetaRokys()->getCod_tarjeta();
        $updateResult = $this->collection->updateOne(
            [ 'DNI' => $cliente->getDni()],
            [ '$set' => [ 'Tarjeta' => $cod]]
        );
        return $updateResult;
    }
    
    public function delete($id){}

    public function readAll(){
       $listaClientes=array();
        $cursor=$this->collection->find();
        if(isset($cursor)){
            foreach($cursor as $document){
                $result=new Cliente;
                $result->setDni($document['DNI']);
                $result->setNombres($document['Nombres']);
                $result->setApellidos($document['Apellidos']);
                $result->setNumero_telefonico($document['NumTelefono']);
                $result->setDireccion($document['NumTelefono']);
                $result->setCorreo($document['Correo']);
                $listaClientes[]=$result;
            }
        }
        return $listaClientes;
    }

    public function readAllWithTarjetaRokys(){
        $listaClientes=array();
        $tarjetaDao=new TarjetaRokysDAO;
         $cursor=$this->collection->find(array('Tarjeta'=> array('$ne' => null)));
         if(isset($cursor)){
             foreach($cursor as $document){
                 $result=new Cliente;
                 $result->setDni($document['DNI']);
                 $result->setNombres($document['Nombres']);
                 $result->setApellidos($document['Apellidos']);
                 $result->setNumero_telefonico($document['NumTelefono']);
                 //$result->setDireccion($document['Direccion']);
                 $result->setCorreo($document['Correo']);
                 $cod_tarjeta=$document['Tarjeta'];
                 $tarjeta=$tarjetaDao->read($cod_tarjeta);
                 $result->setTarjetaRokys($tarjeta);
                 $listaClientes[]=$result;
             }
         }
         return $listaClientes;
     }

    public function findbyDNI($codigo){
        $listaClientes=array();
        $tarjetaDao=new TarjetaRokysDAO;
         $cursor=$this->collection->find(array('DNI'=> array('$regex' => $codigo)));
         if(isset($cursor)){
             foreach($cursor as $document){
                 $result=new Cliente;
                 $result->setDni($document['DNI']);
                 $result->setNombres($document['Nombres']);
                 $result->setApellidos($document['Apellidos']);
                 $result->setNumero_telefonico($document['NumTelefono']);
                 $result->setDireccion($document['NumTelefono']);
                 $result->setCorreo($document['Correo']);
                 $cod_tarjeta=$document['Tarjeta'];
                 $tarjeta=$tarjetaDao->read($cod_tarjeta);
                 $result->setTarjetaRokys($tarjeta);
                 $listaClientes[]=$result->jsonSerialize();
             }
         }
         return $listaClientes;
     }


     public function findbyDNI2($codigo){
        $result=new Cliente;
         $tarjetaDao=new TarjetaRokysDAO;
         $document=$this->collection->findOne(array('DNI' => $codigo));
         if(isset($document)){
                 $result->setDni($document['DNI']);
                 $result->setNombres($document['Nombres']);
                 $result->setApellidos($document['Apellidos']);
                 $result->setNumero_telefonico($document['NumTelefono']);
                 $result->setDireccion($document['NumTelefono']);
                 $result->setCorreo($document['Correo']);
                 $cod_tarjeta=$document['Tarjeta'];
                 $tarjeta=$tarjetaDao->read($cod_tarjeta);
                 $result->setTarjetaRokys($tarjeta);
             }
         
         return $result;
     }

    public function __destruct(){}
}
