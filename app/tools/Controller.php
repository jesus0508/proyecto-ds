<?php
    require_once 'Session.php';
    require_once '../app/model/Trabajador.php';

abstract class Controller{
        protected $datos=array();

        public function __construct(){}
        
        protected function getModel($modelo){
            require_once '../model/'.$modelo.'.php';
            return new $modelo();
        }

        protected function getView($vista){
            //../app/view/'.$vista.'.php'
            Session::init();
           if(!(Session::getStatus()===1 || empty(Session::get('Trabajador'))) || $vista=='login'){
                if(file_exists('../app/view/'.$vista.'.php')){
                    $trabajador=Session::get('Trabajador');
                    $this->datos['usuario']=$trabajador;
                    //var_dump($this->datos);
                    require_once '../app/view/'.$vista.'.php';
                }else{
                    die('La vista no existe');
                }
            }else{
                die('NO PUEDES INGRESAR SI ANTES HABER INICIADO SESION');
            }
        }
    }