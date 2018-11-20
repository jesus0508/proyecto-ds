<?php
require_once("../app/model/Trabajador.php");
require_once("../app/service/TrabajadorService.php");
require_once("../app/repository/transfer/TrabajadorDTO.php");

class LoginController extends Controller{
        public function __construct(){}
        
        public function index(){
            $this->getView('login');
        }

        public function ingresar_codigo(){
            $codigo=$_POST['password'];
            $trabajador_service=new TrabajadorService;
            $trabajador=$trabajador_service->verificar_codigo($codigo);//Verficar_Codigo
            if($trabajador){
                Session::init();
                Session::add('Trabajador',$trabajador);
                header('location: ../HomeController');
            }else{
                $this->datos['mensaje']="Clave Incorrecta";
                $this->getView('login', $this->datos);
            }
        }    
}