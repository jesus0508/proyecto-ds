<?php
require_once("../app/model/Trabajador.php");

    class MesaController extends Controller{
        public function __constructor(){}
        
        public function index(){
            $this->getView('ver_mesa');
            //echo getcwd();
        }

        public function verMesa($valor){
            $this->getView('ver_mesa');
            //echo getcwd();
        }


    }
