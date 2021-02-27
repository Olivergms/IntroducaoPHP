<?php


function exibemensagem($msg){
    //função para converter todas as letras para letras maiusculas
    $msg = mb_strtoupper($msg);

    echo $msg . PHP_EOL;

}


exibemensagem('hello world');


function SOMA(int $a, int $b){
    return $a+$b;
}


echo soma(7,3).PHP_EOL;