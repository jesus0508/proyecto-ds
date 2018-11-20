<?php 
require_once("../app/model/Trabajador.php");
require_once("../app/service/TrabajadorService.php");

class VerMesasController extends Controller{
    public function __construct(){}
    
    public function index(){
        $this->getView('ver_mesas');
    }

}