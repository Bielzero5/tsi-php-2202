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
$mysqlConsult = $bd->prepare($consult);

/**
 * Afunção $bd->prepare() retorna outra variavel (objeto), essa outra variavel consegue juntar os dados do usuario com a consulta sql
 */

 $mysqlConsult->bindParam('nome', $nome);
 $mysqlConsult->bindParam('turno', $turno);
 $mysqlConsult->bindParam('inicio', $inicio);
 /* 
    A função $mysqlConsult->bindParam() substitui os rótulos (ex: ":nome") pelos dados iinseguros
 */ 