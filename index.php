<?php
$nome = 'Gabriel.Ferreira';
for ($i=0; $i < 10; $i++) { 
    echo "Olá $nome <br>";
};

echo '<br>';

 $count = 0;
while ($count <= 10) {
    echo "Olá novamente $nome 😎 <br>";
    $count++;
};

echo '<br>';

$count = 0;
do {
    echo "Olá de novo $nome 🐱‍🏍 <br>";
    $count++;
} while ($count < 10);

echo '<br>';

if (5 > 10) {
    echo "5 realmente é maior que 10, confia 🤔";
} else {
    echo "5 definitivamente não é maior que 10 😎";
};

echo '<br>';

for ($i=0; $i <= 6; $i++) { 
switch ($i) {
    case 0:
        echo "<br> Hoje é Domingo";
        break;

    case 1:
        echo "<br> Hoje é Segunda-Feira";
        break;

    case 2:
        echo "<br> Hoje é Terça-Feira";
        break;

    case 3:
        echo "<br> Hoje é Quarta-Feira";
        break;

    case 4:
        echo "<br> Hoje é Quinta-Feira";
        break;

    case 5:
        echo "<br> Hoje é Sexta-Feira";
        break;

    case 6:
        echo "<br> Hoje é Sábado";
        break;
    default:
        echo "<br> Número inválido";
        break;
};
}
//comentario de linha 
#comentario de linha
/*
comentario 
em 
bloco
*/

//DOCUMENTAÇÃO DO PHP: https://www.php.net/manual/pt_BR/