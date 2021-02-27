<?php

$idades =[5,3,5,7,6,3,4,89,456];

    for($i=0; $i<count($idades); $i++){
        echo $idades[$i]. PHP_EOL;
    }

//adicionando dados a um array

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






