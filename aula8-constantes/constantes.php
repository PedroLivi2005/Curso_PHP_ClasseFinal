<?php

declare(strict_types=1);
//As constantes diferenciam maiúsculas de minúsculas*. Por convenção, identificadores de constantes são sempre em maiúsculas.
//*Antes do PHP 8.0.0, as constantes definidas usando a função define() podem não diferenciar maiúsculas de minúsculas.

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