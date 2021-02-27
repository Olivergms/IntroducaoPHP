<?php
//cho 'hello world';

//variaveis
//$idade = 25;

//echo $idade
$anoAtual=2021;
$AnoNascimento = 1995;
$idade = $anoAtual - $AnoNascimento;

echo $idade;
//obtendo tipo
echo gettype($idade);

$a = 'adriano';

//concatenando string
echo " \n idade:". $idade . "Anos" . PHP_EOL;

echo "idade: \"$a\" anos" . PHP_EOL;

echo "idade $idade anos";