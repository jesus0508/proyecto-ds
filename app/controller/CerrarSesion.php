<?php
class CerrarSesion{
    public function __construct(){}
    
    public function index(){
        Session::init();
        Session::close();
        header('location: ../LoginController');
    }
}