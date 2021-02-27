<?php


function exibemensagem($msg){
    echo $msg . PHP_EOL;
}


exibemensagem('hello world');


function SOMA(int $a, int $b){
    return $a+$b;
}


echo soma(7,3).PHP_EOL;