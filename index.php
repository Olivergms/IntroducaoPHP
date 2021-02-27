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

//tag br pula  linha no browser
echo " \n idade:". $idade . "Anos" . '<br>';

echo "idade: \"$a\" anos" . '<br>';

echo "idade $idade anos";