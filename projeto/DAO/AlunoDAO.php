<?php

include_once '../Model/Postgres.php';
include_once '../Model/Aluno.php';

class AlunoDAO extends Aluno{

    public function __construct(){
        parent::__construct();
    }

    public function createAluno(){

        try{
            $postgres = new Postgres('angelo', 'angelo', 'integrador');
            $postgres->criaConexao();
            $query = "";

            if(count($this->getFrequencia()) >= 1){
                $query = "insert into alunos (nome, cpf, email, telefone, dataNasc, universidade, ". implode(", ", $this->getFrequencia()) .")";
                $query .= " values( '". $this->getNome() . "', ". $this->getCpf() . ", '". $this->getEmail(). "', ";
                $query .= $this->getTelefone(). ", '" . $this->getDataNasc() . "', " . $this->getUniversidade(). ", '";
                $query .= implode("', '", $this->getFrequencia()) . "');";
            } else{
                $query = "insert into alunos (nome, cpf, email, telefone, dataNasc, universidade)";
                $query .= " values( '". $this->getNome() . "', ". $this->getCpf() . ", '". $this->getEmail(). "', ";
                $query .= $this->getTelefone(). ", '" . $this->getDataNasc() . "', " . $this->getUniversidade() . ")";
            }

            $insert = $postgres->getConexao()->prepare($query);

            if($insert->execute()){
                header('Location: ../View/cadastroAluno.php?cadastro=success');
            }else{
                header('Location: ../View/cadastroAluno.php?cadastro=error');
            }

        }catch (Exception $e){
            return $e->getMessage();
        }
    }
    public function readAluno(){

    }
    public function updateAluno(){

    }
    public function deleteAluno(){

    }

}
