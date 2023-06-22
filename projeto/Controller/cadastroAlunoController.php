<?php
include_once '../DAO/AlunoDAO.php';

$aluno = new AlunoDAO();


if(array_key_exists('segunda', $_POST))  $aluno->setFrequencia($_POST['segunda']);
if(array_key_exists('terca', $_POST)) $aluno->setFrequencia($_POST['terca']);
if(array_key_exists('quarta', $_POST)) $aluno->setFrequencia($_POST['quarta']);
if(array_key_exists('quinta', $_POST)) $aluno->setFrequencia($_POST['quinta']);
if(array_key_exists('sexta', $_POST)) $aluno->setFrequencia($_POST['sexta']);



//print_r($aluno->getFrequencia());