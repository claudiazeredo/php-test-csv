<?php
$handle = fopen('turma.csv','w');

$header = ['Nome','Matricula','Endereco'];

$data = [
    ['nome' => 'Maria', 'matricula' => '123456', 'endereco' => 'Rua x'],
    ['nome' => 'Jose', 'matricula' => '254893', 'endereco' => 'Rua y'],
    ['nome' => 'Joao', 'matricula' => '785462', 'endereco' => 'Rua z'],
    ['nome' => 'Celso', 'matricula' => '214587', 'endereco' => 'Rua 24'],
    ['nome' => 'Jorge', 'matricula' => '365845', 'endereco' => 'Rua 32'],
];

$campo = readline('Qual campo deseja ordenar (nome, matricula, endereco): ');
$ordenacao = readline('Ascendente (asc) ou Descendente (desc): ');

foreach($data as $key => $value){
    $column[$key] = $value[$campo];
}

if ($ordenacao == 'asc'){
    array_multisort($column,SORT_ASC,$data);
}else{
    array_multisort($column,SORT_DESC,$data);
}

foreach($data as $row){
    fputcsv($handle,$row);
}

fclose($handle);


