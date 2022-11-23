<?php
require_once '../controleDeSessao/controle.php';

require_once '../bancoDeDados/conecta.php';

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consulta = 
    $bd->prepare('  INSERT INTO alunos 
                        (nome, turno, inicio)
                    VALUES
                        (:nome, :turno, :inicio)');

$consulta->bindParam(':nome', $nome);
$consulta->bindParam(':turno', $turno);
$consulta->bindParam(':inicio', $inicio);

if( $consulta->execute() ){
    $gravou = true;
}else{
    $gravou = false;
}
include 'index.php';