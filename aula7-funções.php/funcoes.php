<?php 

declare(strict_types=1);
$name = "Pedro";
$greeting = "Seja bem vindo ao curso \"\"";
$greeting = 'Seja bem vindo ao curso \'\'';
$today = 27;

$message = "Hello world " . $greeting . $name . " hoje é dia " . $today;
$test = 'Hello world $greeting $name hoje é dia ';
//echo $test;

//Funções em PHP
//funçao(argumento)

//date();
//var_dump($message);
//print('Olá');

//echo date('Y-m-d');

count(value: [], mode: 1);

$callback = fn() => 1;
array_reduce([], $callback, initial:1);