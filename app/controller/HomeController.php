<?php
require_once("../app/model/Trabajador.php");
require_once("../app/service/TrabajadorService.php");

class HomeController extends Controller{
    public function __constructor(){}

    public function index(){
        $this->getView('home');
    }

    public function verMesa(){

    }
}
