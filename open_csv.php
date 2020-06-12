<?php

$handle = fopen('nota.csv','r');

$header = fgetcsv($handle,1000,",");

while($row = fgetcsv($handle,1000,",")){
    $nota[] = array_combine($header,$row);
}

print_r($nota);

fclose($handle);