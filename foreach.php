<?php

$conta1 = [
    'nome' => 'adriano',
    'numero' =>12334
]; 

$conta2 = [
        'nome' => 'valeria',
        'numero' =>187678
];

$conta3 = [
    'nome' => 'julieta',
    'numero' =>1231231
];

$contas = [$conta1, $conta2, $conta3];

foreach($contas as $conta){
    echo $conta['nome'].PHP_EOL;
}

print_r($contas);