<?php

declare(strict_types=1);

$array = [10, 15, 20, 35, 40];
$array2 = ['ana', 'maria', 'pedro', 'claudia'];
$array3 = [
    [
        'id' => 1,
        'name' => 'Pedro',
        'sex' => 'M',
        'age' => 40

    ],
    [
        'id' => 2,
        'name' => 'Maria',
        'sex' => 'F',
        'age' => 40
    ],
    [
        'id' => 3,
        'name' => 'Francisco',
        'sex' => 'M',
        'age' => 50
    ]
];
/*
$result = array_filter($array, function(int $value): bool {
    return $value >= 15 && $value < 40;
});*/

/*
$filter = fn(int $value): bool => $value >= 15 && $value < 40;
$result = array_filter($array, $filter);*/
/*
function filterArray(int $value): bool {
    return $value >= 15 && $value < 40;
}
$result = array_filter($array, 'filterArray');*/

/*
$result = array_filter($array, function(int $value, int $key): bool {
    return $value > 15 && $key < 4;
}, ARRAY_FILTER_USE_BOTH);*/
/*
$result = array_filter($array2, function(string $value, int $key): bool {
    return str_ends_with($value, 'a') || $key < 4;
}, ARRAY_FILTER_USE_BOTH);*/
$result = array_filter($array3, function(array $value, int $key): bool {
    return $value['sex'] === 'M' && $value['age'] > 30 && $key > 2;
}, 1);  

var_dump($result);

//Modos;
//ARRAY_FILTER_USE_KEY ou 2 recebe o valour do index
//ARRAY_FILTER_USE_BOTH OU 1 

//A função array_values() no PHP é utilizada para retornar todos os valores de um array, reindexando-os numericamente [0, 1, 2, ...].
//var_dump(array_values($result));