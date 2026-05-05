<?php

declare(strict_types=1);

//Essa função é um Closure, função anônima
//Não é preciso colocar nome na função, apenas na variável
$sum = fn(int|float $number1, int|float $number2): int|float => $number1 + $number2; //versão simplificada arrow function para funções simples

//$sum = function(int|float $number1, int|float $number2, int|float $number3 = 0): int|float {
//    return $number1 + $number2 + $number3;
//};
$number3 = 10;

$sum = function(int|float $number1, int|float $number2) use ($number3): int|float {
    return $number1 + $number2 + $number3;
};

$result = $sum(5, 10);
$sum = 1;

var_dump($result);