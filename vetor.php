<?php

$diadasemana = array (0 =>'domingo',
1 => 'segunda' ,
2 => 'terça',
3 => 'quarta',
4 => 'quinta',
5 => 'sexta',
6 => 'sabado');


$aluno =[0 => ['matricula' => 41217,
 'nome' => 'joao',
  'semestre' => 2],
  1 => ['matricula' => 41218,
   'nome' => 'maria',
    'semestre' => 3]];

echo  "<table border = 1>
    <tr>
        <td>matricula</td><td>nome</td>
        <td>semestre</td>
    </tr>
";

for($i = 0 ; $i < count($aluno); $i++) {
    echo " <tr>
    <td>{$aluno[$i]['matricula']}</td>
    <td>{$aluno[$i]['nome']}</td>
     <td>{$aluno[$i]['semestre']}</td>
    </tr>";
}

foreach ($aluno as $ind => $val) { 
    echo "
        <tr>
            <td>{$val['matricula']}</td>
            <td>{$val['nome']}</td>
            <td>{$val['matricula']}</td>
        </tr>";
};
echo "</table>";