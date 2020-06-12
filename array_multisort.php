<?php
$headers = ['Product','Price'];

$dados = [
    [
        'product' => 'Notebook', 'price' => 3584,
    ],
    [
        'product' => 'Cell', 'price' => 1500,
    ],
    [
        'product' => 'Tv', 'price' => 2000,
    ],
    [
        'product' => 'Headset', 'price' => 450,
    ]
];

//$arquivo = fopen('file_order_by_price.csv','w');
$arquivo = fopen('file_order_by_product.csv','w');
fputcsv($arquivo,$headers);

foreach($dados as $key => $value){
    $product[$key]  = $value['product'];
    $price[$key]  = $value['price'];
}

//Ordernar array dados na coluna produto em ordem crecente
// pode usar SORT_DESC para ordem decrescente
//array_multisort($price,SORT_ASC,$dados);
array_multisort($product,SORT_ASC,$dados);
foreach($dados as $row){
    fputcsv($arquivo,$row);
}

fclose($arquivo);

