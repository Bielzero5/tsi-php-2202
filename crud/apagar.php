<?php
require_once '../controleDeSessao/controle.php';
require_once '../bancoDeDados/conecta.php';

$id = $_POST['id'] ?? 0;

$id = preg_replace( '/\D/', '', $id);

if ( $bd->exec("DELETE FROM alunos WHERE id = $id") ){

    $apagou = true;

}else{

    $apagou = false;
}

include 'index.php';