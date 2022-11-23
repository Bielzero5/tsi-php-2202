<?php
require_once '../bancoDeDados/conecta.php';

$email = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

$stmt = $bd->prepare("  SELECT 
                            nome, senha 
                        FROM 
                            usuarios
                        WHERE
                            email = :email ");

$stmt->bindParam(':email', $email);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

$autenticou = false;

if( isset($usuario['nome']) ){

    if( password_verify( $senha, $usuario['senha']) ){

        session_start();
        $_SESSION['id'] = $email;
        
        header('Location: /tsi-php-2202/menu');
    }
}

include 'index.php';