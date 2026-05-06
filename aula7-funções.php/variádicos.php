<?php

declare(strict_types=1); //habilitar o modo de tipagem estrita

//1- Dessa forma com o array a função vai aceitar parâmetros de diferentes tipos, mas irá apresentar erro se houver cálculos:
/*
function sum(array $numbers): void{
    $numbers = func_get_args();//Essa função retorna um array contendo todos os argumentos passados para uma função definida pelo usuário
    var_dump($numbers);
}
sum([1,2,3,4, 'c']);
*/

//2- Restringir os parâmetros de mesmo tipo
//O parâmetro que receber argumentos variádicos "...", deve ser o último
function sum(int $exponent, int $divisor, int|float ...$numbers): void{
    var_dump($numbers);
}

sum(1, 2, 3, 4, 6.5);
