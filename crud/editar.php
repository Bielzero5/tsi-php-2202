<?php
require_once '../bancoDeDados/conecta.php';

$id = $_POST['id'] ?? 0;

$stmt = $bd->prepare('  SELECT id, nome, turno, inicio 
                        FROM   alunos 
                        WHERE  id = :id');
$stmt->bindParam(':id', $id);

$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

require_once 'formEditar.php';


