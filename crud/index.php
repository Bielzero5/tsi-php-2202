<?php
require_once '../formulario/bancodedados/conecta.php';

$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos');

while($saida = $stmt->feTCh(PDO::FETCH_ASSOC)) {
    
    
    echo '
                <tr>
                    <td>'. $saida['id']. '</td> -
                    <td>'. $saida['nome']. '</td> -
                    <td>'. $saida['turno']. '</td> -
                    <td>'. $saida['inicio']. '</td>
                </tr>
                <br>
    ';
}