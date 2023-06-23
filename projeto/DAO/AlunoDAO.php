<?php

include_once '../Model/Postgres.php';
include_once '../Model/Aluno.php';

class AlunoDAO extends Aluno{

    public function __construct(){
        parent::__construct();
    }

    public function createAluno(){
        $postgres = new Postgres('angelo', 'angelo', 'integrador');
        $postgres->criaConexao();

        if(count($this->getFrequencia()) >= 1){
            $query = "insert into alunos (nome, cpf, email, telefone, dataNasc, universidade, ". implode(", ", $this->getFrequencia()) .")";
            $query .= " values( '". $this->getNome() . "', ". $this->getCpf() . ", '". $this->getEmail(). "', ";
            $query .= $this->getTelefone(). ", '" . $this->getDataNasc() . "', " . $this->getUniversidade(). ", '";
            $query .= implode("', '", $this->getFrequencia()) . "');";
        } else{
            
        }

        return $query;
    }
    public function readAluno(){

    }
    public function updateAluno(){

    }
    public function deleteAluno(){

    }

}
