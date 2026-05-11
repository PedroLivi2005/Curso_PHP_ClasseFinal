<?php

declare(strict_types=1);

/* Exemplos de constantes em PHP
echo PHP_INT_MIN;
echo PHP_INT_MAX;
echo PHP_OS;
*/

//Criando uma constante
//define('MY_NAME', 'Pedro');
//echo MY_NAME;

$bdName = fn() => 'banco';

define('BD_NAME', $bdName());

function test() {
    echo BD_NAME;
}

test();