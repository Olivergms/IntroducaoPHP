<?php
// importando arquivo não obrigatorio
//include 'funcoes.php';


//importando arquivo obrigatório
require 'funcoes.php';

//verifica se o arquivo foi importado
require_once 'funcoes.php';

for($i = 0; $i<=100; $i++){
    if($i %2 == 0){
        echo $i . PHP_EOL;
    }
}

echo soma(3, 2);