<?php
require_once '../formulario/bancodedados/conecta.php';

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consult = "INSERT INTO alunos(nome, turno, inicio) 
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

 /**
  * Executa a consulta
  */
  if( $mysqlConsult->execute()) {
    echo "Inserido com sucesso";
  } else {
    echo "Falhou";
  }
  
