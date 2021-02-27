<?php
function inverte(&$a , &$b){
    $aux = $b;
    $b = $a;
    $a = $aux;
}


$a  = 5;
$b = 7;
//exibe as variaveis antes da troca
echo "valor de A: $a, Valor de B: $b". PHP_EOL;

//invertendo as posições por referência
inverte($a, $b);

//exibindo valor alterado
echo "Novo valor de A: $a, novo valor de B: $b" . PHP_EOL;