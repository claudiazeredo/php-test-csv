<?php
$cabecalho = ['Produto','Preço'];

$dados = [
    [
      'produto' => 'Notebook', 'preco' => 3584,
    ],
    [
        'produto' => 'Celular', 'preco' => 1500,
    ],
    [
        'produto' => 'Tv', 'preco' => 2000,
    ],
    [
        'produto' => 'Fone de Ouvido', 'preco' => 450,
    ]
];

$arquivo = fopen('file.csv','w');
fputcsv($arquivo,$cabecalho);
foreach($dados as $linha){
    fputcsv($arquivo,$linha);
}

fclose($arquivo);