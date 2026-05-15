<?php
//Mapeando Arrays com ARRAY_MAP

declare(strict_types=1); //modo de tipagem estrita

/*A função array_map() aplica uma função de retorno de chamada (callback) a cada elemento de um ou mais arrays, retornando um novo array com os valores modificados. O array original permanece intacto.*/

$users = [
    [
        'name' => 'Pedro',
        'age' => 30
    ],
    [
        'name' => 'Maria',
        'age' => 40
    ],
    [
        'name' => 'Carlos',
        'age' => 50
    ]
];
$result = array_map(function(array $user) {
    return $user['age'];
}, $users);

var_dump($result);

/*
//Exemplo 1
$names = ['Joao', 'Maria', 'Pedro'];
$result = array_map('strtoupper', $names);

var_dump($result);
*/
/*
//Exemplo 2
$prices = [5, 10, 3];
$result = array_map(function(int $value) {
    return $value * 2;
}, $prices);

var_dump($result);
*/
/*
//Exemplo 2 com arrow functions
$prices = [5, 10, 3];

$result = array_map(fn (int $value) => $value * 2, $prices);

var_dump($result);
*/

//Exemplo 3
/*
$prices = [5, 10, 3];

$handler = fn (int $value) => $value * 2;
$result = array_map($handler, $prices);

var_dump($result);
*/
/*
//Exemplo 4
function handler(int $value) {
    return $value * 2;
}
$result = array_map('handler', $prices);

var_dump($result);
*/
/*
//Exemplo 5
$names = ['Joao', 'Maria', 'Pedro', 'Carlos'];
$prices = [5, 10, 3];

$result = array_map(function(string $name, ?int $price) {
    return "O usuário $name possui um total de $price";
}, $names, $prices);

var_dump($result);
*/
/*
//Exemplo 6
$names = ['Joao', 'Maria', 'Pedro'];
$ids = [5, 10, 3];

$result = array_map(function(string $name, int $id) {
    return [
        'name' => $name,
        'id' => $id
    ];
}, $names, $ids);

var_dump($result);
*/