<?php

$idade = 18;

//$result = $idade >= 18 || $idade <= 60;
//$result = !$idade >= 18;
//$result = (1 == 1 and 2 == 3);

$result = (1 == 2 xor 1 == 2);

var_dump($result);

// || e or é verdadeiro se uma das condições forem verdadeiras

// && é verdadeiro se todas as condições forem verdadeiras

// ! antes da variável para inverter a condição

// para o and funcionar sem problemas de precedência é preciso usar ()

// xor é verdadeiro se um ou mais forem verdadeiros mas não todos, xor é falso se um ou mais forem falsos mas não todos. Mesma regra dos parênteses