<?php
include_once '../Model/Universidade.php';
include_once '../Model/Postgres.php';

class UniversidadeDAO extends Universidade{
    public function __construct(){
        parent::__construct();
    }


    public function readUniversidade($query){
        $postgres = new Postgres('angelo', 'angelo', 'integrador');
        $postgres->criaConexao();
        $consulta = $postgres->getConexao()->query($query);
        $consulta = $consulta->fetchAll();
        return $consulta;

    }

}