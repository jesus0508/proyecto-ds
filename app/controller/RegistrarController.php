<?php
require_once("../app/model/Cliente.php");
require_once("../app/service/ClienteService.php");
require_once('../app/model/TarjetaRokys.php');
require_once("../app/service/TarjetaRokysService.php");

class RegistrarController extends Controller{
    public function __constructor(){}

    /** Registrar Cliente 
     * En caso de que existan tarjetas cargara el formulario 
     * Si no muestra un mensaje Tarjetas agotadas*/
    public function index(){
        $tarjeta_rokys_service=new TarjetaRokysService;
        $tarjeta_rokys=$tarjeta_rokys_service->getFirst();
        if(isset($tarjeta_rokys)){
            $this->datos['codigo_tarjeta']=$tarjeta_rokys;
            $this->getView('registro_cliente');
        }else{
            die('Se agotaron las tarjetas!!....');
        }
    }

    public function enviar_registro(){
        $nombre=$_POST['Nombre'];
        $apellidos=$_POST['Apellidos'];
        $dni=$_POST['DNI'];
        $num_telefonico=$_POST['Numero_Telefonico'];
        $direccion=$_POST['Direccion'];
        $correo=$_POST['Correo'];
        $clienteService=new ClienteService;
        $rpta=$clienteService->create(new Cliente($dni,$nombre,$apellidos,$num_telefonico,$correo,$direccion));

        if(count($rpta)==0){
            echo "Usuario Registrado con Exito";
        }else{
            foreach($rpta as $cod_error=>$error){
                echo "Error numero: ".$cod_error." detalles: ".$error."<br>";
            }
            echo "<br>Intentelo otra Vez";
        }
    }
}