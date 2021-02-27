<?php

$array = [9,8,7,6,5,4];

//salva em uma variavel os 3 primeiros da lista
list($um, $dois, $tres) = $array;

echo "removidos do array: $um, $dois, $tres";

//removendo um item do array

unset($array[0]);

//exibindo array alterado
var_dump($array);