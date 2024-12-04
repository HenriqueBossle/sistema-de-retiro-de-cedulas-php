<?php

$cedulas = [
    5,
    10,
    20,
    50,
    100,
];

echo "Cedulas disponiveis: ".implode(', ',$cedulas)."\n"; 

$valorSaque = readline('Digite o valor para saque: ');

if($valorSaque % $cedulas[0] > 0){
    die('O valor solicitado não pode ser atendido pelas celulas disponiveis');
}

$valorRestante = $valorSaque;

$cedulasSaque = [];

rsort($cedulas);

foreach($cedulas as $cedula) {
    if($cedula > $valorRestante) continue;

    $quantidade = floor($valorRestante / $cedula);

    $valorRestante -= ($cedula * $quantidade);

    $cedulasSaque[$cedula] = $quantidade;
    
}

echo "\nSaque de R$".$valorSaque."\n";

foreach($cedulasSaque as $cedula => $quantidade){
    echo " > ".$quantidade."X R$". $cedula."\n";
}
