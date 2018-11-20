<?php
    require_once 'Trabajador.php';

class Mozo extends Trabajador{
    private $numMesasAsignadas;
    private $inicioMesa;

    public function __construct(){
        parent::__construct();
    }

    public function setNumMesasAsigandas($numMesasAsignadas){
        $this->numMesasAsignadas=$numMesasAsignadas;
    }

    public function getNumMesasAsigandas(){
        return $this->numMesasAsignadas;
    }

    public function setInicioMesa($inicioMesa){
        $this->inicioMesa=$inicioMesa;
    }

    public function getInicioMesa(){
        return $this->inicioMesa;
    }

}