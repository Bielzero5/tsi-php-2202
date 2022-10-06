<?php
require_once '../formulario/bancodedados/conecta.php';

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$user = [$nome, $turno, $inicio];

foreach ($user as $key => $value) {
    echo '<br><br>'.$value;
}


$consult = "INSERT INTO ADMINISTRADOR(nome, turno, inicio) 
VALUES(:nome, :turno, :inicio)";
$bd->prepare($consult);